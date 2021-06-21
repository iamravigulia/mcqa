<?php
namespace Edgewizz\Mcqa\Models;

use Illuminate\Database\Eloquent\Model;

class McqaQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Mcqa\Models\McqaAns', 'question_id');
    }
    protected $table = 'fmt_mcqa_ques';
}