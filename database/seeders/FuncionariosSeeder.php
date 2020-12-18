<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FuncionariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcionarios')->insert([
            'nome' => "Joao Rodrigues",
            'email' => 'joao@gmail.com',
            'telefone' => '(16) 98545-9545',
			'cpf' => '555.555.555-55',
			'empresa_id' => '1',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "José Rodrigues",
            'email' => 'jose@gmail.com',
            'telefone' => '(16) 98545-0000',
			'cpf' => '777.555.555-55',
			'empresa_id' => '3',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Valdemar Rodrigues",
            'email' => 'valdemar@gmail.com',
            'telefone' => '(16) 98545-9445',
			'cpf' => '111.555.555-55',
			'empresa_id' => '7',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Joao Silva",
            'email' => 'silva@gmail.com',
            'telefone' => '(16) 94555-9545',
			'cpf' => '233.555.555-55',
			'empresa_id' => '2',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Zeze Rodrigues",
            'email' => 'zeze@gmail.com',
            'telefone' => '(16) 94444-9545',
			'cpf' => '785.555.555-55',
			'empresa_id' => '1',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Amanda Rodrigues",
            'email' => 'amanda@gmail.com',
            'telefone' => '(16) 94445-9335',
			'cpf' => '444.555.555-55',
			'empresa_id' => '1',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Paulo Rodrigues",
            'email' => 'paulo@gmail.com',
            'telefone' => '(16) 99995-9545',
			'cpf' => '999.525.555-55',
			'empresa_id' => '1',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Paulo Silva",
            'email' => 'psilva@gmail.com',
            'telefone' => '(16) 89349-9545',
			'cpf' => '555.333.555-55',
			'empresa_id' => '4',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Arnaldo Silva",
            'email' => 'arnaldo@gmail.com',
            'telefone' => '(16) 98745-9545',
			'cpf' => '577.555.555-55',
			'empresa_id' => '9',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Joao Santos",
            'email' => 'jsantos@gmail.com',
            'telefone' => '(16) 88888-9545',
			'cpf' => '555.555.343-55',
			'empresa_id' => '8',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Arnaldo Santos",
            'email' => 'arnaldos@gmail.com',
            'telefone' => '(16) 93433-9545',
			'cpf' => '555.323.555-55',
			'empresa_id' => '10',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Jaqueline Santos",
            'email' => 'jaqueline@gmail.com',
            'telefone' => '(16) 97733-3545',
			'cpf' => '555.154.555-55',
			'empresa_id' => '5',
			'website' => 'www.site.com.br'
        ]);
		
        DB::table('funcionarios')->insert([
            'nome' => "Marta Santos",
            'email' => 'marta@gmail.com',
            'telefone' => '(16) 93322-9545',
			'cpf' => '522.333.555-55',
			'empresa_id' => '4',
			'website' => 'www.site.com.br'
        ]);
    }
}
