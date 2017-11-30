<?php

namespace MagnetosCompany\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MagnetosCompany\ProjectBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectBundle:Default:index.html.twig');
    }

    public function registerAction()
    {
        $request = Request::createFromGlobals();
        $name = $request->request->get('name');
        $lastName = $request->request->get('lastname');
        $em = $this->getDoctrine()->getManager();
        $users = new Users();
        $users->setName($name);
        $users->setLastName($lastName);
        $em->persist($users);
        $em->flush();

        return $this->render('ProjectBundle:Default:index.html.twig');
    }
}
