<?php
namespace khvalov\twbstogglebuttonswidget;

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

        TwbsToggleButtonsAssets::register($this->getView());

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
