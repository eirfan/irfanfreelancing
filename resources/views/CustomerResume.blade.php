<?php
use App\Models\ConnectionManager;
use App\Models\Customer;
use App\Models\DatabaseManager;
use App\Models\Skills;
use App\Models\Languages;
use App\Models\WorkExperience;
use App\Models\Organization;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


try{
$contents =Storage::disk('public')->get('hamizan.png');
 //print "file can be readed";

}catch(Exception $exception){
  //print "file cannot be read";
}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
    

 <title>ResumePage</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=1024">
 
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('js/app.js')}}" defer></script>

 <style>
 html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
 * {box-sizing: border-box}

 .container {
   width: 100%;
   background-color: #ddd;
 }

 .skills {
   text-align: right;
   padding-top: 10px;
   padding-bottom: 10px;
   color: white;
 }
 .color-white{
   color:whitesmoke
 }

 .html {width: 87%; background-color: #04AA6D;}
 .css {width: 87%; background-color: #2196F3;}
 .js {width: 65%; background-color: #f44336;}
 .php {width: 67%; background-color: #808080;}
 .java {width: 90%;background-color: #33AFFF}
 .oop{width:90%;background-color: #EEE86C}


 </style>
 <body class="w3-light-grey">
   <div id="example"></div>
<div class=".container">
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class=".container" style="width:100%;height:100%:12px;border-style:solid;border-color:white>
      <nav class="navbar navbar-dark bg-dark" style="height:100px;overflow:auto">
        
        <nav class="navbar navbar-expand-lg" style="overflow:auto,width:100%">
        <a class="navbar-brand" href="/user">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Design wardrobe<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Create New Resume</a>
            </li>
            
            
          </ul>
          <button id="saveresume" class="btn btn-outline-success my-2 my-sm-0" >Save</button>
        </div>
      
        
      </nav>
    
      </nav>
    </div>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="d-flex justify-content-between">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> More
        
      </button>
     
    </div>
    </nav>

  </div>
</div>

 <!-- Page Container -->
 <div id="screencapture">
 <div class="w3-content w3-margin-top"  style="max-width:1400px;">

   <!-- The Grid -->
   <div class="w3-row-padding" style="height:100%">
     <div class=".container" style="border-width:8px;border-style:solid;height:100%" >
    <div id="capture" class="w3-container" style='background-color:black;padding:12px'>
      
     <!-- Left Column -->
     <div class="w3-third" style="height:2400px;background-color:#ababab">
       <div class="w3-container w3-card " style="height:2400px;background-color:#ababab;padding:0px">
      
       <div class="w3-text-white w3-card-4" style="2000px" >


         <div class="w3-display-container" style="background-color:green">
           <img src="{{ URL::asset('storage/'.$nameoffile)}}" alt="Cannot read" style="width:100%;height:100%" alt="Avatar">
           <div class="w3-display-bottomleft w3-container w3-text-black" >
             <h2 style="Color:white">{{$customer->get_name()}}</h2>
           </div>
         </div>
         
         <div class="w3-container" style="background-color:#ababab;height:inherit ">
          <br>
           <p><i class="fa fa-briefcase color-white fa-fw w3-margin-right w3-large w3-text-teal " style="color:white;background-color:black"></i>Studying Major in <?=$customer->get_coursename()?></p>
           <p><i class="fa fa-home  fa-fw w3-margin-right w3-large w3-text-teal" style="background-color:black"></i><?=$customer->get_institutionname()?></p>
           <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal" style="background-color:black"></i><?=$customer->get_email()?></p>
           <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal" style="background-color:black"></i><a href='https://wa.me/6<?=$customer->get_phonenumber()?>'><?=$customer->get_phonenumber()?></a></p>
           <hr>

           <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
           <?php for($i=0;$i<count($skillscollection);$i++):?>
           <?php $skill=$skillscollection[$i];?>
           <p><?=$skill->get_nameskills()?></p>
           <div class="w3-light-grey w3-round-xlarge w3-small">
             <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?=$skill->get_proficiencyskills()?>%"><?=$skill->get_proficiencyskills()?>%</div>
           </div>
         <?php endfor; ?>
           <br>

           <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
           <?php foreach($languagecollection as $language):?>
           <p><?=$language->get_namelanguage()?></p>
           <div class="w3-light-grey w3-round-xlarge">
             <div class="w3-container w3-center w3-round-xlarge w3-teal" style="height:24px;width:<?=$language->get_proficiencylanguage()?>%"><?php if($language->get_proficiencylanguage()==25):?>Elementary<?php endif; ?><?php if($language->get_proficiencylanguage()==50):?>Intermediate<?php endif; ?> <?php if($language->get_proficiencylanguage()==75): ?>Advanced<?php endif; ?> <?php if($language->get_proficiencylanguage()==90): ?>Proficient<?php endif ?></div>
           </div>
         <?php endforeach; ?>

           <br>
         </div>
       </div><br>

     <!-- End Left Column -->
     </div>
     </div>

     <!-- Right Column -->
     <div class="w3-twothird" style="height:2400px;background-color:white">
      

       <div class="w3-container w3-card w3-white " style="">
         <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
         <?php foreach($workcollection as $work): ?>

        
         <div class="w3-container">
           <h5 class="w3-opacity"><b><?=$work->get_positionwork()?> / <?=$work->get_companyname()?></b></h5>
           <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?=$work->get_startwork()." " ?><span class="w3-tag w3-teal w3-round">  <?=$work->get_endwork()?></span></h6>
           <p><?=$work->get_describework()?></p>
           <hr>
          </div>
         <?php endforeach ?>
         

       </div>

       <div class="w3-container w3-card w3-white" style="">
         <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
         
         <div class="w3-container">
           <h5 class="w3-opacity"><b><?=$customer->get_institutionname();?> </b></h5>
           <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Now</h6>
           <p><?=$customer->get_coursename();?></p>
           <hr>
         </div>
         <div class="w3-container">
           <h5 class="w3-opacity"><b><?=$customer->get_secondaryschool()?></b></h5>
           <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2018- 2019</h6>
           <p>Pre-Universiti Certificate Level Science Stream </p>
           <hr>
         </div>
         <div class="w3-container">
           <h5 class="w3-opacity"><b><?=$customer->get_primaryschool()?></b></h5>
           <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2017</h6>
           <p>SPM Sciece Stream</p><br>
         </div>
       </div>
       


       <div class="w3-container w3-card w3-white "  >
        
        <h1> <kbd>Extra Co-curricular</kbd></h1>
        <h2 class="w3-text-grey w3-padding-16"><i class='fas fa-user-graduate' style='font-size:36px'></i><u>Organizations</u></h2>
        <br>
        <?php foreach($organizationcollection as $organization): ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?=$organization->get_nameorganization()?></b></h5>
          <p><?=$organization->get_positionorganization();?></p>
          <hr>
        </div>

        <?php endforeach?>
        <h2 class="w3-text-grey w3-padding-16"><i class='fas fa-user-graduate' style='font-size:36px'></i><u>Events</u></h2>
        <br>
        <?php foreach($eventcollection as $event): ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?=$event->get_nameevent()?></b></h5>
          <p><?=$event->get_positionevent()?></p>
          <hr>
        </div>

        <?php endforeach?>
       </div>
      </div>
     <!-- End Right Column -->
     </div>
    </div>

   <!-- End Grid -->
     </div>




   </div>
 </div>
   <!-- End Page Container -->
 </div>
 <div class="w3-container w3-card w3-white w3-margin-top">
  <h1>Certificates Hall</h1>
  <div style="display:inline-block;height:100%;width:100%;overflow:scroll">
   <img src="{{url('COCOne.png')}}" style="width:200px; height:120%;"/>
   <img src="{{url('COCtwo.jpg')}}" style="width:200px; height:120%;"/>
   <img src="{{url('COCthree.png')}}" style="width:200px;height:120%"/>
   <img src="{{url('COCfour.png')}}" style="width:150px;height:120%"/>
   <img src="{{url('COCfive.png')}}" style="width:150px;height:120%"/>
   <img src="{{url('COCsix.png')}}" style="width:200px;height:120%"/>
 </div>
</div>
 

 

 <footer class="page-footer font-small blue">
   <div class="footer-copyright text-center py-3">
   <p>Find me on social media</p>
   <i class="fa fa-facebook-official w3-hover-opacity"></i>
   <i class="fa fa-instagram w3-hover-opacity"></i>
   <i class="fa fa-snapchat w3-hover-opacity"></i>
   <i class="fa fa-pinterest-p w3-hover-opacity"></i>
   <i class="fa fa-twitter w3-hover-opacity"></i>
   <i class="fa fa-linkedin w3-hover-opacity"></i>
   
  </div>
 </footer>
 
 


 </body>
   </head>
 </html>
