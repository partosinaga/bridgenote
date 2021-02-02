<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterusers;

class MasterusersController extends Controller
{

    public function __construct()
    {
        $this->muser = new Masterusers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->muser->get();
        $response = $this->responseSuccess($data);
        return response()->json($response,200);
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
        $input = $request->all();
        $insert = Masterusers::create($input);
        $response = $this->responseSuccess($data = '');
        return response()->json($response,200);
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
        $usr = Masterusers::find($id);
        $usr->update($request->all());
        $response = $this->responseSuccess($data = '');
        return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usr = Masterusers::find($id);
        if($usr) 
        {
            $usr->delete();
            $response = $this->responseSuccess($data='');
        } else {
        $response = $this->responseFailed($data='');
        }
        return response()->json($response,200);
    }

    private function responseSuccess($data)
    {
        return $response = [
            "status" => 200,
            "message" => 'success',
            "data" => $data
        ];
    }
    private function responseFailed($data)
    {
        return $response = [
            "status" => 400,
            "message" => 'failed',
            "data" => $data
        ];
    }
}
