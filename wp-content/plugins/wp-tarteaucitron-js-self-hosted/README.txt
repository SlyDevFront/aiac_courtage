=== WP tarteaucitron.js Self Hosted ===
Contributors: rdorian
Donate link: https://paypal.me/riccidorian/
Tags: tarteaucitron.js, tarteaucitron, tarteaucitronjs, tarteaucitron js
Requires at least: 4.9
Tested up to: 5.2.1
Stable tag: trunk
Requires PHP: 5.6.31
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin aims to integrate and ease the use of tarteaucitron.js in WordPress. It's developed with the creator of the service tarteaucitron.js.\
No additionals servers are needed. The script is stored in your WordPress website.

== Description ==
## What is tarteaucitron.js ?

The European cookie law regulates the management of cookies, and you should ask your visitors their consent before exposing them to third-party services.

Clearly this script will:

- Disable all services by default.
- Display a banner on the first-page view and a small one on other pages.
- Display a panel to allow or deny each services one by one.
- Activate services on the second-page view if not denied.
- Store the consent in a cookie for 365 days.
Bonus:


- Load service when user click on Allow (without reloading of the page.),
- Incorporate a fallback system (display a link instead of the social button and a static banner instead of advertising.).

Sources : [Tarteaucitron.js github](https://github.com/AmauriC/tarteaucitron.js)

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/wp-tarteaucintron.js` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->wp-tarteaucintron.js screen to configure the plugin

dowloand link : [wp-tarteaucitron.js](https://gitlab.com/d-public/wp-tarteaucitron.js)

== Frequently Asked Questions ==

= Is it the same as tarteaucitron.js? =

This plugin is developped based on tarteaucitron.js.
The code of tarteaucitron.js is integrated inside the plugin. And I will try to keep it up-to-date with the latest functionnality of tarteaucitron.js

= Some services have been added but aren't visible on the admin panel =

Each month (at least), I will update the plugin to integrate the latest services of tarteaucitron.js. But the services page is generated automatically based on the official documentation of tarteaucitron.js.
If a services is present in the tarteaucitron.services.js file and not on the admin panel, you can add the code to activate it on the "other" section of the admin panel.



== Screenshots ==

1. First time on the website :  ![picture](assets/screenshot1.png)
2. Selection of the services that the user allows or deny ![picture](assets/screenshot2.png)
3. Default view of the website with the possibility to change in the future the services allowed.![picture](assets/screenshot3.png)

== Changelog ==

= 1.0.14 =
* Remove stat, to fix breaking call

= 1.0.13 =
* Added Option for anonymous statistics

= 1.0.12 =
* Corrected "UseExternalCss" option to load a custom alternatif css file from the default one if set to true.

= 1.0.11 =
* Update menu "Languages" to "Texts"

= 1.0.10 =
* Default value for initialisation script on the front end

= 1.0.9 =
* corrected bug on initialisation settings

= 1.0.8 =
* Added link to little documentation

= 1.0.7 =
* Corrected minor bugs

= 1.0.6 =
* removed option use external css that caused css bug on the website (this option is coming back when I found a patch)
* Changed shortcode message

= 1.0.5 =
* Corrected little bugs in update 1.0.4
* If the banner stay even after the user accept, please save at least once the initisalisation option and remove all the cookies for the website in the browser

= 1.0.4 =
* Update to script release 1.2
* Updated services by adding new services (Hubspot, Twitter Widget Api)
* Added initialisation variable 'useExternalCss'
* Added Greeks translation

= 1.0.3 =
* Added ability to change the cookie name
* Updated Service page by adding new services (adform, adsense, GetQuanty, HotJar, Koban, Matomo)
* Updated roadmap
* Updated to last version of tarteaucitron.js

= 1.0.2 =
* corrected little bug with settings

= 1.0.1 =
* Updated roadmap

= 1.0.0 =
* Added feature to customize frontend texts.

= 0.3 =
* added matomo service
* added koban service
* Updated tarteaucitron.js
* added fb-video
* Updated roadmap
* corrected some texts

= 0.2 =
* Initialisation of tarteaucitron.js without writing javascript
* Possibility to customize the expiration time of the cookie
* Possibility to choose the language for the frontend

= 0.1.1 =
* Added default value for initialisation script

= 0.1 =
* Initialisation script with a text area to insert the code. (Without the <script> tag)
* Services script with a text area and checkboxes to activates the services needed.
