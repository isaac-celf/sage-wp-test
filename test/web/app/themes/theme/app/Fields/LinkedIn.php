<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class LinkedIn extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $linkedIn = new FieldsBuilder('linked_in');

        $linkedIn
            ->setLocation('post_type', '==', 'post');

        $linkedIn
        ->addUrl('LinkedIn URL', [
            'label' => 'LinkedIn',
        
        'placeholder' => 'Enter LinkedIn URL'
        ]);

        return $linkedIn->build();
    }
}
