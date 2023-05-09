<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contacts", name="contacts", methods={"GET"})
     */

    public function listeContact(ContactRepository $repo)
    {
        $Contacts=$repo->findAll();
        return $this->render('contact/listeContacts.html.twig',[
            'lesContacts' => $Contacts
        ]);
    }

        /**
     * @Route("/contact/{id}", name="ficheContact", methods={"GET"})
     */

     public function ficheContact(Contact $contact)
     {
         return $this->render('contact/ficheContact.html.twig',[
             'leContact' => $contact
         ]);
     }
}
