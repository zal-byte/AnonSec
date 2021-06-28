<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $value = array('Hacking','Computer','Coding','Technology','Random');
        for($i = 0;$i < 5; $i++){
            $posts = [
                [
                    'tag_identifier'=>uniqid(),
                    'value'=>$value[$i],
                    'count'=>$i+1,
                    'created_at'=> new \DateTime,
                    'updated_at'=>null,
                ],
            ];
            \DB::table('tag')->insert($posts);
        }
    }
}
