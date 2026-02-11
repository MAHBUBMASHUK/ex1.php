<?php
$str1 = "Hello";
$str2 = "World";
$combined = $str1 . " " . $str2;
$length = strlen($combined);

$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;

$browser = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <nav class="mb-4">
        <a href="index.php" class="btn btn-primary">Home</a>
        <a href="ex3.php" class="btn btn-secondary">Exercise 3</a>
    </nav>

    <h2>Exercise 3</h2>

    <div class="card p-4 mb-4">
        <h4>Enter Your Name</h4>
        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label">Firstname</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Lastname</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            echo "<h3 class='mt-3'>Hello $firstname $lastname, You are welcome to my site.</h3>";
        }
        ?>
    </div>

    <div class="card p-4 mb-4">
        <h4>String Variables</h4>
        <?php
        echo "<p>Combined String: $combined</p>";
        echo "<p>Length of String: $length</p>";
        ?>
    </div>

    <div class="card p-4 mb-4">
        <h4>Number Addition</h4>
        <?php
        echo "<p>The sum of $num1 + $num2 + $num3 = $sum</p>";
        ?>
    </div>

    <div class="card p-4 mb-4">
        <h4>Browser Detection</h4>
        <?php
        echo "<p>You are using: $browser</p>";
        ?>
    </div>

    <div class="card p-4 mb-4">
        <h4>Sample Table</h4>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane</td>
                    <td>Smith</td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="mt-4 p-3 bg-light text-center">
        <?php
        $filename = basename($_SERVER['PHP_SELF']);
        $last_modified = filemtime($filename);
        echo "Last modified: " . date("F d Y H:i:s", $last_modified);
        ?>
    </footer>

</body>
</html>
