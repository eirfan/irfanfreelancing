<?php

$action = 'generate';
 ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <title>Resume Generator</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      height :1000px;
      width : 1500px;
      margin-left: 200px;
      margin-right : 200px;
      margin-top: 200px;
      margin-bottom: 500px;
      background-color : #b8b8b3;
      }
      body, div, form, input, label {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 13px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 50px;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      }
      h2 {
      font-size: 20px;
      color : black;
      line-height: 20px

      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0  #004d00;
      }
      .banner {
      position: relative;
      height: 320px;
      background-image: url("/uploads/media/default/0001/02/c80634ee5d31493e4ef09a6c21a6fbe0c5936c01.jpeg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:#004d00;
      }
      .item input:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #004d00;
      color:#004d00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #004d00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      hr.new5 {
        border: 10px solid green;
        border-radius: 10px;
      }

      button:hover {
      background: #008000;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input,.name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!--Container is a bootstrap class that can make the website compatible to all devices-->

    <div class="testbox">
      <form action="/resumegeneratorcontroller" method="post" enctype="multipart/form-data">
        @csrf
        <div class="banner">
          <img src="{{url('I-FUN.png')}}" style="width:150px">
          <h1>Please Insert your details</h1>
        </div>
        <h2 style="margin-top:20px; ">Section 1 (Profile and Details)</h2>
        <div class="item">
          <label for="name">Name<span>*</span></label>
          <div class="name-item">
            <input id="name" type="text" name="name" placeholder="Please insert your full name" required/>
          </div>
        </div>
        <div class="item">
          <label for="name">Address<span>*</span></label>
          <div class="name-item">
            <input id="name" type="text" name="address" placeholder="Please Insert your full Address" required/>
            <input id="name" type="email" name="email" placeholder="Please Insert your Email Adddress" required/>
          </div>
        </div>
        <div class="item">
          <label for="bdate">Date of Birth(Optional)<span></span></label>
          <input id="bdate" type="date" name="bdate"/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <div class="name-item">
            <div>
              <label for="number">Phone Number<span>*</span></label>
              <input id="number" type="tel" name="number" required />
            </div>
          </div>
        </div>
        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"><i class="fab fa-youtube"></i></a>
        <div class="item">
          <label for="name">Facebook(optional)</label>
          <div class="name-item">
            <input id="Facebook" type="text" name="facebook" placeholder="Please insert your Facebook link" value='NoLinkProvided.com' optional/>
          </div>
          <label for"name">Twitter(Optional)</label>
          <div class="name-item">
            <input id="Twitter" type="text" name="twitter" placeholder="Please insert your Twitter link" value='NoLinkProvided.com'/>
          </div>
          <label for"name">Instagram(Optional)</label>
          <div class="name-item">
            <input id="Instagram" type="text" name="instagram" placeholder="Please insert your Instagram link" value='NoLinkProvided.com' />
          </div>
          <label for"name">Youtube(Optional)</label>
          <div class="name-item">
            <input id="Youtube" type="text" name="youtube" placeholder="Please insert your Youtube link" value='NoLinkProvided.com' />
          </div>
        </div>

        <hr class="new5"/>
        <!-- Section 2 : Skills and Work Experience -->
        <h2>Section 2 (Skills and Educations)</h2>
        <div class="item">
          <div class="name-item">
            <div>
              <label for="language">Primary School<span>*</span></label>
              <input id="PrimarySchool" type="text" name="PrimarySchool" placeholder ="Please insert your Primary School Name" required/>

            </div>
            <div>
              <label for="language">Secondary School<span>*</span></label>
              <input id="SecondarySchool" type="text" name="SecondarySchool" placeholder ="Please insert your Secondary School Name" required/>

            </div>
            <div>
              <label for="highereducation">Higher Education Levels(Optional)</label>
              <select class="form-control" id="highereducation" name="highereducation">
                <option value="" default></option>
                <option value="certificate">Certificate</option>
                <option value="diploma">Diploma</option>
                <option value="degree">Degree</option>
                <option value="master">Master</option>
                <option value="phd">PhD</option>

              </select>

            </div>

          </div>
          <div class="item" >
            <div class="name-item">


                <input id="coursename" type="text" name="institutionname" placeholder="Please Insert the name of Institution you graduated"/>
                  <input id="coursename" type="text" name="coursename" placeholder="Please Insert the course you took"/>

          </div>
<br>
<br>
<h2>Please Fill in at least 5 Skills you possesses : </h2>
        <div class="item">
          <div class="name-item">
            <div>
              <?php for($i=0;$i<5;$i++): ?>
              <input id="skilss<?=$i+1;?>" type="text" name="skils<?=$i+1;?>" placeholder="Skill <?=$i+1;?>"/>
              <select name="proficiencyskill<?=$i+1;?>" class="form-control" placeholder="Proficiency">
              <option value=""></option>
               <option value="25">25%</option>
               <option value="50">50%</option>
               <option value="75">75%</option>
               <option value="90">90%</option>
               <option value="100">100%</option>
              </select>
              <br/>
            <?php endfor; ?>
            </div>
          </div>
        </div>
<h2>Please fill in at least 2 Languages and your proficiency in each languages</h2>
        <div class="item">
          <?php for($i=0;$i<2;$i++): ?>
             <input id="language<?=$i?>" type="text" name="language<?=$i+1?>" placeholder="Language <?=$i+1;?>"  />
             <select class="form-control" name="proficiency<?=$i+1?>">
               <option default value=""></option>
              <option value="25">Elementary</option>
              <option value="50">Intermediate</option>
              <option value="75">Advanced</option>
              <option value="90">Proficient</option>
             </select>
                 <br>
          <?php endfor ?>
          <input id="language3" type="text" name="language3" placeholder="Please Insert if you have any additional language" >
          <select class="form-control" name="proficiency3">
            <option default value=""></option>
           <option value="25">Elementary</option>
           <option value="50">Intermediate</option>
           <option value="75">Advanced</option>
           <option value="90">Proficient</option>
          </select>
        </div>

        <hr class="new5">

        <h2>Section 3 (Work Experience and Co-curricular Activities)</h2>

        <br>
        <h2>Please list out at most 4 Jobs you worked : </h2>
        <div class="item">

        <?php for($i=0;$i<4;$i++):?>
          <div class="name-item">
           <input type="text" id="company<?=$i+1?>" name="companyname<?=$i+1?>" placeholder="Company Name <?=$i+1?>">
           <input type="text" id="position <?=$i+1?>" name="position<?=$i+1?>" placeholder="Position">
           <textarea id="describe<?=$i+1?>" name="describe<?=$i+1?>" rows="4" cols="100" placeholder="Please Describe about your role in the workplace"></textarea>



</div>
<div class="item">

  <label for="startdate">Start Work<span></span></label>
  <input id="startdate" type="date" name="startwork<?=$i+1?>"/>
  <i class="fas fa-calendar-alt"></i>
  <label for="enddate">End Work<span></span></label>
  <input id="enddate" type="date" name="endwork<?=$i+1?>"/>
  <i class="fas fa-calendar-alt"></i>
</div>
<br>


        <?php endfor ?>

      </div>
       <label>Do you want to add Extra-Co-curricular Activities on your Resume ?</label>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="cocurricular" id="cocurricularyes" value="yes">
          <label class="form-check-label" for="cocurricularyes">Yes</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="cocurricular" id="cocurricularno" value="no">
          <label class="form-check-label" for="cocurricularno">No</label>
        </div>
        <br>
        <h2>Please fill in your co-curricular Activities below(Optional)</h2>
        <br>
        <div class="item">
          <div class="name-item">
            <?php  for($i=0;$i<5;$i++):?>
           <input type="text" name="Organization<?=$i+1?>" placeholder="Organization <?=$i+1?>">
           <input type="text" name="Role<?=$i+1?>" placeholder="Role">
        <?php endfor ?>
          </div>

        </div>
        <div class="item">
          <div class="name-item">
            <?php  for($i=0;$i<5;$i++):?>
           <input type="text" name="Event<?=$i+1?>" placeholder="Event <?=$i+1?>">
           <select class="form-control" name="participation<?=$i+1?>">
             <option value=""></option>
             <option value="Organizer">Organizer</option>
             <option value="Participate">Participate</option>
           </select>
           <br>
           <br>
           <br>
        <?php endfor ?>
          </div>

        </div>
        <hr class="new5">
        <h2>Profile Picture</h2>
          <label for="cvimage">Upload Your Image<span>*</span></label>
          <input  id="cvimage" name='cvimage' accept="image/*" type="file" class="form-control-file" required />
        </div>
        <input type='hidden' name='action' value='generate'>
        <div class="btn-block">
          <button type="submit">Generate Resume</button>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>
