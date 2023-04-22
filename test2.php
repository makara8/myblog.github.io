
<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Labrada:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    background-color: #F4F4F4;
    font-family: Arial, Helvetica, sans-serif;
    
  }
  .bar1 {
 background-color: #FFA923;
 height: 50px;
 margin-top: 0;
 margin-bottom: 0;
 padding-top: 20px;
  }
  .bar2 {
    background-color: #FFFFFF;
    height: 90px;
    margin-top: 0;
   width: 100%;
  }
  .bar3 {
    color: white;
    
   padding-left: 60px;  
  }
 .bar3:hover {
  opacity: 0.5;
 }
 .img {
  height: 50px;
  width: 50px;
  margin-top: 15px;
    margin-left: 50px;
 }
 .display {
  display: none;
 }
 #navbar {
  display: inline;
  float: right;
  padding-right: 850px;
  padding-top: 15px;
 
  
 }

 a {
  text-decoration: none;
 }
.ll:hover {
  opacity: 0.8;
}
 .ll a {
  color: black;
 }
 .imgd {
  height: 12px;
 }
 .display {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
 }
 .display a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
 }
 .display a:hover {
  background-color: #f1f1f1;
 }
 li.ll {
  display: inline-block;
}
.ll:hover .display {
  display: block;
}
.trt {
 margin-top: 16px;
  margin-left: 169px;
}
.ff {
  background-color: #FFFFFF;
  overflow: hidden;
  width: 50%;
  padding: 10px;

}
@media screen and (max-width:999px) {
  .bar2 {
    display: none;
  } 
  #bb {
    display: none;
  }
}
@media screen and (max-width:999px) { 
  #aa {
    display: block;
    background-color: greenyellow;
    width: 100%;
  }
  #bb {
    display: none;
  }
  .trt {
    margin-left: 15px;
    margin-top: 10px;
  }
  .ff {
    padding-left: 0;
    padding-bottom: 50px;
    display: inline-block;
    padding-right: 430px;
  }
}
@media screen and (min-width:1000px) {
  #aa {
    display: none;
  }

  #bb {
    display: none;
   padding: 10px;
  }
}
#bb li {
 list-style-type: none;
}
hr {
  opacity: 0.3;

}
#aso1 {
  display: none;

}
#aso2 {
  display: none;
}
#aso3 {
  display: none;
}
.aso1 .active {
 height: 100px;
}
.tyu a {
  display: block;
  padding: 5px 12px;
}
.span {
  font-size: 30px;
}
.slide a {
  color: black;
}
.slide li  {
  padding-bottom: 10px;
  padding-top: 10px;
}
#text {
  display: block;
    width: 78%;
    border: 1px solid white;
    background-color: #ECECEC;
    margin-top: 0;
    padding-top: 0;
    display: block;
    padding: 15px;
    margin-left: 120px;
    border-radius: 5px;
    top: 70px;
    position: absolute;
    transition: all .10s ease
}
#search {
  top: 74px;
    display: block;
    float: right;
    position: absolute;
    margin-left: 1240px;
    margin-top: 7px;
    cursor: pointer;
}
#search:hover {
  opacity: 0.6;
}
.card {
  background-color: #FFFFFF;
    padding-left: 20px;
   padding-top: 10px;
   padding-bottom: 4px;
   margin-top: 10px;
}
.ddd {
  padding-top: 50px;
}
.err {
  float: left;
  padding-top: 20px;
  width: 250px;
  margin-right: 10px;
}
.ttt {
  padding-top: 30px;
}
.qww {
  width: 20px;
    float: left;
    margin-right: 10px;
}
.kkl {
  font-size: 15px;
    background-color: #FF5800;
    color: white;
    padding: 2px;
    margin-bottom: 5px;
    padding-left: 5px;
    padding-right: 5px;
    width: 40%;
}
.rightcolumn {
  float: left;
  width: 37%;
}
.leftcolumn {
  float: left;
}
.sub {
  display: block;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    padding-top: 5px;
    padding-bottom: 5px;
    background-color: #FF5F0B;
    color: white;
    border: 1px;
    border-radius: 5px;
}
.llo {
  border: 2px solid orange;
    color: red;
    margin-left: 10px;
    padding: 2px;
}
.footer {
  clear: both;
  content: "";
  display: table;
}
.kio {
  width: 100px;
  padding-bottom: 10px;
}
.oop {
  color: white;
    float: right;
    padding-right: 30px;
}
.clear {
  clear: both;
  content: "";
  display: table;
}
.bbd {
  clear: both;
  content: "";
  display: table;
  color: white;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 40px;
    font-size: 20px;
}
@media screen and (max-width: 1441px) {
  .row {
    margin-left: 0  !important;
    margin-right: 0  !important;
  }
}
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100% !important;
    padding: 0 !important;
  } .xass {
    width: 25% !important;
  }
}
  @media screen and (max-width: 800px) {
    html {
    margin-right: 0 !important;
    margin-left: 0 !important;
    overflow: auto !important;
    }
  } 
  @media screen and (max-width: 800px) {
  body {
    padding-right: 0 !important;
    margin-right: 10px !important;
    overflow-x: hidden !important;
  }
}
@media screen and (max-width: 800px) {
.bar1 {
    padding-right: 0 !important;
    margin-right: 0 !important;
  }
}
@media screen and (max-width: 800px) {
.row {
    margin-left: 10px !important;
    margin-right: 0 !important;
  }
}

  @media screen and (max-width: 800px) {
  .serial {
    background-color: #FFFFFF !important;
  } 
}
@media screen and (max-width: 800px) {
.sdf {
    float: right !important;
    font-size: 15px !important;
    padding-right: 5px !important;
    opacity: 0.8 !important;
    margin-right: 50px !important;
}
}
@media screen and (max-width: 800px) {
.ddd {
  padding-top: 50px !important;
}
}
@media screen and (max-width: 800px) {
.err {
  float: left !important;
    padding-top: 20px !important;
    margin-right: 10px !important;
}
}
@media screen and (max-width: 800px) {
.kkl {
 
    background-color: #FF5800 !important;
    color: white !important;
    float: left !important;
    margin-right: 243px !important;
    padding: 2px !important;
    margin-bottom: 5px !important;
    padding-left: 5px !important;
    padding-right: 5px !important;
}
}
@media screen and (max-width: 800px) {
.ttt {
  padding-top: 30px !important;
}
}
@media screen and (max-width: 800px) {
.qww {
  width: 20px !important;
    float: left !important;
    margin-right: 10px !important;
    margin-left: 50px !important;
}
}
.bgg:hover {
  -ms-transform: scale(0.98); /* IE 9 */
    -webkit-transform: scale(0.98); /* Safari 3-8 */
    transform: scale(0.98);
    z-index: 2; 
    transition: all 0.1s linear;
}
@media screen and (max-width: 800px) {
.vbc {
  font-size: 15px !important;
    opacity: 0.8 !important;
}
}
@media screen and (max-width: 800px) {
.zwer {
  text-align: center !important;
    padding: 10px !important;
    background-color: #FF5800 !important;
    width: 20% !important;
    color: white !important;
    border-radius: 10px !important;
    margin-left: 150px !important;
}
}

