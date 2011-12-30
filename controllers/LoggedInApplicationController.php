<?php
class LoggedInApplicationController extends ApplicationController {

    function __construct() {
	parent::__construct();
	$this['actions'] = array(
	    'index' => 'Rsvp Stats',
	    'guest-list' => 'Guest List',
	);

    }//__construct

   static function doLogin($username, $pass) {

        if(!self::haveActiveLogin()) {

            $user = User::retrieveByUserName($username);

            if(User::passwordCompare($pass, $user->getPassword())) {

                //create session record
                $s = new Session;
                $s->setSessionHash(Session::getUniqueSessionId());
                $s->setUserAgent($_SERVER['HTTP_USER_AGENT']);
                $s->setIpAddress($_SERVER['REMOTE_ADDR']);
                $s->setUserId($user->getUserId());
                $s->save();

                //save hash to session
                $_SESSION['sessionId'] = $s->getSessionHash();
            }
        }
    }//doLogin()

    static function doLogout() {
        if(self::haveActiveLogin()) {
            $s = Session::retrieveBySessionHash(self::getCurrentSessionId());
            $s->endSession();
            session_destroy();
            return true;
        }

        return false;
    }//doLogout()

    static function getUser() {
        if($s = Session::retrieveBySessionHash(self::getCurrentSessionId())) {
            return $s->getUserRelatedByUserId();
        }
        return false;
    }//getUser()

    static function getUserId() {
        if($s = Session::retrieveBySessionHash(self::getCurrentSessionId())) {
            return $s->getUserId();
        }
        return false;
    }//getUserId()

    static function getCurrentSessionId() {
        return (isset($_SESSION['sessionId'])) ? $_SESSION['sessionId'] : false;
    }//getCurrentSessionId()

    static function haveActiveLogin() {
        return (bool)(self::getCurrentSessionId() && Session::sessionIdIsActive(self::getCurrentSessionId()));
    }//haveActiveLogin()

}//class LoggedInApplicationController