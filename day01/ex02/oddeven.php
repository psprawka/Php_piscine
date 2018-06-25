#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php

    while (1)
    {
        echo "Enter a number: ";
        if ($line = fgets(STDIN))
        {
            $line = trim($line);
            $x = intval($line);
            if (!(is_numeric($line)))
                echo "'$line' is not a number\n";
            else if ($x % 2 == 1)
                echo "The number $x is odd\n";
            else echo "The number $x is even\n";
        }
        else
        {
            echo "\n";
            exit (0);
        }
    }
?>
