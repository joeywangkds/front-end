<?php


class TextInput
{
    public $originText;
    public $newStr;

    public function add($text)
    {
        $this->originText = $this->originText . $text;
        $this->newStr = $this->originText;
        // echo $text;

    }
    public function getValue()
    {
        return $this->newStr;
    }
}

class NumericInput extends TextInput
{
    public function add($text){

       $this->newStr = preg_replace("/[^0-9]/", "", $this->originText . $text);
    }
}





$input = new TextInput();
$input->add('51');
$input->add('a');
$input->add('0');
echo $input->getValue();


