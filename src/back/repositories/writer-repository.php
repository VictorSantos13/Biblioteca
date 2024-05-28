<?php

    namespace back {
        
        interface WriterRepository {
            public function save();

            public function getAllWriters();

            public function getWriterById($id): Writer | null;

            public function getWriterByName($name): Writer | null;
        }
    }