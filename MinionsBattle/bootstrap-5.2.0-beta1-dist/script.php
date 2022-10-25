
<?php
error_reporting(E_ALL ^ E_WARNING);


$user = 'root';
$pass = '';

$db = 'minionsbattlescores';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

//---------------------------------------------POST ALTERNATIVE--------------------------------------------------------------


$timHealth = $_POST['timhealth'];
$timStrength = $_POST['timstrength'];
$timDefense = $_POST['timdefense'];
$timSpeed = $_POST['timspeed'];
$timLuck = $_POST['timluck'];

$enemyHealth = $_POST['enemyhealth'];
$enemyStrength = $_POST['enemystrength'];
$enemyDefense = $_POST['enemydefense'];
$enemySpeed = $_POST['enemyspeed'];
$enemyLuck = $_POST['enemyluck'];

/*if(empty($timHealth)){
    echo "Name is empty";
}
else{
    echo $timHealth;
}*/

$sql = "INSERT INTO `scores` (`id`, `TimHealth`, `TimStrength`, `TimDefense`, `TimSpeed`, `TimLuck`, `EnemyHealth`, `EnemyStrength`, `EnemyDefense`, `EnemySpeed`, `EnemyLuck`, `Who Won?`) VALUES ('0', '$timHealth', '$timStrength', '$timDefense', '$timSpeed', '$timLuck' , '$enemyHealth', '$enemyStrength', '$enemyDefense', '$enemySpeed', '$enemyLuck', '$whoWon')";

//---------------------------------------------------------------------------------------------------------------------------

//-------------------------------------------COOKIE ALTERNATIVE--------------------------------------------------------------

//$stats = $_COOKIE["stats"];

//echo $stats;

//$whoWon = 'Tim';
  
//$sql = "INSERT INTO `scores` (`id`, `TimHealth`, `TimStrength`, `TimDefense`, `TimSpeed`, `TimLuck`, `EnemyHealth`, `EnemyStrength`, `EnemyDefense`, `EnemySpeed`, `EnemyLuck`, `Who Won?`) VALUES ('0', '$stats', '$whoWon')";

//---------------------------------------------------------------------------------------------------------------------------



//$sql = "INSERT INTO `scores` (`id`, `TimHealth`, `TimStrength`, `TimDefense`, `TimSpeed`, `TimLuck`, `EnemyHealth`, `EnemyStrength`, `EnemyDefense`, `EnemySpeed`, `EnemyLuck`, `Who Won?`) VALUES ('0', 'ASDAS', 'ASDAS', 'FASG', 'FHK', 'FK' , 'RTYE', 'FKFRY', 'QWE', 'ASD', 'ASDF', '$whoWon')"; //IT WORKS

//$sql = "INSERT INTO `scores` (`id`, $hbn, '$whoWon')";


//insert in database

if(isset($_POST['Submit']))
{
  $rs = mysqli_query($db, $sql);
}

?>


