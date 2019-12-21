<!DOCTYPE html>
<html>
<head>
  <title>hjiojm</title>
</head>
<body>
  <input type="search" class="se" name="">
<script src="jquery-3.2.1.slim.min.js"></script>
<script src="script.js"></script>
</body>
</html>



<?php
// $db = new PDO('mysql:host=localhost;dbname=poo', 'root', '');

// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


function chargeClasses($className)
{
  require $className.'.class.php';
}
spl_autoload_register('chargeClasses');

// $p1 = array('nom' => 'Jule',
//             'force' => 10,
//             'degat' => 4,
//             'niveau' => 3,
//             'experience' => 1
//            );

// $jule = new Personne($p1);
// $manager = new PersonneManager($db);
// $manager->add($jule);
?>
<?php
$m = new magicien;
$m->saluer();
?>
