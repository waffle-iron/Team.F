<?php

/**
 * MySQL data base connection class
 * @author: Timur Misharin
 * @version: 0.1
 */
class db
{
    private $db;

    public function __construct($host,$user,$pass,$db){
        $this->db = mysqli_connect($host,$user,$pass);
        if(!$this->db){
            exit("No data base connection");
        }
        if(!mysqli_select_db($db,$this->db)){
            exit("No table");
        }
        mysqli_query("SET NAMES cp-1251");

        return $this->db;
    }

    public function get_all_db(){

    }
    public function get_one_db(){

    }
}