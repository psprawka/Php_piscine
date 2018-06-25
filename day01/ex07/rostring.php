#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    $i = 2;
    
    if ($argc < 2)
        exit(0);
    $array = preg_replace('/\s+/', ' ', $argv[1]);
    $array = trim($array);
    $array = explode(' ', $array);
    
    $i = 1;
    $x = count($array);
    while($i < $x)
    {
        echo "$array[$i] ";
        $i++;
    }
    echo "$array[0]\n";
?>
