#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    
    function find_key($str, $search, &$match, &$found)
    {
        $search = explode(':', $search);
        if ($search[0] == $str)
        {
            $match = $search[1];
            $found = 1;
        }
    }
    
    $i = 2; $match; $found = 0;
    
    if ($argc > 2)
        $key = $argv[1];
    else
        exit(0);
    
    while($i < $argc)
    {
        find_key($key, $argv[$i], $match, $found);
        $i++;
        
        if ($i == $argc && $found == 1)
            echo "$match\n";
    }
?>
