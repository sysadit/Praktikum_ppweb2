<?php

class JenisKunjungan {
    public $id;
    public $name;
    public $display_name;

    private static function connect() {
        $conn = mysqli_connect("localhost", "root", "", "bukutamu");
        if (!$conn) {
            die("gagal koneksi: " . mysqli_connect_error());
        }
        return $conn;
    }

    public static function getAll() {
        $conn = self::connect();
        $query = "SELECT * FROM jenis_kunjungan";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);

        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $temp = new JenisKunjungan();
            $temp->id = $row["id"];
            $temp->name = $row["name"];
            $temp->display_name = $row["display_name"];
            $data[] = $temp;
        }

        return $data;
    }
}
