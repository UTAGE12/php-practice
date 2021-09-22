<form action="result.php" method="POST">
  お名前：<input type="text" name="name">
  <br>
  ご希望商品:
    <input type="radio" name="set" value="A">Aセット
    <input type="radio" name="set" value="B">Bセット
    <input type="radio" name="set" value="C">Cセット
  <br>
  注文数：
  <select name="quantity">
    <?php
    for ($i = 1; $i <=10; $i++){
      print ("<option value='$i'>".$i."</option>");
    }
    ?>
  </select>
  <br>
  <input type="submit" value="送信">
  </form>