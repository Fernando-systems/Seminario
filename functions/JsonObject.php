<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 1/03/2019
 * Time: 11:46 AM
 */

/**
 * Class JsonObject
 */
class JsonObject
{
    /**
     * @param $codstate
     * @param $strstate
     * @param $data
     * @return false|string
     */
    function Json($codstate, $strstate, $data = null)
    {
        return json_encode(array(
            "state" => array(
                "codstate" => $codstate,
                "strstate" => $strstate
            ),
            "data" => $data
        ));
    }



    function JsonToFile($filename, $json)
    {
        $mensaje = "";
        if ($archivo = fopen($filename, "a")) {
            if (fwrite($archivo, $json)) {
                $mensaje = "Archivo creado";
            } else {
                $mensaje = "Ha habido un problema al crear el archivo";
            }

            fclose($archivo);
        }
        return $mensaje;
    }

}