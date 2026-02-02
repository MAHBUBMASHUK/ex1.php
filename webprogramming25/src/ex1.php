<html>
    <body>
        <h2>
        "Hello World!";
        <h2>
    </body>
</html>
<?php
echo "My name is Mashuk";
?>
<h4>
    Task 3: Students Grades Table
</h4>

<?php
$g1 = 4;
$g2 = 2;
$g3 = 5;
?>

<table border="2" cellpadding="6">
    <tr>
        <th>S.N.</th>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>1</td>
        <td>M</td>
        <td><?php echo $g1; ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>A</td>
        <td><?php echo $g2; ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>S</td>
        <td><?php echo $g3; ?></td>
    </tr>
</table>