<?php

namespace edgewizz\mcqa\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Edgewizz\Edgecontent\Models\ProblemSetQues;
use Edgewizz\Mcqa\Models\McqaAns;
use Edgewizz\Mcqa\Models\McqaQues;
use Illuminate\Http\Request;

class McqaController extends Controller
{
    public function store(Request $request){
        $pmQ = new McqaQues();
        $pmQ->question = $request->question;
        $pmQ->format_title = $request->format_title;
        $pmQ->difficulty_level_id = $request->difficulty_level_id;
        $pmQ->hint = $request->hint;
        $pmQ->save();
        /* answer1 */
        if($request->answer_1_media){
            $answer_1 = new McqaAns();
            $answer_1->question_id = $pmQ->id;
            $answer_1->answer = $request->answer_1;
                $answer_1_media = new Media();
                $name__answer_1_media = time().uniqid().$request->answer_1_media->getClientOriginalName();
                $request->answer_1_media->storeAs('public/answers', $name__answer_1_media);
                $answer_1_media->url = 'answers/'.$name__answer_1_media;
                $answer_1_media->save();
            $answer_1->media_id = $answer_1_media->id;
            if($request->answer_1_media_es){
                $ques_media_es = new Media();
                $name_es = time().uniqid().$request->answer_1_media_es->getClientOriginalName();
                $request->answer_1_media_es->storeAs('public/answers', $name_es);
                $ques_media_es->url = 'answers/'.$name_es;
                $ques_media_es->save();
                $answer_1->media_id_es = $ques_media_es->id;
            }
            if ($request->ans_correct_1) {
                $answer_1->arrange = 1;
            }
            $answer_1->eng_word = $request->eng_word1;
            $answer_1->save();
        }
        /* //answer1 */
        /* answer2 */
        if($request->answer_2_media){
            $answer_2 = new McqaAns();
            $answer_2->question_id = $pmQ->id;
            $answer_2->answer = $request->answer_2;
                $answer_2_media = new Media();
                $name__answer_2_media = time().uniqid().$request->answer_2_media->getClientOriginalName();
                $request->answer_2_media->storeAs('public/answers', $name__answer_2_media);
                $answer_2_media->url = 'answers/'.$name__answer_2_media;
                $answer_2_media->save();
            $answer_2->media_id = $answer_2_media->id;
            if($request->answer_2_media_es){
                $ques_media_es = new Media();
                $name_es = time().uniqid().$request->answer_2_media_es->getClientOriginalName();
                $request->answer_2_media_es->storeAs('public/answers', $name_es);
                $ques_media_es->url = 'answers/'.$name_es;
                $ques_media_es->save();
                $answer_2->media_id_es = $ques_media_es->id;
            }
            if ($request->ans_correct_2) {
                $answer_2->arrange = 1;
            }
            $answer_2->eng_word = $request->eng_word2;
            $answer_2->save();
        }
        /* //answer2 */
        /* answer3 */
        if($request->answer_3_media){
            $answer_3 = new McqaAns();
            $answer_3->question_id = $pmQ->id;
            $answer_3->answer = $request->answer_3;
                $answer_3_media = new Media();
                $name__answer_3_media = time().uniqid().$request->answer_3_media->getClientOriginalName();
                $request->answer_3_media->storeAs('public/answers', $name__answer_3_media);
                $answer_3_media->url = 'answers/'.$name__answer_3_media;
                $answer_3_media->save();
            $answer_3->media_id = $answer_3_media->id;
            if($request->answer_3_media_es){
                $ques_media_es = new Media();
                $name_es = time().uniqid().$request->answer_3_media_es->getClientOriginalName();
                $request->answer_3_media_es->storeAs('public/answers', $name_es);
                $ques_media_es->url = 'answers/'.$name_es;
                $ques_media_es->save();
                $answer_3->media_id_es = $ques_media_es->id;
            }
            if ($request->ans_correct_3) {
                $answer_3->arrange = 1;
            }
            $answer_3->eng_word = $request->eng_word3;
            $answer_3->save();
        }
        /* //answer3 */
        /* answer4 */
        if($request->answer_4_media){
            $answer_4 = new McqaAns();
            $answer_4->question_id = $pmQ->id;
            $answer_4->answer = $request->answer_4;
                $answer_4_media = new Media();
                $name__answer_4_media = time().uniqid().$request->answer_4_media->getClientOriginalName();
                $request->answer_4_media->storeAs('public/answers', $name__answer_4_media);
                $answer_4_media->url = 'answers/'.$name__answer_4_media;
                $answer_4_media->save();
            $answer_4->media_id = $answer_4_media->id;
            if($request->answer_4_media_es){
                $ques_media_es = new Media();
                $name_es = time().uniqid().$request->answer_4_media_es->getClientOriginalName();
                $request->answer_4_media_es->storeAs('public/answers', $name_es);
                $ques_media_es->url = 'answers/'.$name_es;
                $ques_media_es->save();
                $answer_4->media_id_es = $ques_media_es->id;
            }
            if ($request->ans_correct_4) {
                $answer_4->arrange = 1;
            }
            $answer_4->eng_word = $request->eng_word4;
            $answer_4->save();
        }
        /* //answer4 */
        /* answer5 */
        /* if($request->answer_5_media){
            $answer_5 = new McqaAns();
            $answer_5->question_id = $pmQ->id;
            $answer_5->answer = $request->answer_5;
                $answer_5_media = new Media();
                $request->answer_5_media->storeAs('public/answers', time().$request->answer_5_media->getClientOriginalName());
                $answer_5_media->url = 'answers/'.time().$request->answer_5_media->getClientOriginalName();
                $answer_5_media->save();
            $answer_5->media_id = $answer_5_media->id;
            if ($request->ans_correct_5) {
                $answer_5->arrange = 1;
            }
            $answer_5->eng_word = $request->eng_word5;
            $answer_5->save();
        } */
        /* //answer5 */
        /* answer6 */
        /* if($request->answer_6_media){
            $answer_6 = new McqaAns();
            $answer_6->question_id = $pmQ->id;
            $answer_6->answer = $request->answer_6;
                $answer_6_media = new Media();
                $request->answer_6_media->storeAs('public/answers', time().$request->answer_6_media->getClientOriginalName());
                $answer_6_media->url = 'answers/'.time().$request->answer_6_media->getClientOriginalName();
                $answer_6_media->save();
            $answer_6->media_id = $answer_6_media->id;
            if ($request->ans_correct_6) {
                $answer_6->arrange = 1;
            }
            $answer_6->eng_word = $request->eng_word6;
            $answer_6->save();
        } */
        /* //answer6 */
        if($request->problem_set_id && $request->format_type_id){
            $pbq = new ProblemSetQues();
            $pbq->problem_set_id = $request->problem_set_id;
            $pbq->question_id = $pmQ->id;
            $pbq->format_type_id = $request->format_type_id;
            $pbq->save();
        }
        return back();
    }
    public function edit($id, Request $request){
        $q = McqaQues::where('id', $id)->first();
        if($request->format_title){
            $q->format_title = $request->format_title;
        }
        $q->question = $request->question;
        $q->difficulty_level_id = $request->difficulty_level_id;
        // $q->level_id = $request->question_level;
        // $q->score = $request->question_score;
        $q->hint = $request->hint;
        $q->save();
        $answers = McqaAns::where('question_id', $q->id)->get();
        foreach($answers as $ans){
            $inputAnswer = 'answer'.$ans->id;
            if($request->$inputAnswer){
                $inputArrange = 'ans_correct'.$ans->id;
                $ans->answer = $request->$inputAnswer;
                $inputEngWord = 'eng_word'.$ans->id;
                $ans->eng_word = $request->$inputEngWord;
                if($request->$inputArrange){
                    $ans->arrange = 1;
                }else{
                    $ans->arrange = 0;
                }
                $ans->save();
            }
        }
        $anss = McqaAns::where('question_id', $q->id)->get();
        foreach($anss as $ans){
            $inputImage = 'answer_'.$ans->id.'_audio';
            $inputImageES = 'answer_'.$ans->id.'_audio_es';
            if($request->$inputImage){
                $audio = new Media();
                $audio__name = time().uniqid().$request->$inputImage->getClientOriginalName();
                $request->$inputImage->storeAs('public/questions', $audio__name);
                $audio->url = 'questions/'.$audio__name;
                $audio->save();
                $ans->media_id = $audio->id;
                $ans->save();
            }
            if($request->$inputImageES){
                $audio = new Media();
                $audio__name_es = time().uniqid().$request->$inputImageES->getClientOriginalName();
                $request->$inputImageES->storeAs('public/questions', $audio__name_es);
                $audio->url = 'questions/'.$audio__name_es;
                $audio->save();
                $ans->media_id_es = $audio->id;
                $ans->save();
            }
        }
        return back();
    }

