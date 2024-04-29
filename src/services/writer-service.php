<?php

use back\WriterRepository;

    class WriterService {

        private WriterRepository $writerRepo;

        public function getWriterById($id){
            return $this->writerRepo->getWriterById($id);
        }
    }