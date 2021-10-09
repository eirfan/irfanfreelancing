import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import html2canvas from '../html2canvas';
import  saveAs  from 'file-saver';
import Button from 'react-bootstrap/Button';
import Typical from 'react-typical'
import Flippy,{FrontSide,BackSide} from 'react-flippy';



function Example() {
    
    var number = 3+5;
    var screencapture=document.getElementById('screencapture');
    /*html2canvas is api library that can provide
      convension of div element@body into image,
      Instead of html2canvas, there is another
      librari call file-saver that is used
      to save blob file into client folder
     */
    html2canvas(document.querySelector("#screencapture")).then(function(canvas) {
       
        document.body.appendChild(canvas);

        var base64image= canvas.toDataURL("image/png");

        window.open(base64image,"_blank");

        canvas.toBlob(function(blob){
            saveAs(base64image,"yourresume.png");
        });

        
        
       
    });
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                       
                    </div>
                </div>
            </div>
        </div>
        
    );
}

function ButtonCapture(){
    console.log("Read ButtonCapture function");
    return (
        <Button variant="outline-success" onClick={Example}>Save</Button>
    );
}

function FirstAnimation(){

    return(
        <Typical
            steps={['Hello',1000,'My Name is Irfan Hafiz Bin Ibrahim',1000,'Nice to meet you',1000]}
            loop={Infinity}
            wrapper="p"/>
    )
}









export default Example;



if (document.getElementById('example')) {
    console.log("read example");
    if(document.getElementById('saveresume').onclick){
        console.log("read saveresume");
    //if there is a div tag with id = example..it will execute the Example() function
    
    ReactDOM.render(<Example />, document.getElementById('example'));
    }
}

if(document.getElementById('savebutton')){
    console.log('Read Savebutton');
    ReactDOM.render(<ButtonCapture />,document.getElementById('savebutton'));
}

if(document.getElementById('firstanimation')){
    console.log('Read First Animatiomn');
    ReactDOM.render(<FirstAnimation />,document.getElementById('firstanimation'));
}

