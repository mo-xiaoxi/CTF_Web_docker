<?php
class User extends Controller
{
    public function op_register()
    {
        if (is_post()) {
            $res = $this->user->register();
            $this->set_status("Register %s", $res);
        }
    }

    public function op_login()
    {
        if (is_post()) {
            $res = $this->user->login();
            $this->set_status("Login %s", $res);

            if ($res) {
                $this->redirect("/");
            }
        }
    }

    public function op_logout()
    {
        $this->user = new UserData;
        $this->redirect("/");
    }

    public function op_profile()
    {
        $this->assert_logined();

        if (is_post()) {
            $res = $this->user->edit();
            $this->set_status("Edit profile %s", $res);
        }

        $username = Model::$DB->quote($this->user->username);
        $stmt = Model::$DB->query(
            "SELECT sender, receiver, reason, amount
            FROM transation
            WHERE
            sender = $username OR receiver = $username"
        );
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->vars = ["trans" => $row];
    }
}
