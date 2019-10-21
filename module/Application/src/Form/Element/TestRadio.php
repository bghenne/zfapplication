<?php

namespace Application\Form\Element;

use Zend\Form\Element\Radio;

class TestRadio extends Radio
{
    protected $attributes = [
        'type' => 'radio',
        'id' => 'test',
        'class' => 'toto'
    ];

    protected $value = false;

    protected $valueOptions = [
        true => 'Oui',
        false => 'Non'
    ];
}