<?php


namespace App\Controller;


use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * @Rest\Route("api/v1")
 */
class ActivitiesController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/activities")
     */
    public function index()
    {
        $activitiesJson = file_get_contents($this->getParameter('kernel.root_dir') . '/datas/activities.json');

        return $this->json(json_decode($activitiesJson), 200);
    }
}