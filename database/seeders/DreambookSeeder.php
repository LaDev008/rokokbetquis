<?php

namespace Database\Seeders;

use App\Models\Dreambook;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DreambookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // ['dreambook', 'dream_2d', 'nature_code', 'image']
        //  image = '/storage/erek-erek/1.png
        $dreams = [
            [
                'dreambook' => 'Penyair – Tapir – Kupas Kelapa – Sempritan – Tanggalan – Pindah Rumah – Bulan – Kumbo Karno – Kerbau – Jendral',
                'dream_2d' => 'Pedagang – Kelapa Muda',
                'nature_code' => 'Lampu Teplok Menyala – Nyiur, Semut – Tuan Tanah.',
            ],
            [
                'dreambook' => 'Hantu – Ikan Bandeng – Tukang Jual Ikan – Lampu atau Api Obor – Jambu Klutuk / Mente – Tangan Manusia – Betara Kala – Burung Pipit – Gerombolan Perampok',
                'dream_2d' => 'Prajurit atau Tentara – Pencak Silat',
                'nature_code' => 'Cicak Sedang Kawin – Langsat – Binatang Naga – Abdi Raja',
            ],
            [
                'dreambook' => 'Wisuda / Sarjana – Keong – Lompat Jauh dan Tinggi – Sayuran Wortel – Jangkar Besi – Sepasang Sandal – Betara Bromo – Binatang Kucing – Uang Kas',
                'dream_2d' => 'Orang Eropa / BULE – Tukang Mucikari',
                'nature_code' => 'Kodok Masuk Rumah – Jagung – Binatang Singa – Kepala Penjahat',
            ],
            [
                'dreambook' => 'Orang Mati – Binatang Angsa – Lompat Galah – Sayuran Hijau Sawi – Sepasang Kaki – Sedang Cemburu – Subali – Binatang Kupu-Kupu – Pelacur Kelas Tinggi',
                'dream_2d' => 'Orang Dayak – Kepala Kelompok Polisi',
                'nature_code' => 'Kupu-Kupu Masuk Rumah di Malam Hari – Pohon Nipah – Badak – Penjahat / Brandalan',
            ],
            [
                'dreambook' => 'Dewi Kwan Im – Sepasang Balon – Sayuran Petai – Lompat Jauh – Sayuran Hijau Kangkung – Burung Merak – Membaca Buku – Dewi Ratih – Burung Kutilang – Orang / Seniman',
                'dream_2d' => 'Hipnotis – Anggar',
                'nature_code' => 'Orang Gila Sedang Ngamuk di Jalan – Jeruk Bali –Burung Elang / Rajawali – Menantu Raja',
            ],
            [
                'dreambook' => 'Raja Perampok – Singa Jantan – Jemur Baju – Loncat Indah – Kayu Manis – Bumbu Merica – Kereta Api – Garu Langit – Burung Kicau Murai – Dapat Untung Besar',
                'dream_2d' => 'Pekerjaan Tukang Sapu – Pekerjaan Pemahat',
                'nature_code' => 'Burung Elang Sedang Terbang – Pohon Durian – Angsa – Orang Meninggal',
            ],
            [
                'dreambook' => 'Dewi Bulan – Hewan Kelinci – Minta Bantuan – Sedang Berenang – Kapas – Boneka – Daun Teh Hijau – Dewi Sri – Naga – Raja',
                'dream_2d' => 'Penjual Sayur – Pelukis',
                'nature_code' => 'Anjing Melolong Ketika Malam Hari – Manggis – Hewan Macan – Maling',
            ],
            [
                'dreambook' => 'Pelayan – Hewan Babi – Kapal Keruk – Perahu Layar – Sayuran Bawang – memancing – Batu Arang – Sulastri – Hewan Kera – Setan Gantung',
                'dream_2d' => 'Sedang Ronda Malam – Serdadu',
                'nature_code' => 'Kucing Sedang Kawin – Pohon Kenari – Hewan Kodok – Sumur Air',
            ],
            [
                'dreambook' => 'Maling Kecil – Hewan Macan – Melanggar – Motor Atau Mesin Bot – Bunga Kecubung – Sayuran Daun Sop – Pasar – Tuan Mariam – Anjing – Jendral Serakah',
                'dream_2d' => 'Pramugari Cantik – Ahli Nujum',
                'nature_code' => 'Mendengar Suara Burung Hantu – Pohon Jati – Hewan Ikan Belut – Kerajaan / Jendral',
            ],
            [
                'dreambook' => 'Jendral – Hewan Kerbau – Jala Ikan – Mendayung – Kates – Pinang – Anak Gadis – Bima – Ikan Paus – Raja Laut',
                'dream_2d' => 'Koki Masak – Si Bungkuk',
                'nature_code' => 'Perampok Ditangan Polisi – Pohon Jambu – Musang – Pendeta',
            ],
            [
                'dreambook' => ' Kelenteng / Vihara – Kelapa – Hewan Kelabang – Rileks – Minum Bir – Panjat Pohon – Sedang Menyelam – Sedang Sembahyang / Pemujaan – Hewan Macan – Maling',
                'dream_2d' => 'Polisi wanita – Sakit Mata',
                'nature_code' => 'Tikus Lewat Depan Kita – Pepaya – Ayam Kalkun – Sang Buddha',
            ],
            [
                'dreambook' => 'Menteri Yang Serakah – Hewan Anjing – Sayuran Jamur – Lari Cepat – Kipas – Kerudung – Sapu – Sengkuni – Kepala Hewan Singa – Raja Rampok',
                'dream_2d' => 'Pencopet – Bidadari',
                'nature_code' => 'Ular Lewat Depan Kita –Pohon Gambas – HewanBebek – Sepasang Suami Istri',
            ],
            [
                'dreambook' => 'Penasihat Untuk Perang – Hewan Kuda – Lemon – Lari Gawang – Bola – Luku – Air Panas – Wibisana – Hewan Kelinci – Dewi Bulan',
                'dream_2d' => 'Pak Polisi – Hostes',
                'nature_code' => 'Orang dibunuh hingga Meninggal / Mati – Pohon Randu – Lebah / Tawon – Sakit Kudis',
            ],
            [
                'dreambook' => 'Menjaga Pintu – Hewan Gajah – Sarang Burung – Estafet – Senjata Keris – Kipas Angin – Sedang Cuci Rambut – Prabu Kesa – Hewan Capung – Peti Mati',
                'dream_2d' => 'Intel / Polisi Wanita – Main Bola Basket',
                'nature_code' => 'Orang Meninggal Ditabrak Mobil – Jeruk Nipis – Hewan Gajah – Penjaga',
            ],
            [
                'dreambook' => 'Sedang Memotong Babi – Hewan Unta – Beras – Tolak Peluru – Jembatan – Sayuran Kentang – Spet – Jaya Langsuan – Hewan Kuda – Penasihat Perang',
                'dream_2d' => 'Tukang Becak – Dayang Dayang',
                'nature_code' => 'Orang Terbakar – Keladi – Kuda – Prajurit Perang',
            ],
            [
                'dreambook' => 'Hakim – Tikus – Sayuran Lengkuas – Lempar Martil – Kantor Pos – Karantina – Skrup – Kresna – Burung Merpati – Sejodoh',
                'dream_2d' => 'Kerdil – Dokter Gigi',
                'nature_code' => 'Pakai Baju Terbalik – Pohon Rumbia – Hewan Kerbau – Sang Jendral',
            ],
            [
                'dreambook' => 'Sakit Gudik – Buah Nenas – Tawon – Lembaran Surat – Buah Durian – Lempar Cakram – Pisang – Jembawan – Burung Cendrawasih – Putri raja',
                'dream_2d' => 'Lepra – Petinju',
                'nature_code' => 'Berkelahi Sewaktu Judi – Pohon Pisang – Kupu-Kupu – Pelacur Tinggi',
            ],
            [
                'dreambook' => ' Pemadat – Burung Bangau – Aren – Lempar Lembing – Buah Durian – Telepon – Api – Terong – Burung Murai – Untung Besar',
                'dream_2d' => 'Anak Brandalan – Karateka',
                'nature_code' => 'Lelaki Memakai Anting Sebelah – Cabai – Hewan Lalat – Istri Setia',
            ],
            [
                'dreambook' => 'Uang Kas – Kantor Polisi – Hewan Kucing – Pisau Parang – Lombok – Jual Es – Polo Air – Bisma – Hewan Udang – Jenis Kelamin',
                'dream_2d' => 'Dokterandus – Sepak Takrau',
                'nature_code' => 'Mati Listrik atau mati lampu Ketika Pesta – Pohon Aren – Hewan Bekicot – Wisuda',
            ],
            [
                'dreambook' => 'Pelacur Kelas Tinggi – Serikaya – Hewan Kupu-Kupu – Sedang Cabut Gigi – Main Lotre – Ban Sepeda – Sepak Bola – Banowati – Hewan Bekicot – Wisuda',
                'dream_2d' => 'Lempar Bola – Wartawan Wanita',
                'nature_code' => 'Kuduk Berdiri Sewaktu Berjalan Di Malam Hari – Pohon Nangka – Burung Walet – Pelacur Wanita Tua',
            ],
            [
                'dreambook' => 'Istri Sejati – Ban Mobil – Hewan Lalat – Sedang Bermesraan – Kedai Tuak – Palu – Bola Volli – Satyawati – Hewan Anjing – Jendral Yang Serakah',
                'dream_2d' => 'Pak Satpam – Petruk',
                'nature_code' => 'Musang Lewat Malam Hari – Pohon Delima – Hewan Tikus – Ahli Nujum',
            ],
            [
                'dreambook' => 'Pelacur – Burung Walet – Sedang Memotret – Bulu Tangkis – Kapak – Sayuran Bayam – Makan Permen – Lesmanawati – Hewan Capung – Peti Matisd',
                'dream_2d' => 'Perantara – Berenang',
                'nature_code' => 'Ban Kendaraan Pecah – Bambu – Ikan Mas – Nelayan',
            ],
            [
                'dreambook' => 'Peti Mati – Sayuran Terong – Hewan Capung – Buah Kana Cina – Sedang Cuci Muka – Harmonika – Bola Tenis – Sembadra – Hewan Beruang – Orang Eskimo',
                'dream_2d' => 'Hewan Babi Hutan – Kulit Hitam',
                'nature_code' => 'Cicak Masuk Wadah Gula – Pohon Rimbang – Hewan Kelabang – Vihara / Kelenteng',
            ],
            [
                'dreambook' => 'Setan Gantung – Kera – Potong Ayam – Main Bola Basket – Buah Pisang – Bedak – Piano – Wilkampana – Hewan Serigala – Siluman Air',
                'dream_2d' => 'Putri Ayu – Pompa Bensin',
                'nature_code' => 'Lembu Sedang Ngamuk – Jeruk Manis – Binatang Kancil – Penipu',
            ],
            [
                'dreambook' => 'Sumber Air – Katak / Kodok – Bersolek – Bola Ping Pong – Sayuran Wortel – Kelentang – Sikat Gigi – Dewa Ruci – Ikan Paus – Raja Laut',
                'dream_2d' => 'Ibu Guru – Main Sepak Bola',
                'nature_code' => 'Merpati Sedang Terbang - Salak – Hewan Buaya – Perawan Tua',
            ],
            [
                'dreambook' => 'Menantu Raja – Burung Rajawali – Sedang Menelepon – Baseball – Jagung – Memasak – Pasta Gigi – Rongga Dewa – Hewan Musang – Pendeta',
                'dream_2d' => 'Suster – Bendera Negara Jepang',
                'nature_code' => 'Durian Jatuh – Pohon Kuini – Hewan Kura-Kura – Cewek Cantik',
            ],
            [
                'dreambook' => 'Menantu Raja – Burung Rajawali – Sedang Menelepon – Baseball – Jagung – Memasak – Pasta Gigi –Rongga Dewa – Hewan Musang – Pendeta',
                'dream_2d' => 'Berdoa – Bendera Negara Amerika',
                'nature_code' => 'Cicak Sedang Makan Capung – Pohon Sukun – Hewan Kambing – Cewek Cantik / Wanita',
            ],
            [
                'dreambook' => 'Wanita Cantik – Hewan Kura-Kura – Otak – Billiard – Sabun Bubuk – Bidan – Isi Minyak – Dewi Supraba – Hewan Jangkrik – Penyihir Wanita',
                'dream_2d' => 'Tukang Air– Berjodoh',
                'nature_code' => 'Cicak Sedang Makan Kupu-Kupu – Pohon Rambung – Hewan Onta – Sedang Potong Babi',
            ],
            [
                'dreambook' => 'Pemotong Kayu – Ayam – Buah Pala – Menembak – Sayuran Tomat – Montir – Jarum – Raden Nakula – Katak / Kodok – Sumber Air',
                'dream_2d' => 'Penyelam Air – Siluman Kera',
                'nature_code' => 'Dompet Ketinggalan – Pohon Coklat – Hewan Rusa – Orang Buta',
            ],
            [
                'dreambook' => 'Pendeta Sakti – Ikan Belut – Truck / Mobil Barang – Memanah – Kursi – Uang Perak – Koran – Sidi Wacana – Burung Kalong – Dracula',
                'dream_2d' => 'Kepala Sekolah – Siluman Babi',
                'nature_code' => 'Ketemu Uang Kertas Di Jalan – Kedondong – Cicak – Ketua Polisi',
            ],
            [
                'dreambook' => 'Nelayan – Ikan Mas – Tas – Sedang Angkat Besi – Belimbing – Pembunuh – Toilet – Naga Tatmala – Bebek – Suami istri',
                'dream_2d' => 'Kepala Stasiun – Semar',
                'nature_code' => 'Banci Nyebrang Jalan – Pohon Lompong – Ikan Paus – Raja Lautan',
            ],
            [
                'dreambook' => 'Kelamin – Udang – Mencari Uang – Sedang Senam – Sangkar Burung – Jas Hujan – Cacing Kecil atau Pita – Yuyu Rumpung – Belibis – Penyihir Pria',
                'dream_2d' => 'Marsekal – Tabrak Lari',
                'nature_code' => 'Pengemis Sedang Bawa Anak – Tomat – Tokek – Raksasa',
            ],
            [
                'dreambook' => 'Ahli Nujum – Hewan Ular – Cari Kerang – Yudo – Kamar Mandi – Sarang Lebah – Tali – Abiyasa – Hewan Kepiting – Pahlawan',
                'dream_2d' => 'Menteri Kehutanan – Bayi Tabung',
                'nature_code' => 'Ketangkap Sedang Mencuri Ayam – Padi – Kelinci – Dewi Bulan',
            ],
            [
                'dreambook' => 'Pengemis – Laba-laba – Uang – Gulat – Sabun – Gigi – Sayur Tahu – Petruk – Hewan Tikus – Hakim',
                'dream_2d' => 'Pengairan – Duta',
                'nature_code' => 'Gajah Sedang Mengamuk – Pohon Sawit – Binatang Banteng – Pengacara',
            ],
            [
                'dreambook' => 'Orang Buta – Hewan Rusa – Jelarut – Silat – Jamu – Paru-Paru – Burung Merpati – Destarata – Ayam Jantan – Pemotong Kayu',
                'dream_2d' => 'Wisuda / Sarjana – Koran',
                'nature_code' => 'Balon Pecah – Terong – Burung Bangau – Pemadat',
            ],
            [
                'dreambook' => 'Cewek / Wanita– Lambung – Kambing – Sedang Boncengan – Jalan-Jalan – Tinju – Drupadi – Burung Walet – Pelacur Umum',
                'dream_2d' => 'Menteri Wanita – Pecandu',
                'nature_code' => 'Jatuh Dompet – Pohon Sawit – Duyung – Wanita Pembantu',
            ],
            [
                'dreambook' => 'Pendeta Wanita – Binatang Musang – Apotek – Balap Sepeda – Buah Manggis – Sekop – Kacamata – Sayemprabu – Hewan Macan – Maling',
                'dream_2d' => 'Dokter – Tertuduh',
                'nature_code' => 'Kudis Dipatok Ayam – Pohon Sawo – Ikan Tongkol – Penjaga Malam',
            ],
            [
                'dreambook' => 'Si Bungkuk – Gabus – Bra / Pakaian Dalam – Balap Mobil – Anggur – Berpacaran – Mobil Truk – Gareng – Kalong – Drakula',
                'dream_2d' => 'Pilot – Pengadilan',
                'nature_code' => 'Orang Mata Satu – Pohon Rambutan – Kumbang – Pendekar Wanita',
            ],
            [
                'dreambook' => 'Putra Raja – Burung Cendrawasih – Wanita hamil – Balap Motor – Tong – Kapal Perang – Engsel – Utari – Burung Bangau – Pemahat',
                'dream_2d' => 'Inang – Pemandangan',
                'nature_code' => 'Wanita Rambut Ekor Kuda – Petai – Burung Hantu – Pemahat Pedang',
            ],
            [
                'dreambook' => 'Sepasang Kekasih – Hewan Kalajengking – Balap Kuda – Topi – Bemo – Binatang Kedelai – Narasoma – Kumbang – Pendekar Cewek',
                'dream_2d' => 'Pemabuk – Kebun Binatang',
                'nature_code' => 'Pemain Bola Patah Kaki – Jengkol – Anjing – Jendral Nafsu dan Serakah',
            ],
            [
                'dreambook' => 'Penolong – Gelatik – Penjual Jagung – Golf – Peci – Buah Duku – Tang – Widura – Burung Puyuh – Orang Bisu',
                'dream_2d' => 'Pelancong – Kolam Berenang',
                'nature_code' => 'Pakai Akar Bahar – Kopi – Ikan Gabus – Si Bungkuk',
            ],
            [
                'dreambook' => 'Pahlawan – Kepiting – Berkuda – Lilin – Paku – Sabuk – Warsaya – Katak – Sumber Air',
                'dream_2d' => 'Putri Duyung – Pabrik',
                'nature_code' => 'Cicak Terjatuh – Lada – Ikan Bendera – Pemabuk',
            ],
            [
                'dreambook' => 'Jejaka Tua – Buaya – Marinir – Berjalan – Catur – Pakis – Dokter – Widakta – Kambing – Wanita',
                'dream_2d' => 'Jerat Anjing – Petromak',
                'nature_code' => 'Kucing Tangkap Kadal – Cengkeh – Perkutut – Petani',
            ],
            [
                'dreambook' => 'Janda Muda – Hiu – Bom – Anggar – Bunga Mawar – Buah Langsat – Grendel – Sembadra – Macan Tutul – Pemburu',
                'dream_2d' => 'Wasit – Lampu Aladin',
                'nature_code' => 'Helm Jatuh Ketika naik motor – Pohon Merica – Binatang Serigala – Siluman Air',
            ],
            [
                'dreambook' => 'Penjahat atau Berandalan – Badak – Gadung – Ski Air – Sisir – Kuaci – Seruling – Citraksa – Bebek – Sepasang Suami Istri',
                'dream_2d' => 'Pelancong – Montir',
                'nature_code' => 'Gunung Api Meletus – Kayu Manis – Nyamuk – Jenderal',
            ],
            [
                'dreambook' => 'Pengembara – Kendi – Banteng – Tas – Mata-Mata – Ketupat – Terbang Layang – Rama – Siput / Keong – Wisuda',
                'dream_2d' => 'Kerja Bakti – Akrobat',
                'nature_code' => 'Latihan Baris – Pohon Kemiri – Ikan Hiu – Raja Setan',
            ],
            [
                'dreambook' => 'Nenek Moyang – Orang Hutan – Tukar Ban Mobil – Terjun Bebas – Toko – RumahSakit – Sikat – Hyang Wenang – Kupu-Kupu – Pelacur Mewah',
                'dream_2d' => 'TukangJam – Fotographer',
                'nature_code' => 'Orang hamil dilanggar – Sirsak – Kepiting – Pahlawan',
            ],
            [
                'dreambook' => 'Banci Kaleng – Sayuran Keladi – Zebra – Upacara Bendera – Hotel – Tangga – Sirkus – Stuna – Ayam – Pemotong Kayu',
                'dream_2d' => 'Sabung Ayam – Permata Pirus',
                'nature_code' => 'Guru Selingkuh Dengan Murid – Rukam – Binatang Tapir – Penyair',
            ],
            [
                'dreambook' => 'Ceroboh – Landak – Sayur Labu – Catur – Bioskop – Garuk – Botol dari Obat – Dasa Muka – Burung Cendrawasih – Putri Raja',
                'dream_2d' => 'Sedang Menyelam – Badut',
                'nature_code' => 'Ngebut Di Jalan – Akasia – Laba-Laba – Pengemis',
            ],
            [
                'dreambook' => 'Drakula – Kelelawar – Orang Melahirkan – Mendaki Gunung – Cetok – Lipstik – Rok – Betara Durga – Puyuh – Bisu',
                'dream_2d' => 'Robot – Berpidato',
                'nature_code' => 'Pejabat dipecat Sebab Korupsi – Pohon Seri – Trenggiling – Orang tahanan',
            ],
            [
                'dreambook' => 'Eskimo – Beruang – Daun Sirih – Pembawa Obor – Pacul – Guru – Penjual Satay – Bagong – Burung Walet – Pelacur / Wanita Penghibur',
                'dream_2d' => 'Nenek Moyang – Bhiksu',
                'nature_code' => 'Orang Gila Bernyanyi – Buah Alpukat – Kerang – Ahli Filsafat',
            ],
            [
                'dreambook' => 'Ahli Filsafat – Kerang – Lonceng – Patel Lele – Tebu – Celana – Rapat Kerja – Narada – Binatang Harimau – Tukang Tenung',
                'dream_2d' => 'Tukang Kayu – Kasih Ibu',
                'nature_code' => 'Penyeludup Cewek Dan Tertangkap Polisi – Beringin – Udang – Uang',
            ],
            [
                'dreambook' => 'Raja Laut – Ikan Paus – Buah Nona – Tali – Dompet – Meminum Racun – Matahari – Antasena – Burung Kutilang – Seniman',
                'dream_2d' => 'Tukang Batu – Arjuna',
                'nature_code' => 'Sekelompok Preman Meninggal Karena Dibunuh – Pinus – Hewan Kangguru – Pertapa',
            ],
            [
                'dreambook' => 'Penjual Silat – Ikan Duri – Garam – Akrobat – Buah Rambutan – Ngirim Surat – Taxi– Abimanyu – Burung Hantu – Pemahat Pedang',
                'dream_2d' => 'Pandir – Pendekar',
                'nature_code' => 'Orang Mengemudi Becak – Cendana – Kuda Nil – Penggembala',
            ],
            [
                'dreambook' => 'Raja Hutam / Monyet – IkanLele – Kursi Untuk Malas Malasan – Sepatu Roda – Kalung – Juara – Dokar – Hanoman – Burung Elang dan Rajawali – Menantu Sang Raja',
                'dream_2d' => 'Kusir – Raja',
                'nature_code' => 'Kepergok Sedang Selingkuh – Cempaka – Binatang Panjang /Jerapah – Dewa Bumi',
            ],
            [
                'dreambook' => 'Pertapa – Kangguru – Memetik Tembakau – Bola Kasti – Gelang – Lagi di Kelenteng – Pengaron – Raden Seta – Hiu – Raja Setan',
                'dream_2d' => 'Menjual Bunga – Pelarian',
                'nature_code' => 'Sepasang Nenek Kakek Jalan Berdua – Pohon Kamboja – Ikan Gergaji – Orang Kaya',
            ],
            [
                'dreambook' => 'Budak – Ikan Duyung – Durian – Kenanga – Cikar – Bengkung – Limbuk – Ringen – Udang – Kelamin',
                'dream_2d' => 'Cewek Montok – Profesor',
                'nature_code' => 'Tanaman Padi Kena Banjir – Pohon Rambe – Jangkrik – Wanita Sihir',
            ],
            [
                'dreambook' => 'Anak Sakti – Ulat Sutra – Kunyit – Layangan – Sepatu – Jual Bakso – Tempat Tidur – Gatot Kaca – Kepiting – Pahlawan',
                'dream_2d' => 'Supir Taksi – Dewa Kwan Kong',
                'nature_code' => 'Hidung Lagi Berdarah / Mimisan – Duku – Kera – Nenek Moyang',
            ],
            [
                'dreambook' => 'Penari – Sekolahan – Pacuan Kuda – Cumi-Cumi – Rumah – Hantu – Kelereng – Selir – Macan Tutul – Memburu',
                'dream_2d' => 'Kap salon – Selir',
                'nature_code' => 'Orang Keling Mabuk Lalu Masuk Parit – Cempedak – Hewan Buas Beruang – Orang Eskimo',
            ],
            [
                'dreambook' => 'Putra Raja – Burung Kakak Tua – Kaos – Dakon – Kedondong – Jam Dinding – Kencur – Raden Lesmana – Kuda – Penasihat Perang',
                'dream_2d' => 'Petani – Gentleman',
                'nature_code' => 'Goreng Pisang dan Gosong – Buah Nona – Orang Hutan – Setan Gentayangan',
            ],
            [
                'dreambook' => 'Kepala Polisi – Cicak – Pot Bunga – Karambol – Buah Delima – Mencuri Ayam – Handuk – Sentiyaki – Burung Merak – Dewi Kwan Im',
                'dream_2d' => 'Tukang Pukul – Terjun Payung',
                'nature_code' => 'Orang Eropa Tawar Buah – Pohon Mahoni – Ulat Sutra – Terjerat',
            ],
            [
                'dreambook' => 'Pedagang – Kecoak – Gendongan – Mayat – Kacamata – Buku – Roti – Bala dewa – Tawon – Lagi Sakit Kudisan',
                'dream_2d' => 'Orang Tahanan – Main Bola Kasti',
                'nature_code' => 'Diancam Ketika Di Tengah Jalan – Belimbing – Ikan Suro – Janda Muda',
            ],
            [
                'dreambook' => 'Pagoda – Walang Kadung – Meriam – Petan – Termos – Terhalang – Selendang – Sapta Arga – Burung Hantu – Pembuat / Pemahat Pedang',
                'dream_2d' => 'Mata-Mata – Ambulans',
                'nature_code' => 'Musang Makan Ayam – Pohon Turi – Ikan Nus – Prajurit Perang',
            ],
            [
                'dreambook' => 'Pendekar Wanita – Kumbang – Belanja – Treksando – Bantal Tidur – Jendela – Talas – Larasati – Kelabang – Kelenteng',
                'dream_2d' => 'Tukang Rombengan – Televisi',
                'nature_code' => 'Pedagang Obat Di Jalanan – Apel – Kuda Laut – Dewa Angin',
            ],
            [
                'dreambook' => 'Dewa Uang – Kuda Laut – Ronggeng – Bandulan – Buah Apel – Tidur dan Guling – Kecambah – Batara Indra – Naga – Raja',
                'dream_2d' => 'Firaun – Lapangan Kosong',
                'nature_code' => 'Wanita Sedang Bertengkar – Kentang – Mimi – Pencari Jejak',
            ],
            [
                'dreambook' => 'Raja Setan – Ikan Hiu – Sayur Jipang – Kayang – Klompen – Petromak – Hisap Dan Candu – Kalasrenggi – Babi – Pelayan',
                'dream_2d' => 'Bajingan – Eskimo',
                'nature_code' => 'Kelelawar Masuk Ke dalam Rumah – Petai – Unta – Penjual Daging',
            ],
            [
                'dreambook' => 'Dewa Bumi – Jerapah – Sawatan – Potong Tangkai Padi – Sukun – Korek Ubi – Gelas – Antaboga – Jangkrik – Penyihir Cewek / Wanita',
                'dream_2d' => 'Kuli Pasir – Roket',
                'nature_code' => 'Anak Kecil Tersiram Air Panas – Jamblu Klutuk – Lintah – Penghisap Bumi',
            ],
            [
                'dreambook' => 'Penjual Daging Mentah – Burung Unta – Korek Api – Egrang – Sendok – Kacang Panjang – Abilawa – Binatang Kerbau – Jenderal',
                'dream_2d' => 'Wanita Malam Penghibur – Bulan',
                'nature_code' => 'Tukang Becak LAgi Tidur – Lontar – Cumi-Cumi – Penari',
            ],
            [
                'dreambook' => 'Pemahat Pedang – Burung hantu – Naik Jambe – Ubi – Garpu – Pisau – Sapi – Cepot – Tikus Hakim',
                'dream_2d' => 'Buddhisme – Kalung Berlian',
                'nature_code' => 'Tangan Terpotong – Lumih – Bandeng – Setan / Hantu',
            ],
            [
                'dreambook' => 'Pencari Jejak – Mimi – Gunung – Main Permainan Engklek – Gunting – Tukang Jam – Peti Mati – Antareja – Burung Bangau – Pemahat',
                'dream_2d' => 'Wanita Hamil – Permaisuri',
                'nature_code' => 'Tukang Es Terlanggar – Pohon Belinjo – Walang Kadung – Pagoda',
            ],
            [
                'dreambook' => 'Panglima – Keledai – Tarik Tambang – Lampu Minyak – Rumah Makan – Ubi Kayu – Dewa Karno – Ikan Mas – Nelayan Ikan',
                'dream_2d' => 'Timpang – Kelana',
                'nature_code' => 'Kena Razia Polisi – Jambu Monyet – Betet – Orang Gila',
            ],
            [
                'dreambook' => 'Pemburu – Macan Tutul – Baju Kemeja – Loncat Karet – Sumur – Kacang Goreng – Pistol Ecek Ecek / Mainan – Pandu – Burung Rajawali – Menantu Raja',
                'dream_2d' => 'Lintah Darat – Piala',
                'nature_code' => 'Ayam Makan Ikan, Lengkeng – Lele – Raja Kera',
            ],
            [
                'dreambook' => 'Dewa Langit – Ikan Dorang – Tanam Kelapa – Sepak Kenci – Keran Air – Arloji – Tugu – Batara Guru – Kambing – Cewek',
                'dream_2d' => 'Tukang Parkir – Candi',
                'nature_code' => 'Pedagang Kain LAgi Marah – Pohon Roda – Zebra – Bencong',
            ],
            [
                'dreambook' => 'Tuan Tanah – Semut – Bolpoin – Sempritan – Anting-Anting – Kemoceng – Bintang – Dursasana – Burung Merak – Dewi Kwan Im',
                'dream_2d' => 'Pandai Besi – Kartu AS',
                'nature_code' => 'Memijak Kotoran Manusia – Pohon Waru – Ikan Sampan – Dewa Laut',
            ],
            [
                'dreambook' => 'Bajak Laut – Pinguin – Burung Kenari – Ketapel – Gentong – Radio – Kamera – Indrajit – Kelabang – Kelenteng',
                'dream_2d' => 'Waria / Banci / Bencong – Lukisan',
                'nature_code' => 'Kencan Di bawah Pohon – Pohon Juar – Ikan Tenggiri – Putri Kipas',
            ],
            [
                'dreambook' => 'Sepasang Suami Istri – Bebek – Kuini – Balapan Lari – Buah Nangka – Jatuh – Lemari Baju – Ratih Kamajaya – Ikan Mas – Nelayan Ikan',
                'dream_2d' => 'Maling – Kunci',
                'nature_code' => 'Mancing Dan Dapat Ular – Pohon Buni – Kalong – Dracula',
            ],
            [
                'dreambook' => 'Jendral wanita – Nyamuk – Kasur – Teplekan – Timbangan – Mata – Ngambil Air – Srikandi – Monyet – Setan Gentayangan',
                'dream_2d' => 'Pengemis – Ayunan',
                'nature_code' => 'Gubuk Terbakar – Pohon Cermai – Kepompong – Terjerat',
            ],
            [
                'dreambook' => 'Walikota – Penyu – Cincin – Bekel – Payung – Sayur Pari – Anjing Bercinta – Togog; Laba-Laba – Pengemis',
                'dream_2d' => 'Sekretaris – Barongsai',
                'nature_code' => 'Pemain Sulap Pinggir Jalan – Lengkuas – Kucing – Uang Kas',
            ],
            [
                'dreambook' => 'Orang kaya – Ikan Gergaji – Wajan – Balapan Becak – Semangka – Ketumbar – Jual Obat – Lesmana – Burung Gereja – Jurus Sakti',
                'dream_2d' => 'Ahli Sepatu – Dakkochan',
                'nature_code' => 'Pencopet Lagi Beraksi – Kurma – Kecoak – Pedagang',
            ],
            [
                'dreambook' => 'Jendral Nafsu dan Serakah – Orong-Orong – Jagung – Panco – Jeruk bali – Bermain – Kompor – Suyudana – Kucing – Kas Uang',
                'dream_2d' => 'Potong Rambut – Harimau',
                'nature_code' => 'Plaza Terbakar – Pohon Dringo – Orong-Orong – Gerombolan Maling Besar',
            ],
            [
                'dreambook' => 'Kepala Desa – Bajing Loncat – Pensil – Apollo – Bunga – Ceret – Menyiram Sayur – Semar – Rusa – Orang Buta',
                'dream_2d' => 'Biduan – Lilin',
                'nature_code' => 'Anak Induk Puyuh – Pohon Jerangau – Landak – Ceroboh',
            ],
            [
                'dreambook' => 'Penipu – Janur Aren – Menyulam – Cangkir – Dam-Daman – Hidung – Aswatama – Singa – Kepala Geng Rampok',
                'dream_2d' => 'Wartawan – Matahari',
                'nature_code' => 'Orang Naik Sepeda – Pohon Kincong – Orong-Orong – Jendral Serakah',
            ],
            [
                'dreambook' => 'Gembala Sapi – Kuda Nil – Lilin – Kartu HP – Berlian – Telinga – Lencana – Udawa; Merpati – Sejodoh',
                'dream_2d' => 'Polisi Lalu Lintas atau Polantas – Nokturama',
                'nature_code' => 'Dapur Terbakar – Pohon Asam Jawa – Pinguin – Bajak Laut',
            ],
            [
                'dreambook' => 'Ibu Suri – Ikan Layur – Sayur Buncis – Mainan Dadu – Pipa – Kumis – Berkasihan – Dewi Kunti – Burung Gereja',
                'dream_2d' => 'Juru Masak – Jantung',
                'nature_code' => 'Anak kembar – Pohon Gelugur – Keledai – Panglima',
            ],
            [
                'dreambook' => 'Buddha – Burung Kalkun – Bibir – Koprol – Kacang – Berkunjung – Kol – Bagaspati – Kumbang – Pendekar Wanita',
                'dream_2d' => 'Kepala Kantor – Kuku Jari',
                'nature_code' => 'Atap Rumah dilempar Batu – Pinang – Cendrawasih – Putri Raja',
            ],
            [
                'dreambook' => 'Penyihir – Jangkrik – Rotan – Latihan Hansip – Bunga Teratai – Pintu – Naik Kapal – Sarpa Kenaka – Babi – Pelayan',
                'dream_2d' => 'Penerjemah – Jenggot / Janggut',
                'nature_code' => 'Orang Mati dan Hanyut di Sungai – Rotan – Babi – Pelayan',
            ],
            [
                'dreambook' => 'Pencabut Nyawa – Ikan Sampan – Dapat Lencana – Gerak Badan – Salak – Rokok – Mentimun – Yamadipati – Buaya – Perjaka Tua',
                'dream_2d' => 'Nahkoda Kapal – Piring Pecah',
                'nature_code' => 'Ayam kokok Jam 12 Malam – Pohon Jahe – Binatang Bajing – Kepala Desa',
            ],
            [
                'dreambook' => 'Orang Gila – Burung Betet – Bengkuang – Kerja Bakti – Botol – WC atau Toilet – Naik Pesawat – Burisrawa – Gajah – Penjaga Pintu',
                'dream_2d' => 'Rambu – Duda',
                'nature_code' => 'Pakai Kacamata Hitam – Kantil – Domba – Dewi Naga',
            ],
            [
                'dreambook' => 'Dewi Naga – Domba – Bawang – Balap Karung – Jeruk manis – Piring – Meluku – Wilutama – Harimau – Tukang Tenung',
                'dream_2d' => 'Direktur – Helikopter',
                'nature_code' => 'Rayakan Ulang Tahun ke-17 – pohon Teh – Ayam – Pemotong Kayu',
            ],
            [
                'dreambook' => 'Sedang Mabuk dan Pemabuk – Ikan Bendera – Lampu Merah – Tambal Ban – Jeruk Keprok – Ciuman – Ember – Boma Nara – Tawon – Sakit Kudis',
                'dream_2d' => 'Pengeboran – Batu Kelapa',
                'nature_code' => 'Mobil Roda Empat Terbalik – Pohon Kemenyan – Ikan Duri – Penjual Silat',
            ],
            [
                'dreambook' => 'Orang Tahanan – Trenggiling – Ke Pasar – Simpang Jalan – Sawah – Berjudi – Pil – Shinta – Kelinci – Dewi Bulan',
                'dream_2d' => 'Pemburu – Sate Kerang',
                'nature_code' => 'Wanita Botak – Gandum – Penyu – Walikota',
            ],
            [
                'dreambook' => 'Siluman Air – Serigala – Tanam Padi – Ambulan – Bambu – Toples – Toko Samsu – Witaksini – Serigala – Siluman Air',
                'dream_2d' => 'Agama Hindu – Pinggul',
                'nature_code' => 'Anak Kecil Pegang Kotoran – Pohon Damar – Merak – Kwan Im',
            ],
            [
                'dreambook' => 'Pendekar Besi – Ikan Tenggiri – Kain – Garis Finish – Alpukat – Sarung – Sabun – Siti Sundari – Buaya – Perjaka Tua',
                'dream_2d' => 'Anak Haram – Rambut',
                'nature_code' => 'Main Catur Sendiri – Jambu Bol – Kakak Tua – Anak Raja',
            ],
            [
                'dreambook' => 'Penjilat – Babi Hutan – Sampan Perahu – Lrangan – Kaos Kaki – Buah Jengkol– Pondok – Durna – Beruang – Orang Eskimo',
                'dream_2d' => 'Pendusta – Janur',
                'nature_code' => 'Pengusaha SudahBangkrut – Pohon Gayong – Babi Hutan – Dewi Kwan Im',
            ],
            [
                'dreambook' => 'Kwan Kong – Kakap – Tidur – Pemandian – Pohon jambu – Jahit Baju – Pena – Prabu Salya – Gajah – Penjaga Pintu',
                'dream_2d' => 'Zatoichi – Kare ayam',
                'nature_code' => 'Mobil Masuk Dalam Jurang – Gandung – Ikan Kakap',
            ],
            [
                'dreambook' => 'Petani – Burung Perkutut – Pisau Cukur – Jalan Raya – Ceret Listrik – Tanam Padi – Kunci – Irawan – Burung Pipit – Perampok',
                'dream_2d' => 'Motor Cross – Kari ayam',
                'nature_code' => 'Mati Mendadak – Anggrek – Ikan Layur – Ibu Suri',
            ],
            [
                'dreambook' => 'Prajurit – Ikan Nus – Selimut – Laut – Mangga – Minyak Angin – Ayam Betina – Citrayuda – Ikan Hiu – Raja Setan',
                'dream_2d' => 'Pramuwisma – Taik Lalat',
                'nature_code' => 'Membunuh Ayah – Pala – Kalajengking – Kekasih',
            ],
            [
                'dreambook' => 'Raksasa – Tokek – Ambil Kelapa – Kali Brankas – Sirsak – Lemari Es – Tuli – Prahasta – Rusa – Orang Buta',
                'dream_2d' => 'Tukang Pijat dan Urut – Shampoo',
                'nature_code' => 'Bayi Kembar Tiga – Pohon Sampinur – Jalak – Hidung Belang',
            ],
            [
                'dreambook' => 'Ronda Malam – Tongkol – Kupas Kelapa – Kecelakaan – Lengkeng – Televisi – Ubi Obat – Dewi Trijata – Kucing – Pendeta',
                'dream_2d' => 'Pedagang – Jambang',
                'nature_code' => 'Pohon Tumbang Menghalangi Jalan – Pohon Resak – Gelatik – Penolong',
            ],
            [
                'dreambook' => 'Kegatelan atau Hidung Belang – Burung Jalak – Sawo – Kodak – Meja Belajar – bayi – Meneun – Arjuna – Belibis – Lelaki',
                'dream_2d' => 'Gelandangan – Sangkur',
                'nature_code' => 'Telor di semak – Pohon Meranti – Ular – Ahli Nujum',
            ],
        ];

        $i = 0;
        foreach ($dreams as $dream) {
            Dreambook::create([
                'dreambook' => $dream['dreambook'],
                'dream_2d' => $dream['dream_2d'],
                'nature_code' => $dream['nature_code'],
                'image' => "/storage/dreambook/" . $i . ".webp",
            ]);
            $i += 1;
        }
    }
}
