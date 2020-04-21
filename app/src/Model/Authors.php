<?php


namespace sciquest\model;


use SilverStripe\ORM\DataObject;

class Authors extends DataObject
{
    private static $table_name= 'sciquest_authors';

    private static $has_many=[
        'Article' => Articles::class
    ];
}
