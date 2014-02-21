<?php
// $Id$

$menu = array();

// sample for English  support

$menu[] = array(
                'link'      => 'http://www.xoops.org',
                'title'     => 'XOOPS官方网站',
                'absolute'  => 1,
                'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
                );

$menu[] = array(
                'link'      => 'http://xoops.tn.edu.tw',
                'title'     => 'XOOPS 正体中文延伸计画',
                'absolute'  => 1,
                'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
                );

$menu[] = array(
                'link'      => 'http://tad0616.net',
                'title'     => 'Tad 教材网',
                'absolute'  => 1,
                'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
                );


return $menu;
?>
