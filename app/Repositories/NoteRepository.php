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

    public function store($request)
    {
        $new_record = $this->note->create($request);
        return $new_record->id;
    }

    public function update($id)
    {
        
    }
}
