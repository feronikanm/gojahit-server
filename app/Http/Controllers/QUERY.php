SELECT * FROM detail_kategori A JOIN penjahit B ON A.id_penjahit = B.id_penjahit WHERE B.id_penjahit = 1;

SELECT * FROM detail_kategori JOIN penjahit ON detail_kategori.id_penjahit = penjahit.id_penjahit WHERE detail_kategori.id_penjahit = 1;

SELECT * FROM penjahit JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit WHERE detail_kategori.id_penjahit=1;

SELECT penjahit.* FROM penjahit JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit WHERE detail_kategori.id_penjahit=1;

SELECT penjahit.nama_penjahit FROM penjahit JOIN detail_kategori ON penjahit.id_penjahit = detail_kategori.id_penjahit WHERE detail_kategori.id_penjahit=1;

SELECT penjahit.nama_penjahit, detail_kategori.keterangan_kategori, ukuran.nama_ukuran 
FROM penjahit 
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



SELECT id_penjahit, AVG(kriteria_1), AVG(kriteria_2), AVG(kriteria_3), AVG(kriteria_4) FROM RATING GROUP BY id_penjahit

=========
SELECT id_penjahit, ((kriteria_1-1)/(3-1)) as kriteria_1, ((kriteria_2-1)/(3-1)) as kriteria_2, ((kriteria_3-1)/(3-1)) as kriteria_3, ((kriteria_4-1)/(3-1)) as kriteria_4
FROM (
SELECT id_penjahit, AVG(kriteria_1) AS kriteria_1, AVG(kriteria_2) AS kriteria_2, AVG(kriteria_3) AS kriteria_3, AVG(kriteria_4) AS kriteria_4 FROM RATING GROUP BY id_penjahit) AS A

==============


insert into nielai (id_pnjahit, kriteria_1, kriteria_2, kriteria_3, kriteria_4)  
(
SELECT id_penjahit, ((kriteria_1-1)/(3-1)) as kriteria_1, ((kriteria_2-1)/(3-1)) as kriteria_2, ((kriteria_3-1)/(3-1)) as kriteria_3, ((kriteria_4-1)/(3-1)) as kriteria_4
FROM 
    (SELECT id_penjahit, AVG(kriteria_1) AS kriteria_1, AVG(kriteria_2) AS kriteria_2, AVG(kriteria_3) AS kriteria_3, AVG(kriteria_4) AS kriteria_4 FROM RATING GROUP BY id_penjahit) AS A
)

select id_penjahit, (kriteria_1*(select normalisasi from kriteria WHERE id_kriteria = 1)) AS kriteria_1, 
(kriteria_2*(select normalisasi from kriteria WHERE id_kriteria = 2)) AS kriteria_2, 
(kriteria_3*(select normalisasi from kriteria WHERE id_kriteria = 3)) AS kriteria_3, 
(kriteria_4*(select normalisasi from kriteria WHERE id_kriteria = 4)) AS kriteria_4
from nilai



select id_penjahit, (kriteria_1 + kriteria_2 + kriteria_3 + kriteria_4) AS NilaiAkhir
from (
select id_penjahit, (kriteria_1*(select normalisasi from kriteria WHERE id_kriteria = 1)) AS kriteria_1, 
(kriteria_2*(select normalisasi from kriteria WHERE id_kriteria = 2)) AS kriteria_2, 
(kriteria_3*(select normalisasi from kriteria WHERE id_kriteria = 3)) AS kriteria_3, 
(kriteria_4*(select normalisasi from kriteria WHERE id_kriteria = 4)) AS kriteria_4
from nilai ) AS A
GROUP BY id_penjahit
ORDER BY (kriteria_1 + kriteria_2 + kriteria_3 + kriteria_4) DESC






=============

SELECT id_penjahit, (kriteria_1 + kriteria_2 + kriteria_3 + kriteria_4) AS NilaiAkhir
FROM (
    SELECT id_penjahit, 
    (kriteria_1*(select normalisasi from kriteria WHERE id_kriteria = 1)) AS kriteria_1, 
    (kriteria_2*(select normalisasi from kriteria WHERE id_kriteria = 2)) AS kriteria_2, 
    (kriteria_3*(select normalisasi from kriteria WHERE id_kriteria = 3)) AS kriteria_3, 
    (kriteria_4*(select normalisasi from kriteria WHERE id_kriteria = 4)) AS kriteria_4
    FROM (
        SELECT id_penjahit, 
        ((kriteria_1-1)/(3-1)) as kriteria_1, 
        ((kriteria_2-1)/(3-1)) as kriteria_2, 
        ((kriteria_3-1)/(3-1)) as kriteria_3, 
        ((kriteria_4-1)/(3-1)) as kriteria_4
        FROM (
            SELECT id_penjahit, 
            AVG(kriteria_1) AS kriteria_1, 
            AVG(kriteria_2) AS kriteria_2, 
            AVG(kriteria_3) AS kriteria_3, 
            AVG(kriteria_4) AS kriteria_4 
            FROM RATING 
            GROUP BY id_penjahit) AS A ) 
        AS TABLENILAI ) 
    AS NORMALISASI
GROUP BY id_penjahit
ORDER BY (kriteria_1 + kriteria_2 + kriteria_3 + kriteria_4) DESC



SELECT * FROM detail_kategori 
JOIN penjahit ON penjahit.id_penjahit = detail_kategori.id_penjahit 
JOIN kategori ON kategori.id_kategori = detail_kategori.id_kategori
JOIN nilai ON nilai.id_penjahit = penjahit.id_penjahit
WHERE kategori.id_kategori = 2


SELECT * FROM ukuran_detail_kategori
JOIN detail_kategori ON detail_kategori.id_detail_kategori = ukuran_detail_kategori.id_detail_kategori 
JOIN kategori ON kategori.id_kategori = detail_kategori.id_kategori
JOIN ukuran ON ukuran.id_ukuran = ukuran_detail_kategori.id_ukuran
WHERE ukuran_detail_kategori.id_detail_kategori = 9


SELECT * FROM pesanan
WHERE pesanan.id_pelanggan = 1

SELECT * FROM ukuran_detail_pesanan
JOIN ukuran ON ukuran.id_ukuran = ukuran_detail_pesanan.id_ukuran
WHERE ukuran_detail_pesanan.id_pesanan = 5

SELECT * FROM ukuran_detail_pesanan
JOIN ukuran ON ukuran.id_ukuran = ukuran_detail_pesanan.id_ukuran
JOIN pesanan ON pesanan.id_pesanan = ukuran_detail_pesanan.id_pesanan
JOIN detail_kategori ON detail_kategori.id_detail_kategori = pesanan.id_detail_kategori
JOIN kategori ON kategori.id_kategori = detail_kategori.id_kategori
WHERE ukuran_detail_pesanan.id_pesanan = 2;


/* write your SQL query below */

SELECT a.ID, a.Name, DivisionName, m.Name as ManagerName, a.Salary
FROM maintable_8QH5Y as a
INNER JOIN cb_companydivisions as b ON a.DivisionID = b.ID
INNER JOIN maintable_8QH5Y as m ON a.ManagerID = m.ID
ORDER BY a.Salary DESC
LIMIT 1
OFFSET 1
