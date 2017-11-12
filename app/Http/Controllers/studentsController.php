<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentsController extends Controller
{

    
    public function view()
	{
		
		$students = Student::all();

		return response()->json($students, 200);

	}


	public function store()
	{
		
		$faker = \Faker\Factory::create();

		$student = Student::create(['name' => $faker->name, 'email' => $faker->email]);

		return response()->json($student, 201);

	}

	public function update(Student $student, $newName)
	{
		
		$student->name = $newName;

		$student->save();

		return response()->json($student, 200);

	}


	public function delete(Student $student)
	{
		
		$student->delete();

		return response()->json(null, 204);

	}

}
