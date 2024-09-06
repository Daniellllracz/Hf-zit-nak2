<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">

        <label for="age">Add meg az életkorod</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Ellenőrizd</button>
        <p></p>
    </form>
    <?php
    if (isset($_POST['age'])){
        $age = (int)$_POST['age'];
        if($age<18){
            echo "Fiatalkorú(18év alatti).<br>";

        }
        elseif ($age >= 18 && $age <=65){
            echo "Felnőtt (18 és 65 év között).<br>";

        }
        else
        {
            echo "Nyugdíjas (65 év felett).<br>";
        }
    }
    ?>
</body>
</html>