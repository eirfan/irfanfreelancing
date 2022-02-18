<!DOCTYPE html>
<html>

<head>

<style>

* {
  box-sizing: border-box;
}

#icjjcj{
  display:inline-block;
  transition-delay:1ms;
}
.header-banner{
  padding-top:35px;
  padding-bottom:100px;
  color:rgb(255, 255, 255);
  font-family:Helvetica, serif;
  font-weight:100;
  background-image:url(none), url(./img/work-desk.jpg);
  background-attachment:scroll, scroll;
  background-position-x:left, center;
  background-position-y:top, center;
  background-repeat-x:no-repeat, no-repeat;
  background-repeat-y:repeat, no-repeat;
  background-size:contain, cover;
}
.container-width{
  width:90%;
  max-width:1150px;
  margin-top:0px;
  margin-right:auto;
  margin-bottom:0px;
  margin-left:auto;
}
.lead-title{
  margin-top:150px;
  margin-right:0px;
  margin-bottom:30px;
  margin-left:0px;
  font-size:40px;
  text-align:center;
  color:#000000;
  opacity:0.68;
  width:50%;
  margin:150px 9px 30px 30%;
}
.flex-sect{
  background-color:rgb(250, 250, 250);
  padding-top:100px;
  padding-right:0px;
  padding-bottom:100px;
  padding-left:0px;
  font-family:Helvetica, serif;
}
.flex-title{
  margin-bottom:15px;
  font-size:2em;
  text-align:center;
  font-weight:700;
  color:rgb(85, 85, 85);
  padding-top:5px;
  padding-right:5px;
  padding-bottom:5px;
  padding-left:5px;
}
.flex-desc{
  margin-bottom:55px;
  font-size:1em;
  color:rgba(0, 0, 0, 0.5);
  text-align:center;
  padding-top:5px;
  padding-right:5px;
  padding-bottom:5px;
  padding-left:5px;
}
.cards{
  padding-top:20px;
  padding-right:0px;
  padding-bottom:20px;
  padding-left:0px;
  display:flex;
  justify-content:space-around;
  flex-direction:initial;
  flex-wrap:wrap;
}
.card{
  background-color:white;
  height:300px;
  width:300px;
  margin-bottom:30px;
  box-shadow:rgba(0, 0, 0, 0.2) 0px 1px 2px 0px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  border-bottom-right-radius:2px;
  border-bottom-left-radius:2px;
  transition-duration:0.5s;
  transition-timing-function:ease;
  transition-delay:0s;
  transition-property:all;
  font-weight:100;
  overflow-x:hidden;
  overflow-y:hidden;
}
.card:hover{
  margin-top:-5px;
  box-shadow:rgba(0, 0, 0, 0.2) 0px 20px 30px 0px;
}
.card-header{
  height:100%;
  max-width: 100%;
  background-image:url("https://miro.medium.com/max/1280/0*_M1bx7VHKXQkbfX9");
  background-size:cover;
  background-position-x:center;
  background-position-y:center;
}
.card-header.ch2{
  background-image:url("//placehold.it/350x250/459ba8/fff/image2.jpg");
}
.card-header.ch3{
  background-image:url("//placehold.it/350x250/79c267/fff/image3.jpg");
}
.card-header.ch4{
  background-image:url("//placehold.it/350x250/c5d647/fff/image4.jpg");
}
.card-header.ch5{
  background-image:url("//placehold.it/350x250/f28c33/fff/image5.jpg");
}
.card-header.ch6{
  background-image:url("//placehold.it/350x250/e868a2/fff/image6.jpg");
}
.card-body{
  padding-top:15px;
  padding-right:15px;
  padding-bottom:5px;
  padding-left:15px;
  color:rgb(85, 85, 85);
}
.card-title{
  font-size:1.4em;
  margin-bottom:5px;
}
.card-sub-title{
  color:rgb(179, 179, 179);
  font-size:1em;
  margin-bottom:15px;
}
.card-desc{
  font-size:0.85rem;
  line-height:17px;
}
.am-sect{
  padding-top:100px;
  padding-bottom:100px;
  font-family:Helvetica, serif;
}
.am-container{
  display:flex;
  flex-wrap:wrap;
  align-items:center;
  justify-content:space-around;
}
.am-content{
  float:left;
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  width:490px;
  color:rgb(68, 68, 68);
  font-weight:100;
  margin-top:50px;
}
.am-pre{
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  color:rgb(177, 177, 177);
  font-size:15px;
}
.am-title{
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  font-size:25px;
  font-weight:400;
}
.am-desc{
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  font-size:17px;
  line-height:25px;
}
.am-post{
  padding-top:7px;
  padding-right:7px;
  padding-bottom:7px;
  padding-left:7px;
  line-height:25px;
  font-size:13px;
}
.blk-sect{
  padding-top:100px;
  padding-bottom:100px;
  background-color:rgb(34, 34, 34);
  font-family:Helvetica, serif;
}
.bdg-sect{
  padding-top:100px;
  padding-bottom:100px;
  font-family:Helvetica, serif;
  background-color:rgb(250, 250, 250);
}
.c10816{
  position:relative;
  width:980px;
  margin:0 auto;
}
.c10841{
  width:880px;
  margin:0 auto;
  position:relative;
  overflow:hidden;
  white-space:nowrap;
}
.c10886{
  position:absolute;
  display:block;
  cursor:pointer;
  top:50%;
  left:0;
  margin-top:-25px;
}
.c10922{
  position:absolute;
  display:block;
  cursor:pointer;
  top:50%;
  right:0;
  margin-top:-25px;
}

