<?php

namespace HtmlBuilder\Tags\Basic;

use HtmlBuilder\HtmlElement;

class BodyTag extends HtmlElement
{
    protected $requiresClosingTag = false;

    protected $tag = 'body';
}