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

    public function list($request)
    {
        if (!$request->query()) {

            return $this->note->index();
            
        } else {
            $skip = intval($request->query('skip'));
            $take = intval($request->query('take'));

            $response = $this->note->pagination($skip, $take);
            return $response;
        }
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
        return $this->note->destroy($id);
    }

    public function listArchive()
    {
        return $this->note->archives();
    }
}
