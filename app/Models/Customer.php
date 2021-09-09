<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Customer{

  private $name='';
  private $address='';
  private $email='';
  private $date='';
  private $phonenumber='';
  private $facebook='Not Provided';
  private $youtube='Not Provided';
  private $twitter='Not Provided';
  private $primaryschool='';
  private $secondaryschool='';
  private $highereducation='';
  private $coursename='';
  private $institutionname='';

//constructor
public function __construct($name,$address,$email,$date,$phonenumber,$facebook,$youtube,$twitter,$primaryschool,$secondaryschool,$highereducation,$coursename,$institutionname){
   $this->name=$name;
   $this->address=$address;
   $this->email=$email;
   $this->date=$date;
   $this->phonenumber=$phonenumber;
   $this->facebook=$facebook;
   $this->youtube=$youtube;
   $this->twitter=$twitter;
   $this->primaryschool=$primaryschool;
   $this->secondaryschool=$secondaryschool;
   $this->highereducation=$highereducation;
   $this->coursename=$coursename;
   $this->institutionname=$institutionname;
}
  //setter

  public function set_name($name){
      $this->name=$name;
  }
  public function set_address($address){
    $this->address=$address;
  }
  public function set_email($email){
    $this->email=$email;
  }
  public function set_date($date){
    $this->date=$date;
  }
  public function set_phonenumber($phonenumber){
    $this->phonenumber=$phonenumber;
  }
  public function set_facebook($facebook){
    $this->facebook=$facebook;
  }
  public function set_youtube($youtube){
    $this->youtube=$youtube;
  }
  public function set_twitter($twitter){
    $this->twitter=$twitter;
  }
  public function set_primaryschool($primaryschool){
    $this->primaryschool=$primaryschool;
  }
  public function set_secondaryschool($secondaryschool){
    $this->secondaryschool=$secondaryschool;
  }
  public function set_highereducation($highereducation){
    $this->highereducation=$highereducation;
  }
  public function set_coursename($coursename){
    $this->coursename=$coursename;
  }
  public function set_institutionname($institutionname){
    $this->institutionname=$institutionname;
  }

//getter
 public function get_name(){
   return $this->name;
 }
 public function get_address(){
   return $this->address;
 }
 public function get_email(){
   return $this->email;
 }
 public function get_date(){
   return $this->date;
 }
 public function get_phonenumber(){
   return $this->phonenumber;
 }
 public function get_facebook(){
   return $this->facebook;
 }
 public function get_youtube(){
   return $this->youtube;
 }
 public function get_twitter(){
   return $this->twitter;
 }
 public function get_primaryschool(){
   return $this->primaryschool;
 }
 public function get_secondaryschool(){
   return $this->secondaryschool;
 }
 public function get_highereducation(){
   return $this->highereducation;
 }
 public function get_coursename(){
   return $this->coursename;
 }
 public function get_institutionname(){
   return $this->institutionname;
 }


 //toString

public function toString(){
  echo "Name : ".$this->name." Address : ". $this->address ." Email : ". $this->email ." Date : ". $this->date ." Phone Number: ". $this->phonenumber."Facebook Url : ".$this->facebook." Youtube".$this->youtube." Twitter ".$this->twitter."Primary school : ".$this->primaryschool." Secondary School : ".$this->secondaryschool. "Higher education : ".$this->highereducation."Institution Name : ".$this->institutionname."Course Name : ".$this->coursename."<br>";
}



}
 ?>
