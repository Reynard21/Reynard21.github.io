<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Student;
// use Illuminate\Routing\Controller;
// use Illuminate\Support\Facades\Log;

// class StudentController extends Controller
// {
//     public function showPage1()
//     {
//         return view('form-page-1');
//     }

//     public function storePage1(Request $request)
//     {
//         $request->validate([
//             'childName' => 'required|string|max:255',
//             'gender' => 'required|string',
//             'placeOfBirth' => 'required|string|max:255',
//             'dateOfBirth' => 'required|date',
//             'address' => 'required|string|max:255',
//         ]);

//         session([
//             'childName' => $request->childName,
//             'gender' => $request->gender,
//             'placeOfBirth' => $request->placeOfBirth,
//             'dateOfBirth' => $request->dateOfBirth,
//             'address' => $request->address,
//         ]);

//         return redirect('/form-page-2');
//     }

//     public function showPage2()
//     {
//         return view('form-page-2');
//     }

//     public function storePage2(Request $request)
//     {
//         $request->validate([
//             'fatherName' => 'required|string|max:255',
//             'fatherWork' => 'required|string|max:255',
//             'fatherPhone' => 'required|string|max:255',
//             'fatherEmail' => 'required|string|email|max:255',
//             'motherName' => 'required|string|max:255',
//             'motherWork' => 'required|string|max:255',
//             'motherPhone' => 'required|string|max:255',
//             'motherEmail' => 'required|string|email|max:255',
//             'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         ]);

//         session([
//             'fatherName' => $request->fatherName,
//             'fatherWork' => $request->fatherWork,
//             'fatherPhone' => $request->fatherPhone,
//             'fatherEmail' => $request->fatherEmail,
//             'motherName' => $request->motherName,
//             'motherWork' => $request->motherWork,
//             'motherPhone' => $request->motherPhone,
//             'motherEmail' => $request->motherEmail,
//         ]);

//         if ($request->hasFile('photo')) {
//             $imageName = time().'.'.$request->photo->extension();
//             $request->photo->move(public_path('images'), $imageName);
//             session(['photo' => $imageName]);
//         }

//         return redirect('/submit-form');
//     }

//     public function submitForm()
//     {
//         Log::info('submitForm called');
//         Log::info(session()->all());
//         dd(session()->all());

//         $student = new Student();
//         $student->childName = session('childName');
//         $student->gender = session('gender');
//         $student->placeOfBirth = session('placeOfBirth');
//         $student->dateOfBirth = session('dateOfBirth');
//         $student->address = session('address');
//         $student->fatherName = session('fatherName');
//         $student->fatherWork = session('fatherWork');
//         $student->fatherPhone = session('fatherPhone');
//         $student->fatherEmail = session('fatherEmail');
//         $student->motherName = session('motherName');
//         $student->motherWork = session('motherWork');
//         $student->motherPhone = session('motherPhone');
//         $student->motherEmail = session('motherEmail');
//         $student->photo = session('photo');

//         $student->save();

//         session()->flush();

//         return redirect('/form-page-1')->with('success', 'Student registered successfully.');
//     }
// }
