<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <form method="POST">
        Enter the Number: <input type="text" name="number">
        <button type="submit" value="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['number'];

        if (is_numeric($num) && $num > 0) {
            $num = (int)$num; 
            $isPrime = true;

            if ($num == 1) {
                $isPrime = false; 
            } else {
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        $isPrime = false;
                        break;
                    }
                }
            }

            if ($isPrime) {
                echo "<p>The number $num is Prime.</p>";
            } else {
                echo "<p>The number $num is not Prime.</p>";
            }
        } else {
            echo "<p>Please enter a valid positive number.</p>";
        }
    }
    ?>
</body>
</html>
