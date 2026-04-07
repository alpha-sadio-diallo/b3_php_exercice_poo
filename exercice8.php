<?php
/*
 * ÉNONCÉ :
 * Créez une classe Invoice avec les propriétés protected number, client, items (tableau associatif avec description et montant).
 * Ajoutez les méthodes pour ajouter un item, calculer le total, et afficher la facture.
 * Instanciez une facture, ajoutez des items et affichez-la.
*/

class Invoice {
    protected $number;
    protected $client;
    protected $items = [];

    public function __construct(string $number, string $client) {
        $this->number = $number;
        $this->client = $client;
    }

    public function addItem(string $description, float $amount) {
        $this->items[] = ['description' => $description, 'amount' => $amount];
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['amount'];
        }
        return $total;
    }

    public function displayInvoice() {
        echo "Invoice Number: " . $this->number . "<br>";
        echo "Client: " . $this->client . "<br>";
        echo "Items:<br>";
        foreach ($this->items as $item) {
            echo "- " . $item['description'] . ": " . number_format($item['amount'], 2) . " €<br>";
        }
        echo "Total: " . number_format($this->calculateTotal(), 2) . " €<br>";
    }
}

$invoice = new Invoice("INV-001", "Acme Corporation");
$invoice->addItem("Web Design Services", 1500.00);
$invoice->addItem("Hosting (1 year)", 200.00);
$invoice->displayInvoice();

