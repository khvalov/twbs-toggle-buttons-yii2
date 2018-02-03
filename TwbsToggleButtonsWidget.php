<?php
namespace khvalov\twbstogglebuttonswidget;

use Yii;

class TwbsToggleButtonsWidget extends \yii\widgets\InputWidget
{
    public $options;
    public $items;

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
                'items' =>$this->items,
                'options' => $this->options,
                'model' =>$this->model,
                'attribute' =>$this->attribute
            ]
        );
    }

}
