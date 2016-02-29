# Kirby CDN Plugin

This plugin will rewrite all URLs to assets, files in the content folder and thumbnails to direct to a CDN. 

## Setup 

1. Copy the cdn folder into site/plugins
2. Add the following config options to site/config/config.php

```php
c::set('cdn.assets', 'http://cdn.mydomain.com');
c::set('cdn.content', 'http://cdn.mydomain.com');
c::set('cdn.thumbs', 'http://cdn.mydomain.com');
```

That's it! Make sure you have a CDN at that url at all :) and it either has all the assets you are linking to uploaded, or it is setup as a pullzone.

You can switch off parts of it by simply passing false or not setting it: 

```
c::set('cdn.thumbs', false);
```

Or you can of course use different CDNs or subdomains:

```php
c::set('cdn.assets', 'http://assets.mycdn.com');
c::set('cdn.content', 'http://content.mycdn.com');
c::set('cdn.thumbs', 'http://thumbs.mycdn.com');
```

## Cachebusting

In addition to the CDN plugin you might want to check out the cachebuster plugin to help you with cachebusting for CSS or JS files in order to avoid issues with cached assets after updates. 

## Beware with thumbs!

Enabling the CDN option for thumbnails might easily eat up your storage limit on your CDN unless your assets automatically expire after a certain time, because old thumbnails won't be deleted automatically. 

## Tested

This plugin has so far only been tested with <http://keycdn.com>. Please let me know if you run into any issues with other CDNs and feel free to submit improvements. 

## Author
Bastian Allgeier <bastian@getkirby.com> 