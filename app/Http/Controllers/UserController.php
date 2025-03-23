<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use App\Service\AwsomeServiceInterface;
class UserController extends Controller
{
    public function abc(AwsomeServiceInterface $aws)
    {
        $aws->doSomething();
    }
    public function index (User $key)
    {
        return $key ;
        // return view ('app');
    }
    public function about ()
    {
         return view ('about');
    }
    public function contact ()
    {
         return view ('contact');
    }
}
