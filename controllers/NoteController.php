<?php

class NoteController
{
    public function list()
    {
        require_once './models/Note.php';

        $note = new Note();
        $note->setName('Hi');
        $note->setContent('Hello world with PHP MVC');

        require_once './views/note/list.php';
    }

    public function create()
    {
        echo 'Creating new note';
    }

    public function delete()
    {
    }
}
