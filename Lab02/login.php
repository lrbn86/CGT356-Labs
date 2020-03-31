<?php

// Naming a variable starts with '$'
// Any variable with underscore is built-in in PHP
$userID = $_POST["userID"];
$passwd = $_POST["passwd"];

// Three approaches to handling page navigation
// Watch Login Valdidation Demo video on YT

// Example 1 - longhand
/*
if ($userID == "page1")
{
	if ($passwd == "alpha")
	{
		header("Location:page1.php");
	}
	else
	{
		header("Location:error.php");
	}
}
else if ($userID == "page2")
{
	if ($passwd == "beta")
	{
		header("Location:page2.php");
	}
	else
	{
		header("Location:error.php");
	}
}
else if ($userID == "page3")
{
	if ($passwd == "gamma") 
	{
		header("Location:page3.php");
	}
	else
	{
		header("Location:error.php");
	}
}
*/

// Example 2 - Shorter version
/*
if (($userID == "page1") && ($passwd == "alpha"))
{
	header("Location:page1.php");
}
else if (($userID == "") && ($passwd == ""))
{
	header("Location:page2.php");
}
else if (($userID == "") && ($passwd == ""))
{
	header("Location:page3.php");
}
else {
	header("Location:error.php");
}
*/

// Example 3 - Similar to Example 2, but no brackets
if (($userID == "page1") && ($passwd == "alpha"))
	header("Location:page1.php");
else if (($userID == "page2") && ($passwd == "beta"))
	header("Location:page2.php");
else if (($userID == "page3") && ($passwd == "gamma"))
	header("Location:page3.php");
else
	header("Location:error.php");


// All 3 examples do the exact same thing.








?>
