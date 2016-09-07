<?php
$title='"Hi "';
$author='php';
$android='Marvin';
$brain_size='the size of a planet';
$heredoc=<<< EOT
In "$title" by $author,$android the "paramoid android" complains that he's asked to do menial tasks,even though he's got "a brain $brain_size."
EOT;


echo $heredoc;