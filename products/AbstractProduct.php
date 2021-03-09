<?php

namespace app\products;


/**
 * @note
 * classes for output products from db
 * all data into the table - serialize'd in field of description
 */
abstract class AbstractProduct
{
    abstract public function __toString();

    public function __construct(array $data = [])
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                /**
                 * @note
                 * $this - is current class
                 *
                 * if the current class contains a property,
                 * equal to the name that is contained in the key
                 */
                if (!property_exists($this, $key)) {
                    continue;
                }

                $this->{$key} = $value;
            }
        }
    }
}
