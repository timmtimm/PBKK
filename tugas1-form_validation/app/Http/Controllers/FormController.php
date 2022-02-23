<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('addUser');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
           'dateOfBirth' => 'required',
           'address' => 'required',
           'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
           'schoolOrigin' => 'required',
           'grade' => 'required|numeric|between:2.50,99.99'
        ]);

        // dd($request->file('image'));

        $imageName = $request->image->getClientOriginalName();
        $uploadedImage = $request->file("image");
        $uploadedImage->move(public_path().'/image/', $imageName);

        // echo"</br> name: " . $request->input('name');
        // echo"</br> dateOfBirth: " . $request->input('dateOfBirth');
        // echo"</br> address: " . $request->input('address');
        // echo"</br> image: " . $request->file('image');
        // echo"</br> schoolOrigin: " . $request->input('schoolOrigin');
        // echo"</br> grade: " . $request->input('grade');
 		
        // return view('proses',['data' => $request]);
        return view('detailUser', [
            'success' => 'User insert successfully',
            'data' => $request->except("_token"),
            'image' => '/image/'.$imageName
        ]);
    }
}
