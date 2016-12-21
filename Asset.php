<?php

namespace vlassiuk\owlcarousel2;

use \yii\web\AssetBundle;

/**
 * Description of Owlcarousel2Asset
 *
 * @author vlas
 */
class Asset extends AssetBundle
{

    public $sourcePath = '@app/components/owlcarousel2/dist';

    public $css = [
        'assets/owl.carousel.min.css',
    ];

    public $js = [
//        'owl.carousel.min.js',
        'owl.carousel.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
