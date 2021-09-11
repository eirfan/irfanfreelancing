<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\Models\ConnectionManager;
use App\Models\Customer;
use App\Models\DatabaseManager;
use App\Models\Skills;
use App\Models\Languages;
use App\Models\WorkExperience;
use App\Models\Organization;
use App\Models\Event;
class TaskController extends Controller
{

//creating a function name indexfuntion

public function index(){



  return view('MainPage');

}


public function resume(){
return view('ResumePage');

}

public function resumegenerator(){
 return view('ResumeGeneratorPage');

}

public function resumegeneratorcontroller(Request $request){


  $action= $request->get('action');


  $name= $request->get('name');
  $address = $request->get('address');
  $email=$request->get('email');
  try{
  $date=$request->get('bdate');
}catch (Exception $exception){


}
$phonenumber=$request->get('number');
$facebook=$request->get('facebook');
$youtube=$request->get('youtube');
$twitter=$request->get('twitter');
$instagram=$request->get('instagram');
$primaryschool=$request->get('PrimarySchool');
$secondaryschool=$request->get('SecondarySchool');
$highereducation=$request->get('highereducation');
$institutionname=$request->get('institutionname');
$coursename=$request->get('coursename');
$fileextension= $request->file('cvimage')->extension();
$filename= $request->file('cvimage')->storeAs('public/profile',$name.'profile.'.$fileextension);
$skillscollection= array('skillone','skilltwo','skillthree','skillfour','skillfive');
$languagecollection= array('languageone','languagetwo','languagethree');
$workcollection= array('workone','worktwo','workthree','workfour');
$organizationcollection = array('organizationone','organizationtwo','organizationthree','organizationfour','organizationfive');
$eventcollection=array('eventone','eventtwo','eventthree','eventfour','eventfive');




$customer=new Customer($name,$address,$email,$date,$phonenumber,$facebook,$youtube,$twitter,$primaryschool,$secondaryschool,$highereducation,$coursename,$institutionname);

$customer->toString();
for($i=0;$i<5;$i++){
  //get skills
  $skills = $request->get('skils'.($i+1));
  $proficiencyskill= $request->get('proficiencyskill'.($i+1));
  $skillsmodel = new Skills($skills,$proficiencyskill,$customer);
  $skillscollection[$i]=$skillsmodel;

}
for($i=0;$i<3;$i++){
  //get languages
  $languagename=$request->get('language'.($i+1));

  $languageproficiency=$request->get('proficiency'.($i+1));

  $languages=new Languages($languagename,$languageproficiency,$customer);

  $languagecollection[$i]=$languages;

}
for($i=0;$i<4;$i++){
  $companyname=$request->get('companyname'.($i+1));
  $jobposition= $request->get('position'.($i+1));
  $jobdescribtion=$request->get('describe'.($i+1));
  $startwork=$request->get('startwork'.($i+1));
  $endwork=$request->get('endwork'.($i+1));
  $work= new WorkExperience($companyname,$jobposition,$jobdescribtion,$startwork,$endwork,$customer);
  $workcollection[$i]=$work;
}


for($i=0;$i<5;$i++){

  $organizationname=$request->get('Organization'.($i+1));
  $rolename=$request->get('Role'.($i+1));

  $organization= new Organization($organizationname,$rolename,$customer);
  $organizationcollection[$i]=$organization;

  $eventname=$request->get('Event'.($i+1));
  $evenparticipation=$request->get('participation'.($i+1));

  $event=new Event($eventname,$evenparticipation,$customer);
  $eventcollection[$i]=$event;


}


$noofevent=count($eventcollection);
$nooforganization=count($organizationcollection);
$noofwork=count($workcollection);
$noofskills=count($skillscollection);
$nooflanguages=count($languagecollection);
echo 'No of languages : '.$nooflanguages;
echo 'No of skills : '.$noofskills;
echo 'No of Work : '.$noofwork;
echo 'No of Organization : '.$nooforganization;
echo 'No of Event : '.$noofevent;



if($request->hasFile('cvimage')){
  echo 'file valid';
  echo $filename;

}
else{
  echo 'file invalid ';

}
echo 'action : '.$action;



if(strcasecmp($action,"generate")==0){
  echo'readhere';
$database = new DatabaseMAnager();

$database->addCustomer($customer);

for($i=0;$i<$noofskills;$i++){
  try{
    if((strcasecmp($skillscollection[$i]->get_nameskills(),""))!=0){
//  $skillscollection[$i]->toString();
  $database->addSkills($skillscollection[$i],$i+1);
}
}catch(Exception $execption){

}
}
for($i=0;$i<$nooflanguages;$i++){
  if((strcasecmp($languagecollection[$i]->get_namelanguage(),""))!=0){
//  $languagecollection[$i]->toString();
  $database->addLanguage($languagecollection[$i],$i+1);
}
}
for($i=0;$i<$noofwork;$i++){
  if((strcasecmp($workcollection[$i]->get_companyname(),""))!=0){
  //$workcollection[$i]->toString();
  $database->addWorkExperience($workcollection[$i],($i+1));
}
}
for($i=0;$i<$nooforganization;$i++){
  try{
    if((strcasecmp($organizationcollection[$i]->get_nameorganization(),""))!=0){
//    $organizationcollection[$i]->toString();
    $database->addOrganization($organizationcollection[$i],$i+1);
  }
  }catch(Exception $exception){
    echo $exception->Message();
  }
}
for($i=0;$i<$noofevent;$i++){
  try{
if((strcasecmp($eventcollection[$i]->get_nameevent(),""))!=0){
//    $eventcollection[$i]->toString();
    $database->addEvent($eventcollection[$i],$i+1);
  }

  }catch(Exception $exception){
}

}
return view('CustomerResume')->with('customer',$customer);
}

/* ************************************************************************************************************************************** */



else if(strcasecmp($action,"edit")==0){
  $database = new DatabaseMAnager();

  $database->updatecustomer($customer);

  for($i=0;$i<$noofskills;$i++){
    try{
      if((strcasecmp($skillscollection[$i]->get_nameskills(),""))!=0){
  //  $skillscollection[$i]->toString();
    $database->updateskills($skillscollection[$i],$i+1);
  }
  }catch(Exception $execption){

  }
  }
  for($i=0;$i<$nooflanguages;$i++){
    if((strcasecmp($languagecollection[$i]->get_namelanguage(),""))!=0){
  //  $languagecollection[$i]->toString();
    $database->updatelanguage($languagecollection[$i],$i+1);
  }
  }
  for($i=0;$i<$noofwork;$i++){
    if((strcasecmp($workcollection[$i]->get_companyname(),""))!=0){
    //$workcollection[$i]->toString();
    $database->updatework($workcollection[$i],$i+1);
  }
  }
  for($i=0;$i<$nooforganization;$i++){
    try{
      if((strcasecmp($organizationcollection[$i]->get_nameorganization(),""))!=0){
  //    $organizationcollection[$i]->toString();
      $database->updateOrganization($organizationcollection[$i],$i+1);
    }
    }catch(Exception $exception){
      echo $exception->Message();
    }
  }
  for($i=0;$i<$noofevent;$i++){
    try{
  if((strcasecmp($eventcollection[$i]->get_nameevent(),""))!=0){
  //    $eventcollection[$i]->toString();
      $database->updateEvent($eventcollection[$i],$i+1);
    }

    }catch(Exception $exception){
  }

  }
  return view('CustomerResume')->with('customer',$customer);
}
}


public function trainingquery(){

  $database=new DatabaseManager();
  $workcollection=$database->getworkexperiencetest();
  for($i=0;$i<count($workcollection);$i++){
    echo $workcollection[$i]->companyname;
  }
}

public function laravelfirebase(){

  try{
  $firebase= (new Factory)->withServiceAccount(__DIR__.'/laravelfirebaseone-firebase-adminsdk-btv6w-58fc01519b.json')->withDatabaseUri('https://laravelfirebaseone-default-rtdb.firebaseio.com/');
  $database =$firebase->createDatabase();
 $newPost=$database->getReference('blog/posts')->push(['title'=>'Post title','body'=>'This should probably be longer']);
  echo 'succesfull';
}catch(FirebaseException $exception){
echo $exception;

}

}





public function pyscript(){
//try{
//
$result=exec("python C:\Users\SCuser\Documents\GitHub\irfanfreelancing\public\VirtualMouse.py");

//}catch(Exception $exception){
//echo 'Message: '.$exception->getMessage();
//p
//}
/*$process= new Process(['python']);
$process->run();


if(!$process->isSuccessful()){
  echo $process->getOutput();
  throw new ProcessFailedException($process);
}
echo $process->getOutput();*/
echo "Finish";





}

public function getConnection(){
$user=DB::select('select * from selfproject');

foreach ($user as $user) {
   echo $user->PROJECTDETAIL;
  // code...
}


}

    //
}
