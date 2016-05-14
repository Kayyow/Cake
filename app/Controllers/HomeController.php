<?php
namespace App\Controllers;

class HomeController extends AppController {

    public function __construct() {
        parent::__construct();
        $this->loadModel('skill');
        $this->loadModel('skillGroup');
    }

    public function index() {
        $skills = $this->skill->allWithGroups();
        $skillsByGroups = [];
        foreach ($skills as $skill) {
            $skillsByGroups[$skill->label][] = $skill;
        }
        $this->render('home', compact('skillsByGroups'));
    }
}