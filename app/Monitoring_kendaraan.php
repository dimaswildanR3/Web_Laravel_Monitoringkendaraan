<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring_kendaraan extends Model
{
    protected $table = 'monitoring_kendaraan';
    protected $primarykey = 'id';
    protected $foreignkey = 'driver_id';

    public $timestamps = false;

    protected $fillable=['name','driver_id','pemakaian','pengembalian','persetujuan'];
   
    public function driver ()
    {
    return $this->belongsTo(Driver::class);
    }
}
