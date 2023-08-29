<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Instagram extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $instagram = new FieldsBuilder('instagram');

        $instagram
            ->setLocation('post_type', '==', 'post');

        $instagram
        ->addUrl('Instagram URL', [
            'label' => 'Instagram',
        
        'placeholder' => 'Enter Instagram URL'
        ]);

        return $instagram->build();
    }
}
