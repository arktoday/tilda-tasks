<?php

/**
 * Returns ip from $_SERVER['REMOTE_ADDR']
 *
 * @return string
 */
function getIp(): string {
    $ip = @$_SERVER['REMOTE_ADDR'];

    if (!$ip) {
        exit("Невозможно получить ip");
    }

    return $ip;
}

/**
 * Returns city by IP from ipinfo.io
 *
 * @return string
 */
function getCityByIp(): string {
    $ip = getIp();
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));

    if ($details) {
        return $details->city;
    }

    exit("Не удалось получить город");
}

/**
 * Returns phone number by city
 *
 * @return string
 */
function getPhoneNum(): string {
    $citiesPhoneNums = [
        "Moscow" => '8-800-123-12-12',
        "Tula" => '8-800-234-12-12',
        "Kazan" => '8-800-234-12-99',
    ];
    $city = getCityByIp();

    return ($citiesPhoneNums[$city]) ?? "Не удалось получить номер телефона";
}

getPhoneNum();





