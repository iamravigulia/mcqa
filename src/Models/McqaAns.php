<?php
namespace Edgewizz\Mcqa\Models;

use Illuminate\Database\Eloquent\Model;

class McqaAns extends Model
{
    public function match(){
        return $this->belongsTo('Edgewizz\Mcqa\Models\McqaAns', 'match_id');
    }
    protected $table = 'fmt_mcqa_ans';
}
