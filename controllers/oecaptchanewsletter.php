<?php
/**
 * #PHPHEADER_OECAPTCHA_LICENSE_INFORMATION#
 */

class oeCaptchaNewsletter extends oeCaptchaNewsletter_parent
{
    /**
     * Class handling CAPTCHA image.
     *
     * @var object
     */
    protected $captcha = null;

    /**
     * Flag for checking if CAPTCHA is enabled.
     *
     * @var bool
     */
    protected $enabled = null;

    /**
     * Composes and sends user written message, returns false if some parameters
     * are missing.
     *
     * @return bool
     */
    public function send()
    {
        if (!$this->getCaptcha()->passCaptcha() && $this->isEnabled()) {
            return false;
        }

        return parent::send();
    }

    /**
     * Template variable getter. Returns object of handling CAPTCHA image
     *
     * @return object
     */
    public function getCaptcha()
    {
        if ($this->captcha === null && $this->isCaptchaEnabled()) {
            $this->captcha = oxNew('oeCaptcha');
        }

        return $this->captcha;
    }

    /**
     * Template variable getter. Returns bool value if CAPTCHA is enabled
     *
     * @return bool
     */
    public function isCaptchaEnabled()
    {
        if ($this->enabled === null) {
            $this->enabled = (bool) oxRegistry::getConfig()->getConfigParam('oecaptchanewsletterenabled');
        }

        return $this->enabled;
    }
}
