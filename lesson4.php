<div>
    <h3>1. Обязательно сделайте скрипты, приведенные в качестве примеров в этом уроке.</h3>
    <h3>Gallery</h3>
    <ul class="gallery">
        <?php
        for($i = 1; $i <= 8; $i++)
            echo "<li><a href = inc/photo-lesson4.php?id=$i ><img src=\"/php-course/images/$i.jpg\" width=\"250\"/></a></li>";
        ?>
    </ul>
    <h3>Calculate sum</h3>
    <a href="inc/sum-lesson4.php">Go to sum calculator >></a>
    <h3>Calculator</h3>
    <a href="inc/calculator-lesson4.php">Go to calculator >></a>
    <h3>Продвинутый блок.<br>
        3. Создайте калькулятор, который будет определять тип выбранной пользователем
        операции, ориентируясь на нажатую кнопку.<br>
        Данные, введённые пользователем в поля, должны сохраняться и выводиться
        вместе с результатом вычисления.</h3>
    <a href="inc/calculator2-lesson4.php">Go to calculator >></a>
</div>