<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HolaMon extends Model
{
    protected $string = "Hola Mon 2";

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }


}
