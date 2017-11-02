<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mood;
use JavaScript;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cites = Mood::all();
        JavaScript::put([
            'cities' => $cites
        ]);

        return view('front');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'mood' => 'required',
            'city' => 'required'
        ]);
        $mood = Mood::find($request->city);
        //return dd($mood);
        //return dd($request->mood);
        switch ($request->mood) {
            case 1:
                $mood->happy += 1;
                break;
            case 2:
                $mood->angry += 1;
                break;
            case 3:
                $mood->sad += 1;
                break;
            default:
                echo 'error';
                //return back();
        }
        $mood->save();
        $cites = Mood::all();
        return view('donate');
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
