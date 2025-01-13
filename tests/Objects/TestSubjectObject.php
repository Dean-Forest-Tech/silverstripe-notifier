<?php

namespace DFT\SilverStripe\Notifier\Tests\Objects;

use DFT\SilverStripe\Notifier\DataObjectExtension;
use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class TestSubjectObject extends DataObject implements TestOnly
{
    private static $db = [
        'Name' => 'Varchar'
    ];

    private static $extensions = [
        DataObjectExtension::class
    ];
}
