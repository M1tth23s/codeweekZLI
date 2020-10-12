<?php
$var1 = readline("Geben sie eine Zahl ein, die zwischen 4 und 10 liegt:");
$var2 = readline("Geben sie eine Zahl eindie Zwischen 12 und 24 liegt:");
$var3 = readline("Geben sie eine Zahl eindie zwischen 0 und 8 liegt:");
$var4 = readline("Geben sie eine Zahl ein, die zwischen 6 und 20 liegt:");
$var5 = readline("Geben sie eine Zahl ein, die zwischen 2 und 10 liegt:");
$var6 = readline("Geben sie eine Zahl ein, die zwischen 4 und 16 liegt:");

$win1 = ("Alle Zahlen die kleiner als 64 sind.");
$win2 = ("Alle Zahlen die grööser als 3 sind.");
$win3 = ("Alle zahlen die kleiner oder gleich 14 sind.");
$win4 = ("Alle zahlen die grösser oder gleich 15 sind.");
$win5 = ("Die Zahl 1.");
$win6 = ("Alle Zahlen die nicht 66 sind.");

$WIN = array("$win1\n, $win2\n, $win3\n, $win4\n, $win5\n, $win6\n");
    $ding1 = ($var1 * 2);
    $ding2 = ($var2 / 2);
    $ding3 = ($var3 + 10);
    $ding4 = ($var4 - 5);
    $ding5 = ($var5 % 2);
    $ding6 = ($var6 - 1);

    if($ding1 < 64) {$bums1 = (33);
    }
    else {echo("Sie haben gewonnen! \nGewinnerzahl:\n $ding1\n");
    }
    if($ding2 > 3) {$bums2 = (65);
    }
    else {echo("Sie haben gewonnen! \nGewinnerzahl:\n $ding2\n");
    }
    if($ding3 <= 14) {$bums3 = (5);
    }
    else {echo("Sie haben gewonnen! \nGewinnerzahl:\n $ding3\n");
    }
    if($ding4 >= 15) {$bums4 = (33);
    }
    else {echo("Sie haben gewonnen! \nGewinnerzahl:\n $ding4\n");
    }
    if($ding5 = 1) {$bums5 = (3);
    }
    else {echo("Sie haben gewonnen! \nGewinnerzahl:\n $ding5\n");
    }
    if($ding6 =! 66) {$bums6 = (8);
    }
    else {echo("Sie haben gewonnen! \nGewinnerzahl:\n $ding6\n");
    }
    print("Die Gewinnerzahlen: ");
    print($WIN[0]);
    print($WIN[1]);
    print($WIN[2]);
    print($WIN[3]);
    print($WIN[4]);
    print($WIN[5]);