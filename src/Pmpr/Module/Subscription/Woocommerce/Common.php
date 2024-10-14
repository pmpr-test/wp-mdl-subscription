<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d004ea8883             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Woocommerce; use Pmpr\Module\Subscription\Container; use WC_Product; abstract class Common extends Container { public function ucygcmiuugoemkeo($oammesyieqmwuwyi) : bool { $skksumsyamssouqc = false; if (is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi) { $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof WC_Product && $this->cuisyayqcsoqcueq($igqsaukqcqscimok) || $this->cuisyayqcsoqcueq($aqauykcugwiqkumq->scwwywwaeuumakiq($igqsaukqcqscimok))) { $skksumsyamssouqc = true; break; } } } return $skksumsyamssouqc; } }
