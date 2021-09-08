<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Customer;
class Languages{

  private $namelanguage;
  private $proficiencylanguage;
  private $cust;

  public function __construct($namelanguage,$proficiencylanguage,Customer $cust){
    $this->namelanguage=$namelanguage;
    $this->proficiencylanguage=$proficiencylanguage;
    $this->cust= new Customer($cust->get_name(),$cust->get_address(),$cust->get_email(),$cust->get_date(),$cust->get_phonenumber(),$cust->get_facebook(),$cust->get_youtube(),$cust->get_twitter(),$cust->get_primaryschool(),$cust->get_secondaryschool(),$cust->get_highereducation(),$cust->get_coursename(),$cust->get_institutionname());
  }

  //setter
  public function set_namelanguage($namelanguage){
    $this->namelanguage=$namelanguage;
  }
  public function set_proficiencylanguage($proficiencylanguage){
    $this->proficiencylanguage=$proficiencylanguage;
  }
  public function set_cust($cust){
    $this->cust=$cust;
  }

  //getter
  public function get_namelanguage(){
    return $this->namelanguage;
  }
  public function get_proficiencylanguage(){
    return $this->proficiencylanguage;
  }
  public function get_cust(){
    return $this->cust;
  }


  //toString
  public function toString(){
    echo 'Language : '.$this->namelanguage. " proficiency : ".$this->proficiencylanguage." Customer Name : ".$this->cust->get_name()."<br>";
  }
}
?>
