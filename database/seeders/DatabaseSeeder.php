<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\News;
use App\Models\Education;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Shandez Darlene',
            'email' => 'shandezdarlene2014@gmail.com',
            'password' => bcrypt('12345'),
            'nik' => '1234567890123456',
            'address' => 'Jalan Ratu',
            'phoneNumber' => '081271908221'
        ]);

        User::create([
            'name' => 'Alvina Krisendi',
            'email' => 'alvinakrisendi4@gmail.com',
            'password' => bcrypt('123456'),
            'nik' => '1234567890123457',
            'address' => 'Jalan Pakuan',
            'phoneNumber' => '081271908222'
        ]);

        News::create([
            'heading' => 'MSE dan istrinya disekap dalam pantry dan kamar kos, lalu oleh para tersangka, mereka dikunci dari luar gara-gara tak memberikan keuntungan bisnis.',
            'newsTitle' => 'Kronologi Pasutri di Sleman Disekap di Kos Selama 2 Bulan, Sang Istri Juga Jadi Korban Kekerasan Seksual',
            'newsContent' => 'MSE dan istrinya menjadi korban penyekapan di selama dua bulan di wilayah Sleman, DI Yogyakarta.</br></br>
            Penyekapan terjadi antara Oktober 2023 hingga Desember 2023. Tak hanya disekap, istri korban diduga mengalami kekerasan seksual.</br></br>
            MSE kemudian melaporkan penyekapan yang ia alami bersama istri ke Polda DI Yogyakarta pada 27 Desember 2023.</br></br>
            Polisi yang turun tangan kemudian melakukan penyelidikan dan menetapkan lima tersangka. Para tersangka adalah MSH (43) dan istrinya, MM (41) serta AS (48), yang tercatat sebagai warga Kabupaten Sleman. Serta YR (36) dan AS (48), warga Kota Yogyakarta. </br></br>
            Berawal dari bisnis jual beli mobil</br></br>
            Kasus tersebut berawal saat korban MSE dan tersangka MSH bisnis jual beli mobil pada Juni 2023. Dalam perjanjian kerja sama, MSH memberi investasi sebesar Rp 1,2 miliar.</br></br>
            Namun sejak Agustus 2023, korban tak memberikan keuntungan terkait bisnis tersebut ke MSH. Lalu MSH meminta tersangka YR dan tersangka AS mendatangi rumah MSE pada Kamis, 12 Oktober 2023. Keduanya kemudian mengambil paksa barang berharga milik korban. Rumah MSE berada di daerah Purwomartani, Kapanewon Kalasan, Kabupaten Sleman.</br></br>
            Barang yang diambil antara lain sertifikat, perhiasan, kartu keluarga, kartu tanda penduduk dan kunci mobil. Barang-barang itu digunakan sebagai jaminan pelunasan utang bisnis. MSE pun menyerahkan barang pribadinya. Lalu ia dan sang istri dibawa ke sebuah kos di daerah Condongcatur, Kapanewon Depok, Kabupaten Sleman. Keduanya kemudian disekap dalam ruangan yakni pantry dan kamar kos. Setelah keduanya masuk ruangan, pintu dikunci dari luar.</br></br>
            Hal tersebut dijelaskan Dirreskrimum Polda DIY Kombes Pol FX Endriadi dalam jumpa pers di Mapolda DIY, Rabu (7/02/2024).</br></br>
            Saat disekap, MSE dan istrinya kerap mendapatkan kekerasan. Bahkan istri MSE diduga mengalami kekerasan seksual.</br></br>
            "Selama penyekapan korban dan istri mengalami kekerasan fisik. Mereka melaporkan ada kekerasan fisik yang diduga dilakukan para tersangka. Korban juga melaporkan bahwa yang bersangkutan mengalami kekerasan seksual juga," tuturnya.</br></br>
            Penyekapan dilakukan sejak 12 Oktober 2023 hingga 10 Desember 2023.</br></br>
            Kasus tersebut terungkap setelah polisi menerima laporan orang hilang dan mendatangi lokasi penyekapan.</br></br>
            "Di wilayah lain ada laporan hilangnya orang. Para pelaku didatangi oleh petugas dari wilayah lain dan (korban yang disekap) dibebaskan," ungkapnya.</br></br>
            Selain menangkap lima pelaku, polisi juga mengamankan barang bukti antara lain 6 sertifikat hak milik, 2 sarung tinju hingga sepeda motor. Para tersangka dijerat dengan pasal berbeda mulai dari Pasal 333 KUHP tentang tindak pidana penyekapan dengan ancaman hukuman 8 tahun penjara. Kemudian Pasal 368 tentang perampasan dengan ancaman hukuman 9 tahun penjara.</br></br>
            Selain itu juga Pasal 351 KUHP tentang penganiayaan dengan ancaman hukuman 2 tahun 8 bulan penjara. Pasal 6 UU nomor 12 tahun 2022 tentang tindak pidana kekerasan seksual dengan ancaman 12 tahun penjara.</br></br>
            "Kasusnya sekarang sudah naik ke tahap penyidikan," jelas Endriadi,</br></br>
            SUMBER: KOMPAS.com (Penulis: Wijaya Kusuma | Editor: Dita Angga Rusiana)',
            "gambar" => "berita1.jpg"
        ]);

        News::create([
            'heading' => 'Seorang siswi SMP berusia 12 tahun di Tegalsari, Surabaya, jadi korban pemerkosaan oleh bapak, kakak dan dua pamannya sendiri.',
            'newsTitle' => 'Siswi SMP Diperkosa Bapak, Kakak, Paman saat Ibu Sakit, Pelaku Dibekuk',
            'newsContent' => 'Surabaya, CNN Indonesia -- Seorang siswi SMP berusia 12 tahun di Tegalsari, Surabaya, jadi korban pemerkosaan oleh bapak, kakak dan dua pamannya sendiri. Para pelaku mengaku "khilaf".</br></br>
            Empat pelaku itu yakni, ayah korban berinisial PE (43), kakak korban MA (17), serta kedua pamannya, I (43) dan JW (49).</br></br>
            
            Bibi korban berisinial SN (41) bercerita, korban ini tinggal bersama ayah, ibu, kakak, dan dua pamannya di sebuah rumah dua lantai di kecamatan Tegalsari.</br></br>
            
            Kejadian pelecehan ini sendiri disebut dilakukan keempat pelaku saat ibu korban sedang berobat dan dirawat di rumah sakit karena stroke ringan.</br></br>
            
            "Kamar beda-beda. Ada tiga kamar," kata SN, saat ditemui, Sabtu (20/1).</br></br>
            
            Ketika ibu korban, AR, dirawat di rumah sakit, saat itulah PE dan MA melecehkan korban. Keduanya juga diduga menyetubuhi B di sebuah kamar di lantai dua rumahnya.</br></br>
            
            Sementara, dua pamannya, I dan JW, melecehkan B beberapa kali sambil bercanda.</br></br>
            
            "Hewan pun enggak akan tega, kalau seperti itu kan lebih rendah dari binatang," ucap SN, marah.</br></br>
            
            Perbuatan bejat empat orang itu baru terbongkar saat korban mengadu ke ibunya, sepulang dari rumah sakit. Mereka pun akhirnya melapor ke polisi.</br></br>
            
            Karena kondisi korban yang masih ketakutan bila bertemu para pelaku, akhirnya ibu dan korban mengungsi sementara ke rusun neneknya di kawasan Kenjeran, Surabaya.</br></br>
            
            "Saya tahu pas ibunya lapor ke polisi. Terus langsung kebongkar. Kamis itu ibunya sakit, Jumat langsung di jemput (korban) nginep tempat kerabatnya di Rusunawa," ucapnya.</br></br>
            
            Sebelum lapor polisi, SN mengatakan keluarga besarnya sebenarnya sempat "menyidangkan" empat pelaku itu.</br></br>
            
            Mereka mencecar ayah, kakak dan dua paman korban. Tapi pengakuan keempatnya, perbuatan bejat itu mereka lakukan karena khilaf.</br></br>
            
            "Kami tekan seperti apapun jawabannya tetap satu; khilaf," cetus dia.</br></br>
            
            SN mengatakan peristiwa ini jelas menjadi aib bagi keluarga besarnya. Ia menyesalkan dan malu. Dia pun meminta empat orang itu untuk mempertanggungjawabkan perbuatannya.</br></br>
            
            "Keluarga pasti malu kan aib keluarga saya, empat laki semua. Itu masih ada sambung darah, saya sesalkan." pungkasnya.</br></br>
            
            Kepala Satuan Reserse Kriminal Polrestabes Surabaya AKBP Hendro Sukmono mengaku pihaknya sudah mendapatkan laporan terkait kasus itu. Para pelaku pun sudah ditangkap dan ditetapkan tersangka.</br></br>
            
            
            "Sudah. Sudah ditangkap kok, yang juga sama bapaknya," kata dia, saat dikonfirmasi.</br></br>
            
            Polrestabes Surabaya nantinya berencana akan melakukan rilis ungkap kasus ini, Senin (22/1) depan.</br></br>',
            "gambar" => "berita2.jpeg"
        ]);

        News::create([
            'heading' => 'Pemkab Buleleng berencana memanggil seluruh kepala sekolah (kepsek) karena korban dan pelaku kekerasan seksual didominasi anak di bawah umur atau',
            'newsTitle' => 'Marak Kasus Kekerasan Seksual Libatkan Pelajar, Pemkab Segera Penggil Kepsek',
            'newsContent' => 'Buleleng - Pemerintah Kabupaten (Pemkab) Buleleng menyoroti maraknya kasus kekerasan seksual di Bumi Panji Sakti. Pemkab Buleleng berencana memanggil seluruh kepala sekolah (kepsek) karena korban dan pelaku kekerasan seksual didominasi anak di bawah umur atau pelajar.
            Penjabat (Pj) Bupati Buleleng Ketut Lihadnyana mengaku miris dengan keadaan tersebut. Para kepsek segera dipanggil agar sekolah juga ikut mengawasi kegiatan siswa supaya tidak terjerumus pada hal-hal negatif.</br></br>
            
            "Ya justru itu yang kita ajak bahas, memang tiap hari ngidaang (bisa) ngawasi yang begitu-begitu? Kan orang tuanya kerja. Justru ini sekolah kita juga kasih beban (pengawasan)," kata Lihadnyana, Selasa (6/2/2024).</br></br>
            
            Lihadnyana mengatakan akan membahas fenomena tersebut dengan pihak sekolah. Dia menginginkan agar sekolah memperbanyak kegiatan positif untuk siswa di luar jam belajar. Salah satunya dengan memperbanyak kegiatan ekstrakulikuler.</br></br>
            
            "Kasih dia kegiatan ekstrakulikuler sehingga waktunya dia itu habis untuk hal-hal yang positif. Makanya kita panggil (kepsek) untuk ngajak bagaimana ini, jangan tanggung jawab mereka itu (sekolah) hanya sampai di sana. Mari kita sama-sama menyelamatkan masa depan mereka," katanya.</br></br>
            
            Data Unit Perlindungan Perempuan dan Anak (PPA) Satuan Reserse Kriminal (Satreskrim) Polres Buleleng menunjukkan ada sebanyak 6 laporan kasus kekerasan seksual pada awal 2024. Pelaku dan korban didominasi oleh anak di bawah umur dari rentang usia 16 sampai 17 tahun.</br></br>
            
            Kasat Reskrim Polres Buleleng AKP Arung Wiratama mengatakan faktor utama yang menjadi pendorong banyaknya kasus kekerasan seksual itu karena tontonan dewasa di internet. "Kedua karena kurangnya perhatian dari orang tua," tandasnya.',
            "gambar" => "berita3.jpeg"
        ]);

        News::create([
            'heading' => 'Kasus kekerasan perempuan dan anak masih terjadi Di Surabaya. DP3A Surabaya membeber sejumlah faktor penyebab terjadinya kekerasan ini.',
            'newsTitle' => 'DP3A Surabaya Beber Faktor Penyebab Terjadinya Kekerasan Perempuan dan Anak',
            'newsContent' => 'Surabaya - Kasus kekerasan pada perempuan dan anak masih sering terjadi. Salah satu yang mencuat, kasus kekerasan pada anak usia 9 tahun di Surabaya yang dilakukan oleh ibu kandungnya.</br></br>
            Dinas Pemberdayaan Perempuan dan Perlindungan Anak serta Pengendalian Penduduk dan Keluarga Berencana (DP3A-PPKB) Surabaya membeber beberapa penyebab yang bisa memicu terjadinya kasus kekerasan pada perempuan dan anak. Yakni masalah individual, sosial dan hukum.</br></br>
            
            "Jadi memang kekerasan terhadap perempuan dan anak ini masalah sosial yang kompleks dan multifaktor. Ada beberapa faktor, di antaranya individual, sosial dan hukum," kata Kabid Perlindungan Perempuan dan Anak (PPA) DP3A-PPKB Surabaya, Thussy Apriliyandari, Jumat (26/1/2024).</br></br>
            
            Thussy menjelaskan, untuk faktor individual, bisa disebabkan karena lingkungan keluarga. Banyak pelaku dan korban kekerasan, tumbuh dan berkembang di lingkungan keluarga atau masyarakat yang tidak harmonis.</br></br>
            
            "Di mana (pelaku) menganggap kekerasan ini hal yang wajar. Tidak perlu dilaporkan, tidak perlu ditindaklanjuti, dan mereka itu tidak sadar, bahwa apa yang mereka lakukan salah dan melanggar Hak Asasi Manusia (HAM)," jelasnya.</br></br>
            
            Lalu, tidak adanya kesadaran pelaku akan tindakan kekerasan. Sebab, banyak pelaku kekerasan yang tak menyadari bahwa tindakan yang dilakukannya dapat menyakiti atau merugikan korban.</br></br>
            
            "Apakah dia (korban) anak kandung sendiri, atau siapapun itu dalam lingkungan keluarga. Mereka itu merasa berhak melakukan kekerasan, karena misalnya (pelaku) orang yang memberi uang untuk korban," ujarnya.</br></br>
            
            Selain kurangnya kesadaran, faktor individual juga dipicu dari pelaku yang memiliki karakter keras, agresif, impulsif, egois dan tidak sabaran. Sementara, faktor lain yang bisa memicu terjadinya kekerasan terhadap perempuan dan anak ialah masalah sosial budaya patriarki.</br></br>
            
            Pada beberapa kasus, menempatkan laki-laki sebagai superior dan perempuan inferior. Kesetaraan gender belum diindahkan dalam kasus seperti ini.</br></br>
            
            "Kedua adalah pengaruh media massa, media sosial dan sebagainya. Gadget itu luar biasa pengaruhnya. Ini dapat berperan dalam memicu terjadinya kekerasan," urainya.</br></br>
            
            Selain faktor individual dan sosial, kurangnya kesadaran terhadap hukum juga memicu terjadinya kasus kekerasan. Padahal, kekerasan terhadap perempuan dan anak telah diatur jelas dalam UU di Indonesia.</br></br>
            
            "Hukum kita di Indonesia sudah ada undang-undang perlindungan dan sebagainya. Tapi yang tidak paham itu masyarakatnya atau pelaku. Jadi mereka tidak paham apa yang dilakukan itu ada konsekuensi hukum," tambahnya.</br></br>
            
            Menurutnya, faktor hukum seorang pelaku melakukan kekerasan juga bisa dipicu karena merasa memiliki korban. Misalnya, korban merupakan anak kandung dari pelaku.</br></br>
            
            Bagaimanapun, lanjut dia, hal terpenting dalam mencegah terjadinya kekerasan terhadap perempuan dan anak adalah lingkungan keluarga. Baik itu orang tua maupun anak, harus kembali memegang teguh ajaran agama masing-masing.</br></br>
            
            "Tidak ada agama yang mengajarkan tentang kekerasan terhadap keluarga, apakah golongan-golongan minoritas yang lemah yaitu perempuan dan anak. Kemudian faktor terbesar lain adalah ekonomi," pungkasnya.',
            "gambar" => "berita4.jpeg"
        ]);

        Education::create([
            'educationTitle' => 'Seri Edukasi Permen PPKS: Pencegahan Kekerasan Seksual di Lingkungan Kampus',
            'educationContent' => 'Permendikbudristek Nomor 30 Tahun 2021 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi merupakan hasil kolaborasi Kemendikbudristek dari tahun 2020 dengan berbagai kelompok sivitas akademika perguruan tinggi, masyarakat sipil, dan kementerian serta lembaga negara terkait lain. </br></br>

            Berkaca dari hasil kolaborasi ini, peraturan ini pun memantik kolaborasi antara mahasiswa, tenaga pendidikan, pendidik, dan pemimpin perguruan tinggi dalam menciptakan budaya akademik yang bebas dari kekerasan seksual dan diskriminasi gender di kampusnya. Di tingkat nasional, Kemendikbudristek siap memberi pendampingan teknis bagi perguruan tinggi membutuhkannya, demi meningkatkan keamanan kampusnya dari kekerasans seksual. </br></br>
            
            Rangkaian video “Edukasi Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi” berikut ini adalah satu langkah awal kementerian kami untuk menjelaskan isi Permendikbudristek Nomor 30 Tahun 2021 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi dengan bahasa dan pendekatan yang lebih mudah dimengerti.',
            'headingEducation' => 'Permendikbudristek Nomor 30 Tahun 2021 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi',
            'gambarEducation' => 'imgEdu1.png',
            'videoEducation' => "edu1.mp4"
        ]);

        Education::create([
            'educationTitle' => 'Stop Kekerasan Seksual',
            'educationContent' => 'Hai #SahabatKarakter tahukah kamu kalau kejadian yang dialami nisa adalah salah satu contoh bentuk kekerasan seksual?Kekerasan seksual merupakan setiap tindakan berupa fisik maupun nonfisik yang dilakukan seseorang atau sekelompok orang yang dapat mengakibatkan penderitaan atau kerugian secara psikis, fisik, dan seksual pada seseorang. </br></br>

            Kekerasan seksual dapat terjadi di mana saja dan dapat menimpa siapa saja. Bila kekerasan seksual terjadi pada dirimu atau orang lain di sekitarmu, kamu harus meminta bantuan kepada orang yang kamu percaya dan melaporkan kepada pihak berwajib. Kamu juga dapat menghubungi Lembaga Sosial Masyarakat sesuai kebutuhanmu.</br></br> 
            
            Mari ciptakan lingkungan bebas kekerasan seksual di lingkungan keluarga, sekolah, dan masyarakat untuk semua. </br></br> 
            
            #CerdasBerkarakter #GerakBersama </br></br>
            #KemdikbudRI',
            'headingEducation' => 'Mari ciptakan lingkungan bebas kekerasan seksual di lingkungan keluarga, sekolah, dan masyarakat untuk semua.',
            'gambarEducation' => 'imgEdu2.png',
            'videoEducation' => "edu2.mp4"
        ]);

        Education::create([
            'educationTitle' => 'Yuk, Tangkal Kekerasan Seksual',
            'educationContent' => 'Video ini untuk edukasi masyarakat khususnya anak-anak dan remaja untuk mencegah dan menghindari terjadinya kekerasan seksual. Bimbingan orangtua sangat diperlukan untuk memberikan penjelasan lebih lanjut.',
            'headingEducation' => 'Video ini untuk edukasi masyarakat khususnya anak-anak dan remaja untuk mencegah dan menghindari terjadinya kekerasan seksual.',
            'gambarEducation' => 'imgEdu3.png',
            'videoEducation' => "edu3.mp4"
        ]);

        Education::create([
            'educationTitle' => 'Cara Melindungi Diri dari Kejahatan Seksual',
            'educationContent' => 'Hi Sahabat, sudahkah kamu tahu tentang cara melindungi diri dari kejahatan seksual? </br></br>

            Melalui video ini YAPPIKA-ActionAid mengajak para siswa di sekolah dasar untuk waspada dan berani melaporkan penyerangan terhadap tubuh. Video ini merupakan kerja sama dengan Penny Appeal untuk mendukung Program Sekolah Aman.</br></br>
            
            Melalui Program Sekolah Aman, YAPPIKA-ActionAid bertujuan menciptakan Sekolah Aman bagi anak-anak berupa:</br></br>
            -Sekolah Aman dari Ancaman Ruang Kelas Roboh</br></br>
            -Sekolah Aman dari Ancaman Kuman</br></br>
            -Sekolah Aman dari Kecelakaan Karena Bencana</br></br>
            -Sekolah Aman dari Ancaman Gizi Buruk</br></br>
            -Sekolah Aman dari Kekerasan dan Pelecehan Seksual</br></br>
            -Sekolah Aman dari Kerentanan Ekonomi</br></br>',
            'headingEducation' => 'Wanita lebih rentan untuk mengalami kekerasan seksual, sehingga perlu tahu kiat-kiat agar bisa menghindarinya. Salah satu langkahnya adalah menghindari situasi yang dapat meningkatkan risiko dari kondisi tersebut.',
            'gambarEducation' => 'imgEdu4.png',
            'videoEducation' => "edu4.mp4"
        ]);
    }
}
