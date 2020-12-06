<?php

namespace HtmlBuilder\Tags\Basic;

use HtmlBuilder\HtmlElement;

class BrTag extends HtmlElement
{
    protected $tag = 'br';

    protected $requiresClosingTag = false;
}