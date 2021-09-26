<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
        <label>Total Sale: </label> 
        <input type="number" name="total_sale" placeholder="Ingresar Monto"> <br>
        <input type="radio" name="type" id="ropa" value="ropa">
        <label for="ropa">Ropa</label>
        <input type="radio" name="type" id="ropa" value="mascota">
        <label for="mascota">Mascota</label> <br><br>

        <button type="submit">Send</button>
    </form>
</body>
</html>