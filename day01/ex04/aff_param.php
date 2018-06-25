#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    $i = 1;
    while($i < $argc)
    {
        echo "$argv[$i]\n";
        $i++;
    }
?>
