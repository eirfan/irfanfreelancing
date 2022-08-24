<!DOCTYPE html>
<html>
    <head>
    
     
    </head>
    <body>
        <div></div>
        <canvas id='canvasFrame'></canvas>
        <video id= 'videoInput'></video>
        <script defer type="text/javascript">
         let video = document.getElementById("videoInput");
         let canvas = document.getElementById('canvasFrame');
         let context = canvas.getContext('2d');
         video.width = 640;
         video.height = 480;
         let height = video.height;
         let width = video.width;
         let loaded = false;
         var src;
         var cap;
         var dst;
         var faceCascade;
         let faceCascadeFile;
         let classifier;
         let faces;
         
       
         const FPS = 30;
          
          
         function opencamera(){
            
            navigator.mediaDevices.getUserMedia({video:true,audio:false}).then(function(stream){
                video.srcObject = stream;
                video.play();
                setTimeout(opencvprocessvideo);
                
                
            }).catch(function(err){
                console.log("Error : "+err);
            })
         }

         

         function opencvprocessvideo(){
            let begin = Date.now()    
            cap.read(src);
            cv.cvtColor(src,dst,cv.COLOR_BGR2GRAY)
            cv.imshow(canvas,dst);
            classifier.detectMultiScale(dst,faces,1.1,10,(64,64));
            for (let i=0;i<faces.size();++i){
                let face = faces.get(i);
                let point1 = new cv.Point(face.x,face.y);
                let point2= new cv.Point(face.x+face.width,face.y+face.height);
                cv.rectangle(src,point1,point2,[255,0,0,255]);
            }
            
            let delay = 1000/FPS - (Date.now() - begin);
            setTimeout(opencvprocessvideo,delay);
           // console.log("Error when detecting face ");
           // console.log("Erro : "+err)
           // setTimeout(opencvprocessvideo);
        }
        

         
         function postopencvload(){
            console.log("Open cv library loaded");
            loaded = true;
            cap = new cv.VideoCapture(video);
            // load the xml file must be done here
            classifier = new cv.CascadeClassifier();
            faceCascadeFile = "https://raw.githubusercontent.com/opencv/opencv/master/data/haarcascades/haarcascade_frontalface_default.xml";
            let xhttp = new XMLHttpRequest();
            xhttp.open("GET",faceCascadeFile,true);
            xhttp.responseType="arraybuffer";
            xhttp.onload= function(ev){
                if(xhttp.readyState == 4){
                    if(xhttp.status == 200){
                        let data = new Uint8Array(xhttp.response);
                        cv.FS_createDataFile('/',faceCascadeFile,true,false,false);
                        classifier.load(faceCascadeFile)
                        console.log("succefully load "+faceCascadeFile+ " status : "+xhttp.status);
                    }else{
                        console.log("failed to load "+faceCascadeFile+" status : "+xhttp.status )
                    }
                }
            }
            xhttp.send();
            if(classifier.load(faceCascadeFile)){
                console.log("able to load the face cascade file");
            }
            else{
                console.log("unable to load the file");
            }
           
        
            src = new cv.Mat(height,width,cv.CV_8UC4);
            dst = new cv.Mat(height,width,cv.CV_8UC1);
            faces = new cv.RectVector();  
            opencamera();
            
          }
        </script>
<script type='text/javascript' src='util.js'></script>
<script onload="postopencvload()" type="text/javascript" src="{{URL::asset('https://irfanfreelancer.herokuapp.com/js/opencv.js')}}">
console.log("Shit hereee")</script>
    </body>
</html>