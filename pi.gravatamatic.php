<?php
class Plugin_gravatamatic extends Plugin {

    var $meta = array(
        'name'       => 'Gravatamatic',
        'version'    => '0.1',
        'author'     => 'Steven Milne',
        'author_url' => 'http://stevenmilne.co.uk'
    );
 
    public function avatar()
    {
        $email      = $this->fetchParam('email', null);
        $baseurl    = "http://www.gravatar.com/avatar/"; 
        $size       = $this->fetchParam('size', '80');  // default to 80px - size in pizels up to 2048
        $rating     = $this->fetchParam('rating', 'g');  // default to all audiences - g / pg / r / x
        $default    = $this->fetchParam('default', 'mm');  // default to all silhouette - mm / indenticon / monsterid / wavatar / retro or own url

        $hash =   md5( strtolower( trim( $email ) ) ); 
        $options = "?s=".$size."&r=".$rating."&d=".urlencode($default);
        $url = $baseurl.$hash.$options;

        $return_array = array(
            'email' => $email,
            'width' => $size,
            'height' => $size,
            'avatar_url'   => $url
        );

        return $return_array;
    }
 
    public function quicky()
    {
        $email      = $this->fetchParam('email', null);
        $baseurl    = "http://www.gravatar.com/avatar/"; 
        $size       = $this->fetchParam('size', '80');  // default to 80px - size in pizels up to 2048
        $rating     = $this->fetchParam('rating', 'g');  // default to all audiences - g / pg / r / x
        $default    = $this->fetchParam('default', 'mm');  // default to all silhouette - mm / indenticon / monsterid / wavatar / retro or own url

        $hash =   md5( strtolower( trim( $email ) ) ); 
        $options = "?s=".$size."&r=".$rating."&d=".urlencode($default);
        $url = $baseurl.$hash.$options;
 
        return  "<img src=\"$url\" />";
    }
 
}