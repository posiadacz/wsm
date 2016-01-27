<?php

class Wsm_Db_Users{
    
    public function check($login, $password){
        $q = 'select * from users where user_login="' . $login . '" and user_haslo="' . $password . '" limit 1';
        $rows = Wsm_Db::getInstance()->query($q);
        return count($rows) > 0;
    }
    
}