<?php

    namespace App\Entity;

    class User {
        protected $firstName;
        protected $lastName;
        protected $age;

        public function getFirstName() {
            return $this->firstName;
        }

        public function setFirstName(string $firstName) {
            $this->firstName = $firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function setLastName(string $lastName) {
            $this->lastName = $lastName;
        }

        public function getAge() {
            return $this->age;
        }

        public function setAge(string $age) {
            $this->age = $age;
        }
    }