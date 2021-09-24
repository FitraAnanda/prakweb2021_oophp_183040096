<?php

class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        return "Halo " . self::$angka++ . " kali.<br>";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo ContohStatic::halo();
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
echo ContohStatic::halo();
echo ContohStatic::halo();
