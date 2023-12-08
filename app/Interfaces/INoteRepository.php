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
     * Save note
     */
    public function index();

        /**
     * Get List of notes
     * 
     * @param int $skip
     * @param int $take
     */

     public function pagination($skip, $take);

    /**
     * Update note
     * @param string
     * 
     */
    public function update($request, $id);

    /**
     * Delete note
     * @param string $id
     * 
     */
    public function destroy($id);

    /**
     * Archive note
     * @param string $id
     * 
     */
    public function archive($id);

}