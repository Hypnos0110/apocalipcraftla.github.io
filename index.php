<?php
$path = 'path/to/www'; // www-folder
$index = 'path/to/index.html';
exec('find '.$path.' -type d -exec cp -n '.$index.' {}/index.html \;');