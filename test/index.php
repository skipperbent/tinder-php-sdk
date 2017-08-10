<?php
require '../vendor/autoload.php';

$tinder = new \Pecee\Http\Service\Tinder('654639692', 'EAAGm0PX4ZCpsBADXVK3ZBLiwmcV9Jc1gplvzNYpDZBrdaowwzgWQPX7mzGDuedufNbX5m3VCLGkdhiAQ37ye0kNohWIHuqox7zJbnOZB2ByXevNsFMatG8TXcLhAUXZAL94Pj31ut81XftZBwlgV7dUYGyPuus7upZATTYyUry0oAuFkoshIRhkr0vYhEfbkknaTLqgoxZAcpsXVoZAI0cuS3eHh7LaxqEgryGsU9HaUjJPp6BO3VnOUZC3AYXpC1Iw3oZD');

var_dump($tinder->getUser());