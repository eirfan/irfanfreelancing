<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <script type="text/javascript" src="{{URL::asset('https://irfanfreelancer.herokuapp.com/js/opencv.js')}}" defer></script>
        <div>
        <video id="videoInput"> 

        </video>
        <canvas id="canvasFrame"></canvas>
        </div>
     <script type="text/javascript">
       let src = new cv2.Mat(height,width,cv.CV_8UC4);
       let dst = new cv2.Mat(height,width,cv.CV_8UC1);
       let cap = new cv2.VideoCapture(videoSource)
     </script>
    

    </body>
</html>
