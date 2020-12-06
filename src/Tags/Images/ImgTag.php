<?php

namespace HtmlBuilder\Tags\Images;

use HtmlBuilder\HtmlElement;

class ImgTag extends HtmlElement
{
    protected $requiresClosingTag = false;

    protected $tag = 'img';
}