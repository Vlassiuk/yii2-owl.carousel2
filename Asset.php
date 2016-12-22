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

    public $sourcePath = '@bower/owl.carousel/dist';

    public $css = [
        'assets/owl.carousel.min.css',
    ];

    public $js = [
        'owl.carousel.min.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        if (YII_DEBUG) {
            $this->css = ['assets/owl.carousel.css'];
            $this->js = ['owl.carousel.js'];
        }
        parent::init();
    }

}
