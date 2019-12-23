<div class="container">
<h5>Flag:</h5>
<div>
<?=$this->get_var_key();?>
</div>

<h5>Users:</h5>
<?php
self::draw_array($users, 6);
?>

<h5>System status:</h5>
<pre>
<?php
system("iostat");
system("mpstat");
system("pidstat");
?>
</pre>

<h5>File status:</h5>
<pre>
<?php
system("stat /var/www/flag");
system("stat /var/www/db.sqlite");
?>
</pre>
</div>
