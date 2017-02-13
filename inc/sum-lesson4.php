<?php
    if (isset($_POST['first-number'])){
        $first = $_POST['first-number'];
    } else {
        $first = '';
    }
    if (isset($_POST['second-number'])) {
        $second = $_POST['second-number'];
    } else {
        $second = '';
    }

    if (isset($_POST['first-number']) && isset($_POST['second-number'])) {
        $result = $_POST['first-number'] + $_POST['second-number'];
    } else {
        $result = '';
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/php-course/style.css">
    <link rel="stylesheet" href="/php-course/icomoon/style.css">
    <script type="text/javascript" src="/php-course/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/php-course/js/toggle.js"></script>
    <title>Калькулятор суммы</title>
</head>
<body>
<div id="content" class="container">
    <h3>Calculator</h3>
    <form method="post">
        <input type="text" name="first-number" value="<?php echo $first ?>" />
        +
        <input type="text" name="second-number" value="<?php echo $second ?>" />
        <input type="submit" value=" = " />
        <?php echo $result; ?>
    </form>
    <a href="/php-course"><<= back</a>
</div>
</body>
</html>

