<html>
<head>
<title>Ex1</title>
</head>
<body>
    <?php
function sumacif($n)
{$suma = 0;
    while($n > 0 || $suma > 9)
    {
        if($n ==0)
        {
            $n = $suma;
            $suma = 0;

        }
        $suma = $suma + ($n % 10);
        $n = (int)$n / 10;
    }
    return $suma;

}
$n=9452;
echo "Cifra de control a  numarului n este:";
echo sumacif($n);
?>
</body>
</html>