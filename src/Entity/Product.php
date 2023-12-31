<?php
    namespace App\Entity;

    class Product{
        private $id;
        private $name;
        private $price;
        private $description;
        private $imgUrl;


        public function __construct($id, $name, $price, $description, $imgUrl){

            $this -> setId($id);
            $this -> setName($name);
            $this -> setPrice($price);
            $this -> setDescription($description);
            $this -> setImgUrl($imgUrl);
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
        public function getPrice() {
                return $this->price;
        }

        /**
         * Set the value of address
         */
        public function setPrice($price): self {
                $this->price = $price;
                return $this;
        }

        /**
         * Get the value of type
         */
        public function getDescription() {
                return $this->description;
        }

        /**
         * Set the value of type
         */
        public function setDescription($description): self {
                $this->description = $description;
                return $this;
        }

        /**
         * Get the value of type
         */
        public function getImgUrl() {
                return $this->imgUrl;
        }

        /**
         * Set the value of type
         */
        public function setImgUrl($imgUrl): self {
                $this->imgUrl = $imgUrl;
                return $this;
        }
    }

?>