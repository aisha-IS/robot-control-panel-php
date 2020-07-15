<?php
require_once 'config/database.php';



if(isset($_post['F'])){

	echo "F";
}

if(isset($_post['S'])){

	echo "S";
}

if(isset($_post['R'])){

	echo "R";
}

if(isset($_post['B'])){

	echo "B";
}

if(isset($_post['L'])){

	echo "L";
}


?>




<!DOCTYPE html>
   <html>
    <head>
      <meta charset="utf-8">
         <title>Control Panel</title>
           <style>



         h1{

          text-align: left;
          font: black;
          font-family: "Times New Roman";
          font-color: black;
          font-size: 30px;
          height: 400px;
          width: 600px;
          line-height: 600px;


          
         }
         body{

          background: url("r.jpg"); 
          background-size:cover;
         }
         div{
          margin-left: auto;
          margin-right: auto;
          width: 300px;
  
          }
         button{
 
          border-radius: 50%;
          border: none;
          font-family: "Times New Roman";
          font-size: 12px;
          background-color: gray;
          margin: 4px 2px;
          cursor: pointer;
          padding: 16px 32px;
          float: left;
          text-decoration: none;
          transition-duration: 0.4s;}



         .button:hover{ 
          background-color: gray;

              }
          #fo{position: relative;
          top: -50px; right: 200px}
          #ba {position: relative;
          top: 50px; right: 310px}
           
         </style>
    </head>
    <div>
     <form action="show.php" method="post">
     <body style="color: white;" ><div style="width: 900px";>
     <h1 class="Control" style="font: white;">Control Panel</h1></div>
     <div style="text-align:right;width:990px;"><button class="button" id='le'>Left</button>
     </div><span>
     <button class="button" style="background: red" id='st'>Stop</button>
     <button class="button" id='ri' >Right</button></span>
     <span><button class="button" id='fo' >Forwards</button>
     <button class="button" id='ba'>Backwards</button></span>
     </form>
    </div>
</body>
</html>
