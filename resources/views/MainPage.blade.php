<!DOCTYPE html>
<html>
  <head>
<title>My Blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=1024">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}


</style>
<meta name="google-site-verification" content="PdLF89Amjja6DhbO1umcO5Mm9CJ1bhy8yZ0sAAmzOCA" />
</head>
<body class="w3-light-grey">

<div class=".container">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32">
  <img src="{{url('I-FUN.png')}}" style='width:150px' />
  <h1><b>MY Freelancing Blog</b></h1>
  <p>Welcome to the live of <span class="w3-tag">Eirfanz</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

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
      <p>I-FUN is basically a logo I created as a symbol for all my self-projects and Freelancing, This page is useful if you want to discover what is Science Computer in the perspective of a student which is me.My vision is to introduce the real and advance technology to all Malaysian Science Computer Major Students, all this knowledge I got from joining multiple Online Courses and MOOC. Feel free to drop any comments here</p>
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
      <h5>Date :<span class="w3-opacity"><?php echo date("Y/m/d")."<br>" ?></span></h5>
    </div>

    <div class="w3-container">
      <p>Resume Automatic Generator is a website where you can generate your own Resume CV simply by entering your credential informations, All the information will safely store inside the database to avoid any data casualities </p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="/resumegenerator"<b>READ MORE »</b></a></button></p>
        </div>
        
      </div>
    </div>
  </div>

  
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
                    <form action="/storecommentfirestore" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="d-flex flex-row align-items-start"><textarea class="form-control ml-1 shadow-none textarea" name="commentsection"></textarea></div>
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
  <div class="w3-card w3-margin w3-margin-top">
    <img src="{{url('irfan.jpg')}}" style="width:100%"/> <!--To display image, we need to use blade laravel syntax, make sure to change the format of the file first to.blade -->
    <div class="w3-container w3-white">
      <h4><b>Irfan Hafiz</b></h4>
      <p>Hi, it's just me and welcome to my first Blog ever. I love to explore and learn new things everyday, This blog is going to show you all about my self-projects, so enjoy and feel free to leave any feedback  </p>
    </div>
  </div><hr>

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
