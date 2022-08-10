<?php $connect = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
if ($connect) {
    $categories_query = "SELECT id, title FROM categories";

    $categories_data = mysqli_fetch_all(mysqli_query($connect, $categories_query), MYSQLI_ASSOC);
    foreach ($categories_data as $category) {
        $id = $category['id'];
        $title = $category['title'];

        echo "<option value=\"$id\">$title</option>";
    }
};
