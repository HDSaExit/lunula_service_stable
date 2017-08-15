<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location_model extends Model
{
    protected $table = "locations";
    protected  $primaryKey = "loc_id";
    protected $fillable = ["loc_id", "loc_name"];
}
