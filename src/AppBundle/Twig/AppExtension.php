<?php
/**
 * Created by PhpStorm.
 * User: aleks
 * Date: 29.11.17
 * Time: 22:16
 */

namespace AppBundle\Twig;


class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('rand', array($this, 'randFilter')),
        );
    }

    public function randFilter($str)
    {
        $str = str_shuffle($str);

        return $str;
    }
}