<!DOCTYPE html>
<html>
<head>
<title>Card Effect</title>
</head>
<body>
     <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
     <style>
         body{
  display:flex;
  margin:0;
  padding:0;
  min-height: 100vh;
  justify-content: center;
  align-items: center;
  font-family: arial;
}

.container{
  width: 1000px;
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-wrap:wrap;
  
}

.container .card{
  position: relative;
}

.container .card .face{
  width:300px;
  height: 200px;
  transition:.4s;
  
}
.container .card .img{
  width:300px;
  height: 200px;
  
}
.container .card .img:hover{
  width:300px;
  height: 200px;
  
}

.container .card .face.face1{
  position: relative;
  background: none;
  display: flex;
  justify-content: center;
  align-content:center;
  align-items: center;
  z-index: 1;
  transform: translateY(100px);
}

.container .card:hover .face.face1{
  transform: translateY(0);
  box-shadow:
    inset 0 0 60px whitesmoke,
    inset 20px 0 80px #f0f,
    inset -20px 0 80px #0ff,
    inset 20px 0 300px #f0f,
    inset -20px 0 300px #0ff,
    0 0 50px #fff,
    -10px 0 80px #f0f,
    10px 0 80px #0ff;
   
}

body{
  background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
}
.container .card .face.face1 .content{
  opacity: .2;
  transition:  0.5s;
  text-align: center;
}

.container .card:hover .face.face1 .content{
  opacity: 1;
 
}

.container .card .face.face1 .content i{
  font-size: 3em;
  color: white;
  display: inline-block;
   
}

.container .card .face.face1 .content h3{
  font-size: 1em;
  color: white;
  text-align: center;
  

}

.container .card .face.face1 .content a{
   transition: .5s;
}
.content .fa{
  height: 30px;
  width: 30px;
  border: 2px solid black;
  background-color: black;
  color: #fff;
  border-radius: 50%;
  border: 4px solid rgb(94, 16, 221);
  padding-top: 8px;
  padding-left: 8px;
}

.container .card .face.face2{
   position: relative;
   background: whitesmoke;
   display: flex;
   align-items: center;
   justify-content: center;
   padding: 20px;
  box-sizing: border-box;
  box-shadow: 0 20px 50px rgba(0,0,0,.8);
  transform: translateY(-100px);
}

.container .card:hover .face.face2{
    transform: translateY(0);


}

.container .card .face.face2 .content p, a{
  font-size: 10pt;
  margin: 0 ;
  padding: 0;
  color:#333;
}

.container .card .face.face2 .content a{
  text-decoration:none;
  color: black;
  box-sizing: border-box;
  outline : 1px dashed #333;
  padding: 10px;
  margin: 15px 0 0;
  display: inline-block;
}

.container .card .face.face2 .content a:hover{
  background: #333 ;
  color: whitesmoke; 
  box-shadow: inset 0px 0px 10px rgba(0,0,0,0.5);
}

     </style>

  <div class="container">

     <div class="card">
        <div class="face face1">
          <div class="content">
             <a href="http://127.0.0.1:8000/game"><img src="https://th.bing.com/th/id/OIP.yL99LfBtAOWU9a5P84ZXAQHaEu?w=255&h=180&c=7&o=5&dpr=1.25&pid=1.7" alt=""></a>          
            <h3>Games</h3>
          </div>
        </div>

     </div> 
     <div class="card">
        <div class="face face1">
          <div class="content">
          <a href="http://127.0.0.1:8000/index"><img src="data:image/jpeg;base64,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" alt="">          
            </a>
          <h3>Travel</h3>
          </div>
        </div>
     </div>     
     <div class="card">
        <div class="face face1">
          <div class="content">
              <img src="https://th.bing.com/th/id/OIP.VHCsekVVjg-ngHHg-w86fgHaDG?w=340&h=146&c=7&o=5&dpr=1.25&pid=1.7" alt="">
             <h3>Shop</h3>
          </div>
        </div>
     </div>
  </div>
  
</body>
</html>