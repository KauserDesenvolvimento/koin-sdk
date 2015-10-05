<?php

namespace Koin\Resources;

use stdClass;

class Items
{
    public $items;

    /**
     * Initialize a new instance.
     */
    public function initialize()
    {
        $this->data = new stdClass();
    }

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($ref, $desc, $cat, $qtd, $price, $attr)
    {
        $this->items[] = array(
            "Reference"   => $ref,
            "Description" => $desc,
            "Category"    => $cat,
            "Quantity"    => $qtd,
            "Price"       => $price,
            "Attributes"  => $attr,
        );

        return $this;
    }
}
