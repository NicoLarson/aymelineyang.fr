<?php

class ContactType
{
    private array $data;

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    private function getValue($value)
    {
        return isset($value) ? $this->data[$value] : null;
    }

    public function input($name)
    {
        return '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">';
    }

    public function submit()
    {
        return '<input type="submit" value="Envoyer">';
    }
}
