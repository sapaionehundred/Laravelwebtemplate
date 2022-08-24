<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;
class BackendController extends Controller
{
    //
    //
    public function dashboard(){
        return view('backend.pages.dashboard');
        //return "OK ไหม";
    }
    public function employees(){
        //return "OK ไหม";
        $employees = DB::table('employees')->get(); //select * from employees;
        //$employees = DB::table('employees')->first(); //เรียกข้อมูลแรก
        //$employees = DB::table('employees')->first(['fullname','gender','email']);

        //เรียกข้อมูลแบบมีเงื่อนไข
        /*$employees = DB::table('employees')
                                ->where('age','>','18')
                                ->where('gender','Male')
                                ->get(['fullname','gender','age']);*/
        //ค้นหาข้อมูลโดยตรง
        //$employees = DB::table('employees')->find(5);

        //การนับจำนวน
        //$employees = DB::table('employees')->count();
       // การหาค่าสูงสุด ต่ำสุด และค่าเฉลี่ย
        //$employees = DB::table('employees')->max('age');
        //$employees = DB::table('employees')->min('age');
        //$employees = DB::table('employees')->avg('age');

        // การจัดเรียนข้อมูล และการเลือกข้อมูลบางส่วน
        //$employees = DB::table('employees')->orderByDESC('age')->get(); // order asc
        // การจัดเรียนข้อมูล และการเลือกข้อมูลบางส่วน limie
        //$employees = DB::table('employees')->orderByDESC('age')->limit(3)->get(); // order asc
       //เพิ่มข้อมูล
        /*$data = array(
             'fullname' => 'Pakasinee Faisamrit',
             'gender' => 'Female',
             'email' => 'nampung@gmail.com',
             'tel' => '0968475050',
             'age' => 28,
             'address' => '188/39 Phichit',
             'avartar' => 'noavatar.jpg',
             'status' => 1
         );
        $employees = DB::table('employees')->insert($data);*/

        //การแก้ไขข้อมูลในตาราง
        /*$data = array(
            'email' => 'sapai@gmail.com',
            'tel' => '056616536',
            'age' => 30
        );

        $employees = DB::table('employees')->where('id', 1)->update($data);*/

        //การลบข้อมูลในตาราง
        //$employees = DB::table('employees')->where('id', 1002)->delete();
        //return $employees;
    }

        public function employeelist(){
            //อ่านข้อมูลทั้งหมดในตาราง Employee
            $employees = Employee::orderBy('id')->paginate(25);
            //อ่านแบบระบุเงื่อนไข
            //$employees = Employee::where('age','>','18')->OrderBy('age')->get();

            //การส่งข้อมูลที่ได้ไปยัง view
            return view('backend.pages.employeelist',compact('employees'));
        }
}
