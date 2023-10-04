<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>التحكم بالمنزل (البيت)</h1>
        <p> <?php $dateout = shell_exec('date');
		echo "<p>$dateout</p>";
	    ?>
	 </p>
        <p> <?php $output = shell_exec('sudo vcgencmd measure_temp');
		echo "<p>$output</p>"; ?>  </p>
</div>

<div class="container mt-5">
 <div class="row">
    <div class="col-sm-3">
        <h3>فــلاش</h3>

        <a href="light.php?gpio=22&light=0">
            <button type="button" class="btn btn-success">ON</button>
        </a>
        <a href="light.php?gpio=22&light=1">
            <button type="button" class="btn btn-danger">OFF</button>
        </a>
        <p>8 PM - 7 AM </p>
	        <?php
                if(file_exists("/sys/class/gpio/gpio22/value")) {
			$myfile = fopen("/sys/class/gpio/gpio22/value", "r");
                	$stringkey22 = fgets($myfile);
	        	fclose($myfile);

                if($stringkey22 == 1)
                   echo "<p style='color:red'><b>OFF</b></p>";
		        if($stringkey22 == 0)
                   echo "<p style='color:green'><b>ON</b></p>"; }
		?>

    </div>

    <div class="col-sm-3">
        <h3>بئــر</h3>
            <a href="light.php?gpio=11&light=0">
                <button type="button" class="btn btn-success">ON</button>
            </a>
            <a href="light.php?gpio=11&light=1">
                <button type="button" class="btn btn-danger">OFF</button>
            </a>
        <p>1 AM - 4 AM </p>
            <?php
		if(file_exists("/sys/class/gpio/gpio11/value")) {
                	$myfile = fopen("/sys/class/gpio/gpio11/value", "r");
                	$stringkey11 = fgets($myfile);
			fclose($myfile);
                if($stringkey11 == 1)
                   echo "<p style='color:red'><b>OFF</b></p>";
                if($stringkey11 == 0)
                   echo "<p style='color:green'><b>ON</b></p>"; }
	     ?>

    </div>

    <div class="col-sm-3">
      <h3>ROOM [3]</h3>
        <a href="light.php?gpio=17&light=0">
            <button type="button" class="btn btn-success">ON</button>
        </a>
        <a href="light.php?gpio=17&light=1">
            <button type="button" class="btn btn-danger">OFF</button>
        </a>
	<p>
            <?php
		if(file_exists("/sys/class/gpio/gpio17/value")) {
	                $myfile = fopen("/sys/class/gpio/gpio17/value", "r");
        	        $stringkey17 = fgets($myfile);
               		fclose($myfile);

		if($stringkey17 == 1)
                   echo "<p style='color:red'><b>OFF</b></p>";
                if($stringkey17 == 0)
                   echo "<p style='color:green'><b>ON</b></p>"; }
             ?>
	</p>

    </div>

    <div class="col-sm-3">
        <h3>ROOM [4]</h3>
        <a href="light.php?gpio=10&light=0">
            <button type="button" class="btn btn-success">ON</button>
        </a>
        <a href="light.php?gpio=10&light=1">
            <button type="button" class="btn btn-danger">OFF</button>
        </a>
	<p>
		<?php
		if(file_exists("/sys/class/gpio/gpio10/value")) {
			$myfile = fopen("/sys/class/gpio/gpio10/value", "r");
			$stringkey10 = fgets($myfile);
			fclose($myfile);
                if($stringkey10 == 1)
                   echo "<p style='color:red'><b>OFF</b></p>";
                if($stringkey10 == 0)
                   echo "<p style='color:green'><b>ON</b></p>"; }
		?>
	</p>
    </div>

    <div class="col-sm-3">
        <h3>ROOM [5]</h3>
        <a href="light.php?gpio=9&light=0">
            <button type="button" class="btn btn-success">ON</button>
        </a>
        <a href="light.php?gpio=9&light=1">
            <button type="button" class="btn btn-danger">OFF</button>
        </a>
        <p>
            <?php
		if(file_exists("/sys/class/gpio/gpio9/value")) {
	                $myfile = fopen("/sys/class/gpio/gpio9/value", "r");
        	        $stringkey9 = fgets($myfile);
                	fclose($myfile);

		if($stringkey9 == 1)
                   echo "<p style='color:red'><b>OFF</b></p>";
                if($stringkey9 == 0)
                   echo "<p style='color:green'><b>ON</b></p>"; }
	    ?>
        </p>

    </div>

    <div class="col-sm-3">
        <h3>ROOM [6]</h3>
        <a href="light.php?gpio=27&light=0">
            <button type="button" class="btn btn-success">ON</button>
        </a>
        <a href="light.php?gpio=27&light=1">
            <button type="button" class="btn btn-danger">OFF</button>
        </a>
        <p>
            <?php
		if(file_exists("/sys/class/gpio/gpio27/value")) {
	                $myfile = fopen("/sys/class/gpio/gpio27/value", "r");
        	        $stringkey27 = fgets($myfile);
                	fclose($myfile);

		if($stringkey27 == 1)
                   echo "<p style='color:red'><b>OFF</b></p>";
                if($stringkey27 == 0)
                   echo "<p style='color:green'><b>ON</b></p>"; }
            ?>
        </p>
    </div>

    <div class="col-sm-3">
        <h3>ROOM [7]</h3>
        <a href="light.php?gpio=18&light=0">
            <button type="button" class="btn btn-success">ON</button>
        </a>
        <a href="light.php?gpio=18&light=1">
            <button type="button" class="btn btn-danger">OFF</button>
        </a>
        <p>
            <?php
		if(file_exists("/sys/class/gpio/gpio18/value")) {
	                $myfile = fopen("/sys/class/gpio/gpio18/value", "r");
        	        $stringkey18 = fgets($myfile);
                	fclose($myfile);

		if($stringkey18 == 1)
                   echo "<p style='color:red'><b>OFF</b></p>";
                if($stringkey18 == 0)
                   echo "<p style='color:green'><b>ON</b></p>"; }
            ?>
        </p>
    </div>

    <div class="col-sm-3">
        <h3>ROOM [8]</h3>
        <a href="light.php?gpio=23&light=0">
            <button type="button" class="btn btn-success">ON</button>
        </a>
        <a href="light.php?gpio=23&light=1">
            <button type="button" class="btn btn-danger">OFF</button>
        </a>
        <p>
            <?php
		if(file_exists("/sys/class/gpio/gpio23/value")) {
	                $myfile = fopen("/sys/class/gpio/gpio23/value", "r");
                        $stringkey23 = fgets($myfile);
        	        fclose($myfile);

		if($stringkey23 == 1)
                   echo "<p style='color:red'><b>OFF</b></p>";
                if($stringkey23 == 0)
                   echo "<p style='color:green'><b>ON</b></p>"; }
            ?>
        </p>

    </div>
    <div class="center-text pad"> <p><b>&copy; 2023 At Home. </b></p></div>
 </div>
</div>

</body>
</html>
