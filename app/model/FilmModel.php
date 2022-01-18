<?php

class FilmModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getFilm($sort = 'AtoZ')
    {
        if ($sort == 'AtoZ') {
            $this->db->query('SELECT * FROM daftarfilm ORDER BY judul ASC');
        } else if ($sort == 'ZtoA') {
            $this->db->query('SELECT * FROM daftarfilm ORDER BY judul DESC');
        } 
        else if ($sort == 'RatingDesc') {
            $this->db->query('SELECT * FROM daftarfilm ORDER BY skor DESC');
        } else if ($sort == 'RatingAsc') {
            $this->db->query('SELECT * FROM daftarfilm ORDER BY skor ASC');
        }
        else if ($sort == 'YearDesc') {
            $this->db->query('SELECT * FROM daftarfilm ORDER BY tahun DESC');
        } else {
            $this->db->query('SELECT * FROM daftarfilm ORDER BY tahun ASC');
        }
        return $this->db->resultSet();
    }

    public function tambahDataFilm($data)
    {
        $query = "INSERT INTO daftarfilm VALUES ('', :judul, :tahun, :skor)";
        echo "<script>
        alert('Data Telah Ditambahkan');
        document.location='http://localhost/mvc';
        </script>";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('skor', $data['skor']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataFilm($id)
    {
        var_dump($id);
        $query = "DELETE FROM daftarfilm WHERE id = :id";
        echo "<script>
        alert('Data Telah Dihapus');
        document.location='http://localhost/mvc';
        </script>";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
