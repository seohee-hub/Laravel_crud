<?php

namespace App\Http\Controllers;

use Library\Validator_form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notice;
use DB;
use Hash;


class NoticeController extends Controller
{

    public function __construct(Request $request)
    {
        //
    }


    public function index() 
    {
        $notices = Notice::orderBy('id','DESC')->get();
        return view('main.index',compact('notices'));
    }


    public function create() // 생성
    {
        return view('main.create');
    }   


    public function store(Request $request) // 저장
    {
        $notices= new Notice;
        $notices->name= $request->name;
        $notices->pw= Hash::make($request->pw);
        $notices->title= $request->title;
        $notices->content= $request->content;
        $notices->save();

        $id = $notices->id;
        
        return redirect('/main/'.$id.'/read');
    }


    public function read($id) // 수정
    {
        $notices = Notice::find($id);
        return view('main.read',compact('notices'));
    }


    public function password(Request $request, $id) // 비밀글 뷰
    {
        $notices = Notice::find($id);
        $request->session()->put('guest', 'no');

        return view('main.pw',compact('notices'));
    }


    public function check(Request $request, $id) // 비번 체크
    {
        $pw = $request->input('pw');
        $notices = Notice::find($id);

        if (!Hash::check($pw, $notices->pw)) {
            return redirect()->back()->with('alert', '비밀번호가 틀렸습니다.');
        } else {
            return redirect('/main/'.$id.'/edit')->with('guest', 'yes');
        }
    }


    public function edit($id) // 수정
    {
        $notices = Notice::find($id);
        return view('main.edit',compact('notices'));
    }


    public function update(Request $request, $id) // 업데이트
    {
        
        $notices= Notice::find($id);
        $pw = $request->input('pw');

        $notices->name= $request->name;
        $notices->pw= $request->pw;
        $notices->title= $request->title;
        $notices->content= $request->content;
        $notices->save();

        return redirect('/main/'.$id.'/read')->with('guest', 'yes');
    }


    public function delete($id) // 삭제
    {
        $notices = Notice::find($id);
        $notices->delete();
        return redirect('/main/index');

    }

}
