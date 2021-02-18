SELECT * FROM detail_kategori A JOIN penjahit B ON A.id_penjahit = B.id_penjahit WHERE B.id_penjahit = 1;

SELECT * FROM detail_kategori JOIN penjahit ON detail_kategori.id_penjahit = penjahit.id_penjahit WHERE detail_kategori.id_penjahit = 1;

SELECT * FROM penjahit JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit WHERE detail_kategori.id_penjahit=1;

SELECT penjahit.* FROM penjahit JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit WHERE detail_kategori.id_penjahit=1;

SELECT penjahit.nama_penjahit FROM penjahit JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit WHERE detail_kategori.id_penjahit=1;

SELECT penjahit.nama_penjahit, detail_kategori.keterangan_kategori, ukuran.nama_ukuran FROM penjahit 
JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN ukuran_detail_kategori ON detail_kategori.id_detail_kategori = ukuran_detail_kategori.id_detail_kategori
JOIN ukuran ON ukuran_detail_kategori.id_ukuran = ukuran.id_ukuran 
WHERE penjahit.id_penjahit = 1;

SELECT penjahit.nama_penjahit, detail_kategori.keterangan_kategori, ukuran.nama_ukuran FROM penjahit 
JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN ukuran_detail_kategori ON detail_kategori.id_detail_kategori = ukuran_detail_kategori.id_detail_kategori
JOIN ukuran ON ukuran_detail_kategori.id_ukuran = ukuran.id_ukuran 
WHERE detail_kategori.id_detail_kategori = 1;

SELECT penjahit.nama_penjahit, kategori.nama_kategori, detail_kategori.keterangan_kategori FROM penjahit 
JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN kategori ON kategori.id_kategori = detail_kategori.id_kategori
GROUP by penjahit.id_penjahit;

SELECT penjahit.nama_penjahit, detail_kategori.keterangan_kategori, ukuran.nama_ukuran, ukuran.gambar_ukuran FROM penjahit 
JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN ukuran_detail_kategori ON detail_kategori.id_detail_kategori = ukuran_detail_kategori.id_detail_kategori
JOIN ukuran ON ukuran_detail_kategori.id_ukuran = ukuran.id_ukuran 
WHERE detail_kategori.id_detail_kategori = 1;


SELECT penjahit.nama_penjahit, kategori.nama_kategori, ukuran.nama_ukuran FROM penjahit 
JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN kategori ON detail_kategori.id_kategori = kategori.id_kategori
JOIN ukuran_detail_kategori ON detail_kategori.id_detail_kategori = ukuran_detail_kategori.id_detail_kategori
JOIN ukuran ON ukuran_detail_kategori.id_ukuran = ukuran.id_ukuran 
WHERE penjahit.id_penjahit = 1;

SELECT kategori.nama_kategori FROM penjahit 
JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN kategori ON detail_kategori.id_kategori = kategori.id_kategori
WHERE penjahit.id_penjahit = 1;

SELECT penjahit.nama_penjahit, detail_kategori.keterangan_kategori, ukuran.nama_ukuran FROM penjahit 
JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN ukuran_detail_kategori ON detail_kategori.id_detail_kategori = ukuran_detail_kategori.id_detail_kategori
JOIN ukuran ON ukuran_detail_kategori.id_ukuran = ukuran.id_ukuran 
WHERE penjahit.id_penjahit = 1 AND detail_kategori.id_detail_kategori = 1;

SELECT SUM (bobot_kriteria) FROM kriteria;

SELECT penjahit.nama_penjahit, kriteria.nama_kriteria, rating.rating_penjahit FROM penjahit 
JOIN rating ON penjahit.id_penjahit = rating.id_penjahit
JOIN kriteria ON kriteria.id_kriteria = rating.id_kriteria
WHERE penjahit.id_penjahit = 1;

SELECT penjahit.nama_penjahit, kriteria.nama_kriteria, rating.rating_penjahit FROM penjahit 
JOIN rating ON penjahit.id_penjahit = rating.id_penjahit
JOIN kriteria ON kriteria.id_kriteria = rating.id_kriteria
WHERE kriteria.nama_kriteria = 'Kualitas Pekerjaan';


setiap kategori ditekan
SELECT penjahit.nama_penjahit FROM detail_kategori 
JOIN penjahit ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN kategori ON kategori.id_kategori = detail_kategori.id_kategori
WHERE kategori.id_kategori = 1;

SELECT penjahit.nama_penjahit FROM detail_kategori 
JOIN penjahit ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN kategori ON kategori.id_kategori = detail_kategori.id_kategori
WHERE kategori.id_kategori = 2;

SELECT penjahit.nama_penjahit FROM detail_kategori 
JOIN penjahit ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN kategori ON kategori.id_kategori = detail_kategori.id_kategori
WHERE kategori.id_kategori = 3;

SELECT penjahit.nama_penjahit FROM detail_kategori 
JOIN penjahit ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN kategori ON kategori.id_kategori = detail_kategori.id_kategori
WHERE kategori.id_kategori = 4;