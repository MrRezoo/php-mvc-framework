<?php


namespace app\core\form;


use app\core\Model;

class SelectField extends BaseField
{
    public array $arr_attributes = [];
    public array $arr_values = [];

    /**
     * Field constructor.
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute, array $array_attributes,array $array_values)
    {
        parent::__construct($model, $attribute);
        $this->arr_attributes = $array_attributes;
        $this->arr_values = $array_values;
    }

    public function renderInput(): string
    {

        return sprintf('
        <div class="input-group mb-3">
        <select class="form-select" id="inputGroupSelect02">
        <option selected>Choose...</option>
        <option value="%s">%s</option>
        <option value="%s">%s</option>
         </select>
        <label class="input-group-text" for="inputGroupSelect02">%s</label>
        </div>',
            $this->arr_values[0],$this->arr_attributes[0],
            $this->arr_values[1],$this->arr_attributes[1],
            $this->attribute,
        );
    }
}