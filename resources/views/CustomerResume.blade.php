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
echo "file can be readed";

}catch(Exception $exception){
  echo "file cannot be read";
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

 .html {width: 87%; background-color: #04AA6D;}
 .css {width: 87%; background-color: #2196F3;}
 .js {width: 65%; background-color: #f44336;}
 .php {width: 67%; background-color: #808080;}
 .java {width: 90%;background-color: #33AFFF}
 .oop{width:90%;background-color: #EEE86C}


 </style>
 <body class="w3-light-grey">

 <!-- Page Container -->
 <div class="w3-content w3-margin-top" style="max-width:1400px;">

   <!-- The Grid -->
   <div class="w3-row-padding">

     <!-- Left Column -->
     <div class="w3-third">

       <div class="w3-white w3-text-grey w3-card-4">
         <div class="w3-display-container">
           <img src="{{ URL::asset('storage/'.$nameoffile)}}" alt="Cannot read" style="width:100%" alt="Avatar">
           <div class="w3-display-bottomleft w3-container w3-text-black">
             <h2 style="Color:white">{{$customer->get_name()}}</h2>
           </div>
         </div>
         <div class="w3-container">
           <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Studying Major in <?=$customer->get_coursename()?></p>
           <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$customer->get_institutionname()?></p>
           <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$customer->get_email()?></p>
           <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><a href='https://wa.me/6<?=$customer->get_phonenumber()?>'><?=$customer->get_phonenumber()?></a></p>
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

     <!-- Right Column -->
     <div class="w3-twothird">

       <div class="w3-container w3-card w3-white w3-margin-bottom">
         <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
         <?php foreach($workcollection as $work): ?>

        
         <div class="w3-container">
           <h5 class="w3-opacity"><b><?=$work->get_positionwork()?> / <?=$work->get_companyname()?></b></h5>
           <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?=$work->get_startwork()." " ?><span class="w3-tag w3-teal w3-round">  <?=$work->get_endwork()?></span></h6>
           <p><?=$work->get_describework()?></p>
           <hr>
           
         <?php endforeach ?>
         </div>

       </div>

       <div class="w3-container w3-card w3-white">
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
       <br>
       <br>


       <div class="w3-container w3-card w3-white w3-margin-bottom" style="overflow: scroll">
        <h1>Programmigng Languages</h1>
        <p>HTML</p>
      <div class="container">
        <div class="skills html">87%</div>
      </div>
   
      <p>CSS</p>
      <div class="container">
        <div class="skills css">80%</div>
      </div>
   
      <p>JavaScript</p>
      <div class="container">
        <div class="skills js">65%</div>
      </div>
   
      <p>PHP</p>
      <div class="container">
        <div class="skills php">60%</div>
      </div>
   
      <p>Java</p>
      <div class="container">
        <div class="skills java">90%</div>
      </div>
      <p>Object Oriented Programming</p>
      <div class="container">
        <div class="skills oop">90%</div>
      </div>
     <!-- End Right Column -->
     </div>

   <!-- End Grid -->
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
