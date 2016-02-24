<?php
namespace GlobalEAPI\Api;

interface iSearch{

    /*
     * Searches by keywords (separated by space)
     */
    public function search($keywords);
    
}