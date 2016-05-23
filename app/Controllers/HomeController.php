<?php
namespace App\Controllers;

class HomeController extends AppController {

    public function __construct() {
        parent::__construct();
        $this->loadModel('skill');
        $this->loadModel('skillGroup');
        $this->loadModel('experience');
        $this->loadModel('study');
        $this->loadModel('leisure');
    }

    public function index() {
        $skills = $this->skill->allWithGroups();
        $skillsByGroups = [];
        foreach ($skills as $skill) {
            $skillsByGroups[$skill->label][] = $skill;
        }
        $experiences = $this->experience->all();
        $studies = $this->study->all();
        $leisures = $this->leisure->all();
        $this->render('home', compact('skillsByGroups', 'experiences', 'studies', 'leisures'));
    }
}