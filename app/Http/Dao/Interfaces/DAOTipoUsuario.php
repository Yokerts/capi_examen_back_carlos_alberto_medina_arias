<?php


namespace App\Http\Dao\Interfaces;


interface DAOTipoUsuario
{
    public function all();

    public function create();

    public function update();

    public function delete();

    public function show();

    public function showForName();

}
