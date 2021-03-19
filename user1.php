<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>
	<style>
		 .click{
		    width: 20px;
			background-color: #961AC9;
			color: white;
			font-size: 25px;
			font-family:'Showcard Gothic',serif;
		}
		.click:hover{
			background-color: black
			-webkit-animation: glow 1s ease-in-out infinite alternate;
  			-moz-animation: glow 1s ease-in-out infinite alternate;
  			animation: glow 1s ease-in-out infinite alternate;

		}
        .container{
			width: 400px;
			padding-left: 450px;
			font-size:90px;
		}
		.container input{
			width:100%;
			clear: both;
			font-size: 70px;
		}
		
    	
		h2{
      		font-size: 50px;
      		text-align: center;
      		color: red;
      		text-shadow: 1px 1px 2px black, 0 0 25px lightblue, 0 0 5px black;
    	}
		
	</style>
</head>
<body>
  
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name = $_POST["sender_name"];
	$receiver_name = $_POST["receiver_name"];
	$amount = $_POST["amount"];
	
	?>
	<h2><br><i>Congratulations!! </i></br>
	<br>Your Transfer from <?php echo $sender_name ?> to <?php echo $receiver_name ?> is successful</br></h2>
	<h2>For an amount of  Rs. <u><?php echo$amount ?></u> </h2>
	<div class="container">
	<button><a href="transaction.php"><b>Check Transaction History</b></a></button>
	</div>
	

</body>
</html>