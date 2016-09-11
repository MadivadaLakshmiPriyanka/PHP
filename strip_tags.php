<?php
$input="<p>Hi,there!<script>alert('Gotcha!');
</script>. <a href='http://www.lynda.com'>Expand PHP skills</a> . ";
echo strip_tags($input,'<p><a>');