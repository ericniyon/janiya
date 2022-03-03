<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            ['id'=>101, 'name'=>'Nyarugenge'],
            ['id'=>102, 'name'=>'Gasabo'],
            ['id'=>103, 'name'=>'Kicukiro'],
            ['id'=>201, 'name'=>'Nyanza'],
            ['id'=>202, 'name'=>'Gisagara'],
            ['id'=>203, 'name'=>'Nyaruguru'],
            ['id'=>204, 'name'=>'Huye'],
            ['id'=>205, 'name'=>'Nyamagabe'],
            ['id'=>206, 'name'=>'Ruhango'],
            ['id'=>207, 'name'=>'Muhanga'],
            ['id'=>208, 'name'=>'Kamonyi'],
            ['id'=>301, 'name'=>'Karongi'],
            ['id'=>302, 'name'=>'Rutsiro'],
            ['id'=>303, 'name'=>'Rubavu'],
            ['id'=>304, 'name'=>'Nyabihu'],
            ['id'=>305, 'name'=>'Ngororero'],
            ['id'=>306, 'name'=>'Rusizi'],
            ['id'=>307, 'name'=>'Nyamasheke'],
            ['id'=>401, 'name'=>'Rulindo'],
            ['id'=>402, 'name'=>'Gakenke'],
            ['id'=>403, 'name'=>'Musanze'],
            ['id'=>404, 'name'=>'Burera'],
            ['id'=>405, 'name'=>'Gicumbi'],
            ['id'=>501, 'name'=>'Rwamagana'],
            ['id'=>502, 'name'=>'Nyagatare'],
            ['id'=>503, 'name'=>'Gatsibo'],
            ['id'=>504, 'name'=>'Kayonza'],
            ['id'=>505, 'name'=>'Kirehe'],
            ['id'=>506, 'name'=>'Ngoma'],
            ['id'=>507, 'name'=>'Bugesera']
        ];

        District::insert($districts);
    }
}
