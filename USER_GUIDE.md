# OXID eSales Simple Captcha Module modified by Kussin | eCommerce und Online-Marketing

## Module Settings

### General Settings

Go to **OXID Admin Panel > Extensions > Modules > Simple Captcha > Tab "Settings > Tab "General"**

#### Captcha Key

The Captcha Key is used [OXID Core Encryptor](https://github.com/OXID-eSales/oxideshop_ce/blob/v6.3.7/source/Core/Encryptor.php#L22).

The key should be at least 12 characters long (e.g. `abcdefghijkmnpqrstuvwxyz23456789`).

Read more in OXID Slack: https://oxid-dev.slack.com/archives/C2MAABB96/p1665053282409199?thread_ts=1664889972.346849&cid=C2MAABB96

### General Settings

Go to **OXID Admin Panel > Extensions > Modules > Simple Captcha > Tab "Settings > Tab "View"**

#### Enabling of Captchas

**NOTE:** Each Captcha can be enabled/disabled separately.

| View/Page            | Config Key                      | OXID Class                                                                                                              | Default |
|----------------------|---------------------------------|-------------------------------------------------------------------------------------------------------------------------|---------|
| Contact Form         | `oecaptchacontactenabled`         | [`contact`](https://github.com/OXID-eSales/oxideshop_ce/blob/v6.3.7/source/Application/Controller/ContactController.php) | `FALSE`   |
| Password Forget Page | `oecaptchaforgotpwdenabled`       | [`forgotpwd`](https://github.com/OXID-eSales/oxideshop_ce/blob/v6.3.7/source/Application/Controller/ForgotPasswordController.php)                                                                                                            | `FALSE`   |
| Invite Mail          | `oecaptchainviteenabled`          | [`invite`](https://github.com/OXID-eSales/oxideshop_ce/blob/v6.3.7/source/Application/Controller/InviteController.php)                                                                                                               | `FALSE`   |
| Newsletter Sign Up   | `oecaptchanewsletterenabled`      | [`newsletter`](https://github.com/OXID-eSales/oxideshop_ce/blob/v6.3.7/source/Application/Controller/NewsletterController.php)                                                                                                           | `FALSE`   |
| Price Alarm          | `oecaptchapricealarmenabled`      | [`pricealarm`](https://github.com/OXID-eSales/oxideshop_ce/blob/v6.3.7/source/Application/Controller/PriceAlarmController.php)                                                                                                           | `TRUE`    |
| Suggestion Mail      | `oecaptchasuggestenabled`         | [`suggest`](https://github.com/OXID-eSales/oxideshop_ce/blob/v6.3.7/source/Application/Controller/SuggestController.php)                                                                                                              | `FALSE`   |
| PDP Additional Info  | `oecaptchawarticledetailsenabled` | `oxwarticledetails`                                                                                                  | `TRUE`    |

## Support

Kussin | eCommerce und Online-Marketing GmbH<br>
Fahltskamp 3<br>
25462 Rellingen<br>
Germany

Fon: +49 (4101) 85868 - 0<br>
Email: info@kussin.de

## Copyright

(c) 2006-2022 Kussin | eCommerce und Online-Marketing GmbH