<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use App\Entity\Login;
use App\Form\LoginType;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        $login = new Login();
        $form = $this->createForm(LoginType::class, $login);

        return $this->render('auth/login.html.twig', [
            'controller_name' => 'AuthController',
            'form' => $form,
        ]);
    }

    #[Route('/register', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('auth/register.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }
}