</style>
</head>
<body>
    <header class="header-banner">
        <div><p style="font-size: 50px;color:black;text-align:center">WORKSPACE, ARTICLE AND RESOURCES</p></div>
        <div id="idso8o" class="c10816">
          <div class="gjs-lory-frame c10841">
            <div class="gjs-lory-slides" id="icjjcj">
            </div>
          </div>
          <span class="gjs-lory-prev c10886"></span>
          <span class="gjs-lory-next c10922"></span>
        </div>
      </header>
      <section class="flex-sect">
        <div class="container-width">
          <div class="flex-title">Blog and Article
          </div>
          <div class="flex-desc">Feel free to read some of my blog and article about Computer Science and Technology
          </div>
          <div class="cards">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                <div class="card-title">Expert Physician VS Expert System
                </div>
                <div class="card-sub-title"><?php echo date("Y/m/d") ?>
                </div>
                <div class="card-desc"><b>Status</b> : Comming Soon
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch2">
              </div>
              <div class="card-body">
                <div class="card-title">Title two
                </div>
                <div class="card-sub-title">Subtitle two
                </div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch3">
              </div>
              <div class="card-body">
                <div class="card-title">Title three
                </div>
                <div class="card-sub-title">Subtitle three
                </div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch4">
              </div>
              <div class="card-body">
                <div class="card-title">Title four
                </div>
                <div class="card-sub-title">Subtitle four
                </div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch5">
              </div>
              <div class="card-body">
                <div class="card-title">Title five
                </div>
                <div class="card-sub-title">Subtitle five
                </div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch6">
              </div>
              <div class="card-body">
                <div class="card-title">Title six
                </div>
                <div class="card-sub-title">Subtitle six
                </div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="am-sect">
        <div class="container-width">
          <div class="am-container">
            <div class="am-content">
              <div class="am-pre">ASSET MANAGER
              </div>
              <div class="am-title">Manage your images with Asset Manager
              </div>
              <div class="am-desc">You can create image blocks with the command from the left panel and edit them with double click
              </div>
              <div class="am-post">Image uploading is not allowed in this demo
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="blk-sect">
      </section>
      <section class="bdg-sect">
        <div class="container-width">
        </div>
      </section>
      <script>var items = document.querySelectorAll('#idso8o');
        for (var i = 0, len = items.length; i < len; i++) {
          (function(){
            var e = this,
                t = "https://cdnjs.cloudflare.com/ajax/libs/lory.js/2.3.4/lory.min.js",
                l = ["0", "false"],
                s = "";
            s = "true" == s ? 1 : parseInt(s, 10);
            var a = {
              slidesToScroll: parseInt("1", 10),
              enableMouseEvents: l.indexOf("") >= 0 ? 0 : 1,
              infinite: !isNaN(s) && s,
              rewind: !(l.indexOf("") >= 0),
              slideSpeed: parseInt("300", 10),
              rewindSpeed: parseInt("600", 10),
              snapBackSpeed: parseInt("200", 10),
              ease: "ease",
              classNameFrame: "gjs-lory-frame",
              classNameSlideContainer: "gjs-lory-slides",
              classNamePrevCtrl: "gjs-lory-prev",
              classNameNextCtrl: "gjs-lory-next"
            }
            ,
                r = function() {
                  window.sliderLory = lory(e, a)
                };
            if ("undefined" == typeof lory) {
              var n = document.createElement("script");
              n.src = t, n.onload = r, document.head.appendChild(n)
            }
            else r()}
           .bind(items[i]))();
        }
      </script>
      

</body>
</html>