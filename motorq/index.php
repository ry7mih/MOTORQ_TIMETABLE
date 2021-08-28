<html>
<head>
<title>
Motorq
</title>
<link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>

<?php

require("includes/db.php");

?>

<br>

<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 alert alert-success">
       <h4 class="text text-center alert bg-primary" style="color:white;">Registration Number</h4>


      <form action="registration.php" method="GET">
       

        <div class="form-group">
          <label for="email">Registration Number:</label>
          <input type="text" name="regnumber" class="form-control" required="true">
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-success btn-block" name="login">Submit</button>
        </div>

      </form>
    </div>
  </div>

</div>

<script type="text/javascript" src="js/bootstrap.js" />
<script type="text/javascript" src="js/jquery.js" />


</body>
</html>