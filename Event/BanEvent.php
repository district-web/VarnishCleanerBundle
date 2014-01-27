<?php

namespace DistrictWeb\VarnishCleanerBundle\Event;

class BanEvent extends CollectorEvent
{
    public function getMethod()
    {
        return 'BAN';
    }
} 