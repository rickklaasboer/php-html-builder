<?php

namespace HtmlBuilder\Tags\Links;

use HtmlBuilder\HtmlElement;

class LinkTag extends HtmlElement
{
    protected $requiresClosingTag = false;

    protected $tag = 'link';
}