<?php
    namespace App\Entity;

    class ProductList{
        private $id;
        private $name;
        private $address;
        private $type;
        private $imgUrl;


        public function __construct($id, $name, $address, $type, $imgUrl){

            $this -> setId($id);
            $this -> setName($name);
            $this -> setAddress($address);
            $this -> setType($type);
            $this -> setImgUrl($imgUrl);
        }


        /**
         * Get the value of name
         */
        public function getName() {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name): self {
                $this->name = $name;
                return $this;
        }

        /**
         * Get the value of address
         */
        public function getAddress() {
                return $this->address;
        }

        /**
         * Set the value of address
         */
        public function setAddress($address): self {
                $this->address = $address;
                return $this;
        }

        /**
         * Get the value of type
         */
        public function getType() {
                return $this->type;
        }

        /**
         * Set the value of type
         */
        public function setType($type): self {
                $this->type = $type;
                return $this;
        }

        /**
         * Get the value of id
         */
        public function getId() {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self {
                $this->id = $id;
                return $this;
        }

        /**
         * Get the value of imgUrl
         */
        public function getImgUrl() {
                return $this->imgUrl;
        }

        /**
         * Set the value of imgUrl
         */
        public function setImgUrl($imgUrl): self {
                $this->imgUrl = $imgUrl;
                return $this;
        }
    }

?>