<?php
require_once '../src/Form/ContactType.php';

class pageController
{
    public function home()
    {
        require '../templates/site/home.php';
    }

    public function portfolio()

    {
        require '../templates/site/portfolio.php';
    }
    public function service()

    {
        require '../templates/site/service.php';
    }

    public function artwork()
    {
        require '../templates/site/artwork.php';
    }

    public function contact()
    {

        $form = new ContactType($_POST);
        require '../templates/site/contact.php';
    }
    public function construction()
    {
        require '../templates/status/construction.php';
    }
}
