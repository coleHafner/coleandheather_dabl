#!/usr/bin/php -q
<?php

require_once('../../config.php');
ini_set('auto_detect_line_endings', true);

$file = 'guests.csv';
$fp = fopen($file, 'r');
$data = array();

$keys = array(
    'first_name',
    'last_name',
    'guest_type_1',
    'guest_type_2',
    'guest_type_3',
    'address_street',
    'address_city',
    'address_state',
    'address_zip',
);

$special_guest_types = array(
    'vip',
    'groomsmen',
    'bridesmaid',
    'maid-of-honor',
    'best man',
);

//get raw data
while (!feof($fp)) {

    $line = fgets($fp, 4096);

    if (strlen(trim(str_replace(',', '', $line))) > 0) {

        $values = explode(',', $line);
        $guest = array_combine($keys, array_slice($values, 0, 9));

        $first_names = array($guest['first_name']);
        if (strpos($guest['first_name'], '&') !== false) {
            $first_names = explode('&', $guest['first_name']);
        }

        $last_names = array($guest['last_name']);
        if (strpos($guest['last_name'], '/') !== false) {
            $last_names = explode('/', $guest['last_name']);
        }

        //import guests
        for ($i = 0; $i < count($first_names); $i++) {

            $address = null;

            if (!empty($guest['address_street']) &&
                !empty($guest['address_city']) &&
                !empty($guest['address_state']) &&
                !empty($guest['address_zip'])) {

                //check duplicate
                $query = new Query;
                $query->add(Address::STREET_ADDRESS, $guest['address_street']);
                $query->add(Address::STATE, $guest['address_state']);
                $query->add(Address::CITY, $guest['address_city']);
                $query->add(Address::ZIP, $guest['address_zip']);
                $result = Address::doSelect($query);
                $address = array_shift($result);

                if(!$address) {
                    $address = new Address;
                    $address->setStreetAddress($guest['address_street']);
                    $address->setState($guest['address_state']);
                    $address->setCity($guest['address_city']);
                    $address->setZip($guest['address_zip']);
                    $address->setActive(Address::STATUS_ACTIVE);
                    $address->save();

                    echo "Added address: " . $address->getStreetAddress() . " " . $address->getCity() . " " . $address->getState() . " " . $address->getZip() . "\n";

                }//dup address

            }//valid address

            $first_name = trim($first_names[$i]);
            $last_name = (isset($last_names[$i])) ? trim($last_names[$i]) : trim($last_names[0]);

            //check duplicate
            $query = new Query;
            $query->add(Guest::FIRST_NAME, $first_name);
            $query->add(Guest::LAST_NAME, $last_name);
            $result = Guest::doSelect($query);
            $g = array_shift($result);

            if(!$g) {

                $g = new Guest;
                $g->setFirstName($first_name);
                $g->setLastName($last_name);
                $g->setInitialTimestamp(strtotime('now'));
                $g->setActive(Guest::STATUS_ACTIVE);

                if($address) {
                    $g->setAddressId($address->getAddressId());
                }

                $g->save();

                echo "Added Guest: " . $g->getFirstName() . " " . $g->getLastName() . "\n";

                //parent guest id
                if($i == 0) {

                    $parent_guest_id = $g->getGuestId();

                    //you only get an activation code if you're a parent guest
                    $code = Guest::getUniqueActivationCode($guest['first_name']);
                    $g->setActivationCode($code);

                }else {
                    $g->setParentGuestId($parent_guest_id);
                }

                $g->save();

            }else {
                if(!$g->getParentGuestId()) {
                    //update activation code
                    $new_code = Guest::getUniqueActivationCode($guest['first_name']);
                    $g->setActivationCode($new_code);

                }else {
                    $g->setActivationCode(null);
                }

                $g->save();
            }

            $guest_types = array(
                $guest['guest_type_1'],
                $guest['guest_type_2'],
                $guest['guest_type_3'],
            );

            foreach($guest_types as $gt) {

                //guest types
                if(strlen($gt) > 0) {

                    $gt = ucwords(strtolower($gt));

                    //check duplicate
                    $query = new Query;
                    $query->add(GuestType::TITLE, $gt);
                    $result = GuestType::doSelect($query);
                    $guest_type = array_shift($result);

                    if(!$guest_type) {

                        $guest_type = new GuestType;

                        //are you a special guest type?
                        if(in_array(strtolower($gt), $special_guest_types)) {
                            $guest_type->setIsSpecial(GuestType::SPECIAL_YES);

                        }else {
                            $guest_type->setIsSpecial(GuestType::SPECIAL_NO);
                        }

                        $guest_type->setTitle($gt);
                        $guest_type->setActive(GuestType::STATUS_ACTIVE);
                        $guest_type->save();
                        echo "Added Guest Type: " . $guest_type->getTitle() . "\n";
                    }

                    //check duplicate
                    $query = new Query;
                    $query->add(GuestToGuestType::GUEST_ID, $g->getGuestId());
                    $query->add(GuestToGuestType::GUEST_TYPE_ID, $guest_type->getGuestTypeId());
                    $result = GuestToGuestType::doSelect($query);
                    $g2gt = array_shift($result);

                    if(!$g2gt) {

                        $g2gt = new GuestToGuestType;
                        $g2gt->setGuestId($g->getGuestId());
                        $g2gt->setGuestTypeId($guest_type->getGuestTypeId());
                        $g2gt->save();

                    }//if no duplicate found

                }//if we have a valid guest type

            }//loop through guest types

        }//loop through first names

    }//if we have a valid record

}//loop through lines