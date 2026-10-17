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

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, isbn)
                VALUES (:judul, :penulis, :penerbit, :tahun, :isbn)';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':judul'    => $data['judul'],
            ':penulis'  => $data['penulis'],
            ':penerbit' => $data['penerbit'],
            ':tahun'    => $data['tahun_terbit'],
            ':isbn'     => $data['isbn']
        ]);
    }
}
