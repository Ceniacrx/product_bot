<table class="table">
    <thead>
    <tr>
        <th scope="col">Артикул</th>
        <th scope="col">Название</th>
        <th scope="col">Цена</th>
        <th scope="col">Остаток</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $link = mysqli_connect('localhost','root', '','product_bot_db');
    // В случае если соединение не ехала ,то link=false => нужно проверить сам link на false
    if (!$link){
        die('Соединение с базой данных не установлено');
    }
    $query = 'SELECT * FROM `products`';
    $res = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($res)){
        echo '<tr>';
        echo '<td>' . $row['article'] . '</td>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '<td>' . $row['stock'] . '</td>';
    }

    ?>
    </tbody>
</table>