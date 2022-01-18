# CustomCSS Plugin

This Joomla plugin lets you load a custom.css / custom.min.css when the template does not support that out of the box.

## Feature

This plugin checks whether a custom.css (or custom.min.css) file exists at /templates/"templatename"/css or /administrator/templates/"templatename"/css. If present, it will be loaded to the site.
- With a custom.css you can overwrite the template css files.
- This file will not be touched by an update.
- To use the plugin please activate it. Control Pannel --> Extensions --> Plugins --> System - Template custom.css.

## Configuration

### Initial setup the plugin

- [Download the latest version of the plugin](https://github.com/zero-24/plgsystemforce2fausergroup/releases/latest)
- Install the plugin using `Upload & Install`
- Enable the plugin `System - CustomCSS` form the plugin manager

Now the inital setup is completed and you can create the files in the tempalte.

### Update Server

Please note that my update server only supports the latest version running the latest version of Joomla and atleast PHP 7.0.
Any other plugin version I may have added to the download section don't get updates using the update server.

## Issues / Pull Requests

You have found an Issue, have a question or you would like to suggest changes regarding this extension?
[Open an issue in this repo](https://github.com/zero-24/plg_system_customcss/issues/new) or submit a pull request with the proposed changes.

## Translations

You want to translate this extension to your own language? Check out my [Crowdin Page for my Extensions](https://joomla.crowdin.com/zero-24) for more details. Feel free to [open an issue here](https://github.com/zero-24/plg_system_customcss/issues/new) on any question that comes up.

## Joomla! Extensions Directory (JED)

This plugin can also been found in the Joomla! Extensions Directory: [CustomCSS by zero24](https://extensions.joomla.org/extension/style-a-design/templating/customcss/)

## Release steps

- `build/build.sh`
- `git commit -am 'prepare release CustomCSS 3-x'`
- `git tag -s '3-X' -m 'CustomCSS 3-x'`
- `git push origin --tags`
- create the release on GitHub
- `git push origin master`

## Crowdin

### Upload new strings

`crowdin upload sources`

### Download translations

`crowdin download --skip-untranslated-files --ignore-match`
