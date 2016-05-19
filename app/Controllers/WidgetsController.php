<?php
namespace App\Controllers;

class WidgetsController extends AppController {

    public function __construct() {
        parent::__construct();
    }

    public function documents() {
        $this->template = 'documents';
        $this->render('partials/_document');
    }

    public function sendContactEmail() { // AJAX
        $errors = [];
        $datas = [];

        if (empty($_POST['name'])) $errors['name'] = 'Le nom ne doit pas être vide.';

        if (empty($_POST['email'])) $errors['email'] = "L'adresse email ne doit pas être vide.";

        if (empty($_POST['subject'])) $errors['subject'] = 'Le sujet ne doit pas être vide.';

        if (empty($_POST['message'])) $errors['message'] = 'Le message ne doit pas être vide.';

        if (empty($errors)) { // SUCCESS
            $to = 'contact@kevin-hardy.fr';
            $subject = utf8_decode($_POST['name']) . ' - ' . utf8_decode($_POST['subject']);
            $message = utf8_decode($_POST['message']);
            $header = "From: " . $_POST['email'];

            mail($to, $subject, $message, $header);

            $datas['success'] = true;
            $datas['message'] = "L'email a bien été envoyé !";
        } else { // ERROR
            $datas['success'] = false;
            $datas['errors'] = $errors;
        }

        echo json_encode($datas);
    }
}