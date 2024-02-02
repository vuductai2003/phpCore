<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['st'])) {
        $sothich = $_POST['st'];
        foreach ($sothich as $item){
            echo $item .'<br>';
        }
    }
}
?>
<form action="" method="post">
    <p>so thich</p>
    <p>
        <input type="checkbox" name="st[]" id="" value="1" <?php 
        echo (!empty($_POST['st']) && in_array(1, $_POST['st']))?'checked':false;
        ?>>st 1
    </p>
    <p>
        <input type="checkbox" name="st[]" id="" value="2"
            <?php
            echo (!empty($_POST['st']) && in_array(2, $_POST['st']))?'checked':false;
            ?>>st 2
    </p>
    <p>
        <input type="checkbox" name="st[]" id="" value="3" <?php
        echo (!empty($_POST['st']) && in_array(3, $_POST['st']))?'checked':false;
        ?>>st 3
    </p>
    <button type="submit">submuit</button>
</form>
