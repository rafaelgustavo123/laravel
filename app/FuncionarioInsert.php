<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncionarioInsert extends Model
{
	protected $table = 'funcionarios';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'nome', 'email', 'telefone', 'cpf', 'empresa', 'website'
	];
}