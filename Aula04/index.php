<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta("BIC","Azul",0.5);
            $c2 = new Caneta("BIC","Verde",1.5);
            
           
            print_r($c1);
            print_r($c2);
        ?>
        </pre>
    </body>
</html>
