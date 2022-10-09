<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('username')
            ->add('password')
            ->getForm();

    }
}