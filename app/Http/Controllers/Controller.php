<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Contact;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function messages($lang){
        if ($lang == 'es') {
            return $messages = [
                'email.required' => 'Ingresa un email por favor',
                'email.email' => 'Ingresa un email valido',
                'email.max' => 'El email ingresado es demasiado largo',

                'message.required' => 'Ingresa un mensaje de consulta por favor',
                'message.string' => 'Ingresa un mensaje de consulta valido',
                'message.max' => 'El mensaje de consulta es demasiado largo',

                'name.required' => 'Ingresa algún tipo de identificación u nombre por favor',
                'name.string' => 'Ingresa algún tipo de identificación u nombre valido',
                'name.max' => 'La identificación u nombre es demasiado largo',

                'h-captcha-response.hcaptcha' => 'Por favor verifica que eres humano.',
            ];
        }else
        if ($lang == 'en') {
            return $messages = [
                'email.required' => 'Please enter an email',
                'email.email' => 'Please enter a valid email',
                'email.max' => 'The email entered is too long',

                'message.required' => 'Please enter a message',
                'message.string' => 'Please enter a valid message',
                'message.max' => 'The message is too long',

                'name.required' => 'Please enter some form of identification or name',
                'name.string' => 'Please enter a valid form of identification or name',
                'name.max' => 'The identification or name is too long',

                'h-captcha-response.hcaptcha' => 'Please verify that you are human.',
            ];
        }else
        if ($lang == 'it') {
            return $messages = [
                'email.required' => 'Inserire un indirizzo email',
                'email.email' => 'Inserire un indirizzo email valido',
                'email.max' => "L'indirizzo email inserito è troppo lungo",

                'message.required' => 'Inserire un messaggio di consultazione',
                'message.string' => 'Inserire un messaggio valido',
                'message.max' => 'Il messaggio di consultazione è troppo lungo',

                'name.required' => 'Inserire una forma di identificazione o nome',
                'name.string' => 'Inserire una forma di identificazione o nome valido',
                'name.max' => 'La forma di identificazione o il nome è troppo lungo',

                'h-captcha-response.hcaptcha' => 'Verifica di essere umano.',
            ];
        }else{
            return $messages = [
                'email.required' => 'Please enter an email',
                'email.email' => 'Please enter a valid email',
                'email.max' => 'The email entered is too long',


                'message.required' => 'Please enter a message',
                'message.string' => 'Please enter a valid message',
                'message.max' => 'The message is too long',

                'name.required' => 'Please enter some form of identification or name',
                'name.string' => 'Please enter a valid form of identification or name',
                'name.max' => 'The identification or name is too long',

                'h-captcha-response.hcaptcha' => 'Please verify that you are human.',
            ];
        }
    }

    public function contact(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'email|required|max:256',
            'message' => 'string|required|max:1024',
            'name' => 'string|required|max:256',
            'h-captcha-response' => 'hcaptcha',
        ], $this->messages(filter_var($request->locale, FILTER_UNSAFE_RAW,  FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)));

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }else{
            Contact::Create([
                'email' => $request->email,
                'message' => $request->message,
                'name' => $request->name,
            ]);
            return redirect()->back()->withErrors(['success' => 'success']);
        }
    }
}
