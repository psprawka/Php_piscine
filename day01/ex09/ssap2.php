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
    
    foreach ($array as $elem)
    {
        if (($elem[0] >= 'a' && $elem[0] <= 'z') || ($elem[0] >= 'A' && $elem[0] <= 'Z'))
            $alpha[] = $elem;
        else if (is_numeric($elem))
            $nums[] = $elem;
        else
            $rest[] = $elem;
    }
    
    sort($alpha, (SORT_STRING | SORT_FLAG_CASE ));
    sort($nums, SORT_STRING);
    sort($rest);

    
    foreach ($alpha as $elem)
        echo "$elem\n";
    foreach ($nums as $elem)
        echo "$elem\n";
    foreach ($rest as $elem)
        echo "$elem\n";
?>
