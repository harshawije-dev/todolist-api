<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArchiveNote;
use App\Http\Requests\CreateNote;
use App\Http\Requests\UpdateNote;
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
    public function index(Request $request)
    {
        $response = $this->note->list($request);
        return $this->successJsonResponse($response);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateNote $note)
    {
        try {
            $response = $this->note->create($note->all());
            return $this->successJsonResponse($response);
        } catch (Exception $error) {

            return $this->errorBadRequestJsonResponse($error);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Show single record.
     */
    public function show(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNote $note, string $id)
    {
        try {
            $response = $this->note->update($note->all(), $id);
            return $this->successJsonResponse($response);
        } catch (Exception $error) {
            return $this->errorBadRequestJsonResponse($error);
        }
    }

    /**
     * Archive the specified resource from the storage.
     */
    public function archive(ArchiveNote $note, string $id)
    {
        try {
            $response = $this->note->archive($note->all(), $id);
            return $this->successJsonResponse($response);
        } catch (Exception $error) {
            return $this->errorBadRequestJsonResponse($error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $response = $this->note->delete($id);
            return $this->successJsonResponse($response);
        } catch (Exception $error) {
            return $this->errorBadRequestJsonResponse($error);
        }
    }

    /**
     * Display a listing of the archived resources
     */
    public function archives()
    {
        $response = $this->note->listArchive();
        return $this->successJsonResponse($response);
    }
}
