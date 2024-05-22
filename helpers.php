<?php

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

function asNumber($num, $decimals = 2, $decimal_separator = '.', $thousands_separator = '')
{
    return number_format($num, $decimals, $decimal_separator, $thousands_separator);
}

function userHasRole($roles, $userId = false)
{
    if (!$userId && Auth::guest()) {
        return false;
    }
    $user = get_user($userId);
    if (!$user) {
        return false;
    }
    if (!is_array($roles)) {
        $roles = [$roles];
    }

    return $user->hasAnyRole($roles);
}

function userHasRoleByToken($roles, $token = false)
{
    if (!$token && Auth::guest()) {
        return false;
    }
    $user = getUserByToken($token);

    if (!$user) {
        return false;
    }

    if (!is_array($roles)) {
        $roles = [$roles];
    }
    return $user->hasAnyRole($roles);
}

/**
 * @return User|Authenticatable|boolean
 */
function get_user($userId = false)
{
    if (!$userId && Auth::guest()) {
        return false;
    }
    return $userId ? User::whereId($userId)->first() : Auth::user();
}

function getUserByToken($token = false)
{
    if (!$token && Auth::guest()) {
        return false;
    }
    return $token ? User::whereLoginToken($token)->first() : Auth::user();
}

function camelToTitle($camelStr)
{
    $intermediate = preg_replace('/(?!^)([[:upper:]][[:lower:]]+)/',
        ' $0',
        $camelStr);
    $titleStr = preg_replace('/(?!^)([[:lower:]])([[:upper:]])/',
        '$1 $2',
        $intermediate);

    return $titleStr;
}

function getBaseUrl(): string
{
    return request()->getSchemeAndHttpHost() . '/';
}

//function getBaseUrl(): string
//{
//    return 'http://localhost/hi/';
//}
