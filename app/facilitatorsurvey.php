<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilitatorSurvey extends Model
{
  // protected $fillable = [
  //   'user_id', 'objectives', 'explain', 'describe', 'list', 'materials', 'prepare', 'delivery', 'modules',
  // ];

  public function facilitator()
    {
    return $this->belongsTo(Facilitator::class);
    }


}
