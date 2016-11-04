<?php 

if(c::get('cdn.content')) {
  kirby()->urls()->content = c::get('cdn.content');  
}

if(c::get('cdn.thumbs')) {  
  kirby()->urls()->thumbs = c::get('cdn.thumbs');
}

if(c::get('cdn.assets')) {

  $original = url::$to;

  url::$to = function() use($original) {

    $url = call($original, func_get_args());

    if(!str::startsWith($url, kirby()->urls()->index())) {
      return $url;
    }

    if(str::contains($url, '/panel/assets')) {
      return $url;
    }
    
    $url = preg_replace_callback('!.*?\/assets\/(.*)$!', function($match) {
      return c::get('cdn.assets') . '/' . $match[1];
    }, $url);

    return $url;

  };

}
