<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/1/2015
 * Time: 9:38 πμ
 */

class ClassroomsSeeder extends Seeder{
    public function run() {
        // The alter table statement is used to start autoincrement from 1
        DB::update("ALTER TABLE classrooms AUTO_INCREMENT = 1;");
        //Inserting data
        DB::table('classrooms')->insert(array(
            'name'=>'Classroom-101',
            'isfree'=>true
        ));
        DB::table('classrooms')->insert(array(
            'name'=>'Classroom-102',
            'isfree'=>true
        ));
    }
    }
