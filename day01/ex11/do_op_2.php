#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    
    function error()
    {
        echo "Syntax Error\n";
        exit(0);
    }
    
    
    function get_args($str, &$a, &$b, &$op)
    {
        $i = 0; $size = strlen($str); $nega = 0; $negb = 0;
        
        if ($size < 3)
            error();
        
        if ($str[$i] == '-' || $str[$i] == '+')
            if ($str[$i++] == '-')
                $nega = 1;
        
        if (!($i < $size || $str[$i] >= '0' && $str[$i] <= '9'))
            error();
        
        while ($i < $size && $str[$i] >= '0' && $str[$i] <= '9')
        {
            $a *= 10;
            $a += $str[$i];
            $i++;
        }
        while ($i < $size && $str[$i] == ' ')
            $i++;
        if ($i < $size && strpos("+-*/%", $str[$i]) > -1)
            $op = $str[$i++];
        else
            error();
        while ($i < $size && $str[$i] == ' ')
            $i++;
        
        if ($str[$i] == '-' || $str[$i] == '+')
            if ($str[$i++] == '-')
                $negb = 1;
        
        if (!($i < $size || $str[$i] >= '0' && $str[$i] <= '9'))
            error();
        while ($i < $size && $str[$i] >= '0' && $str[$i] <= '9')
        {
            $b *= 10;
            $b += $str[$i];
            $i++;
        }
       if ($i < $size)
            error();
        
        if ($nega == 1)
            $a *= -1;
        if ($negb == 1)
            $b *= -1;
    }
    
    
    
    $i = 0;
    
    if ($argc != 2)
    {
        echo "Incorrect Parameters\n";
        exit(0);
    }
    $a = 0;
    $b = 0;
    $op = '\0';
    
    get_args(trim($argv[1]), $a, $b, $op);
    
    if ($b == 0 && ($op == '%' || $op == '/'))
        error();
    
    switch ($op)
    {
        case "+":
            echo $a + $b, "\n";
            break;
        case "-":
            echo $a - $b, "\n";
            break;
        case '*':
            echo $a * $b, "\n";
            break;
        case '/':
            echo $a / $b, "\n";
            break;
        case '%':
            echo $a % $b, "\n";
            break;
    }
?>
