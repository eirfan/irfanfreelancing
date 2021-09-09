<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\WorkExperience;
use App\Models\Event;
use App\Models\Languages;
use App\Models\Organization;
use App\Models\Skills;
use Illuminate\Support\Facades\DB;
class DatabaseManager {

  public function addCustomer(Customer $cust){
    DB::insert('insert into customertable(customername,customeraddress,customeremail,customerbdate,customernumberphone,primaryschool,secondaryschool,highereducation,institutionname,coursename,facebook) values (?,?,?,?,?,?,?,?,?,?,?)',[$cust->get_name(),$cust->get_address(),$cust->get_email(),$cust->get_date(),$cust->get_phonenumber(),$cust->get_primaryschool(),$cust->get_secondaryschool(),$cust->get_highereducation(),$cust->get_institutionname(),$cust->get_coursename(),$cust->get_facebook()]);


  }
  public function addWorkExperience(WorkExperience $work){
    DB::insert('insert into workexperience(companyname,positionwork,describework,startwork,endwork,customeremail,numofwork) values(?,?,?,?,?,?,?) ',[$work->get_companyname(),$work->get_positionwork(),$work->get_describework(),$work->get_startwork(),$work->get_endwork(),$work->get_cust()->get_email(),$numofwork]);

  }
  public function addOrganization(Organization $organization){
    DB::insert('insert into organization(organizationname,organizationposition,customeremail) values(?,?,?)',[$organization->get_nameorganization(),$organization->get_positionorganization(),$organization->get_cust()->get_email()]);

  }
  public function addEvent(Event $event){
    DB::insert('insert into event(eventname,eventposition,customeremail) values(?,?,?)',[$event->get_nameevent(),$event->get_positionevent(),$event->get_cust()->get_email()]);

  }
  public function addLanguage(Languages $language){
    DB::insert('insert into language(languagename,languageproficiency,customeremail) values(?,?,?)',[$language->get_namelanguage(),$language->get_proficiencylanguage(),$language->get_cust()->get_email()]);
  }
  public function addSkills(Skills $skill){
    DB::insert('insert into skills(nameskill,proficiencyskill,customeremail) values(?,?,?)',[$skill->get_nameskills(),$skill->get_proficiencyskills(),$skill->get_cust()->get_email()]);
  }

  public function getworkexperience(Customer $cust){
   $results = DB::select('select * from workexperience where customeremail=?',[$cust->get_email()]);
   $works= array();
   foreach ($results as $result){
     //for each row its going to get the result
     $workmodel= new WorkExperience($result->companyname,$result->positionwork,$result->describework,$result->startwork,$result->endwork,$cust);
   array_push($works,$workmodel);
 }
 return $works;

  }

  public function getevent(Customer $cust){
    $results= DB::select('select * from event where customeremail=?',[$cust->get_email()]);
    $events= array();
    foreach($results as $result){
      $eventmodel= new Event($result->eventname,$result->eventposition,$cust);
      array_push($events,$eventmodel);
    }
    return $events;
  }

  public function getorganization(Customer $cust){
    $results= DB::select('select * from organization where customeremail=?',[$cust->get_email()]);
    $organizations=array();
    foreach($results as $result){
      $organizationmodel= new Organization($result->organizationname,$result->organizationposition,$cust);
      array_push($organizations,$organizationmodel);
    }
    return $organizations;
  }

  public function getskills(Customer $cust){
    $results= DB::select('select * from skills where customeremail=?',[$cust->get_email()]);
    $skills= array();

    foreach($results as $result){
     $skillsmodel= new Skills($result->nameskill,$result->proficiencyskill,$cust);
     array_push($skills,$skillsmodel);

    }
    return $skills;
  }
  public function getlanguage(Customer $cust){
   $results= DB::select('select * from language where customeremail=?',[$cust->get_email()]);
   $languages= array();
   foreach($results as $result){
     $languagemodel= new Languages($result->languagename,$result->languageproficiency,$cust);
     array_push($languages,$languagemodel);

   }
   return $languages;

  }

  public function updatecustomer(Customer $cust){
    DB::update('update customertable set customername=?,customeraddress=?,customerbdate=?,customernumberphone=?,primaryschool=?,secondaryschool=?,highereducation=?,institutionname=?,coursename=?,facebook=? where customeremail=?',[$cust->get_name(),$cust->get_address(),$cust->get_date(),$cust->get_phonenumber(),$cust->get_primaryschool(),$cust->get_secondaryschool(),$cust->get_highereducation(),$cust->get_institutionname(),$cust->get_coursename(),$cust->get_facebook(),$cust->get_email()]);

  }
  public function updateskills(Skills $skill,$numofskill){
    DB::update('update skills set nameskill=?,proficiencyskill=? where customeremail=? and numofskill=?',[$skill->get_nameskills(),$skill->get_proficiencyskills(),$skill->get_cust()->get_email(),$numofskill]);

  }
  public function updateorganization(Organization $organization,$numoforganization){
    DB::update('update organization set organizationname=?,organizationposition=? where customeremail=? and numoforganization=?',[$organization->get_nameorganization(),$organization->get_positionorganization(),$organization->get_cust()->get_email(),$numoforganization]);
  }
  public function updateevent(Event $event,$numofevent){
    DB::update('update event set eventname=?,eventposition=? where customeremail=? and numofevent=?',[$event->get_nameevent(),$event->get_positionevent(),$event->get_cust()->get_email(),$numofevent]);

  }
  public function updatelanguage(Languages $language,$numoflanguage){
    DB::update('update language set languagename=?,languageproficiency=? where customeremail=? and numoflanguage=?',[$language->get_namelanguage(),$language->get_proficiencylanguage(),$language->get_cust()->get_email(),$numoflanguage]);

  }
  public function updatework(WorkExperience $work,$numofwork){
    DB::update('update workexperience set companyname=?,positionwork=?,describework=?,startwork=?,endwork=? where numofwork=? and customeremail=?',[$work->get_companyname(),$work->get_positionwork(),$work->get_describework(),$work->get_startwork(),$work->get_endwork(),$numofwork,$work->get_cust()->get_email()]);

  }


}

 ?>
