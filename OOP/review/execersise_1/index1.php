<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="name">Name: </label><input type="text" id="name" name=" name"><br>
        <label for=" price">Price: </label><input type="text" id="price" name=" price"><br>
        <button type="submit" name="submit">Submit</button>
        <div id="message"></div>
    </form>
    <script>
        document.querySelector("form").addEventListener('submit', function(event) {
            // Prevent the page to refresh
            event.preventDefault();
            let form = this;

            fetch('addFlowerDB.php', {
                    method: 'post',
                    body: new FormData(form) // body is what will be sent in the form ($_POST)
                }).then(res => res.text())
                .then(function(result) {
                    document.getElementById('message').innerHTML = result;
                });
        });
    </script>
</body>

</html>