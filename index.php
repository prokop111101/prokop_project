<?php
require_once('templates/top.php');

if ($_GET['url']) {
    $url = $_GET['url'];
} else {
    $url = 'index';
}

$tableName = 'pages';
$query = "SELECT * FROM $tableName WHERE url='$url'";

$result = mysql_query($query);
if (!$result) {
    exit($query);
}
$text = mysql_fetch_assoc($result);

?>

    <div class='main-block'>
        <h2><?= $text['name']; ?> </h2>
        <?= $text['body']; ?>
    </div>

<?php require_once('templates/bottom.php'); ?>