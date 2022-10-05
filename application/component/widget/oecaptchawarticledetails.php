<?php
/**
 * #PHPHEADER_OECAPTCHA_LICENSE_INFORMATION#
 */

/**
 * Article detailed information widget.
 */
class oeCaptchaWArticleDetails extends oeCaptchaWArticleDetails_parent
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
     * Template variable getter. Returns object of handling CAPTCHA image
     *
     * @return object
     */
    public function getCaptcha()
    {
        if ($this->captcha === null && $this->isEnabled()) {
            $this->captcha = oxNew('oeCaptcha');
        }
        return $this->captcha;
    }

    /**
     * Template variable getter. Returns bool value if CAPTCHA is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        if ($this->enabled === null) {
            $this->enabled = (bool) oxRegistry::getConfig()->getConfigParam('oecaptchapricealarmenabled')
                || (bool) oxRegistry::getConfig()->getConfigParam('oecaptchawarticledetailsenabled');
        }

        return $this->enabled;
    }
}
