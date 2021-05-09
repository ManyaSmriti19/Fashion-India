<html>
<head>
<title>HOME-PAGE</title>
<link rel="stylesheet" type="text/css" href="explore.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.c
ss"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJ
lSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.9.0/css/all.css">
</head><body><?php
header("Refresh: 2;");
$target_days = mktime(0,0,0,6,8,2020);
$today = time();
$diff_days = ($target_days - $today);
$t = ($diff_days/(365*24));
$h=(int)$t;
$m=(int)(($t-$h)*60);
$a=(($t-$h)*60-$m);
$s=round((round($a,2)*.59),2)*100;
echo "<h4 align='center'><b><font color='#e75480'>Sale
</font><br><br>";
echo " <font
color='#e75480'>&nbsp;&nbsp;&nbsp;&nbsp;hr&nbsp;&nbsp;&nbsp;&nbs
p;min&nbsp;&nbsp;&nbsp;sec&nbsp;&nbsp;&nbsp;<br>";
echo "<font color='#e75480'>$h&nbsp;&nbsp; : $m &nbsp;&nbsp;: $s
"."\n";
?>
</body>
</html>
