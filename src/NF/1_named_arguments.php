<?php
// PHP 7.4-
setcookie(
    "channel",
    "zizoujab",
    0,
    '/',
    'youtube.com',
    true,
    true
);











// PHP 8.0+
setcookie(
    name: "channel",
    value: "zizoujab",
    path: '/',
    domain: 'youtube.com',
    secure: true,
    httponly: true
);








setcookie(
    "channel",
    "zizoujab",
    expires_or_options: 0,
    path: '/',
    domain: 'youtube.com',
    secure: true,
    httponly: true
);
//
setcookie(
    expires_or_options: 0,
    path: '/',
    domain: 'youtube.com',
    secure: true,
    httponly: true,
    "channel",
    "zizoujab",
);
// => will generate an error as we are using named params before positional params



enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}