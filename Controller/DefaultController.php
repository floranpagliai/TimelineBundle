<?php

namespace Shked0wn\TimelineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {        $timeline = array(
        array(
            'title' => 'Title',
            'date' => array(
                'day' => 29,
                'month' => 'JAN',
                'year' => 2010
            )
        ),
        array(
            'title' => 'Title',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus condimentum mauris,
                non vehicula ligula malesuada quis. Fusce a neque quam. Nam quam leo, rutrum eget aliquet faucibus, vulputate
                sit amet orci. Proin interdum urna sem, vel auctor nibh viverra sit amet. Aenean euismod mi sed nisl rutrum, eu
                facilisis sapien rutrum. Sed imperdiet ultrices mauris eu rhoncus. Ut iaculis, neque eu sagittis fermentum, nunc dolor f
                eugiat magna, sit amet posuere elit velit in odio.',
            'date' => array(
                'year' => 2012
            )
        ),
        array(
            'title' => 'Title',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus condimentum mauris,
                non vehicula ligula malesuada quis. Fusce a neque quam. Nam quam leo, rutrum eget aliquet faucibus, vulputate
                sit amet orci. Proin interdum urna sem, vel auctor nibh viverra sit amet. Aenean euismod mi sed nisl rutrum, eu
                facilisis sapien rutrum. Sed imperdiet ultrices mauris eu rhoncus. Ut iaculis, neque eu sagittis fermentum, nunc dolor f
                eugiat magna, sit amet posuere elit velit in odio.',
            'date' => array(
                'day' => 29,
                'month' => 'JAN',
                'year' => 2015
            )
        ),
        array(
            'title' => 'Title',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus condimentum mauris,
                non vehicula ligula malesuada quis. Fusce a neque quam. Nam quam leo, rutrum eget aliquet faucibus, vulputate
                sit amet orci. Proin interdum urna sem, vel auctor nibh viverra sit amet. Aenean euismod mi sed nisl rutrum, eu
                facilisis sapien rutrum. Sed imperdiet ultrices mauris eu rhoncus. Ut iaculis, neque eu sagittis fermentum, nunc dolor f
                eugiat magna, sit amet posuere elit velit in odio.',
            'date' => array(
                'day' => 31,
                'month' => 'DEC',
                'year' => 2016
            )
        ),
        array(
            'title' => 'Title',
            'date' => array(
                'day' => 1,
                'month' => 'MARS',
                'year' => 2020
            )
        )
    );
        return $this->render('TimelineBundle:Default:index.html.twig', array('timeline' => $timeline));
    }
}
