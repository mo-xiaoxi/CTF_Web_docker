<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../function/plugs/jquery/1.8.3/jquery-1.8.3.min.js"></script>
    <script src="../../function/plugs/layer/layer.min.js"></script>
</head>

<body>
<?php
// 商品属性调用
include 'emmm_admin.php';
include 'emmm_checkadmin.php';

if ($_GET['our'] == 'gg') {
    echo '<table width="100%" border="0" cellpadding="10">';
    echo '	<tr>';
    echo '		<td bgcolor="#f4f4f4">';
    echo '				 <input type="submit" onclick="isok()" name="Submit" value="确定" style="width:100px; height:25px; line-height:25px; background:#0099CC; color:#FFFFFF; border:0px;" />';
    echo '		</td>';
    echo '	</tr>';

    $query = $db->listgo("id,COL_Title,COL_Titleto,COL_Value", "`emmm_productspecifications`", "order by COL_Sorting asc");
    while ($emmm_rs = $db->whilego($query)) {
        echo '	<tr>';
        echo '		<td>';

        echo '			<p><input type="checkbox" name="specifications" value="' . $emmm_rs[0] . '" />&nbsp;&nbsp;' . $emmm_rs[1] . '&nbsp;&nbsp;<span style="font-size:10px; color:#999999;">(' . $emmm_rs[2] . ')</span></p>';

        $arr = explode("|", $emmm_rs[3]);
        echo '<p style="margin-top:15px;">';
        foreach ($arr as $u) {
            echo '<span style="padding:3px; border:1px #CCCCCC solid; text-align:center; margin-right:10px;">' . $u . '</span>';
        }
        echo '</p>';


        echo '		</td>';
        echo '	</tr>';
    }

    echo '</table>';
    ?>
    <script>
        function isok() {
            var index = parent.layer.getFrameIndex(window.name);
            var text = "";
            $("input[name=specifications]").each(function () {
                if ($(this).attr("checked")) {
                    text += "," + $(this).val();
                }
            });

            $.get(
                'Specifications.php',
                {id: text},
                function (data) {
                    parent.$('#emmm_gg_sj').html(data);
                    parent.layer.tips('看这儿！', '#parentIframe', 5);
                    parent.layer.close(index);
                }
            );
        };
    </script>
<?php
}elseif ($_GET['our'] == 'sx'){


if ($_GET['id'] == 0){
    echo '';
}else{

$query = $db->listgo("id,COL_Title,COL_Text", "`emmm_productattribute`", "where `COL_Class` = " . intval($_GET['id']) . " order by COL_Sorting asc");

echo '<table width="500" border="1" align="left" cellpadding="5" bordercolor="#E3E3E3" style="border-collapse:collapse;">';
$i = 0;
while ($emmm_rs = $db->whilego($query)){
?>

    <tr id="pattr<?php echo $i; ?>">
        <td bgcolor="#F4F0F4">
            <div align="right"><?php echo $emmm_rs[1]; ?>：</div>
        </td>
        <td bgcolor="#FFFfff">
            <select name="COL_Pattribute[]" id="arr<?php echo $i; ?>">
                <?php
                $arr = explode("|", $emmm_rs[2]);
                foreach ($arr as $u) {
                    echo '<option value="' . $emmm_rs[0] . ':' . $emmm_rs[1] . ':' . $u . '">' . $u . '</option>';
                }
                ?>
            </select>
            &nbsp;&nbsp;<a href="javascript:pattr(<?php echo $i; ?>);" style="float:right;">自定义参数值</a>
        </td>
    </tr>


    <?php
    $i++;
}
    echo '</table>';
}


}
?>
</body>
</html>
