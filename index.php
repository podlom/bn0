<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 20.12.2016
 * Time: 15:23
 */

require_once 'banner.class.php';

$lang = 'ru';
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
$bn = new app\banner($lang);
$bn->getHeaders();
echo $bn->getBannerHtml();