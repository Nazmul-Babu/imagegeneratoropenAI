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
        $client=OpenAI::client(env('Open_AI_Key'));
        $response=$client->images()->create([
            'prompt' => $text,
             'n' => 1,
            'size' => $size,
            'response_format' => 'url',
           ]);
           $url=$response->toArray()['data']['0']['url'];
           return view('show',compact(['url','text']));
    }
}
