<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user =[
            [
                'name' =>'Admin'    ,   
                'email' =>'admin@gmail.com'    ,   
                'is_admin' =>'1'    ,   
                'password' => bcrypt ('7777')     
            ],
            [
                'name' =>'User'    ,   
                'email' =>'user@gmail.com'    ,   
                'is_admin' =>'0'    ,   
                'password' => bcrypt ('7777')  
        
            ],
             [
                'name' =>'Staff'    ,   
                'email' =>'staff@gmail.com'    ,   
                'is_admin' =>'3'    ,   
                'password' => bcrypt ('7777')  
        
            ],
            [
                'name' =>'Approval'    ,   
                'email' =>'approval@gmail.com'    ,   
                'is_admin' =>'2'    ,   
                'password' => bcrypt ('7777')  
        
            ]
            ];
            foreach($user as $key => $value){
                User::create($value);
            }
    }
}
