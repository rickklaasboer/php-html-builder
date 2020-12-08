<?php

namespace HtmlBuilder;

use Exception;

class HtmlElement
{
    /**
     * The HTML tag
     *
     * @var null
     */
    protected $tag = null;

    /**
     * If the HTML tag requires closing tag
     *
     * @var bool
     */
    protected $requiresClosingTag = true;

    /**
     * Content
     *
     * @var string
     */
    protected $content = '';

    /**
     * Children elements
     *
     * @var null|array
     */
    protected $children = null;

    /**
     * HTML attributes
     *
     * @var null
     */
    protected $attributes = [];

    /**
     * Get the opening tag
     *
     * @return string|null
     * @throws Exception
     */
    public function getOpenTag()
    {
        if (is_null($this->tag)) {
            $className = $this->getClassName();
            throw new Exception("$className did not implement tag");
        }

        if (!$this->requiresClosingTag) {
            return '<' . $this->getTag() . ' ' . $this->getAttributes() . '/>';
        }

        return '<' . $this->getTag() . ' ' . $this->getAttributes() . '>';
    }

    /**
     * Get the closing tag
     *
     * @return string|null
     * @throws Exception
     */
    public function getCloseTag()
    {
        if (is_null($this->tag)) {
            $className = $this->getClassName();
            throw new Exception("$className did not implement tag");
        }

        if ($this->requiresClosingTag) {
            return '</' . $this->getTag() . '>';
        }

        return '';
    }

    protected function getTag()
    {
        return $this->tag;
    }

    /**
     * Get the element children
     *
     * @return HtmlElement[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set element content
     *
     * @param string $content
     * @return HtmlElement
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the tag content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set element children
     *
     * @param array $children
     * @return HtmlElement
     */
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Set HTML attributes
     *
     * @param $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get HTML attributes string
     *
     * @return string
     */
    public function getAttributes()
    {
        $string = '';

        foreach ($this->attributes as $key => $value) {
            $string .= "$key=\"$value\" ";
        }

        return $string;
    }

    /**
     * Get the class's name
     *
     * @return false|string
     */
    protected function getClassName()
    {
        return get_class($this);
    }
}