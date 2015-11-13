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
    public function renderTimelineAction()
    {
        $timeline = array(
            array(
                'title' => 'Titre',
                'date' => array(
                    'day' => 29,
                    'month' => 'JAN',
                    'year' => 2015
                )
            ),
            array(
                'title' => 'Titre',
                'text' => 'mon super texte',
                'date' => array(
                    'year' => 2015
                )
            )
        );
        return $this->render('TimelineBundle:Timeline:timeline.html.twig', array('timeline' => $timeline));
    }
}