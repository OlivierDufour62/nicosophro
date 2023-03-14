<?php
namespace Core;

class Form
{
    private $formCode = '';

    public function create()
    {
        return $this->formCode;
    }

    public static function validate(array $form, array $champs)
    {
        foreach($champs as $champ){
           
            if(!isset($form[$champ]) || empty($form[$champ])){
               
                return false;
            }
        }
        return true;
    }


    private function addAttributes(array $attributes): string
    {

        $str = '';

        $attr = ['checked', 'disabled', 'readonly', 'multiple', 'required', 'autofocus', 'novalidate', 'formnovalidate'];

        foreach($attributes as $attribute => $value){

            if(in_array($attribute, $attr) && $value == true){
                $str .= " $attribute";

            }else{
                $str .= " $attribute=\"$value\"";
            }
        }

        return $str;
    }

    public function startForm(string $method = 'post', string $action = '#', array $attributs = []): self
    {
        $this->formCode .= "<form action='$action' method='$method'";

        $this->formCode .= $attributs ? $this->addAttributes($attributs).'>' : '>';

        return $this;
    }

    public function endForm():self
    {
        $this->formCode .= '</form>';
        return $this;
    }

    public function addLabelFor(string $for, string $texte, array $attributs = []):self
    {

        $this->formCode .= "<label for='$for'";

        $this->formCode .= $attributs ? $this->addAttributes($attributs) : '';

        $this->formCode .= ">$texte</label>";

        return $this;
    }

    public function addInput(string $type, string $name, array $attributes = [], array $class = []):self
    {
        implode(' ', $class);
        $this->formCode .= "<input type='$type' name='$name' class='$class'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes).'>' : '>';

        return $this;
    }


    public function addTextarea(string $name, string $value = '', array $attributes = [], array $class = []):self
    {
        implode(' ', $class);

        $this->formCode .= "<textarea name='$name' class='$class'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) : '';

        $this->formCode .= ">$value</textarea>";

        return $this;
    }

    public function addSelect(string $name, array $options, array $attributes = []):self
    {
        $this->formCode .= "<select name='$name'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes).'>' : '>';

        foreach($options as $value => $text){
            $this->formCode .= "<option value=\"$value\">$text</option>";
        }

        $this->formCode .= '</select>';

        return $this;
    }

    public function addButton(string $text, array $attributes = []):self
    {
        $this->formCode .= '<button ';

        $this->formCode .= $attributes ? $this->addAttributes($attributes) : '';

        $this->formCode .= ">$text</button>";

        return $this;
    }
}