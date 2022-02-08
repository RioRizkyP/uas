<?php
$conn = mysqli_connect('sql100.epizy.com', 'epiz_31002142', 'JSmfysAoSTIJg', 'epiz_31002142_uas_1904030070');

// Pemanggilan Tabel db_buku
function query($query)
{
    global $conn;

    // Mengambil Seluruh Data
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    // Pemanggilan Elemen Data Dengan Rapih
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $id_buku = htmlspecialchars($data['id_buku']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $gambar_buku = htmlspecialchars($data['gambar_buku']);

    $query = "INSERT INTO db_buku
    VALUES
    (null,'$id_buku','$judul_buku','$pengarang','$penerbit','$tahun_terbit','$gambar_buku');";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM db_buku WHERE id=$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data['id'];
    $id_buku = htmlspecialchars($data['id_buku']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $gambar_buku = htmlspecialchars($data['gambar_buku']);

    $query = "UPDATE db_buku SET

    id_buku ='$id_buku',
    judul_buku ='$judul_buku',
    pengarang ='$pengarang',
    penerbit ='$penerbit',
    tahun_terbit ='$tahun_terbit',
    gambar_buku ='$gambar_buku'

    WHERE id =$id;";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query = "SELECT * FROM db_buku WHERE judul_buku LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Tabel db_anggota
function search($keyword)
{
    global $conn;

    $query = "SELECT * FROM db_anggota WHERE nama_anggota LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function delete($iid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM db_anggota WHERE id =$iid") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}