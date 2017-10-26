<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Produks
 *
 * @package App
 *
 * @SWG\Definition(
 *   definition="Produks",
 *   required={"name"}
 * )
 *
 */
class Produks extends Model
{
    /**
     * @SWG\Property(format="string")
     * @var string
     */
    protected $table		= 'produks';
 	protected $fillable 	= ['id', 'user_id', 'nama', 'kategori', 'deskripsi', 'berat', 'harga', 'stok', 'metode_kirim', 'metode_bayar', 'available', 'status'];
    protected $primaryKey   = "id";

    public $timestamps      = false;
    //...
}