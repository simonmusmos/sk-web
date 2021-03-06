<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function create(Request $request){
        Member::create([
            "first_name" => $request->fname,
            "middle_name" => $request->mname,
            "last_name" => $request->lname,
            "address" => $request->address,
            "gender" => $request->gender,
            "father_name" => $request->father_name,
            "mother_name" => $request->mother_name,
            "email" => $request->email,
            "contact_number" => $request->number,
            "educational_attainment" => $request->education_attainment,
            "current_work" => $request->current_work,
            "is_voter" => $request->is_voter,
            "precint_number" => $request->precint
        ]);

        echo json_encode(Array("result" => true));
    }

    public function index(Request $request){
        $members = Member::where('first_name', 'LIKE', @$request->key.'%')
                                    ->orWhere('middle_name', 'LIKE', @$request->key.'%')
                                    ->orWhere('last_name', 'LIKE', @$request->key.'%')
                                    ->orWhere('email', 'LIKE', @$request->key.'%')
                                    ->paginate(20);

        if(@$request->key != "" || @$request->key != NULL){
                $members->appends (array ('key' => @$request->key));  
        }
        

        $data = array(
            'members'=>$members
            );



        return view('includes.masterlist')->with($data);
    }
}
