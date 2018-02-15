<?php

header ('Content-Type: text/plain');
while (ob_get_level()) { ob_end_clean (); }
echo password_hash ($_SERVER['QUERY_STRING'],SWEF_HASH_ALGORITHM);

exit;

?>
