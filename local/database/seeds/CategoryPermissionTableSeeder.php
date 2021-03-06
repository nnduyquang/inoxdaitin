<?php

use Illuminate\Database\Seeder;
use App\CategoryPermission;

class CategoryPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_permission = [
//            [
//                'name' => 'Role' // optional
//            ],
//            [
//                'name' => 'User' //
//            ],
//            [
//                'name' => 'Tin Tức', //
//            ],
//            [
//                'name' => 'Cấu Hình', //
//            ],
//            [
//                'name' => 'Loại Sản Phẩm', //
//            ],
            [
                'name' => 'Sản Phẩm', //
            ],

        ];
        foreach ($category_permission as $key => $value) {
            CategoryPermission::create($value);
        }
    }
}
