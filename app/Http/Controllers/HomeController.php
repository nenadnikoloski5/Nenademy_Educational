<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pickOne(){

        return view('pickOne');
    }

    public function changePassword(){


        request()->validate([
            'password' => ['confirmed', 'min:3', 'string', 'max:255']
        ]);

        $toChange = User::all()->where('id', Auth::user()->id)->first();

        // dd($toChange);

        $toChange->update([
            'password' => Hash::make(request('password'))
        ]);

        return redirect('/');
    }

    public function math(){

        return view('math', ['mathPoints' => Auth::user()->mathPoints]);
    }


    public function mathCourse($courseNum){

        $pointsNeeded = 0;

        if($courseNum == 1){
        } else if($courseNum == 2){
            $pointsNeeded = 10;
        }else if($courseNum == 3){
            $pointsNeeded = 20;
        }else if($courseNum == 4){
            $pointsNeeded = 30;
        }else if($courseNum == 5){
            $pointsNeeded = 40;
        }else if($courseNum == 6){
            $pointsNeeded = 50;
        }else if($courseNum == 7){
            $pointsNeeded = 60;
        }else if($courseNum == 8){
            $pointsNeeded = 70;
        }else if($courseNum == 9){
            $pointsNeeded = 80;
        }else if($courseNum == 10){
            $pointsNeeded = 90;
        }else if($courseNum == 11){
            $pointsNeeded = 100;
        }else if($courseNum == 12){
            $pointsNeeded = 110;
        }else if($courseNum == 13){
            $pointsNeeded = 120;
        }

        return view('/mathEx/mathMain', ['courseNum' => $courseNum, 'pointsNeeded' => $pointsNeeded, 'mathPoints' => Auth::user()->mathPoints]);
    }


    public function mathIframe($courseNum){

        $courseName = "";
        $pointsNeeded = 0;

        if($courseNum == 1){
            $courseName = "Simple Addition";
        } else if($courseNum == 2){
            $courseName = "Simple Subtraction";
            $pointsNeeded = 10;
        }else if($courseNum == 3){
            $courseName = "Addition and subtraction within 50";
            $pointsNeeded = 20;
        }else if($courseNum == 4){
            $courseName = "Addition and subtraction within 100";
            $pointsNeeded = 30;
        }else if($courseNum == 5){
            $courseName = "Simple multiplication";
            $pointsNeeded = 40;
        }else if($courseNum == 6){
            $courseName = "Simple division";
            $pointsNeeded = 50;
        }else if($courseNum == 7){
            $courseName = "Multiplication";
            $pointsNeeded = 60;
        }else if($courseNum == 8){
            $courseName = "Rounding";
            $pointsNeeded = 70;
        }

        return view("mathEx/mathIframe$courseNum", ['courseNum'=>$courseNum, 'courseName' => $courseName, 'mathPoints' => Auth::user()->mathPoints, 'pointsNeeded' => $pointsNeeded]);
    }

    public function mathSuccess(){

       $OP = User::all()->where('id', Auth::user()->id)->first();



       $OP->update([
        'mathPoints' => $OP->mathPoints + request()->givenPoints
       ]);

       return redirect()->back();

    }


    public function programming(){



        return view('programming', ['progPoints'=> Auth::user()->progPoints]);
    }


    public function progCourse($courseNum){

        $pointsNeeded = 0;

        if($courseNum == 1){
        } else if($courseNum == 2){
            $pointsNeeded = 1;
        }else if($courseNum == 3){
            $pointsNeeded = 2;
        }else if($courseNum == 4){
            $pointsNeeded = 3;
        }else if($courseNum == 5){
            $pointsNeeded = 4;
        }else if($courseNum == 6){
            $pointsNeeded = 5;
        }else if($courseNum == 7){
            $pointsNeeded = 6;
        }else if($courseNum == 8){
            $pointsNeeded = 7;
        }else if($courseNum == 9){
            $pointsNeeded = 8;
        }else if($courseNum == 10){
            $pointsNeeded = 9;
        }

        return view('/progEx/progMain', ['courseNum' => $courseNum, 'pointsNeeded' => $pointsNeeded, 'progPoints' => Auth::user()->progPoints]);
    }


    public function progIframe($courseNum){

        $courseName = "";
        $pointsNeeded = 0;

        if($courseNum == 1){
            $courseName = "Variables";
        } else if($courseNum == 2){
            $courseName = "Operators";
            $pointsNeeded = 1;
        }else if($courseNum == 3){
            $courseName = "Comparisons";
            $pointsNeeded = 2;
        }else if($courseNum == 4){
            $courseName = "Conditional operators";
            $pointsNeeded = 3;
        }

        return view("progEx/progIframe$courseNum", ['courseNum'=>$courseNum, 'courseName' => $courseName, 'progPoints' => Auth::user()->progPoints, 'pointsNeeded' => $pointsNeeded]);
    }

    public function progSuccess1(){



        request()->validate([
            'firstAnswer' => ['required','in:24'],
            'secondAnswer' => ['required', 'in:5'],
            'thirdAnswer' => ['required', 'in:55']
        ]);

            


       $OP = User::all()->where('id', Auth::user()->id)->first();



       $OP->update([
        'progPoints' => $OP->progPoints + 1
       ]);

       return redirect('/youDidIt');

    }


    public function progSuccess2(){



        request()->validate([
            'firstAnswer' => ['required','in:hellothere'],
            'secondAnswer' => ['required', 'in:good morning']
        ]);

            
            // dd(request());

       $OP = User::all()->where('id', Auth::user()->id)->first();



       $OP->update([
        'progPoints' => $OP->progPoints + 1
       ]);

       return redirect('/youDidIt');
    // return redirect()->back();


    }

    public function progSuccess3(){



        request()->validate([
            'firstAnswer' => ['required','in:true,yes'],
            'secondAnswer' => ['required', 'in:false,no']
        ]);

            
            // dd(request());

       $OP = User::all()->where('id', Auth::user()->id)->first();



       $OP->update([
        'progPoints' => $OP->progPoints + 1
       ]);

       return redirect('/youDidIt');
    // return redirect()->back();


    }


    public function progSuccess4(){



        request()->validate([
            'firstAnswer' => ['required','in:4'],
            'secondAnswer' => ['required', 'in:3']
        ]);

            
            // dd(request());

       $OP = User::all()->where('id', Auth::user()->id)->first();



       $OP->update([
        'progPoints' => $OP->progPoints + 1
       ]);

       return redirect('/youDidIt');
    // return redirect()->back();


    }


    public function leaderboard(){

        $OPallPoints = Auth::user()->mathPoints + Auth::user()->progPoints;

        $everyonePoints = User::all();



        // dd($everyonePoints);

        return view("leaderboard", ['myPoints' => $OPallPoints, 'everyonePoints' => $everyonePoints]);
    }





}