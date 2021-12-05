<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Demande;
use Carbon\Carbon;
use Auth;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = User::all();
        $demandes = Demande::all();
        $books = Book::all();
        return view('demandes.index', compact('demandes', 'members', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::where('id', 7)->first();
        $user = Auth::user();
        $date_cmd = Carbon::now();
        $date_retour = $date_cmd;
        if ((int) ((int) $request->copies > (int) $book->copies)) {
            Demande::create([
                'book_id' => 7,
                'member_id' => Auth::user()->id,
                'date_cmd' => $date_retour,
                'date_retour' => $date_cmd->addDays($request->date_retour),
                'nbr_copies_cmd' => $request->copies,
            ]);
            $book->copies =
                (int) ((int) $book->nbr_copies -
                    (int) $request->nbr_copies_cmd);
            $user->points = (int) ((int) $user->points + (int) $book->points);
            $book->update();
            $user->update();
            return redirect()
                ->Route('users.index')
                ->with('message', 'request added successfully !');
        } else {
            return redirect()
                ->Route('users.index')
                ->with('message', 'sorry we do not have enough copies !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::where('id', $id)->first();
        $user = Auth::user();
        $user->points = (int) ((int) $user->points - (int) $book->points);
        $book->copies = (int) ($book->copies - 1);
        $book->update();
        $user->update();
        return redirect()
            ->Route('users.index')
            ->with('message', 'Congrats , enjoy your new book !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demande = Demande::find($id);
        $demande->delete();
        return redirect()
            ->route('demandes.index')
            ->with('message', 'Request deleted successfully !');
    }
}
