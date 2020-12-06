<?php

namespace HtmlBuilder;

use Exception;
use HtmlBuilder\Traits\CollectsHtmlTags;

class HtmlBuilder
{
    use CollectsHtmlTags;

    /**
     * Collection of tags
     *
     * @var array
     */
    protected $collection = [];

    /**
     * Create a HTML element
     *
     * @param $identifier
     * @return HtmlElement
     * @throws Exception
     */
    public function createElement($identifier)
    {
        if (array_key_exists($identifier, $this->tagDefinitions)) {
            return new $this->tagDefinitions[$identifier];
        }

        throw new Exception("Tag $identifier not found");
    }

    /**
     * Create a Collection
     *
     * @param $identifier
     * @return mixed
     * @throws Exception
     */
    public function createCollection($identifier)
    {
        if (array_key_exists($identifier, $this->tagDefinitions)) {
            return $this->collection[] = new $this->tagDefinitions[$identifier];
        }

        throw new Exception("Tag $identifier not found");
    }

    /**
     * Get tag collection
     *
     * @return array
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Recusion magic
     *
     * @param $item HtmlElement|HtmlElement[]
     * @param $callback
     * @throws Exception
     */
    public function recurse($item, $callback)
    {
        if (is_array($item->getChildren())) {
            print($item->getOpenTag());
            foreach ($item->getChildren() as $child) {
                $this->recurse($child, $callback);
            }
            print($item->getCloseTag());
        } else {
            call_user_func($callback, $item);
        }
    }

    public function render()
    {
        /** @var HtmlElement $element */
        foreach ($this->getCollection() as $element) {
            $this->recurse($element, function ($child) {
                print($child->getOpenTag());
                print($child->getContent());
                print($child->getCloseTag());
            });
        }
    }
}