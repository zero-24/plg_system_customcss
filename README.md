# CustomCSS Plugin

This Joomla plugin lets you load a custom.css / custom.min.css when the template does not support that out of the box.

## Sponsoring and Donation

You want to support my work for the [development of my extensions](https://extensions.joomla.org/profile/profile/details/200189/) and my work for the [Joomla! Project](https://volunteers.joomla.org/joomlers/248-tobias-zulauf) you can give something back and sponsor me. 

There are two ways to support me right now:
- This extension is part of [Github Sponsors](https://github.com/sponsors/zero-24/) by sponsoring me, you help me continue my oss work for the [Joomla! Project](https://volunteers.joomla.org/joomlers/248-tobias-zulauf), write bug fixes, improving features and maintain my extensions.
- You just want to send me an one-time donation? Great you can do this via [PayPal.me/zero24](https://www.paypal.me/zero24).

Thanks for your support!

## Feature

This plugin checks whether a custom.css (or custom.min.css) file exists at /templates/"templatename"/css or /administrator/templates/"templatename"/css. If present, it will be loaded to the site.
- With a custom.css you can overwrite the template css files.
- This file will not be touched by an update.
- To use the plugin please activate it. Control Pannel --> Extensions --> Plugins --> System - Template custom.css.

### Update Server

Please note that my update server only supports the latest version running the latest version of Joomla and atleast PHP 7.0.
Any other plugin version I may have added to the download section don't get updates using the update server.

## Issues / Translations

You have found an Issue, you have done a translation or have a question / suggestion regarding the plugin?
[Open an issue in this repo](https://github.com/zero-24/plg_system_customcss/issues/new) or submit a pull request with the proposed changes.

## Joomla! Extensions Directory (JED)

This plugin can also been found in the Joomla! Extensions Directory: [CustomCSS by zero24](https://extensions.joomla.org/extension/style-a-design/templating/customcss/)

## Release steps

- `build/build.sh`
- `git commit -am 'prepare release CustomCSS 3-x'`
- `git tag -s '3-X' -m 'CustomCSS 3-x'`
- `git push origin --tags`
- create the release on GitHub
- `git push origin master`
