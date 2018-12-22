<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
 *-------------------------------
 * 模板操作类(2014-10-15)
 *-------------------------------
*/
if (!defined('EMMMNO')) {
    exit('no!');
}

$temptypetoo = $temptype;
$temptypetoo = str_replace(" and ", "and", $temptypetoo);
$temptypetoo = str_replace(" or ", "or", $temptypetoo);

switch ($temptypetoo) {
    case "cn":
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_index.html")) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . '_index.html');
        } else {
            echo $emmm_tempno;
            exit();
        }
        break;

    case "index.html":
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_index.html")) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . '_index.html');
        } else {
            echo $emmm_tempno;
        }
        break;

    case "article":
        include './function/emmm_page.class.php';
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['listtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['listtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "articleview":
        include './function/emmm_list.class.php';
        include './function/emmm_view.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['viewtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['viewtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "product":
        include './function/emmm_page.class.php';
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['listtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['listtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "productview":
        include './function/emmm_list.class.php';
        include './function/emmm_shop.class.php';
        include './function/emmm_view.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['viewtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['viewtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "shop.html":
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_shop.html")) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . "_shop.html");
        } else {
            echo $emmm_tempno;
        }
        break;

    case "brand":
        include './function/emmm_page.class.php';
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_brand.html")) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . "_brand.html");
        } else {
            echo $emmm_tempno;
        }
        break;

    case "photo":
        include './function/emmm_page.class.php';
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['listtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['listtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "photoview":
        include './function/emmm_list.class.php';
        include './function/emmm_view.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['viewtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['viewtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "video":
        include './function/emmm_page.class.php';
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['listtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['listtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "videoview":
        include './function/emmm_list.class.php';
        include './function/emmm_view.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['viewtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['viewtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "about":
        include './function/emmm_list.class.php';
        include './function/emmm_view.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['viewtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['viewtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "club.html":
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_club.html")) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . "_club.html");
        } else {
            echo $emmm_tempno;
        }
        break;

    case "clubview":
        include './function/emmm_page.class.php';
        include './function/emmm_list.class.php';
        include './function/emmm_view.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_clubview.html")) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . "_clubview.html");
        } else {
            echo $emmm_tempno;
        }
        break;

    case "down":
        include './function/emmm_page.class.php';
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['listtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['listtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "downview":
        include './function/emmm_list.class.php';
        include './function/emmm_view.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['viewtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['viewtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "job":
        include './function/emmm_page.class.php';
        include './function/emmm_list.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['listtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['listtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "jobview":
        include './function/emmm_list.class.php';
        include './function/emmm_view.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $Listname['viewtemp'])) {
            $smarty->display($emmm_Language . '/' . $Listname['viewtemp']);
        } else {
            echo $emmm_tempno;
        }
        break;

    case "shoppingcart.html":
        include './function/emmm_list.class.php';
        include './function/emmm_shop.class.php';
        include './function/emmm_shoppingcart.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_shoppingcart.html")) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . '_shoppingcart.html');
        } else {
            echo $emmm_tempno;
        }
        break;

    case "shoppingorders.html":
        include './function/emmm_list.class.php';
        include './function/emmm_shop.class.php';
        include './function/emmm_shoppingorders.class.php';
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_shoppingorders.html")) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . '_shoppingorders.html');
        } else {
            echo $emmm_tempno;
        }
        break;

    case "404.html":
        if ($smarty->templateExists("templates/404.html")) {
            $smarty->display("templates/404.html");
        } else {
            echo $emmm_tempno;
        }
        break;

    default:
        if ($smarty->templateExists($emmm_templates . "/" . $emmm_Language . "/" . $emmm_Language . "_" . $temptype)) {
            $smarty->display($emmm_Language . '/' . $emmm_Language . "_" . $temptype);
        } else {
            echo $emmm_tempno . 'No:' . $emmm_Language . "_" . $temptype;
        }
        break;
}
?>
