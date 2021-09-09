<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Customer;


class Organization{

  private $nameorganization='';
  private $positionorganization='';
  private $cust;

  public function __construct($nameorganization,$positionorganization,Customer $cust){
    $this->nameorganization=$nameorganization;
    $this->positionorganization=$positionorganization;
    $this->cust= new Customer($cust->get_name(),$cust->get_address(),$cust->get_email(),$cust->get_date(),$cust->get_phonenumber(),$cust->get_facebook(),$cust->get_youtube(),$cust->get_twitter(),$cust->get_primaryschool(),$cust->get_secondaryschool(),$cust->get_highereducation(),$cust->get_coursename(),$cust->get_institutionname());

  }

  //setter

  public function set_nameorganization($nameorganization){
    $this->nameorganization=$nameorganization;
  }
  public function set_positionorganization($positionorganization){
    $this->positionorganization=$positionorganization;
  }
  public function set_cust($cust){
    $this->cust=$cust;
  }

  //getter
  public function get_nameorganization(){
    return $this->nameorganization;
  }
  public function get_positionorganization(){
    return $this->positionorganization;
  }
  public function get_cust(){
    return $this->cust;
  }

  //toString
  public function toString(){
    echo "Organization : ".$this->nameorganization." Position : ".$this->positionorganization." Customer Name".$this->cust->get_name()."<br>";
  }
}
 ?>
