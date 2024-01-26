<?php
class Login extends Dbh {
    protected function getUser($uid ,$email){
        $stmt = $this ->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid =? OR users_email =?');
    
    if(!$stmt->excute(array($uid ,$pwd))){
        stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    if(stmt > rowCount ==0){
        stmt = null;
        header("location: ../index.php?error=stmtnotfound");
        exit();
    }
    $pwdHashed=$stmt->fetchAll(PDO::FETCH_ASSCO)
    $checkPwd=password_verify($pwd ,$pwdHashed[0]["users_pwd"])
    stmt = null;
    if($checkPwd ==false){
        stmt = null;
        header("location: ../index.php?error=stmtwrongpassword");
        exit();
    }
    elseif($checkPwd ==true){
        $stmt = $this ->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid =? OR users_email =?');
        exit();
        if(!$stmt->excute(array($uid, $email ,$pwd))){
            stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if(stmt > rowCount ==0){
            stmt = null;
            header("location: ../index.php?error=stmtnotfound");
            exit();
        }
        $user =$stmt->fetchAll(PDO::FETCH_ASSCO);
        session_start();
    }
    stmt = null;
    $_SESSION["userid"]=$user[0]["user_id"];
    $_SESSION["useruid"]=$user[0]["user_uid"];
    }
}
  