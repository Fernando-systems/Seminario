<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 6/05/2019
 * Time: 02:53 PM
 */

class WhereDinamic
{
    protected $atributos = array();

    function addAtributos($campo, $operador, $valor, $compuerta = false)
    {
        if (substr($campo, 0, 1) != "_") {
            $keynext = $this->keyNext();
            $this->atributos[$keynext] = array("Campo" => $campo,
                "Operador" => $operador,
                "Valor" => $valor,
                "Compuerta" => $compuerta);
        }
    }

    function keyNext()
    {
        return Count($this->atributos) + 1;
    }

    function strWhere()
    {
        $retorno = "";
        $control = 0;

        foreach ($this->atributos as $row) {
            if (trim($row['Valor']) != "") {
                if ($control == 0)
                    $retorno = "WHERE ";
                if ($control > 0)
                    if ($row['Compuerta']) {
                        $retorno = $retorno . " AND ";
                    } else {
                        $retorno = $retorno . " OR ";
                    }
                $retorno = $retorno . $row['Campo'] . $row['Operador'] . "'" . $row['Valor'] . "'";
                $control++;
            }
        }
        return $retorno;
    }
}

