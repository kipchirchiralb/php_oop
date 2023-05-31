<?php
require_once 'Http.php';
// define('CREATED', 201);
// const DENIED = 401;
// print CREATED . '<br>';
// print DENIED . '<br>';

// Http::CREATED = 240;#expression not rewritable error
print Http::CREATED . '<br>';
print Http::NOT_FOUND . '<br>';
print Http::OK . '<br>';