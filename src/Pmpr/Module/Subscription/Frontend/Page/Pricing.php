<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106a250cea             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Subscription\Model\Plan; use Pmpr\Module\Subscription\Setting; use Pmpr\Common\Foundation\Frontend\Page; class Pricing extends Page { public function qiccuiwooiquycsg() { $this->wegcaymyqqoyewmw('pricing')->gswweykyogmsyawy(__('Pricing', PR__MDL__SUBSCRIPTION))->wmsaakuicamguoam($this->weysguygiseoukqw(Setting::usyscuksyoimmsyy)); parent::qiccuiwooiquycsg(); } public function rsysgcucogueguuk() : array { $omouioamescuegke = Plan::symcgieuakksimmu(); return ['plans' => $omouioamescuegke->qyaiiayimwmuomey(), 'feature_icon' => IconInterface::ggokgkyiweugsokc, Constants::qescuiwgsyuikume => $this->weysguygiseoukqw(Setting::ysgwugcqguggmigq), Constants::eqkeooqcsscoggia => $this->weysguygiseoukqw(Setting::bweaoswakkswcwms), Constants::uookioyeieiswoew => Constants::uookioyeieiswoew === $this->weysguygiseoukqw(Setting::quaagiciyoskcygq)]; } }
