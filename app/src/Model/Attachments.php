<?php


namespace sciquest\model;


use SilverStripe\ORM\DataObject;

class Attachments extends DataObject
{
    private static $table_name= 'sciquest_attachments';

    private static $has_many=[
        'Article' => Articles::class
    ];
}
