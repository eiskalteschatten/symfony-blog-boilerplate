<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use App\Entity\Login;
use App\Form\LoginFormType;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $login = new Login();
        $login->setUsername($lastUsername);
        $form = $this->createForm(LoginFormType::class, $login);

        return $this->render('auth/login.html.twig', [
            'controller_name' => 'LoginController',
            'loginForm' => $form,
        ]);
    }
}
