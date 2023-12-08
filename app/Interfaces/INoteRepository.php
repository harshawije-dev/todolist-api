<?php 

namespace App\Interfaces;

interface INoteRepository {

    /**
     * Save note
     * @param mixed
     * 
     */
    public function store($request);

    /**
     * Update note
     * @param string
     * 
     */
    public function update($id);
}