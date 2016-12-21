<?php

namespace vlassiuk\owlcarousel2;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Description of Owlcarousel2Widget
 *
 * @author vlas
 */
class Owlcarousel2 extends Widget
{

    /**
     *
     * @var array 
     */
    public $options = [];

    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        echo Html::beginTag('div', $this->options);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::endTag('div');
        $this->registerClientScript();
    }

    /**
     *
     */
    protected function registerClientScript()
    {
//        $id = $this->options['id'];
        $view = $this->getView();
        Owlcarousel2Asset::register($view);
        $options = Json::encode($this->clientOptions);

        $view->registerJs("jQuery('#" . $this->options['id'] . "').owlCarousel($options)");
    }

}
