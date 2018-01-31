<?php
namespace khvalov\TwbsToggleButtonsWidget;

use Yii;

class TwbsToggleButtonsWidget extends \yii\widgets\InputWidget
{
    public $options;

    public function init(){
        parent::init();
    }

    public function run()
    {
        parent::run();

        TwbsToggleButtonsWidgetAssets::register($this->getView());

        return $this->render(
            'TwbsToggleButtonsWidget',
            [
                'id' => $this->getId(),
                'name' => $this->name,
                'value' => $this->value,
                'options' => $this->options,
                'model' =>$this->model,
                'attribute' =>$this->attribute
            ]
        );
    }

}
