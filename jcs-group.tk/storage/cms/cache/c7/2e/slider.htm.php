<?php 
use conprefor\musicgroupbackend\models\Slider;class Cms5b292608d47c8733744100_a84dc614c9377b1d7100dd459ca84500Class extends \Cms\Classes\PartialCode
{
/* <section id="slider" class="slider-parallax swiper_wrapper clearfix">
 */
 
 
public function onStart()
{
    $this['slider'] = Slider::all();;
}
}
