<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Menu::query()->forceDelete();


        // master user
        $parent = Menu::create([
            'menuid' => 0,
            'name' => 'settings',
            'url' => 'settings',
            'order' => 300,
            'enabled' => 1,
        ]);
            Menu::create([
                'menuid' => $parent->id,
                'name' => 'Profile',
                'url' => 'settings/profile',
                'order' => 303,
                'enabled' => 1,
            ]);    

             Menu::create([
                'menuid' => $parent->id,
                'name' => 'Password',
                'url' => 'settings/password',
                'order' => 301,
                'enabled' => 1,
            ]);

            Menu::create([
                'menuid' => $parent->id,
                'name' => 'Email',
                'url' => 'settings/email',
                'order' => 302,
                'enabled' => 1,
            ]);


    }
}
