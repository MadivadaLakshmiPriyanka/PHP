<?php
$characters=['A','Y','M','P','K'];
sort($characters);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Using a foreach loop</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1>Main Characters</h1>
<ul>
<?php
foreach($characters as $name){
echo "<li>$name</li>";
}
?>
</ul>
</body>
</html>