<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=1024" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="{{asset('https://irfanfreelancer.herokuapp.com/js/app.js')}}" defer></script>
        <script type="text/javascript" src="{{URL::asset('https://irfanfreelancer.herokuapp.com/js/changecontent.js')}}" defer>
        </script>
        <script src="{{URL::asset('js/automaticcontent.js')}}" async></script>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/about.css" rel="stylesheet" />
    </head>
    
    <body id="page-top" style="background-color:black;width:100%">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"  style="background-color: black" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none ">IRFAN HAFIZ BIN IBRAHIM</span>
                <img class="profile-animation img-fluid img-profile rounded-circle mx-auto mb-2" src={{url('irfan.jpg')}} alt="..." />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <p style='font-size:30px;color:black'id='secondanimation'></p>
            <div class="collapse navbar-collapse" style="background-color:black;border-radius:25px 0px 0px 25px;padding:20px" id="navbarResponsive">
                <span class="d-block d-lg-none">IRFAN HAFIZ BIN IBRAHIM</span>
                
                <ul class="navbar-nav" >
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/user">E-Portfolio</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0" style="width:100%;float:left">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <div class="first-circle">
                        <!--To make the circle animation, we will 
                        need two circle, first is parent circle and second is child circle
                    1. The parent circle will have these properties:
                        .first-circle{
                                      background-color:black;
                                      height:100px;
                                      width:100px;
                                      border-radius:50%;
                                      display:inline-block;
                                      border-color:white;
                                      border-style:solid;
                                      animation-name:circle-one-animation;
                                      animation-duration:6s;
                                      animation-iteration-count: infinite;
                                      animation-timing-function: linear;
                                     }
                    2. The child circle will have these properties :
                        .second-circle{
                                      background-color:black;
                                      height:25px;
                                      border-style:solid;
                                      border-color:black;
                                      position:center;
                                      margin:auto;
                                      overflow:hidden;
                                      width:25px;
                                      border-radius:50%;
                                      display:inline-block;
                                      animation-name:circle-two-animation;
                                      animation-duration: 6s;
                                      animation-iteration-count:infinite;
                                      animation-timing-function: linear;
                                      }
                    3. The keyframes animation will be required for both parent and child circle
                    4. The keyframes for parents circle: 
                          @keyframes circle-one-animation{
                                      0%{transform:rotate(0deg)}
                                      100% {transform:rotate(360deg)}
                                    }
                    5. The keyframes for chilc circle :
                          @keyframes circle-two-animation{
                                      0%{transform:rotate(0deg);}
                                      100%{transform:rotate(-6deg);}
                                    }
                -->
                   <div class="second-circle">
                   </div> 
                    </div>
                 
                    <h1 class="blur-text">
                        <pe>Welcome</pe>
                        <pe>To</pe>
                        <pe>EirfanZ</pe>
                        <pe>CyberSpace</pe>
                        
                    </h1>
                    <h1 class="mb-0" id="txt-1" style="display:none">
                        <br/>
                        IRFAN HAFIZ 
                        <span class="text-primary">IBRAHIM</span>
                    </h1>
                    <div class="subheading mb-5">
                        No. 8, Jalan RU 27, Taman Rambai Utama,75260 Melaka<br/>
                        <a href="mailto:irfanhafiz329@gmail.com">irfanhafiz329@gmail.com</a>
                    </div>
                    <p class="lead mb-5">I am hardworking and passionate software engineer and data scientist which familiar with several high - level technologies such as Laravel, Ionic React, Django Python, Tensorflow and et cetera.<br/>
                    <br/><b>"Pursue Excellence and Success will Follow You"</b>, As one of the class's most active and enthusiastic students, I am constanlt hungry for knowledge and wisdow from other.
                Hard effort, respoect and passion have always been my three pillars of success. Since I beloeve that education is the best way to alter society's life. That is why I have always spent my spare time learning
            new things as a daily basis</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/eirfanhafiz/"><i class="fab fa-linkedin-in"></i></a>
                        <!--<a class="social-icon" href="#!"><i class="fab fa-github"></i></a>-->
                        <!--<a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>-->
                        <a class="social-icon" href="https://www.facebook.com/irfan.hafiz.35/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section bg-primary" style="background-color:white;width:auto;border-radius:0px 25px 25px 0px" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Projects</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" >3D-FindMe Application Prototype</h3>
                            <div class="subheading mb-3">Technology Entepreneurs</div>
                            <p class="mb-3">3D-FindMe apps is the ionic based apps that able to render the structure of the one supermarket to give the more detailed view to the customer. User use this system as a guidance for them to look for the specific item in the 3D view. It is a group assignment in UiTM and I have been choosen to handled 
                                the programming part where the rendered 3D model that being build by using Blender with be uploaded and rendered by using <b style="font-size:40px">three.js</b>. Three.js is a lightweight javascipt library that enable us to render any 3D objects
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Group Assignment Project</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">AttenTrix</h3>
                            <div class="subheading mb-3">Student Attendance Management Application using Geofencing and Face Recognition</div>
                            <p class="mb-3">AttenTrix is a high-tech application that able to take the attendance of the student based on face recognition and geofencing. The face recognition is build by using Convolutional Neural Network, CNN aspired by VGG16 Model 
                               The project is still on private respository as it still under development and therefore the project is considered as confidential. The project is build by using <b style="font-size:40px">Ionic React, Django python, Tensorflow and OpenCV</b>. 
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Final Year Project</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Take Picture of the Student</h3>
                            <div class="subheading mb-3">Continued from AttenTrix</div>
                            <p class="mb-3">When building a convolutional neural network, it is difficult to collect the image of students as the model require at least 1000 images per student. Therefore one website which using <b style="font-size:40px">laravel</b>and <b style="font-size:40px">opencv.js</b> is build and the link to the website is distributed to the students.
                                The student can open the website, fill in the information and take the image of themselve. The website will run the video and detect the face of the students. If the face is detected, the image will be saved to the firebase, else the video will continue taking the image of the students.
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Final Year Project</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Healthy Life Tracker</h3>
                            <div class="subheading mb-3">Web application to maintain healty lifestyle</div>
                            <p class="mb-3">Healthy life tracker is a website that allow user to calculate their Body Mass Index, BMI. Furthermore, based on the BMI status, the system will suggest the healthy diet that is suitable for the user. This is the simple if-else system without any implementation of algorithm
                                . The project is submitted as the report for one of the courses in Bachelor Degree of Computer Science(Hons).
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5" style="color:white">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" style="color:white">Mara University of Technology, UiTM</h3>
                            <div class="subheading mb-3">Bachelor of Computer</div>
                            <div>Computer Science(Hons.) - Big Data & Soft Computing</div>
                            <p>GPA: 3.78</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2019 - Current</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" style="color:white">Negeri Sembilan Matriculation College</h3>
                            <div class="subheading mb-3">TMatriculation</div>
                            <p>GPA: 3.96</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Jun 2018 - Jun 2019</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section bg-primary" style="background-color:wheat" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i>html</li>
                        <br/>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i>CSS</li>
                        <br/>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i>Javascript</li>
                        <br/>
                        <li class="list-inline-item"><i class="fab fa-react"></i>React</li>
                        <br/>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i>Node js</li>
                        <br/>
                        <li class="list-inline-item"><i class="fab fa-android"></i>Android Development</li>
                        <br/>
                        <li class="list-inline-item"><i class="fab fa-python"></i>Python</li>
                        <br/>
                        <li class="list-inline-item"><i class="fab fa-java"></i>Java</li>
                        <br/>
                        <li class="list-inline-item"><i class = "fab fa-bootstrap"></i>Bootstrap</li>
                    </ul>
                    
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5" style="color:white">Interests</h2>
                    <p ><article style="font-size:20px">Apart from being an excellence student in academic, I also enjoy spending time being outdoors. I love to play sport with my friends such as football, badminton, bowling and et cetera. 
                        I also known as someone who is actively participate in co-curriculum activity as I being selected as a <b style="color:white;font-family:'Times New Roman">Secretary</b> of Jasin Robotic Club known as JRC and <b style="color:white;font-family:'Times New Roman"">vice president</b> of Computer Science Association,CSA in UiTM.
                    </article>
                    </p>
                    <p class="mb-0"><article style="font-size:25px">I have been organizing a lot of universiti event and competition such as sumo robot competition and hackathon. During the process, I also known as team player as I always share and critics the idea during
                        the brainstorm season, I try my best to lead the team to guarantee the success of the program. I am also a social person which I love spend some time bonding with my colleagues and friends as I believe
                        This will able to help me improve their teamwork.
                    
                    </article></p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section bg-primary rounded-radius"  id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5" style="color:black">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <p class="font-black">MDEC Intel AI Academy</p>
                            <img  src="{{url('COCsix.png')}}" style="margin-top:50px;margin-left:20px;width:400px; height:200%;"/>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <p class="font-black">Kaggle Computer Vision</p>
                            <img  src="{{url('COCseven.png')}}" style="margin-top:50px;margin-left:20px;width:400px; height:200%;"/>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                           
                           <p class="font-black">Certificate of the Data Scientist Toolbox</p>
                            <img  src="{{url('The Data Scientist Toolbox.png')}}" style="margin-top:50px;margin-left:20px;width:400px; height:200%;"/>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <p class="font-black">Excellence SPM Straight A's Student award 2017</p>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            
                           <p class="font-black">Datacamp Image Processing with Keras in Python</p>
                           <img  src="{{url('Certificate Image Processing.png')}}" style="margin-top:50px;margin-left:20px;width:400px; height:200%;"/>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                           
                            <p class="font-black">Data Mining MOOC UiTM Completion Course</p>
                            <img  src="{{url('COCthree.png')}}" style="margin-top:50px;margin-left:20px;width:400px; height:200%;"/>
                        </li>
                       
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/about.js"></script>
    </body>
</html>