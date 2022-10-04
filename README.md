# OXID eSales Simple Captcha Module modified by Kussin | eCommerce und Online-Marketing

## Description

**NOTE:** This module is a fork of the original [OXID eSales Simple Captcha Module](https://github.com/OXIDprojects/captcha-module). It is not compatible with the 
original module which added additional settings to the module configuration like enabling/disabling of scopes.

This module provides a simple captcha ("Completely Automated Public Turing test to tell Computers and Humans Apart")
challenge (distorted characters in an image).

It is used to ensure that only a user who can read the distorted characters and enter them in the related input field
can submit the following forms:
 - contact
 - invite
 - pricealarm
 - suggest

The captcha module then validates the submitted value against the expected one and then decides whether to process the
request (e.g. send contact mail to shop administrator) or refuse and show an error message instead.

## Installation

Please proceed with one of the following ways to install the module:

### Module installation via composer

In order to install the module via composer, run the following commands in commandline of your shop base directory 
(where the shop's composer.json file resides).

```
composer require oxid-projects/captcha-module
```

### Module installation via repository cloning

Clone the module to your OXID eShop **modules/oe/** directory:
```
git clone https://github.com/OXIDprojects/captcha-module.git captcha
```

### Module installation from zip package

* Make a new folder "captcha" in the **modules/oe/ directory** of your shop installation. 
* Download the https://github.com/OXIDprojects/captcha-module/archive/master.zip file and unpack it into the created folder.

## Activate Module

- Activate the module in the administration panel.

## Uninstall

Disable the module in administration area and delete the module folder.

## Change log

[OXID eSales CHANGELOG](CHANGELOG.md)

## Licence

[End-User Software License Agreement](LICENSE)

## User Guide

[User Guide](USER_GUIDE.md)

## Support

Kussin | eCommerce und Online-Marketing GmbH<br>
Fahltskamp 3<br>
25462 Rellingen<br>
Germany

Fon: +49 (4101) 85868 - 0<br>
Email: info@kussin.de

## Licence

[End-User Software License Agreement](LICENSE)

## Copyright

(c) 2006-2022 Kussin | eCommerce und Online-Marketing GmbH
