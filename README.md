# Disables `/users/` api endpoint

[![Made in Ukraine](https://img.shields.io/badge/made_in-ukraine-ffd700.svg?labelColor=0057b7)](https://stand-with-ukraine.pp.ua)
[![Contribute with Gitpod](https://img.shields.io/badge/Contribute%20with-Gitpod-908a85?logo=gitpod)](https://gitpod.io/#https://github.com/andriilive/wp-disable-users-endpoint)

`wp-disable-users-endpoint` plugin completely and for real disables WordPress &amp; plugins image sizes generation with no need for configuration

+  No need for configuration
+  Tested with `Wordpress 6.0.2` & `php 8.0`
+  Only 5 lines of code
+  Supports [Bedrock](https://roots.io/bedrock) `WordPress` installs

## Requirements

- Requires WP at least: `4.5`
- Tested up to WP: `6.0.2`
- Requires PHP: `7.1`

## Install & Activate plugin

### Composer (Bedrock Install)

Run at root

`composer require andriilive/wp-disable-users-endpoint`

### ZIP Upload

1. Download `wp-disable-users-endpoint.zip` from [here](https://github.com/andriilive/wp-disable-users-endpoint/archive/refs/tags/0.1.0.zip)
2. Login to Wordpress Admin Dashboard
2. Navigate to `Plugins` > `Add new`
3. Press `Upload Plugin` and chose `wp-disable-users-endpoint.zip`
2. `Activate` the plugin through the `Plugins` menu in WordPress

### FTP

1. Upload folder `wp-disable-users-endpoint` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
   See also

Disable generated image sizes plugin for WordPress andriilive/wp-disable-generated-image-size
