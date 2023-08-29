<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ProductInfo extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $productInfo = new FieldsBuilder('product_info', ['position' => 'side']);

        $productInfo
            ->setLocation('post_type', '==', 'product');

            $productInfo->addText('product_price', ['required' => 1]);

        return $productInfo->build();
    }
}
