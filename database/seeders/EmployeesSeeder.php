<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
//เรียกใช้งาน Model Employee
use App\Models\Employee;
class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ลบข้อมูลเก่า
        DB::table('employees')->delete();
        //insert ข้อมูล
        $data = [
                    [
                'fullname' => 'Natchanan Wongsangthum',
                'gender' => 'Male',
                'email' => 'natchanans10@email.com',
                'tel' => '0951034004',
                'age' => 29,
                'address' => '188/39 Phichit',
                'avartar' => 'noavatar.jpg',
                'status' => 1
                    ]
            ];
        Employee::insert($data);
        //การ Facker ข้อมูลออกมา
        Employee::factory(1000)->create();
    }
}
