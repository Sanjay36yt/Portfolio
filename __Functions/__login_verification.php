<?php
include "./__connect_sql.php";

class __input_verification_{ //input validatrion and refine data

  private  $cEmail;
  private  $cPassword;
  private  $cMethod;
  private $cPost_count;

  private $email_pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/u";
  private $pass_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%#()*?&])[A-Za-z\d@$#()!%*?&]{8,}$/";

    public function __set_data_to($email,$password,$method,$p_count,){ //data assigning method
    $this->cEmail = $email;
    $this->cPassword = $password;
    $this->cMethod = $method;    
    $this->cPost_count = $p_count;   
    $this->__check_up_stage_one();
         }
    
       private function __check_up_stage_one(){ //used to check the method and count_input and not_null
      if(($this->cEmail)=='' or ($this->cPassword)=='' or ($this->cPost_count)>'2' or ($this->cMethod)!="POST" ){
        sleep(5); 
        header("Location: ../login.php");
      }
      else{
        $this->__check_regx_($this->cEmail,$this->cPassword);
      }
  }

  //check email , pass
  private function __check_regx_($check_eamil,$check_pass){
    if (preg_match($this->email_pattern,$check_eamil) and preg_match($this->pass_pattern,$check_pass) ){
      $this->__send_to_sql();
      
    }
    else{
      $message = urlencode("Invalid email or password. Dont use : ; '< > ");
    header("Location: ../login.php?message=$message");
    }
  }

  private function __send_to_sql(){
      $send_data_login = new _connect_sql();
      $send_data_login->__login_data_($this->cEmail,$this->cPassword);
      if($send_data_login->__login_sql_conn_() == true){
        session_start();
        $_SESSION['email'] = $this->cEmail;
        header("Location: ../dash.php");
        exit();
      }
      else {
        $message = urlencode("Invalid email or password.");
        header("Location: ../login.php?message=$message");
        exit();
      } 
     
  }


}// class end





// main function

$login_eamil = $_POST["email"];
$login_password = $_POST["password"];
$login_method = $_SERVER['REQUEST_METHOD'];
$login_post_count = count($_POST);

$login = new __input_verification_();
$login->__set_data_to($login_eamil,$login_password,$login_method,$login_post_count);



?>