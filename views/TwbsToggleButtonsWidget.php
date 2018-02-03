<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
// [BEGIN] - Map input widget container

echo Html::beginTag(
    'div',
    [
        'class' => 'twbs-toggle-buttons-widget',
        'data-toggle'=>'buttons',
        'id' => $id,
    ]
);

if(empty($model) && empty($attribute)){
    $fired=false;
    foreach($items as $item){

       if($item==$value){
            $active=' active';
            $fired=true;
       } else {
            $active='';
       }
        echo Html::beginTag(
            'div',
            [
                'class'=>'btn'.$active,
                'role'=>'button'
            ]
        );
        echo Html::radio(
            $name,
            false,
            ['value'=>$item]
        );
        echo $item;
        echo Html::endTag('div');
    }

        echo Html::beginTag(
            'div',
            [
                'class'=>$fired?'btn':'btn active',
                'role'=>'button'
            ]
        );
        echo Html::radio(
            $name,
            false,
            ['value'=>'']
        );
        echo "<i class='fa fa-times'></i> None";
        echo Html::endTag('div');

} else { 

    //This section is not done yet!!!

    echo '<label class="control-label" for="'.$inputId.'">'.$model->getAttributeLabel($attribute).'</label>';
    echo Html::activeradioList (
        $model,
        $attribute,
        [
            'id'=>$inputId,
            'class' => 'form-control twbs-toggle-buttons',
            'role'=>'button'
        ]
    );
    echo '<div class="help-block"></div>';
}



// [END] - Map input widget container
echo Html::endTag('div');

$this->registerJs("
    $('.twbs-toggle-buttons-widget').twbsToggleButtons({
        classActive: 'btn-primary'
    }
);
", View::POS_END);