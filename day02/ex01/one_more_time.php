#!/nfs/2017/p/psprawka/.brew/opt/php70/bin/php
<?php
    
    function error()
    {
        echo "Wrong Format\n";
        exit(0);
    }
    
    function check_day($day)
    {
        $day = mb_strtolower($day);
        
        if ($day == "lundi" || $day == "mardi" || $day == "mercredi" ||
            $day == "jeudi" || $day == "vendredi" || $day == "samedi" ||
            $day == "dimanche")
             return ;
        else
            error();
    }
	
    function check_error(&$array)
    {
        if ($array[2] == "janvier")
            $mth = 1;
        else if ($array[2] == "février")
            $mth = 2;
        else if ($array[2] == "mars")
            $mth = 3;
        else if ($array[2] == "avril")
            $mth = 4;
        else if ($array[2] == "mai")
            $mth = 5;
        else if ($array[2] == "juin")
            $mth = 6;
        else if ($array[2] == "juillet")
            $mth = 7;
        else if ($array[2] == "août")
            $mth = 8;
        else if ($array[2] == "septembre")
            $mth = 9;
        else if ($array[2] == "octobre")
            $mth = 10;
        else if ($array[2] == "novembre")
            $mth = 11;
        else if ($array[2] == "décembre")
            $mth = 12;
        else
            error();
        if (!($x = checkdate($mth, intval($array[1]), intval($array[3]))))
            error();
		
    }
    
    function get_month(&$array)
    {
        $array[2] = mb_strtolower($array[2]);
        check_error($array);
        
        if ($array[2] == "janvier")
            $array[2] = "January";
        else if ($array[2] == "février")
            $array[2] = "February";
        else if ($array[2] == "mars")
            $array[2] = "March";
        else if ($array[2] == "avril")
            $array[2] = "April";
        else if ($array[2] == "mai")
            $array[2] = "May";
        else if ($array[2] == "juin")
            $array[2] = "June";
        else if ($array[2] == "juillet")
            $array[2] = "July";
        else if ($array[2] == "août")
            $array[2] = "August";
        else if ($array[2] == "septembre")
            $array[2] = "September";
        else if ($array[2] == "octobre")
            $array[2] = "October";
        else if ($array[2] == "novembre")
            $array[2] = "November";
        else if ($array[2] == "décembre")
            $array[2] = "December";
        else
            error();
    }
    
    if ($argc < 2)
        exit(0);
    $array = explode(' ', $argv[1]);
    check_day($array[0]);
	if (strlen($array[3] != 4))
		error();
	get_month($array);
    date_default_timezone_set("Europe/Paris");
    $date = $array[1].' '.$array[2].' '.$array[3].' '.$array[4];
    echo strtotime($date);
    ?>
