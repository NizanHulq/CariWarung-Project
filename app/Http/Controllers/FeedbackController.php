<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;


class FeedbackController extends Controller
{
    public function store(Request $request){
        $feedback = new Feedback;
        $feedback -> nama = $request->nama;
        $feedback -> komentar = $request->komentar;
        $feedback -> save(); 

        return back();   
    }

    public function view_comment()
    {
        $feedback = Feedback::orderBy('id','desc')->paginate(10);
        $no = 10 * ($feedback->currentPage() - 1);
        return view('admin.komentar',compact('feedback','no'));
    }
}
