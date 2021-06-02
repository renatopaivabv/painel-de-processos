<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Role};
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory()
                ->count(4)
                ->state(new Sequence(
                    ['name' => 'admin'],
                    ['name' => 'chief'],
                    ['name' => 'manager'],
                    ['name' => 'user'],
                ))
                ->create();
        foreach($users as $user){
            if($r = Role::where('name', $user->name)->first()){
                $user->roles()->attach($r);
            }
        }
    }
}
