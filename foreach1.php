<?php
$descriptions=[
'A'=>'Apple',
'B'=>'Bat',
'C'=>'Cat'
];
?>
<!DOCTYPE html>
<html lang="em">
<head>
<meta charset="UTF-8">
<title>Using a foreach loop</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1>Description</h1>
<?php
foreach ($descriptions as $key=>$value){
echo "<p>$key is $value.</p>";
}
?>
</body>
</html>