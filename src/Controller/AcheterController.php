<?php

namespace App\Controller;

use App\Entity\Acheter;
use App\Repository\AcheterRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcheterController extends AbstractController

{
	/**
	 * @var AcheterRepository
	 */
	private $repository;

	/**
	 * @var ObjectManager
	 */

	private $em;

	public function __construct(AcheterRepository $repository)
	{
		$this->repository=$repository;
		
	}

/**
 * @Route("/biens", name="acheter.index")
 * @return Response 
 */
	
	public function index(): Response
	{
		// $acheter = new Acheter();
		// $acheter->setTitle('Mon premier Biens')
		// 		->setPrice(200000)
		// 		->setRooms(4)
		// 		->setBedrooms(2)
		// 		->setSurface(60)
		// 		->setFloor(4)
		// 		->setHeat(1)
		// 		->setCity('Kaolack')
		// 		->setAdress('92 SAM')
		// 		->setPostalCode('3400');

		// 	$em = $this->getDoctrine()->getManager();
		// 	$em->persist($acheter);
		// 	$em->flush();

		//  $acheter = $this->repository->findAllVisibility();
		
		// $acheter[0]->setsold(true);
		// $this->en->flush();

		return $this->render('acheter/home.html.twig',[
			'current_menu' => 'achats'
		]);
	}
}