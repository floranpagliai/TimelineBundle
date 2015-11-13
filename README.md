# TimelineBundle
Synfony2 bundle to make nice looking and responsive timeline.
This bundle provide a simple controller to render timeline and include a twig and CSS. If you are interested by more customization don't hesitate to post an issue with your request.
 
[![Latest Stable Version](https://poser.pugx.org/shked0wn/timeline-bundle/v/stable)](https://packagist.org/packages/shked0wn/timeline-bundle) [![Total Downloads](https://poser.pugx.org/shked0wn/timeline-bundle/downloads)](https://packagist.org/packages/shked0wn/timeline-bundle) [![Latest Unstable Version](https://poser.pugx.org/shked0wn/timeline-bundle/v/unstable)](https://packagist.org/packages/shked0wn/timeline-bundle) [![License](https://poser.pugx.org/shked0wn/timeline-bundle/license)](https://packagist.org/packages/shked0wn/timeline-bundle)
 
![Exemple](https://github.com/shked0wn/TimelineBundle/blob/master/Resources/public/demo/exemple.png)
 
## Installation

    composer require shked0wn/timeline-bundle

Add the bundle to your AppKernel.php

    public function registerBundles()
    {
         $bundles = array(
              [..]
              new Shked0wn\TimelineBundle\TimelineBundle(),
              [..]
         );
    }

## Usage

First you want to create an array like the following in your controller.`

    $timeline = array(
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
                    )
    );

Then give your array to your view.

    return $this->render('TimelineBundle:Default:index.html.twig', array('timeline' => $timeline));
    
And finally call the render controller in your twig with the array as param.
    
    {% render(controller('TimelineBundle:Timeline:renderTimeline', { 'timeline': timeline })) %}

## License 

This bundle is under the MIT license.

