<?php

namespace App\Repositories;

use App\Interfaces\INoteRepository;
use App\Models\Notes;

class NoteRepository implements INoteRepository
{
    private $note;

    public function __construct(Notes $note)
    {
        $this->note = $note;
    }




    public function index()
    {
        return $this->note->get();
    }

    public function pagination($skip, $take)
    {
        return $this->note->skip($skip)->take($take)->get();
    }


    public function store($request)
    {
        $new_record = $this->note->create($request);
        return $new_record->id;
    }

    public function archive($request, $id)
    {

        $this->note->findOrFail($id);
        return $this->note->where('id', $id)->update($request);
    }

    public function update($request, $id)
    {
        $this->note->findOrFail($id);
        return $this->note->where('id', $id)->update($request);
    }

    public function destroy($id)
    {
    }
}
