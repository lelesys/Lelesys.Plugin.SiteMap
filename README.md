Lelesys SiteMap Plugin
=======

This plugin will allow user to add sitemap.

##### Important note: Initial package development was done when TYPO3 Neos was at alpha3/4. We are working hard continuously to get this to work perfectly and to beautify source code using best practices/concepts of Flow/Neos. Stay tuned!

Quick start
---------

Include the plugin's Stylesheet to your own one's where you add other stylesheets of the site.

```
<link href="{f:uri.resource(path: 'resource://Lelesys.Plugin.SiteMap/Public/Stylesheets/Sitemap.css')}" rel="stylesheet" media="screen">
```
Usage
-----

* Add the following code in your global routing file at Configuration/Routes.yaml after the TYPO3/Neos Routes
	
	-
	name: '<Name>'
	uriPattern: '<TYPO3NeosSitesSubroutes>'
	subRoutes:
	  'TYPO3NeosSitesSubroutes':
	  package: <SitePackageName>
	  variables:
	  'defaultUriSuffix': '.html'

* Add the following code to your sites package routing file Sites/Configuration/Routes.yaml

	-
	  name:  '<Name>'
	  uriPattern: '{node}.xml'
	  defaults:
		'@package':    'TYPO3.Neos'
		'@controller': 'Frontend\Node'
		'@action':     'show'
		'@format':     'xml'
	  routeParts:
		'node':
		  handler:     'TYPO3\Neos\Routing\FrontendNodeRoutePartHandlerInterface'
	  subRoutes:
		'FrontendSubRoutes':
		  package: 'TYPO3.Neos'
		  suffix:  'Frontend'
		  variables:
			'defaultUriSuffix': '.xml'
 
This plugin will add the sitemap of the entire websites pagetree. You can hide the plugin so that it will not be visible in frontend.
The hidden pages or pages hidden in menu will not be visible in the frontend. You can delete the plugin
if you dont want the plugin on any page.
If you want to see xml format of the sitemap just type  eg:"domainname.com/about-us.xml"
just add .xml to any page url and you will get the sitemap in xml format.