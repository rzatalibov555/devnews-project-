-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 06:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_devnews_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_registered_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_mail`, `a_password`, `a_status`, `a_img`, `a_category`, `a_registered_date`) VALUES
(1, 'Səbuhi', 'sebuhibov@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', 'foto.jpg', 'Admin', ''),
(2, 'Raul', 'raul.akhmerov@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', 'Active', 'raul.jpg', 'Redactor', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Sport'),
(2, 'Technology'),
(3, 'Finance'),
(4, 'Media'),
(5, 'Lifestyle');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_file_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_creator_id` int(11) NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_updater_id` int(11) NOT NULL,
  `n_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_description`, `n_date`, `n_category`, `n_status`, `n_img`, `n_file_ext`, `n_creator_id`, `n_create_date`, `n_updater_id`, `n_update_date`) VALUES
(22, 'adsfbgf', 'sddsvfbdgvhnbm', '2022-10-21', 'Sport', 'Deactive', '07580cb3157add5b44d1454b8f2bd216.jpg', '.jpg', 2, '2022-10-21 20:38:49', 2, '2022-10-22 12:53:59'),
(23, 'Yaponiya millisinin sabiq futbolçusu 32 yaşında vəfat edib', 'Yaponiya millisinin sabiq futbolçusu Masato Kudo vəfat edib.\r\n\r\n\"Report\" \"Reuters\"ə istinadən xəbər verir ki, hücumçu beyin əməliyyatından sonra 32 yaşında dünyasını dəyişib.\r\n\r\nForvard oktyabrın 3-də xəstəxanaya yerləşdirilmişdi.\r\n\r\nQeyd edək ki, Masato Kudo yığmanın heyətində dörd oyun keçirib və iki qol vurub. Hücumçu ölkəsində \"Kasiva Reysol\"dakı çıxışına görə tanınıb', '2022-10-22', 'Sport', 'Active', 'bad9af7eaab33031b94d4ab06c581e5b.png', '.png', 1, '2022-10-22 12:57:21', 0, ''),
(24, 'Canni De Byazi: \"Başqa yığmadan və iki İtaliya klubundan təklif almışdım\"', '66 yaşlı mütəxəssis 2024-cü il Avropa çempionatının seçmə mərhələsi ərəfəsində komandada işləməyə davam etmək istədiyini bildirib: \"Püşkatmada Albaniya kimi bəxtimiz gətirmədi. Bu, daha əvvəl AVRO-2016-da da başıma gəlmişdi. Albaniyanın baş məşqçisi olduğum dönəm seçmə mərhələdə çətin qrupa düşmüşdük. Lakin final mərhələsinə vəsiqə qazanmışdıq. ', '2022-10-22', 'Sport', 'Active', 'b3037e58462cc1c8892188dc05a11ba7.jpg', '.jpg', 1, '2022-10-22 12:58:13', 0, ''),
(25, 'FIFA prezidenti transfer bazarındakı dəyişiklikləri açıqlayıb', 'İnfantino ali futbol qurumunun informasiya mərkəzinin qaydaları təsdiqlədiyini bildirib: \"Köçürmələrlə bağlı bütün ödənişlər mərkəzdən keçəcək. İlk olaraq futbolçuları yetişdirən klublara təzminatın ödənilməsindən başlayacağıq. Bəzi kiçik klublar həvəskardır və pul istəməyə imkanlara yoxdur. Sistemi avtomatlaşdırmaq qərarına gəldik. Bu, kiçik klubların həyatını dəyişəcək. Gəlirin ədalətli bölüşdürülməsini dəstəkləyən sistemə ehtiyac var idi\".', '2022-10-22', 'Sport', 'Active', '47d333fc105b29442df6e9be3f0e9203.png', '.png', 1, '2022-10-22 12:58:59', 0, ''),
(26, 'Şəhid jurnalistlərin xatirəsinə keçirilən turnirdə III turun oyunları baş tutacaq', 'Oktyabrın 23-də şəhid jurnalist Məhərrəm İbrahimov və Sirac AbışoOktyabrın 23-də şəhid jurnalist Məhərrəm İbrahimov və Sirac Abışovun xatirəsinə həvəskar komandalardan ibarət Ənənəvi Futbol Turnirində sonuncu - üçüncü turun oyunları keçiriləcək.vun xatirəsinə həvəskar komandalardan ibarət Ənənəvi Futbol Turnirində sonuncu - üçüncü turun oyunları keçiriləcək.', '2022-10-22', 'Sport', 'Active', 'b0b20f4a25851609c15ea0197490ef27.jpg', '.jpg', 1, '2022-10-22 12:59:57', 0, ''),
(27, 'Ölkə ərazisinə qanunsuz yollarla gətirilən külli miqdarda siqaret aşkar edilib', 'Dövlət Gömrük Komitəsinin (DGK) Bakı və Sumqayıt Baş Gömrük İdarələrinin əməliyyat bölmələrinin əməkdaşları tərəfindən həyata keçirilən tədbirlər nəticəsində ölkə ərazisinə qanunsuz yollarla gətirilən, Azərbaycanın aksiz markası ilə markalanmayan və ölkə ərazisində qanunsuz satışı nəzərdə tutulan külli miqdarda siqaret aşkar edilərək götürülüb.', '2022-10-22', 'Finance', 'Active', '064dec033ae05b9d4c0a8a29b1fee6fc.jpg', '.jpg', 1, '2022-10-22 13:00:49', 0, ''),
(28, 'Pərviz Şahbazov Göyçayda vətəndaşları qəbul edib', 'Nazirliyin müvafiq struktur bölmə rəhbərlərinin iştirakı ilə keçirilmiş qəbulda vətəndaşların müraciətləri dinlənilib, qaldırılan məsələlərin qanunvericiliyin tələblərinə uyğun həll edilməsi üçün lazımi tapşırıqlar verilib. Nazirliyin fəaliyyət dairəsinə aid olmayan müraciətlər isə aidiyyəti qurumlara göndərilməsi üçün qeydə alınıb.', '2022-10-22', 'Finance', 'Active', '221a46aaf0d62866e1476314b62a8d20.jpg', '.jpg', 1, '2022-10-22 13:01:19', 0, ''),
(29, 'Mikayıl Cabbarov: \"Sahibkarlara 66,6 milyon manat faiz subsidiyası verilib\"', 'Bu il oktyabrın 1-nə mövcud kreditlər üzrə faizlərin subsidiyalaşdırılması mexanizmi üzrə kredit qalığı 858,4 milyon manat olan 5 035 müraciət üzrə 70,4 milyon manat faiz subsidiyasının verilməsi barədə qərarlar qəbul edilib.', '2022-10-22', 'Finance', 'Active', '5eaa3ebb036c3252cc7655c9a38cc41c.jpg', '.jpg', 1, '2022-10-22 13:01:47', 0, ''),
(30, 'Xaçmazdakı ixracatçıların problemləri dinlənilib', 'İxracın və İnvestisiyaların Təşviqi Agentliyinin – AZPROMO-nun təşkilatçılığı ilə nar, xurma, fındıq və digər qeyri-neft məhsullarının ixracatçıları olan sahibkarlarla müvafiq strukturlarının rəhbərləri arasında görüş keçirilərək iş adamlarının problemləri dinlənilib.', '2022-10-22', 'Finance', 'Active', '3590f398d6e309fdc81e7da2668a45f7.jpg', '.jpg', 1, '2022-10-22 13:02:12', 0, ''),
(31, '“Instagram”ın fəaliyyətində nasazlıq yaranıb', 'Dünyanın bir sıra ölkələrində “Instagram” sosial şəbəkəsinin fəaliyyətində problemlər müşahidə olunur.\r\n\r\nAnons.az xəbər verir ki, bu barədə məşhur internet resursların işini izləyən “Downdetector” xidmətinin səhifəsində bildirilib.', '2022-10-22', 'Technology', 'Active', 'd859d56b45a935e697fdb332429a3922.jpg', '.jpg', 1, '2022-10-22 13:03:23', 1, '2022-10-22 14:30:49'),
(32, 'Rəqəmsal inkişaf və nəqliyyat naziri özünə müşavir təyin edib', 'Rəqəmsal inkişaf və nəqliyyat naziri Rəşad Nəbiyev özünə müşavir təyin edib.\r\n\r\nAnons.az xəbər verir ki, report-un ədə etdiyi məlumata görə, bu vəzifə Fuad İsmayılova həvalə olunub.', '2022-10-22', 'Technology', 'Active', '92631818b4353504a554183302b8e6e9.jpg', '.jpg', 1, '2022-10-22 13:04:25', 0, ''),
(33, 'Bu il dronların və radioqəbuledicilərin ölkəyə gətirilməsi asanlaşa bilər', 'Anons.az xəbər verir ki, bunu rəqəmsal inkişaf və nəqliyyat nazirinin müavini Rövşən Rüstəmov Bakıda keçirilən \"Azərbaycanda rəqəmsal inkişaf və nəqliyyat sahəsi üzrə prioritetlər\" mövzusunda seminarda bildirib.', '2022-10-22', 'Technology', 'Active', 'f516e3523a16596683a50ca408c612e6.jpg', '.jpg', 1, '2022-10-22 13:05:18', 0, ''),
(34, 'Azərbaycanda bu avtomobillərin qiyməti UCUZLAŞDI', 'Mərkəzin apardığı monitorinqlərə əsasən, yanvarın ayının ilk 20 günündə bir sıra sektorlarda qiymət artımları davam edib. Belə ki, avtomobil bazarında ili nisbətən köhnə olan avtomobillərin qiyməti 8 faizə yaxın bahalaşıb. Bunlar daha çox istehsal ili 7 ildən çox olan, amma 12 ildən az olan avtombillərə aiddir.', '2022-10-22', 'Technology', 'Active', '1cdbad68eeb03cbf2eb36dd8874c2858.jpg', '.jpg', 1, '2022-10-22 13:06:21', 0, ''),
(35, 'AMEA-ya yeni mətbuat katibi təyin olunub', 'Azərbaycan Milli Elmlər Akademiyasının (AMEA) Rəyasət Heyətinə yeni mətbuat katibi təyin olunub.\r\n\r\nAnons.az xəbər verir ki, bununla bağlı Rəyasət Heyətinin iclasında qərar verilib.\r\n\r\nİclasda AMEA Rəyasət Heyəti aparatının ştat strukturunda qismən dəyişiklik edilib.\r\n\r\nRəyasət Heyətinin qərarı ilə Azadə Balayeva AMEA Rəyasət Heyətinin Mətbuat xidmətinin rəhbəri vəzifəsinə təyin olunub.', '2022-10-22', 'Media', 'Active', 'fcd81dc9e68ddc7849e43d63b000cf19.jpg', '.jpg', 1, '2022-10-22 13:09:13', 0, ''),
(36, 'Milli silahlı qüvvələrin formalaşması prosesinin mühüm mərhələləri', '1918-ci ilin 28 mayında yaranmış Azərbaycan Demokratik Respublikası cəmi 23 ay yaşamasına baxmayaraq, ölkədə çox böyük işlər görmüşdür. Bu işlərin biri də ordu quruculuğu sahəsində görülən tədbirlərdir. Azərbaycan Demokratik Respublikası hökumətinin qərarı ilə 1918-ci il iyunun 26-da ilk hərbi hissə - əlahiddə korpus yarandı. Bu qərar Şərqin müsəlman aləmində ilk demokratik hökumətin öz ordusunu yaratmasına hüquqi əsas verdi. Bunun ardınca ölkədə hərbi mükəlləfiyyət – orduya çağırış haqqında hökumət tərəfindən fərman verildi. Az vaxt ərzində Azərbaycan milli ordu quruculuğunda əsaslı nəticələr əldə olundu. Azərbaycan Xalq Cümhuriyyəti  süqut etdikdən sonra bolşevik hökuməti Milli Ordunu ləğv etdi. Onun rəhbərlərinin əksəriyyəti Nargin adasına aparılıb güllələndi.', '2022-10-22', 'Media', 'Active', '007266db9de642942a70c9f0f04e4928.jpg', '.jpg', 1, '2022-10-22 13:10:09', 0, ''),
(37, 'Roza Zərgərliyə vəzifə verildi', 'Müğənni Roza Zərgərliyə yeni fəaliyyətə başlayacaq \"Kanal S\"də vəzifə verilib.\r\n\r\nAnons.az xəbər verir ki, sənətçi telekanalın baş prodüseri vəzifəsini icra edəcək. Sözügedən kanal gələn ay yayıma başlayacaq.\r\n\r\nQeyd edək ki, Roza Zərgərli 8 ildir televiziyada fəaliyyət göstərir. O, \"Bakı vaxtı ilə\" proqramının aparıcısı və müəllifi olub. Hazırda ARB TV-də yayımlanan \"Tam vaxtıdır\" verilişinin həm aparıcısı, həm də layihə rəhbəridir.', '2022-10-22', 'Media', 'Active', 'ffdb4137c92e3c217ff7022dc9275500.jpg', '.jpg', 1, '2022-10-22 13:11:29', 0, ''),
(38, 'Bu ilin sonuna qədər Qarabağ tam televiziya yayımı ilə əhatə olunacaq', '“Azərbaycanın işğaldan azad edilmiş ərazilərinin 72%-də 2G, 40%-də 3G, 50%-də isə 4G şəbəkəsi var. Qarabağda genişzolaqlı internet şəbəkəsi yaratmaq üçün 1 400 km-lik fiberoptik kabelin çəkilməsinə start verilib. Biz artıq televiziyalarda rəqəmsal yayıma keçmişik. Radiolarda isə 2026-cı ilə qədər tam rəqəmsallaşmaya nail olmağı düşünürük”, - deyə o, əlavə edib.', '2022-10-22', 'Media', 'Active', '58318deb1a02a0f6941a93ab2f195160.jpg', '.jpg', 1, '2022-10-22 13:12:15', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
