import React from 'react';
import ReactDOM from 'react-dom';
import html2canvas from '../html2canvas';
import  saveAs  from 'file-saver';
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



export default Example;


if (document.getElementById('example')) {
    console.log("read example");
    if(document.getElementById('saveresume').onclick){
        console.log("read saveresume")
    //if there is a div tag with id = example..it will execute the Example() function
    
    ReactDOM.render(<Example />, document.getElementById('example'));
    }
}

