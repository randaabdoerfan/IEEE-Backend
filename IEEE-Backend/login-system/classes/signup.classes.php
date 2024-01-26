<?php
class Signup extends Dbh {
    protected function setUser($uid ,$email){
        $stmt = $this ->connect()->prepare('INSERT INTO users(uesrs_uid , users_pwd , users_email) VALUES(? ,? ,?);');
        $hashedPwd=password_hash($pwd ,PASSWORD_DEFAULT);
    
    if(stmt->excute(array($uid ,$hashedPwd ,$email))){
        stmt=NULL;
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    stmt=NULL;
    }
    protected function checkuser($uid ,$email){
        $stmt = $this ->connect()->prepare(' SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?');
    
    if(!$stmt->excute(array($uid ,$email))){
        stmt=NULL;
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    $resultCheak;
    if(stmt->rowcount()){
        $resultCheak = false ;
    }
    else {
        $resultCheak = true ;
    }
    return $resultCheak;

    }