<?php
namespace DistrictWeb\VarnishCleanerBundle\Event;

use Symfony\Component\EventDispatcher\Event;

abstract class CollectorEvent extends Event
{
    protected $urls = array();

    public function add($url)
    {
        $this->urls[] = $url;
    }

    public function getUrls()
    {
        return $this->urls;
    }

    abstract function getMethod();
} 