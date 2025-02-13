<?php

interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();

$emailNotifier->send("Test fo email");
$smsNotifier->send("Test for SMS");