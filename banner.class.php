<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 20.12.2016
 * Time: 15:24
 * Updated: 2023-07-17 17:08
 */

namespace app;


class banner
{
    private $lang;
    private $validLang = ['ru', 'en', 'uk'];
    private $num = null;

    public function __construct($lang = 'ru', $num = null)
    {
        if (in_array($lang, $this->validLang)) {
            $this->lang = $lang;
        } else {
            $this->lang = 'ru';
        }
        if (!is_null($num)) {
            $this->num = $num;
        }
    }

    public function getHeaders()
    {
        if (!headers_sent()) {
            header('Content-Type:text/html; charset=UTF-8');
        }
    }

    public function getBannerHtml()
    {
        $bannerHtml = '';

        switch ($this->lang) {
            case 'en':
                $banners = [
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="http://go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Buy Me a Coffee ☕</a>',
                    '<a href="http://go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Support me on a Patreon ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Buy Me a Coffee ☕</a>',
                    '<a href="https://www.shkodenko.com/">web development blog</a>',
                    '<a href="https://ip.shkodenko.com/en/your-ip-address/">get your IP address</a>',
                    '<a href="https://rndpwd.info/">generate secure random passwords</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - amazing place for freelancers</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">please, look at my profile at www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">please, check my portfolio at www.weblancer.net</a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/6.png" width="468" height="60"></a>',
                ];
                break;

            case 'uk':
                $banners = [
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="http://go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Пригостіть мене кавою ☕</a>',
                    '<a href="http://go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Підтримуйте мене на Patreon ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Пригостіть мене кавою ☕</a>',
                    '<a href="https://www.shkodenko.com/?ref=bn0">блог розробника Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=bn0">сертифікати розробника Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=bn0">сертифікована розробника сайтів від Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=bn0">програмування та розробника сайтів від Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=bn0">програмування та розробника сайтів від сертифікованого розробника</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=bn0">програмування та розробника сайтів від профі</a>',
                    '<a href="https://ip.shkodenko.com/?ref=bn0">ваша IP адреса</a>',
                    '<a href="https://rndpwd.info/?&ref=bn0">безпечний генератор випадкових паролей</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - чудовий ресурс для підроботки та фрилансу</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">дивіться мій профіль на сайті www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">дивіться моє портфоліо на сайті www.weblancer.net</a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/6.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/7.png" width="468" height="60"></a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">програмування та розробка сайтів, Київ</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">програмування та розробка сайтів, в Україні</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=bn0">блог розробника сайтів</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=bn0">цікаві статті про розробку сайтів</a>',
                    '<a href="https://blog.shkodenko.com.ua/category/devops-uk/?ref=bn0">цікаві статті для DevOps</a>',
                    '<a href="https://blog.shkodenko.com.ua/category/devops-uk/?ref=bn0">адміністрування веб серверів та ОС Linux</a>',
                ];
                break;

            case 'ru':
            default:
                $banners = [
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="http://go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Угостите меня кофе ☕</a>',
                    '<a href="http://go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Поддержите меня на Patreon ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Угостите меня кофе ☕</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=bn0">программирование и разработка сайтов от Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=bn0">программирование и разработка сайтов от сертифицированного разработчика</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=bn0">программирование и разработка сайтов от профессионала</a>',
                    '<a href="https://www.shkodenko.com/?&ref=bn0">блог разработчика Тараса Шкоденко</a>',
                    '<a href="https://rndpwd.info/?&ref=bn0">сервис генерации безопасных паролей</a>',
                    '<a href="https://ip.shkodenko.com/ru/%d0%b2%d0%b0%d1%88-ip-%d0%b0%d0%b4%d1%80%d0%b5%d1%81-%d1%80%d1%83%d1%81%d1%81%d0%ba%d0%b8%d0%b9/">узнать ваш IP адрес</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">программирование и разработка сайтов, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">программирование и разработка сайтов, в Украине</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - отличный ресурс для подработки и фрилансеров</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">смотрите мой профиль на сайте www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">смотрите мое портфолио на сайте www.weblancer.net</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">программирование и создание сайтов любой сложности, Киев</a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/4.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/6.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/7.png" width="468" height="60"></a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">создание сайтов на основе Wordpress CMS любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">создание сайтов на основе Drupal 7+ любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">создание сайтов на основе CMS Joomla! любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">создание сайтов на основе Yii2 Framework любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">создание сайтов на основе Symfony 4+ Framework любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=bn0">создание сайтов на PHP любой сложности, Киев</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=bn0">блог для разработчика сайтов</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=bn0">всякие полезности для разработки сайтов</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=bn0">всякие полезности для DevOps</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=bn0">всякие полезности системному администратору</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=bn0">настройка и администрирование ОС Linux</a>',
                ];
                break;
        }

        if (!empty($banners)) {
            if (!is_null($this->num) && isset($banners[$this->num])) {
                $bannerHtml = $banners[$this->num];
            } else {
                shuffle($banners);
                $bannerHtml = $banners[0];
            }
            return $bannerHtml;
        }

        return $bannerHtml;
    }
}
