<div>
    <h3>1. С помощью цикла while выведите все числа в промежутке от 0 до 100, которые
        делятся на 3 без остатка.</h3>
    <ul>
        <li>
            <?php
            $x = 0;
                while ($x <= 100) {
                    if ( $x%3 === 0 ) {
                        echo $x . "; ";
                    }
                    $x++;
                }
            ?>
        </li>
    </ul>
</div>
<div>
    <h3>2. С помощью цикла do…while напишите функцию для вывода чисел от 0 до 10,
        чтобы результат выглядел так:<br>
        0 – это ноль<br>
        1 – нечетное число<br>
        2 – четное число<br>
        3 – нечетное число<br>
        …<br>
        10 – четное число</h3>
    <ul>
            <?php
                $y = 0;
                echo "<li>" . $y . " - это ноль</li>";
                do{
                    $y++;

                    if ($y%2 === 0) {
                        echo "<li>" . $y . " - четное число</li>";
                    } else {
                        echo "<li>" . $y . " - нечетное число</li>";
                    }
                } while($y < 10);
            ?>
    </ul>
</div>
<div>
    <h3>3. Задание со звездочкой. Выведите с помощью цикла for числа от 0 до 9, НЕ
        используя тело цикла. То есть выглядеть должно вот так:<br>
        for(…){// здесь пусто}</h3>
    <ul>
        <?php
            for($i = 0; $i < 10; print "<li>$i</li>", $i++) {}
        ?>
    </ul>
</div>
<div>
    <h3>4. Объявите массив, где в качестве ключей будут использоваться названия областей, а
        в качестве значений – массивы с названиями городов из соответствующей области.
        Выведите в цикле значения массива, чтобы результат был таким:<br>
        Киевская область:<br>
        Киев, Бровары, Лютеж<br>
        Харьковская область:<br>
        Харьков, Чугуев, Изюм, Лозовая<br>
        Львовская область:<br>
        Львов, Дрогобыч, Стрый</h3>
    <ul>
        <?php
            $regionsAndCities = array(
                "Киевская область" => array("Киев", "Бровары", "Лютеж"),
                "Харьковская область" => array("Харьков", "Чугуев", "Изюм", "Лозовая"),
                "Львовская область" => array("Львов", "Дрогобыч", "Стрый")
            );

            foreach ($regionsAndCities as $regions => $cities) {
                echo
                "<li><h3>$regions:</h3>                
                <ol>";

                foreach($cities as $city) {
                    echo "<li>$city</li>";
                }

                echo "</li></ol>";
            }
        ?>
    </ul>
</div>
<div>
    <h3>5. Задание со звездочкой. Повторите предыдущее задание, но выводите на экран
        только города, начинающиеся с буквы «Л».</h3>
    <ul>
        <?php
        $regionsAndCities = array(
            "Киевская область" => array("Киев", "Бровары", "Лютеж"),
            "Харьковская область" => array("Харьков", "Чугуев", "Изюм", "Лозовая"),
            "Львовская область" => array("Львов", "Дрогобыч", "Стрый")
        );

        foreach ($regionsAndCities as $regions => $cities) {
            echo
            "<li><h3>$regions:</h3>                
                <ol>";

            foreach($cities as $city) {
                if ( mb_substr($city, 0, 1)  === "Л") echo "<li>$city</li>";
            }

            echo "</li></ol>";
        }
        ?>
    </ul>
</div>
<div>
    <h3>6. Объявите массив, индексами которого являются буквы русского языка, а
        значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’
        => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).<br>
        Напишите функцию транслитерации строк.</h3>
    <ul>
        <li>
        <?php
            $textForExample = "Транслитерация это круто!";
            function translit($text) {
                $rusToLat = array(
                    'а' => 'a',   'б' => 'b',   'в' => 'v',
                    'г' => 'g',   'д' => 'd',   'е' => 'e',
                    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
                    'и' => 'i',   'й' => 'y',   'к' => 'k',
                    'л' => 'l',   'м' => 'm',   'н' => 'n',
                    'о' => 'o',   'п' => 'p',   'р' => 'r',
                    'с' => 's',   'т' => 't',   'у' => 'u',
                    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
                    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
                    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
                    'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

                    'А' => 'A',   'Б' => 'B',   'В' => 'V',
                    'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
                    'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
                    'И' => 'I',   'Й' => 'Y',   'К' => 'K',
                    'Л' => 'L',   'М' => 'M',   'Н' => 'N',
                    'О' => 'O',   'П' => 'P',   'Р' => 'R',
                    'С' => 'S',   'Т' => 'T',   'У' => 'U',
                    'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
                    'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
                    'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
                    'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
                );
                return strtr($text, $rusToLat);
            }

            echo translit($textForExample);
        ?>
        </li>
    </ul>
</div>
<div>
    <h3>7. Напишите функцию, которая заменяет в строке пробелы на подчеркивания и
        возвращает видоизмененную строчку.</h3>
    <ul>
        <li>
            <?php
                function symbolReplace($text) {
                    $replace = str_replace(" ", "_", $text);
                    return $replace;
                }

                echo symbolReplace($textForExample);
            ?>
        </li>
    </ul>
</div>
<div>
    <h3>8. Объедините две ранее написанные функции в одну, которая получает строку на
        русском языке, производит транслитерацию и замену пробелов на подчеркивания
        (аналогичная задача решается при конструировании url-адресов на основе названия
        статьи в блогах).</h3>
    <ul>
        <li>
            <?php
                function urlCreate($text) {
                    $rusToLat = translit($text);
                    $spaceReplace = symbolReplace($rusToLat);
                    return $spaceReplace;
                }

                echo urlCreate($textForExample);
            ?>
        </li>
    </ul>
</div>