<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <script type="text/javascript" async src="{{URL::asset('https://irfanfreelancer.herokuapp.com/html/opencv.js')}}" defer></script>
        <div>
        <video id="videoInput"> 

        </video>
        <canvas id="canvasFrame"></canvas>
        </div>
     <script type="text/javascript">
       let video = document.getElementById("videoInput");
       navigator.mediaDevices.getUserMedia({video:true,audio:false}).then(function(stream){
           video.srcObject = stream;
           video.play();
       }).catch(function(err){
           console.log("an error occured! "+err)
       });

       let canvasFrame = document.getElementById("canvasFrame");
       let context = canvasFrame.getContext("2d");
       let src = new cv2.Mat(height,width,cv.CV_8UC4);
       let dst = new cv2.Mat(height,width,cv.CV_8UC1);

       const FPS = 30;
       function processVideo(){
           let begin = Date.now();
           context.drawImage(video,0,0,width,height);
           src.data.set(context.getImageData(0,0,width,height).data);
           cv.cvtColor(src,dst,cv.COLOR_BGR2GRAY);
           cv.imshow("canvasOutput",dst)

           let delay = 1000/FPS - (Data.now() - begin);
           setTImeout(processVideo,delay);
       }
       setTimeout(processVideo,0)
     </script>
    

    </body>
</html>
