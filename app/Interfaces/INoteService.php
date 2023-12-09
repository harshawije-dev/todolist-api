<?php

namespace App\Interfaces;

interface INoteService
{
    /**
     * Get List of notes
     * 
     */

    public function list($request);



    /** 
     * Save note
     * 
     * @param mixed $response
     */

    public function create($request);

    /**
     * Update note
     * 
     * @param string $id
     * @param mixed $request
     */

    public function update($request, $id);

    /**
     * Delete note
     * 
     * @param string $id
     */

    public function delete($id);

    /**
     * Archive note
     * 
     * @param string $id
     * 
     */

    public function archive($request, $id);

    /**
     * List Archive notes
     * 
     * @param mixed $request
     */

     public function listArchive();
}
