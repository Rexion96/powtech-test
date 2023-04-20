<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests\QuestionOneRequest;

class QuestionController extends Controller
{
    public function QuestionOne(QuestionOneRequest $request){
        $value = $request['value'];

        $arr = array();

        foreach (range(1, $value) as $i) {
            if ($i % 3 == 0 && $i %  5 == 0) {
                array_push($arr, 'fizzbuzz');
            } else if ($i %  5 == 0) {
                array_push($arr, 'buzz');
            } else if ($i % 3 == 0) {
                array_push($arr, 'fizz');
            } else {
                array_push($arr, $i);
            }
        }

        return $arr;
    }

    public function QuestionTwoEndpointOne(){
        // sleep(1);

        return hash('sha256', uniqid());
    }

    public function QuestionTwoEndpointTwo(){
        $getHash = $this->QuestionTwoEndpointOne();
        $lastChar = substr($getHash, -1);
        $message = 'Do not pass! Last digit of the hash is not an odd number!';
        $statusCode = 422;

        if (is_numeric($lastChar)){
            if ($lastChar % 2 == 1){
                $message = 'Pass! Last digit of the hash is an odd number!';
                $statusCode = 200;
            }
        }

        return response()->json(['message' => $message, 'statusCode' => $statusCode]);
    }
}
