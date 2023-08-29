<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Facebook extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $facebook = new FieldsBuilder('facebook');

        $facebook
            ->setLocation('post_type', '==', 'post');

        $facebook
        ->addUrl('Facebook URL', [
            'label' => 'Facebook',
        
        'placeholder' => 'Enter Facebook URL'
        ]);

        return $facebook->build();
    }
}
