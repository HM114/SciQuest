<?php


namespace sciquest\model;


use SilverStripe\ORM\DataObject;

class Articles extends DataObject {

    private static $table_name= 'sciquest_articles';

    private static $db=[
        'Title' => 'Varchar(255)',
        'Pages' => 'Int',
        'PageRangeStart' => 'Int',
        'OpenAccess' => 'Boolean',
        'ArticleLinks' => "Enum('1','1')",
        'ISSN' => 'Text',
        'ISBN' => 'Text',
        'DOI' => 'Text',
        'AnimalType' => "Enum('Cat', 'Cat')",
        'ExternalURL' => "Enum('url1','url1')",
        'DateAvailable' => 'Datetime',
        'Published' => 'Boolean'
    ];

    private static $has_many=[
        'MagazineEntry' => MagazineEntry::class
    ];

    private static $has_one=[
        'Authors' => Authors::class,
        'Attachments' => Attachments::class,
        'Keywords' => Keywords::class
    ];
}
