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
        <script src="{{URL::asset('https://irfanfreelancer.herokuapp.com/js/changecontent.js')}}" defer></script>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/about.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"  style="background-color: black" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">IRFAN HAFIZ BIN IBRAHIM</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src={{url('irfan.jpg')}} alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <p style='font-size:30px;color:black'id='secondanimation'></p>
            <div class="collapse navbar-collapse" style="background-color:black;border-radius:25px;padding:20px" id="navbarResponsive">
                <span class="d-block d-lg-none">IRFAN HAFIZ BIN IBRAHIM</span>
                
                <ul class="navbar-nav">
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
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        
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
            <section class="resume-section" style="background-color:wheat" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Projects</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" >3D-FindMe Application Prototype</h3>
                            <div class="subheading mb-3">Technology Entepreneurs</div>
                            <p>3D-FindMe apps is the ionic based apps that able to render the structure of the one supermarket to give the more detailed view to the customer. User use this system as a guidance for them to look for the specific item in the 3D view. It is a group assignment in UiTM and I have been choosen to handled 
                                the programming part where the rendered 3D model that being build by using Blender with be uploaded and rendered by using <b style="font-size:40px">three.js</b>. Three.js is a lightweight javascipt library that enable us to render any 3D objects
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Group Assignment Project</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">AttenTrix</h3>
                            <div class="subheading mb-3">Student Attendance Management Application using Geofencing and Face Recognition</div>
                            <p>AttenTrix is a high-tech application that able to take the attendance of the student based on face recognition and geofencing. The face recognition is build by using Convolutional Neural Network, CNN aspired by VGG16 Model 
                               The project is still on private respository as it still under development and therefore the project is considered as confidential. The project is build by using <b style="font-size:40px">Ionic React, Django python, Tensorflow and OpenCV</b>. 
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Final Year Project</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Take Picture of the Student</h3>
                            <div class="subheading mb-3">Continued from AttenTrix</div>
                            <p>When building a convolutional neural network, it is difficult to collect the image of students as the model require at least 1000 images per student. Therefore one website which using <b style="font-size:40px">laravel</b>and <b style="font-size:40px">opencv.js</b> is build and the link to the website is distributed to the students.
                                The student can open the website, fill in the information and take the image of themselve. The website will run the video and detect the face of the students. If the face is detected, the image will be saved to the firebase, else the video will continue taking the image of the students.
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Final Year Project</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Healthy Life Tracker</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Mara University of Technology, UiTM</h3>
                            <div class="subheading mb-3">Bachelor of Computer</div>
                            <div>Computer Science(Hons.) - Big Data & Soft Computing</div>
                            <p>GPA: 3.78</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2019 - Current</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Negeri Sembilan Matriculation College</h3>
                            <div class="subheading mb-3">TMatriculation</div>
                            <p>GPA: 3.96</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Jun 2018 - Jun 2019</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" style="background-color:wheat" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-android"></i></li>
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                        <li class="list-inline-item"><i class="fab fa-java"></i></li>
                        <li class="list-inline-item"><i class = "fab fa-bootstrap"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile Development Life Cycle
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development 
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being an excellence student in academic, I also enjoy spending time being outdoors. I love to play sport with my friends such as football, badminton, bowling and et cetera. 
                        I also known as someone who is actively participate in co-curriculum activity as I being selected as a secretary of Jasin Robotic Club known as JRC and vice president of Computer Science Association,CSA in UiTM.
                    </p>
                    <p class="mb-0"><article style="font-size:25px">I have been organizing a lot of universiti event and competition such as sumo robot competition and hackathon. During the process, I also known as team player as I always share and critics the idea during
                        the brainstorm season, I try my best to lead the team to guarantee the success of the program. I am also a social person which I love spend some time bonding with my colleagues and friends as I believe
                        This will able to help me improve their teamwork.
                    
                    </article></p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            MDEC Intel AI Academy
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Kaggle Computer Vision
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                           
                            Certificate of the Data Scientist Toolbox
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                           
                            Excellence SPM Student Award
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            
                           Datacamp Image Processing with Keras in Python
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                           
                            Datacamp Data Visualization with Matplotlib
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