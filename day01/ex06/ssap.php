#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    $i = 2;
    
    if ($argc < 2)
        exit(0);
    
    $two = $argv[1];
    while ($i < $argc)
    {
        $two .= ' ';
        $two .= $argv[$i];
        $i++;
    }
    
    $array = array_filter(explode(' ', $two));
    sort($array);
    
    $i = 0;
    $x = count($array);
    while($i < $x)
    {
        echo "$array[$i]\n";
        $i++;
    }
?>
