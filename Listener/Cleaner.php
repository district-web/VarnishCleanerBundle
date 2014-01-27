<?php

namespace DistrictWeb\VarnishCleanerBundle\Listener;

use DistrictWeb\VarnishCleanerBundle\Event\CollectorEvent;

class Cleaner
{
    public function clean(CollectorEvent $event)
    {
        foreach ($event->getUrls() as $url) {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $event->getMethod());
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_exec($curl);
        }
    }
} 