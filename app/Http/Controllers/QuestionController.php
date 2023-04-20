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
        sleep(1);

        return hash('sha256', uniqid());
    }

    public function QuestionTwoEndpointTwo(){
        $getHash = $this->QuestionTwoEndpointOne();
        $lastChar = substr($getHash, -1);
        $statusCode = 422;

        if (is_numeric($lastChar)){
            $isOddNumber = ($lastChar % 2 == 1);

            if ($isOddNumber) {
                $statusCode = 200;
            }

            $message = 'The last character of the hash is `' . $lastChar . '`. ';
            $message .= 'This is ' . ($isOddNumber ? 'an odd' : 'an even') . ' number. ';
            $message .= $isOddNumber ? 'Pass.' : 'Do not pass.';
        } else {
            $message = 'The last 1 character of the hash are `' . $lastChar .'`. This is an alphabet. Do not Pass.';
        }

        return response()->json(['message' => $message, 'statusCode' => $statusCode], $statusCode);
    }
}
