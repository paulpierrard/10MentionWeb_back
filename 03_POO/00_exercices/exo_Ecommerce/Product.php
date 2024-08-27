<?php

namespace ExoEcommerce {

    class Product {

        /**
         * Le nom du prodiut
         *
         * @var string
         */
        private string $name;

        /**
         * Le prix du produit
         *
         * @var float
         */
        private float $price;

        /**
         * construct
         *
         * @param string $n
         * @param float $p
         */
        public function __construct(string $n, float $p)
        {

            $this->name = $n;
            $this->price = $p;

        }

        
        /**
         * Get le nom du prodiut
         *
         * @return  string
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Get le prix du produit
         *
         * @return  float
         */ 
        public function getPrice()
        {
                return $this->price;
        }

    }

}