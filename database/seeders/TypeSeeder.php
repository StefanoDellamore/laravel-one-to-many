<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::troncate();

        $allType = [
            'HTML',
            'CSS',
            'JavaScript',
            'Vue',
            'SQL',
            'PHP',
            'Laravel',
        ];

        foreach ($allType as $singleType) {
            $type = Type::create([
                'tile' => $singleType,
                'slug' => str() -> slug($singleType),
            ]);
        }
    }
}
