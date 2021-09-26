<?php include_once("header.php"); ?>
<main align="center">
    <form action="action.php" method="post">
        <label for="">Name: </label>
        <input type="text" name="name" placeholder="Ingrese Nombre"> <br>
        <label for="">Age: </label>
        <input type="number" name="age" placeholder="Ingrese Edad"> <br>
        <label for="">Sex: </label>
        <input type="radio" name="sex" value="m" id="male">
        <label for="male">Male</label>
        <input type="radio" name="sex" value="f" id="famale">
        <label for="famale">Famale</label>
        <br><br>
        <button type="submit">Send</button>
    </form>
</main>
<?php include_once("footer.php"); ?>