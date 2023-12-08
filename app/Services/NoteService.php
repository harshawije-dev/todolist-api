<?php

namespace App\Services;

use App\Interfaces\INoteService;
use App\Repositories\NoteRepository;

class NoteService implements INoteService
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

    public function create($request)
    {
        return $this->note->store($request);
    }

    public function list()
    {
        return $this->note->index();
    }

    public function pagination($skip, $take)
    {
        return $this->note->pagination($skip, $take);
    }

    /**
     * Update record
     * @param array
     * @param string
     */

    public function update($request, $id)
    {
        return $this->note->update($request, $id);
    }

    /**
     * Archive Record
     * @param array
     * @param string
     */
    public function archive($request, $id)
    {
        return $this->note->archive($request, $id);
    }

    public function delete($id)
    {
    }

    public function listArchive($skip = 0, $take = 10)
    {
    }
}