@media screen and (max-width: 800px) {
.hello {
    background-color: #FFFFFF !important;
    padding-bottom: 20px !important;
    margin-bottom: 20px !important;
  }
}
@media screen and (max-width: 800px) {
  .topboott {
    width: 375px !important;
    padding: 0 !important;
    display: block !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }
}
@media screen and (max-width: 800px) {
.lol {
  display: block !important;
    margin-left: auto !important;
    margin-right: auto !important;
    margin-top: 10px !important;
  }
}
@media screen and (max-width: 800px) {
.ppui {
    color: white !important;
    text-align: center !important;
  }
}
@media screen and (max-width: 800px) {
.kio {
    width: 100px !important;
    padding-bottom: 10px !important;
    margin-left: 3px !important;
  }
}
@media screen and (max-width: 800px) {
.oop {
    color: white !important;
    padding-right: 30px !important;
    width: 300px !important;
    margin-left: 20px !important;
  
  }
}
@media screen and (max-width: 800px) {
.killer {
    margin-left: 14px !important;
    margin-top: 100px !important;
  }
}
@media screen and (max-width: 800px) {
.uyt {
    color: white !important;
    position: relative !important;
    bottom: 65px !important;
    font-size: 20px !important;
    margin-left: 10px !important;
  }
}
@media screen and (max-width: 800px) {
.joll{
    background-color: #FF5800;
    padding: 10px !important;
    margin: 0 !important;
    color: #f1f1f1 !important;
    float: left !important;
    position: relative !important;
    bottom: 38px !important;
  }
}
@media screen and (max-width: 800px) {
.bbd {
    clear: both !important;
    content: "" !important;
    display: table !important;
    color: white !important;
    margin-left: auto !important;
    margin-right: auto !important;
    margin-bottom: 40px !important;
    font-size: 20px !important;
    width: 375px !important;
  }
}
@media screen and (max-width: 800px) {
.searchbott {
    display: block !important;
    margin-left: auto !important;
    margin-right: auto !important;
    width: 375px !important;
  }
}
@media screen and (max-width: 800px) {
.clear {
  background-color: #263039 !important;
    padding: 10px !important;
    padding-right: 0px !important;
    display: block !important;
    margin-left: auto !important;
    margin-right: auto !important;
    color: white !important;
    padding-left: 50px !important;
}
  }
  @media screen and (max-width: 800px) {
  .topbott, .searchbott .bottombott .leftbott {   
    width: 100% !important;
    padding: 0 !important;
  }.footer {
    background-color: #15202B !important;
    width: 100% !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
  }.vgv {
  width: 100%  !important;
   float: right  !important;
  }.fuck {
    float: left !important;
    width: 100% !important;
  }.rightcolumn {
    margin-left: 0px !important;
  }
}
.err:hover {
  opacity: 0.6;
}
.err {
  cursor: pointer;
}
.kio:hover {
  opacity: 0.6;
  cursor: pointer;
}
.dd:hover {
  opacity: 0.4;
}
@media screen and (max-width: 1440px) {
 .trt {
  margin-bottom: 15px !important;
    display: flex !important;
    justify-content: start !important;
    width: 46% !important;
    margin-top: 16px !important;
    margin-left: 16px !important;
 }
  .ff {
    padding-left: 0 !important;
    background-color: #FFFFFF !important;
    overflow: hidden !important;
    width: 87% !important;
  }
  }
  @media screen and (max-width: 1012px) {
  }
  body {
    font-family: Raleway, Arial, sans-serif !important;
  }
  p {
    font-weight: 700;
    color: #333333;
  }
  @media screen and (max-width: 800px) {
    .trt {
      width: 112% !important;
    }
  }
  @media screen and (max-width: 979px) {
  .oop {
    margin-left: 10px !important;
  }
  }
