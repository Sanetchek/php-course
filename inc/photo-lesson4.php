<?php
    $id = $_GET['id'];
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/php-course/style.css">
    <link rel="stylesheet" href="/php-course/icomoon/style.css">
    <script type="text/javascript" src="/php-course/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/php-course/js/toggle.js"></script>
    <title>Просмотр картинки № <?php echo $id;?></title>
</head>
<body>
    <div id="content" class="container">
        <img src="/php-course/images/<?php echo $id; ?>.jpg" width="300"/>
        <h2>Description of picture № <?php echo $id; ?></h2>
        <a href="/php-course"><<= back</a>
    </div>
</body>
</html>

