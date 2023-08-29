<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class TeamInfo extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $teamInfo = new FieldsBuilder('team_info', ['position' => 'side']);


        $teamInfo
            ->setLocation('post_type', '==', 'members');

        $teamInfo->addText('team_position');
        

        return $teamInfo->build();
    }
}
