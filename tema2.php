<html>
<head>
<title>Ex9</title>
</head>
<body>
<?php
function invers($n)
{
    $m=0;
    while($n!=0)
    {
        $m=($m*10)+($n%10);
        $n=floor($n/10);
    }
    return $m;
}
$n= 892145;
echo "Inversul numarului n este:";
echo invers($n);

?>
</body>
</html>