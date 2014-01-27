<?php

namespace DistrictWeb\VarnishCleanerBundle\Event;

class PurgeEvent extends CollectorEvent
{
    public function getMethod()
    {
        return 'PURGE';
    }
} 