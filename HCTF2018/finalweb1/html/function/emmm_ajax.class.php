<?php
include '../config/emmm_code.php';
include '../config/emmm_config.php';
include 'emmm_function.class.php';

$page = $_POST['page'];
$model = $_POST['model'];
$id = $_POST['id'];
$limit = $_POST['limit'];
$lang = $_POST['lang'];
$typeclass = $_POST['typeclass'];

if (empty($page) || empty($model) || !isset($id) || !isset($limit) || !isset($lang)) {

    echo '参数出错';
    exit;

} else {
    if ($model == 'listshop') {
        $model = 'product';
    } else {
        $model = $model;
    }
    if ($limit == 0) {

        $rs = $db->select("COL_Webpage", "emmm_webdeploy", "where id = 1");
        $rs = explode(",", $rs[0]);
        switch ($model) {
            case "article":
                $listpage = $rs[0];
                break;
            case "product":
                $listpage = $rs[1];
                break;
            case "listshop":
                $listpage = $rs[1];
                break;
            case "photo":
                $listpage = $rs[2];
                break;
            case "video":
                $listpage = $rs[3];
                break;
            case "down":
                $listpage = $rs[4];
                break;
            case "job":
                $listpage = $rs[5];
                break;
            case "clubview":
                $listpage = $rs[6];
                break;
        }

    } else {

        $listpage = $limit;

    }

    if (intval($page) == 0) {
        $listpagesum = 2;
    } else {
        $listpagesum = intval($page);
    }
    $start = ($listpagesum - 1) * $listpage;

    if (!isset($typeclass)) {
        $bytype = "COL_Sorting asc,id desc";
    } elseif ($typeclass == 'COL_Webmarket') {
        $bytype = $typeclass . ' asc';
    } elseif ($typeclass == 'COL_Click') {
        $bytype = $typeclass . ' desc';
    }

    if ($model == 'clubview') {
        $list = $db->listgo("*", "emmm_book", "where `COL_Bookclass` = " . intval($id) . " and `COL_Booklang` = '" . dowith_sql($lang) . "' order by id desc LIMIT " . $start . "," . $listpage);
    } else {
        $list = $db->listgo("*", "emmm_" . dowith_sql($model), "where `COL_Class` = " . intval($id) . " and `COL_Lang` = '" . dowith_sql($lang) . "' order by " . $bytype . " LIMIT " . $start . "," . $listpage);
    }

    if (empty($list)) {

        $acc = 0;

    } else {

        $acc = '';
        switch ($model) {
            case "article":
                while ($r = $db->whilego($list)) {
                    if (substr($r['COL_Minimg'], 0, 7) == 'http://') {
                        $minimg = $r['COL_Minimg'];
                    } elseif ($r['COL_Minimg'] == '') {
                        $minimg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $minimg = $emmm['webpath'] . $r['COL_Minimg'];
                    }
                    $acc .= '
						<li><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html">' . $r['COL_Articletitle'] . '<span class="f-r">' . date("Y,h,m", strtotime($r['time'])) . '</span></a></li>
						';
                }
                break;
            case "listshop":
                $i = 1;
                while ($r = $db->whilego($list)) {
                    if (substr($r['COL_Minimg'], 0, 7) == 'http://') {
                        $minimg = $r['COL_Minimg'];
                    } elseif ($r['COL_Minimg'] == '') {
                        $minimg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $minimg = $emmm['webpath'] . $r['COL_Minimg'];
                    }
                    if (substr($r['COL_Maximg'], 0, 7) == 'http://') {
                        $maximg = $r['COL_Maximg'];
                    } elseif ($r['COL_Maximg'] == '') {
                        $maximg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $maximg = $emmm['webpath'] . $r['COL_Maximg'];
                    }
                    if ($i % 2 == 0) {
                        $mr = 'class="mr0"';
                    } else {
                        $mr = '';
                    }
                    $acc .= '
							<li ' . $mr . '><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html"><img src="' . $minimg . '" data-original="[.$list.minimg.]" />
								<p>' . $r['COL_Title'] . '</p>
								<p><span>￥' . $r['COL_Webmarket'] . '</span><del class="f-r">￥' . $r['COL_Market'] . '</del></p>
							</a>
							</li>
						';
                    $i++;
                }
                break;
            case "product":
                $i = 1;
                while ($r = $db->whilego($list)) {
                    if (substr($r['COL_Minimg'], 0, 7) == 'http://') {
                        $minimg = $r['COL_Minimg'];
                    } elseif ($r['COL_Minimg'] == '') {
                        $minimg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $minimg = $emmm['webpath'] . $r['COL_Minimg'];
                    }
                    if (substr($r['COL_Maximg'], 0, 7) == 'http://') {
                        $maximg = $r['COL_Maximg'];
                    } elseif ($r['COL_Maximg'] == '') {
                        $maximg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $maximg = $emmm['webpath'] . $r['COL_Maximg'];
                    }
                    if ($i % 2 == 0) {
                        $mr = 'class="mr0"';
                    } else {
                        $mr = '';
                    }
                    $acc .= '
							<li><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html"><img src="' . $minimg . '"></a>
							<p><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html">' . $r['COL_Title'] . '</a></p></li>
						';
                    $i++;
                }
                break;
            case "photo":
                while ($r = $db->whilego($list)) {
                    if (substr($r['COL_Photocminimg'], 0, 7) == 'http://') {
                        $minimg = $r['COL_Photocminimg'];
                    } elseif ($r['COL_Photocminimg'] == '') {
                        $minimg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $minimg = $emmm['webpath'] . $r['COL_Photocminimg'];
                    }
                    $acc .= '
						<li><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html"><img src="' . $minimg . '"></a>
						<p><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html">' . $r['COL_Phototitle'] . '</a></p></li>
						';
                }
                break;
            case "video":
                while ($r = $db->whilego($list)) {
                    if (substr($r['COL_Videoimg'], 0, 7) == 'http://') {
                        $minimg = $r['COL_Videoimg'];
                    } elseif ($r['COL_Videoimg'] == '') {
                        $minimg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $minimg = $emmm['webpath'] . $r['COL_Videoimg'];
                    }
                    $acc .= '
						<li><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html"><img src="' . $minimg . '"></a>
						<p><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html">' . $r['COL_Videotitle'] . '</a></p></li>
						';
                }
                break;
            case "down":
                while ($r = $db->whilego($list)) {
                    if (substr($r['COL_Downimg'], 0, 7) == 'http://') {
                        $minimg = $r['COL_Downimg'];
                    } elseif ($r['COL_Downimg'] == '') {
                        $minimg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $minimg = $emmm['webpath'] . $r['COL_Downimg'];
                    }
                    $acc .= '
						<li><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html">' . $r['COL_Downtitle'] . '<span class="f-r">' . date("Y,h,m", strtotime($r['time'])) . '</span></a></li>
						';
                }
                break;
            case "job":
                while ($r = $db->whilego($list)) {
                    $acc .= '
						<li><a href="' . $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $model . 'view-' . $id . '-' . $r['id'] . '.html">' . $r['COL_Jobtitle'] . '<span class="f-r">' . date("Y,h,m", strtotime($r['time'])) . '</span></a></li>
						';
                }
                break;
            case "clubview":
                while ($r = $db->whilego($list)) {

                    if ($r['COL_Bookreply'] != '') {
                        $reply = '
								<table width="100%" border="0" cellpadding="5" bgcolor="#D7E1F9">
								<tr>
								<td style="border-bottom:1px #ffffff dashed;">管理员回复：</td>
								</tr>
								<tr>
								<td valign="top">' . $r['COL_Bookreply'] . '</td>
								</tr>
								</table>
							';
                    } else {
                        $reply = '';
                    }
                    $acc .= '
						    <tr>
							<td width="20%" rowspan="2" valign="top"><div align="center"><img src="' . $emmm['webpath'] . 'skin/userhead_s.jpg" border="0" /></div></td>
							<td width="80%" style="min-height:60px;" valign="top">
							<p style=" height:30px; line-height:30px; border-bottom:1px #CCCCCC dashed;"><span style="float:right; font-size:12px; color:#999999;">(' . $r['time'] . ')</span>' . $r['COL_Bookname'] . '</p>
							<p style=" margin-top:20px;">' . $r['COL_Bookcontent'] . '</p>
							</td>
							</tr>
							<tr>
							<td>
							
							' . $reply . '
							
							</td>
							</tr>
						';
                }
                break;
        }

    }

    echo json_encode($acc);

}

?>
