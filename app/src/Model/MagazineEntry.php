<?php

namespace sciquest\model;

use sciquest\model\SciQuestEntry;

class MagazineEntry extends SciQuestEntry
{
    private static $table_name= 'MagazineEntry';

    private static $db=[
        'Title' => 'Varchar(255)',
//        'Pages' => 'Int',
//        'PageRangeStart' => 'Int',
//        'OpenAccess' => 'Boolean',
//        'ArticleLinks' => 'Enum(1,2,1)',
//        'ISSN' => 'Text',
//        'ISBN' => 'Text',
//        'DOI' => 'Text',
//        'AnimalType' => 'Enum(Cat, Dog, Cat)',
//        'ExternalURL' => 'Enum(url1,url2,url1)',
//        'DateAvailable' => 'Datetime',
//        'Published' => 'Boolean'
    ];

    private static $has_many = [
        'Article' => Articles::class
    ];

}
