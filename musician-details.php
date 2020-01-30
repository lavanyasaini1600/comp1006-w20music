<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musician Details</title>
</head>
<body>

<form method="post" action="save-musician.php">
    <fieldset>
        <label for="name">Name:</label>
        <input name="name" id="name" />
    </fieldset>
    <fieldset>
        <label for="recordLabel">Record Label:</label>
        <input name="recordLabel" id="recordLabel" />
    </fieldset>
    <fieldset>
        <label for="ranking">Ranking:</label>
        <input name="ranking" id="ranking" />
    </fieldset>
    <fieldset>
        <label for="solo">Solo:</label>
        <input name="solo" id="solo" type="checkbox" />
    </fieldset>
    <fieldset>
        <label for="photo">Photo:</label>
        <input name="photo" id="photo" />
    </fieldset>
    <fieldset>
        <label for="city">City:</label>
        <input name="city" id="city" />
    </fieldset>
    <button>Save</button>
</form>

</body>
</html>
