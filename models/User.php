<?php

class User extends baseUser {

    static function passwordEncrypt($salt, $plain_text_password) {
        return $salt . ( hash('whirlpool', $salt . $plain_text_password) );
    }//passwordEncrypt()

    static function passwordSalt() {
        return substr(str_pad(hexdec(mt_rand()), 8, '0', STR_PAD_LEFT), 0, 8);
    }//passwordSalt()

    static function passwordCompare($plain_text_password, $encrypted_password) {
        $salt = substr($encrypted_password, 0, 8);
        $plain_encrypted = self::passwordEncrypt($salt, $plain_text_password);
        return (bool)($encrypted_password == $plain_encrypted);
    }//passwordCompare()
}
