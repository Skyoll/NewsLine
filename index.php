<?php
//1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

//$c = 0;
//while ($c <= 100){
//    if ($c % 3 == 0){
//        echo $c;
//        $c++;
//    }
//    else {
//        $c++;
//        }
//}

//2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
//0 – это ноль.
//1 – нечётное число.
//2 – чётное число.
//3 – нечётное число.
//$i = 0;
//do{
//    if($i == 0){
//        echo $i . " - это ноль <br/>";
//        $i++;
//    }
//    else if ($i % 2 == 1){
//        echo $i . " - это нечетное число <br/>";
//        $i++;
//        }
//    else {
//        echo $i . " - это четное число <br/>";
//        $i++;
//    }
//} while ($i <= 10);

//3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
// массивы с названиями городов из соответствующей области.
//Вывести в цикле значения массива, чтобы результат был таким:
//Московская область:
//Москва, Зеленоград, Клин.
//Ленинградская область:
//Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
//Рязанская область…(названия городов можно найти на maps.yandex.ru)

//$areaArr = [
//    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
//    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
//    'Волгоградская область:' => ['Волгоград', 'Волжский', 'Камышин', 'Урюпинск', 'Иловля']
//];
//
//
//
//function displayCity($arr)
//{
//    if (!is_array($arr)) {
//        return print "incorrect argument '{$arr}'";
//    }
//    foreach ($arr as $key => $value) {
//        echo $key . '<br>';
//        for ($i = 0; $i < $arrLength = count($arr[$key]); $i++) {
//            //находим последний элемент вложенного массива для переноса строки
//            if ($i == $arrLength - 1) {
//                echo $arr[$key][$i] . '.' . '<br>';
//            }
//            else {
//                //если не последний, ставим запятую
//                echo $arr[$key][$i] . ', ';
//            }
//        }
//    }
//}
//displayCity($areaArr);

//4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие
// латинские буквосочетания
// (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
//Написать функцию транслитерации строк.
//function translit($string)
//{
//    if (!is_string($string)) {
//        return 'incorrect argument';
//    }
//    $ruChars = 'А	Б	В	Г	Д	Е	Ё	Ж	З	И	Й	К	Л	М	Н	О	П	Р	С	Т	У	Ф	Х	Ц	Ч	Ш	Щ	Ъ	Ы	Ь	Э	Ю	Я';
//    $enChars = 'A	B	V	G	D	E	E	ZH	Z	I	Y	K	L	M	N	O	P	R	S	T	U	F	KH	TS	CH	SH	SCH	’ 	Y	’ 	E	YU	YA';
//    //совмещенный массив
//    $tranArr = array_combine(explode('	', mb_strtolower($ruChars)), explode('	', strtolower($enChars)));
//    //преобразуем аргумент (строку) в массив
//    $stringArr = preg_split('//u', mb_strtolower($string), 0, PREG_SPLIT_NO_EMPTY);
//    $requestedArr = [];
//    //перебираем строку и для каждой буквы ищем совпадение в массиве транслита
//    for ($i = 0; $i < count($stringArr); $i++) {
//        foreach ($tranArr as $key => $value) {
//            //если находим, добавляем в новый массив
//            if ($stringArr[$i] == $key) {
//                array_push($requestedArr, $value);
//                break;
//                //если встречаются знаки пунктуации или пробелы, добавляем без обработки
//            } elseif (preg_match('/[[:punct:]]|\s/', $stringArr[$i])) {
//                array_push($requestedArr, $stringArr[$i]);
//                break;
//            }
//        }
//    }
//    //выводим на экран (implode - преобразует массив в строку)
//    return implode($requestedArr);
//}
//echo translit('Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания');

//5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

//function replaceSpace($string){
//    $replacement = [
//      ' ' => '_'
//    ];
//    $stringArr = preg_split('//u', mb_strtolower($string), 0, PREG_SPLIT_NO_EMPTY);
//    $requestedArr = [];
//    for ($i = 0; $i < count($stringArr); $i++) {
//          foreach ($replacement as $key => $value) {
//              if ($stringArr[$i] == $key) {
//                  array_push($requestedArr, $value);
//                 break;
//              }
//              else {
//                  array_push($requestedArr, $stringArr[$i] );
//              }
//          }
//    }
//    return implode($requestedArr);
//}
//
//echo replaceSpace('Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.');
// !!!!!!!!!!! ребята сделали так
//function replaceSpace($string)
//{
//    if (!is_string($string)) {
//        return "incorrect argument {$string}";
//    }
//    return preg_replace('/\s/', '_', $string);
//}
//echo replaceSpace('Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.');

