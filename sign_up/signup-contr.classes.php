<?php

class SignupContr extends Signup
{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }


    public function signUpUser()
    {

        if ($this->emptyInput() == false) {

            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invaldUid() == false) {

            header("location: ../index.php?error=invaldusername");
            exit();
        }

        if ($this->invalidEmail() == false) {

            header("location: ../index.php?error=invaldemail");
            exit();
        }
        if ($this->PwdMatch() == false) {

            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if ($this->uidTackencheck() == false) {

            header("location: ../index.php?error=usernameoremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }
    private function emptyInput()
    {
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {

            $result = False;
        } else {
            $result = True;
        }
        return $result;
    }

    private function invaldUid()
    {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {

            $result = False;
        } else {
            $result = True;
        }
        return $result;
    }

    private function invalidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

            $result = False;
        } else {
            $result = True;
        }
        return $result;
    }

    private function PwdMatch()
    {
        if ($this->pwd !== $this->pwdRepeat) {

            $result = False;
        } else {
            $result = True;
        }
        return $result;
    }

    private function uidTackencheck()
    {
        if (!$this->checkUser($this->uid, $this->email)) {

            $result = False;
        } else {
            $result = True;
        }
        return $result;
    }
}