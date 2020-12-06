<?php

namespace HtmlBuilder\Tags\Basic;

use HtmlBuilder\HtmlElement;

class HrTag extends HtmlElement
{
    protected $requiresClosingTag = false;

    protected $tag = 'hr';
}