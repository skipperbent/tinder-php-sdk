# Tinder PHP SDK
Easy to use PHP SDK for accessing Tinder data.

**NOTE:** 
This SDK is unofficial and based on an unofficial API with no or minimal documentation. Please use with caution as functionality might break or be completely removed each time Tinder changes it's API.

WARNING: NOT FOR PRODUCTION USE!

## Installation
Add the latest version of tinder-php-sdk to your project by running

```json
composer require pecee/tinder-sdk
```

## Examples

This section contains basic examples on how to use the SDK.

### Getting your Facebook token

The Tinder PHP-SDK requires a valid authorizes Facebook access-token in order to communicate to the Tinder SDK.

Please follow the steps below to obtain your Facebook access-token.

1. Navigate to the following URL.

[https://www.facebook.com/v2.6/dialog/oauth?redirect_uri=fb464891386855067%3A%2F%2Fauthorize%2F&state=%7B%22challenge%22%3A%22q1WMwhvSfbWHvd8xz5PT6lk6eoA%253D%22%2C%220_auth_logger_id%22%3A%2254783C22-558A-4E54-A1EE-BB9E357CC11F%22%2C%22com.facebook.sdk_client_state%22%3Atrue%2C%223_method%22%3A%22sfvc_auth%22%7D&scope=user_birthday%2Cuser_photos%2Cuser_education_history%2Cemail%2Cuser_relationship_details%2Cuser_friends%2Cuser_work_history%2Cuser_likes&response_type=token%2Csigned_request&default_audience=friends&return_scopes=true&auth_type=rerequest&client_id=464891386855067&ret=login&sdk=ios&logger_id=54783C22-558A-4E54-A1EE-BB9E357CC11F#_=](https://www.facebook.com/v2.6/dialog/oauth?redirect_uri=fb464891386855067%3A%2F%2Fauthorize%2F&state=%7B%22challenge%22%3A%22q1WMwhvSfbWHvd8xz5PT6lk6eoA%253D%22%2C%220_auth_logger_id%22%3A%2254783C22-558A-4E54-A1EE-BB9E357CC11F%22%2C%22com.facebook.sdk_client_state%22%3Atrue%2C%223_method%22%3A%22sfvc_auth%22%7D&scope=user_birthday%2Cuser_photos%2Cuser_education_history%2Cemail%2Cuser_relationship_details%2Cuser_friends%2Cuser_work_history%2Cuser_likes&response_type=token%2Csigned_request&default_audience=friends&return_scopes=true&auth_type=rerequest&client_id=464891386855067&ret=login&sdk=ios&logger_id=54783C22-558A-4E54-A1EE-BB9E357CC11F#_=)

2. Before clicking "OK" open Chrome Developer Tools and click on the "Network" tab. Make sure to filter by XHR requests.

3. Click "OK" to authorize Tinder in the Facebook dialog.

4. Find your access_token like shown in the screenshot below:

![Facebook Access Token](access_token_1.png?raw=true)

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

Get users and groups (Tinder Social) recommendations.

```php
$tinder->recommendations();
```

### Get friends

View friends from Facebook that have a Tinder profile.

```php
$tinder->friends();
```

### Get Tinder user by id

```php
$tinder->user($userId);
```

## The MIT License (MIT)

Copyright (c) 2016 Simon Sessingø / tinder-php-sdk

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
