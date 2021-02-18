INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `password_pelanggan`, `telp_pelanggan`, `latitude_pelanggan`, `longitude_pelanggan`, `alamat_pelanggan`, `jk_pelanggan`, `foto_pelanggan`) VALUES (NULL, 'Amir', 'amir@amir.com', 'amir1234', '082228038101', 'qwertyu', 'asdfghj', 'Jl. Pahlawan', 'Laki-laki', 'abcd.jpg'), (NULL, 'Fero', 'fero@fero.com', 'fero1234', '082228038101', 'qwertyu', 'asdfghj', 'Jl. Pahlawan', 'Perempuan', 'abcd.jpg'), (NULL, 'Dinda', 'dinda@dinda.com', 'dinda1234', '082228038101', 'qwertyu', 'asdfghj', 'Jl. Pahlawan', 'Perempuan', 'abcd.jpg'), (NULL, 'Hakim', 'hakim@hakim.com', 'hakim1234', '082228038101', 'qwertyu', 'asdfghj', 'Jl. Pahlawan', 'Laki-laki', 'abcd.jpg');

INSERT INTO `penjahit` (`id_penjahit`, `nama_penjahit`, `email_penjahit`, `password_penjahit`, `telp_penjahit`, `nama_toko`, `keterangan_toko`, `latitude_penjahit`, `longitude_penjahit`, `alamat_penjahit`, `spesifikasi_penjahit`, `jangkauan_kategori_penjahit`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto_penjahit`) VALUES (NULL, 'Agus', 'agus@agus.com', 'agus1234', '082228038101', 'Toko Agus', 'Delta Komputer', 'qwertyu', 'asdfghj', 'Jl. Pahlawan', 'Laki-laki', 'Dewasa', 'Senin', '07:00:00', '15:00:00', 'abcd.jpg'), (NULL, 'zuhro', 'zuhro@zuhro.com', 'zuhro1234', '082228038101', 'Toko Zuhro', 'Delta Komputer', 'qwertyu', 'asdfghj', 'Jl.Pahlawan', 'Perempuan', 'Remaja', 'Senin', '08:00:00', '15:00:00', 'abcd.jpg'), (NULL, 'Ika', 'ika@ika.com', 'ika1234', '082228038101', 'Toko Ika', 'Delta Komputer', 'qwerty', 'asdfghj', 'Jl.Pahlawan', 'Perempuan', 'Anak-anak', 'Jumat, Sabtu', '08:00:00', '15:00:00', 'abcd.jpg');

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar_kategori`) VALUES (NULL, 'Kemeja', 'kemeja.jpg'), (NULL, 'Seragam', 'seragam.jpg'), (NULL, 'Celana', 'celana.jpg'), (NULL, 'Kaos', 'kaos.jpg');

INSERT INTO `ukuran` (`id_ukuran`, `nama_ukuran`, `gambar_ukuran`) VALUES (NULL, 'Lebar Bahu', 'lebar_bahu.jpg'), (NULL, 'Panjang Badan', 'panjang_badan.jpg'), (NULL, 'Lebar Perut', 'lebar_perut.jpg'), (NULL, 'Panjang Leangan', 'panjang_lengan.jpg'), (NULL, 'Lebar Lengan', 'lebar_lengan');


INSERT INTO `detail_kategori` (`id_detail_kategori`, `id_penjahit`, `id_kategori`, `keterangan_kategori`, `bahan_jahit`, `harga_bahan`, `ongkos_penjahit`, `perkiraan_lama_waktu_pengerjaan`) VALUES (NULL, '1', '1', 'Kemeja Bagus', 'Katun', '1000', '10000', '5 hari'), (NULL, '1', '2', 'Seragam Bagus', 'Katun', '1000', '10000', '5 hari'), (NULL, '2', '3', 'Celana Halus', 'katun', '1000', '1000', '3 minggu'), (NULL, '2', '4', 'Kaous Halus', 'katun', '1000', '1000', '8 hari');

INSERT INTO `ukuran_detail_kategori` (`id_ukuran_detail_kategori`, `id_detail_kategori`, `id_ukuran`) VALUES (NULL, '1', '1'), (NULL, '1', '2'), (NULL, '2', '3'), (NULL, '2', '4');

INSERT INTO `pesanan` (`id_pesanan`, `id_pelanggan`, `id_penjahit`, `tanggal_pesanan`, `tanggal_pesanan_selesai`, `lama_waktu_pengerjaan`, `status_pesanan`) VALUES (NULL, '1', '1', current_timestamp(), '2021-01-11', NULL, 'selesai'), (NULL, '2', '2', current_timestamp(), '2021-01-23', NULL, 'proses');

INSERT INTO `detail_pesanan` (`id_detail_pesanan`, `id_pesanan`, `catatan_pesanan`, `kategori`, `bahan_jahit`, `asal_bahan`, `panjang_bahan`, `lebar_bahan`, `status_bahan`, `harga_bahan`, `ongkos_penjahit`, `jumlah_jahitan`, `biaya_jahitan`, `total_biaya`) VALUES (NULL, '1', 'bagus', 'kemeja', 'katun', 'penjahit', '100', '100', 'penjahit', '1000', '10000', '1', '1000', '10000'), (NULL, '2', 'selesai', 'seragam', 'katun', 'pelanggan', '50', '50', 'sampai', NULL, '10000', '1', '1000', '1000');

INSERT INTO `ukuran_detail_pesanan` (`id_ukuran_detail_pesanan`, `id_detail_pesanan`, `nama_ukuran`, `ukuran_pesanan`) VALUES (NULL, '1', 'Panjang Lengan', '10'), (NULL, '1', 'Panjang Baju', '15'), (NULL, '2', 'Panjang Lengan', '20'), (NULL, '2', 'Panjang Baju', '20');

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`) VALUES (NULL, 'Kualitas Pekerjaan', '25'), (NULL, 'Lama Waktu Pengerjaan', '25'), (NULL, 'Layanan Penjahit', '25'), (NULL, 'Harga Jasa Jahit', '25');

INSERT INTO `rating` (`id_rating`, `id_penjahit`, `id_kriteria`, `rating_penjahit`) VALUES (NULL, '1', '1', '4'), (NULL, '1', '2', '4'), (NULL, '1', '3', NULL), (NULL, '1', '1', '5'), (NULL, '1', '3', '5'), (NULL, '3', '1', '4'), (NULL, '3', '4', '3'), (NULL, '3', '3', '2');



INSERT INTO `utilitas` (`id_utilitas`, `nama_utilitas`) VALUES (NULL, 'kualitas pekerjaan'), (NULL, 'lama waktu pengerjaan'), (NULL, 'layanan penjahit'), (NULL, 'harga jasa jahit');

INSERT INTO `rating_penjahit` (`id_rating`, `id_penjahit`, `nama_utilitas`, `rating_penjahit`) VALUES (NULL, '1', 'kualitas pekerjaan', '2'), (NULL, '1', 'lama waktu pengerjaan', '3'), (NULL, '1', ' layanan penjahit', '4'), (NULL, '1', 'harga jasa', '5'), (NULL, '2', 'kualitas pekerjaan', '5'), (NULL, '2', 'lama waktu pengerjaan', '4'), (NULL, '2', ' layanan penjahit', '3'), (NULL, '2', 'harga jasa', '2');
