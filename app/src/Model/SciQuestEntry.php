<?php

namespace sciquest\model;

use SilverStripe\ORM\DataObject;

class SciQuestEntry extends DataObject
{
    private static $table_name='SciQuestEntry';

    private static $db=[
        'Title' => 'Varchar(255)'
    ];

}
