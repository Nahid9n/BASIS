<?php


namespace App\classes;


class Student
{
    public $students =[];

    public function __construct()
    {
        $this->students = [
            0 => [
                'name' => "Nahid",
                'email'=> 'nahidnahid47689@gmail.com',
                'mobile'=>'01310993183',
            ],
            1 => [
                'name' => "Nupur",
                'email'=> 'nahidnahid47689@gmail.com',
                'mobile'=>'01310993183',
            ],
            2 => [
                'name' => "Anonna",
                'email'=> 'nahidnahid47689@gmail.com',
                'mobile'=>'01310993183',
            ],

        ];
    }
    public function getAllStudents(){

        return $this->students;
    }
}
