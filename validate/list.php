<?php
require_once 'functions.php';
?>
<h3>Welcome</h3>
<?php
if (!empty($_GET['message'])) {
    $messageCode = $_GET['message'];
    echo get_message($messageCode);
}
?>
