<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nhữ Trung Hải',
            'age' => 20,
            'school' => 'Trường Đại học Điện Lực',
        ];

        $name = $data['name'];
        $age = $data['age'];
        $school = $data['school'];

        return view('welcome', compact('name', 'age', 'school'));
    }

    public function multiplication($n)
    {
        $error = null;

        $validated = filter_var($n, FILTER_VALIDATE_INT);
        if ($validated === false || $validated < 1) {
            $error = 'Giá trị n không hợp lệ. Vui lòng nhập số nguyên dương.';
            return view('multiplication', compact('n', 'error'));
        }

        $n = (int) $validated;

        return view('multiplication', compact('n', 'error'));
    }
}
