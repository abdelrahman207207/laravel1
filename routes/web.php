<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/students',
     function () {
    return view('students') ; }
);

// Route :: get('/students' ,function (){
       
//     $arr  =[
//             'students ' => [
//                 [ 
//                 'id ' => 1 ,
//                  'name ' => 'ahmed' 
//                 ] 
//                 ,
//                 [
//                 'id ' => 2 ,
//                  'name ' => 'yasser' 
//                 ]
             
//             ]
//         ] ;
//         return view('students' , $arr ) ; 
//     }
// ); 



// Route :: get('/students/{id}' , function ($id){

    
//         $students = [
//             [
//                 'id' => 1,
//                 'name' => 'Ahmad Elbatanouni',
//                 'city' => 'Shibeen',
//                 'mobile_phone_number' => '+201114110193',
//                 'email' => 'a.batanouni@gmail.com',
//             ] 
//             ,
//             [
//                 'id' => 2,
//                 'name' => 'Yasser Muhammad',
//                 'city' => 'Aleppo',
//                 'mobile_phone_number' => '+201114110192',
//                 'email' => 'y.muhammad@gmail.com',
//             ]
//         ]  



    

//     return $id ; 

// }) ;
