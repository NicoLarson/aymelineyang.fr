<?php

class ContactType
{
    private $surround = 'p';

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    private function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function input($label, $type, $name)
    {
        return  $this->surround(
            '<label for="' . $name . '">' . $label . '*' . '</label>
             <input type="' . $type . '" name="' . $name . '" id="' . $name . '" required>'
        );
    }

    public function textArea($label, $name, $cols = 30, $rows = 10)
    {
        return  $this->surround(
            '<label for="' . $name . '">' . $label . '*</label>
             <textarea name="' . $name . '" id="' . $name . '" cols="' . $cols . '" rows="' . $rows . '" required></textarea>'
        );
    }

    public function submit()
    {
        return '<input type="submit" value="Envoyer">';
    }
}
