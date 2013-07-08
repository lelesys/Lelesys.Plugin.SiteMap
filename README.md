Lelesys SiteMap Plugin
=======

This plugin will allow user to add sitemap.

Warning: This plugin is experimental.

Quick start
---------

* include the plugin's TypoScript definitions to your own one's (located in, for example, `Packages/Sites/Your.Site/Resources/Private/TypoScripts/Library/ContentElements.ts2`) with:

```
include: resource://Lelesys.Plugin.SiteMap/Private/TypoScripts/Library/Root.ts2
```

Include the plugin's Stylesheet to your own one's where you add other stylesheets of the site.

``<link href="{f:uri.resource(path: 'resource://Lelesys.Plugin.SiteMap/Public/Stylesheets/Sitemap.css')}" rel="stylesheet" media="screen">
``
Usage
-----

This plugin will add the sitemap of the entire websites pagetree. You can hide the plugin so that it will not be visible in frontend.
The hidden pages or pages hidden in menu will not be visible in the frontend. You can delete the plugin
if you dont want the plugin on any page.
If you want to see xml format of the sitemap just type  eg:"domainname.com/about-us.xml"
just add .xml to any page and you will get the sitemap in xml format.

Note
-----
You need to add some content on the page if you need to add this plugin on that particular page.
