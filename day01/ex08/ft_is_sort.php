#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php

    function ft_is_sort($sortit)
    {
        $sorted = $sortit;
        sort($sorted);
        
        $size = count($sorted);
        
        $i = 0;
        while ($i < $size)
        {
            if (strcmp($sorted[$i], $sortit[$i]))
                return (0);
            $i++;
        }
        return (1);
    }
?>
