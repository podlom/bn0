<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 20.12.2016
 * Time: 15:24
 * Updated: 2025-03-14 23:41
 */

namespace app;


class banner
{
    const REF_NAME = 'bn0';

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
                    "<a href='https://ko-fi.com/L3L5LJ3TB' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://storage.ko-fi.com/cdn/kofi2.png?v=3' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>",

                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-3-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-1-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-2-V2-1.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2021/02/Festinger-Animated-Banner-1-2.gif" alt="" /></a>',

                    '<a href="https://t.me/phpdinos">Join PHPDinos - new Telegram channel for PHP web developers 🦕</a>',
                    '<a href="https://recipes.shkodenko.com/en/?ref=' . self::REF_NAME . '">best cooking recipes - blog about healthy food and cooking</a>',

                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',

                    '<a href="//go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Buy Me a Coffee ☕</a>',
                    '<a href="//go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Support me on a Patreon ☕</a>',

                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Buy Me a Coffee ☕</a>',
                    '<a href="https://www.shkodenko.com/">web development blog</a>',
                    '<a href="https://ip.shkodenko.com/en/your-ip-address/">get your IP address</a>',
                    '<a href="https://rndpwd.shkodenko.com/">generate secure random passwords</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - amazing place for freelancers</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">please, look at my profile at www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">please, check my portfolio at www.weblancer.net</a>',
                    
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/6.png" width="468" height="60"></a>',

                    '<a href="//go.shkodenko.com/to/pmp" target="_blank">PHP Mentorship program</a>',
                    '<a href="https://www.shkodenko.com/php-mentorship-program/?ref=' . self::REF_NAME . '" target="_blank">PHP Mentorship program</a>',

                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Switch to Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Get benefits with Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Affordable calls with Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Chayka-Pereklyuchayka recommends Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Join Lifecell</a>',

                    '<a href="https://www.canva.com/join/wqv-tdh-kty">Signup to Canva</a>',
                    
                    '<a href="https://www.freelancer.com/u/podlom">Check Taras Shkodenko profile at Freelancer.com</a>',
                    
                    '<a href="https://www.upwork.com/freelancers/~01e05248f10699bf9d">Check Taras Shkodenko profile at Upwork.com</a>',

