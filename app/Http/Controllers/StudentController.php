<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $allData = Students::all();
        $data = Students::where('id', 1)->get();
        
        //FailData
        $dataF = Students::where('id', 100);

        //Wildcard searching
        $data2 = Students::where('first_name', 'like', '%vey%') -> get();
        $data3 = Students::where('age', '>', '20') -> get(); //get all age > 20
        $data4 = Students::where('age', '>', '20') -> limit(5) -> get(); //get only 5 for all age > 20

        return view('LandingPage.index', ['data' => $allData]);
    }

    public function index2($id) {
        $data = Students::where('id', $id)-> get();

        return view('LandingPage.index', ['data' => $data]);
    }

    public function index3() {

        $data3 = Students::where('age', '>', '20') -> get(); //get all age > 20

        return view('LandingPage.index', ['data' => $data3]);
    }
}