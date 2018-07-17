<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
	/**
	* @Route("/")
	*
	**/
	public function homepage()
	{
		return new Response ('OMG! My first page already!');
	}

	/**
	*@Route("/news/{slug}	")
	**/
	public function show($slug)
	{

		$comments = [
			'Nullam lacinia ac urna rutrum gravida.',
			'Cras massa neque, maximus et malesuada vitae.',
			'imperdiet sit amet tortor.'
		];

		/*dump($slug, $this);*/

		return $this->render('article/show.html.twig', [
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments
		]);
	}
}

?>