<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view/home');
    }
    public function authenticate(Request $Request)
    {
        $login = $Request['id'];
        // $pw    = $Request['password'];
        $null = "[]";



        $a = Mahasiswa::all()->where('IDSANTRI','=',$login);
        $usernamea = $a->where('IDSANTRI','=',$login);
        // $passworda = $a->where('PASSWORD','=',$pw);

        $b = Dosen::all()->where('IDPENGURUS','=',$login);
        $usernameb = $b->where('IDPENGURUS','=',$login);
        // $passwordb = $b->where('PASSWORD','=',$pw);

        // echo $a;
        // echo $usernamea;
        // echo $passworda;
        // if ($usernamea==$passworda) {
        //     echo "sama";
        // }


        if($a!=$null)
        {
            if($usernamea=='NIM'){
                $asd 		= $Request->input();
                $session 	= new session;
                $session->name  = $asd['id'];
                $session->role  = "3";//role
                $session->save();

                return redirect('/mahasiswa');
            }else{
                return redirect('/');}
            }
        else if($b=!$null)
        {
            if($usernameb=='ID_PAA'){
                $asd 		= $Request->input();
                $session 	= new session;
                $session->name  = $asd['id'];
                $session->role  = "1";//role
                $session->save();

                return redirect('/admin');
            }else{
                return redirect('/');}
            }

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
        //
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
