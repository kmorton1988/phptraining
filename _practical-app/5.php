<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


$num = 78;
$array = [1, 3, 4, 6, 32, 7, 34, 457, 34, 77, 4785, 3];
$string = "Once more this is an awesome length of text so that I can make sure to have a long piece of text to run string functions with";

print sqrt($num);
echo "<br>";
print strtoupper($string);
echo "<br>";
print_r($array);
echo "<br>";
sort($array);
print_r($array);
echo "<br>";


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>