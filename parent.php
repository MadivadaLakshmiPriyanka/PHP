<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Using server-side includes</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Including External Files</h1>
<p>This paragraph is in the original file.</p>
<?php include './para.html';?>
<p>This paragraph is in the original file.</p>
<?php include './para.html';?>
</body>
</html>