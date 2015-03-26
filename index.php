<?php

	include("header.html");

	//basic math
	$salary = 85000;
	$mnTax = .15;
	$wiTax = .25;
	$generalTax = .30;
	$bonus = 5000;
	$myState = "Minnesota";
	$yourState = "Wisconsin";

	$var = SalaryAfterTax($salary, $mnTax);

	if ($myState = "Minnesota")
	{
		echo nl2br("\r\nTotal Salary will be " . SalaryAfterTax($salary, $mnTax) . " in " . $myState); //use concatentation to print out
		echo nl2br("\r\nTotal Salary will be  $var in $myState"); //pass variables straight into the string
		echo nl2br('<br/>\r\nTotal Salary will be  $var in $myState');
		printf("<br/>Total salary will be %u in the state of %s.", $var, $myState); //printf prints a formatted string
	}
	if ($yourState = "Wisconsin")
	{
		echo nl2br("\r\nTotal Salary will be " . SalaryAfterTax($salary, $wiTax) . " in " . $yourState);
	}
	if ($myState = "Iowa")
	{
		SalaryAfterTax($salary, $generalTax);
	}

	//Calculates the total compensation for an employee
	
	function TotalSalary($salary, $bonus)
	{
		return $salary + $bonus;
	}

	//
	function SalaryAfterTax($salary, $tax)
	{
		$x = 1 - $tax;
		return $total = $salary * $x;
	}




	/*for ($i = 0; $i <= 10; $i++) 
	{
		echo "Hello world. Value of i is $i <br />";
	}*/
?>