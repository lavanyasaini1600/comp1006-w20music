<?php
// set the page title so the header can display it
$title = 'Musicians';

// use the require_once function to embed the shared header here
require_once('header.php');
?>

<h1>Musician List</h1>
<a href="musician-details.php">Add a New Musician</a>
<?php
// connect
$db = new PDO('mysql:host=172.31.22.43;dbname=Rich100', 'Rich100', 'x');

// set up & execute query
$sql = "SELECT * FROM musicians";
$cmd = $db->prepare($sql);
$cmd->execute();
$musicians = $cmd->fetchAll();

// start table
echo '<table class="table table-striped table-hover"><thead><th>Name</th><th>Label</th><th>Ranking</th><th>Solo</th><th>City</th></thead>';

// loop through data and display the results
foreach ($musicians as $value) {
    echo '<tr><td><a href="musician-details.php?musicianId=' . $value['musicianId'] . '">' . $value['name'] . '</a></td>
        <td>' . $value['recordLabel'] . '</td>
        <td>' . $value['ranking'] . '</td>
        <td>' . $value['solo'] . '</td>
        <td>' . $value['city'] . '</td>
        <td><a class="text-danger" href="delete-musician.php?musicianId=' . $value['musicianId'] . '"
            onclick="return confirmDelete();">Delete</a></td>
        </tr>';
}

echo '</table>';

require_once('footer.php');
?>
