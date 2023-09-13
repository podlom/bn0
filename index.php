<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 20.12.2016
 * Time: 15:23
 *
 * Updated: 2023-09-13 14:52
 */

require_once 'banner.class.php';

$lang = 'ru';
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
if (isset($_GET['num'])) {
    $num = $_GET['num'];
}
$bn = new app\banner($lang, $num);
$bn->getHeaders();
echo $bn->getBannerHtml();