    public function inactive($id){
        $f = McqaAns::where('id', $id)->first();
        $f->active = '0';
        $f->save();
        return back();
    }
    public function active($id){
        $f = McqaAns::where('id', $id)->first();
        $f->active = '1';
        $f->save();
        return back();
    }

    public function imagecsv($question_image, $images){
        foreach($images as $valueImage){
            $uploadImage = explode(".", $valueImage->getClientOriginalName());
            if($uploadImage[0] == $question_image){
                // dd($valueImage);
                $name = time(). uniqid() . $valueImage->getClientOriginalName();
                $media = new Media();
                $valueImage->storeAs('public/question_images', $name);
                $media->url = 'question_images/' . $name;
                $media->save();
                return $media->id;
            }
        }
    }
    public function csv_upload(Request $request){
        $file = $request->file('file');
        // $images = $request->file('images');
        $audio = $request->file('audio');
        $audio_es = $request->file('audio_es');

        // dd($file);
        // File Details
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $tempPath = $file->getRealPath();
        $fileSize = $file->getSize();
        $mimeType = $file->getMimeType();
        // Valid File Extensions
        $valid_extension = array("csv");
        // 2MB in Bytes
        $maxFileSize = 2097152;
        // Check file extension
        if (in_array(strtolower($extension), $valid_extension)) {
            // Check file size
            if ($fileSize <= $maxFileSize) {
                // File upload location
                $location = 'uploads/mcqa';
                // Upload file
                $file->move($location, $filename);
                // Import CSV to Database
                $filepath = public_path($location . "/" . $filename);
                // Reading file
                $file = fopen($filepath, "r");
                $importData_arr = array();
                $i = 0;
                while (($filedata = fgetcsv($file, 1000, ",")) !== false) {
                    $num = count($filedata);
                    // Skip first row (Remove below comment if you want to skip the first row)
                    if ($i == 0) {
                        $i++;
                        continue;
                    }
                    for ($c = 0; $c < $num; $c++) {
                        $importData_arr[$i][] = $filedata[$c];
                    }
                    $i++;
                }
                fclose($file);
                // Insert to MySQL database
                foreach ($importData_arr as $importData) {
                    $insertData = array(
                        "question"      => $importData[1],
                        "answer1"       => $importData[2],
                        "image1"        => $importData[3],
                        "image_es1"     => $importData[4],
                        "arrange1"      => $importData[5],
                        "eng_word1"     => $importData[6],

                        "answer2"       => $importData[7],
                        "image2"        => $importData[8],
                        "image_es2"     => $importData[9],
                        "arrange2"      => $importData[10],
                        "eng_word2"     => $importData[11],

                        "answer3"       => $importData[12],
                        "image3"        => $importData[13],
                        "image_es3"     => $importData[14],
                        "arrange3"      => $importData[15],
                        "eng_word3"     => $importData[16],

                        "answer4"       => $importData[17],
                        "image4"        => $importData[18],
                        "image_es4"     => $importData[19],
                        "arrange4"      => $importData[20],
                        "eng_word4"     => $importData[21],

                        "level"         => $importData[22],
                        "hint"          => $importData[23],

                    );
                    // var_dump($insertData['answer1']);
                    /*  */
                    if ($insertData['question']) {
                        $fill_Q = new McqaQues();
                        $fill_Q->question = $insertData['question'];
                        if($request->format_title){
                            $fill_Q->format_title = $request->format_title;
                        }
                        if(!empty($insertData['level'])){
                            if($insertData['level'] == 'easy'){
                                $fill_Q->difficulty_level_id = 1;
                            }else if($insertData['level'] == 'medium'){
                                $fill_Q->difficulty_level_id = 2;
                            }else if($insertData['level'] == 'hard'){
                                $fill_Q->difficulty_level_id = 3;
                            }
                        }
                        if ($insertData['hint'] == '-') {
                        }else{
                            $fill_Q->hint = $insertData['hint'];
                        }
                        $fill_Q->save();
                        if($request->problem_set_id && $request->format_type_id){
                            $pbq = new ProblemSetQues();
                            $pbq->problem_set_id = $request->problem_set_id;
                            $pbq->question_id = $fill_Q->id;
                            $pbq->format_type_id = $request->format_type_id;
                            $pbq->save();
                        }

                        for ($x = 1; $x <= 4; $x++) {
                            $f_answer  = $insertData['answer'.$x];
                            $f_arrange  = $insertData['arrange'.$x];
                            $f_eng_word  = $insertData['eng_word'.$x];
                            $f_image  = $insertData['image'.$x];
                            $f_image_es  = $insertData['image_es'.$x];
                            
                            if ($f_answer == '-') {
                            } else {
                                $f_Ans1 = new McqaAns();
                                $f_Ans1->question_id = $fill_Q->id;
                                $f_Ans1->answer = $f_answer;
                                if (!empty($f_image) && $f_image != '-') {
                                    $media_id = $this->imagecsv($f_image, $audio);
                                    $f_Ans1->media_id = $media_id;
                                }
                                if (!empty($f_image_es) && $f_image_es != '-') {
                                    $media_id_es = $this->imagecsv($f_image_es, $audio_es);
                                    $f_Ans1->media_id_es = $media_id_es;
                                }
                                $f_Ans1->arrange = $f_arrange;
                                if ($f_eng_word == '-') {
                                } else {
                                    $f_Ans1->eng_word = $f_eng_word;
                                }
                                $f_Ans1->save();
                            }
                        }

                        /* if ($insertData['answer1'] == '-') {
                        } else {
                            $f_Ans1 = new McqaAns();
                            $f_Ans1->question_id = $fill_Q->id;
                            $f_Ans1->answer = $insertData['answer1'];
                            if (!empty($insertData['image1']) && $insertData['image1'] != '') {
                                $media_id = $this->imagecsv($insertData['image1'], $audio);
                                $f_Ans1->media_id = $media_id;
                            }
                            $f_Ans1->arrange = $insertData['arrange1'];
                            $f_Ans1->save();
                        }
                        if ($insertData['answer2'] == '-') {
                        } else {
                            $f_Ans2 = new McqaAns();
                            $f_Ans2->question_id = $fill_Q->id;
                            $f_Ans2->answer = $insertData['answer2'];
                            if (!empty($insertData['image2']) && $insertData['image2'] != '') {
                                $media_id = $this->imagecsv($insertData['image2'], $audio);
                                $f_Ans2->media_id = $media_id;
                            }
                            $f_Ans2->arrange = $insertData['arrange2'];
                            $f_Ans2->save();
                        }
                        if ($insertData['answer3'] == '-') {
                        } else {
                            $f_Ans3 = new McqaAns();
                            $f_Ans3->question_id = $fill_Q->id;
                            $f_Ans3->answer = $insertData['answer3'];
                            if (!empty($insertData['image3']) && $insertData['image3'] != '') {
                                $media_id = $this->imagecsv($insertData['image3'], $audio);
                                $f_Ans3->media_id = $media_id;
                            }
                            $f_Ans3->arrange = $insertData['arrange3'];
                            $f_Ans3->save();
                        }
                        if ($insertData['answer4'] == '-') {
                        } else {
                            $f_Ans4 = new McqaAns();
                            $f_Ans4->question_id = $fill_Q->id;
                            $f_Ans4->answer = $insertData['answer4'];
                            if (!empty($insertData['image4']) && $insertData['image4'] != '') {
                                $media_id = $this->imagecsv($insertData['image4'], $audio);
                                $f_Ans4->media_id = $media_id;
                            }
                            $f_Ans4->arrange = $insertData['arrange4'];
                            $f_Ans4->save();
                        } */
                    }
                    /*  */
                }
                // Session::flash('message', 'Import Successful.');
            } else {
                // Session::flash('message', 'File too large. File must be less than 2MB.');
            }
        } else {
            // Session::flash('message', 'Invalid File Extension.');
        }
        return back();
    }

}
