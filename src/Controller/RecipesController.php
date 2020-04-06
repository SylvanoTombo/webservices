<?php


namespace App\Controller;


use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * @Rest\Route("api/v1")
 */
class RecipesController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/recipes")
     */
    public function index()
    {
        $recipesJson = file_get_contents($this->getParameter('kernel.root_dir') . '/datas/recipes.json');

        return $this->json(json_decode($recipesJson), 200);
    }
}