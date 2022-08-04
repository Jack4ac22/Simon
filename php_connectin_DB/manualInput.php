<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <?php if (isset($_POST['submit'])) : ?>
        <?php else : echo 'please Submit';
        endif ?>
        <div><label for="title">Book title</label>
            <input type="text" name="title" id="title">
        </div>
        <div><label for="publication_date">Publicationdate</label>
            <input type="date" name="publication_date" id="publication_date">
        </div>
        <div><label for="price">Book price</label>
            <input type="text" name="price" id="price">
        </div>
        <div><label for="description">Book description</label>
            <input type="text" name="description" id="description">
        </div>
        <div> <label for="author_id">Author id</label>
            <input type="text" name="author id" id="author_id">
        </div>
        <div> <label for="author_id">Author id</label>
            <input type="text" name="publisher_id" id="author_id">
        </div>
        <div><input type="submit" value="Submit" name="submit"></div>
    </form>

</body>

</html>