<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">
        <meta name="description" content="Freelancing Website">
        <meta name="content" content="irfanfreelancing">
        
        
        <script type="text/javascript" onload='readVideo()'  src="{{URL::asset('https://docs.opencv.org/3.4.0/opencv.js')}}" defer>
            <script type="text/javascript" async onload='opentfReady()' src="{{URL::asset('https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js')}}" defer></script>
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
        const FPS = 30;
        opencvReady()
        
        let cap = new cv.VideoCapture(video);
        
        let src = new cv.Mat(height,width,cv.CV_8UC4);
        let dst = new cv.Mat(height,width,cv.CV_8UC1);
        let begin = Date.now();
        cap.read(src);
        cv.cvtColor(src,dst,cv.COLOR_BGR2GRAY);
        cv.imshow("canvasFrame",dst);
        let delay = 1000/FPS - (Date.now() - begin);
        setTimeout(processVideo,delay);
    

}
        
       
     </script>




    

    </body>
    
</html>

<?php /*
References :
1. https://codesandbox.io/s/opencvjs-getting-started-with-videos-adapted-ptmye

*/?>