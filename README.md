Gravatamatic
============

Gravatar add on for statamic 

( http://gravatar.com | http://statamic.com )

The Gravatamatic plugin is used to simplify the use of gravatars in your templates. 

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `Gravatamatic` (Github timestamps the download folder).
3. Enjoy.


## Tag Pair: *avatar*

**Example Tag:**

    {{ gravatamatic:avatar email="steven@digitaldelivery.co.uk" size="200" rating="g" default="monsterid"}} 

      <div class="avatar"><img src="{{ avatar_url }}" width="{{ width }}" height="{{ height }}"></div> 

    {{ /gravatamatic:avatar }}

    
### Parameters

#### Avatar `email`

Email address of the gravatar you wish to request.

    email="steven@digitaldleivery.co.uk"

 
#### Avatar `size`

The width of the gravatar you need. All gravatars are square, so this is also the height. Any integer in range 1-2048. Defaults to 80.

    size="200"

 
#### Avatar `rating`

Gravatar have a handy rating systems. You'll likely want the default 'suitable for all'. For other options check the list at https://en.gravatar.com/site/implement/images/

    rating="r"

#### Avatar `default`

The default option steps in when there isn't a Gravatar available for an email address. You can pass in a full URL or you can pass in a code indicating the type of generated avatar you'd like to see. For the up to date list of options check the list at https://en.gravatar.com/site/implement/images/

    default="identicon"
    default="http://yoursite.com/yourimage.jpg"
 
 
### Variables

The following single variables are available inside the `{{ gravatamatic:avatar }}` tag pair. 

- `{{ email }}`
- `{{ avatar_url }}`
- `{{ width }}`
- `{{ height }}` 

## Single Tag: *quicky*

**Example Tag:**

	{{ gravatamatic:quicky email="{{ contact_email }}" }}



### Parameters

#### Avatar `email`

Email address of the gravatar you wish to request.

    email="steven@digitaldleivery.co.uk"

 
#### Avatar `size`

The width of the gravatar you need. All gravatars are square, so this is also the height. Any integer in range 1-2048. Defaults to 80.

    size="200"

 
#### Avatar `rating`

Gravatar have a handy rating systems. You'll likely want the default 'suitable for all'. For other options check the list at https://en.gravatar.com/site/implement/images/

    rating="r"

#### Avatar `default`

The default option steps in when there isn't a Gravatar available for an email address. You can pass in a full URL or you can pass in a code indicating the type of generated avatar you'd like to see. For the up to date list of options check the list at https://en.gravatar.com/site/implement/images/

    default="identicon"
    default="http://yoursite.com/yourimage.jpg"
 

### Variables

This single tag simply returns an img tag.