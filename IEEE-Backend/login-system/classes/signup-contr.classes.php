<?php

class SignupContr extends Signup{
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid , $pwd , $pwdrepeat , $email){
        $this->uid =$uid;
        $this->pwd =$pwd;
        $this->pwdrepeat =$pwdrepeat;
        $this->email =$email;
    }
    public function signupuser(){
        if ($this->emptyInput() == false ){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false ){
            header("location: ../index.php?error=invalidUid");
            exit();
        }
        if ($this->invaildEmail == false ){
            header("location: ../index.php?error=invaildEmail");
            exit();
        }
        if ($this->pwdMatch == false ){
            header("location: ../index.php?error=pwdMatch");
            exit();
        }
        if ($this->UidTakenCheck == false ){
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid ,$this->pwd ,$this->email);
    }
    private function emptyInput(){
        $result;
        if(empty($this->uid)  || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)){
            $result = false;
        }
        else{
            $result = true ;
        }
        return $result 
    }
    private function invalidUid(){
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/"),$this->uid){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result ;
    }
    private function invaildEmail(){
        $result;
        if (!filter_var($this->email ,FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    private function pwdMatch(){
        $result;
        if($this->pwd !== $this->pwdrepeat){
            $result = false ;
        }
        else {
            $result = true ;
        }
        return $result ;
    }
    private function uidTakenCheck(){
        $result;
        if($this->Checkuser($this->uid ,$this->email)){
            $result = false ;
        }
        else {
            $result = true ;
        }
        return $result ;
}
