<?php
require_once 'functions.php';
/*Rules
name: phai nhap, lo hon 5 ky tu
age: phai nhap, la so, so ngduong
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errol = [];
    if (empty(trim($_POST['name']))) {
        $errol['name']['required'] = 'khong duoc de trong';
    } else {
        if (strlen(trim($_POST['name'])) < 5) {
            $errol['name']['min'] = 'ho ten phai lon hon 5 ky tu';
        }
    }

    if (empty(trim($_POST['email']))) {
        $errol['email']['required'] = 'email ko dc de trong';
    } else {
        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
            $errol['email']['invaild'] = 'email ko hop ve';
        }
    }

    if (empty(trim($_POST['age']))) {
        $errol['age']['required'] = 'tuoi khong dc trong';
    } else {
        if (!filter_var(trim($_POST['age']), FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]])) {
            $errol['age']['invaild'] = 'tuoi ko hop le';
        }
    }

    if (empty($errol)) {
        redirect('list.php?message=1');
    }

}

?>
<form action="" method="post">
    <p>
        Name: <br>
        <input type="text" name="name" id="" value="<?php echo (!empty($_POST['name'])) ? $_POST['name'] : false; ?>"
        > <br>
    </p>
    <?php
    echo (!empty($errol['name']['required'])) ?
        '<span style="color: red">' . $errol['name']['required'] . '</span>' : false;
    echo (!empty($errol['name']['min'])) ?
        '<span style="color: red">' . $errol['name']['min'] . '</span>' : false;
    ?>

    <p>
        Email: <br>
        <input type="text" name="email" id=""
               value="<?php echo (!empty($_POST['email'])) ? $_POST['email'] : false; ?>"> <br>
    </p>
    <?php
    echo (!empty($errol['email']['required'])) ?
        '<span style="color: red">' . $errol['email']['required'] . '</span>' : false;
    echo (!empty($errol['email']['invaild'])) ?
        '<span style="color: red">' . $errol['email']['invaild'] . '</span>' : false;
    ?>
    <p>
        Age: <br>
        <input type="text" name="age" id="" value="<?php echo (!empty($_POST['age'])) ? $_POST['age'] : false; ?>"> <br>
    </p>
    <?php
    echo (!empty($errol['age']['required'])) ?
        '<span style="color: red">' . $errol['age']['required'] . '</span>' : false;
    echo (!empty($errol['age']['invaild'])) ?
        '<span style="color: red">' . $errol['age']['invaild'] . '</span>' : false;
    ?>
    <button type="submit">Submid</button>
</form>
