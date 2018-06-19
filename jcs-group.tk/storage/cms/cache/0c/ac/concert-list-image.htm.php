<?php 
use conprefor\musicgroupbackend\models\Event;class Cms5b292608de3af199242106_7b2e8079e05b486712eb2f122fed0a67Class extends \Cms\Classes\PartialCode
{

public function onStart()
{
    $this['events'] = Event::take(10)->get();;
}
}
