

var s= document.createElement("script");
s.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js";
document.getElementsByTagName('head')[0].appendChild(s);
var buttonone = document.getElementById("button_content_one")
var buttontwo = document.getElementById("button_content_two")
var content_one = document.getElementById("content_one")
var content_two = document.getElementById("content_two")
var content_name = document.getElementById("content_name")
console.log("READ here la");

buttonone.onclick = function(){
 //function when button one clicked
 content_name.innerHTML="HomePage";

 $(content_two).fadeOut();
 $(content_one).fadeIn("slow");
 content_one.style.display="block"
 content_two.style.display="none";


}

buttontwo.onclick = function(){
//function when button two clicked
content_name.innerHTML = "Not Home Page";
console.log("Function button two clicked")
$(content_one).fadeOut("slow")
$(content_two).fadeIn("slow");
   
   content_one.style.display="none"
   content_two.style.display="block";
}


