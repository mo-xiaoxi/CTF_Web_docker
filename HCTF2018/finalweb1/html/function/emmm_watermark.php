<?php
/* 
* 功能：PHP图片水印 (水印支持图片或文字) 
* 参数： 
* $groundImage 背景图片，即需要加水印的图片，暂只支持GIF,JPG,PNG格式； 
* $waterPos 水印位置，有10种状态，0为随机位置； 
* 1为顶端居左，2为顶端居中，3为顶端居右； 
* 4为中部居左，5为中部居中，6为中部居右； 
* 7为底端居左，8为底端居中，9为底端居右； 
* $waterImage 图片水印，即作为水印的图片，暂只支持GIF,JPG,PNG格式； 
* $waterText 文字水印，即把文字作为为水印，支持ASCII码，不支持中文； 
* $textFont 文字大小，值为1、2、3、4或5，默认为5； 
* $textColor 文字颜色，值为十六进制颜色值，默认为#FF0000(红色)； 
* 
* 注意：Support GD 2.0，Support FreeType、GIF Read、GIF Create、JPG 、PNG 
* $waterImage 和 $waterText 最好不要同时使用，选其中之一即可，优先使用 $waterImage。 
* 当$waterImage有效时，参数$waterString、$stringFont、$stringColor均不生效。 
* 加水印后的图片的文件名和 $groundImage 一样。 
* 作者：longware
*/

function imageWaterMark($groundImage, $waterPos = 5, $waterImage = "", $waterText = "vidar.club", $textFont = 5, $textColor = '#000000')
{
    $isWaterImage = FALSE;
    $formatMsg = "暂不支持该文件格式，请用图片处理软件将图片转换为GIF、JPG、PNG格式。";

//读取水印文件 
    if (!empty($waterImage) && file_exists($waterImage)) {
        $isWaterImage = TRUE;
        $water_info = getimagesize($waterImage);
        $water_w = $water_info[0];//取得水印图片的宽
        $water_h = $water_info[1];//取得水印图片的高
        switch ($water_info[2]) { //取得水印图片的格式
            case 1:
                $water_im = imagecreatefromgif($waterImage);
                break;
            case 2:
                $water_im = imagecreatefromjpeg($waterImage);
                break;
            case 3:
                $water_im = imagecreatefrompng($waterImage);
                break;
            default:
                die($formatMsg);
        }
    }

//读取背景图片 
    if (!empty($groundImage) && file_exists($groundImage)) {
        $ground_info = getimagesize($groundImage);
        $ground_w = $ground_info[0];//取得背景图片的宽
        $ground_h = $ground_info[1];//取得背景图片的高
        switch ($ground_info[2]) { //取得背景图片的格式
            case 1:
                $ground_im = imagecreatefromgif($groundImage);
                break;
            case 2:
                $ground_im = imagecreatefromjpeg($groundImage);
                break;
            case 3:
                $ground_im = imagecreatefrompng($groundImage);
                break;
            default:
                die($formatMsg);
        }
    } else {
        die("需要加水印的图片不存在！");
    }
//水印位置 
    if ($isWaterImage) { //图片水印
        $w = $water_w;
        $h = $water_h;
        $label = "图片的";
    } else { //文字水印
        $fonturl = 'c:/windows/fonts/simhei.ttf';
        $temp = imagettfbbox(ceil($textFont * 5), 0, $fonturl, $waterText);
        $w = $temp[4] - $temp[6];
        $h = $temp[1] - $temp[7];
        unset($temp);
        $label = "文字区域";
    }
    if (($ground_w < $w) || ($ground_h < $h)) {
        echo "需要加水印的图片的长度或宽度比水印" . $label . "还小，无法生成水印！";
        return;
    }
    switch ($waterPos) {
        case 0://随机
            $posX = rand(0, ($ground_w - $w));
            $posY = rand(0, ($ground_h - $h));
            break;
        case 1://1为顶端居左
            $posX = 0;
            $posY = 0;
            break;
        case 2://2为顶端居中
            $posX = ($ground_w - $w) / 2;
            $posY = 0;
            break;
        case 3://3为顶端居右
            $posX = $ground_w - $w;
            $posY = 0;
            break;
        case 4://4为中部居左
            $posX = 0;
            $posY = ($ground_h - $h) / 2;
            break;
        case 5://5为中部居中
            $posX = ($ground_w - $w) / 2;
            $posY = ($ground_h - $h) / 2;
            break;
        case 6://6为中部居右
            $posX = $ground_w - $w;
            $posY = ($ground_h - $h) / 2;
            break;
        case 7://7为底端居左
            $posX = 0;
            $posY = $ground_h - $h;
            break;
        case 8://8为底端居中
            $posX = ($ground_w - $w) / 2;
            $posY = $ground_h - $h;
            break;
        case 9://9为底端居右
            $posX = $ground_w - $w;
            $posY = $ground_h - $h;
            break;
        default://随机
            $posX = rand(0, ($ground_w - $w));
            $posY = rand(0, ($ground_h - $h));
            break;
    }
//设定图像的混色模式 
    imagealphablending($ground_im, true);
    if ($isWaterImage) { //图片水印
        imagecopy($ground_im, $water_im, $posX, $posY, 0, 0, $water_w, $water_h);//拷贝水印到目标文件
    } else { //文字水印

        if (!empty($textColor) && (strlen($textColor) == 7)) {
            $R = hexdec(substr($textColor, 1, 2));
            $G = hexdec(substr($textColor, 3, 2));
            $B = hexdec(substr($textColor, 5));
        } else {
            die("水印文字颜色格式不正确！");
        }
        //imagestring ( $ground_im, $textFont, $posX, $posY, $Text, imagecolorallocate($ground_im, $R, $G, $B));
        imagettftext($ground_im, ceil($textFont * 5), 0, $posX, $posY, imagecolorallocate($ground_im, $R, $G, $B), $fonturl, $waterText);
    }
//生成水印后的图片 
    @unlink($groundImage);
    switch ($ground_info[2]) { //取得背景图片的格式
        case 1:
            imagegif($ground_im, $groundImage);
            break;
        case 2:
            imagejpeg($ground_im, $groundImage);
            break;
        case 3:
            imagepng($ground_im, $groundImage);
            break;
        default:
            die('error');
    }
//释放内存 
    if (isset($water_info)) unset($water_info);
    if (isset($water_im)) imagedestroy($water_im);
    unset($ground_info);
    imagedestroy($ground_im);
}

?>
