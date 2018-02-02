<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
// Register asset bundle
//$path=InputmaskMultiAssets::register($this);

$inputId=uniqid();
$placeholder=isset($options['placeholder'])?$options['placeholder']:'';

// [BEGIN] - Map input widget container
echo Html::beginTag(
    'div',
    [
        'class' => 'twbs-toggle-buttons-widget',
        'id' => $id,
    ]
);

if(empty($model) && empty($attribute)){
    echo Html::Input(
        'text',
        $name,
        $value,
        [
            'id'=>$inputId,
            'class' => 'form-control twbs-toggle-buttons',
            'placeholder'=>$placeholder
        ]
    );
} else { 
    echo '<label class="control-label" for="'.$inputId.'">'.$model->getAttributeLabel($attribute).'</label>';
    echo Html::activeTextInput(
        $model,
        $attribute,
        [
            'id'=>$inputId,
            'class' => 'form-control twbs-toggle-buttons',
            'placeholder'=>$placeholder
        ]
    );
    echo '<div class="help-block"></div>';
}

// [END] - Map input widget container
echo Html::endTag('div');

$this->registerJs("

    $('#".$inputId."').inputmasks(maskOpts);
", View::POS_END);

