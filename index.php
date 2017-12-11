<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require "Test.php";
        echo 'Hello World 1 !<br>';
        echo ' paie ton coffee !!<br>';
        echo "Test de commit depuis PHPStorm !<br>";

        $test = new Test("Manuel", "France");
        $test->show();
        ?>
    </body>
</html>