</style>
  </head>
  <body class="ooh">
  <div class="bar1">
    <a href="index.html" class="bar3">Home</a>
    <a href="#" class="bar3">About Us</a>
    <a href="#" class="bar3">Privacy Policy</a>
  </div>
  <img src="images/menubar.jpg" style="width: 30px;height: 30px;cursor: pointer;display: none;" id="aa" class="aa" onclick="yui()"/>
 
  <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top" style="background-color: white !important;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="seo.jpg" alt="Logo" style="width:150px;" >
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: black;">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: black;">Recent Post</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: black;">Feature</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link</a></li>
              <li><a class="dropdown-item" href="#">Another link</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: black;">Document</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: black;">Short Code</a>
          </li> 
        
        </ul>
        <form class="d-flex">
          <input class="form-control me-2 myInput" type="text" placeholder="Search" >
          <button class="btn btn-primary" type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
    <div class="trt" style="margin-bottom: 15px;" >
      <div class="ff " style="padding-left: 0;">
    <span style="background-color: #FF5800;width: 100px;padding: 10px;margin: 0;color: #f1f1f1;" class="ioo">Trending</span>
      </div>
  </div>
  <div class="row" style="margin-left: 150px;margin-right: 150px;" id="row">
  <div class="leftcolumn" style="width: 60%;margin-bottom: 20px;">
  <div class="card">
  <div style="background-color: #FFFFFF;" class="serial">
    <a><div style="width: 70%;display: block;  margin-left: auto;  margin-right: auto;"><img src="yuu.jpg" style="width: 100%;display: block;margin-left: auto;margin-right: auto;" class="dd"></div><h3>All Tip To Become Real Estate law ( we must to know In law )</h3><p class="wer3"><img src="images/fakelogo.jpg" class="qww"/>Movies Asian ( eng sub) February 16, </p><p><small>As a real estate law professional, you’ll be responsible for handling complex legal issues in the property industry. You’ll work with clients to provide guidance and legal representation in areas s…</small></p><hr><p><i class="fa-solid fa-caret-right" style="margin-right: 10px;color: orange;"></i>All Tip To Become Real Estate law ( we must to know In law )</p></p><p><i class="fa-solid fa-caret-right" style="margin-right: 10px;color: orange;"></i>All Tip To Become Real Estate law ( we must to know In law )</p></a>
  </div>
  </div>
  <div class="card">
 <h3 style="font-size: 15px;float: left;text-decoration: underline;text-decoration-color: orange;text-decoration-thickness: 5px;text-decoration: underline; text-decoration-color: orange;text-decoration-thickness: 5px;" >Read More</h3>
 <a href="stylesheet4.html"><p style="float: right;font-size: 15px;
 padding-right: 5px;
 opacity: 0.8;color: #0E151D;" class="sdf" >Show More</p></a>
