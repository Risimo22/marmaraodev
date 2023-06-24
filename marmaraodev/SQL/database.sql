CREATE TABLE rezervasyon(
   salon_adi VARCHAR(50) NOT NULL,
   musteri_adi VARCHAR(50) NOT NULL,
   musteri_tel VARCHAR(15) NOT NULL,
   salon_durum VARCHAR(15) NOT NULL,
   musteri_id INT PRIMARY KEY AUTO_INCREMENT,
   tarih DATETIME
);


INSERT INTO rezervasyon (musteri_adi, musteri_tel, salon_adi, salon_durum, tarih) VALUES
('Mustafa Yavuz', '5423559501', 'Gold Dugun Davet', 'Dolu', NOW()),
('Anil Titan', '987654321', 'Lidya Garden', 'Dolu', NOW()),
('Sema Tali', '987654321', 'Gold Dugun Davet', 'Dolu', NOW()),
('Emir Batin', '987654321', 'Lidya Garden', 'Dolu', NOW()),
('Dogukan Gungor', '987654321', 'Yesilbahce', 'Dolu', NOW()),
('Sakir Yildiz', '987654321', 'Lidya Garden', 'Dolu', NOW()),
('Nil Yumi', '987654321', 'Yesilbahce', 'Dolu', NOW()),
('Yasin Tektas', '987654321', 'Lidya Garden', 'Dolu', NOW()),
('Arzu Tektas', '987654321', 'Gold Dugun Davet', 'Dolu', NOW()),
('Selin Basdas', '987654321', 'Lidya Garden', 'Dolu', NOW());



