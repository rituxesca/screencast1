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
        header('Location: /etudiants', response_code: 303);
    }

    public function show(): void
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            die('Bad request');
        }

        $id = (int)$_GET['id'];

        $student = Student::find($id);

        if (!$student){
            die('Student not found');
        }

        $title = 'La fiche de ' . $student->first_name;

        view('students.show',
            compact(
                'title',
                'student'
            )
        );
    }
}