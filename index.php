<?php
require_once "market.php";
$db = new PDO("mysql:host=127.0.0.1;dbname=market", "root", "");
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nikita</title>
</head>
<body>
<form action="" method="post">
    <input placeholder="Vendor:" type="text" name="vendor">
    <input type="submit" value="Submit"><br>

</form>
<br>
<form action="" method="post">
    <input placeholder="Category:"type="text" name="category">
    <input type="submit" value="Submit"><br>

</form>
<br>
<form action="" method="post">
    <input placeholder="Min price:" type="text" name="min_price">
    <input placeholder="Max price:" type="text" name="max_price">
    <input type="submit" value="Find"><br>

</form>

<?php
if (isset($_POST["vendor"])) {
    infoByVendor($db);
} elseif (isset($_POST["category"])) {
    infoByCategory($db);
} elseif (isset($_POST["min_price"])) {
    infoByPrice($db);
}
?>
</body>
</html>

