<?php

require 'User.php';
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase{
    private $surname='Гошева';
    private $name='Аліна';
    private $patronymic = "Андріївна";
    private $email='alinysikigorevna@gmail.com';
    private $gender="female";
    private $role='user';
    private $password='123test';

     protected function setUp():void{
        $this->UserTestInstance=new User();
    }
    public function testSurname(){
        $this->UserTestInstance->set_surname($this->surname);
        $this->assertEquals($this->surname, $this->UserTestInstance->get_surname());
    }
    public function testName(){
        $this->UserTestInstance->set_name($this->name);
        $this->assertEquals($this->name, $this->UserTestInstance->get_name());
    }
    public function testPatronymic(){
        $this->UserTestInstance->set_patronymic($this->patronymic);
        $this->assertEquals($this->patronymic, $this->UserTestInstance->get_patronymic());
    }
    public function testEmail(){
        $this->UserTestInstance->set_email($this->email);
        $this->assertEquals($this->email, $this->UserTestInstance->get_email());
    }

    public function testPassword(){
        $this->UserTestInstance->set_password($this->password);
        $this->assertEquals($this->password, $this->UserTestInstance->get_password());
    }
    public function testGender(){
        $this->UserTestInstance->set_gender($this->gender);
        $this->assertEquals($this->gender, $this->UserTestInstance->get_gender());
    }
    public function testRole(){
        $this->UserTestInstance->set_role($this->role);
        $this->assertEquals($this->role, $this->UserTestInstance->get_role());
    }
}
?>