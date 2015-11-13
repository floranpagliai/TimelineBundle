<?php
/**
 * User: floran
 * Date: 13/11/2015
 * Time: 16:13
 */

namespace Shked0wn\TimelineBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TimelineController extends Controller
{
    public function renderTimelineAction($timeline)
    {
        return $this->render('TimelineBundle:Timeline:timeline.html.twig', array('timeline' => $timeline));
    }
}