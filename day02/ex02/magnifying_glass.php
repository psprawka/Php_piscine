#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    function    upper($matches) {return $matches[1] . strtoupper($matches[2]);}
    function    upper2($matches) {return $matches[1] . strtoupper($matches[2] . $matches[3]);}
    
    $content = file_get_contents($argv[1]);
    $content = preg_replace_callback('/(<a.*title=")(.*")/', 'upper', $content);
    $content = preg_replace_callback('/(<a.*?>)(.*?)(<)/', 'upper2', $content);
    echo $content;
?>
