<?php
namespace MeedleCookies\Form\Base;

use MeedleCookies\MeedleCookies;
use Thelia\Form\BaseForm;
use MeedleCookies\Model\Config\MeedleCookiesConfigValue;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class MeedleCookiesConfigForm
 * @package MeedleCookies\Form\Base
 * @author Meedle
 */
class MeedleCookiesConfigForm extends BaseForm
{
    const FORM_NAME = "meedlecookies_config_form";

    protected function buildForm()
    {
        $translationKeys = $this->getTranslationKeys();
        $fieldsIdKeys = $this->getFieldsIdKeys();

        $this->addGoogleTagManagerIdField($translationKeys, $fieldsIdKeys);

	}
    protected function addGoogleTagManagerIdField(array $translationKeys, array $fieldsIdKeys)
    {
        $this->formBuilder
            ->add("googletagmanagerid", "text", array(
                "label" => $this->readKey("googletagmanagerid", $translationKeys),
                "label_attr" => [
                    "for" => $this->readKey("googletagmanagerid", $fieldsIdKeys),
                    "help" => $this->readKey("help.googletagmanagerid", $translationKeys)
                ],
                "data" => MeedleCookies::getConfigValue(MeedleCookiesConfigValue::GOOGLE_TAG_MANAGER_ID),
            ))
            ->add("tarteaucitron_multipletagua", "text", array(
                "label" => $this->readKey("tarteaucitron_multipletagua", $translationKeys),
                "label_attr" => [
                    "for" => $this->readKey("tarteaucitron_multipletagua", $fieldsIdKeys),
                    "help" => $this->readKey("help.tarteaucitron_multipletagua", $translationKeys)
                ],
                "data" => MeedleCookies::getConfigValue(MeedleCookiesConfigValue::TARTEAUCITRON_MULTIPLETAGUA),
            ))
        ;
    }

    public function getName()
    {
        return static::FORM_NAME;
    }

    public function readKey($key, array $keys, $default = '')
    {
        if (isset($keys[$key])) {
            return $keys[$key];
        }

        return $default;
    }

    public function getTranslationKeys()
    {
        return array();
    }

    public function getFieldsIdKeys()
    {
        return array(
            "google_tag_manager_id" => "google_tag_manager_id"
        );
    }
}
