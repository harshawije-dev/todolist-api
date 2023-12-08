<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateNote;
use App\Services\NoteService;
use Exception;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    private $note;

    public function __construct(NoteService $noteService)
    {
        $this->note = $noteService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            [
                [
                    'id' => "id",
                    'note' => 'note',
                    'reminder' => true || false
                ],
            ],
            200
        );
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateNote $note)
    {
        try {
            $response = $this->note->store($note->all());
            return $this->successJsonResponse($response);
            
        } catch (Exception $error) {

            return $this->errorBadRequestJsonResponse($error);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Show Note";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Delete";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function archive(string $id)
    {
        return $id;
    }
}
