<?php


namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;




class StudentController extends Controller
{

   public function newera()
   {
      return view('newera');
   }

   public function index()
   {
    $student = Student::all();
    return view('student.index', compact('student'));

}
    public function create()
{
 return view('student.create');
}

   public function store(Request $request)
   {
    $student = new Student;
    $student->name = $request->input('name');
    $student->email = $request->input('email');
    $student->course = $request->input('course');
    $student->country = $request->input('country');
    If($request->hasfile('profile_image'))
    {
         $file = $request->file('profile_image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().".".$extention;
         $file->move('uploads/', $filename);
         $student->profile_image = $filename;
   } 
    
   $student->save();
    return redirect()->back()->with('message','Student Image added to New Era Education');
   }

   public function edit($id)

   {  
          $student= Student::find($id);
           return view('student.edit', compact('student'));

   }

         public function update(Request $request, $id)
         {   
            $student = Student::find($id);
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->course = $request->input('course');
            $student->country = $request->input('country');
         
            If($request->hasfile('profile_image'))
    {
         $destination = 'uploads/'.$student->profile_image;
         if(File::exists($destination))
         { 
            File::delete($destination);
         }
         $file = $request->file('profile_image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().".".$extention;
         $file->move('uploads/', $filename);
         $student->profile_image = $filename;
   } 
    
   $student->update();
    return redirect()->back()->with('message','Student Image Updated Successfully');
         }

         public function destroy($id)

         {
            $student = Student::find($id);
            $destination = 'uploads/'.$student->profile_image;
            if(File::exists($destination))
            {  
               File::delete($destination);
            }
            $student->delete();
            return redirect()->back()->with('message','Student Image Deleted Successfully');
         }


}
