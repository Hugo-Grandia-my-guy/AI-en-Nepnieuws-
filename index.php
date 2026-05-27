<?php
include('includes/header.php');

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page = basename($page);

$page = str_replace('.php', '', $page);
$file = "pages/" . $page . ".php";

echo '<main class="content">';
if (file_exists($file)) {
    include($file);
} else {
    include("pages/home.php");
}
echo '</main>';

include('includes/footer.php');
?>