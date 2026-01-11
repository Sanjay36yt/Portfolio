<?php
include "../__db_conn/db.php";
//include "./__404_redirect.php";

//block_page();

class _connect_sql{
    private $c_username;
    private $c_email;
    private $c_pass; // the value form the user
    private $c_re_pass;

    private $c_data_conn; // sql connection info

    private $c_db_pass ; // used to save the passw from db to check


    public function __construct() {
       
        $this->c_data_conn = $GLOBALS['data_base_con']; //asign the connection information to the class variable
    }




    public function __login_data_($login_email,$login_pass){
        $this->c_email = $login_email;
        $this->c_pass = $login_pass;
        $this->__login_sql_conn_();

    }// function __login_data_ // end

    public function __login_sql_conn_(){
        $db_conn = $this->c_data_conn;
        $stmt = $db_conn->prepare("SELECT pssword FROM dashbord WHERE email = ?");
        $stmt->bind_param("s", $this->c_email);
        $stmt->execute();
        $stmt->store_result();

        

        if($stmt->num_rows > 0){
            $stmt->bind_result($this->c_db_pass);
            $stmt->fetch();

                if(password_verify($this->c_pass ,$this->c_db_pass)){
                   
                    return true;
                }
                else{
                    
                    return false;
                }
         }else{
            
            return false;
        }

      
    }// function __login_sql_conn_ //end

}// class end



?>