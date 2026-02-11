<?php
$currentMonth = date("F");

$myarray = array("HTML", "CSS", "PHP", "JavaScript");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <nav class="mb-4">
        <a href="index.php" class="btn btn-primary">Home</a>
        <a href="ex3.php" class="btn btn-secondary">Exercise 3</a>
        <a href="ex4.php" class="btn btn-success">Exercise 4</a>
    </nav>

    <h2>Exercise 4: Control Flow and Loops</h2>

    <div class="card p-4 mb-4">
        <h4>Voting Eligibility</h4>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control">
            </div>

            <button type="submit" name="checkVote" class="btn btn-primary">Check</button>
        </form>

        <?php
        if (isset($_POST['checkVote'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];

            if ($age >= 18) {
                echo "<p class='mt-3 text-success'>$name is eligible for voting.</p>";
            } else {
                echo "<p class='mt-3 text-danger'>$name is not eligible for voting.</p>";
            }
        }
        ?>
    </div>

    <div class="card p-4 mb-4">
        <h4>Current Month Check</h4>
        <?php
        switch ($currentMonth) {
            case "August":
                echo "<p>It's August, so it's still holiday.</p>";
                break;
            default:
                echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
        }
        ?>
    </div>

    <div class="card p-4 mb-4">
        <h4>Multiplication Table</h4>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Enter a number</label>
                <input type="number" name="number" class="form-control">
            </div>

            <button type="submit" name="multiply" class="btn btn-primary">Generate</button>
        </form>

        <?php
        if (isset($_POST['multiply'])) {
            $number = $_POST['number'];

            echo "<h5 class='mt-3'>Multiplication Table of $number</h5>";

            for ($i = 1; $i <= 10; $i++) {
                echo "$number x $i = " . ($number * $i) . "<br>";
            }
        }
        ?>
    </div>

    <div class="card p-4 mb-4">
        <h4>Print Numbers from 1 to n</h4>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Enter a number (n)</label>
                <input type="number" name="n" class="form-control">
            </div>

            <button type="submit" name="printNumbers" class="btn btn-primary">Print</button>
        </form>

        <?php
        if (isset($_POST['printNumbers'])) {
            $n = $_POST['n'];
            $i = 1;

            echo "<h5 class='mt-3'>Numbers from 1 to $n</h5>";

            while ($i <= $n) {
                echo $i . " ";
                $i++;
            }
        }
        ?>
    </div>

    <div class="card p-4 mb-4">
        <h4>Foreach Loop (Array Elements)</h4>
        <?php
        foreach ($myarray as $value) {
            echo "<p>$value</p>";
        }
        ?>
    </div>

</body>
</html>
