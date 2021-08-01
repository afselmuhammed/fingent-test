<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Teacher::where('id',1)->exists())
        {
            $tag=New Teacher();
            $tag->id=1;
            $tag->name="Katie";
            $tag->save();
        }
        if(!Teacher::where('id',2)->exists())
        {
            $tag=New Teacher();
            $tag->id=2;
            $tag->name="Max";
            $tag->save();
        }
    }
}
