<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student;

class coursesController extends Controller
{
    

	public function view()
	{
		
		$courses = Course::all();

		return response()->json($courses, 200);

	}

	public function store()
	{

		$faker = \Faker\Factory::create();
		
		$course = Course::create(['name' =>$faker->name , 'instructor' => $faker->userName]);

		return response()->json($course, 201);

	}

	public function update(Course $course, $newName)
	{
		
		$course->name = $newName;
		$course->save();

		return response()->json($course, 200);

	}

	public function addStudent(Course $course)
	{

		$student = Student::first();

		 $course->push('students', ['name' => $student->name, 'email' => $student->email]);

		return $course;
	}


	public function delete(Course $course)
	{
		
		$course->delete();

		return response()->json(null, 204);

	}

}
