<?php
namespace GlobalEAPI\Api;

class Customer extends API implements iSearch{

    const MAX_RESULTS = 10;

    public function search($keywords){

        $keywords = explode(' ',$keywords);
        $results = array();
        foreach($keywords as $keyword){

            $keyword = $this->_db->quote("%$keyword%");
            $q = $this->_db->query("SELECT * FROM customers
                                    WHERE `FirstName` LIKE $keyword OR `LastName` LIKE $keyword
                                    LIMIT " . SELF::MAX_RESULTS);

            while(count($results) < self::MAX_RESULTS){
                if($r = $q->fetch()){
                    $results[] = $r;
                }
                else
                    break;
            }

            if(count($keywords) === self::MAX_RESULTS)
                break;
        }

        return json_encode($results);
    }

}