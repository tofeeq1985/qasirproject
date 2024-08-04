<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resident_tax extends Model
{
    use HasFactory;
    protected $table="resident_taxs";
    protected $fillable=[
        "family_code",
        "name",
        "phone_number",
        "address",
        "tax_name",
        "tax_amount",
        "persons",
        "total_tax",
        "message"
    ];
}
