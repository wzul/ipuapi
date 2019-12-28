<?php

$database = parse_url($_ENV['DATABASE_URL']);
echo '<pre>'.print_r($database, true).'</pre>';
