<?php
        class DB_conection{
       private $_mysqli,
               $_query,
               $results = array(),
               $_count =0 ;

       public static $instance;

       public static function getInstance(){
           if(!isset(self::$instance)){
               self::$instance = new DB_coonection();
           }
           return self::$instance;
       }
       public function __construct(){
          $this->_mysqli = new mysqli('localhost','root','','online_examination_system');
        if($this->_mysqli->connect_error){
            die($this->_mysqli->connect_error);
       }

        }


       public function query($sql){
           if($this->_query=  $this->_mysqli->query($sql)){     
               while ($row = $this->_query->fetch_object()){
                   $this->results[]=$row;
               }
               $this->_count = $this->_query->num_rows;
           }
           return $this;
       }
       public function results(){
           return$this->results;
       }
       public function count(){
           return$this->_count;
       }
        }
		?>