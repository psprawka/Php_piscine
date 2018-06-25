<?php
    function ft_split($split)
    {
        $i = 0;
        $split = trim($split);
        $array = explode(' ', $split);
        $array = array_filter($array);
        sort($array);
        return ($array);
    }
?>
