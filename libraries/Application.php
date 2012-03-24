<?php

class Application {

    static function doLogin($username, $pass) {

        $user = User::retrieveByUserName($username);

        if($user && User::passwordCompare($pass, $user->getPassword())) {

            //create session record
            $s = new Session;
            $s->setSessionHash(Session::getUniqueSessionId());
            $s->setUserAgent($_SERVER['HTTP_USER_AGENT']);
            $s->setIpAddress($_SERVER['REMOTE_ADDR']);
            $s->setUserId($user->getUserId());
            $s->save();

            //save hash to session
            Application::setSessionVar('sessionId', $s->getSessionHash());
            return true;
        }

        return false;

    }//doLogin()

    static function doLogout() {
        if(Application::haveActiveLogin()) {
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

    static function setSessionVar($key, $val) {
        $_SESSION[$key] = $val;

    }//setSessionVar()

    static function getSessionVar($key) {
        return (!empty($_SESSION[$key])) ? $_SESSION['key'] : null;

    }//getSessionVar()

}//class Application