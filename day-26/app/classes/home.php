<?php


namespace App\classes;
use App\classes\Student;


class home
{
    public $message, $student, $students;
    public function __construct()
    {
        $this->message ="Hello PHP";
    }
    public function index(){
        $this->student =new Student(); //create new object of student class
        $this->students =$this->student->getAllStudents(); //
//        echo '<pre>';


//        var_dump($this->students);
//        print_r($this->students);
        return view('home',['message'=>$this->message,'students'=>$this->students]);
    }

    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');

    }
    public function contact(){
        return view('contact');
    }
}
