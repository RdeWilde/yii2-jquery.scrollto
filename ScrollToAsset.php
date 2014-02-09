<?php

namespace yii\jQueryScrollTo;

use yii\web\AssetBundle;

/**
 * @author Gusev Ilya <mail@igusev.ru>
 * @since 2.0
 */
class ScrollToAsset extends AssetBundle
{
    public $sourcePath = '@vendor/jQuery.scrollTo/jQuery.scrollTo';
    public $js = [
        'jquery.scrollTo.min.js',
    ];
}