<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Form;
use Unirest;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Entity\WeatherHistory::class);
        
        $WeatherHistories = $repository->findAll();
        
        $form = $this->createForm(Form\DefaultForm::class);
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'WeatherHistories'=> $WeatherHistories,
            'form' => $form->createView()
        ]);
    }

    /**
    * @Route("/autoComplete", name="autocomplete")
    */
    public function autoCompleteAction(Request $request)
    {
        $headers = array('Accept' => 'application/json');
        $query = array('q' => 'Frank sinatra', 'type' => 'track');
        
        $response = Unirest\Request::get('https://api.spotify.com/v1/search',$headers,$query);

        return $this->json(array(array('key' => '123',
                                'LocalizedName' => 'Test',
                                'CountryLocalizedName' => 'WA',
                                )));
    }
}
