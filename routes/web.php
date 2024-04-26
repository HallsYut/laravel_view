<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index',array(
//         'name' => 'ณัฐวุฒิ',
//         'age' => 31,
//         'email' => 'halls@gmail.com',
//         'position' => 'หัวหน้าฝ่ายปฏิบัติการ',
//         'fruits_faverite' => ['มะม่วง','ทุเรียน','ส้ม']
//     ));
// });

Route::get('/', function () {
        $name = 'ณัฐวฒิ';
        $age = 31;
        $email = 'halls@gmail.com';
        $position = 'หัวหน้าฝ่ายปฏิบัติการ';
        $fruits_faverite = ['มะม่วง','ทุเรียน','ส้ม'];
    return view('index', compact('name','age','email','position','fruits_faverite'));
});


