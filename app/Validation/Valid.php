<?php

namespace Services\Validation;
use Services\Models\User;

class Valid {

    private $pass1,$pass2,$username,$user;
    private $error;

    public function Validation($user,$username,$pass1,$pass2){

        $this->user=$user;
        $this->username=$username;
        $this->pass1=$pass1;
        $this->pass2=$pass2;

        $this-> emptycheck();
        $this-> userValidation();
        $this-> passValidation();
        
        return $this->error;

    }

    public function emptycheck(){

        if (empty($this->user)||empty($this->username)||empty($this->pass1)||empty($this->pass2)){

            $this->error='تمام خانه ها باید پر شود';
            return;
            exit;
            
        }

    }

    public function passValidation(){

        $lenght=strlen($this->pass1);
        if ($this->pass1 !=$this->pass2){
            
            $this->error='پسورد و تکرار آن باهم یکسان نیست';
            return;
            exit;
            
        }
        
    }

    public function userValidation(){
        
        $user= new User;
        $InUser = $user->getUserByusername($this->username);
        
            if ($InUser){

                $this->error='نام کاربری قبلا استفاده شده است';
                return;
                exit;
                
            }

    }
}