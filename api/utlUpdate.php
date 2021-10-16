<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 12/03/2019
 * Time: 01:44 PM
 */

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");


require_once '../functions/JsonObject.php';

$out = shell_exec("sh /var/www/html/shUpdate.sh");

$ObjetoJson = new JsonObject();

echo $ObjetoJson->Json("1", "Shell Send Succesfull", $out);