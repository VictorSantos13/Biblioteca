<?php

use back\WriterRepository;

    class WriterService {

        private WriterRepository $writerRepo;

        public function __construct(WriterRepository $repo){
            $this->writerRepo = $repo;
        }

        public function save($name, $description){
            $this->writerRepo->save($name, $description);
            
        }

        public function getAllWriters(){
            return $this->writerRepo->getAllWriters();
        }

        public function getWriterById($id){
            return $this->writerRepo->getWriterById($id);
        }

        public function getWriterByName($name){
            return $this->writerRepo->getWriterByName($name);
        }
    }