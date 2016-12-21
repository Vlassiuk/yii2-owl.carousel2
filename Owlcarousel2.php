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
     * @var string the tag to use to render the button
     */
    public $tagName = 'div';

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        echo Html::beginTag($this->tagName, $this->options);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::endTag($this->tagName);
        $this->registerClientScript();
    }

    /**
     *
     */
    protected function registerClientScript()
    {
        $view = $this->getView();
        Asset::register($view);
        $options = Json::encode($this->clientOptions);

        $view->registerJs("jQuery('#" . $this->options['id'] . "').owlCarousel($options)");
    }

}
