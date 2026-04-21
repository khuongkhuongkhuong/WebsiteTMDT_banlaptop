<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
  public function getComment(Request $request)
  {

    $comments = Comment::where('id_product', $request->id)->where('status', 1)->with('user')->orderByDesc('created_at')->get();
    return response()->json([
      'status' => 'success',
      'data' => $comments,
    ]);
  }

  public function pulishComment(Request $request)
  {

    // $comment = $request->all();
    $comment = Comment::create([
      'id_user' => $request->id_user,
      'id_product' => $request->id_product,
      'content' => $request->content,
    ]);
    return response()->json([
      'status' => 'success',
      'message' => 'Bình luận đã được đăng',
      'data' => $comment
    ], 201);
  }
}
