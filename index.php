<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Робота з файлами</title>
</head>
<body>
    <?php 
        $file = file_exists("text.txt");
        if ($file == false){
            echo "Створіть файл";
        }else{
            $arr = file ("text.txt");
            foreach ($arr as $value){
                echo $value;
            }
        }
        $fp = fopen("text.txt", a);
        $mytxt = "Пробую писати програми";
        echo "<br/>";
        $write = fwrite($fp, $mytxt);
        if ($write){
            echo "Дані успішно записано";
        }else {
            echo "Збій у записі";
        }
        $size = filesize ("text.txt");
        echo "<br/>";
        echo $size;
        echo "<br/>";
        $atime = fileatime ("text.txt");
        echo date("j F Y, g:i a", $atime);
        echo "<br/>";
        $ctime = filectime ("text.txt");
        echo date("j F Y, g:i a",  $ctime);
        echo "<br/>";
        echo "<br/>";
        fclose ($fp);

        $fopen = fopen("text2.txt", w);
        $txt = "другий файл успішно створено";
        $fwrite = fwrite($fopen, $txt);
        echo readfile("text2.txt");
    ?>
</body>
</html>