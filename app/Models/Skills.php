<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Customer;

class Skills{
private $nameskills='';
private $proficiencyskills='';
private $cust;

public function  __construct($nameskills,$proficiencyskills,Customer $cust){
   $this->nameskills=$nameskills;
   $this->proficiencyskills=$proficiencyskills;
   $this->cust= new Customer($cust->get_name(),$cust->get_address(),$cust->get_email(),$cust->get_date(),$cust->get_phonenumber(),$cust->get_facebook(),$cust->get_youtube(),$cust->get_twitter(),$cust->get_primaryschool(),$cust->get_secondaryschool(),$cust->get_highereducation(),$cust->get_coursename(),$cust->get_institutionname());
}

//setter
public function set_nameskills($nameskills){
  $this->nameskills=$nameskills;
}
public function set_proficiencyskills($proficiencyskills){
  $this->proficiencyskills=$proficiencyskills;
}
public function set_cust($cust){
  $this->cust=$cust;
}


//getter

public function get_nameskills(){
  return $this->nameskills;
}
public function get_proficiencyskills(){
  return $this->proficiencyskills;
}
public function get_cust(){
  return $this->cust;
}

//toString

public function toString(){
  echo "skills : ".$this->nameskills." proficiency : ".$this->proficiencyskills." customer Name : ".$this->cust->get_name()."<br>";
}
}

?>
