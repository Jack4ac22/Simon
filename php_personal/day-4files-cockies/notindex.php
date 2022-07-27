<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include files</title>
</head>

<body>
    <?php include 'nav.html';
    // include_once ''; // it will give an error but excute the rest 
    // require_once ''; // it will give an error and stop the excution
    ?>
    <h1> some Thing</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat optio impedit esse ex quia totam quos enim, dolores ab ipsam voluptatum, rerum earum dolorum ad facere et reprehenderit! Vitae, voluptatum.</p>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, iusto quos hic eum obcaecati voluptate nobis fugit laborum? Provident officia ratione molestias animi porro praesentium fugiat consequatur earum, nisi culpa?
    </p>
    <?php include 'footer.html'; ?>
</body>

</html>