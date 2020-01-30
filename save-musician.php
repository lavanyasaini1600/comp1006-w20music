<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// save inputs
$name = $_POST['name'];
$recordLabel = $_POST['recordLabel'];
$ranking = $_POST['ranking'];

// default solo to false
$solo = false;

// change solo to true if the user checked the solo checkbox
if (!empty($_POST['solo'])) {
    $solo = true;
}

$photo = $_POST['photo'];
$city = $_POST['city'];

// connect
$db = new PDO('mysql:host=172.31.22.43;dbname=Rich100', 'Rich100', 'x');

// set up insert
$sql = "INSERT INTO musicians (name, recordLabel, ranking, solo, photo, city) VALUES 
    (:name, :recordLabel, :ranking, :solo, :photo, :city)";
$cmd = $db->prepare($sql);

// bind the variables into the INSERT command
$cmd->bindParam(':name', $name, PDO::PARAM_STR, 100);
$cmd->bindParam(':recordLabel', $recordLabel, PDO::PARAM_STR, 50);
$cmd->bindParam(':ranking', $ranking, PDO::PARAM_INT);
$cmd->bindParam(':solo', $solo, PDO::PARAM_BOOL);
$cmd->bindParam(':photo', $photo, PDO::PARAM_STR, 100);
$cmd->bindParam(':city', $city, PDO::PARAM_STR, 50);

// save to db
$cmd->execute();

// disconnect
$db = null;

echo 'Musician Saved';
?>

</body>
</html>
