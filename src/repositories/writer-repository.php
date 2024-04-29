<?php

    namespace back {
        
        interface WriterRepository {
            public function save();

            public function getWriterById($id);

            public function getWriterByName();
        }
    }