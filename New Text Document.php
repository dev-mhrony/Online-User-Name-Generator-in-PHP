<?php
//creates a unique id for user id 
echo "<br>";
$day = date('D');
$month = date('F');
$year = date('Y');
$fmonth = substr($month, 0, 1);
$fyear = substr($year, 2, 2);
$fday = substr($day, 0, 1);
$uniq = rand();
$funiq = substr($uniq, 0, 2);
$funiq1 = substr($uniq, 0, 1);
$joint=  'CodeCampBD'.$fmonth.$fday.$funiq1.$fyear.$funiq ;
?>

<input type="text" name="username" value = "<?php echo $joint; ?>">