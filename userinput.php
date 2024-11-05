<?php
	print "Enter first number: ";
	$firstnumber = trim(fgets(STDIN));


	print "Enter second number: ";
	$secondnumber = trim(fgets(STDIN));

	$result = $firstnumber + $secondnumber;

	echo "The sum of ".$firstnumber . " and ". $secondnumber . " is: ". $result;


?>