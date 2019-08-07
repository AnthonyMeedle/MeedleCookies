<?php
namespace MeedleCookies\Form;

use MeedleCookies\MeedleCookies;
use MeedleCookies\Form\Base\MeedleCookiesConfigForm as BaseMeedleCookiesConfigForm;

/**
 * Class MeedleCookiesConfigForm
 * @package MeedleCookies\Form\Base
 */
class MeedleCookiesConfigForm extends BaseMeedleCookiesConfigForm
{
    public function getTranslationKeys()
    {
        return array(
            "googletagmanagerid" => $this->translator->trans("Your google tag manager Id", [], MeedleCookies::MESSAGE_DOMAIN),
            "tarteaucitron_multipletagua" => $this->translator->trans("Your google UA", [], MeedleCookies::MESSAGE_DOMAIN),
        );
    }
}
