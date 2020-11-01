# Emailpoubelle for YunoHost

[![Integration level](https://dash.yunohost.org/integration/emailpoubelle.svg)](https://dash.yunohost.org/appci/app/emailpoubelle) ![](https://ci-apps.yunohost.org/ci/badges/emailpoubelle.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/emailpoubelle.maintain.svg)  
[![Install Emailpoubelle with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=emailpoubelle)

> *This package allows you to install Emailpoubelle quickly and simply on a YunoHost server.  
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview
A Yunohost version of [Email Poubelle](http://www.mercereau.info/sortie-de-la-version-1-0-demailpoubelle-php-email-jetable-auto-hebergeable/) by David Mercereau.

EmailPoubelle (Trash email) is a script to create temporay email adresses that aims to your real email address.

All thanks to David. 

## WARNING

Using this will cause to disable the YunoHost LDAP aliases! Once installed, you won't be able to use the aliasses settings that you can see when you modify your personnal settings in the SSOWAT pannel.
Of course, once uninstalled, everything get back to normal. 

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/emailpoubelle%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/emailpoubelle/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/emailpoubelle%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/emailpoubelle/)

## Links

 * Report a bug: https://github.com/YunoHost-Apps/emailpoubelle_ynh/issues
 * App website: https://poubelle.zici.fr/
 * Upstream app repository: https://github.com/kepon85/emailPoubelle.php
 * YunoHost website: https://yunohost.org/

---

## Developers info

Please do your pull request to the [testing branch](https://github.com/Yunohost-Apps/emailpoubelle_ynh/tree/Testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/Yunohost-Apps/emailpoubelle_ynh/tree/Testing --debug
or
sudo yunohost app upgrade emailpoubelle -u https://github.com/Yunohost-Apps/emailpoubelle_ynh/tree/Testing --debug
```

## LICENCE

Package and software are GPL 3.0