<div style="display: grid;grid-template-columns: repeat(1,100%);">
 <a href="nostylesheet.html" ><div style="float: left; width: 45%;"><img src="images/fakeimg.jpg" style="width: 100%;" class="err"/></div><div style="float: left; width: 50%;margin-left: 10px;"> <p class="kkl" style="font-size: 10px;font-weight: 500;">Social Information</p>
  <h4 class="ttt" style="font-weight: 700;font-size: 17px;line-height: 18px;color: #333333;">All Tip To Become Real Estate law ( we must to know In law )</h4>
  <p class="wer3" style="font-size: 12px;font-weight: 400;line-height: 20px;color: #707070;"><img src="images/fakelogo.jpg" class="qww"/>Movies Asian ( eng sub) February 16, </p>
  <p style="font-size: 13px; line-height: 21px;color: #707070;font-weight: 400;" class="vbc">As a real estate law professional, you’ll be responsible for handling complex legal issues in the property industry. …</p></div></a>
  <a href="nostylesheet2.html" ><div style="float: left; width: 45%;"><img src="images/fakeimg2.jpg" style="width: 100%;" class="err"/></div><div style="float: left; width: 50%;margin-left: 10px;"> <p class="kkl" style="font-size: 10px;font-weight: 500;">Social Information</p>
    <h4 class="ttt" style="font-weight: 700;font-size: 17px;line-height: 18px;color: #333333;">All Tip To Become Real Estate law ( we must to know In law )</h4>
    <p class="wer3" style="font-size: 12px;font-weight: 400;line-height: 20px;color: #707070;"><img src="images/fakelogo.jpg" class="qww"/>Movies Asian ( eng sub) February 16, </p>
    <p style="font-size: 13px; line-height: 21px;color: #707070;font-weight: 400;" class="vbc">As a real estate law professional, you’ll be responsible for handling complex legal issues in the property industry. …</p></div></a>
    <a href="nostylesheet3.html"><div style="float: left; width: 45%;"><img src="images/fakeimg3.jpg" style="width: 100%;" class="err"/></div><div style="float: left; width: 50%;margin-left: 10px;"> <p class="kkl" style="font-size: 10px;font-weight: 500;">Social Information</p>
      <h4 class="ttt" style="font-weight: 700;font-size: 17px;line-height: 18px;color: #333333;">All Tip To Become Real Estate law ( we must to know In law )</h4>
      <p class="wer3" style="font-size: 12px;font-weight: 400;line-height: 20px;color: #707070;"><img src="images/fakelogo.jpg" class="qww"/>Movies Asian ( eng sub) February 16, </p>
      <p style="font-size: 13px; line-height: 21px;color: #707070;font-weight: 400;" class="vbc">As a real estate law professional, you’ll be responsible for handling complex legal issues in the property industry. …</p></div></a>
