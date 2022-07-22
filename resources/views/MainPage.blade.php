<!DOCTYPE html>
<html>
  <head>
<title>IrfanFreelancerHeroku</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=1024">
<meta name="description" content="Freelancing Website ">
<meta name="content" content="irfanfreelancing">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
$(function)(){
  $("#section_two").load("/html/blog.html");
});
</script>

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.flip-box {
  background-color: transparent;
  width: 384.98px;
  height: 460px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 384.97px;
  height: 460px;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(540deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
}


* {
  box-sizing: border-box;
}

#icjjcj{
  display:inline-block;
  transition-delay:1ms;
}
.header-banner{
  padding-top:35px;
  padding-bottom:100px;
  color:rgb(255, 255, 255);
  font-family:Helvetica, serif;
  font-weight:100;
  background-image:url(none), url(./img/work-desk.jpg);
  background-attachment:scroll, scroll;
  background-position-x:left, center;
  background-position-y:top, center;
  background-repeat-x:no-repeat, no-repeat;
  background-repeat-y:repeat, no-repeat;
  background-size:contain, cover;
}
.container-width{
  width:90%;
  max-width:1150px;
  margin-top:0px;
  margin-right:auto;
  margin-bottom:0px;
  margin-left:auto;
}
.lead-title{
  margin-top:150px;
  margin-right:0px;
  margin-bottom:30px;
  margin-left:0px;
  font-size:40px;
  text-align:center;
  color:#000000;
  background-color:#f8f8f8;
  opacity:0.68;
  width:50%;
  margin:150px 9px 30px 30%;
}
.flex-sect{
  background-color:rgb(250, 250, 250);
  padding-top:100px;
  padding-right:0px;
  padding-bottom:100px;
  padding-left:0px;
  font-family:Helvetica, serif;
}
.flex-title{
  margin-bottom:15px;
  font-size:2em;
  text-align:center;
  font-weight:700;
  color:rgb(85, 85, 85);
  padding-top:5px;
  padding-right:5px;
  padding-bottom:5px;
  padding-left:5px;
}
.flex-desc{
  margin-bottom:55px;
  font-size:1em;
  color:rgba(0, 0, 0, 0.5);
  text-align:center;
  padding-top:5px;
  padding-right:5px;
  padding-bottom:5px;
  padding-left:5px;
}
.cards{
  padding-top:20px;
  padding-right:0px;
  padding-bottom:20px;
  padding-left:0px;
  display:flex;
  justify-content:space-around;
  flex-direction:initial;
  flex-wrap:wrap;
}
.card{
  background-color:white;
  height:300px;
  width:300px;
  margin-bottom:30px;
  box-shadow:rgba(0, 0, 0, 0.2) 0px 1px 2px 0px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  border-bottom-right-radius:2px;
  border-bottom-left-radius:2px;
  transition-duration:0.5s;
  transition-timing-function:ease;
  transition-delay:0s;
  transition-property:all;
  font-weight:100;
  overflow-x:hidden;
  overflow-y:hidden;
}
.card:hover{
  margin-top:-5px;
  box-shadow:rgba(0, 0, 0, 0.2) 0px 20px 30px 0px;
}
.card-header{
  height:155px;
  background-image:url("//placehold.it/350x250/78c5d6/fff/image1.jpg");
  background-size:cover;
  background-position-x:center;
  background-position-y:center;
}
.card-header.ch2{
  background-image:url("//placehold.it/350x250/459ba8/fff/image2.jpg");
}
.card-header.ch3{
  background-image:url("//placehold.it/350x250/79c267/fff/image3.jpg");
}
.card-header.ch4{
  background-image:url("//placehold.it/350x250/c5d647/fff/image4.jpg");
}
.card-header.ch5{
  background-image:url("//placehold.it/350x250/f28c33/fff/image5.jpg");
}
.card-header.ch6{
  background-image:url("//placehold.it/350x250/e868a2/fff/image6.jpg");
}
.card-body{
  padding-top:15px;
  padding-right:15px;
  padding-bottom:5px;
  padding-left:15px;
  color:rgb(85, 85, 85);
}
.card-title{
  font-size:1.4em;
  margin-bottom:5px;
}
.card-sub-title{
  color:rgb(179, 179, 179);
  font-size:1em;
  margin-bottom:15px;
}
.card-desc{
  font-size:0.85rem;
  line-height:17px;
}
.am-sect{
  padding-top:100px;
  padding-bottom:100px;
  font-family:Helvetica, serif;
}
.am-container{
  display:flex;
  flex-wrap:wrap;
  align-items:center;
  justify-content:space-around;
}
.am-content{
  float:left;
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  width:490px;
  color:rgb(68, 68, 68);
  font-weight:100;
  margin-top:50px;
}
.am-pre{
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  color:rgb(177, 177, 177);
  font-size:15px;
}
.am-title{
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  font-size:25px;
  font-weight:400;
}
.am-desc{
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  font-size:17px;
  line-height:25px;
}
.am-post{
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  line-height:25px;
  font-size:13px;
}
.blk-sect{
  padding-top:100px;
  padding-bottom:100px;
  background-color:rgb(34, 34, 34);
  font-family:Helvetica, serif;
}
.bdg-sect{
  padding-top:100px;
  padding-bottom:100px;
  font-family:Helvetica, serif;
  background-color:rgb(250, 250, 250);
}
.c10816{
  position:relative;
  width:980px;
  margin:0 auto;
}
.c10841{
  width:880px;
  margin:0 auto;
  position:relative;
  overflow:hidden;
  white-space:nowrap;
}
.c10886{
  position:absolute;
  display:block;
  cursor:pointer;
  top:50%;
  left:0;
  margin-top:-25px;
}
.c10922{
  position:absolute;
  display:block;
  cursor:pointer;
  top:50%;
  right:0;
  margin-top:-25px;
}


