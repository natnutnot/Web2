<?php
require_once 'Koneksi.php';

function getAllMember() {
    global $koneksi;
    $query = "SELECT * FROM member";
    return mysqli_query($koneksi, $query);
}

function insertMember($nama, $alamat, $no_hp) {
    global $koneksi;
    $query = "INSERT INTO member (nama, alamat, no_hp) VALUES ('$nama', '$alamat', '$no_hp')";
    return mysqli_query($koneksi, $query);
}

function updateMember($id, $nama, $alamat, $no_hp) {
    global $koneksi;
    $query = "UPDATE member SET nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function deleteMember($id) {
    global $koneksi;
    $query = "DELETE FROM member WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function getMemberById($id) {
    global $koneksi;
    $query = "SELECT * FROM member WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function getAllBuku() {
    global $koneksi;
    $query = "SELECT * FROM buku";
    return mysqli_query($koneksi, $query);
}

function insertBuku($judul, $pengarang, $tahun) {
    global $koneksi;
    $query = "INSERT INTO buku (judul, pengarang, tahun_terbit) VALUES ('$judul', '$pengarang', '$tahun')";
    return mysqli_query($koneksi, $query);
}

function updateBuku($id, $judul, $pengarang, $tahun) {
    global $koneksi;
    $query = "UPDATE buku SET judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun' WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function deleteBuku($id) {
    global $koneksi;
    $query = "DELETE FROM buku WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function getBukuById($id) {
    global $koneksi;
    $query = "SELECT * FROM buku WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function getAllPeminjaman() {
    global $koneksi;
    $query = "SELECT p.*, m.nama, b.judul 
              FROM peminjaman p
              JOIN member m ON p.id_member = m.id
              JOIN buku b ON p.id_buku = b.id";
    return mysqli_query($koneksi, $query);
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $koneksi;
    $query = "INSERT INTO peminjaman (id_member, id_buku, tanggal_peminjaman, tanggal_kembali)
              VALUES ('$id_member', '$id_buku', '$tgl_pinjam', '$tgl_kembali')";
    return mysqli_query($koneksi, $query);
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $koneksi;
    $query = "UPDATE peminjaman 
              SET id_member='$id_member', id_buku='$id_buku', tanggal_peminjaman='$tgl_pinjam', tanggal_kembali='$tgl_kembali' 
              WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function deletePeminjaman($id) {
    global $koneksi;
    $query = "DELETE FROM peminjaman WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function getPeminjamanById($id) {
    global $koneksi;
    $query = "SELECT * FROM peminjaman WHERE id=$id";
    return mysqli_query($koneksi, $query);
}
?>