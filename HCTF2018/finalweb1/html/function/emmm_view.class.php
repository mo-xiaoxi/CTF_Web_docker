<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
 *-------------------------------
 * 内容操作类(2014-10-15)
 *-------------------------------
*/
if (!defined('EMMMNO')) {
    exit('no!');
}

function emmm_tags($content = '')
{
    global $emmm;
    if ($content == '') {

        return false;

    } else {

        $tags = array(
            'tags' => '/\[MP4\](.*?)\[\/MP4\]/s',
            'type' => 'mp4'
        );

        preg_match($tags['tags'], $content, $t);
        switch ($tags['type']) {
            case "mp4":
                @$a = explode(",", $t[1]);
                $rs = '
					<div id="emmm_video"></div>
					<script type="text/javascript" src="' . $emmm['webpath'] . 'function/plugs/ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
					<script type="text/javascript">
					var flashvars={
						f:"' . $a[0] . '",
						c:0
					};
					var params={bgcolor:"#FFF",allowFullScreen:true,allowScriptAccess:"always",wmode:"transparent"};
					var video=["' . $a[0] . '->video/mp4"];
					CKobject.embed("' . $emmm['webpath'] . 'function/plugs/ckplayer/ckplayer/ckplayer.swf","emmm_video","ckplayer_a1","' . $a[1] . '","' . $a[2] . '",true,flashvars,video,params);
					</script>
				';
                break;
        }
        $arr = preg_replace($tags['tags'], $rs, $content);

        return $arr;
    }
}

