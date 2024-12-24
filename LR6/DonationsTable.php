<?php
// donations_crud.php

require_once 'db.php';

class DonationsTable {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Получить все записи
    public function getAll() {
        $stmt = $this->pdo->query("SELECT d.id, d.scan, d.name, p.objective AS purpose, d.method, d.amount FROM donations d JOIN purpose p ON d.id_purpose = p.id ORDER BY d.id ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Получить запись по ID
    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM donations WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Добавить запись
    public function add($data) {
        if (empty($data['name']) || strlen($data['name']) > 50) {
            throw new Exception("Имя обязательно и не должно превышать 50 символов.");
        }
        if (empty($data['id_purpose']) || !is_numeric($data['id_purpose'])) {
            throw new Exception("Цель обязательна и должна быть выбрана.");
        }
        if (empty($data['method'])) {
            throw new Exception("Метод обязательный и не может быть пустым.");
        }
        if (empty($data['amount']) || !is_numeric($data['amount']) || $data['amount'] <= 0) {
            throw new Exception("Сумма должна быть положительным числом.");
        }
        if (empty($_FILES['scan']['name'])) {
            throw new Exception("Вы должны загрузить изображение.");
        }

        $scan = $this->uploadFile($_FILES['scan']);

        $stmt = $this->pdo->prepare("INSERT INTO donations (scan, name, id_purpose, method, amount) VALUES (:scan, :name, :id_purpose, :method, :amount)");
        $stmt->execute([
            ':scan' => $scan,
            ':name' => $data['name'],
            ':id_purpose' => $data['id_purpose'],
            ':method' => $data['method'],
            ':amount' => $data['amount'],
        ]);
    }

    // Обновить запись
    public function update($id, $data) {
        $oldData = $this->getById($id);
        if (!$oldData) {
            throw new Exception("Запись с ID $id не найдена.");
        }

        $scan = $oldData['scan'];
        if (!empty($_FILES['scan']['name'])) {
            $this->deleteFile($oldData['scan']);
            $scan = $this->uploadFile($_FILES['scan']);
        }

        $stmt = $this->pdo->prepare("UPDATE donations SET scan = :scan, name = :name, id_purpose = :id_purpose, method = :method, amount = :amount WHERE id = :id");
        $stmt->execute([
            ':scan' => $scan,
            ':name' => $data['name'],
            ':id_purpose' => $data['id_purpose'],
            ':method' => $data['method'],
            ':amount' => $data['amount'],
            ':id' => $id,
        ]);
    }

    // Удалить запись
    public function delete($id) {
        $data = $this->getById($id);
        if (!$data) {
            throw new Exception("Запись с ID $id не найдена.");
        }

        $this->deleteFile($data['scan']);

        $stmt = $this->pdo->prepare("DELETE FROM donations WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }

    // Загрузка файла
    private function uploadFile($file) {
        $targetDir = 'inc/Img/';
        $fileName = uniqid() . "_" . basename($file['name']);
        $targetFilePath = $targetDir . $fileName;

        if (!move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            throw new Exception("Ошибка загрузки файла.");
        }
        return $fileName;
    }

    // Удаление файла
    private function deleteFile($fileName) {
        if ($fileName !== 'no_img.png' && file_exists("inc/Img/$fileName")) {
            unlink("inc/Img/$fileName");
        }
    }
}

