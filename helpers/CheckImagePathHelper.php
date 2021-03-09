<?php


namespace app\helpers;


/**
 * NOTE:
 *
 * Helper for to determine whether a picture exists or not
 *
 * @package app\helpers
 */
class CheckImagePathHelper
{
    public static function CheckImagePath($image, $pathGeneral, $pathChapter)
    {
        $imageName = ($image == null) ? 'none.jpg' : $image;
        $img = (file_exists($pathGeneral . $pathChapter . "{$imageName}")) ? $imageName : 'none.jpg';

        return $img;
    }
}