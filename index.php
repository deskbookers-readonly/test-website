<?php
function safe($s) { return htmlspecialchars( (string) $s, ENT_QUOTES, 'utf-8', true); }
function debug($var) { ob_start(); call_user_func_array('var_dump', func_get_args()); $html = '<pre>' . safe(ob_get_contents()) . '</pre>'; ob_end_clean(); return $html; }
function arrGet(array $a, $k, $d = null) { return array_key_exists($k, $a) ? $a[$k] : $d; }
?>
<h1>Details</h1>
<?= debug('Remote: ' . arrGet($_SERVER, 'REMOTE_ADDR') . ':' . arrGet($_SERVER, 'REMOTE_PORT')) ?> 
<?= debug('Environment: ' . arrGet($_SERVER, 'KOHANA_ENV')) ?> 
<h1>$_SERVER</h1>
<?= debug($_SERVER) ?> 
<h1>$_GET</h1>
<?= debug($_GET) ?> 
<h1>$_POST</h1>
<?= debug($_POST) ?> 
