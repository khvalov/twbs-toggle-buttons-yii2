<?php

namespace khvalov\twbstogglebuttonswidget;

class TwbsToggleButtonsWidgetAssets extends \yii\web\AssetBundle
{
   

    public $sourcePath = '@vendor/prokki/twbs-toggle-buttons/dist';

    public $depends =
    [
        'yii\web\JqueryAsset',
    ];

    public $jsOptions =
    [
        'position' => \yii\web\View::POS_END,
    ];

    public function __construct($config = [])
    {
       
        $this->js[] = 'jquery.twbs-toggle-buttons.min.js';
        
        parent::__construct($config);
    }

}
