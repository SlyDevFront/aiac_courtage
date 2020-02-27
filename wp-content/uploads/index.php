<?php

define("BEGIN_TIME", array_sum(explode(' ', microtime()))); 

//définit le nom de l'interface (nom du fichier de l'interface)
define("INTERFACE_OFFICE","FO");

//Appel la config
include_once("../COMMON/config.php");

ini_set("session.save_path", SESSION_SAVE_PATH );
if(isset($_GET['sessId']) && $_GET['key']==md5(date("Y-m-d"))){
	session_id($_GET['sessId']);
}
session_start();




require_once(ROOT."COMMON/tools/fonctions.php");
require_once(ROOT.INTERFACE_OFFICE."/controllers/_preload.class.php"); 
require_once(ROOT."COMMON/framework/core.class.php");
require_once(ROOT."COMMON/framework/controller.class.php");
require_once(ROOT."COMMON/framework/model.class.php");
require_once(ROOT."COMMON/framework/template.class.php");
require_once(ROOT."COMMON/framework/db.class.php");
require_once(ROOT."COMMON/framework/db2.class.php");


//connection à la BDD
$cnx=db::connect();
$cnx2=db2::connect();

//lancement du framework..
$core=new core();

//fermeture de la connection db
mysql_close($cnx);
mysqli_close($cnx2);

//unset de la classe principale
unset($core);

if(DEBUG==1) phpressoBar();


?>