</style>
<meta name="google-site-verification" content="PdLF89Amjja6DhbO1umcO5Mm9CJ1bhy8yZ0sAAmzOCA" />
</head>
<body class="w3-light-grey" style="background: linear-gradient(white,grey)">
  <script src="{{asset('https://irfanfreelancer.herokuapp.com/js/app.js')}}" defer></script>
  <script src="{{URL::asset('https://irfanfreelancer.herokuapp.com/js/changecontent.js')}}" defer></script>
  
  
<div class=".container" >
  
  <div id="screencapture">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32">
  
  <img src="{{url('I-FUN.png')}}" style='width:150px' />

  <h1><b>MY Freelancing Blog</b></h1>
  <p style='font-size:30px'id='firstanimation'></p>
  <p>Welcome to the live of <span class="w3-tag">Eirfanz</span></p>
  
</header>
<div style="color:aqua;width:100%;height:100%" class="navbar navbar-dark bg-dark" >
  <button style="margin: left;width:50px,height:50px" id="button_content_one">Blog</button>
  <p title="Homepage" style="margin:center;color:white;font-size:30px" id="content_name"><b>Homepage</b></p>
  <button style="margin: right" id="button_content_two">Next</button>
  </div>

<!-- Grid -->
<div class="w3-row" name="content_one" id="content_one">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <br>
    <div class="container">
    <div class="w3-container">
     <nav class="navbar navbar-dark bg-dark" >
       <h2 style="color: white">What is I-FUN ?</h2>
     </nav>
    </div>
    <br>
      <h3><b>Details</b></h3>
      <h5>Date :  <span class="w3-opacity"><?php echo date("Y/m/d"). "<br>" ?></span></h5>
    </div>

    <div class="w3-container">
      <p>I-FUN is basically an online portfolio which I created to tell more about all my self-projects and learning. Feel free to drop any comments here</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><a href='/resume'><b>ABOUT ME »</b></a></button></p>
        </div>
        
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <!--<img src="{{asset('storage/profile/Muhammad Hamizan bin yusniprofile.jpg')}}" alt="Norway" style="width:100%">-->
    <div class="w3-container">
      <br>
      
        <nav class="navbar navbar-dark bg-dark" >
          <h2 style="color: white">Current Self Project </h2>
        </nav>
       
      <h3><b>Resume Automatic Generator</b></h3>
      <h5>Date :<span class="w3-opacity"><?php echo date("Y/m/d")."<br>" ?>Unavailable, Sorry for the Inconvenience</span></h5>
    </div>

    <!--<div class="w3-container">
      <p>Resume Automatic Generator is a website where you can generate your own Resume CV simply by entering your credential informations, All the information will safely store inside the database to avoid any data casualities </p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="/"<b>READ MORE »</b></a></button></p>
        </div>
      
      </div>
    </div>-->
    <br><br>
    <div class='w3-container'>
    <h3><b>Articles and Notes Science Computer</b></h3>
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Data Visualization</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Computer Vision</a>
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Python Notes and Tutorial</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Deep Learning</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list" style="word-wrap: break-word"><a href='/DataVisualization'>Data Visualization</a> is a graphical techniques of representing information and Data by using visual elements such as charts, graphs, maps, plot and etc. Matplotlib and Seaborn are some of the example of Data Visualization Tools in Python</div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list" style="word-wrap:break-word"><a href='/ComputerVision'>Computer Vision</a> is a field of Deep learning that enables computer to see and derive meaningful information from Digital Images, Videos and Other Visual Input. Computer Vision can be done by using OpenCV or Tensorflow libraries available on Python and Javascript.<br> Most of the time, Computer Vision required you to build one deep learning Model by using Python</div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list" style='word-wrap:break-word'><a href='/PythonTutorial'>Python</a> is a high level programming language mostly used in general-purpose Data Science, Artificial Intelligence and machine learning. Evolved from python 2, python version 3 has proved to be worth to learn programming language nowadays. With 1001 libraries available on python such as opencv, numpy, pandas, tensorflow, wordCloud, Matplotlib and etc, Python can perform well in Data Visualization, Deep Learning, Machine Learning and etc. </div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
        </div>
      </div>
    </div>
  </div>
  <br>
  </div>

   <!-- Blog entry -->
 
  
    <div class="container mt-5">
      <div class="d-flex justify-content-left row">
          <div class="col-md-8">
              <div class="d-flex flex-column comment-section">
                  <div class="bg-white p-2">
                    <nav class="navbar navbar-dark bg-dark" >
                      <h2 style="color: white">Feedback</h2>  
                    </nav>
                    <br>
                      <div class="d-flex flex-row user-info"><img class="rounded-circle" src="{{url('I-FUN.png')}}" width="40">
                          <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">How do you feel about the website ?</span><span class="date text-black-50"></span></div>
                      </div>
                      <div class="mt-2">

                          <p class="comment-text">Feel free to leave a feedback or any constructive advice. All the information will be saved inside the firebase</p>
                      </div>
                  </div>
                  <div class="bg-white">
                      <div class="d-flex flex-row fs-12">
                          
                          <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                          
                      </div>
                  </div>
                  <div class="bg-light p-2">
                    <form action="/firestoreoperation" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="action" value="storecomment">
                      
                      <div class="form-group"><input type="text" name="commentname" id="fullname" class="form-control" placeholder="Please insert your name"> </div>
                      <div class="d-flex flex-row align-items-start"><textarea placeholder="Comment Section" class="form-control ml-1 shadow-none textarea" name="commentsection"></textarea></div>
                      <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button></div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  

  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  
  <div class="w3-card w3-margin w3-margin-top" style="background-color: black">
    <div class="flip-box" style="width:100%;height:100%;background-color:black">
      <div class="flip-box-inner" style="width:100%;heigth:100%">
        <div class="flip-box-front">
          
          
          <img src="{{url('irfan.jpg')}}" style="width:100%;height:100%"/> <!--To display image, we need to use blade laravel syntax, make sure to change the format of the file first to.blade -->
  
