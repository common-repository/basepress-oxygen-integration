=== BasePress Knowledge Base + Oxygen Visual Site Builder Integration ===
Contributors: codesavory
Donate link: https://codesavory.com
Tags: knowledge base, help desk,documentation,faq, site builder, page builder, Oxygen
Requires at least: 4.5
Tested up to: 5.7
Stable tag: 1.0.2
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Integrate BasePress Knowledge Base with Oxygen Visual Site Builder

== Description ==
BasePress is the best option when it comes to building advanced knowledge bases on your WordPress site.
If you use Oxygen site builder to create your posts and pages this add-on is what you are looking for to integrate BasePress Knowledge Base and Oxygen builder!

= Why is this plugin necessary? =
BasePress was developed to integrate with your WordPress theme and it uses its own templates to display the knowledge base content.
On the other hand Oxygen builder disables any WordPress theme as it doesn't need one to work and uses its own templates to display your site. In doing so it overrides BasePress templates.

This small plugin adds a new shortcode that can be used inside Oxygen's templates making BasePress work as expected with Oxygen.

= How to use =
1. Set-up BasePress as normal
2. Create a new dedicated template in Oxygen for your Knowledge Base.
3. In the newly created template select the template you want the knowledge base to inherit in "INHERIT DESIGN FROM OTHER TEMPLATE".
4. Select the "Knowledge Base" post type under Single
5. Select "All Knowledge Base categories" under Archive > Taxonomies.
6. Remove any other option from the template.
7. Set the template priority higher than other templates.
8. Edit the Template content by clicking "Edit with Oxygen" and just add the shortcode [basepress-oxygen].


If you need to customise a BasePress theme or create your own you can still follow the instructions in these articles:
<a href="https://codesavory.com/knowledge-base/basepress/basepress-themes/customize-a-knowledge-base-theme/">Customise a knowledge base theme</a>
<a href="https://codesavory.com/knowledge-base/basepress/basepress-themes/create-new-theme/">Create a new knowledge base theme</a>
Just keep in mind that Oxygen would disable any theme in your WordPress installation therefore you cannot place BasePress custom theme on your WordPress theme's folder.
You can instead place the custom BasePress theme in WordPress uploads directory.


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. The plugin has no settings

== Frequently Asked Questions ==

= Does this work with all BasePress versions? =
This plugin works with BasePress version 2.4.1 or newer

= When I view the knowledge base pages, the header and footer are not displaying correctly =
BasePress uses by default your theme's header and footer. Because Oxygen builder disables any theme and therefore the theme's header and footer this would not work with the default BasePress behaviour.
Just visit BasePress Settings > Aspect and enable "Skip loading of header and footer". This will make the knowledge base pages display correctly inside Oxygen template.

== Changelog ==

= 1.0.2 =
* Fixed conflict with Content restriction (BasePress Premium only)

= 1.0.1 =
* Automatically disable BasePress loading of header and footer

= 1.0.0 =
* First release
