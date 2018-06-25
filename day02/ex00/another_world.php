#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    
    if ($argc < 2)
        exit(0);
    
//    echo strlen($argv[1]);
    $new = preg_replace('/\s+/', ' ',  $argv[1]);
    $new = trim($new);
    echo "[$new]";
?>

