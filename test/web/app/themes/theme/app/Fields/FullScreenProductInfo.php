<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FullScreenProductInfo extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $fullScreenProductInfo = new FieldsBuilder('full_screen_product_info', ['position' => 'side']);

        $fullScreenProductInfo
            ->setLocation('post_type', '==', 'product');

        return $fullScreenProductInfo->build();
    }
}
