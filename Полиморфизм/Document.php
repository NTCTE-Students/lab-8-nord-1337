<?php

abstract class Document {
    abstract public function save($filename);
}

class PDFDocument extends Document {
    public function save($filename) {
        return "Файл '{$filename}.pdf' успешно сохранен в формате PDF.";
    }
}

class WordDocument extends Document {
    public function save($filename) {
        return "Файл '{$filename}.docx' успешно сохранен в формате Word.";
    }
}

class ExcelDocument extends Document {
    public function save($filename) {
        return "Файл '{$filename}.xlsx' успешно сохранен в формате Excel.";
    }
}