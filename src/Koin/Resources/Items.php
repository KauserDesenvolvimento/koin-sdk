<?php

namespace Koin\Resources;

class Items
{
    public $items;

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
