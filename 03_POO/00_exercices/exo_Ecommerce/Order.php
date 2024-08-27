<?php

namespace ExoEcommerce {

    class Order {

        /**
         * l'identifiant de la commane
         *
         * @var int
         */
        private int $orderId;

        /**
         * Le prix du produit
         *
         * @var array
         */
        private array $productList = [];

        
        /**
         * construct
         *
         * @param integer $o
         */
        public function __construct(int $o)
        {

            $this->orderId = $o;

        }

         /**
         * Get le prix du produit
         *
         * @return  array
         */ 
        public function getProductList()
        {
                return $this->productList;
        }

        /**
         * Get l'identifiant de la commane
         *
         * @return  int
         */ 
        public function getOrderId()
        {
                return $this->orderId;
        }

        public function addProduct(Product $produit): void{


            $this->productList[] = $produit;


        }
       
    }

}
