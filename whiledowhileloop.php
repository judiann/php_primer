<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <?php
     $grade = 0;
    // while($grade < 10) {
    //     echo '<p>I am less than 10</p>';
    // }
        while($grade < 10){
            echo '<p>less than 10</p>';
            $grade++;
        }

        echo 'exit loop';

        do {
            echo '<p>i am d0o while loop</p>';
            $grade++; //11th
        } while ($grade <10);
    ?>
</body>
</html>