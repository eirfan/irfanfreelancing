<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">
        <meta name="description" content="Freelancing Website">
        <meta name="content" content="irfanfreelancing">
        
        
        <script type="text/javascript" onload='readVideo()'  src="{{URL::asset('https://docs.opencv.org/3.4.0/opencv.js')}}" defer>
        <script type="text/javascript" async onload='opentfReady()' src="{{URL::asset('https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js')}}" defer></script>
        <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
    </head>
    <body>
        
        <div style="align-content: center">
        <h1 id="h1_text_1">Loading the page, it will take time longer for new user</h1></div>
        <h1 id="h1_text_2">Loading tensorflow. Please wait for a moment</h1>
        <div>
        <video style="height:200px,width:200px" id="videoInput"> 

        </video>
        <canvas id="canvasFrame"></canvas>
        </div>
        <br/>
        <button id='button_takecamera'></button>

     <script type="text/javascript">
        let video = document.getElementById("videoInput");
        let canvas = document.getElementById("canvasFrame");
        
        var faceCascade;
        var faces;
        var msize;
        video.width = 640;
        video.height = 480;
        var height;
        var width;
       
       function opencvReady(){
           console.log("OpenCV.JS library ready");
           h1_text = document.getElementById("h1_text_1");
           h1_text.innerHTML = "done loading";
       }
       function opentfReady(){
           console.log("Tensorflow.js Library ready");
           h1_text_2 = document.getElementById("h1_text_2");
           h1_text_2.innerHTML = "Tensorflow ready";
           
       }
   
      
       function readVideo(){
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

       function processVideo(){     
        const FPS = 60;
       
        
        let cap = new cv.VideoCapture(video);
        
        let src = new cv.Mat(height,width,cv.CV_8UC4);
        let dst = new cv.Mat(height,width,cv.CV_8UC1);
        let begin = Date.now();
        
        cap.read(src);
        cv.cvtColor(src,dst,cv.COLOR_BGR2GRAY);
        try{

        
           faceCascade.detectMultiScale(dst,faces,1.1,3,0);
           console.log("detecting face")
           for (let i=0;i<faces.size();i++){
               let face =faces.get(i);
               let point1 = new cv.Point(face.x,face.y);
               let point2 = new cv.Point(face.x+face.width,face.y+face.height);
               cv.rectangle(dst,point1,point2,[255,0,0,255]);
               let rect = new cv.Rect(face.x,face.y,face.width,face.height);
               imageface = src.roi(rect);

           }
        cv.imshow(canvas,imageface);
        var imageURI = canvas.toDataURL();
        var imageblob;
        fetch(imageURI).then(res => res.blob()).then(function(blob){
            console.log(blob);
            var storageRef = firebase.storage().ref();
            var studentImageRef = storageRef.child('irfan/irfan.jpg')
            var uploadTask = studentImageRef.put(blob)
        });
        
       
        let delay = 1000/FPS - (Date.now() - begin);
        setTimeout(processVideo,delay);
           
        }
        catch(err){
            console.log(err)
            console.log("Cannot detect face")
        }
}       
     </script>
    

    </body>
    
</html>

<?php /*
References :
1. https://codesandbox.io/s/opencvjs-getting-started-with-videos-adapted-ptmye

*/?>