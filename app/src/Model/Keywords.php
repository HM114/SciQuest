<?php


namespace sciquest\model;


use SilverStripe\ORM\DataObject;

class Keywords extends DataObject
{
    private static $table_name= 'sciquest_keywords';

    private static $has_many=[
        'Article' => Articles::class
    ];
}
