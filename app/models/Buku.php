<?php
class Buku
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, judul, penulis, penerbit, tahun_terbit, isbn FROM buku ORDER BY judul'
        );
        return $stmt->fetchAll();
    }
}