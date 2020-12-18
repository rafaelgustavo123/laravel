<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// php artisan db:seed

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nome' => "Microsoft",
            'email' => 'microsoft@microsoft.com',
            'logo' => 'http://www.microsoft.com/logo.png',
			'website' => 'http://www.microsoft.com'
        ]);
		
		DB::table('empresas')->insert([
            'nome' => "Apple",
            'email' => 'apple@apple.com',
            'logo' => 'http://www.apple.com/logo.png',
			'website' => 'http://www.apple.com'
        ]);
		
		DB::table('empresas')->insert([
            'nome' => "Amazon",
            'email' => 'amazon@amazon.com',
            'logo' => 'http://www.amazon.com/logo.png',
			'website' => 'http://www.amazon.com'
        ]);
		
		DB::table('empresas')->insert([
            'nome' => "PHILIPS",
            'email' => 'philips@philips.com',
            'logo' => 'http://www.philips.com/logo.png',
			'website' => 'http://www.philips.com'
        ]);
		
		DB::table('empresas')->insert([
            'nome' => "Brastemp",
            'email' => 'brastemp@brastemp.com',
            'logo' => 'http://www.philips.com/logo.png',
			'website' => 'http://www.philips.com'
        ]);
		
		DB::table('empresas')->insert([
            'nome' => "Samsung",
            'email' => 'samsung@samsung.com',
            'logo' => 'http://www.samsung.com/logo.png',
			'website' => 'http://www.samsung.com'
        ]);
		
		DB::table('empresas')->insert([
            'nome' => "Bradesco",
            'email' => 'bradesco@bradesco.com',
            'logo' => 'http://www.bradesco.com/logo.png',
			'website' => 'http://www.bradesco.com'
        ]);
		
		DB::table('empresas')->insert([
            'nome' => "Itau",
            'email' => 'itau@itau.com',
            'logo' => 'http://www.itau.com/logo.png',
			'website' => 'http://www.itau.com'
        ]);
		
        DB::table('empresas')->insert([
            'nome' => "Petrobras",
            'email' => 'petrobras@petrobras.com',
            'logo' => 'http://www.petrobras.com/logo.png',
			'website' => 'http://www.petrobras.com'
        ]);
		
        DB::table('empresas')->insert([
            'nome' => "Itausa",
            'email' => 'itausa@itausa.com',
            'logo' => 'http://www.itausa.com/logo.png',
			'website' => 'http://www.itausa.com'
        ]);
		
        DB::table('empresas')->insert([
            'nome' => "Cielo",
            'email' => 'cielo@cielo.com',
            'logo' => 'http://www.cielo.com/logo.png',
			'website' => 'http://www.cielo.com'
        ]);
		
        DB::table('empresas')->insert([
            'nome' => "UOL",
            'email' => 'uol@uol.com',
            'logo' => 'http://www.uol.com/logo.png',
			'website' => 'http://www.uol.com'
        ]);
		
    }
}
