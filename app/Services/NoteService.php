<?php

namespace App\Services;

use App\Repositories\NoteRepository;

class NoteService
{

    private $note;

    public function __construct(NoteRepository $note)
    {
        $this->note = $note;
    }

    /**
     * Get the validation rules that apply to the request.
     * @param mixed
     * @return mixed
     */

    public function store(mixed $request)
    {
        return $this->note->store($request);
    }
}
