<?php

namespace Application\Form;

use Zend\Form\Form;
use Application\Form\Element\TestRadio;

class RadioForm extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'input_radio',
            'type' => TestRadio::class
        ]);
    }
}