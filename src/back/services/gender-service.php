<?php
    namespace back {

        class GenderService {

            private GenderRepository $repo;

            public function __construct(GenderRepository $repo){
                $this->repo = $repo;
            }

            public function createNewGender(Gender $gender){
                return $this->repo->save($gender); 
            }

            public function getAllGenders(){
                /** @var Book[] **/
                $result = $this->repo->getAllGenders();
                return $result;
            }
        }
    }
?>