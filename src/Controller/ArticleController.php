<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
	/**
	* @Route("/", name="app_homepage")
	*
	**/
	public function homepage()
	{
		/*return new Response ('OMG! My first page already!');*/
		return $this->render('article/homepage.html.twig');
	}

	/**
	*@Route("/news/{slug}", name="article_show")
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