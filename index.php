<?php
define("PATHCONF", "./conf/");
date_default_timezone_set("Europe/Paris");
require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');
$test = new Form(PATHCONF, "registration");
echo $test->frmGenerate("form.php");




//$toto = new Querie();
//    if($result = $toto->selectMethod("SELECT * FROM t_admin"))
//    {
//    Debug::dump($result);
//    }
//
//
//    else {
//    echo "erreur";
//    }

