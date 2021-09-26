<?php 

    $name = 'juan,maria,pepe,andrea,jorgelina,cecilia';

    $array_name = explode(',', $name);

    echo "1-a)";
    foreach($array_name as $value) {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }

    echo "1-b)";
    sort($array_name);
    foreach($array_name as $value) {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }

    echo "1-c) <br>";
    $newArray = array();
    foreach($array_name as $value) {
        $nuevo = ucfirst($value);
        $newArray[] = $nuevo;
    }

    foreach($newArray as $value) {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }

    echo "1-d y 1-e) <br><br>";
    $q_nombres = count($newArray);
    echo "Se contaron " . $q_nombres . " nombres en el arreglo<br>";

    $keys = array(1, 2, 3, 4, 5, 6);
    $q_keys = count($keys);

    if($q_nombres == $q_keys) {
        $array_Asociativo = array_combine($keys, $newArray);
    }

    foreach ($array_Asociativo as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    echo "<br>2) <br><br>";
    function existeValor($valor, $array_name) {
        if (in_array($valor, $array_name)) {
            echo $valor . " se encuentra en el arreglo.<br>";
        } else {
            echo $valor . " no se encuentra en el arreglo.<br>";
        }
    }

    existeValor("cecilia", $array_name);
    existeValor("Lucas", $array_name);

    echo "<br>3) <br><br>";
    function mostrarValor($key, $array_name) {

        if(array_key_exists($key, $array_name)) {
            echo $array_name[$key]."<br>";
        } else {
            echo "Key Inecistente <br>";
        }

    }

    mostrarValor(2, $array_name);
    mostrarValor(20, $array_name);

    echo "<br>4) <br><br>";

    function clavesEnString($array) {
        $key = array_keys($array);
        $stringKey = implode(',', $key);
        return $stringKey;
    }

    $clavesCadena = clavesEnString($array_Asociativo);
    echo $clavesCadena . "<br>"; 


?>