switch ($temptype) {

    case "articleview":
        $query = $db->update("`emmm_article`", "COL_Click = COL_Click + 1", "where `id` = " . $viewid);
        $emmm_rs = $db->select("id,COL_Articletitle,COL_Articleauthor,COL_Articlesource,`time`,COL_Articlecontent,COL_Class,COL_Tag,COL_Url,COL_Click,COL_Description,COL_Minimg", "`emmm_article`", "where `id` = " . $viewid);
        if (substr($emmm_rs[11], 0, 7) == 'http://' || substr($emmm_rs[11], 0, 8) == 'https://') {
            $minimg = $emmm_rs[11];
        } elseif ($emmm_rs[11] == '') {
            $minimg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $minimg = $emmm['webpath'] . $emmm_rs[11];
        }
        if (!$emmm_rs) {
            echo '<meta http-equiv="refresh" content="0;url=' . $emmm['webpath'] . '?cn-404.html"> ';
            exit;
        }
        $rows = array(
            'id' => $emmm_rs[0],
            'title' => $emmm_rs[1],
            'author' => $emmm_rs[2],
            'source' => $emmm_rs[3],
            'time' => $emmm_rs[4],
            'content' => emmm_tags($emmm_rs[5]),
            'class' => $emmm_rs[6],
            'tag' => keywords_tag($emmm_rs[7]),
            'url' => $emmm_rs[8],
            'click' => $emmm_rs[9],
            'description' => $emmm_rs[10],
            "minimg" => $minimg,
        );
        if ($rows['url'] == '') {
        } else {
            header("location: " . $rows['url']);
        }
        break;

    case "productview":
        $query = $db->update("`emmm_product`", "COL_Click = COL_Click + 1", "where `id` = " . $viewid);
        $emmm_rs = $db->select("id,COL_Title,COL_Number,COL_Goodsno,COL_Brand,COL_Market,COL_Webmarket,COL_Stock,COL_Specificationsid ,COL_Specifications,COL_Pattribute,COL_Minimg,COL_Maximg,COL_Content,COL_Img,COL_Url,COL_Description,COL_Click,time,COL_Class,COL_Tag,COL_Usermoney,COL_Freight,COL_Integral,COL_Integralexchange,COL_Suggest,COL_Productimgname", "`emmm_product`", "where `id` = " . $viewid);
        if (substr($emmm_rs[11], 0, 7) == 'http://' || substr($emmm_rs[11], 0, 8) == 'https://') {
            $minimg = $emmm_rs[11];
        } elseif ($emmm_rs[11] == '') {
            $minimg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $minimg = $emmm['webpath'] . $emmm_rs[11];
        }
        if (substr($emmm_rs[12], 0, 7) == 'http://' || substr($emmm_rs[12], 0, 8) == 'https://') {
            $maximg = $emmm_rs[12];
        } elseif ($emmm_rs[12] == '') {
            $maximg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $maximg = $emmm['webpath'] . $emmm_rs[12];
        }
        if ($emmm_rs[22] == 1) {
            $freight = '<span style="padding:1px 5px 1px 5px; background:#F90; color:#FFF; border-radius:5px;">包邮</span>';
        } else {
            $freight = '';
        }
        if (!$emmm_rs) {
            echo '<meta http-equiv="refresh" content="0;url=' . $emmm['webpath'] . '?cn-404.html"> ';
            exit;
        }
        $rows = array(
            'id' => $emmm_rs[0],
            'title' => $emmm_rs[1],
            'number' => $emmm_rs[2],
            'goodsno' => $emmm_rs[3],
            'brand' => opcmsbrand($emmm_rs[4]),
            'market' => $emmm_rs[5],
            'webmarket' => $emmm_rs[6],
            'stock' => $emmm_rs[7],
            'specificationsid' => $emmm_rs[8],
            'specifications' => $emmm_rs[9],
            'attribute' => Attribute($emmm_rs[10]),
            'minimg' => $minimg,
            'maximg' => $maximg,
            'content' => emmm_tags($emmm_rs[13]),
            'img' => imgimg($emmm_rs[14], $emmm_rs[26]),
            'url' => $emmm_rs[15],
            'description' => $emmm_rs[16],
            'click' => $emmm_rs[17],
            'time' => $emmm_rs[18],
            'class' => $emmm_rs[19],
            'tag' => keywords_tag($emmm_rs[20]),
            'usermoney' => $emmm_rs[21],
            'freight' => $emmm_rs[22],
            'integral' => $emmm_rs[23],
            'integralexchange' => $emmm_rs[24],
            "total" => clubnumber($emmm_rs[0], "zxl"),
            "totalday" => clubnumber($emmm_rs[0], "yxl"),
            "freight-tag" => $freight,
            "suggest" => $emmm_rs[25],
        );
        if ($rows['url'] == '') {
        } else {
            header("location: " . $rows['url']);
        }
        break;

    case "photoview":
        $query = $db->update("`emmm_photo`", "COL_Click = COL_Click + 1", "where `id` = " . $viewid);
        $emmm_rs = $db->select("id,COL_Phototitle,time,COL_Photocminimg,COL_Photoimg,COL_Photocontent,COL_Class,COL_Tag,COL_Url,COL_Description,COL_Click,COL_Photoname", "`emmm_photo`", "where `id` = " . $viewid);
        if (substr($emmm_rs[3], 0, 7) == 'http://' || substr($emmm_rs[3], 0, 8) == 'https://') {
            $minimg = $emmm_rs[3];
        } elseif ($emmm_rs[3] == '') {
            $minimg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $minimg = $emmm['webpath'] . $emmm_rs[3];
        }
        if (!$emmm_rs) {
            echo '<meta http-equiv="refresh" content="0;url=' . $emmm['webpath'] . '?cn-404.html"> ';
            exit;
        }
        $rows = array(
            'id' => $emmm_rs[0],
            'title' => $emmm_rs[1],
            'time' => $emmm_rs[2],
            'minimg' => $minimg,
            'img' => imgimg($emmm_rs[4], $emmm_rs[11]),
            'content' => emmm_tags($emmm_rs[5]),
            'class' => $emmm_rs[6],
            'tag' => keywords_tag($emmm_rs[7]),
            'url' => $emmm_rs[8],
            'description' => $emmm_rs[9],
            'click' => $emmm_rs[10],
        );

        if ($rows['url'] == '') {
        } else {
            header("location: " . $rows['url']);
        }
        break;

    case "videoview":
        $query = $db->update("`emmm_video`", "COL_Click = COL_Click + 1", "where `id` = " . $viewid);
        $emmm_rs = $db->select("id,COL_Videotitle,time,COL_Videoimg,COL_Videovurl,COL_Videoformat,COL_Videowidth,COL_Videoheight,COL_Videocontent,COL_Class,COL_Tag,COL_Url,COL_Description,COL_Click", "`emmm_video`", "where `id` = " . $viewid);
        if (substr($emmm_rs[3], 0, 7) == 'http://' || substr($emmm_rs[3], 0, 8) == 'https://') {
            $minimg = $emmm_rs[3];
        } elseif ($emmm_rs[3] == '') {
            $minimg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $minimg = $emmm['webpath'] . $emmm_rs[3];
        }
        if (!$emmm_rs) {
            echo '<meta http-equiv="refresh" content="0;url=' . $emmm['webpath'] . '?cn-404.html"> ';
            exit;
        }
        $rows = array(
            'id' => $emmm_rs[0],
            'title' => $emmm_rs[1],
            'time' => $emmm_rs[2],
            'minimg' => $minimg,
            'playurl' => $emmm_rs[4],
            'format' => $emmm_rs[5],
            'width' => $emmm_rs[6],
            'height' => $emmm_rs[7],
            'content' => emmm_tags($emmm_rs[8]),
            'class' => $emmm_rs[9],
            'tag' => keywords_tag($emmm_rs[10]),
            'url' => $emmm_rs[11],
            'description' => $emmm_rs[12],
            'click' => $emmm_rs[13],
            'player' => videoplay($emmm_rs[4], $emmm_rs[6], $emmm_rs[7], $emmm_rs[5]),
        );

        if ($rows['url'] == '') {
        } else {
            header("location: " . $rows['url']);
        }
        break;

    case "about":
        if (!is_file(WEB_ROOT . '/' . $emmm_cache . 'aboutview_' . md5($listid) . '.txt')) {
            $emmm_rs = $db->select("id,COL_Columntitle,COL_Url,COL_About,COL_Userright", "`emmm_column`", "where `id` = " . $listid);
            if (!$emmm_rs) {
                echo '<meta http-equiv="refresh" content="0;url=' . $emmm['webpath'] . '?cn-404.html"> ';
                exit;
            }
            $rows = array(
                'id' => $emmm_rs[0],
                'title' => $emmm_rs[1],
                'url' => $emmm_rs[2],
                'content' => emmm_tags($emmm_rs[3]),
            );
            emmm_file($emmm_cache . 'aboutview_' . md5($listid) . '.txt', json_encode($rows), 2);
        } else {
            $arraytojson = json_decode(file_get_contents(WEB_ROOT . '/' . $emmm_cache . 'aboutview_' . md5($listid) . '.txt'));
            $rows = object_array($arraytojson);
        }
        break;

    case "clubview":
        $listpage = $Parameterse['page'][6];
        if (intval(isset($_GET['page'])) == 0) {
            $listpagesum = 1;
        } else {
            $listpagesum = intval($_GET['page']);
        }
        $start = ($listpagesum - 1) * $listpage;
        $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_book`", "where `COL_Bookclass` = " . $listid);
        $emmmtotal = $db->whilego($emmmtotal);

        $query = $db->listgo("id,COL_Bookcontent,COL_Bookname,COL_Booktel,COL_Bookip,COL_Bookreply,time", "`emmm_book`", "where `COL_Bookclass` = " . $listid . " order by id desc LIMIT " . $start . "," . $listpage);
        $rows = array();
        $i = 1;
        while ($emmm_rs = $db->whilego($query)) {
            $ip = explode('.', $emmm_rs[4]);
            $rows[] = array(
                'id' => $emmm_rs[0],
                'content' => emmm_sensitive($emmm_rs[1]),
                'name' => emmm_sensitive($emmm_rs[2]),
                'tel' => $emmm_rs[3],
                'ip' => $ip[0] . '.' . $ip[1] . '.' . $ip[2] . '.**',
                'reply' => $emmm_rs[5],
                'time' => $emmm_rs[6],
            );
            $i += 1;
        }
        $_page = new Page($emmmtotal['tiaoshu'], $listpage);
        $smarty->assign('emmmpage', $_page->showpage());
        break;

    case "downview":
        $query = $db->update("`emmm_down`", "COL_Click = COL_Click + 1", "where `id` = " . $viewid);
        $emmm_rs = $db->select("id,COL_Downtitle,time,COL_Downimg,COL_Downdurl,COL_Downcontent,COL_Downempower,COL_Downtype,COL_Downlang,COL_Downsize,COL_Downmake,COL_Lang,COL_Url,COL_Description,COL_Click,COL_Class,COL_Downsetup,COL_Random,COL_Tag", "`emmm_down`", "where `id` = " . $viewid);
        if (substr($emmm_rs[3], 0, 7) == 'http://') {
            $minimg = $emmm_rs[3];
        } elseif ($emmm_rs[3] == '') {
            $minimg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $minimg = $emmm['webpath'] . $emmm_rs[3];
        }
        if (!$emmm_rs) {
            echo '<meta http-equiv="refresh" content="0;url=' . $emmm['webpath'] . '?cn-404.html"> ';
            exit;
        }
        $rows = array(
            "id" => $emmm_rs[0],
            "title" => $emmm_rs[1],
            "time" => $emmm_rs[2],
            "minimg" => $minimg,
            "downurl" => $emmm['webpath'] . 'function/emmm_play.class.php?emmm_down=' . $emmm_rs[0] . '&code=' . $emmm_rs[17],
            "downurltrue" => $emmm_rs[4],
            "content" => emmm_tags($emmm_rs[5]),
            "empower" => $emmm_rs[6],
            "type" => $emmm_rs[7],
            "lang" => $emmm_rs[8],
            "size" => $emmm_rs[9],
            "make" => $emmm_rs[10],
            "url" => $emmm_rs[12],
            "description" => $emmm_rs[13],
            "click" => $emmm_rs[14],
            "class" => $emmm_rs[15],
            "setup" => $emmm_rs[16],
            "tag" => keywords_tag($emmm_rs[18]),
        );

        if ($rows['url'] == '') {
        } else {
            header("location: " . $rows['url']);
        }
        break;

    case "jobview":
        $query = $db->update("`emmm_job`", "COL_Click = COL_Click + 1", "where `id` = " . $viewid);
        $emmm_rs = $db->select("`id`, `COL_Jobtitle`, `time`, `COL_Jobwork`, `COL_Jobadd`, `COL_Jobnature`, `COL_Jobexperience`, `COL_Jobeducation`, `COL_Jobnumber`, `COL_Jobage`, `COL_Jobwelfare`, `COL_Jobwage`, `COL_Jobcontact`, `COL_Jobtel`, `COL_Jobcontent`, `COL_Class`, `COL_Lang`, `COL_Url`, `COL_Description`, `COL_Click`,`COL_Tag`", "`emmm_job`", "where `id` = " . $viewid);
        if (!$emmm_rs) {
            echo '<meta http-equiv="refresh" content="0;url=' . $emmm['webpath'] . '?cn-404.html"> ';
            exit;
        }
        $rows = array(
            "id" => $emmm_rs[0],
            "title" => $emmm_rs[1],
            "time" => $emmm_rs[2],
            "work" => $emmm_rs[3],
            "add" => $emmm_rs[4],
            "nature" => $emmm_rs[5],
            "experience" => $emmm_rs[6],
            "education" => $emmm_rs[7],
            "number" => $emmm_rs[8],
            "age" => $emmm_rs[9],
            "welfare" => $emmm_rs[10],
            "wage" => $emmm_rs[11],
            "contact" => $emmm_rs[12],
            "tel" => $emmm_rs[13],
            "content" => emmm_tags($emmm_rs[14]),
            "class" => $emmm_rs[15],
            "url" => $emmm_rs[17],
            "description" => $emmm_rs[18],
            "click" => $emmm_rs[19],
            "tag" => keywords_tag($emmm_rs[20]),
        );

        if ($rows['url'] == '') {
        } else {
            header("location: " . $rows['url']);
        }
        break;

}
$smarty->assign('opcms', $rows);
$smarty->assign('bookform', $emmm['webpath'] . 'function/emmm_play.class.php?emmm_cms=add');
?>
