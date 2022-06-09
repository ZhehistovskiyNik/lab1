<?php
function infoByVendor($db)
{
    $statement = $db->prepare("SELECT items.name, price, quantity, quality FROM items inner join vendors on FID_Vender = ID_Vendors WHERE Vendors.name=?");
    $statement->execute([$_POST["vendor"]]);

    while ($data = $statement->fetch()) {
        echo " <br> Title: {$data['name']} ::: Price: {$data['price']} ::: Quantity: {$data['quantity']} ::: Qulity: {$data['quality']} ";
    }
}

function infoByCategory($db)
{
    $statement = $db->prepare("SELECT items.name, price, quantity, quality, category.name as 'category' FROM items inner join Category on FID_Category = ID_Category WHERE Category.name=?");
    $statement->execute([$_POST["category"]]);

    while ($data = $statement->fetch()) {
        echo " <br> Title: {$data['name']} ::: Price: {$data['price']} ::: Quantity: {$data['quantity']} ::: Qulity: {$data['quality']} ::: Category: {$data['category']}";
    }
}

function infoByPrice($db)
{
    $statement = $db->prepare("SELECT items.name, price, quantity, quality FROM items WHERE price between ? and ?");
    $statement->execute([$_POST["min_price"], $_POST["max_price"]]);

    while ($data = $statement->fetch()) {
        echo " <br> Title: {$data['name']} ::: Price: {$data['price']} ::: Quantity: {$data['quantity']} ::: Qulity: {$data['quality']} ";
    }
}
