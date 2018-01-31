<?php

namespace khvalov\TwbsToggleButtons;

class TwbsToggleButtonsAssets extends \yii\web\AssetBundle
{
   

    public $sourcePath = '@vendor/components/widgets/InputmaskMultiWidget/assets';

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
       
      
        $this->js[] = 'js/jquery.twbs-toggle-buttons.min.js';
        
        parent::__construct($config);
    }

}
