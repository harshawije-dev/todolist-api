<?php

namespace App\Interfaces;

interface INoteService
{
    /**
     * Get List of notes
     * 
     */

    public function list();

    /**
     * Get List of notes
     * 
     * @param int $skip
     * @param int $take
     */

    public function pagination($skip, $take);


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

    public function archive($id);

    /**
     * List Archive notes
     * 
     * @param int $take
     * @param int $skip
     */

     public function listArchive($skip=0, $take=10);
}
