<?php 
    class Connection{
        var $conn;

        function __construct()
        {
            //Thong so ket noi CSDL
            //Host heroku
            $severname ="ltnya0pnki2ck9w8.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
            $username ="vmaa4opycpakkbpn";
            $password ="rdh3nusdib7eppu9";
            $db_name ="bgjvxnm3vmpseadd";
            $port= 3306;

            //Tao ket noi CSDL
            $this->conn = new mysqli($severname,$username,$password,$db_name,$port);
            $this->conn->set_charset("utf8");

            //check connection
            if ($this->conn->connect_error) {
		        die("Connection failed: " . $this->conn->connect_error);
		    }
        }
    }

?>