//6.НЕ ПОНЯЛ КАК ДЕЛАТЬ В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
// Необходимо представить
// пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными
// подменю? Попробовать его реализовать.

//$menuArr = [
//    'Item 1',
//    'Item 2' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
//    'Item 3' => ['Subitem 4' => ['One level deeper 1', 'One level deeper 2']]
//];
//function menuRender($arr)
//{
//    if (!is_array($arr)) {
//        return 'incorrect argument';
//    }
//    $renderArr[] = '<ul>';
//    foreach ($arr as $key => $value) {
//        //перебираем массив, если значение - массив, то обрабатываем его нашей функцией
//        if (is_array($value)) {
//            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
//        } else {
//            $renderArr[] = '<li>' . $value . '</li>';
//        }
//    }
//    $renderArr[] = '</ul>';
//    return implode($renderArr);
//}
//echo menuRender($menuArr);

//7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. Выглядеть это должно так:

//for ($i = 0; $i <= 9; print $i++ . ' ');

//8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

//$areaArr = [
//    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
//    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
//    'Волгоградская область:' => ['Волгоград', 'Волжский', 'Камышин', 'Урюпинск', 'Иловля']
//];
//
//function searchCity($char, $arr)
//{
//    if (!is_array($arr) || !is_string($char)) {
//        return print 'incorrect arguments.';
//    }
//    //счетчик неподходящих городов.
//    $wrongCity = 0;
//    //количество городов в массиве
//    $cityCount = count($arr, COUNT_RECURSIVE) - count($arr);
//    foreach ($arr as $key => $value) {
//        for ($i = 0; $i < count($arr[$key]); $i++) {
//            //для работы с кириллицей
//            $explodeArr = preg_split('//u', $arr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
//            //если первая буква совпадает с искомой, то выводим на экран
//            if ($explodeArr[0] == $char) {
//                echo implode($explodeArr) . '<br>';
//            } else {
//                $wrongCity++;
//                // если счетчик неподходящих городов == количество городов в массиве, то выводим сообщение
//                if ($wrongCity == $cityCount) {
//                    return print "Города на букву '{$char}' в массиве нет.";
//                }
//            }
//        }
//    }
//}
//searchCity('К', $areaArr);
//echo '<hr>';

//9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит
// транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на
// основе названия статьи в блогах).

//function translitReplaceSpaces($string)
//{
//    if (!is_string($string)) {
//        return 'incorrect argument';
//    }
//    $ruChars = 'А	Б	В	Г	Д	Е	Ё	Ж	З	И	Й	К	Л	М	Н	О	П	Р	С	Т	У	Ф	Х	Ц	Ч	Ш	Щ	Ъ	Ы	Ь	Э	Ю	Я';
//    $enChars = 'A	B	V	G	D	E	E	ZH	Z	I	Y	K	L	M	N	O	P	R	S	T	U	F	KH	TS	CH	SH	SCH	’	Y	’	E	YU	YA';
//    //совмещенный массив
//    $tranArr = array_combine(explode('	', mb_strtolower($ruChars)), explode('	', strtolower($enChars)));
//    //преобразуем аргумент (строку) в массив
//    $stringArr = preg_split('//u', mb_strtolower($string), 0, PREG_SPLIT_NO_EMPTY);
//    //перебираем строку и для каждой буквы ищем совпадение в массиве транслита
//    for ($i = 0; $i < count($stringArr); $i++) {
//        foreach ($tranArr as $key => $value) {
//            //если находим, добавляем в новый массив
//            if ($stringArr[$i] == $key) {
//                $requestedArr[] = $value;
//                break;
//                //если встречаются знаки пунктуации или пробелы, добавляем без обработки
//            } elseif (preg_match('/[[:punct:]]|\s/', $stringArr[$i])) {
//                $requestedArr[] = $stringArr[$i];
//                break;
//            }
//        }
//    }
//    //выводим на экран
//    return preg_replace('/\s/', '_', implode($requestedArr));
//}
//echo translitReplaceSpaces('Объединить две ранее написанные функции в одну');