</div>
    <a href="nostylesheet4.html"><p style="text-align: center;
    padding: 10px;
    background-color: #FF5800;
    width: 20%;
    color: white;
    border-radius: 10px;
    display: block;
    margin-left: auto;
    margin-right: auto;    margin-top: 20px;" class="zwer">Load More<i class="fa-sharp fa-solid fa-forward"></i></p></a>
  </div>
  </div>
  <div class="rightcolumn" id="rightcolumn" >
  <div style="background-color: #FFFFFF; padding-left: 10px; padding-bottom: 1px; padding-top: 20px;border: 2px solid black;margin-bottom: 20px;">
    <img src="images/bell.jpg" style="width: 30px; height: 30px; display: block; margin-left: auto; margin-right: auto;"/>
    <h3 style="text-align: center;">Follow By Email</h3>
    <p>Get Notified About Next Update Direct to Your inbox</p>
    <input type="text" placeholder="Email Adress" style="padding: 10px;display: block; margin-left: auto; margin-right: auto;  text-align: center;width: 70%;">
    <button class="sub">Subscribe</button>
    <p style="font-size: 15px; opacity: 0.8;">* We promise that we don't spam !</p>
  </div>
  <div style="background-color: #FFFFFF;padding-left: 5px; padding-bottom: 40px;margin-bottom: 20px;">
    <h3 style="padding-top: 10px; font-size: 15px; text-decoration: underline;text-decoration-color: orange;text-decoration-thickness: 5px;">Popular Posts</h3>
    <a><div style="width: 80%;display: block;   margin-left: auto;   margin-right: auto;background-color: black;"><img src="yuu.jpg" style="width: 100%;" class="bgg"></div><h4 >All Tip To Become Real Estate law ( we must to know In law )</h4></a>
   <div style="display: grid; grid-template-columns: repeat(1,100%);">
    <a><div style="width: 30%;float: left;"><img src="yuu.jpg" style="width: 100%;margin-bottom: 20px;"></div><p style="width: 70%;   float: left;  text-align: center;font-size: 13px; line-height: 21px;color: black;font-weight: 400;">All Tip To Become International Law ( we must to know in Law )</p></a>
    <a><div style="width: 30%;float: left;"><img src="yuu.jpg" style="width: 100%;margin-bottom: 20px;"></div><p style="width: 70%;   float: left;  text-align: center;font-size: 13px; line-height: 21px;color: black;font-weight: 400;">All Tip To Become International Law ( we must to know in Law )</p></a>
    <a><div style="width: 30%;float: left;"><img src="yuu.jpg" style="width: 100%;margin-bottom: 20px;"></div><p style="width: 70%;   float: left;  text-align: center;font-size: 13px; line-height: 21px;color: black;font-weight: 400;">All Tip To Become International Law ( we must to know in Law )</p></a>
    <a><div style="width: 30%;float: left;"><img src="yuu.jpg" style="width: 100%;margin-bottom: 20px;"></div><p style="width: 70%;   float: left;  text-align: center;font-size: 13px; line-height: 21px;color: black;font-weight: 400;">All Tip To Become International Law ( we must to know in Law )</p></a>
   </div>
  </div>
  <div style="background-color: #FFFFFF; padding-bottom: 30px;margin-bottom: 20px;">
    <h3 style="padding-top: 10px; padding-left: 10px; font-size: 15px; text-decoration: underline; text-decoration-color: orange; text-decoration-thickness: 5px;">Labels</h3>
   <div style="margin-top: 20px;padding: 10px;margin-top: 20px; padding: 10px;  display: grid;  grid-template-columns: repeat(2,50%); gap: 10px;">
    <a type="button" class="btn btn-outline-warning" >About us</a>
    <a type="button" class="btn btn-outline-warning">guitar tutorial</a>
    <a type="button" class="btn btn-outline-warning">it introduction</a>
    <a type="button" class="btn btn-outline-warning">law</a>
    <a type="button" class="btn btn-outline-warning">lawyer</a>
    <a type="button" class="btn btn-outline-warning" >music</a>
   </div>
  </div>
  <div style="background-color: #FFFFFF;
  padding-bottom: 30px;" class="hello">
    <h3 style="padding-top: 10px; font-size: 15px; text-decoration: underline; text-decoration-color: orange; text-decoration-thickness: 5px;padding-left: 10px;">About ME</h3>
    <img src="images/fakelogo.jpg" style="margin-left: 10px;"/><p style="float: right;margin-right: 70px;">Movie Asian Eng Sub</p>
  </div>
  </div>
  </div>
  <div class="footer" style="background-color: #15202B; width: 100%; padding-left: 20px; padding-right: 20px;" id="footer">
   <div style="padding-top: 20px;" class="topbott">
    <img src="images/fakelogo.jpg" style="margin-top: 10px;" class="lol"/>
    <div>
    <h5 style="color: white;" class="ppui">Made with Love by</h5>
    <p style="color: white;opacity: 0.7;" class="ppui">Our Website Which is designed in User friendly to handle by Piki Developers. Simple and elegant themes for making it more comfortable</p>
    </div>
   </div>
   <hr style="color: white;width: 100%;"/>
   <div style="width: 100%;" class="leftbott">
      <h5 style="color: white;font-size: 20px;width: 100px;">Hot Post</h5>
    <div style="width: 40%;float: left;width: 40%;float: left;display: grid; grid-template-columns: repeat(1,100%);" class="vgv">
    <div>
     <a href="nostylesheet.html" style="width: 27%;  float: left" class="xass"><img src="images/fakeimg.jpg" class="kio"/></a>
      <p class="oop" style="width: 73%;  float: left;">All Tip To Become President Of United State</p>
    </div>
    <div>
   <a href="stylesheet2.html"  style="width: 27%;  float: left" class="xass"><img src="images/fakeimg2.jpg" class="kio"/></a>
    <p class="oop" style="padding-right: 80px;width: 73%;  float: left;">All Tip To Become International Laws</p>
  </div>
  <div>
  <a href="stylesheet3.html"  style="width: 27%;  float: left" class="xass"><img src="images/fakeimg3.jpg" class="kio"/></a>
  <p class="oop" style="width: 73%;  float: left;">All Tip To Become labor Or Employments</p>
