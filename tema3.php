<html>
<head>
<title>Ex5</title>
</head>
<body>
<?php

function nearest_prime($num)
{
    $up = NULL;
    $down = NULL;
    $counter = 1;
    while($up === NULL && $down === NULL)
    {
        $going_up = $num + $counter;
        $prime_up = TRUE;
        for ($k = 2;$k < $going_up;$k++)
        {
            if (($going_up % $k) === 0)
            {
                $prime_up = FALSE;
            }
        }
        if ($prime_up === TRUE)
        {
            $up = $going_up;
        }

        $going_down = $num - $counter;
        $prime_down = TRUE;
        for ($k = 2;$k < $going_down;$k++)
        {
            if (($going_down % $k) === 0)
            {
                $prime_down = FALSE;
            }
        }
        if ($prime_down === TRUE)
        {
            $down = $going_down;
        }

        $counter++;
    }

    $return = array();
    if(!is_null($up))
    {
        $return[] = $up;
    }
    if(!is_null($down))
    {
        $return[] = $down;
    }
    return implode(',',$return);
}
echo("Cel mai apropiat numar prim:  ");
echo(nearest_prime(20));

echo("         ");

?>
</body>
</html>