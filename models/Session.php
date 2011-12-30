<?php

class Session extends baseSession {

    function endSession() {
        $this->setTerminated(date('Y-m-d h:i:s'));
        return $this->save();
    }//endSession()

    static function getUniqueSessionId() {
        $isUnique = false;

        while(!$isUnique) {
            $q = new Query;
            $hash = self::generateHash();
            $q->add(Session::SESSION_HASH, $hash);
            $isUnique = (self::doCount($q) == 0) ? true : $isUnique;
        }

        return $hash;
    }//getUniqueSessionId()

    static function generateHash() {
        return hash('sha256', microtime(true));
    }//generateHash()

    static function sessionIdIsActive($hash) {
        if($s = self::retrieveBySessionHash($hash)) {
            return is_null($s->getTerminated());
        }

        return false;
    }//sessionIdIsActive()

}//class Session
