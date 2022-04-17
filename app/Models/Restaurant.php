<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    /* forma antiga de definir o accessor e o mutator

        // Accessor
        public function getNameAttribute($value) {
            return strtoupper($value); // retorna tudo em maiúsculo
        }

        // Mutator
        public function setNameAttribute($value) {
            $this->attributes['name'] = $value . ' Ok';
        }
    */

    /* accessor e mutator no Laravel 9.x */

    public function name(): Attribute { // 'name():' é o nome da propriedade no banco de dados
        return new Attribute(

            // Accessor
            get: fn($value) => strtoupper($value), // retorna tudo em maiúsculo // obs: o 'get:' é opcional
            
            // Mutator
            set: fn($value) => $value . ' Ok laravel 9.x' // obs: o 'set:' é opcional
        );
    }

    public function description(): Attribute {
        return new Attribute(
            get: fn($value) => strtoupper($value),
            set: fn($value) => $value . ' Ok laravel 9.x'
        );
    }
}
