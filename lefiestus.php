<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php
	if(isset($_POST['collegename'])&&!empty($_POST['collegename'])&&isset($_POST['sports'])&&!empty($_POST['sports'])&&isset($_POST['leadername'])&&!empty($_POST['leadername']))
	{
	$mem1=$_POST['mem1'];
	$mem2=$_POST['mem2'];
	$mem3=$_POST['mem3'];
	$mem4=$_POST['mem4'];
	$mem5=$_POST['mem5'];
	$mem6=$_POST['mem6'];
	$mem7=$_POST['mem7'];
	$mem8=$_POST['mem8'];
	$mem9=$_POST['mem9'];
	$mem10=$_POST['mem10'];
	$mem11=$_POST['mem11'];
	$mem12=$_POST['mem12'];
	$mem13=$_POST['mem13'];
	$mem14=$_POST['mem14'];
	$mem15=$_POST['mem15'];
	$mem1d=$_POST['mem1d'];
	$mem2d=$_POST['mem2d'];
	$mem3d=$_POST['mem3d'];
	$mem4d=$_POST['mem4d'];
	$mem5d=$_POST['mem5d'];
	$mem6d=$_POST['mem6d'];
	$mem7d=$_POST['mem7d'];
	$mem8d=$_POST['mem8d'];
	$mem9d=$_POST['mem9d'];
	$mem10d=$_POST['mem10d'];
	$mem11d=$_POST['mem11d'];
	$mem12d=$_POST['mem12d'];
	$mem13d=$_POST['mem13d'];
	$mem14d=$_POST['mem14d'];
	$mem15d=$_POST['mem15d'];
	$mem1e=$_POST['mem1e'];
	$mem2e=$_POST['mem2e'];
	$mem3e=$_POST['mem3e'];
	$mem4e=$_POST['mem4e'];
	$mem5e=$_POST['mem5e'];
	$mem6e=$_POST['mem6e'];
	$mem7e=$_POST['mem7e'];
	$mem8e=$_POST['mem8e'];
	$mem9e=$_POST['mem9e'];
	$mem10e=$_POST['mem10e'];
	$mem11e=$_POST['mem11e'];
	$mem12e=$_POST['mem12e'];
	$mem13e=$_POST['mem13e'];
	$mem14e=$_POST['mem14e'];
	$mem15e=$_POST['mem15e'];
		$host='localhost';
		$user_name='juitpw8t_pri';
		$pass='Vinny@jyc@11';
		$database_name='juitpw8t_jypdb';
		$collegename=$_POST['collegename'];
		$collegename=$_POST['collegename'];
		$interest=$_POST['events'];
		$pm=$_POST['kM'];
		$LCN=$_POST['leadercn'];
		$LEI=$_POST['leaderEI'];
		$leadername=$_POST['leadername'];
		$from='admin@lefiestus.co.in';
		$subject2='Confirmation Mail of Le Fiestus 2015';
		$msg1="Congratulation!!\nYou have been successfully registered for Le Fiestus.\n\nLe Fiestus 2015\nOrganizing Committee";
		mail($email,$subject2,$msg1,"FROM:$from");
    		$email1="info@lefiestus.co.in";
		$subject1='Registration Mail of Le Fiestus 2015';
	$msg2='\n$collegename'.'\n$interest'.'\n$leadername'.'\n$LCN'.'\n$LEI'.'\n$pm'.'\n$mem1'.'\n$mem1d'.'\n$mem1e'.'\n$mem2'.'\n$mem2d'.'\n$mem2e'.'\n$mem3'.'\n$mem3d'.'\n$mem3e'.'\n$mem4'.'\n$mem4d'.'\n$mem4e'.'\n$mem5'.'\n$mem5d'.'\n$mem5e'.'\n$mem6'.'\n$mem6d'.'\n$mem6e'.'\n$mem7'.'\n$mem7d'.'\n$mem7e'.'\n$mem8'.'\n$mem8d'.'\n$mem8e'.'\n$mem9'.'\n$mem9d'.'\n$mem9e'.'\n$mem10'.'\n$mem10d'.'\n$mem10e'.'\n$mem11'.'\n$mem11d'.'\n$mem11e'.'\n$mem12'.'\n$mem12d'.'\n$mem12e'.'\n$mem13'.'\n$mem13d'.'\n$mem13e'.'\n$mem14'.'\n$mem14d'.'\n$mem14e'.'\n$mem15'.'\n$mem15d'.'\n$mem15e'";
		mail($email1,$subject1,$msg2,"FROM:$from");
	
	
		}	
	}
	if($pm=='online')
		{?>
                   //header('location:http://in.explara.com/beta/juit-mun-2015-spring-summit/checkout');
                   <script>window.location = "https://in.explara.com/e/lefiestus2k15/checkout";</script>
         <?php         exit();        }
?>
<title>Le Fiestus|Confirmation</title>
</head>
<body>
<a href="../index.html"><img src="logo.png"></a>
<div id="wrapper2">
<div class="login-form2" style="margin-top:100px,width:900px">
<div class="header">
<h1><b>THANKS FOR REGISTERING <br>FOR <br>Le Fiestus 2015</b></h1>

<input type="button"  value="home" onclick="location.href='../index.html'" id ="btn" style="margin-left:150px;margin-top:50px">

<input type="button"  value="New Registeration" id ="btn" onclick="location.href='lefiestus.html'" style="margin-left:150px;margin-top:0px">

</div>
</div>
</body>