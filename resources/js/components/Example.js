import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import html2canvas from '../html2canvas';
import  saveAs  from 'file-saver';
import Button from 'react-bootstrap/Button';
import Typical from 'react-typical'
import Flippy,{FrontSide,BackSide} from 'react-flippy';
import { Badge } from 'react-bootstrap';
import { wrap } from 'lodash';



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

function SecondAnimation(){
    return(
    <Typical
    steps={['Welcome',2000,"Thank you for visiting my webiste",2000,"About will tell you a little summary about me",2000,"Feel free to check my projects",2000,"Education is important, maybe you should take a look at it",2000,"Interest should not be bad, I not just that nerd person",2000,"Wow, more award comming up",2000,"My E-portfolio, should be interesting"]}
    loop={infinity}
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
    console.log('Read First Animation lorh');
    ReactDOM.render(<FirstAnimation />,document.getElementById('firstanimation'));
}

if(document.getElementById('secondanimation')){
    console.log("Read second animation")
    ReactDOM.render(<SecondAnimation/>,document.getElementById("secondanimation"))
}


