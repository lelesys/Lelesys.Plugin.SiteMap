SiteMap
=======

TYPO3 Neos plugin that will allow user to add sitemap.

Setup
-----

Enter the following line in the Root.ts2 of your sites package:
include: resource://Lelesys.Plugin.SiteMap/Private/TypoScripts/Library/NodeTypes.ts2

Usage
-----

This plugin will add the sitemap of the entire pagetree of the website on the page where this
plugin will be added. You can hide the plugin if you dont want the sitemap to be visible on frontend.
The hidden pages or pages hidden in menu are not visible on the frontend. You can delete the plugin
if you dont want this plugin on any page.

Note
-----

You need to add some content on the page if you need to add this plugin on the that particular page.