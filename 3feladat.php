<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="count">Addj meg egy számot</label>
        <input type="number" id="count" name="count" required>
        <button type="submit">Számolj Dili</button>
    </form>
    <?php
    if (isset($_POST['count'])){
        $count = (int)$_POST['count'];
        if()
    }
    ?>
</body>
</html>