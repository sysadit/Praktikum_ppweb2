<?php

class Kunjungan {
    public $id;
    public $timestamp;
    public $fullname;
    public $email;
    public $jenis_kunjungan_id;

    private static function connect() {
        $coon = mysqli_connect("localhost", "root", "", "bukutamu");
        if (!$coon) {
            die("koneksi gagal: " . mysqli_connect_error());
        }
        return $coon;
    }

    public function save() {
        $coon = self::connect();
        $query = "INSERT INTO kunjungan(fullname, email, jenis_kunjungan_id)
                  VALUES('" . $this->fullname . "', '" . $this->email . "', '" . $this->jenis_kunjungan_id . "')";
        
        mysqli_query($coon, $query);
        $insert_id = mysqli_insert_id($coon);
        mysqli_close($coon);
        return $insert_id;
    }

    public static function getAll() {
        $coon = self::connect();
        $query = "SELECT * FROM kunjungan";
        $result = mysqli_query($coon, $query);
        mysqli_close($coon);

        $list = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $k = new Kunjungan();
            $k->id = $row["id"];
            $k->timestamp = $row["timestamp"];
            $k->fullname = $row["fullname"];
            $k->email = $row["email"];
            $k->jenis_kunjungan_id = $row["jenis_kunjungan_id"];
            $list[] = $k;
        }

        return $list;
    }
}
