<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class FormatsController extends Controller
{

    public function __construct()
    {
        if(!session()->has('alumno')) session()->put('alumno', array());
        if(!session()->has('query')) session()->put('query', array());
    }


    public function search(Request $request){
        $search = $request->get('search');

        if ($search == '') {
            return back()->with('error_message', 'Debe ingresar una matrícula');
        } else {
            $matricula = Student::select('name', 'job-title', 'teacher3', 'carrer')->matricula($search)->get()->toArray();

            session()->put('query', $matricula);
            return view('formats.forms.f4.filled', compact('matricula'));
        }
    }

    /*-------------------------------------- Formato F2 --------------------------------------*/
    
    public function form2(){
        return view('formats.forms.f2.form');
    }

    public function f2(){
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));

        $pdf = PDF::loadView('formats.f2', compact('year', 'day', 'month'))->setPaper('letter');
        return $pdf->stream();
    }

    public function downloadf2(){
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));

        $pdf = PDF::loadView('formats.f2', compact('year', 'day', 'month'))->setPaper('letter');
        return $pdf->download();
    }

    public function filledf2(){
        $alumno = session()->get('alumno');
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));

        session()->forget('alumno');

        $pdf = PDF::loadView('formats.forms.f2.f2', compact('year', 'day', 'month', 'alumno'))->setPaper('letter');
        return $pdf->download();
    }

    public function store(Request $request){

        $this->validate($request, [
            'alumno'    => 'required',
            'matricula' => 'required|unique:students',
            'trabajo'   => 'required',
            'folio'     => 'required',
            'maestro1'  => 'required',
            'masig'     => 'required',
            'lic'       => 'required'
        ]);

        $data = [
            'name'    => $request->get('alumno'),
            'matricula' => $request->get('matricula'),
            'job-title'   => $request->get('trabajo'),
            'folio'     => $request->get('folio'),
            'teacher1'  => $request->get('maestro1'),
            'teacher2'  => $request->get('maestro2'),
            'teacher3'     => $request->get('masig'),
            'carrer'       => $request->get('lic')
        ];

        session()->put('alumno', $data);

        $student = Student::create($data);

        return redirect()->route('filledf2')->with('success_message', 'Datos almacenados correctamente, tu documento se encuentra listo');
    }

    /*-------------------------------------- Formato F2 --------------------------------------*/

    /*-------------------------------------- Formato F4 --------------------------------------*/

    public function form4(){
        return view('formats.forms.f4.form');
    }

    public function f4(){
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));

        $pdf = PDF::loadView('formats.f4', compact('year', 'day', 'month'))->setPaper('letter');
        return $pdf->stream();
    }

    public function downloadf4(){
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));

        $pdf = PDF::loadView('formats.f4', compact('year', 'day', 'month'))->setPaper('letter');
        return $pdf->download();
    }

    public function filledf4(){
        $alumno = session()->get('query');
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));

        $pdf = PDF::loadView('formats.forms.f4.f4', compact('year', 'day', 'month', 'alumno'))->setPaper('letter');
        return $pdf->download();
    }

    /*-------------------------------------- Formato F4 --------------------------------------*/

    /*-------------------------------------- Formato F7 --------------------------------------*/

    public function form7(){
        return view('formats.forms.f7.form');
    }

    public function f7(){
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));

        $pdf = PDF::loadView('formats.f7', compact('year', 'day', 'month'))->setPaper('letter');
        return $pdf->stream();
    }

    public function downloadf7(){
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));

        $pdf = PDF::loadView('formats.f7', compact('year', 'day', 'month'))->setPaper('letter');
        return $pdf->download();
    }

    public function filledf7(){
        $alumno = session()->get('alumno');
        $date = Carbon::now();
        $year = $date->format('Y');
        $day = $date->format('d');
        setlocale(LC_TIME, "es_MX");
        $month = ucfirst(strftime("%B"));


        $pdf = PDF::loadView('formats.forms.f7.f7', compact('year', 'day', 'month', 'alumno'))->setPaper('letter');
        return $pdf->download();
    }

    /*-------------------------------------- Formato F7 --------------------------------------*/

    public function dataf2(){
        $alumno = session()->get('alumno');
        return view('formats.forms.f2.filled', compact('alumno'));
    }

    public function dataf4(){
        $alumno = session()->get('alumno');
        return view('formats.forms.f4.filled', compact('alumno'));
    }

    public function dataf7(){
        $alumno = session()->get('alumno');
        return view('formats.forms.f7.filled', compact('alumno'));
    }
}
