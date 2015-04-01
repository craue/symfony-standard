<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Vehicle;
use AppBundle\Form\CreateVehicleForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request) {
		$form = $this->createForm(new CreateVehicleForm(), new Vehicle());
		$form->handleRequest($request);

		return $this->render('default/index.html.twig', array(
			'form' => $form->createView(),
		));
	}

}
