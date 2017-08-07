<div>
    <h3>1. Объявите две целочисленные переменные $a и $b и задайте им произвольные
        начальные значения. Затем напишите скрипт, который работает по следующему
        принципу:</h3>
    <ol>
        <li>если $a и $b положительные, выведите их разность;</li>
        <li>если $а и $b отрицательные, выведите их произведение;</li>
        <li>если $а и $b разных знаков, выведите их сумму.</li>
    </ol>

    <ul>
        <?php
        $a = -3;
        $b = 4;

        if ( ($a >= 0) && ($b >= 0) ) {
            $c = $a - $b;
            echo "<li>Разность: $a - $b = $c</li>";
        } else if ( ($a < 0) && ($b < 0) ) {
            $c = $a * $b;
            echo "<li>Произведение: $a * $b = $c";
        } else {
            $c = $a + $b;
            echo "<li>Сумма: $a + $b = $c</li>";
        }
        ?>
    </ul>
</div>
<div>
    <h3>2. Присвойте переменной $а значение в промежутке [0..15]. С помощью оператора
        switch организуйте вывод чисел от $a до 15;</h3>
    <ul>
        <li>
            <?php
            $a = 8;

            function countA ($count) {
                echo "<div>Считаем от $count до 15</div>";
                echo "<ul>";
                for ($i = $count; $i <= 15; $i++) {
                    echo "<li>$i</li>";
                }
                echo "</ul>";
            }

            switch ($a) {
                case 0:
                    countA($a);
                    break;
                case 1:
                    countA($a);
                    break;
                case 2:
                    countA($a);
                    break;
                case 3:
                    countA($a);
                    break;
                case 4:
                    countA($a);
                    break;
                case 5:
                    countA($a);
                    break;
                case 6:
                    countA($a);
                    break;
                case 7:
                    countA($a);
                    break;
                case 8:
                    countA($a);
                    break;
                case 9:
                    countA($a);
                    break;
                case 10:
                    countA($a);
                    break;
                case 11:
                    countA($a);
                    break;
                case 12:
                    countA($a);
                    break;
                case 13:
                    countA($a);
                    break;
                case 14:
                    countA($a);
                    break;
                case 15:
                    countA($a);
                    break;

                default:
                    echo "Должен быть диапазон от 0 до 15. Введите другую цыфру";
            }
            ?>
        </li>
    </ul>
</div>
<div>
    <h3>3. Реализуйте основные 4 арифметические операции (+, -, *, %) в виде функций с
        двумя параметрами. Обязательно используйте оператор return.</h3>
    <ul>
        <?php
        $a = 5;
        $b = 6;

        function supplement($a, $b) {
            return $a + $b;
        }
        function substraction($a, $b) {
            return $a - $b;
        }
        function multiply($a, $b) {
            return $a * $b;
        }
        function division($a, $b) {
            return $a % $b;
        }

        echo "<li>$a + $b = " . supplement($a, $b) . "</li>";
        echo "<li>$a - $b = " . substraction($a, $b) . "</li>";
        echo "<li>$a * $b = " . multiply($a, $b) . "</li>";
        echo "<li>$a % $b = " . division($a, $b) . "</li>";
        ?>
    </ul>
</div>
<div>
    <h3>4. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
        $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием
        операции. В зависимости от переданного значения операции выполните одну из
        арифметических операций (используйте функции из пункта 4) и верните
        полученное значение (используйте switch).</h3>
    <ul>
        <?php
        $operationName = "Деление с остатком";

        function mathOperation($arg1, $arg2, $operation) {
            switch($operation) {
                case "Добавление":
                    echo "<li>Добавление: $arg1 + $arg2 = " . supplement($arg1, $arg2) . "</li>";
                    break;
                case "Разница":
                    echo "<li>Разница: $arg1 - $arg2 = " . substraction($arg1, $arg2) . "</li>";
                    break;
                case "Деление с остатком":
                    echo "<li>Деление с остатком: $arg1 % $arg2 = " . division($arg1, $arg2) . "</li>";
                    break;
                case "Умножение":
                    echo "<li>Умножение: $arg1 * $arg2 = " . multiply($arg1, $arg2) . "</li>";
                    break;
            }
        }

        echo mathOperation($a, $b, $operationName);
        ?>
    </ul>
</div>
<h3>Продвинутый блок</h3>
<div>
    <h3>5. С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
        function power($val, $pow), где $val – заданное число, $pow – степень.</h3>
    <ul>
        <li>
            <?php
                function factorial($x) {
                    if ($x === 0) {
                        return 1;
                    } else if ($x > 0) {
                        return $x*factorial($x-1);
                    } else {
                        return $x*factorial($x+1);
                    }
                }
                echo factorial($b);
            ?>
        </li>
    </ul>
</div>
<div>
    <h3>6. Напишите функцию, которая вычисляет текущее время и возвращает его в формате
        с правильными склонениями, например:
        22 часа 15 минут
        21 час 43 минуты
        итд.
        Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP –
        date.</h3>
    <ul>
        <li>
            <?php
                function declensionTime ($hour, $minute) {
                    $declHour = '';
                    $declMinute = '';

                    if ( ($hour > 10) && ($hour < 20) || ($hour%100 > 10) && ($hour%100 < 20) ) {
                        $declHour = ' часов';
                    } else {
                        switch ($hour%10) {
                            case 1:
                                $declHour = " час";
                                break;
                            case 2:
                            case 3:
                            case 4:
                                $declHour = " часа";
                                break;
                            default:
                                $declHour = " часов";
                        }
                    }

                    if ( ($minute > 10) && ($minute < 20) || ($minute%100 > 10) && ($minute%100 < 20) ) {
                        $declMinute = ' минут';
                    } else {
                        switch ($minute%10) {
                            case 1:
                                $declMinute = " минута";
                                break;
                            case 2:
                            case 3:
                            case 4:
                                $declMinute = " минуты";
                                break;
                            default:
                                $declMinute = " минут";
                        }
                    }

                    return $hour . $declHour . " " . $minute . $declMinute;
                }

                $h = date('H');
                $m = date('i');

                 echo declensionTime($h, $m);
            ?>
        </li>
    </ul>
</div>