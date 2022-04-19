<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">
        <meta name="description" content="Freelancing Website">
        <meta name="content" content="irfanfreelancing">
    </head>
    <body>
        <script type="text/javascript" onload='opencvReady()' async src="{{URL::asset('https://docs.opencv.org/3.4.0/opencv.js')}}" defer></script>
        <div style="align-content: center">
        <h1 id="h1_text_1">Loading the page, it will take time longer for new user</h1></div>
        <div>
        <video id="videoInput"> 

        </video>
        <canvas id="canvasFrame"></canvas>
        </div>
     <script type="text/javascript">
       function opencvReady(){
           console.log("OpenCV.JS library ready");
           h1_text = document.getElementById("h1_text_1");
           h1_text.innerHTML = "done loading";
       }

       let video = document.getElementById("videoInput");
       navigator.mediaDevices.getUserMedia({video:true,audio:false}).then(function(stream){
           video.srcObject = stream;
           video.play();
       }).catch(function(err){
           console.log("an error occured"+err);
       });

       let src = new cv.Mat(height, width, cv.CV_8UC4);
       let dst = new cv.Mat(height,width,cv.CV_8UC1);
       let cap = new cv.VideoCapture(videoSource);

       const FPS =30;
       function processVideo(){
           console.log("running process Video function");
           let begin = Date.now();
           cap.read(src);
           cv.cvtColor(src,dst,cv.COLOR_RGB2GRAY);
           cv.imshow("canvasFrame",dst)
           let delay = 1000/FPS - (Date.now()-begin);
           setTimeout(processVideo,delay);
       }
       //schedule the first one
       setTimeout(processVideo,0);

     </script>


    

    </body>
</html>
