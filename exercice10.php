<?php
/*
 * ÉNONCÉ :
 * Le code ci-dessous n'est pas orienté objet (que des fonctions).
 * Refactorisez ce code en créant une classe ShoppingCart avec des méthodes équivalentes.
 */

$cart = [];

function addItem(array &$cart, string $name, float $price) {
    $cart[] = ['name' => $name, 'price' => $price];
}

function getTotal(array $cart): float {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'];
    }
    return $total;
}

function displayCart(array $cart) {
    foreach ($cart as $item) {
        echo $item['name'] . " : " . $item['price'] . " €\n";
    }
}

addItem($cart, "Livre", 12.5);
addItem($cart, "Stylo", 2.3);
displayCart($cart);
echo "Total : " . getTotal($cart) . " €\n";

class ShoppingCart {
    protected $items = [];

    public function addItem(string $name, float $price) {
        $this->items[] = ['name' => $name, 'price' => $price];
    }

    public function getTotal(): float {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'];
        }
        return $total;
    }

    public function displayCart() {
        foreach ($this->items as $item) {
            echo $item['name'] . " : " . $item['price'] . " €\n";
        }
    }
}

$cart = new ShoppingCart();
$cart->addItem("Livre", 12.5);
$cart->addItem("Stylo", 2.3);
$cart->displayCart();
echo "Total : " . $cart->getTotal() . " €\n";

