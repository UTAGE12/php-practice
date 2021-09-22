<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$set = htmlspecialchars($_POST["set"], ENT_QUOTES);
$quantity = htmlspecialchars($_POST["quantity"], ENT_QUOTES);

echo "私の名前は". $name."<br />";
echo "ご希望商品は、". $set. "セット". "<br />";
echo "注文数は、". $quantity. "<br />";
?>
