#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    $i = 0;
    
    if ($argc != 4)
    {
        echo "Incorrect Parameters\n";
        exit(0);
    }
    
    $a = intval($argv[1]);
    $b = intval($argv[3]);
    
    $op = trim($argv[2]);
    switch ($op)
    {
        case "+":
            echo $a + $b, "\n";
            break;
        case "-":
            echo $a - $b, "\n";
            break;
        case '*':
            echo $a * $b, "\n";
            break;
        case '/':
            echo $a / $b, "\n";
            break;
        case '%':
            echo $a % $b, "\n";
            break;
    }
?>
