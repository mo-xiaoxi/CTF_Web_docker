<?php
class Admin extends Controller
{
    public function op_console()
    {
        $this->assert_admin();

        $stmt = Model::$DB->query("SELECT id, username, perm, cash, avatar, info FROM user");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->vars = ["users" => $row];
        $this->render("admin");
    }
}
