<?php

    namespace back {
        
        interface WriterRepository {
            public function save(Writer $writer);

            public function getAllWriters();

            public function getWriterById($id): Writer | null;

            public function getWriterByName($name): Writer | null;
        }
    }