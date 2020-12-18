<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaInsert extends Model
{
	protected $table = 'empresas';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'nome', 'email','website', 'logo'
	];
}