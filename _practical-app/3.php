<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

if (1 == 1) {
    echo "I love PHP";
}
elseif (1 != 1) {
    
    echo "Not quite right...";
}
else {
    
    echo "what is going on here?";
}

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

$number = 7;
switch ($number) {
    case 2:
    echo "It's 2";
    break;
    case 3: 
    echo "it's 3";
    break;
    case 7:
    echo "it's 7";
    break;
    case 10:
    echo "it's 10";
    break;
    case 14:
    echo "it's 14";
    break;
    default :
    echo "it's not a number";
    break;
}
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>