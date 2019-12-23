<?php
class Controller extends Base
{
    public $user;

    public $status;
    public $message;
    public $vars;

    public function __construct()
    {
        $obj = Cookie::load_cookie();
        $this->user = $obj ?? new UserData;

        $this->message = null;
        $this->status = null;

        $this->vars = [];
    }

    public function __call($func, $arg)
    {
        if (substr($func, 0, 3) == "op_") {
            return ;
        }
        $res = call_user_func_array([$this, "op_" . $func], $arg);
        $this->render($func);
    }

    public function assert_logined()
    {
        if (!$this->is_login()) {
            $url = urlencode($_SERVER['REQUEST_URI']);
            $this->redirect("/?action=user&op=login&redirect=$url");
        }
    }

    public function assert_admin()
    {
        if ($this->user->perm != PERM_ADMIN) {
            header('HTTP/1.0 403 Forbidden');
            die("Permission denind!");
        }
    }

    public function set_status($fmt, $status)
    {
        $this->status = $status;
        $status_str = $status ? "success" : "failed";
        $this->message = sprintf($fmt, $status_str);
    }

    public function redirect($path)
    {
        Cookie::dump_cookie($this->user);

        $path = $_GET["redirect"] ?? $path;
        Header("Location: $path");
        exit(0);
    }

    public function render($path)
    {
        Cookie::dump_cookie($this->user);

        extract($this->vars);

        include "views/header.page.php";
        include "views/$path.page.php";
        include "views/footer.page.php";
    }

    public function is_login()
    {
        return $this->user->perm != PERM_GUEST;
    }

    public function is_admin()
    {
        // It's ok to share admin with you if you have a lot of money, you may buy our company.
        return $this->user->perm == PERM_ADMIN ||
            $this->user->cash > 1e12;
    }

    // Fxxk you CSS
    public static function draw_array($ary, $cols)
    {
        $n = (int) 12 / $cols;
        $arySize = count($ary);

        if ($arySize == 0) {
            echo "<div><p>No transations.</p></div>";
            return;
        }

        echo "
<div class='table-responsive'>
<table class='table row mx-0 table-bordered table-striped'>";

        echo "
<thead class='w-100'>
<tr class='row mx-0'>";
        foreach ($ary[0] as $key => $value) {
            echo "<th class='col-$n'>$key</th>\n";
        }
        echo "</tr>\n";
        echo "</thead>\n";

        echo "<tbody class='w-100'>\n";
        for ($i=0; $i<$arySize; $i++) {
            echo "<tr class='row mx-0'>\n";
            foreach ($ary[$i] as $key => $value) {
                echo "<td class='col-$n'>$value</td>\n";
            }
            echo "</tr>\n";
        }
        echo "</tdbody>\n";

        echo "</table>\n";
        echo "</div>\n";
    }
}
