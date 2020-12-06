<?php

namespace HtmlBuilder\Tags\Form;

use HtmlBuilder\HtmlElement;

class InputTag extends HtmlElement
{
    protected $tag = 'input';

    protected $requiresClosingTag = false;
}