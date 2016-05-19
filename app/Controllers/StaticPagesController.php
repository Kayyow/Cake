<?php
namespace App\Controllers;

class StaticPagesController extends AppController {

    public function __construct() {
        parent::__construct();
    }

    public function documents() {
        $this->template = 'documents';
        $this->render('partials/_document');
    }

    public function sendContactEmail() {
        $this->template = 'default';
        foreach ($_POST as $key => $value) {
            $_POST[$key] = trim($value);
        }

        if ($_POST['name'] != '' && $_POST['email'] != '' && $_POST['message'] != '' && $_POST['subject'] != '') {
            $to = 'contact@kevin-hardy.fr';
            $subject = utf8_decode($_POST['name']) . ' - ' . utf8_decode($_POST['subject']);
            $message = utf8_decode($_POST['message']);
            $header = "From: " . $_POST['email'];

            mail($to, $subject, $message, $header);

            Header("Location: http://kevin-hardy.fr#contact");
        } else {
            $errors = [];
            foreach ($_POST as $key => $value) {
                if ($value == '') {
                    $errors[$key] = 'Ne doit pas être vide.';
                } else {
                    if ($key == 'email') {
                        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                            $errors[$key] = 'Doit être une adresse valide.';
                        }
                    }
                }
            }
            Header("Location: http://kevin-hardy.fr#contact");
            //$this->render('home', compact('errors'));
        }
    }
}