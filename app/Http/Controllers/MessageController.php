<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderByRaw('CASE WHEN seen = 1 THEN 1 ELSE 0 END, created_at DESC')
                          ->get();
        return view('users.MessageManagement', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Message::create($request->all());
        return back()->with('success', 'Terima kasih. Pesan berhasil dikirim!');
    }

    public function markAsSeen(Message $message)
    {
        $message->update(['seen' => true]);
        return back()->with('success', 'Message marked as seen');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return back()->with('success', 'Message deleted successfully');
    }
}
