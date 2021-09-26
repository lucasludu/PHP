<?php

    $people = [ 
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
    ];

    echo "Muestro Todo el Arreglo<br><br>";
    foreach($people as $key=>$values) {
        echo 
            "<pre>" . 
            $key . " " . $values['name'] . " - " . $values['age'] . " - " . $values['sex'] . "<br>"
            . "</pre>";
    }

    foreach($people as $key=>$values) {
        var_dump($values['name'] . " - " . $values['age'] . " - " . $values['sex']);
    }

    echo "<br><br>Mayores de Edad<br><br>";
    foreach($people as $key=>$values) {
        if($values['age'] > 21) {
            echo $values['name'] . " tiene " . $values['age'] . " años y es mayor de edad <br>";
        }
    }

    echo "<br><br>Mujeres menores de edad<br><br>";
    foreach($people as $key=>$values) {
        if($values['sex'] == 'f' && $values['age'] < 18) {
            echo $values['name'] . " es " . $values['sex'] . " [mujer] y tiene " . $values['age'] . " años y es menor de edad <br>";
        }
    }

    echo "<br><br>Armo la tabla<br><br>";

?>

<table border="1">
    <thead>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
    </thead>
    <tbody>
        <?php foreach($people as $key=>$value) { ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td><?php echo $value['sex']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php 

    echo "<br><br>Arreglo de edades<br><br>";
    foreach($people as $key=>$value) {
        echo $value['age'] . " - ";
    }

?>