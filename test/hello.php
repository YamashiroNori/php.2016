<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hello</title>
</head>
<body>
<!-- ▼：php -->
<?php
echo "Hello World.\n<br>";
echo 'Hello World.\n';
?>
<br>
<br>
<?php
$kosuu = 10;
echo 'みかんが'. $kosuu . '個あります<br>';
echo "みかんが{$kosuu}個あります<br>";
echo 'みかんが$kosuu個あります<br>';
?>
<br><br>
<?php
$food = array('りんご', 'みかん', 'なし');
var_dump($food);
echo "<br>";
print_r($food);
?>
<br><br>
<?php
$food = array(
          'apple' => 'りんご',
          'orange' => 'みかん',
          'pear' => 'なし',
        );
var_dump($food);
echo "<br>";
print_r($food);
?>
<br><br>
<hr>
<br>
<!-- ▼：js -->
<script>
document.write('Hello World.(JavaScript)');
</script>

</body>
</html>