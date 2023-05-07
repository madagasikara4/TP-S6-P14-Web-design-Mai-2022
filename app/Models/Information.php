<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\str;


/**
 * Class Information
 * 
 * @property int $idinfo
 * @property string|null $titre
 * @property string|null $descri
 * @property string|null $photo
 * @property string|null $contenue
 *
 * @package App\Models
 */
class Information extends Model
{
	protected $table = 'information';
	protected $primaryKey = 'idinfo';
	public $timestamps = false;

	protected $fillable = [
		'titre',
		'descri',
		'photo',
		'contenue'
	];

	public function slug(){
        $str=str::slug($this->titre);
        info($str);
        return $str;
    }
}