</div>
  <div class="flip-box-back">
    <div class="w3-container w3-white">
      <h4><b>Irfan Hafiz</b></h4>
      <p>Hi, it's just me and welcome to my first Blog ever. I love to explore and learn new things everyday, This blog is going to show you all about my self-projects, so enjoy and feel free to leave any feedback  </p>
    </div>
  </div>
  </div>
    </div>
   
  </div>
  <hr>

  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>List of Projects Done</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <div class='overflow-auto'>
      <li class="w3-padding-16" >
        
        
      
        <span class="w3-large">Digital Notepad Apps</span><br>
        <span>Java Android Studio</span>
      </li>
      </div>
      <div class="overflow-auto">
      <li class="w3-padding-16" >
       
        <span class="w3-large">Healthy Life Tracker</span><br>
        
        <span class="text-sm-right">MVC using Eclipse</span>

      </li>
    </div>
   
      <li class="w3-padding-16">
       
        <span class="w3-large">Schedulling Management System</span><br>
        <span><p class="text-left">MVC using Eclipse</p></span>
      </li>
      <div class="overflow-auto">
        <li class="w3-padding-16">
        <span class="w3-large">Virtual Mouse and Keyboard</span><br>
        <span>Computer Vision Python</span>
      </li>
    </div>
    </ul>
  </div>
  <hr>

  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Skills</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Programming</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Graphic Design</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Leadership</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Science</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Statistic</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Data Science</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Apps Development</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Computer Vision</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Web Development</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Game Development</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Gamer</span>
    </p>
    </div>
  </div>

<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>
</div>
</div>

<div class="w3-row" name="content_two" style="display: none" id="content_two">
  <!--This section is used for displaying all comment by the user or reader-->
  @include("Blog")
</div>



<!-- Footer -->
<div class=".container">
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">

  <br/>
  <p style="color:white;font-size:28px">Technology Used</p>
  <div class="card-footer text-muted">
    <div class="nav d-flex justify-content-between">
    <div class="overflow-auto">
  <img class=".img-thumbnail" src="{{url('laravel.png')}}" style="width:100px;height:100px"/>
  <img class=".img-thumbnail" src="{{url('java.png')}}" style="width:100px;height:100px"/>
  <img class=".img-thumbnail" src="{{url('python.png')}}" style="width:100px;height:100px"/>
  <img class=".img-thumbnail" src="{{url('android.png')}}" style="width:150px;height:150px"/>
  <img class=".img-thumbnail" src="{{url('flutter.png')}}" style="width:100px;height:100px"/>
  <img class=".img-thumbnail" src="{{url('opencv.png')}}" style="width:100px;height:100px"/>
</div>
    </div>
  </div>
</footer>
</div>

</body>
</html>
