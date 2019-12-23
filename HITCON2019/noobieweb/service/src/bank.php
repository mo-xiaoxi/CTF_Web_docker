<?php
class Bank extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->market = new StockMarket($this->user);
    }

    public function op_buy()
    {
        if (is_post()) {
            $this->assert_logined();

            $res = $this->market->buy();
            $this->status = (bool) $res;
            if (!$res) {
                $this->message = "Failed";
            } else {
                $this->message = "The signed reciept is stored at <a href='/$res'>$res</a>";
            }
        }
        $stmt = Model::$DB->query("SELECT name, info, price FROM items");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->vars = ["items" => $row];
    }

    public function op_verify()
    {
        $this->assert_logined();

        if (is_post()) {
            $res = $this->market->verify();
            $this->status = (bool) $res;
            if (!$res) {
                $this->message = "Verify Failed";
            } else {
                $this->message = $res;
            }
        }
    }

    public function op_send_cash()
    {
        $this->assert_logined();

        if (is_post()) {
            $res = $this->user->send_cash();
            $this->set_status("Send cash %s", $res);
        }
    }

    public function op_cash_out()
    {
        $this->assert_logined();

        if (is_post()) {
            $res = $this->user->cash_out();
            $this->status = (bool) $res;
            if (!$res) {
                $this->message = "Failed.";
            } else {
                $this->message = "The withdrawal log is stored at <a href='$res'>$res</a>";
            }
        }
    }

    public function info()
    {
        phpinfo();
    }
}
