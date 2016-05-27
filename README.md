# tinder-php-sdk
Easy to use PHP SDK for accessing Tinder data.

## Installation
Add the latest version of tinder-php-sdk to your ```composer.json```

```json
{
    "require": {
        "pecee/tinder-sdk": "1.*"
    }
}
```

## Examples

This section contains basic examples on how to use the SDK.

### Getting your Facebook token
The easiest way to obtain your Facebook token is to visit this link:

**Note:** Your Facebook token will be displayed shortly in the address bar, but hurry up copying it, as the page redirects within a couple of seconds.

[Link here](https://www.facebook.com/dialog/oauth?client_id=464891386855067&redirect_uri=https://www.facebook.com/connect/login_success.html&scope=basic_info,email,public_profile,user_about_me,user_activities,user_birthday,user_education_history,user_friends,user_interests,user_likes,user_location,user_photos,user_relationship_details&response_type=token)

### Authentication

```php
$tinder = new \Pecee\Http\Service\Tinder($fbUserId, $fbToken);
```

### Get user info

```php
$tinder->getUser();
```

### Send message

```php
$tinder->sendMessage($userId, $message);
```

### Report user

```php
$tinder->reportUser($userId);
```

### Update profile

```php
$tinder->updateProfile(array('age_filter_min' => 26, 'gender' => 1, 'age_filter_max' => 18, 'distance_filter' => 14);
```

### Update location

```php
$tinder->updateLocation($lat, $lon);
```

### Like user

```php
$tinder->like($userId);
```

### Pass/dislike user

```php
$tinder->pass($userId);
```

### Get updates

```php
$tinder->updates();
```

### Get recommendations 

```php
$tinder->recommendations();
```

## The MIT License (MIT)

Copyright (c) 2015 Simon Sessingø / tinder-php-sdk

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
