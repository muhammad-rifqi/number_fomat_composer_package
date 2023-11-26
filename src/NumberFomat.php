<?php
 
namespace NumberFormatPackage;
 
class NumberFormat
{
    public static function toRupiah($number)
    {
        return number_format($number,2,',','.');
    }
} 