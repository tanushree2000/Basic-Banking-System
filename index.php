<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "user");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Basic Banking System</title>
	<style type="text/css">
		body{
			background-image: url("https://wallpapercave.com/wp/wp2993553.jpg");
			background-repeat: no-repeat;
  			background-size: cover;
        margin: 0;
        
		}
    	h1{
      font-size: 100px;
      text-align:right;
      color: black;
      background-color:#F0F0F0;
      text-shadow: 2px 2px #262626;
      font-family: 'Marlett',serif;
    }
    	button{
      font-size: 30px;
      padding: 10px 30px;
      justify-content: center;
      background-color: #071a3d;
      color: rgba(19, 135, 243, 0.74);
      text-decoration: none;


    }
    	h5{
      text-align: right;
      font-size: 40px;
      color: #800080;
      text-shadow: 1px 1px #f7f8f8;
      font-family:'Ravie', fantasy;


    }
    	div{
      
      margin-left: auto;
      margin-right: auto;

    }
    .container{
      padding-left: 530px;
  

    }
    
    p.h3 {
      text-align: right;
    	font-size: 30px;
    	color: black;
      text-shadow: 1px 1px #3b5278
      padding-right: 150px;
        font-family: 'OCR A Std', monospace
    }
    a{
      color: white;
      font-size:20px;
      
    }
    button:hover{
      background-color: rgba(19, 135, 243, 0.74);
      text-align: center;
    }
    .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: #071a3d;
     color: white;
     text-align: center;
     margin-bottom:0px;
    
}

  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	
<?php include 'connection.php' ?>


  <div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  
  </div>


	 <h1>HAMARA BANK</h1>
  <h5><u>ALL ABOUT YOU.</u></h5>
  <p class="h3"><i><br><b>Change</b> is Part of your life.</br></i>
        <br><i>Transforming it in to <b>OPPORTUNITY</b> is Part of OURS.</i></br>
   </p>

   
  
  <div class="container">
    <button><a href="money.php"><b>SEND MONEY</b></a></button>
    <!--\ <button id="user"><a href="table.php">View user list</button>
      <button><a href="transaction.php">Transaction History</a></button> -->
  </div>
  
  <div class="footer">
  <marquee behavior="scroll" direction="left">
  <p>Made By|  Tanushree Poojary|   HP Credit Management System Powered by The Sparks Foundation|  Copyright © 2021 HP |</p></marquee>
</div>



</body>

	

</body>
</html>