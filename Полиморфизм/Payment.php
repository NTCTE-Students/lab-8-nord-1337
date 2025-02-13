<?php

abstract class Payment {
    abstract public function process($amount);
}

class CreditCardPayment extends Payment {
    public function process($amount) {
        return "Обработка платежа кредитной картой на сумму: {$amount} руб.";
    }
}

class PayPalPayment extends Payment {
    public function process($amount) {
        return "Обработка платежа через PayPal на сумму: {$amount} руб.";
    }
}

class BankTransferPayment extends Payment {
    public function process($amount) {
        return "Обработка банковского перевода на сумму: {$amount} руб.";
    }
}