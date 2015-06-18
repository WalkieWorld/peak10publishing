<?php
/**
 * Created by PhpStorm.
 * User: HZ
 * Date: 3/4/2015
 * Time: 2:03 PM
 */

namespace server;


class DBConnector
{
    private
        $db_hostname = "localhost",
        $db_database = "afffrog_affiliate_survivalfrog",
        $db_username = "afffrog_wp540",
        $db_password = "123456";

    public function get_db_server()
    {
        $db_server = mysql_connect($this->db_hostname, $this->db_username, $this->db_password);
        if(!$db_server){
            return die("Unable to connect to MySQL:" . mysql_error());
        }else{
            return $db_server;
        }
    }
}