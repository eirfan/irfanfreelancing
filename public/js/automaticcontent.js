const { LIST_STYLE_TYPE } = require("html2canvas/dist/types/css/property-descriptors/list-style-type");

function automaticcontent(){
    
    let text = document.getElementById("txt-1");
    let textdiv = document.getElementById("div-0");
    let textcontent = text.textContent;
    text.style.display="block";
    console.log("Automatic Content function");
    console.log(textcontent)
    for(let i=0;i<textcontent.length;i++){
        console.log(textcontent.charAt(i));
        textdiv.innerHTML = text.innerHTML + textcontent.charAt(i);
        //calculate the breaktime
      
    
    }
  
    
    
}
automaticcontent();