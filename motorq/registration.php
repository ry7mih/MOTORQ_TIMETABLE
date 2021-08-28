<html>
<head>
<title>
reistration
</title>
<link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>

<?php

require("includes/db.php");



	$regno=$_GET["regnumber"];


	$insert="insert into students(regno) values('$regno')";

	$run=$conn->query($insert);


$sql = "SELECT * FROM avail WHERE Subject='DSA'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $dsa= $row['availability'];


$sql = "SELECT * FROM avail WHERE Subject='OS'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $os= $row['availability'];

$sql = "SELECT * FROM avail WHERE Subject='NETWORKS'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $networks= $row['availability'];

$sql = "SELECT * FROM avail WHERE Subject='DBMS'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $dbms= $row['availability'];





$sql = "SELECT * FROM students WHERE regno='$regno'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $dsachk= $row['DSA'];
         $oschk= $row['OS'];
          $dbmschk= $row['DBMS'];
           $networkchk= $row['NETWORKS'];






?>



<!--image center-->
<div class=container>

	<div class="row">
		<div class="col-sm-0 col-sm-offset-3">
			<img src="images/dsa.PNG" width="600" height="400" class="img img-responsive">
		</div>
	</div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 alert alert-success">
    	<h3>Time:Monday[4pm-5pm]</h3>
    	<h3>Avail count: <?php echo $dsa ?></h3>
<div class="form-group">
	<?php if($dsa==0){

		echo '<button type="submit" class="btn btn-success btn-block" name="dsa">';

      echo 'Add to waiting List!</a></button>';


	}
	elseif($oschk==1 || $networkchk==1)
	{
		echo '<button type="submit" class="btn btn-success btn-block" name="dsa">';

      echo 'Getting clashed!</a></button>';
	}
	else
	{
		if($dsachk==1){
		echo '<button type="submit" class="btn btn-success btn-block" name="dsa">';

      echo 'Already Registered!</a></button>';}
      else{



		echo '<button type="submit" class="btn btn-success btn-block" name="dsa">';

         echo '<a href = "dsabooked.php?regnumber='.$regno.'" >';

      echo 'Book!</a></button>';
    }
	}
?>
      
</div>
</div>
</div>
</div>



<!--image center-->
<div class=container>

	<div class="row">
		<div class="col-sm-0 col-sm-offset-3">
			<img src="images/networks.JPG" width="600" height="400" class="img img-responsive">
		</div>
	</div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 alert alert-success">
    	<h3>Time:Monday[4:30pm-5:30pm]</h3>
    	<h3>Avail count: <?php echo $networks ?></h3>
<div class="form-group">
	<?php if($networks==0){
		echo '<button type="submit" class="btn btn-success btn-block" name="networks">';

      echo 'Add to waiting List!</a></button>';
	}
	elseif($oschk==1 || $dsachk==1)
	{
		echo '<button type="submit" class="btn btn-success btn-block" name="networks">';

      echo 'Getting clashed!</a></button>';
	}
	else
	{
		if($networkschk==1){
		echo '<button type="submit" class="btn btn-success btn-block" name="networks">';

      echo 'Already Registered!</a></button>';}
      else{

		echo '<button type="submit" class="btn btn-success btn-block" name="networks">';

         echo '<a href = "networksbooked.php?regnumber='.$regno.'" >';

      echo 'Book!</a></button>';}
	}
?>
      
</div>
</div>
</div>
</div>




<!--image center-->
<div class=container>

	<div class="row">
		<div class="col-sm-0 col-sm-offset-3">
			<img src="images/dbms.PNG" width="600" height="400" class="img img-responsive">
		</div>
	</div>
</div>



<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 alert alert-success">
    	<h3>Time:Wednesday[8am-9am]</h3>
    	<h3>Avail count: <?php echo $dbms ?></h3>
<div class="form-group">
	<?php if($dbms==0){
		echo '<button type="submit" class="btn btn-success btn-block" name="dbms">';

      echo 'Add to waiting List!</a></button>';
	}
	else
	{
		if($dbmschk==1){
		echo '<button type="submit" class="btn btn-success btn-block" name="dbms">';

      echo 'Already Registered!</a></button>';}
      else{

		echo '<button type="submit" class="btn btn-success btn-block" name="dbms">';

         echo '<a href = "dbmsbooked.php?regnumber='.$regno.'" >';

      echo 'Book!</a></button>';
    }
	}
?>
   
</div>
</div>
</div>
</div>




<!--image center-->
<div class=container>

	<div class="row">
		<div class="col-sm-0 col-sm-offset-3">
			<img src="images/os.jpg" width="600" height="400" class="img img-responsive">
		</div>
	</div>
</div>



<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 alert alert-success">
    	<h3>Time:Monday[4:30pm-5:30pm]</h3>
    	<h3>Avail count: <?php echo $os ?></h3>
<div class="form-group">
	<?php if($os==0){
		echo '<button type="submit" class="btn btn-success btn-block" name="os">';

      echo 'Add to waiting List!</a></button>';
	}
	elseif($dsachk==1 || $networkchk==1)
	{
		echo '<button type="submit" class="btn btn-success btn-block" name="os">';

      echo 'Getting clashed!</a></button>';
	}
	else
	{

		if($oschk==1){
		echo '<button type="submit" class="btn btn-success btn-block" name="os">';

      echo 'Already Registered!</a></button>';}
      else{
		echo '<button type="submit" class="btn btn-success btn-block" name="os">';

         echo '<a href = "osbooked.php?regnumber='.$regno.'" >';

      echo 'Book!</a></button>';}
	}
?>
      
</div>
</div>
</div>
</div>





<script type="text/javascript" src="js/bootstrap.js" />
<script type="text/javascript" src="js/jquery.js" />

</body>
</html>
