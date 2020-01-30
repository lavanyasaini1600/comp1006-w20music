<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musician Library</title>
</head>
<body>

<?php
// connect
$db = new PDO('mysql:host=172.31.22.43;dbname=Rich100', 'Rich100', 'x');

// set up & execute query
$sql = "SELECT * FROM musicians";
$cmd = $db->prepare($sql);
$cmd->execute();
$musicians = $cmd->fetchAll();

// start table
echo '<table border="1"><thead><th>Name</th><th>Label</th><th>Ranking</th><th>Solo</th><th>City</th></thead>';

// loop through data and display the results
foreach ($musicians as $value) {
    echo '<tr><td>' . $value['name'] . '</td>
        <td>' . $value['recordLabel'] . '</td>
        <td>' . $value['ranking'] . '</td>
        <td>' . $value['solo'] . '</td>
        <td>' . $value['city'] . '</td></tr>';
}

echo '</table>';
?>

</body>
</html>
