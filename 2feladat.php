<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <p>Add meg a hét napjaiból egyet:</p>
        <input type="text" id="day" name="day" required>
        <button type="submit">Check</button>
    </form>
    <?php   
        if (isset($_POST['day'])) {
            $day = (string)$_POST['day'];

            switch ($day) {
                case 'Monday':
                    echo "A hét eleje, csak még hétfő van.";
                    break;
                case 'Tuesday':
                    echo "Kedd van, még a hét eleje.";
                    break;
                case 'Wednesday':
                    echo "Szerda van, a hét közepe.";
                    break;
                case 'Thursday':
                    echo "Csütörtök, már közel a hétvége.";
                    break;
                case 'Friday':
                    echo "Péntek van, mindjárt hétvége!";
                    break;
                case 'Saturday':
                    echo "Szombat van, hétvége van!";
                    break;
                case 'Sunday':
                    echo "Vasárnap van, hétvége van!";
                    break;
                default:
                    echo "Ismeretlen nap!";
                    break;
            }
        }
    ?>
</body>
</html>
