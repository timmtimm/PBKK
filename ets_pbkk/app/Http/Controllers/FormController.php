<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function proses(Request $request)
    {
        $this->validate($request,[
           'pasien' => 'required',
           'dokter' => 'required',
           'kondisi' => 'required',
           'suhu' => 'required|numeric|between:35 ,45.5',
           'resep' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        // dd($request->file('image'));


        // echo"</br> name: " . $request->input('name');
        // echo"</br> dateOfBirth: " . $request->input('dateOfBirth');
        // echo"</br> address: " . $request->input('address');
        // echo"</br> image: " . $request->file('image');
        // echo"</br> schoolOrigin: " . $request->input('schoolOrigin');
        // echo"</br> grade: " . $request->input('grade');
 		
        // return view('proses',['data' => $request]);
        return view('form-patient', [
            'success' => 'User insert successfully'
        ]);
    }
}
