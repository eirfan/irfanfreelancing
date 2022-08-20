<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">
        <meta name="description" content="Freelancing Website">
        <meta name="content" content="irfanfreelancing">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5b245a5d8a.js" crossorigin="anonymous"></script>
        
        <script type="text/javascript" onload="enabledTakePicture()"  src="{{URL::asset('https://docs.opencv.org/3.4.0/opencv.js')}}" defer>
        <script type="text/javascript" async onload='opentfReady()' src="{{URL::asset('https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js')}}" defer></script>
        <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
      
        <style>
    .cameracontainer {
    position: absolute;
    bottom: 0%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 5px;
    box-shadow: 0px 30px 50px -20px rgba(0, 0, 0, 0.7);
    -webkit-animation: 5s angle infinite;
    animation: 5s angle infinite;
    
}
.cameracontainer:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    opacity: 0.5;
}

.camera-top,
.camera-mid,
.camera-bottom {
    width: 360px;
}

.camera-top {
    height: 60px;
    background: linear-gradient(to right, #e2e2e2 0%, #f5f5f5 10%, #f5f5f5 90%, #e2e2e2 100%);
    border: 1px solid #DCDCDC;
    border-top-left-radius: 5px;
}

.camera-top:before {
    display: block;
    content: '';
    position: absolute;
    top: -20px;
    right: 0;
    width: 210px;
    height: 20px;
    background: linear-gradient(to right, #f5f5f5 0%, #f5f5f5 174px, #e2e2e2 100%);
    border: 1px solid #DCDCDC;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom: none;
    box-shadow: inset 0 15px 15px -15px #FDFDFD;
}

.camera-top .zoom {
    position: absolute;
    top: -15px;
    left: 30px;
    width: 42px;
    height: 9px;
    background: linear-gradient(to right, #b0b0b0 0%, #e2e2e2 30%, #e2e2e2 50%, #e2e2e2 70%, #b0b0b0 100%);
    border: 1px solid #A3A3A3;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    box-shadow: inset 0 15px 15px -15px #FDFDFD;
}

.camera-top .zoom:before {
    display: block;
    content: '';
    position: relative;
    top: -6px;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 4px;
    background: linear-gradient(to right, #b0b0b0 0%, #e2e2e2 50%, #b0b0b0 100%);
    border: 1px solid #A3A3A3;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.camera-top .zoom:after {
    display: block;
    content: '';
    position: relative;
    top: 3px;
    left: 50%;
    transform: translateX(-50%);
    width: 46px;
    height: 4px;
    background: linear-gradient(to right, #b0b0b0 0%, #e2e2e2 30%, #e2e2e2 50%, #e2e2e2 70%, #b0b0b0 100%);
    border: 1px solid #A3A3A3;
    border-bottom: none;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.camera-top .mode-changer {
    position: absolute;
    top: -20px;
    left: 82px;
    width: 60px;
    height: 16px;
    background: linear-gradient(to right, #b0b0b0 0%, #e2e2e2 30%, #e2e2e2 50%, #e2e2e2 70%, #b0b0b0 100%);
    border: 1px solid #A3A3A3;
    border-radius: 3px;
    box-shadow: inset 0 15px 15px -15px #FDFDFD;
}

.camera-top .mode-changer:after {
    display: block;
    content: '';
    position: absolute;
    top: 16px;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 2px;
    background: linear-gradient(to right, #b0b0b0 0%, #e2e2e2 30%, #e2e2e2 50%, #e2e2e2 70%, #b0b0b0 100%);
    border: 1px solid #A3A3A3;
    border-bottom: none;
}

.camera-top .sides {
    width: 100%;
}

.camera-top .sides:before,
.camera-top .sides:after {
    display: block;
    content: '';
    position: absolute;
    top: 24px;
    width: 8px;
    height: 30px;
    background: linear-gradient(to bottom, #828181 0%, #696767 10%, #4f4d4d 50%, #403e3f 100%);
    border: 1px solid #3E3C3D;
    border-radius: 2px;
    box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.5);
}

.camera-top .sides:before {
    left: -4px;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.camera-top .sides:after {
    right: -4px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.camera-top .range-finder {
    position: absolute;
    top: 10px;
    left: 105px;
    width: 30px;
    height: 20px;
    background: #3E3C3D;
    border-radius: 3px;
    box-shadow: inset 0 0 5px 3px #333132;
}

.camera-top .range-finder:before {
    display: block;
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 12px;
    height: 12px;
    background: #797878;
    border-radius: 100%;
}

.camera-top .focus {
    position: absolute;
    top: -14px;
    left: 156px;
    width: 15px;
    height: 15px;
    background: #3F3D3E;
    border-radius: 100%;
    box-shadow: inset 0 0 4px 3px #2D2B2B, inset 0 4px 5px 0 #F5F5F5, inset 0 -3px 4px -2px #A3A2A2;
}

.camera-top .red {
    position: absolute;
    top: 5px;
    left: 165px;
    width: 30px;
    height: 30px;
    background: #DC2839;
    border-radius: 100%;
}

.camera-top .view-finder {
    position: absolute;
    left: 210px;
    width: 48px;
    height: 30px;
    background: radial-gradient(ellipse at center, #828181 0%, #403e3f 85%, #403e3f 100%);
    border: 3px solid #312F2F;
    border-radius: 4px;
    box-shadow: inset 0 8px 8px -8px #FDFDFD;
}

.camera-top .flash {
    position: absolute;
    top: -6px;
    right: 20px;
    width: 58px;
    height: 46px;
    background: radial-gradient(ellipse at center, #828181 0%, #403e3f 70%, #403e3f 100%);
    border: 2px solid #312F2F;
    border-radius: 3px;
    box-shadow: inset 0 8px 8px -8px #FDFDFD;
}

.camera-top .flash:before,
.camera-top .flash:after {
    display: block;
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.camera-top .flash:before {
    width: 90%;
    height: 70%;
    background: radial-gradient(ellipse at center, #696767 0%, #1e1e1e 50%, #1e1e1e 100%);
}

.camera-top .flash:after {
    width: 16px;
    height: 14px;
    background: #797979;
    border-top-left-radius: 8px 2px;
    border-top-right-radius: 8px 2px;
    border-bottom-left-radius: 8px 2px;
    border-bottom-right-radius: 8px 2px;
}

.camera-top .flash .light {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    background: radial-gradient(ellipse at center, #ffffff 0%, rgba(255, 255, 255, 0) 100%);
    border-radius: 100%;
    z-index: 2;
    -webkit-animation: 1s flash infinite;
    animation: 1s flash infinite;
}

.camera-mid {
    position: relative;
    height: 130px;
    background: linear-gradient(to right, #e4e4e4 0%, #fafafa 10%, #fafafa 90%, #e4e4e4 100%);
    border: 1px solid #DCDCDC;
    border-top: none;
    border-bottom: none;
    box-shadow: inset 0 15px 15px -15px #FDFDFD;
}

.camera-mid .sensor {
    position: absolute;
    top: 40px;
    left: 105px;
    width: 30px;
    height: 30px;
    background: #545252;
    border: 2px solid #545252;
    border-radius: 100%;
    box-shadow: inset 0 12px 12px -10px #FDFDFD, 0 2px 5px 1px rgba(0, 0, 0, 0.3);
}

.camera-mid .sensor:before,
.camera-mid .sensor:after {
    display: block;
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.camera-mid .sensor:before {
    width: 20px;
    height: 20px;
    background: linear-gradient(to bottom, #E9E9E9 0%, #BDBDBD 100%);
    border-radius: 100%;
}

.camera-mid .sensor:after {
    width: 12px;
    height: 12px;
    background: #FAFAFA;
    border-radius: 100%;
    box-shadow: 0 2px 3px 0 #747474;
}

.camera-mid .lens {
    position: absolute;
    top: -20px;
    left: 130px;
    width: 155px;
    height: 155px;
    background: radial-gradient(ellipse at center, #000000 0%, #000000 15%, #272525 30%, #403e3f 30%, #403e3f 31%, #403e3f 40%, #e9ebec 41%, #e9ebec 44%, #b0b1b2 48%, #e8e9ea 50%, #e8e9ea 60%, #f7f8f8 60%, #787979 65%, #ffffff 66%, #ffffff 100%);
    border: 1px solid #B6B7B8;
    border-radius: 100%;
    box-sizing: border-box;
    box-shadow: 0 7px 15px -2px rgba(0, 0, 0, 0.4), inset 0 -2px 15px -2px rgba(0, 0, 0, 0.2), inset 0 7px 15px -2px #FFF;
}

.camera-mid .lens:before {
    display: block;
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 25px;
    height: 25px;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 100%;
    box-shadow: inset 0 5px 3px -2px rgba(255, 255, 255, 0.5), inset 0 -5px 20px -8px rgba(255, 255, 255, 0.5);
}

.camera-bottom {
    height: 16px;
    background: linear-gradient(to right, #e2e2e2 0%, #f5f5f5 10%, #f5f5f5 90%, #e2e2e2 100%);
    border: 1px solid #DCDCDC;
    border-bottom: none;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    box-shadow: inset 0 15px 15px -15px #FDFDFD, inset 0 -12px 12px -10px #797979;
}

@-webkit-keyframes flash {
    0% {
        width: 0;
        height: 0;
    }

    20% {
        width: 200px;
        height: 200px;
    }

    25% {
        width: 0;
        height: 0;
    }

    45% {
        width: 200px;
        height: 200px;
    }

    50% {
        width: 0;
        height: 0;
    }

    100% {
        width: 0;
        height: 0;
    }
}

@keyframes flash {
    0% {
        width: 0;
        height: 0;
    }

    20% {
        width: 200px;
        height: 200px;
    }

    25% {
        width: 0;
        height: 0;
    }

    45% {
        width: 200px;
        height: 200px;
    }

    50% {
        width: 0;
        height: 0;
    }

    100% {
        width: 0;
        height: 0;
    }
}

@-webkit-keyframes angle {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
        box-shadow: 0px 30px 50px -20px rgba(0, 0, 0, 0.7);
    }

    25% {
        transform: translate(-50%, -50%) rotate(2deg);
        box-shadow: 10px 30px 50px -20px rgba(0, 0, 0, 0.7);
    }

    75% {
        transform: translate(-50%, -50%) rotate(-2deg);
        box-shadow: -10px 30px 50px -20px rgba(0, 0, 0, 0.7);
    }

    100% {
        transform: translate(-50%, -50%) rotate(0deg);
        box-shadow: 0px 30px 50px -20px rgba(0, 0, 0, 0.7);
    }
}

@keyframes angle {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
        box-shadow: 0px 30px 50px -20px rgba(0, 0, 0, 0.7);
    }

    25% {
        transform: translate(-50%, -50%) rotate(2deg);
        box-shadow: 10px 30px 50px -20px rgba(0, 0, 0, 0.7);
    }

    75% {
        transform: translate(-50%, -50%) rotate(-2deg);
        box-shadow: -10px 30px 50px -20px rgba(0, 0, 0, 0.7);
    }

    100% {
        transform: translate(-50%, -50%) rotate(0deg);
        box-shadow: 0px 30px 50px -20px rgba(0, 0, 0, 0.7);
    }
}
.ButtonContainer {
    position: relative;
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    width: 320px;
    margin: 0 auto;
}

.Button {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
    color: #fff;
    display: block;
    font-family: 'Roboto', sans-serif;
    font-size: 1.125rem;
    font-weight: 500;
    letter-spacing: 0.0625rem;
    margin-top: 1.5625rem;
    padding: 1.5625rem 2.1875rem;
    position: relative;
    overflow: hidden;
    text-align: center;
    border-radius: 10px;
    text-transform: uppercase;
    transform-style: preserve-3d;
    will-change: transform;
    z-index: 1;
}

.Button-mask {
    position: absolute;
    transition: transform 0.425s ease-in-out;
    z-index: -1;
}

.Button-mask.slides-left {
    left: 0;
}

.Button-mask.slides-right {
    right: 0;
}

.Button-slides {
    top: 0;
    width: 200%;
    height: 100%;
}

.Button-rotates {
    top: 50%;
    left: 50%;
    width: 200%;
    height: 600%;
    transform: translate3d(-50%, -50%, 0);
}

.Button:hover .Button-mask.slides-left {
    transform: translate3d(-50%, 0, 0);
}

.Button:hover .Button-mask.slides-right {
    transform: translate3d(50%, 0, 0);
}

.Button:hover .Button-mask.rotates-clockwise {
    transform: rotate(180deg) translate3d(50%, 50%, 0);
}

.Button:hover .Button-mask.rotates-c-clockwise {
    transform: rotate(-180deg) translate3d(50%, 50%, 0);
}
.Graident-four {
    background: linear-gradient(135deg, #e32d76 0%, #648fe6 100%);
}
.Graident-two {
    background: linear-gradient(135deg, #00c7c5 0%, #0088d7 100%);
}
</style>
        </head>
        <p name='studentname' id='studentname' style="visibility:hidden !important;display:none !important" >{{$studentname}}</p>
    <body style="height:1000px;width:100%;overflow:scroll;background-color:#0a1727">
        
        <div class="container" id="videocontainer"  style="display:none;margin-top:40px;background-color:rgb(255, 255, 255);width:100%;height:50%;content-align:center">
            
       
        <video class="container" style="margin-top:0px;border-style:outset;border-width:3px;border-color:black;" id="videoInput" > 
          
        </video>
        <canvas id="canvasFrame" style="width:200px;height:300px"></canvas>
    </div>
    
    
       
       
   
<div class='cameracontainer' id='button_takecamera' onclick="readVideo()" style="display:none;background-color: rgb(253, 253, 253);text-align:center" >
        
     <div class='camera-top'>
         <div class='zoom'></div>
         <div class='mode-changer'></div>
         <div class='sides'></div>
         <div class='range-finder'></div>
         <div class='focus'></div>
         <div class='red'></div>
         <div class='view-finder'></div>
         <div class='flash'>
             <div class='light'></div>
         </div>
     </div>
     <div class='camera-mid'>
         <div class='sensor'></div>
         <div class='lens'></div>
     </div>
     <div class='camera-bottom'></div>
     <br/>
     <br/>
     
 </div>
 <div class="ButtonContainer" id='buttoncontainer' style="display:none">
 <div class="Buttons">
    <a class="Button" id="startbutton"  style="text-decoration:none;" onclick="takepicture()"><p id="startbuttontext">Start</p><span id="spanstart" class="Button-mask Button-rotates rotates-c-clockwise Graident-two"></span></a>
    </div>
    <a href='/' style="margin-top: 100px;font-size:16px;color:white">Guideline</a>
    <p style="margin-bottom:0px;padding-top:0px;font-size:24px;color:white">Number of images taken : <p style="font-size:46px;color:white;margin-top:0px" id='numberofimages'>0</p></p>
 </div>
 <div class="container" id="imageface" style="background-color:whitesmoke;height:auto;width:100%">
</div>

 
    

   

  
       
     
   

     <script type="text/javascript">
        let video = document.getElementById("videoInput");
        let canvas = document.getElementById("canvasFrame");
        let context = canvas.getContext('2d');
        let takecbutton = document.getElementById("button_takecamera");
        let studentname = document.getElementById("studentname");
        let valstudentname = studentname.innerHTML;
        let buttoncontainer = document.getElementById("buttoncontainer");
        let videocontainer = document.getElementById("videocontainer");
        let numberimages = document.getElementById("numberofimages");
        let imagefacespace = document.getElementById("imageface");
        console.log("Student name :"+valstudentname);
        const FPS = 60;
        var faceCascade;
        var faces;
        var msize;
        video.width = 640;
        video.height = 480;
        var height=video.height;
        var width=video.width;
        let imagenumber = 0;
        var imageface = null;
        let startbuttonspan = document.getElementById("spanstart");
        let startbutton = document.getElementById("startbutton");
        let startbuttontext = document.getElementById("startbuttontext")
       
       function tryreadhere(){
           console.log("try read here clicked");
       }
       function opencvReady(){
           console.log("OpenCV.JS library ready");
          
       }
       function opentfReady(){
           console.log("Tensorflow.js Library ready");
           h1_text_2 = document.getElementById("h1_text_2");
           h1_text_2.innerHTML = "Tensorflow ready";
           
       }
   
      
       function readVideo(){
        takecbutton.style.display='none'
        buttoncontainer.style.display ='block';
        videocontainer.style.display = "block";
        startbutton.disabled = true;
        var firebaseConfig = {
          apiKey : 'AIzaSyAy7CsmyS90kzk_YqwEXy_Kyt4wPXTu1lg',
          authDomain : 'studentattendance-8069d.firebaseapp.com',
          storageBucket : 'studentattendance-8069d.appspot.com'

      };   
      firebase.initializeApp(firebaseConfig);
      var storage = firebase.storage();
        faceCascade = new cv.CascadeClassifier();
        faces = new cv.RectVector();
        faceCascadeFile = 'haarcascade_frontalface_default.xml';
        let xhttp = new XMLHttpRequest();
           xhttp.open("GET","https://raw.githubusercontent.com/opencv/opencv/master/data/haarcascades/haarcascade_frontalface_default.xml",true);
           xhttp.responseType="arraybuffer";
           xhttp.onload=function(ev){
               if(xhttp.readyState == 4 ){
                   if(xhttp.status == 200){
                       let data = new Uint8Array(xhttp.response);
                       cv.FS_createDataFile('/',faceCascadeFile,data,true,false,false);
                       faceCascade.load(faceCascadeFile);
                       console.log("succefully load "+faceCascadeFile+"status :"+xhttp.status);
                   }
                   else{
                       console.log("failed to load"+faceCascadeFile+"status : "+xhttp.status);
                   }
               }
           };
           xhttp.send();
           
        
        msize = new cv.Size(0,0);
        navigator.mediaDevices.getUserMedia({video:true,audio:false}).then(function(stream){
           
           video.srcObject = stream;
           video.play();
           height = video.height;
           width = video.width
           
           console.log("SRC height"+height);
           console.log("SRC width"+width);
           setTimeout(processVideo,2000)
           
       }).catch(function(err){
           console.log("An error occured! +"+err);
       }
       );
       }

       function enabledTakePicture(){
           takecbutton.style.display='block'
       }
       function processVideo(){         
        
        var cap = new cv.VideoCapture(video);
        
        var src = new cv.Mat(height,width,cv.CV_8UC4);
        var dst = new cv.Mat(height,width,cv.CV_8UC1);
        let begin = Date.now();
        
        cap.read(src);
        cv.cvtColor(src,dst,cv.COLOR_BGR2GRAY);
       
           faceCascade.detectMultiScale(dst,faces,1.1,10,(64,64));
           
           for (let i=0;i<faces.size();i++){
               let face =faces.get(i);
               let point1 = new cv.Point(face.x,face.y);
               let point2 = new cv.Point(face.x+face.width,face.y+face.height);
               cv.rectangle(dst,point1,point2,[255,0,0,255]);
               let rect = new cv.Rect(face.x,face.y,face.width,face.height);
               imageface = src.roi(rect);

           }
           if(imageface != null){
          
            console.log("detecting face")
           
            cv.imshow(canvas,imageface);
            takecbutton.disabled = false;
            startbuttontext.innerHTML ="Take Picture"
            startbuttonspan.className ="Button-mask Button-rotates rotates-c-clockwise Graident-two";
            startbutton.disabled = "true"
            var imageURI = canvas.toDataURL();
           var imageblob;
           var newtagimage = document.createElement("img");
           newtagimage.style.height=canvas.height;
           newtagimage.style.width = canvas.width;
           newtagimage.src = imageURI
           imagefacespace.appendChild(newtagimage);
           fetch(imageURI).then(res => res.blob()).then(function(blob){
              
              console.log(blob);
              console.log("detecting image");
              var storageRef = firebase.storage().ref();
              var studentImageRef = storageRef.child(valstudentname+'/'+valstudentname+imagenumber+'.jpg')
             var uploadTask = studentImageRef.put(blob)
            
           }).then(function(){
            imagenumber = imagenumber + 1; 
            numberofimages.innerHTML = imagenumber;
            console.log("Done Saving picture to the firebase")
            
           });
        
        console.log(imagenumber);
        
           
        }
        else{
            console.log("cannot detect face");
            startbuttonspan.className = "Button-mask Button-rotates rotates-c-clockwise Graident-four"
            startbutton.disabled = "true"
            startbuttontext.innerHTML ="Cannot Detect face"
            numberofimages.innerHTML = "cannot detect face, Please make sure to face the camera"
            //console.log(err)
            //numberofimages.innerHTML = err;
            console.log("Cannot detect face")
            context.clearRect(0,0,canvas.width,canvas.height);
            takecbutton.disabled = true;
            
        }
        
        let delay = 1000/FPS - (Date.now() - begin);
        imageface = null;
        setTimeout(processVideo,delay);
}  

function takepicture(){
           var imageURI = canvas.toDataURL();
           var imageblob;
           var newtagimage = document.createElement("img");
           newtagimage.style.height=canvas.height;
           newtagimage.style.width = canvas.width;
           newtagimage.src = imageURI
           imagefacespace.appendChild(newtagimage);
           fetch(imageURI).then(res => res.blob()).then(function(blob){
              
              console.log(blob);
              console.log("detecting image");
              var storageRef = firebase.storage().ref();
              var studentImageRef = storageRef.child(valstudentname+'/'+valstudentname+imagenumber+'.jpg')
             var uploadTask = studentImageRef.put(blob)
            
           }).then(function(){
            imagenumber = imagenumber + 1; 
            numberofimages.innerHTML = imagenumber;
            console.log("Done Saving picture to the firebase")
            
           });
        
}
     </script>
     
   
    </body>
   
</html>

<?php /*
References :
1. https://codesandbox.io/s/opencvjs-getting-started-with-videos-adapted-ptmye
2. https://getbootstrap.com/docs/5.1/getting-started/introduction/
3.https://gosnippets.com/snippets/camera-design-with-pure-css
*/
?>