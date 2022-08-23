<!DOCTYPE html>
<html>
    <head>
    
     
    </head>
    <body>
        <div></div>
        <canvas id='canvasFrame'></canvas>
        <video id= 'videoInput'></video>
        <script type="text/javascript">
         let video = document.getElementById("videoInput");
         let canvas = document.getElementById('canvasFrame');
         let context = canvas.getContext('2d');
         video.width = 640;
         video.height = 480;
         let height = video.height;
         let width = video.width;
         let faceCascade  = 'h'
       
         const FPS = 30;
          
          
         function opencamera(){
            navigator.mediaDevices.getUserMedia({video:true,audio:false}).then(function(stream){
                video.srcObject = stream;
                video.play();
                setTimeout(opencvprocessvideo,0);
                
            }).catch(function(err){
                console.log("Error : "+err);
            })
         }

         function opencvprocessvideo(){
            
            var cap = new cv.VideoCapture(video);
            var src = new cv.Mat(height,width,cv.CV_8UC4);
            var dst = new cv.Mat(height,width,cv.CV_8UC1);
            let begin = Date.now()
            

            cap.read(src);
            cv.imshow(canvas,src);
            let delay = 1000/FPS - (Date.now() - begin);
            setTimeout(opencvprocessvideo,delay);


         }
         function postopencvload(){
            console.log("Open cv library loaded");
            opencamera()
            
          }
        </script>

<script onload="postopencvload()" type="text/javascript" src="{{URL::asset('https://irfanfreelancer.herokuapp.com/js/opencv.js')}}"></script>
    </body>
</html>