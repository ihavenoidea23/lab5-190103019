<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = $this->get_students();
        $date_of_birth = $this->get_date();
        $age = $this->get_age();
    return view("random", ["name"=>$students[$id],"birthday"=>$date_of_birth[$i],"age"=>$age[$d]]);
    }


    public function get_students() {
        static $students = array(0 => "Aiman", 1 => "Dilnaz", 2 => "Ernur");
        return $students;
    }
    
    public function get_age() {
        static $age = array(0 => "45", 1=> "22", 2 => "55");
        return $age;
    }

    public function get_date() {
        static $date_of_birth = array(0 => "01.01", 1 => "12.12", 2 => "09.89");
        return $date_of_birth;
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
