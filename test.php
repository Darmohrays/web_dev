<!DOCTYPE html>
<html>

<head>
		<title>Test</title>
</head>

<body>
<p>
    <?php
        // Соединяемся, выбираем базу данных
        echo 'test';
        $link = mysqli_connect('localhost', 'root', 'root')
            or die('Не удалось соединиться: ' . mysql_error());
        echo 'Соединение успешно установлено';

        // Выполняем SQL-запрос
        $query = 'SHOW DATABASES';
        $result = mysqli_query('') or die('Запрос не удался: ' . mysql_error());

        // Выводим результаты в html
        echo "<table>\n";
        while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";

        // Освобождаем память от результата
        mysqli_free_result($result);

        // Закрываем соединение
        mysqli_close($link);
    ?>
</p>
</body>
</html>