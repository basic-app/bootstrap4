<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
use BasicApp\Publisher\PublisherEvents;
use BasicApp\Publisher\Events\PublishEvent;
use BasicApp\Bootstrap4\Config\Bootstrap4;

PublisherEvents::onPublish(
    function(PublishEvent $event)
    {
        helper('path');

        $config = config(Bootstrap4::class);

        $publisher = service('publisher');

        if ($event->refresh)
        {
            $publisher->deleteIfExists(fcpath('assets/bootstrap4'));
        }

        $publisher->download(
            'https://github.com/twbs/bootstrap/releases/download/v' . $config->version. '/bootstrap-' . $config->version . '-dist.zip', 
            fcpath('assets/bootstrap4/bootstrap4.zip'), 
            $event->refresh
        );
        
    }
);