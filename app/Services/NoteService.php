<?php

namespace App\Services;

use App\Repositories\NoteRepository;
use Exception;

class NoteService
{

    private $note;

    private function __construct(NoteRepository $note)
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
        $response = $this->note->store($request);
        return $response;
    }
}
