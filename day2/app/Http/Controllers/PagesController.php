<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    // public function about()
    // {
    //     return view('about', ['nama' => 'Desrina Putri']);
    // }

    // public function oddeven()
    // {
    //     return view('oddeven');
    // }

    // public function grade()
    // {
    //     return view('grade');
    // }

    // public function palindrome()
    // {
    //     return view('palindrome');
    // }

    // public function censored()
    // {
    //     return view('censored');
    // }

    // public function pingpongtuing()
    // {
    //     return view('pingpongtuing');
    // }

    // public function bubblesort()
    // {
    //     return view('bubblesort');
    // }

    public function oddevenbubblesort()
    {
        return view('oddevenbubblesort');
    }

    public function leapyear()
    {
        return view('leapyear');
    }

    public function variousnumbers()
    {
        return view('variousnumbers');
    }

    public function fibonaccinumbers()
    {
        return view('fibonaccinumbers');
    }

    public function countwords()
    {
        return view('countwords');
    }

    public function json()
    {
        return view('json');
    }

    public function date()
    {
        return view('date');
    }

    public function registration_form()
    {
        return view('registration_form');
    }

    public function verify_user()
    {
        return view('verify_user');
    }

    public function string_validation()
    {
        return view('string_validation');
    }

    public function date_count()
    {
        return view('date_count');
    }

    public function generate_username()
    {
        return view('generate_username');
    }

    public function form_login()
    {
        return view('form_login');
    }

    public function films()
    {
        return view('films');
    }

    public function count_viewers()
    {
        return view('count_viewers');
    }

    public function initial_name()
    {
        return view('initial_name');
    }

    public function count_bills()
    {
        return view('count_bills');
    }
}
