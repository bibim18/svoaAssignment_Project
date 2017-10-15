<?php
$a = $_GET["key"];
$SQL = "DELETE  FROM  news  WHERE id_news = '$a'";
$query = mysqli_query($connect,$SQL) or die(mysqli_error($connect));
header("Refresh:0");
?>