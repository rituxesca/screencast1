<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController
{
    public function index(): void
    {
        $title = 'Tous les étudiants';
        $students = Student::getAllStudents();

        view(
            'students.index',
            compact('title', 'students')
        );
    }

    public function create(): void
    {
        $title = 'Ajouter un étudiant';

        view(
            'students.create',
            compact('title')
        );
    }

    public function store(): void
    {
        if(!isset($_REQUEST['_token'], $_SESSION['token'])){
            die('bad request');
        }

        if($_REQUEST['_token'] !== $_SESSION['token']){
            die('unauthorised');
        }
        die('enregistré');
    }
}