                    '<a href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global91">Download Dropbox for computer and get 500 MB</a>',

                ];
                break;

            case 'uk':
                $banners = [
                    "<a href='https://ko-fi.com/L3L5LJ3TB' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://storage.ko-fi.com/cdn/kofi2.png?v=3' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>",

                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-3-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-1-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-2-V2-1.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2021/02/Festinger-Animated-Banner-1-2.gif" alt="" /></a>',

                    '<a href="https://t.me/phpdinos">Доєднуйтесь до PHPDinos - нового Telegram каналу для PHP та web розробників 🦕</a>',
                    '<a href="https://recipes.shkodenko.com/?ref=' . self::REF_NAME . '">best cooking recipes - блог про здорову їжу та її приготування</a>',

                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',

                    '<a href="//go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Пригостіть мене кавою ☕</a>',
                    '<a href="//go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Підтримуйте мене на Patreon ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Пригостіть мене кавою ☕</a>',
                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">блог розробника Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">сертифікати розробника Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">сертифікована розробника сайтів від Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від сертифікованого розробника</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від профі</a>',
                    '<a href="https://ip.shkodenko.com/?ref=' . self::REF_NAME . '">ваша IP адреса</a>',
                    '<a href="https://rndpwd.shkodenko.com/?&ref=' . self::REF_NAME . '">безпечний генератор випадкових паролей</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - чудовий ресурс для підроботки та фрилансу</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">дивіться мій профіль на сайті www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">дивіться моє портфоліо на сайті www.weblancer.net</a>',

                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/6.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/7.png" width="468" height="60"></a>',

                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">програмування та розробка сайтів, Київ</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">програмування та розробка сайтів, в Україні</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">блог розробника сайтів</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">цікаві статті про розробку сайтів</a>',
                    '<a href="https://blog.shkodenko.com.ua/category/devops-uk/?ref=' . self::REF_NAME . '">цікаві статті для DevOps</a>',
                    '<a href="https://blog.shkodenko.com.ua/category/devops-uk/?ref=' . self::REF_NAME . '">адміністрування веб серверів та ОС Linux</a>',

                    '<a href="//go.shkodenko.com/to/pmp" target="_blank">Менторська програма PHP</a>',
                    '<a href="https://www.shkodenko.com/php-mentorship-program/?ref=' . self::REF_NAME . '" target="_blank">Менторська програма PHP</a>',

                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Переходь до Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Отримай вигоду з Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Вигідні дзвінки з Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Чайка-Переключайка рекомендує Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Підключайся до Lifecell</a>',

                    '<a href="https://www.canva.com/join/wqv-tdh-kty">Реєструйся на Canva</a>',
                    
                    '<a href="https://www.freelancer.com/u/podlom">Профіль Тараса Шкоденко на Freelancer.com</a>',
                    
                    '<a href="https://www.upwork.com/freelancers/~01e05248f10699bf9d">Профіль Тараса Шкоденко на Upwork.com</a>',

                    '<a href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global91">Завантаж собі Dropbox для комп&apos;ютеру та отримай 500 МБ</a>',
                     
                ];
                break;

            case 'ru':
            default:
                $banners = [
                    "<a href='https://ko-fi.com/L3L5LJ3TB' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://storage.ko-fi.com/cdn/kofi2.png?v=3' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>",

                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-3-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-1-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-2-V2-1.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2021/02/Festinger-Animated-Banner-1-2.gif" alt="" /></a>',
                    '<a href="https://t.me/phpdinos">Присоединяйтесь к PHPDinos - новому Telegram каналу для PHP веб разработчиков 🦕</a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="//go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Угостите меня кофе ☕</a>',
                    '<a href="//go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Поддержите меня на Patreon ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Угостите меня кофе ☕</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=' . self::REF_NAME . '">программирование и разработка сайтов от Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=' . self::REF_NAME . '">программирование и разработка сайтов от сертифицированного разработчика</a>',
                    '<a href="https://shkodenko.com.ua/tech.html#cert&ref=' . self::REF_NAME . '">программирование и разработка сайтов от профессионала</a>',
                    '<a href="https://www.shkodenko.com/?&ref=' . self::REF_NAME . '">блог разработчика Тараса Шкоденко</a>',
                    '<a href="https://rndpwd.shkodenko.com/?&ref=' . self::REF_NAME . '">сервис генерации безопасных паролей</a>',
                    '<a href="https://ip.shkodenko.com/ru/%d0%b2%d0%b0%d1%88-ip-%d0%b0%d0%b4%d1%80%d0%b5%d1%81-%d1%80%d1%83%d1%81%d1%81%d0%ba%d0%b8%d0%b9/">узнать ваш IP адрес</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и разработка сайтов, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и разработка сайтов, в Украине</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - отличный ресурс для подработки и фрилансеров</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">смотрите мой профиль на сайте www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">смотрите мое портфолио на сайте www.weblancer.net</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и создание сайтов любой сложности, Киев</a>',

                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/4.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/6.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/applicant/ow4BA.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/7.png" width="468" height="60"></a>',

                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Wordpress CMS любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Drupal 7+ любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе CMS Joomla! любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Yii2 Framework любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Symfony 4+ Framework любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на PHP любой сложности, Киев</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">блог для разработчика сайтов</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">всякие полезности для разработки сайтов</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">всякие полезности для DevOps</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">всякие полезности системному администратору</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">настройка и администрирование ОС Linux</a>',

                    '<a href="//go.shkodenko.com/to/pmp" target="_blank">Менторская программа PHP</a>',
                    '<a href="https://www.shkodenko.com/php-mentorship-program/?ref=' . self::REF_NAME . '" target="_blank">Менторская программа PHP</a>',

                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Переходи на Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Получай выгоду с Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Выгодные звонки с Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Чайка-Переключайка рекомендует Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Подключайся к Lifecell</a>',

                    '<a href="https://www.canva.com/join/wqv-tdh-kty">Регистрируйся на Canva</a>',
                    
                    '<a href="https://www.freelancer.com/u/podlom">Профиль Тараса Шкоденко на Freelancer.com</a>',
                    
                    '<a href="https://www.upwork.com/freelancers/~01e05248f10699bf9d">Профиль Тараса Шкоденко на Upwork.com</a>',

                    '<a href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global91">Загрузи себе Dropbox для компьютера и получи 500 МБ</a>',

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
