<?php
namespace App\Controllers;

class StaticPagesController extends AppController {

    protected $template = 'documents';

    public function __construct() {
        parent::__construct();
    }

    public function documents() {
        $this->render('partials/_document');
    }
}