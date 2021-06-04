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
        $roles = array_keys(config('accesscontrollist')['roles']);

        $get_sequence = collect(['name' => 'admin'],['name' => 'chief']);
        foreach($roles as $role){
            $user = User::factory()->create(['name' => $role]);
            if($r = Role::where('name', $user->name)->first()){
                $user->roles()->attach($r);
            }
        }
    }
}
