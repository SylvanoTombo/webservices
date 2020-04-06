<?php


namespace App\Controller;


use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * @Rest\Route("api/v1")
 */
class ArticlesController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/articles")
     */
    public function index()
    {
        $articlesJson = file_get_contents($this->getParameter('kernel.root_dir') . '/datas/articles.json');

        return $this->json(json_decode($articlesJson), 200);
    }
}