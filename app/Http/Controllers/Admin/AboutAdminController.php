<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\books;

class AboutAdminController extends Controller
{
    public function Index()
    {
        $data = books::all();
        return view('admin.about.index', compact('data'));
    }

    public function Form()
    {
        return view('admin.about.add');
    }
    public function Store(Request $request)
    {
        $request->validate(
            [
                "name" => "required | max:10 ",
                "lastname" => "required | min:4",
                "content" => "required",
            ],
            [
                "name.required" => "ກະລຸນາປ້ອນຊື່",
                "name.max" => "ຊື່ ບໍ່ຄວນຫລາຍກວ່າ 10 ຕົວອັກສອນ",
                "lastname.required" => "ກະລຸນາປ້ອນ ນາມສະກຸນ",
                "lastname.min" => "ນາມສະກຸນ ຕ້ອງຫຼາຍກວ່າ 4 ຕົວອັກສອນ",
                "content.required" => "ກະລຸນາປ້ອນ ລາຍລະອຽດ",
            ]
        );


        try {
            $book = new books();

            $book->name = $request->name;
            $book->lastname = $request->lastname;
            $book->content = $request->content;
            $book->save();

            return redirect()->route('admin.about')->with('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        } catch (\Throwable $th) {
            return redirect()->route('admin.about.form')->with('error', 'ເຊື່ອມຕໍ່ຖານຂໍ້ມູນບໍ່ສຳເລັດ');
        }
    }
}
