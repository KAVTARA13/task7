<?php

namespace App\Http\Controllers;
use App\User;
use App\Role_user;
use App\Posts;
use App\Comments;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function get_phone()
    {
    	return User::select('users.id','users.name','phone_number')->join('tel_numbers','user_id','users.id')->get();
    	return User::With(['phone'])->first()['phone'];
    }

    public function PostsComments()
    {
    	// return Comments::join('posts','post_id','posts.id')->get();
    	//return Comments::withCount(['Post'])->get();
    	return Posts::with(['comments'])->get();
    }

    public function Roles()
    {
    	return Role_user::select('users.name','roles.title')->join('users','user_id','users.id')->join('roles','role_id','roles.id')->get();
    }
}
