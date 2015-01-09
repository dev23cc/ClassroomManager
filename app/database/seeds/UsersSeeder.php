<?php
class UsersSeeder extends Seeder
{
    public function run()
    {

        DB::update("ALTER TABLE users AUTO_INCREMENT = 1;");
        //Inserting admin user
        $date = new \DateTime;
        DB::table('users')->insert(array(
                'username' => 'admin',
                'Name'=>'Administrator',
                'isAdmin'=>true,
                'password' => Hash::make('admin'),
                'created_at' => $date,
                'updated_at' => $date

        ));
        $date = new \DateTime;
        DB::table('users')->insert(array(
            'username' => 'user1',
            'Name'=>'Teacher1',
            'isAdmin'=>false,
            'isTeacher'=>true,
            'password' => Hash::make('user1'),
            'created_at' => $date,
            'updated_at' => $date
        ));
        $date = new \DateTime;
        DB::table('users')->insert(array(
            'username' => 'user2',
            'Name'=>'Teacher2',
            'isAdmin'=>false,
            'isTeacher'=>true,
            'password' => Hash::make('user2'),
            'created_at' => $date,
            'updated_at' => $date
        ));
    }
}