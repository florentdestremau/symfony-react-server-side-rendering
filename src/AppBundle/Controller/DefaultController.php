<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $serializer = $this->get('serializer');
        $posts = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts"), true);

        return $this->render(
            'default/index.html.twig',
            [
                'props' => $serializer->serialize(['posts' => $posts], 'json'),
            ]
        );
    }
}
