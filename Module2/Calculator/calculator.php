<?php
$num1 = (double) $_GET["num1"];
$num2 = (double) $_GET["num2"];
$function = $_GET["function"];
$result;

switch ($function){

case "+":
	$result = (double) $num1 + $num2;
	printf("<p>%f + %f = %f</p>\n",  $num1, $num2, $result);
	break;
case "-":
        $result = (double) $num1 - $num2;
        printf("<p>%f - %f = %f</p>\n",  $num1, $num2, $result);
        break;
case "*":
        $result = (double) $num1 * $num2;
        printf("<p>%f * %f = %f</p>\n",  $num1, $num2, $result);
        break;
case "/":
        $result = (double) $num1 / $num2;
        printf("<p>%f / %f = %f</p>\n",  $num1, $num2, $result);
        break;
}
?>
