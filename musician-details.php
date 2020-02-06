<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musician Details</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>

<form method="post" action="save-musician.php">
    <fieldset>
        <label for="name" class="col-md-2">Name: *</label>
        <input name="name" id="name" required maxlength="100" />
    </fieldset>
    <fieldset>
        <label for="recordLabel" class="col-md-2">Record Label:</label>
        <input name="recordLabel" id="recordLabel" maxlength="50" />
    </fieldset>
    <fieldset>
        <label for="ranking" class="col-md-2">Ranking:</label>
        <input name="ranking" id="ranking" type="number" min="0" />
    </fieldset>
    <fieldset>
        <label for="solo" class="col-md-2">Solo:</label>
        <input name="solo" id="solo" type="checkbox" />
    </fieldset>
    <fieldset>
        <label for="photo" class="col-md-2">Photo:</label>
        <input name="photo" id="photo" />
    </fieldset>
    <fieldset>
        <label for="city" class="col-md-2">City:</label>
        <input name="city" id="city" maxlength="50" />
    </fieldset>
    <button class="offset-md-2 btn btn-primary">Save</button>
</form>

</body>
</html>
