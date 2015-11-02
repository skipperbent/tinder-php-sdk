<?php
require '../vendor/autoload.php';

$tinder = new \Pecee\Http\Service\Tinder('654639692', 'CAAGm0PX4ZCpsBABa2ANVTLhXrpDjzbxxu8zGyanB8pLZBiPNSDRxFIQDKhLcC8DxTfoZCtZAI0I9XzIVBs51hywNwikZCNHkrrtDcq9rZCiiSBCsdshv6ISr0HkY3vQeu43D3CY1YZBauFeptZClaUElwUMl2OqPsiXgAKAmS1G04ChZBSQ7F2IC6EnWvkw8jS3H3gQib3ZAlOm6PJIeZBOWA0H');

var_dump($tinder->getUser());