</div>
   </div>
   <div style="width: 40%;float: left;margin-left: 14px;margin-top: 50px;" class="killer">
    <h5 style="color: white; position: relative; bottom: 85px;font-size: 20px;">Label</h5>
    <p style="color: white;position: relative; bottom: 80px;">About Us     (1)</p>
    <p style="color: white;position: relative; bottom: 80px;">Guitar    (2)</p>
    <p style="color: white;position: relative;bottom: 80px;">Law     (3)</p>
    <p style="color: white;position: relative;bottom: 80px;">Lawyer     (4)</p>
    <p style="color: white;position: relative; bottom: 80px;">angry     (2)</p>
   </div>
   <div style="width: 18%;float: left;" class="fuck">
    <p style="color: white;position: relative; bottom: 65px;font-size: 20px;margin-top: 29px;" class="uyt">Recents Post</p>
   </div>
   </div>
   <p class="bbd">Search This Blog</p>
   <form class="d-flex" style="justify-content: center;">
    <input class="form-control me-2 myInput" type="text" placeholder="Search" style="width: 50%;">
    <button class="btn btn-primary" type="button">Search</button>
  </form>
 <div style="background-color: #0E151D;;" class="bottombott">
  <div style="display: block; margin-left: auto;  margin-right: auto; text-align: center; padding-top: 50px; padding-bottom: 10px;">
  <a href="#" style="color: white;text-decoration: none;  background-color: #1E242A; padding: 10px;border-radius: 20px; opacity: 0.8;">Home</a>
  <a href="#" style="color: white;text-decoration: none;  background-color: #1E242A; padding: 10px;border-radius: 20px; opacity: 0.8;">About Us</a>
  <a href="#" style="color: white;text-decoration: none;  background-color: #1E242A; padding: 10px;border-radius: 20px; opacity: 0.8;">Contact Us</a>
  <a href="#" style="color: white;text-decoration: none;  background-color: #1E242A; padding: 10px;border-radius: 20px; opacity: 0.8;">Privacy Policy</a>
  <p style="color: white;margin-top: 50px;">Design By Our Website Copyright 2023</p>
  </div>
 </div>
