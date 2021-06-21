<?php

_d($_SERVER['REQUEST_METHOD'], 'METHOD:');
_d($_GET, 'GET');
_d($_POST, 'POST');

?>
<a href="http://localhost/barsukas/14/get-Post.php">back</a>
<br></br>
<form action="http://localhost/barsukas/14/get-Post.php?island=1" method="get">
<input type="hidden" name="alio" value="reklama">
<button type="submit" name="jaja" value="ding-dong">button</button>
</form>