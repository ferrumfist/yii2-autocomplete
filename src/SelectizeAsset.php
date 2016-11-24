<?php
/**
 * @link https://github.com/2amigos/yii2-selectize-widget
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace ferrumfist\yii2autocomplete;

use yii\web\AssetBundle;

/**
 * SelectizeAsset
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class SelectizeAsset extends AssetBundle
{
    public $sourcePath = '@ferrumfist\yii2autocomplete/assets';
    public $css = [
        'css/selectize.bootstrap3.css',
    ];
    public $js = [
        'js/standalone/selectize.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}
