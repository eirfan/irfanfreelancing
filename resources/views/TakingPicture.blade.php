<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Freelancing Website">
        <meta name="content" content="irfanfreelancing">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5b245a5d8a.js" crossorigin="anonymous"></script>
        
        <script type="text/javascript" onload="readVideo()"  src="{{URL::asset('https://docs.opencv.org/3.4.0/opencv.js')}}" defer>
        <script type="text/javascript" async onload='opentfReady()' src="{{URL::asset('https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js')}}" defer></script>
        <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
    </head>
    <body>
        
        <div class="container">
            <div class='row' >
                <div class="col-sm-8">
       
        <video style="" id="videoInput"> 
          
        </video>
        <canvas id="canvasFrame" style="visibility:hidden !important;width:480px;height:640px"></canvas>
        
        
    </div>
    
    </div>
    <div class="row" style="width:60px;height:60px">
        <button id='button_takecamera' disabled style="justify-content:center" onclick="opencvReady()" class="btn btn-lg btn-primary rounded-circle" ><i class="fa-solid fa-camera"></i></button></div>
    </div>
    <h1 id="studentname">{{$studentname}}</h1>
        

     <script type="text/javascript">
        let video = document.getElementById("videoInput");
        let canvas = document.getElementById("canvasFrame");
        let context = canvas.getContext('2d');
        let takecbutton = document.getElementById("button_takecamera");
        let studentname = document.getElementById("studentname");
        let valstudentname = studentname.innerHTML
        console.log("Student name :"+valstudentname);
        const FPS = 60;
        var faceCascade;
        var faces;
        var msize;
        video.width = 640;
        video.height = 480;
        var height;
        var width;
        let imagenumber = 0;
       
       function opencvReady(){
           console.log("OpenCV.JS library ready");
          
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
        
        var cap = new cv.VideoCapture(video);
        
        var src = new cv.Mat(height,width,cv.CV_8UC4);
        var dst = new cv.Mat(height,width,cv.CV_8UC1);
        let begin = Date.now();
        
        cap.read(src);
        cv.cvtColor(src,dst,cv.COLOR_BGR2GRAY);
        try{
           faceCascade.detectMultiScale(dst,faces,1.1,10,(64,64));
           console.log("detecting face")
           for (let i=0;i<faces.size();i++){
               let face =faces.get(i);
               let point1 = new cv.Point(face.x,face.y);
               let point2 = new cv.Point(face.x+face.width,face.y+face.height);
               cv.rectangle(dst,point1,point2,[255,0,0,255]);
               let rect = new cv.Rect(face.x,face.y,face.width,face.height);
               imageface = src.roi(rect);

           }
           if(imageface != null && imagenumber <=10){
            cv.imshow(canvas,imageface);
           // takecbutton.disabled = false;
           var imageURI = canvas.toDataURL();
           var imageblob;
           fetch(imageURI).then(res => res.blob()).then(function(blob){
              console.log(blob);
              var storageRef = firebase.storage().ref();
              var studentImageRef = storageRef.child(valstudentname+'/'+valstudentname+imagenumber+'.jpg')
              var uploadTask = studentImageRef.put(blob)
           }).then(function(){
            imagenumber = imagenumber + 1; 
            imageface.delete();
           });
            
           }
        
        console.log(imagenumber);
        
        let delay = 1000/FPS - (Date.now() - begin);
        setTimeout(processVideo,delay);
           
        }
        catch(err){
            console.log(err)
            console.log("Cannot detect face")
            context.clearRect(0,0,canvas.width,canvas.height);
            takecbutton.disabled = true;
            let delay = 1000/FPS - (Date.now() - begin);
            setTimeout(processVideo,delay)
        }
}  

function takepicture(){
   
        
}
     </script>
    

    </body>
    
</html>

<?php /*
References :
1. https://codesandbox.io/s/opencvjs-getting-started-with-videos-adapted-ptmye
2. https://getbootstrap.com/docs/5.1/getting-started/introduction/

*/
?>