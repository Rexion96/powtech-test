<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests\QuestionOneRequest;

class QuestionController extends Controller
{
    public function QuestionOne(QuestionOneRequest $request){
        $value = $request['value'];

        $arr = [];

        foreach (range(1, $value) as $i) {
            $arr[] = ($i % 3 == 0 && $i % 5 == 0) ? 'fizzbuzz' :
             ($i % 5 == 0 ? 'buzz' : ($i % 3 == 0 ? 'fizz' : $i));
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
