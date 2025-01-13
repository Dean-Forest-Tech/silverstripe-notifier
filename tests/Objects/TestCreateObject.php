<?php

namespace DFT\SilverStripe\Notifier\Tests\Objects;

use DFT\SilverStripe\Notifier\DataObjectExtension;
use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class TestCreateObject extends DataObject implements TestOnly
{
    private static $extensions = [
        DataObjectExtension::class
    ];
}