</div>
  <script src="file1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script>
    var navbar= document.getElementById("navbar");
    var rrt=document.getElementById("rrt");
  
var bb= document.getElementById("bb");
var aa= document.getElementById("aa");
var body=document.body;
var ioo=document.getElementsByClassName("ioo")[0];
var slide=document.getElementById("slide");
var text=document.getElementById("text");
var navbar=document.getElementById("navbar");
var rrt1=document.getElementById("rrt");
var img=document.getElementById("img");
var fff=document.getElementById("search");
function trr() {
  text.style.display="block";
 navbar.style.display="none";
 rrt.style.display="none";
 img.style.display="none";
 fff.style.display="block";
}
function blahzz() {
  text.style.display="none";
 navbar.style.display="";
 rrt.style.display="";
 img.style.display="";
 fff.style.display="none";
}
var row5= document.getElementById("row");
var footer54=document.getElementById("footer");
 function yui() {
 body.style.backgroundColor="#FFFFFF";
  bb.style.display="block";
 aa.style.display="none";
 ioo.style.display="none";
 body.style.transition="all .5s cubic-bezier(.79,.14,.15,.86)";
 body.style.transform="translateX(0)";
 body.style.opacity=".99";
 row5.style.display="none";
 footer54.style.display="none";
 }
 function cross() {
  body.style.backgroundColor="";
  bb.style.display="";
 aa.style.display="";
 ioo.style.display="";
 body.style.transition="";
 body.style.transform="";
 body.style.opacity="";
 row5.style.display="block";
 footer54.style.display="block";
 }
 var aso1=document.getElementById("aso1");
 var aso2=document.getElementById("aso2");
 var aso3=document.getElementById("aso3");
$(document).ready(function() {
 $('.music').click(function() {
 $('.aso1').slideToggle();
 });
});
$(document).ready(function() {
 $('.it').click(function() {
 $('.aso2').slideToggle();
 });
});
$(document).ready(function() {
 $('.law').click(function() {
 $('.aso3').slideToggle();
 });
});
  </script>
  </body>
  <footer>

  </footer>
</html>