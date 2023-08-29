<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Address extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $address = new FieldsBuilder('address');

        $address
            ->setLocation('post_type', '==', 'post');

        $address
            ->addTextarea('company_address');

        return $address->build();
    }
}
