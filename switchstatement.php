<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
     <ht> Switch Statements <h1>
     <?php 
     $grade = 'A';

     switch ($grade) {
         case 'A' :
            echo 'You are a superstar';
            break;
         case 'B' :
            echo 'You are a star';
            break;
     }
     ?>
</body>
</html>