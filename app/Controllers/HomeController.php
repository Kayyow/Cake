<?php
namespace App\Controllers;

class HomeController extends AppController {

    public function __construct() {
        parent::__construct();
        $this->loadModel('skill');
        $this->loadModel('skillGroup');
    }

    public function index() {
        $skills = $this->skill->all();
        $skillGroups = $this->skill->all();
        $this->render('home', compact('skills', 'skillGroups'));
    }
}