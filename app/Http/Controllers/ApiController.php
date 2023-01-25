<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use OpenAI;

class ApiController extends Controller
{
    public function index(){
        return view('imagegenetate');
    }
    public function image(Request $request){

        $request->validate([
           'text'=>'required|string|max:1000',
           'size'=>Rule::in(['sm','md','lg']),
        ]);
        //  get the description
        $text=$request->text;
        // get the size
        switch($request->size){
            case 'lg':
                $size='1024x1024';
                break;
            case 'md':
                 $size='512x512';
                 break;
            default:
                $size='256x256';
        }
        $client=OpenAI::client(env('OPENAI_API_KEY'));
        $response=$client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $text,
            "temperature" => 0.7,
            "max_tokens" => 256,
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,

           ]);
           $url=$response['choices'][0]['text'];
           return view('show',compact(['url','text']));
    }
}
