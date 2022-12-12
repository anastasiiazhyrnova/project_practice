<?php
class User{
    private $surname;
    private $name;
    private $patronymic;
    private $email;
    private $gender;
    private $role;
    private $password;

    public function set_surname($surname){
        $this->surname=$surname;
    }
    public function get_surname(){
        return $this->surname;
    }

    public function set_name($name){
        $this->name=$name;
    }
    public function get_name(){
        return $this->name;
    }

    public function set_patronymic($patronymic){
        $this->patronymic=$patronymic;
    }
    public function get_patronymic(){
        return $this->patronymic;
    }

    public function set_email($email){
        $this->email=$email;
    }
    public function get_email(){
        return $this->email;
    }

    public function set_gender($gender){
        $this->gender=$gender;
    }
    public function get_gender(){
        return $this->gender;
    }

    public function set_role($role){
        $this->role=$role;
    }
    public function get_role(){
        return $this->role;
    }


    public function set_password($password){
        $this->password=$password;
    }
    public function get_password(){
        return $this->password;
    }
}