#!/usr/bin/php
<?php
if (preg_match('#^http://[w-]+[w.-]+.[a-zA-Z]{2,6}#i', $url)) {
    echo 'Cette URL est correct.';
} else {
    echo 'Cette URL a un format non adapté.';

?>