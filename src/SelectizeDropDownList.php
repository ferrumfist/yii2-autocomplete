<?php

namespace ferrumfist\yii2autocomplete;

use yii\helpers\Html;

/**
 * SelectizeDropDownList
 */
class SelectizeDropDownList extends InputWidget
{
    /**
     * @var array
     */
    public $items = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            //echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
            echo Html::activeInput('text', $this->model, $this->attribute, $this->options);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }

        parent::run();
    }
}
