<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Customer;


class Event{

  private $nameevent='';
  private $positionevent='';
  private $cust;

  public function __construct($nameevent,$positionevent,Customer $cust){
    $this->nameevent=$nameevent;
    $this->positionevent=$positionevent;
    $this->cust= new Customer($cust->get_name(),$cust->get_address(),$cust->get_email(),$cust->get_date(),$cust->get_phonenumber(),$cust->get_facebook(),$cust->get_youtube(),$cust->get_twitter(),$cust->get_primaryschool(),$cust->get_secondaryschool(),$cust->get_highereducation(),$cust->get_coursename(),$cust->get_institutionname());


  }


  //setter
  public function set_nameevent($nameevent){
    $this->nameevent=$nameevent;
  }
  public function set_positionevent($positionevent){
    $this->positionevent=$positionevent;
  }
  public function set_cust($cust){
    $this->cust=$cust;
  }

  //getter
  public function get_nameevent(){
    return $this->nameevent;
  }
  public function get_positionevent(){
    return $this->positionevent;
  }
  public function get_cust(){
    return $this->cust;
  }

  //toString
  public function toString(){
    echo "Event : ".$this->nameevent." Position : ".$this->positionevent."Customer Name : ".$this->cust->get_name()."<br>";
  }
}

 ?>
