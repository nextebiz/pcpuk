<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcp extends Model
{
    use HasFactory;

    protected $fillable = [
        'registrationNumber', 'taxStatus', 'taxDueDate', 'motStatus', 'make', 'yearOfManufacture',
        'engineCapacity', 'co2Emissions', 'fuelType', 'markedForExport', 'colour', 'typeApproval', 'dateOfLastV5CIssued', 'motExpiryDate',
        'wheelplan', 'monthOfFirstRegistration', 'title', 'name', 'email', 'phone', 'vehicle_value', 'owned_since', 'pcp_taken_out', 'dealers_name', 'lenders_name'
    ];
}
