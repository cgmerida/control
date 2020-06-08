<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Family extends Model
{
    //
    protected $fillable = [
        'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido',
        'integrantes', 'estado_civil', 'dpi', 'direccion', 'zona', 'colonia',
        'telefono', 'imagen', 'lat', 'lon', 'contador_agua', 'contador_luz',
        'user_id',
    ];


    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function rules()
    {
        return [
            'primer_nombre' => 'required|string|max:255',
            'segundo_nombre' => 'string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'string|max:255',
            'integrantes' => 'required|numeric|min:0',
            'estado_civil' => [
                'required',
                Rule::in(['Casado/a', 'Divorciado/a', 'Soltero/a', 'Separado/a', 'Viudo/a']),
            ],
            'dpi' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'zona' => 'required|numeric',
            'colonia' => 'required|string|max:255',
            'telefono' => 'required|numeric|regex:/^[0-9]{8}$/',
            'imagen' => 'string|max:255',
            'lat' => 'nullable|numeric',
            'lon' => 'nullable|numeric',
            'contador_agua' => 'nullable|string',
            'contador_luz' => 'nullable|string'
        ];
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
