<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Customer;

class WorkExperience{

private $companyname='';
private $positionwork='';
private $describework='';
private $startwork='';
private $endwork='';
private $cust;

public function __construct($companyname,$positionwork,$describework,$startwork,$endwork,Customer $cust){
  $this->companyname=$companyname;
  $this->positionwork=$positionwork;
  $this->describework=$describework;
  $this->startwork=$startwork;
  $this->endwork=$endwork;
  $this->cust= new Customer($cust->get_name(),$cust->get_address(),$cust->get_email(),$cust->get_date(),$cust->get_phonenumber(),$cust->get_facebook(),$cust->get_youtube(),$cust->get_twitter(),$cust->get_primaryschool(),$cust->get_secondaryschool(),$cust->get_highereducation(),$cust->get_coursename(),$cust->get_institutionname());

}
 //setter
public function set_companyname($companyname){
  $this->$companyname=$companyname;
}
public function set_positionwork($positionwork){
  $this->positionwork=$positionwork;
}
public function set_describework($describework){
  $this->describework=$describework;
}
public function set_startwork($startwork){
  $this->startwork=$startwork;
}
public function set_endwork($endwork){
  $this->endwork=$endwork;
}
public function set_cust($cust){
  $this->cust=$cust;
}


//getter
public function get_companyname(){
  return $this->companyname;
}
public function get_positionwork(){
  return $this->positionwork;
}
public function get_describework(){
  return $this->describework;
}
public function get_startwork(){
  return $this->startwork;
}
public function get_endwork(){
  return $this->endwork;
}
public function get_cust(){
  return $this->cust;
}

//toString
public function toString(){
  echo "Work : ".$this->companyname." Position : ".$this->positionwork." company : ".$this->describework." Startwork : ".$this->startwork." End work : ".$this->endwork." Customer Name : ".$this->cust->get_name()."<br>";
}
}


 ?>
