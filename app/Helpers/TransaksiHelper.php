<?php

if (!function_exists('hitung_biaya_admin')) {

    function hitung_biaya_admin($subtotal)
    {
        if ($subtotal <= 20000000) {
            return $subtotal * 0.005;
        }

        return $subtotal * 0.0075;
    }
}
    

if (!function_exists('hitung_diskon_kupon')) {

    function hitung_diskon_kupon($subtotal, $kupon)
    {
        $kupon = strtoupper(trim($kupon));

        switch ($kupon) {
            case 'HEMAT':
                return $subtotal * 0.15;

            case 'SUPER':
                return $subtotal * 0.20;

            default:
                return 0;
        }
    }
}

if (!function_exists('hitung_cashback')) {

    function hitung_cashback($subtotal)
    {
        if ($subtotal > 10000000) {
            return $subtotal * 0.02;
        }

        return 0;
    }
}