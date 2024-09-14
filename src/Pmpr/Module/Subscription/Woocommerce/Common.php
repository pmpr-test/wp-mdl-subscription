<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7c5c3ded             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Woocommerce; use Pmpr\Module\Subscription\Container; use WC_Product; abstract class Common extends Container { public function ucygcmiuugoemkeo($oammesyieqmwuwyi) : bool { $skksumsyamssouqc = false; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto kocqqoyymosmuksu; } $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!($igqsaukqcqscimok instanceof WC_Product && $this->cuisyayqcsoqcueq($igqsaukqcqscimok) || $this->cuisyayqcsoqcueq($aqauykcugwiqkumq->scwwywwaeuumakiq($igqsaukqcqscimok)))) { goto iuuuususuuuaieem; } $skksumsyamssouqc = true; goto uykousayyomcaeaa; iuuuususuuuaieem: uimeeckqksqeekqq: } uykousayyomcaeaa: kocqqoyymosmuksu: return $skksumsyamssouqc; } }
