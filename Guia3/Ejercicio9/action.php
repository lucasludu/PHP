<?php

    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];

    $people = [ 
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
    ];

    foreach($people as $value) {
        $key = array_search($name, array_column($people, 'name'));
        if(!$key) {
            echo "
                <script>
                    alert('Dato invalido');
                    window.location = 'index.php';
                </script>
            ";
        }
    }

?>

<?php include_once("header.php"); ?>
<table border="1">
    <thead>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
    </thead>
    <tbody>
        <?php foreach($people as $key => $value) { ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td><?php echo $value['sex']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php include_once("footer.php"); ?>

