-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 04:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kta`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'zinmyo', 'zm@gmail.com', '36Ward/6000lakhs', 'I want to know details about 2 storey house 40x60, 36Ward, NorthDagon.', '2023-05-03 09:01:01', '2023-05-03 09:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_banners`
--

CREATE TABLE `feature_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `card_title_1` varchar(255) NOT NULL,
  `card_title_2` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `header_text` longtext NOT NULL,
  `body_text_1` varchar(255) NOT NULL,
  `body_text_2` varchar(255) NOT NULL,
  `body_text_3` varchar(255) NOT NULL,
  `body_text_4` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `master_bedroom` int(11) NOT NULL,
  `double_bedroom` int(11) NOT NULL,
  `single_bedroom` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_banners`
--

INSERT INTO `feature_banners` (`id`, `location_id`, `card_title_1`, `card_title_2`, `post_title`, `header_text`, `body_text_1`, `body_text_2`, `body_text_3`, `body_text_4`, `price`, `dimension`, `master_bedroom`, `double_bedroom`, `single_bedroom`, `baths`, `type`, `image_1`, `image_2`, `image_3`, `image_4`, `created_at`, `updated_at`) VALUES
(1, 5, 'မရမ်းကုန်း', 'ကမ္ဘာအေးလမ်းသွယ် လုံးချင်းတိုက်', 'မရမ်းကုန်းမြို့နယ်၊ ကမ္ဘာအေးလမ်းသွယ်ရှိ လုံးချင်းတိုက်ရောင်းမည်။', 'မရမ်းကုန်းမြို့နယ်၊ ကမ္ဘာအေးလမ်းသွယ်မှာ တည်ရှိပြီး ပတ်ဝန်းကျင် တည်ငြိမ်တိတ်ဆိတ်အေးချမ်းပါသည်ခင်ဗျာ။ မြေအကျယ်အဝန်းက 15290 sq-ft ဖြစ်ပါတယ်။ 3 RC လုံးချင်းတိုက်ဖြစ်ပြီး', '6 Master Bedrooms', '2 Living Rooms, 2 Office Rooms', 'Dining Room, Rooftop Balcony, Swimming Pool တို့ ပါဝင်ပါတယ်။', 'စျေးနှုန်းကတော့ သိန်း ၉၈၀၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၉၈၀၀၀', '15290', 5, 1, 1, 5, 'House', '64534bab70006_3RC-Mayangone.jpg', '64534cc591fdb_3RC-Mayangone_2.jpg', '64534cc595343_3RC-Mayangone_1.jpg', '64534b3a36e23_3RC-Mayangone_3.jpg', '2023-05-02 19:38:55', '2023-05-03 23:58:55'),
(2, 1, '၃၈ ရပ်ကွက်', 'မန္တလေးလမ်းမကြီး တည့်ပေါက်', 'နှစ်ထပ်လုံးချင်းတိုက်သစ်ကို သိန်း ၆၇၀၀ ညှိနှိုင်းစျေးဖြင့်ရောင်းပါမည်', 'အရည်အသွေးမြင့်ပစ္စည်းများကိုသာ အသုံးပြု၍ ဆောက်လုပ်ထားသော နှစ်ထပ်လုံးချင်းတိုက်သစ်ကို သိန်း ၆၇၀၀ ညှိနှိုင်းစျေးဖြင့်ရောင်းပါမည်။✅မြောက်ဒဂုံမြို့နယ်၊ ၃၈ ရပ်ကွက်၊ မန္တလေးလမ်းမကြီးကို တည့်ပေါက်သော အတွင်းလမ်းကျယ်ပေါ်မှာပါ ✅အကျယ်အဝန်းက ပေ ၄၀ × ၆၀ ဖြစ်ပြီး ဂရံမြေဖြစ်ပါတယ်။ 𝟮 𝗥𝗖 အမျိုးအစားဖြစ်ပြီး 📌 𝟒 𝐌𝐚𝐬𝐭𝐞𝐫 𝐁𝐞𝐝𝐫𝐨𝐨𝐦𝐬 📌 𝟏 𝐋𝐢𝐯𝐢𝐧𝐠 𝐑𝐨𝐨𝐦📌 𝟏 𝐌𝐚𝐢𝐝 𝐑𝐨𝐨𝐦 📌 𝐁𝐚𝐫 𝐂𝐨𝐮𝐧𝐭𝐞𝐫 📌 𝐃𝐢𝐧𝐢𝐧𝐠 𝐑𝐨𝐨𝐦 📌 𝐊𝐢𝐭𝐜𝐡𝐞𝐧 📌 𝟓 𝐀𝐢𝐫-𝐜𝐨𝐧𝐬 တို့ပါဝင်ပါတယ်။', 'ထို့ပြင် တစ်အိမ်လုံးကို ကျွန်းပါကေးခင်းထားပြီး ကျယ်ဝန်းသော ကားပါကင်လည်း ရှိပါတယ်။', 'တောင်အလှည့်ဖြစ်ပြီး ခန်းဆီးလိုက်ကာများ တပ်ဆင်ထားပါတယ်။', 'အဝင်အထွက်ကောင်းမွန်ပြီး စျေးနီး၊ ကျောင်းနီး နေရာမှာတည်ရှိပါတယ်ခင်ဗျာ။', 'နှစ် ၆၀ ဂရံအမည်ပေါက်ဆီက Special Power ယူထားပါတယ်။', '၆၇၀၀', '40 x 60', 4, 0, 1, 5, 'House', '64560cbb18485_2RC-38.jpg', '64560cbb1a735_2RC-38_1.jpg', '64560cbb1d802_2RC-38_2.jpg', '64560cbb1f87f_2RC-38_3.jpg', '2023-05-02 22:23:41', '2023-05-06 01:45:55'),
(3, 1, '၃၄ ရပ်ကွက်', 'ပင်လုံလမ်းအနီး', 'ပင်လုံအနီး (၃၄)ရပ်ကွက်ရှိ နှစ်ထပ်တိုက်သစ် အရောင်း', 'မြောက်ဒဂုံမြို့နယ်၊ ( ၃၄ ) ရပ်ကွက်၊ ပင်လုံလမ်းမကြီးနှင့်အလွန်နီးသော နေရာမှာ အိမ်ခြံမြေ ရှာနေသော လူကြီးမင်းများအတွက် မြောက်ဒဂုံမြို့နယ်၊ #၃၄သစ်တောရပ်ကွက်၊ #ပင်လုံလမ်းမကြီးအနီးမှာ နှစ်ထပ်တိုက်တစ်လုံး ရောင်းရန်ရှိပါသည်ခင်ဗျာ။ 2 RC အိမ်အမျိုးအစားဖြစ်ပြီး 1 Master Bedroom, 1 Double Bedroom, 2 Single Bedroom, 5 Air-cons တို့ပါဝင်ပါတယ်။', 'မြေအကျယ်အ၀န်းကတော့ ပေ ၅၀ x ၆၀ ပါ။ 2RC အိမ်အမျိုးအစားဖြစ်ပြီး 1 Master Bedroom, 1 Double Bedroom, 2 Single Bedroom, 5 Air-cons တို့ပါ၀င်ပါတယ်။', 'ဘေလီတံတားအနီး၊ မှတ်တိုင်အနီး၊ ဆိတ်ငြိမ်သော နေရာမှာ တည်ရှိပါတယ်။', 'မြေပိုင်ဆိုင်မှုကလည်း ဂရမ်အမည်ပေါက်ဖြစ်လို့ အရှုပ်အရှင်းကင်းပါတယ်။', 'ဈေးနှုန်းကတော့ သိန်း ၆၇၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၆၇၀၀', '50 x 60', 1, 1, 2, 2, 'House', '64560d67a9aef_2RC-34.jpg', '64560d67ac694_2RC-34_1.jpg', '64560d67af933_2RC-34_2.jpg', '64560d67b203d_2RC-34_3.jpg', '2023-05-02 22:27:55', '2023-05-07 01:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `feature_condos`
--

CREATE TABLE `feature_condos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `card_title_1` varchar(255) NOT NULL,
  `card_title_2` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `header_text` longtext NOT NULL,
  `body_text_1` varchar(255) NOT NULL,
  `body_text_2` varchar(255) NOT NULL,
  `body_text_3` varchar(255) NOT NULL,
  `body_text_4` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `master_bedroom` int(11) NOT NULL,
  `double_bedroom` int(11) NOT NULL,
  `single_bedroom` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_condos`
--

INSERT INTO `feature_condos` (`id`, `location_id`, `card_title_1`, `card_title_2`, `post_title`, `header_text`, `body_text_1`, `body_text_2`, `body_text_3`, `body_text_4`, `price`, `dimension`, `master_bedroom`, `double_bedroom`, `single_bedroom`, `baths`, `type`, `image_1`, `image_2`, `image_3`, `image_4`, `created_at`, `updated_at`) VALUES
(1, 6, 'The Central', 'Condo အရောင်း', 'The Central ကွန်ဒိုအခန်းများရောင်းရန်ရှိပါသည်ခင်ဗျာ။', 'ရန်ကုန်မြို့ရဲ့ အချက်အချာကျသော နေရာမှာ တည်ရှိ၍ ခေတ်မီဆန်းပြားပြီး၊ ဒီဇိုင်းအသစ်၊ ပုံစံအသစ်များဖြင့် ဆောက်လုပ်ထားသော ကွန်ဒိုအခန်းများရောင်းရန်ရှိပါသည်ခင်ဗျာ။ Central Condominium နှင့် The Park Terrace Project တွင် ဆောက်လုပ်ထားသော အခန်းများက ဆိုရင်ဖြင့် ကမ္ဘာ့အဆင့်မီ အင်္ဂါရပ်များနှင့် ပြည့်စုံပြီး အရည်အသွေးကောင်းမွန် ခိုင်ခန့်ပါသည်ခင်ဗျာ။Central Condominium သည် ကမ္ဘာအေးဘုရားလမ်းနှင့် ကန်ဘဲ့လမ်းထောင့်မှာ တည်ရှိပြီး အင်းယားကန်ရဲ့ အရှေ့ဘက်မှာ တည်ရှိပါသည်ခင်ဗျာ။', 'လေဝင်လေထွက်အထူးကောင်းမွန်ပြီး အချက်အချာကျသော နေရာမှာ တည်ရှိသောကြောင့် လူနေဖို့အတွက်ပဲဖြစ်ဖြစ် စီးပွားရေးလုပ်ရန်အတွက်ပဲဖြစ်ဖြစ် အထူးသင့်တော်သော နေရာတစ်ခုလည်း ဖြစ်ပါတယ်။', 'အခန်းအကျယ်အဝန်းတွေကတော့ 870 sq-ft ကနေ 1807 sq-ft ထိကျယ်ဝန်းပြီး one bedroom, two bedrooms, three bedrooms စသည်ဖြင့် အခန်းအမျိုးအစားအမျိုးမျိုးပါဝင်ပါသည်ခင်ဗျာ', 'ရင်းနှီးမြှုပ်နှံချင်သော လူကြီးမင်းများအတွက်လည်း Developer Payment စနစ်ဖြင့် အတိုးမဲ့ အရစ်ကျဝယ်ယူလို့ရပါပြီခင်ဗျာ။', 'ငွေပေးချေမှုပေါ်မူတည်ပြီး စျေးလျှော့ပေးသွားပါမည်ခင်ဗျာ။ ဒါ့ပြင် စီးပွားရေးလုပ်လိုသော လူကြီးမင်းများအတွက်လည်း', '၆၀၀၀', '870', 1, 1, 2, 2, 'Condo', '645387407309a_central.jpg', '64538740742a4_central_1.jpg', '6453874075c20_central_2.jpg', '645387407711a_central_3.jpg', '2023-05-02 22:50:55', '2023-05-04 03:52:57'),
(2, 3, 'ပေါ်ဆန်းမွှေးကွန်ဒို', 'အခန်းကျယ်ရောင်းမည်', 'ပေါ်ဆန်းမွှေးကွန်ဒိုအခန်းကျယ်ရောင်းမည်', '📌 ပေါ်ဆန်းမွှေးကွန်ဒို\r\n📌 ၄ လွှာ\r\n📌 ၁၄၆၀ စတုရန်းပေ\r\n📌 1 Master Bedroom\r\n📌 2 Single Room\r\n📌 Price - 2600 သိန်း\r\nအခန်း Condition က မပြင်ဆင်ရသေးပါ ( နမူနာပုံလေးတွေ တင်ထားတာပါ ) ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ စျေးညှိနှိုင်းနိုင်ပါသည်ခင်ဗျာ။', '60% Down payment , 30% (၁)လအတွင်းသွင်းရပါမယ်။', '10% အခန်းပြင်ဆင်လွှဲပြောင်းအပ်နှံပြီး။', 'Payment -  Cash Only ပိုကြိုက်ပါတယ်ခင်ဗျ။ Cash များများနဲ့ Banking အနည်းငယ်လဲရပါတယ်။', 'Bank Loan နဲ့ကတော့ တေ့တေ့ဆိုင်ဆိုင် ဈေးညှိနဲ့အခါကျ ကျွန်တော်တို့ BOD တွေကို ပြောကြည့်ရင် လက်ခံမယ်ထင်ပါတယ်။', '၂၆၀၀', '1460', 1, 0, 2, 2, 'Mini-Condo', '64534568f05fd_PawSanHmweCondo.jpg', '645345699d079_PawSanHmweCondo_1.jpg', '645345699dcdd_PawSanHmweCondo_2.jpg', '645345699e7f6_PawSanHmweCondo_3.jpg', '2023-05-03 23:10:57', '2023-05-04 06:28:02'),
(3, 7, 'မေအင်းယားကွန်ဒို', 'ငှားမည်', 'မေအင်းယားကွန်ဒိုငှားမည်', 'ငှားရမ်းခ - တစ်လ ဒေါ်လာတစ်ထောင် ( ညှိနှိုင်း ) 📌 အင်းယားကန်နား 📌 အင်းယားရိပ်သာ လမ်း📌 မေအင်းယား ကွန်ဒို', '🔷 1 master bedroom 🔷 1 common bedroom 🔷 750 Sq-Ft 🔷 Hi Floor', '🔷 Fully furnished  🔷 1 Car parking 🔷 back up generator', '🔷 2 elevators 🔷 Rooftop swimming pool 🔷 Gym', '➡️ rental  price:  $1,000 ( negotiable )', '၂၉', '750', 1, 0, 1, 2, 'Condo', '6456226532dbc_MayInyaCondo.jpg', '645622657d6cd_MayInyaCondo_1.jpg', '645622657dbe0_MayInyaCondo_2.jpg', '645622657e0ae_MayInyaCondo_3.jpg', '2023-05-06 03:18:21', '2023-05-07 01:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `feature_properties`
--

CREATE TABLE `feature_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `card_title_1` varchar(255) NOT NULL,
  `card_title_2` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `header_text` longtext NOT NULL,
  `body_text_1` varchar(255) NOT NULL,
  `body_text_2` varchar(255) NOT NULL,
  `body_text_3` varchar(255) NOT NULL,
  `body_text_4` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `master_bedroom` int(11) NOT NULL,
  `double_bedroom` int(11) NOT NULL,
  `single_bedroom` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_properties`
--

INSERT INTO `feature_properties` (`id`, `location_id`, `card_title_1`, `card_title_2`, `post_title`, `header_text`, `body_text_1`, `body_text_2`, `body_text_3`, `body_text_4`, `price`, `dimension`, `master_bedroom`, `double_bedroom`, `single_bedroom`, `baths`, `type`, `image_1`, `image_2`, `image_3`, `image_4`, `created_at`, `updated_at`) VALUES
(1, 1, '၃၄ ရပ်ကွက်', 'ပင်လုံလမ်းအနီး', 'ပင်လုံအနီး (၃၄)ရပ်ကွက်ရှိ နှစ်ထပ်တိုက်သစ် အရောင်း', 'မြောက်ဒဂုံမြို့နယ်၊ ( ၃၄ ) ရပ်ကွက်၊ ပင်လုံလမ်းမကြီးနှင့်အလွန်နီးသော နေရာမှာ အိမ်ခြံမြေ ရှာနေသော လူကြီးမင်းများအတွက် မြောက်ဒဂုံမြို့နယ်၊ #၃၄သစ်တောရပ်ကွက်၊ #ပင်လုံလမ်းမကြီးအနီးမှာ နှစ်ထပ်တိုက်တစ်လုံး ရောင်းရန်ရှိပါသည်ခင်ဗျာ။ 2 RC အိမ်အမျိုးအစားဖြစ်ပြီး 1 Master Bedroom, 1 Double Bedroom, 2 Single Bedroom, 5 Air-cons တို့ပါဝင်ပါတယ်။', 'မြေအကျယ်အ၀န်းကတော့ ပေ ၅၀ x ၆၀ ပါ။', 'ဘေလီတံတားအနီး၊ မှတ်တိုင်အနီး၊ ဆိတ်ငြိမ်သော နေရာမှာ တည်ရှိပါတယ်။', 'မြေပိုင်ဆိုင်မှုကလည်း ဂရမ်အမည်ပေါက်ဖြစ်လို့ အရှုပ်အရှင်းကင်းပါတယ်။', 'ဈေးနှုန်းကတော့ သိန်း ၆၇၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၆၇၀၀', '50 x 60', 1, 1, 2, 2, 'House', '6453908aad915_2RC-34.jpg', '6453908aaf840_2RC-34_1.jpg', '6453908ab1cbf_2RC-34_2.jpg', '6453908ab5890_2RC-34_3.jpg', '2023-05-02 22:38:02', '2023-05-04 04:31:30'),
(2, 1, '၄၄ ရပ်ကွက်', 'မင်းရဲကျော်စွာလမ်းမကြီးပေါ်', 'မြောက်ဒဂုံမြို့နယ်၊ နေရာကောင်း၊ တိုက်သစ်ကောင်းရောင်းမည် 🏠', '📌 မြောက်ဒဂုံမြို့နယ်၊ ၄၄ ရပ်ကွက်၊ မင်းရဲကျော်စွာလမ်းမကြီးပေါ်မှာပါ။ ♦️ 2 . 5 RC လုံးချင်းတိုက်သစ်ဖြစ်ပြီး 4 Master Bedrooms, 2 Single Bedrooms, ဘုရားခန်း, မီးဖိုချောင်, ဧည့်ခန်းကျယ်နှစ်ခန်း စသည်တို့ပါဝင်ပါတယ်ခင်ဗျာ။ ခြံတွင်း ကား ( ၂ ) စီး၊ ခြံပြင်ကား ( ၄ ) စီးခန့် ရပ်နားလို့ရပါတယ်။ ( ၄ ) လမ်းသွားလမ်းမကြီးပေါ်မှာ တည်ရှိပြီး၊ YBS လိုင်းကားလည်း ပြေးပါသည်ခင်ဗျာ။', 'ပတ်ဝန်းကျင်တွင် စျေး၊ ကိုယ်ပိုင်အထက်တန်းကျောင်း၊ လက်ဖက်ရည်ဆိုင်၊ စားသောက်ဆိုင်၊ မှတ်တိုင်၊ ကုန်စုံဆိုင် စသည်တို့တည်ရှိပါသည်ခင်ဗျာ။', 'လမ်းမတန်းဖြစ်သောကြောင့် လူနေထိုင်ရန်အတွက်သာမက စီးပွားရေးလုပ်ရန်အတွက်လည်း အထူးကောင်းမွန်ပါသည်ခင်ဗျာ။', 'ပိုင်ဆိုင်မှုစာရွက်စာတမ်းကတော့ ဂရမ်မြေဖြစ်ပြီး Special Power ယူထားပါသည်ခင်ဗျာ။', 'စျေးနှုန်းကတော့ သိန်း ၉၀၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၉၀၀၀', '40 x 60', 4, 0, 2, 5, 'House', '64539179a1e1c_2RC-44.jpg', '64539179a65ff_2RC-44_3.jpg', '64539179a736b_2RC-44_2.jpg', '64539179a7fb5_2RC-44_1.jpg', '2023-05-04 04:35:29', '2023-05-04 04:35:29'),
(3, 1, '၃၈ ရပ်ကွက်', 'မန္တလေးလမ်းမကြီး တည့်ပေါက်', 'နှစ်ထပ်လုံးချင်းတိုက်သစ်ကို သိန်း ၆၇၀၀ ညှိနှိုင်းစျေးဖြင့်ရောင်းပါမည်', 'အရည်အသွေးမြင့်ပစ္စည်းများကိုသာ အသုံးပြု၍ ဆောက်လုပ်ထားသော နှစ်ထပ်လုံးချင်းတိုက်သစ်ကို သိန်း ၆၇၀၀ ညှိနှိုင်းစျေးဖြင့်ရောင်းပါမည်။✅မြောက်ဒဂုံမြို့နယ်၊ ၃၈ ရပ်ကွက်၊ မန္တလေးလမ်းမကြီးကို တည့်ပေါက်သော အတွင်းလမ်းကျယ်ပေါ်မှာပါ ✅အကျယ်အဝန်းက ပေ ၄၀ × ၆၀ ဖြစ်ပြီး ဂရံမြေဖြစ်ပါတယ်။ 𝟮 𝗥𝗖 အမျိုးအစားဖြစ်ပြီး 📌 𝟒 𝐌𝐚𝐬𝐭𝐞𝐫 𝐁𝐞𝐝𝐫𝐨𝐨𝐦𝐬 📌 𝟏 𝐋𝐢𝐯𝐢𝐧𝐠 𝐑𝐨𝐨𝐦📌 𝟏 𝐌𝐚𝐢𝐝 𝐑𝐨𝐨𝐦 📌 𝐁𝐚𝐫 𝐂𝐨𝐮𝐧𝐭𝐞𝐫 📌 𝐃𝐢𝐧𝐢𝐧𝐠 𝐑𝐨𝐨𝐦 📌 𝐊𝐢𝐭𝐜𝐡𝐞𝐧 📌 𝟓 𝐀𝐢𝐫-𝐜𝐨𝐧𝐬 တို့ပါဝင်ပါတယ်။', 'ထို့ပြင် တစ်အိမ်လုံးကို ကျွန်းပါကေးခင်းထားပြီး ကျယ်ဝန်းသော ကားပါကင်လည်း ရှိပါတယ်။', 'တောင်အလှည့်ဖြစ်ပြီး ခန်းဆီးလိုက်ကာများ တပ်ဆင်ထားပါတယ်။', 'အဝင်အထွက်ကောင်းမွန်ပြီး စျေးနီး၊ ကျောင်းနီး နေရာမှာတည်ရှိပါတယ်ခင်ဗျာ။', 'နှစ် ၆၀ ဂရံအမည်ပေါက်ဆီက Special Power ယူထားပါတယ်။', '၆၇၀၀', '40 x 60', 4, 0, 1, 5, 'House', '64560b15d07cf_2RC-38.jpg', '64560b160003e_2RC-38_1.jpg', '64560b1600dd2_2RC-38_2.jpg', '64560b16019e5_2RC-38_3.jpg', '2023-05-06 01:38:54', '2023-05-06 01:38:54'),
(4, 1, '၃၂ ရပ်ကွက်', 'ဘုရင့်နောင်လမ်းမကြီးတည့်ပေါက်', '( ၃၂ ) ရပ်ကွက်မှာ စျေးတန်နေရာကောင်း နှစ်ထပ်တိုက်သစ်အရောင်း', 'မြောက်ဒဂုံမြို့နယ်အတွင်း အိမ်သစ်အိမ်ကောင်းရှာနေသော လူကြီးမင်းများအတွက် ပင်လုံလမ်းမကြီးမေးတင်ရပ်ကွက်ဖြစ်သော ( ၃၂ ) ရပ်ကွက်မှာ အခိုင်အမာတည်ဆောက်ထားသော စျေးတန်နေရာကောင်း နှစ်ထပ်တိုက်သစ်လေးရောင်းဖို့ရှိပါသည်ခင်ဗျာ။ ✅ ​စာရွက်ပါ မြေအကျယ်အဝန်းကတော့ ပေ ၂၄ × ၆၀ပါ။ ✅ မြေပြင် အကျယ်အဝန်းကတော့ ပေ ၂၄ × ၆၀ ပါ။ ✅ လူမနေရသေးသော 2 RC တိုက်သစ်ဖြစ်ပြီး 3 Master Bedrooms, ဘုရားခန်းသီးသန့်, ကျယ်ဝန်းသော မီးဖိုချောင် တို့ပါရှိပါတယ်။ ✅ တစ်အိမ်လုံးကို ကျွန်းပါကေး အပြည့်ခင်းထားပါတယ်။', 'ဘုရင့်နောင်လမ်းမကြီး ( ခ ) ကျောင်းလမ်းမကြီးကိုတည့်ပေါက်ပြီး ဆရာစံလမ်းမကြီးရဲ့ကျောကပ်လမ်းမှာတည်ရှိပါတယ်။', 'City Mall, တောင်မြောက်လမ်းစုံ၊ သစ္စာတံတား၊ ပင်လုံဆေးရုံ တို့ အနီးအနားမှာတည်ရှိပြီး ဝင်လမ်းထွက်လမ်းအရမ်းကောင်းမွန်ပါတယ်ခင်ဗျာ။', 'မြေပိုင်ဆိုင်မှုကတော့ ဂရမ်မူရင်းပါ။', 'စျေးနှုန်းကတော့ သိန်း ၃၈၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၃၈၀၀', '24 x 60', 3, 0, 1, 4, 'House', '64560bc2d064f_2RC-32.jpg', '64560bc2d63a2_2RC-32_1.jpg', '64560bc2d7570_2RC-32_2.jpg', '64560bc2d825c_2RC-32_3.jpg', '2023-05-06 01:41:46', '2023-05-06 01:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'North Dagon', '2023-05-02 08:19:03', '2023-05-02 08:19:03'),
(2, 'East Dagon', '2023-05-02 08:19:14', '2023-05-02 08:19:14'),
(3, 'South Okkalapa', '2023-05-02 08:19:25', '2023-05-02 08:19:25'),
(4, 'ThinGanGyun', '2023-05-02 08:19:36', '2023-05-03 23:14:49'),
(5, 'MaYanGone', '2023-05-03 23:34:09', '2023-05-03 23:34:09'),
(6, 'Ahlone', '2023-05-04 03:52:28', '2023-05-04 03:52:28'),
(7, 'Yankin', '2023-05-06 03:21:24', '2023-05-07 01:57:54'),
(8, 'Tamwe', '2023-05-07 00:30:39', '2023-05-07 00:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_29_050422_create_sessions_table', 1),
(7, '2023_04_29_052104_create_locations_table', 1),
(8, '2023_04_29_052547_create_properties_table', 1),
(9, '2023_04_29_054956_create_feature_banners_table', 1),
(10, '2023_04_29_055055_create_feature_properties_table', 1),
(11, '2023_04_29_055148_create_feature_condos_table', 1),
(12, '2023_04_29_055249_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `card_title_1` varchar(255) NOT NULL,
  `card_title_2` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `header_text` longtext NOT NULL,
  `body_text_1` varchar(255) NOT NULL,
  `body_text_2` varchar(255) NOT NULL,
  `body_text_3` varchar(255) NOT NULL,
  `body_text_4` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `master_bedroom` int(11) NOT NULL,
  `double_bedroom` int(11) NOT NULL,
  `single_bedroom` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `location_id`, `card_title_1`, `card_title_2`, `post_title`, `header_text`, `body_text_1`, `body_text_2`, `body_text_3`, `body_text_4`, `price`, `dimension`, `master_bedroom`, `double_bedroom`, `single_bedroom`, `baths`, `type`, `image_1`, `image_2`, `image_3`, `image_4`, `created_at`, `updated_at`) VALUES
(1, 5, 'လုံးချင်းတိုက်အရောင်း', 'ကမ္ဘာအေးလမ်းသွယ်', 'မရမ်းကုန်းမြို့နယ်၊ ကမ္ဘာအေးလမ်းသွယ်ရှိ လုံးချင်းတိုက်ရောင်းမည်။', 'မရမ်းကုန်းမြို့နယ်၊ ကမ္ဘာအေးလမ်းသွယ်မှာ တည်ရှိပြီး ပတ်ဝန်းကျင် တည်ငြိမ်တိတ်ဆိတ်အေးချမ်းပါသည်ခင်ဗျာ။ မြေအကျယ်အဝန်းက 15290 sq-ft ဖြစ်ပါတယ်။ 3 RC လုံးချင်းတိုက်ဖြစ်ပြီး', '6 Master Bedrooms', '2 Living Rooms, 2 Office Rooms', 'Dining Room, Rooftop Balcony, Swimming Pool တို့ ပါဝင်ပါတယ်။', 'စျေးနှုန်းကတော့ သိန်း ၉၈၀၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၉၈၀၀၀', '15290', 6, 1, 2, 6, 'House', '64534fbb3ffe5_3RC-Mayangone.jpg', '64534fbb41e86_3RC-Mayangone_2.jpg', '64534fbb4507a_3RC-Mayangone_1.jpg', '64534fbb477ab_3RC-Mayangone_3.jpg', '2023-05-02 08:21:30', '2023-05-05 00:48:10'),
(2, 1, '၄၄ ရပ်ကွက်', 'မင်းရဲကျော်စွာလမ်းမကြီးပေါ်', 'မြောက်ဒဂုံမြို့နယ်၊ နေရာကောင်း၊ တိုက်သစ်ကောင်းရောင်းမည် 🏠', '📌 မြောက်ဒဂုံမြို့နယ်၊ ၄၄ ရပ်ကွက်၊ မင်းရဲကျော်စွာလမ်းမကြီးပေါ်မှာပါ။ ♦️ 2 . 5 RC လုံးချင်းတိုက်သစ်ဖြစ်ပြီး 4 Master Bedrooms, 2 Single Bedrooms, ဘုရားခန်း, မီးဖိုချောင်, ဧည့်ခန်းကျယ်နှစ်ခန်း စသည်တို့ပါဝင်ပါတယ်ခင်ဗျာ။ ခြံတွင်း ကား ( ၂ ) စီး၊ ခြံပြင်ကား ( ၄ ) စီးခန့် ရပ်နားလို့ရပါတယ်။  ( ၄ ) လမ်းသွားလမ်းမကြီးပေါ်မှာ တည်ရှိပြီး၊ YBS လိုင်းကားလည်း ပြေးပါသည်ခင်ဗျာ။', 'ပတ်ဝန်းကျင်တွင် စျေး၊ ကိုယ်ပိုင်အထက်တန်းကျောင်း၊ လက်ဖက်ရည်ဆိုင်၊ စားသောက်ဆိုင်၊ မှတ်တိုင်၊ ကုန်စုံဆိုင် စသည်တို့တည်ရှိပါသည်ခင်ဗျာ။', 'လမ်းမတန်းဖြစ်သောကြောင့် လူနေထိုင်ရန်အတွက်သာမက စီးပွားရေးလုပ်ရန်အတွက်လည်း အထူးကောင်းမွန်ပါသည်ခင်ဗျာ။', 'ပိုင်ဆိုင်မှုစာရွက်စာတမ်းကတော့ ဂရမ်မြေဖြစ်ပြီး Special Power ယူထားပါသည်ခင်ဗျာ။', 'စျေးနှုန်းကတော့ သိန်း ၉၀၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၉၀၀၀', '40 x 60', 4, 0, 2, 5, 'House', '64538ac74417f_2RC-44.jpg', '64538a7e5a9a4_2RC-44_3.jpg', '64538a7e5c8b4_2RC-44_1.jpg', '64538a7e5ddd0_2RC-44_2.jpg', '2023-05-02 08:23:34', '2023-05-04 04:06:55'),
(3, 1, '၃၅ ရပ်ကွက်', 'ပင်လုံလမ်းအနီး', 'ပင်လုံအနီး (၃၅)ရပ်ကွက်ကောင်းက တိုက်ခန်းကျယ်ရောင်းမည်။', 'မြောက်ဒဂုံမြို့နယ်#၃၅ရပ်ကွက်ကောင်းက တိုက်ခန်းကျယ်ရောင်းမည်။ ပင်လုံလမ်းမကြီး အနီးနားမှာ တည်ရှိပါတယ်ခင်ဗျာ။', '၂၁ × ၅၅ ပေ ကျယ်ဝန်းပြီး  ( ၅ ) လွှာ ခေါင်းရင်းခြမ်းဖြစ်ပါတယ်။', 'အိပ်ခန်း ၂ ခန်းဖွဲ့ထားပြီး ရှေ့ဝရံတာက ( ၃ ) ပေ ကျယ်ပါသည်ခင်ဗျာ။', 'ကျောင်းလမ်းစျေး၊ ကျောင်းလမ်းမှတ်တိုင်၊ CB ဘဏ်၊ ကမ္ဘောဇဘဏ် စသည်တို့အနီးနားမှာတည်ရှိပါသည်ခင်ဗျာ။', 'စျေးနှုန်းကတော့ သိန်း ၈၅၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၈၅၀', '21 x 55', 0, 0, 2, 1, 'Apartment', '64538d9f3f58b_35-5F.jpg', '64538d9f41342_35-5F_1.jpg', '64538d9f42f2e_35-5F_2.jpg', '64538d9f452fd_35-5F_3.jpg', '2023-05-02 08:25:17', '2023-05-04 06:26:59'),
(4, 1, '၃၄ ရပ်ကွက်', 'ပင်လုံလမ်းအနီး', 'ပင်လုံအနီး (၃၄)ရပ်ကွက်ရှိ နှစ်ထပ်တိုက်သစ် အရောင်း', 'မြောက်ဒဂုံမြို့နယ်၊ ( ၃၄ ) ရပ်ကွက်၊ ပင်လုံလမ်းမကြီးနှင့်အလွန်နီးသော နေရာမှာ အိမ်ခြံမြေ ရှာနေသော လူကြီးမင်းများအတွက် မြောက်ဒဂုံမြို့နယ်၊ #၃၄သစ်တောရပ်ကွက်၊ #ပင်လုံလမ်းမကြီးအနီးမှာ နှစ်ထပ်တိုက်တစ်လုံး ရောင်းရန်ရှိပါသည်ခင်ဗျာ။  2 RC အိမ်အမျိုးအစားဖြစ်ပြီး 1 Master Bedroom, 1 Double Bedroom, 2 Single Bedroom, 5 Air-cons တို့ပါဝင်ပါတယ်။', 'မြေအကျယ်အဝန်းကတော့ ပေ ၅၀ × ၆၀ ပါ။', 'ဘေလီတံတားအနီး၊ မှတ်တိုင်အနီး၊ ဆိတ်ငြိမ်သော နေရာမှာ တည်ရှိပါတယ်။', 'မြေပိုင်ဆိုင်မှုကလည်း ဂရမ်အမည်ပေါက်ဖြစ်လို့ အရှုပ်အရှင်းကင်းပါတယ်။', 'ဈေးနှုန်းကတော့ သိန်း ၆၇၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၆၇၀၀', '50 x 60', 1, 1, 2, 3, 'House', '64538ffd85b10_2RC-34.jpg', '64538ffd8c224_2RC-34_1.jpg', '64538ffd8eaba_2RC-34_2.jpg', '64538ffd8f403_2RC-34_3.jpg', '2023-05-04 04:29:09', '2023-05-04 04:29:09'),
(5, 2, '၁၅ ရပ်ကွက်', 'ကုန်းဘောင်လမ်းမကြီးပေါ်', 'အရှေ့ဒဂုံမြို့နယ်၊ လမ်းမကြီးပေါ်မှာ  အိမ်ခြံမြေဝယ်ယူဖို့ ရှာနေသော လူကြီးမင်းများအတွက်', 'အရှေ့ဒဂုံမြို့နယ်၊ ( ၁၅ ) ရပ်ကွက်၊ ကုန်းဘောင်လမ်းမကြီးပေါ်မှာ သုံးထပ်တိုက်တစ်လုံး\r\nရောင်းဖို့ရှိပါတယ်ခင်ဗျာ။ ✅ မြေအကျယ်အဝန်းကတော့ ပေ ၄၅ × ၆၀ ဖြစ်ပါတယ်။ ✅ 3 RC တိုက်အမျိုးအစားဖြစ်ပြီး 2 Master Bedrooms, 2 Single Bedrooms, ပါဝါမီတာ စသည်တို့ပါဝင်ပါတယ်။ ✅ ဆိုင်ခန်း၊ ဂိုထောင်နှင့် လုပ်ငန်းလုပ်ရန် အသင့်အနေအထားရှိပါတယ်ခင်ဗျာ။', 'အမှတ် ( ၂ ) လမ်းမကြီး၊ စက်မှုဇုန်၊ Pro ( 1 ) စသည်တို့နှင့်နီးပါတယ်။', 'လမ်းမကြီးပေါ်ဖြစ်တာကြောင့် စီးပွားရေးလုပ်ငန်းရှင်များအတွက် အထူးသင့်တော်သောနေရာတစ်ခုဖြစ်ပါတယ်။', 'မြေပိုင်ဆိုင်မှုအမျိုးအစားကတော့ ပါမစ်မြေပါ။', 'စျေးနှုန်းကတော့ သိန်း ၄၃၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၄၃၀၀', '45 x 60', 2, 0, 2, 3, 'House', '6454b16f84232_3RC-15.jpg', '6454b1700bf6b_3RC-15_1.jpg', '6454b1700c66a_3RC-15_2.jpg', '6454b1700cdae_3RC-15_3.jpg', '2023-05-05 01:04:08', '2023-05-05 01:04:08'),
(6, 1, '၃၈ ရပ်ကွက်', 'မန္တလေးလမ်းမကြီး တည့်ပေါက်', 'နှစ်ထပ်လုံးချင်းတိုက်သစ်ကို သိန်း ၆၇၀၀ ညှိနှိုင်းစျေးဖြင့်ရောင်းပါမည်', 'အရည်အသွေးမြင့်ပစ္စည်းများကိုသာ အသုံးပြု၍ ဆောက်လုပ်ထားသော နှစ်ထပ်လုံးချင်းတိုက်သစ်ကို သိန်း ၆၇၀၀ ညှိနှိုင်းစျေးဖြင့်ရောင်းပါမည်။✅မြောက်ဒဂုံမြို့နယ်၊ ၃၈ ရပ်ကွက်၊ မန္တလေးလမ်းမကြီးကို တည့်ပေါက်သော အတွင်းလမ်းကျယ်ပေါ်မှာပါ ✅အကျယ်အဝန်းက ပေ ၄၀ × ၆၀ ဖြစ်ပြီး ဂရံမြေဖြစ်ပါတယ်။ 𝟮 𝗥𝗖  အမျိုးအစားဖြစ်ပြီး 📌 𝟒 𝐌𝐚𝐬𝐭𝐞𝐫 𝐁𝐞𝐝𝐫𝐨𝐨𝐦𝐬 📌 𝟏 𝐋𝐢𝐯𝐢𝐧𝐠 𝐑𝐨𝐨𝐦📌 𝟏 𝐌𝐚𝐢𝐝 𝐑𝐨𝐨𝐦 📌 𝐁𝐚𝐫 𝐂𝐨𝐮𝐧𝐭𝐞𝐫 📌 𝐃𝐢𝐧𝐢𝐧𝐠 𝐑𝐨𝐨𝐦 📌 𝐊𝐢𝐭𝐜𝐡𝐞𝐧 📌 𝟓 𝐀𝐢𝐫-𝐜𝐨𝐧𝐬 တို့ပါဝင်ပါတယ်။', 'ထို့ပြင် တစ်အိမ်လုံးကို ကျွန်းပါကေးခင်းထားပြီး ကျယ်ဝန်းသော ကားပါကင်လည်း ရှိပါတယ်။', 'တောင်အလှည့်ဖြစ်ပြီး ခန်းဆီးလိုက်ကာများ တပ်ဆင်ထားပါတယ်။', 'အဝင်အထွက်ကောင်းမွန်ပြီး စျေးနီး၊ ကျောင်းနီး နေရာမှာတည်ရှိပါတယ်ခင်ဗျာ။', 'နှစ် ၆၀ ဂရံအမည်ပေါက်ဆီက Special Power ယူထားပါတယ်။', '၆၇၀၀', '40 x 60', 4, 0, 1, 5, 'House', '6454b42b006a8_2RC-38.jpg', '6454b42b04508_2RC-38_1.jpg', '6454b42b051f3_2RC-38_2.jpg', '6454b42b0592d_2RC-38_3.jpg', '2023-05-05 01:15:47', '2023-05-05 01:15:47'),
(7, 1, '၃၂ ရပ်ကွက်', 'ဘုရင့်နောင်လမ်းမကြီးတည့်ပေါက်', '( ၃၂ ) ရပ်ကွက်မှာ စျေးတန်နေရာကောင်း နှစ်ထပ်တိုက်သစ်အရောင်း', 'မြောက်ဒဂုံမြို့နယ်အတွင်း အိမ်သစ်အိမ်ကောင်းရှာနေသော လူကြီးမင်းများအတွက် ပင်လုံလမ်းမကြီးမေးတင်ရပ်ကွက်ဖြစ်သော ( ၃၂ ) ရပ်ကွက်မှာ အခိုင်အမာတည်ဆောက်ထားသော စျေးတန်နေရာကောင်း နှစ်ထပ်တိုက်သစ်လေးရောင်းဖို့ရှိပါသည်ခင်ဗျာ။ ✅  ​စာရွက်ပါ မြေအကျယ်အဝန်းကတော့ ပေ ၂၄ × ၆၀ပါ။ ✅ မြေပြင် အကျယ်အဝန်းကတော့ ပေ ၂၄ × ၆၀ ပါ။ ✅ လူမနေရသေးသော 2 RC တိုက်သစ်ဖြစ်ပြီး 3 Master Bedrooms, ဘုရားခန်းသီးသန့်, ကျယ်ဝန်းသော မီးဖိုချောင် တို့ပါရှိပါတယ်။ ✅ တစ်အိမ်လုံးကို ကျွန်းပါကေး အပြည့်ခင်းထားပါတယ်။', 'ဘုရင့်နောင်လမ်းမကြီး ( ခ ) ကျောင်းလမ်းမကြီးကိုတည့်ပေါက်ပြီး ဆရာစံလမ်းမကြီးရဲ့ကျောကပ်လမ်းမှာတည်ရှိပါတယ်။', 'City Mall, တောင်မြောက်လမ်းစုံ၊ သစ္စာတံတား၊ ပင်လုံဆေးရုံ တို့ အနီးအနားမှာတည်ရှိပြီး ဝင်လမ်းထွက်လမ်းအရမ်းကောင်းမွန်ပါတယ်ခင်ဗျာ။', 'မြေပိုင်ဆိုင်မှုကတော့ ဂရမ်မူရင်းပါ။', 'စျေးနှုန်းကတော့ သိန်း ၃၈၀၀ ညှိနှိုင်းပါခင်ဗျာ။ ပိုင်ရှင်နှင့်တိုက်ရိုက်တွေ့ကာ ဈေးညှိနှိုင်းနိုင်ပါသည် ခင်ဗျာ။', '၃၈၀၀', '24 x 60', 3, 0, 1, 4, 'House', '6454b69a63dc6_2RC-32.jpg', '6454b69a68230_2RC-32_1.jpg', '6454b69a68927_2RC-32_2.jpg', '6454b69a68fc1_2RC-32_3.jpg', '2023-05-05 01:26:10', '2023-05-07 01:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('30jsg3U0sZxgYspB4tfSE517wi1GJPTagKkbhPPQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYnB4MGRKeGd2UnF3YlhwMm9maktQRmRZTWl2c0Y0Z1JCSm10cENzaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1684061174),
('6zGcVm2g2nWjBMKFFabCmBOoiXvWsDJJqUhuZ63O', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOE9QMjlFYWhPRDFHOWtMRFJWR2VNRkVEVlZJQTZkM0ljb01qdkdDOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb250YWN0Ijt9fQ==', 1684042981),
('oLL9QPC42WSOwlVpTT9R9XEB6UFHla8w2cKhloTs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXdaRjZRdVN4RWIzRFN2aEU0UXkwdFZkTmtvaGZZVmRUYkRFdUE2dCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1683786809);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin zin', 'admin@gmail.com', '645231bf96e9d_cv-3.jpg', 'admin', NULL, '$2y$10$Xwyrk7BP7lB3QSCE4fzbPez0hQZFcY5zlelzTxtgzG8V/xzwotkkO', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-02 08:15:33', '2023-05-07 00:29:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feature_banners`
--
ALTER TABLE `feature_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_condos`
--
ALTER TABLE `feature_condos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_properties`
--
ALTER TABLE `feature_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_banners`
--
ALTER TABLE `feature_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_condos`
--
ALTER TABLE `feature_condos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_properties`
--
ALTER TABLE `feature_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
