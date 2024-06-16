<?php

namespace back {

    class WriterService {

        private WriterRepository $writerRepo;

        public function __construct(WriterRepository $repo){
            $this->writerRepo = $repo;
        }

        public function createNewWriter(Writer $writer){
            $this->writerRepo->save($writer);
            
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

        public function verifyWriter($name){
            return $this->writerRepo->verifyWriter($name);
        }
    }
}