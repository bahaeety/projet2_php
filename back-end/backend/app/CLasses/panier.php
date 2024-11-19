<?php
class Panier {
    private $cartId;
    private $userId;
    private $livreId;
    private $quantity;

    public function __construct($cartId, $userId, $livreId, $quantity) {
        $this->cartId = $cartId;
        $this->userId = $userId;
        $this->livreId = $livreId;
        $this->quantity = $quantity;
    }

    // Getters
    public function getCartId() {
        return $this->cartId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getLivreId() {
        return $this->livreId;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}
