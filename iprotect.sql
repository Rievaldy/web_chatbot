-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 02:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iprotect`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(2) NOT NULL,
  `name_brand` varchar(25) NOT NULL,
  `desc_brand` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`, `desc_brand`) VALUES
(1, 'Alibaba Cloud', 'Alibaba Cloud provides a comprehensive suite of global cloud computing services to power both our international customers’ online businesses and Alibaba Group’s own e-commerce ecosystem. In January 2017, Alibaba Cloud became the official Cloud Services Partner of the International Olympic Committee.'),
(2, 'Cloud Xtream', 'cloud computing is the latest major evolution in computing. Cloud Computing involves deploying groups of remote servers and software networks. It allows different kinds of data sources be uploaded for real time processing to generate computing results, without the need to store processed data. Cloud Xtream that provides speed, flexibility, and scalability.'),
(3, 'Cyberinc', 'Cyberinc is an innovative cybersecurity company and our technology helps protect enterprises from web-based malware attacks. We are amongst the first to leverage next generation isolation technology to help eliminate any web-malware from entering our customer’s network. Our flagship product, Isla Malware Isolation Platform helps ensure complete web-freedom without any compromise to end-user experience.'),
(4, 'Edgecore Networks', 'Edgecore Networks Corporation is a wholly-owned subsidiary of Accton Technology Corporation, the leading network ODM.  Edgecore Networks delivers wired and wireless networking products and solutions through channel partners and system integrators worldwide for data center, service provider, enterprise, and SMB customers.'),
(5, 'Esri', 'ESRI the global market leader in GIS, helping customers get results since 1969 to help solve some of the world’s most difficult problems. We do so by supporting our users’ important work with a commitment to science, sustainability, community, education, research, and positive change. We build ArcGIS, the world’s most powerful mapping & spatial analytics software.'),
(6, 'Extreme Networks', 'Since 1996, Extreme has been pushing the boundaries of networking technology, driven by a vision of making it simpler and faster as well as more agile and secure. But our higher purpose has always been helping our customers connect beyond the network, strengthening their relationships with those they serve. Today, we call that Customer-Driven Networking.'),
(7, 'Finisar', 'As a technology innovator, Finisar has led the industry in creating and delivering breakthrough optics technology and world class products for three decades. With the broadest product portfolio in the industry, Finisar is a trusted partner to networking equipment manufacturers, data center operators, telecom service providers, consumer electronics and automotive companies.   '),
(8, 'G Element', 'Founded since 2001, G Element has transformed itself from a visualization consultancy firm to an innovative, leading-edge 3D software company focusing on smart buildings and cities. We have made it our mission to continually develop technologies and applications that help building owners and managers achieve unified, high-level situation awareness and management for their smart buildings and cities. '),
(9, 'Hillstone Networks', 'Hillstone Networks provides Enterprise Security and Risk Management solutions which provide visibility, intelligence, and protection to ensure enterprises can comprehensively see, thoroughly understand and rapidly act against cyber-threats. '),
(10, 'IBM', 'IBM is a leading cloud platform and cognitive solutions company. Restlessly reinventing since 1911, we are the largest technology and consulting employer in the world, with more than 380,000 employees serving clients in 170 countries. For more than seven decades, IBM Research has defined the future of information technology with more than 3,000 researchers in 12 labs located across six continents. '),
(11, 'Ignite Net', 'IgniteNet is taking a fresh approach to wireless and wired networks with a focus on simplicity, ease of use and performance. We provide the easiest and lowest cost way for you to grow your network. Whether you\'re setting up an enterprise network in a corporate setting or installing an outdoor wireless broadband network, we have you covered. Behind all of our equipment is the IgniteNet Cloud, bringing you easy, powerful and affordable cloud-managed WiFi.'),
(12, 'Imperva', 'Imperva is an analyst-recognized, cybersecurity leader championing the fight to secure data and applications wherever they reside. We protect and provide a secure foundation for our customers’ businesses. Once deployed, our solutions proactively identify, evaluate, and eliminate current and emerging threats, so you never have to choose between innovating for customers and protecting what matters most.'),
(13, 'Lenovo', 'Lenovo is a technology company with global reach and expertise without boundaries. Our innovation draws upon a world of knowledge, embracing worldwide collaboration to unlock new thinking and the flexibility to help you capitalize on today’s opportunities and whatever tomorrow brings. '),
(14, 'SAS', 'SAS Viya (pronounced Veye-ah) is the latest architecture release from SAS. SAS Viya is your one-stop-shop for all your analytic needs. Think of it as a suite of products that do things like data preparation, data visualization, model building, etc., all running on a very powerful in- memory engine. SAS Viya is accessed securely through the web, making it accessible on any device you are using. Whether you are a programmer (both SAS and open source), a business analyst, a data scientist, or an ex'),
(15, 'Sensormatic by Johnson Co', 'Sensormatic by Johnson Controls, part of Johnson Controls, is a leading provider of analytics-based Loss Prevention, Inventory Intelligence and Traffic Insights. Sensormatic by Johnson Control provides real-time visibility and predictive analytics to help retailers maximize business outcomes and enhance the customer experience in a digitally-driven shopping world. With over 1.5 million data collection devices in the retail marketplace, Sensormatic by Johnson Controls captures 40+ billion shopper'),
(16, 'Varonis', 'Varonis continually collects and analyzes data from your enterprise data stores and perimeter devices. Offering four main products namely Data Security Platform, DatAdvantage, Data Classification Engine, and DatAlert, we can do things like prioritize your riskiest data based on sensitivity, exposure, and access activity by combining 6 core metadata streams that are essential ingredients for data protection. ');

-- --------------------------------------------------------

--
-- Table structure for table `chat_history`
--

CREATE TABLE `chat_history` (
  `id_chat` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `user_input` text NOT NULL,
  `chatbot_response` text NOT NULL,
  `chatbot_status` int(2) NOT NULL,
  `status_desc` varchar(50) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp(),
  `create_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(4) NOT NULL,
  `name_company` varchar(50) NOT NULL,
  `address_company` varchar(150) NOT NULL,
  `email_company` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `name_company`, `address_company`, `email_company`) VALUES
(1111, 'PT. Kaltim Prima Coal', 'Wisma Nusantara, Lt.9. Jl.M.H.Thamrin No.59 Jakarta 10350', 'kaltimprimacoal@gmail.com'),
(1112, 'PT. Badak Natural Gas Liquefaction', 'Jl. Jend. Sudirman No.30, Stalkuda\r\nPO BOX 216 Balikpapan 76114', 'badaknatural@gmail.com'),
(1113, 'PT. International Nickel Indonesia, Tbk', 'Komplek PT. Pupuk Kalimantan Timur, Tbk\r\nBontang 75313', 'internationalnickel@gmail.com'),
(1114, 'PT. Pupuk Kalimantan Timur, Tbk', 'Gedung Umawar\r\nJl. Kapten Pierre Tendean Kav.28\r\nJakarta 12710', 'pupukkalimantantimur@gmial.com'),
(1115, 'PT. Freeport Indonesia', 'Jl. H.R.Rasuna Said Kav. X-7 No.6\r\nPlaza 89 Lantai 12\r\nJakarta 1294', 'freeportindonesia@gmail.com'),
(1116, 'PT. Chevron Pacific', 'Gedung Sarana Jaya Lt. 7\r\nJl. Budi Kemuliaan I No. 1\r\nJakarta Pusat 10110', 'chevronpacific@gmail.com'),
(1117, 'LASMO Oil', '12/F Landmark Centre, Jalan Jend Sudirman Kav 70A, Jakarta', 'lesmooil@gmail.com'),
(1118, 'Shell Indonesia', 'Plaza City View 4th Floor\r\nJalan Kemang Timur No. 22\r\nJakarta 12560, Indonesia', 'shellindonesia@gmail.com'),
(1119, 'Amerada Hess Indonesia Lematang Ltd', 'Suite 113D, 113 Floor, Sentral Senayan 1, Jl Asia Afrika 8, Jakarta 10270', 'ameradahess@gmail.com'),
(1120, 'BP Amoco', 'Summitmas 11, 18th Floor, JI. Jenderal Sudirman Kav.62, Jakarta 12069', 'bpamocco@gmail.com'),
(1121, 'Conoco Indonesia, Inc', 'Ratu Prabu 2\r\nJl. TB.Simatupang Kav. 1B\r\nJakarta 12560', 'conocoindonesia@gmail.com'),
(1122, 'ExxonMobil Oil Indonesia, Inc', 'Wisma GKBI 27th –31st Floor, Jln Jend Sudirman No. 28, Jakarta 10210', 'exxonmobil@gmail.com'),
(1123, 'TotalFinaElf E&P Indonésie', 'Plaza Kuningan, Menara Utara, Jln Rasuna Said Kav C 11-14, Jakarta 12940', 'totalfinaelf@gmail.com'),
(1124, 'Santa Fe International Services, Inc', 'Jalan, Melawai IX/2,P.O. Box 2351,\r\nJakarta Selatan', 'santafeinternational@gmail.com'),
(1125, 'PT. ABB Jasa Indonesia', 'Jl. Jend. Sudirman Kav. 10-11, 22/F\r\nMidplaza 2 Jakatra 10220', 'abbjasaindonesia@gmail.com'),
(1126, 'Chevron Indonesia Company', 'Gedung Sarana Jaya Lt. 7\r\nJl. Budi Kemuliaan I No. 1\r\nJakarta Pusat 10110', 'chevronindonesia@gmail.com'),
(1127, 'PT. ABB ENEGY SISTEMS INDONESIA', 'JL. PLTGU SENGKANG, DESA PATILA, KEC. PAMMANA, KAB. WAJO\r\nPO BOX 28 – SENGKANG 90900', 'abbenergysistems@gmail.com'),
(1128, 'PT. KHI Pipe Industries ', 'Jl. Amerika I-Cilegon, Banten 42435', 'khipipe@gmail.com'),
(1129, 'Bakrie Pipe Industries', 'Jl. Raya Pejuang, Medan Satria Pondok Ungu\r\nKota Bekasi 17131', 'bakriepipe@gmail.com'),
(1130, 'PT. Rahayu Santosa ', 'Jl. Raya Bogor Km 48\r\nNanggewer, Bogor 16192', 'rahayusentosa@gmail.com'),
(1132, 'PT.Bambang Sejahtera', 'jl.Mahakam no 02 Jakarta Utara', 'BambSej@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `intents`
--

CREATE TABLE `intents` (
  `id_tag` int(2) NOT NULL,
  `name_tag` varchar(50) NOT NULL,
  `response` varchar(250) NOT NULL,
  `desc_tag` varchar(50) NOT NULL,
  `context` varchar(50) DEFAULT NULL,
  `permission` varchar(10) DEFAULT NULL,
  `action` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intents`
--

INSERT INTO `intents` (`id_tag`, `name_tag`, `response`, `desc_tag`, `context`, `permission`, `action`) VALUES
(1, 'greetings', 'Hello!, What can i do for you today?', 'greetings', NULL, NULL, NULL),
(2, 'affirm', 'okey, please wait we will progress the data first....', 'affirm', NULL, NULL, NULL),
(3, 'deny', 'oh okey i\'m sory, hope i can help with you with other stuff..', 'deny', NULL, NULL, NULL),
(4, 'goodbye', 'Have a nice day!', 'goodbye', NULL, NULL, NULL),
(5, 'thanks', 'My pleasure :)', 'thanks', NULL, NULL, NULL),
(6, 'stop', 'wish i would be usefull for you next time you need my help :(', 'stop', NULL, NULL, NULL),
(7, 'register_account', 'okey i will help you make an account..', 'register account', NULL, NULL, 'act_register_account'),
(8, 'show_features', 'i can help you on : register your company, make you a user account, check your company product list, check your history maintenance, check your periodic check, request emergency maintenance.', 'show features', NULL, NULL, NULL),
(9, 'show_brand', 'okey i will provide you with our product, please wait ....', 'show brand', 'list brand', NULL, 'act_brand'),
(10, 'show_desc_brand', 'okey i will provide you with detail of the brand, please wait ....', 'descrption product', 'brand', NULL, 'act_desc_brand'),
(11, 'show_product', 'okey i will provide you with our product, please wait ....', 'show product', 'list product', NULL, 'act_product'),
(12, 'show_desc_product', 'okey i will provide you with detail of the product, please wait ....', 'descrption product', 'product', NULL, 'act_desc_product'),
(13, 'interested_product', 'wow great.. are you sure want to request this product ?', 'request product', 'product', 'Member', 'act_request_product'),
(14, 'show_product_company', 'okey i will provide you with your company product, please wait ....', 'show subscribed product', 'list subscribe product', 'Member', 'act_company_product'),
(15, 'request_emergency_maintenance', 'alright chill out sir,let me have more info...', 'requesting emergency maintenance', 'maintenance', 'Member', 'act_request_maintenance'),
(16, 'show_list_history_maintenance', 'okey please wait...', 'show history maintenance', 'list maintenance', 'Member', 'act_history_maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id_user` varchar(10) NOT NULL,
  `id_subcribe_product` int(4) NOT NULL,
  `desc_maintenance` varchar(150) NOT NULL,
  `request_date` date NOT NULL,
  `finish_date` date DEFAULT NULL,
  `severity_level` int(1) NOT NULL,
  `status_code` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id_user`, `id_subcribe_product`, `desc_maintenance`, `request_date`, `finish_date`, `severity_level`, `status_code`) VALUES
('1826457406', 13, 'haaang', '2021-07-19', '2021-07-21', 3, 1),
('1826457406', 13, 'lag', '2021-07-20', '2021-07-22', 2, 1),
('1826457406', 13, 'i got hang', '2021-07-22', NULL, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patterns`
--

CREATE TABLE `patterns` (
  `id_pattern` int(4) NOT NULL,
  `id_tag` int(2) NOT NULL,
  `pattern` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patterns`
--

INSERT INTO `patterns` (`id_pattern`, `id_tag`, `pattern`) VALUES
(1, 1, 'hello'),
(2, 1, 'hey'),
(3, 1, 'good morning'),
(4, 1, 'good afternoon'),
(5, 1, 'good evening'),
(6, 1, 'hey there '),
(7, 1, 'hi'),
(8, 1, 'hallo can you help me ?'),
(9, 1, 'i need your help'),
(10, 1, 'hola'),
(11, 2, 'correct'),
(12, 2, 'yes'),
(13, 2, 'ya'),
(14, 2, 'right'),
(15, 2, 'that\'s correct'),
(16, 2, 'ye'),
(17, 2, 'yes true'),
(18, 2, 'yes right'),
(19, 2, 'yep that\'s right'),
(20, 2, 'yeah'),
(21, 3, 'nope'),
(22, 3, 'no'),
(23, 3, 'not what i wanted'),
(24, 3, 'that\'s not what i wanted'),
(25, 3, 'no thats wrong'),
(26, 3, 'no i don\'t want it'),
(27, 3, 'nah'),
(28, 3, 'thats not right'),
(29, 3, 'wrong'),
(30, 3, 'no this does not work for me'),
(31, 4, 'cya'),
(32, 4, 'see you later'),
(33, 4, 'good bye'),
(34, 4, 'i am leaving'),
(35, 4, 'have a good day'),
(36, 4, 'bye'),
(37, 4, 'see ya'),
(38, 4, 'bye, have a nice day'),
(39, 4, 'I have to go'),
(40, 4, 'Nice chatting to you, bye'),
(41, 5, 'Thanks'),
(42, 5, 'Thank you'),
(43, 5, 'That\'s helpful'),
(44, 5, 'Awesome, thanks'),
(45, 5, 'Thanks for helping me'),
(46, 5, 'great, thanks!'),
(47, 5, 'wonderfull, thank you'),
(48, 5, 'Thanks, I really appreciate it'),
(49, 5, 'Well thanks'),
(50, 5, 'thanks for the information'),
(51, 6, 'ok then you can\'t help me'),
(52, 6, 'that was shit, you\'re not helping'),
(53, 6, 'you can\'t help me with what i need'),
(54, 6, 'i guess you can\'t help me then'),
(55, 6, 'ok i guess you can\'t help me'),
(56, 6, 'that\'s not what i want'),
(57, 6, 'ok, but that doesnt help me'),
(58, 6, 'this conversation is not really helpful'),
(59, 6, 'you cannot help me with what I want'),
(60, 6, 'hm i don\'t think you can do what i want'),
(61, 7, 'i want to register account'),
(62, 7, 'register account'),
(63, 7, 'can u help me make an account ?'),
(64, 7, 'i want to create account'),
(65, 7, 'create account'),
(66, 7, 'can i create account here ?'),
(67, 7, 'can i register account on this chatbot ?'),
(68, 7, 'let me have an account'),
(69, 7, 'okay, help me create an account'),
(70, 7, 'alright, create me an account'),
(71, 8, 'what can this chatbot do ?'),
(72, 8, 'what can i do with this chatbot ?'),
(73, 8, 'what features this bot have ?'),
(74, 8, 'can you tell me what the feature list ?'),
(75, 8, 'what information available on this chatbot ?'),
(76, 8, 'what information do you have ?'),
(77, 8, 'what can i do here ?'),
(78, 8, 'what chatbot is this ?'),
(79, 8, 'show me what can this bot do'),
(80, 8, 'what can u do for me ?'),
(81, 9, 'can you show me your list brand that you have ?'),
(82, 9, 'do you have list brand ?'),
(83, 9, 'can you provide me with list information brand ?'),
(84, 9, 'i want to see list brand'),
(85, 9, 'show me your list brand'),
(86, 9, 'show brand'),
(87, 9, 'show list of brand'),
(88, 9, 'is there any list brand ?'),
(89, 9, 'can i see list brand ?'),
(90, 9, 'could you show me the brand list, please !'),
(91, 10, 'can you provide me the detail for this brand ?'),
(92, 10, 'provide me with more information about this brand'),
(93, 10, 'show me detail about this brand'),
(94, 10, 'could you tell me more about this brand ?'),
(95, 10, 'i need more information about this brand'),
(96, 10, 'what\'s the profile of this brand ?'),
(97, 10, 'why should i use this brand'),
(98, 10, 'how good is this brand ?'),
(99, 10, 'i want to see detail profile of this brand ?'),
(100, 10, 'show me more information about this brand'),
(101, 11, 'can you show me list product that you have ?'),
(102, 11, 'do you have list product ?'),
(103, 11, 'can you provide me with list information product ?'),
(104, 11, 'i want to see list product'),
(105, 11, 'show me your list product'),
(106, 11, 'show product'),
(107, 11, 'show list of product'),
(108, 11, 'is there any list product ?'),
(109, 11, 'can i see list product ?'),
(110, 11, 'could you show me the product list, please !'),
(111, 12, 'can you provide me the detail for this product ?'),
(112, 12, 'show me more information about this product'),
(113, 12, 'provide me with more information about this product'),
(114, 12, 'show me description about this product'),
(115, 12, 'could you tell me more about this product product ?'),
(116, 12, 'i need more information about this product'),
(117, 12, 'what\'s the benefit using this product ?'),
(118, 12, 'why should i use this product'),
(119, 12, 'what\'s impact this product to my company'),
(120, 12, 'how can this product help my company ?'),
(121, 13, 'i\'m interested on this product'),
(122, 13, 'i want my company use this product'),
(123, 13, 'interesting, i want to use this product'),
(124, 13, 'i want to use this product'),
(125, 13, 'interesting, could i request this product ? '),
(126, 13, 'i want to request this product'),
(127, 13, 'how can i request this product'),
(128, 13, 'request this product'),
(129, 13, 'could i request this product ?'),
(130, 13, 'hmm interesting, i want to use this product on my company'),
(131, 14, 'can you show my company product ?'),
(132, 14, 'show my company product'),
(133, 14, 'i need information about my company product'),
(134, 14, 'i want to see my company product'),
(135, 14, 'need information for my company product'),
(136, 14, 'show company product'),
(137, 14, 'info my company product'),
(138, 14, 'company product'),
(139, 14, 'show info for my company product !'),
(140, 14, 'could you provide me information about my company product ?'),
(141, 15, 'help i need maintenance ASAP !'),
(142, 15, 'i want to request maintenance'),
(143, 15, 'request maintenance'),
(144, 15, 'can i request maintenance ?'),
(145, 15, 'i need maintenance ASAP'),
(146, 15, 'i need maintenance'),
(147, 15, 'my application is crash, help i need maintenance !'),
(148, 15, 'i have some issues with my application'),
(149, 15, 'need help, something wrong with my application, i need maintenance'),
(150, 15, 'something went wrong, i need maintenance'),
(151, 16, 'can you show my company history maintenance ?'),
(152, 16, 'show me my company history maintenance'),
(153, 16, 'i need information about my company history maintenance'),
(154, 16, 'i want to see my company history maintenance'),
(155, 16, 'need information for my history maintenance'),
(156, 16, 'show history maintenance'),
(157, 16, 'info my history maintenance'),
(158, 16, 'maintenance history info'),
(159, 16, 'show info for my history maintenance please !'),
(160, 16, 'could you provide me information about my history maintenance ? ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(2) NOT NULL,
  `id_brand` int(2) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `desc_product` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_brand`, `name_product`, `desc_product`) VALUES
(1, 1, 'Infrastructure as a Services', 'IaaS allows consumer to adjust processing capacity by scaling the infrastructure resources vertically and horizontally in an automated manner according to the change of processing demand.'),
(2, 1, 'Database as a Service', 'Automatically and continuously manage and monitor your database health and resources securely. Whenever issues are detected on your database, Alibaba Cloud will allocate and simplify it.'),
(3, 1, 'Apsara Stack', 'Apsara Stack is a full-stack cloud solution created by Alibaba Cloud for medium- and large-size enterprise-class customers. Apsara Stack employs a distributed architecture based on Alibaba Cloud to create an open, unified, and reliable cloud environment for enterprise-class customers.'),
(4, 2, 'Backup and Recovery', 'Together with Alibaba Cloud, XtreAM Cloud provides cloud services in private or public. Using our cloud services, you can plan on-site or off-sitebackups and recovery, storage and retrieval of data, and allow strict security during hours of access to information needed.'),
(5, 2, 'Cloud Disaster Recovery', 'Business demands 24x7 service levels for application availability. It requires the effectiveness of disaster recovery solution to support business continuity plan. Cloud XtreAM and with the technology from Alibaba Cloud provides DR solutions that are suitably fast, flexible, adaptable, and automated based on cloud. Our solutions provide to meet your RTO and PRO business requirement.'),
(6, 2, 'Infrastructure as a Services', 'The Cloud is not a commodity, and virtual servers are not the same wherever you go. You expect any virtual cloud server to have the speed required for deployment, flexible scalability, and pay-as-you-go billing. Cloud XtreAm with Alibaba Cloud technology delivers the solution of virtual servers exceed those expectations. Our virtual server deliver a higher degree of customization, transparancy, and it aslo integrate seamlessly with metal bare servers.'),
(7, 3, 'ISLA', 'Isla neutralizes the critical categories of web, email and document-based threats by taking all incoming code and isolating it on a remote virtual browser, then streaming harmless pixels back to your endpoint.'),
(8, 4, 'Open Networking Solution', 'Edgecore’s Open Networking Solution help reducing network & operating expenses, while automate & accelerate provisioning of network capacity and services. Come with a choice of independent open software for NOS (Network Operating Systems), SDN, virtualization, and cloud orchestration, these open networking available in various network deployment from 1G, 10G, 25G, 40G to 100G.'),
(9, 4, 'Enterprise Switch', 'Edgecore Networks provides a full range of managed and unmanaged switch to fulfill different deployment requirements, from small/medium business users, enterprises to carrier-level service providers.'),
(10, 5, 'ArcGis Enterprise', 'ArcGIS offers a unique set of capabilities to apply location-based analysis to your business practices. Gain broader insights using contextual tools to visualize and analyze your data. Collaborate with others and share your insights through maps, applications and reports.'),
(11, 6, 'Smart OmniEgde Solution', 'Smart OmniEdge network solution provides a unified wired/wireless infrastructure for cloud or premise deployment, augmented with AI-powered applications and managed through a single pane of glass.'),
(12, 6, 'Automated Campus Networking Solutions', 'Quickly deploy the new digital technology that your organization requires, prevent cyber-attacks at every entry point, and do it all while delivering a consistent and personalized user experience.'),
(13, 6, 'Agile Data Center Networking Solution', 'Extreme Networks Agile Data Center solutions deliver the automation, visibility, and flexibility needed to make digital transformation a reality.'),
(14, 7, 'Optical Receiver', 'Fully compliant with Ethernet, Fibre Channel, Infiniband, SONET/SDH/OTN, CPRI and PON standards and operate at data rates in excess of 100 Gb/s.'),
(15, 8, 'Nucleus', 'The 3D unified management system that interposes the real-time data avalanche of sensor networks with 3D building information to provide comprehensive situation awareness to premise managers.'),
(16, 9, 'Defending the Network Perimeter', 'Network perimeter is the first line of the security defense for enterprise, Hillstone provides the next generation perimeter solutions with the unparalleled threat visibility and protection without compromising the network performance and business continuity, these include Next-Generation Firewall (NGFW) and Network Intrusion Prevention System (NIPS).'),
(17, 10, 'IBM Software', 'IBM Software systems and applications are designed to solve the most challenging needs of organizations large and small, across all industries, worldwide.'),
(18, 10, 'IBM Hardware', 'IBM Hardware goes beyond standard infrastructure to help you put smart to work. Ensure your hardware meets today\'s expectations & prepares your business for the future.'),
(19, 10, 'IBM Cloud', 'IBM Cloud is a platform that helps developers build and run modern apps and services. It provides developers with instant access to the compute and services they need to launch quickly, iterate continuously and scale with success.'),
(20, 10, 'IBM FlashSystem 9100', 'IBM FlashSystem 9100 combines the performance of flash and Non-Volatile Memory Express (NVMe) end-to-end with the reliability and innovation of IBM FlashCore technology, the rich features of IBM Spectrum Virtualize™ and AI predictive storage management and proactive support by Storage Insights™— all in a powerful 2U enterprise-class, blazing fast storage all-flash array. Providing intensive data driven multicloud storage capacity, FlashSystem 9100 allows you to easily add in the multicloud solut'),
(21, 11, 'Wireless Backhaul and Last Mile Connectivity', 'Wireless Backhaul and Last Mile Connectivity\r\nIgniteNet MetroLinq products utilize the 60 GHz millimeter wave band to enable the delivery of multi-gigabit connectivity wirelessly allowing quick roll-out of fiber like wireless networks across the globe.'),
(22, 12, 'Application Security', 'protects your applications wherever they are located and tirelessly defends your business growth with full-function cloud application security and delivery with on-premises security options.'),
(23, 12, 'Data Security', 'Securing your data from attacks and simplifying regulatory compliance is crucial for online business. Imperva Data Security does both. Imperva data security protects your data on-premises and in the cloud by monitoring all data activity from unauthorized access.'),
(24, 13, 'Server', 'Drive your business forward with a technology that matches your needs. Reduce costs and complexity by investing in a system that handles today\'s workload and expands to accommodate future growth.'),
(25, 13, 'Storage', 'Lenovo enterprise-grade storage products can adapt to your growing virtual environments, fit into your existing budget, and ensure data is ready when you need it.'),
(26, 14, 'Decision Focused', 'While many organizations build powerful analytic models, only half of them, on average ever make it into production.? That\'s a lot of waste. SAS Viya simplifies model deployment – helping you cross that critical \"last mile\" – and enables you to centrally monitor and manage the performance of all your analytic models.'),
(27, 14, 'Developer Friendly', 'SAS Viya is developer friendly because it can be embedded into your applications and can be called only when needed, saving you time, resources, and reducing the need to trade speed for operational excellence.'),
(28, 14, 'Automated', 'Data preparation and manual coding takes a tremendous amount of time and skilled resources.  This time is better spent innovating and operationalizing insights.  SAS Viya provides a number of key automation capabilities including:'),
(29, 14, 'Governed', 'As AI and machine learning become more widespread, organizations struggle to explain decisions, and foster ethical AI adoption.  SAS has built-in'),
(30, 14, 'Continously Updated', 'SAS Viya is continuously updated with quick, incremental product enhancements that you control.  So your data scientists, business analysts, and application developers can take advantage of our latest innovations, the moment they’re ready.'),
(31, 14, 'Cloud Native', 'Cloud technologies are evolving. While SAS has always run in the cloud, SAS Viya is on the forefront of cloud evolution with a completely redesigned architecture that is compact, cloud native and fast. Whether you prefer software as a service (SaaS) from the SAS Cloud or choose a public or private cloud provider, you\'ll be able to make the most of your cloud investment.'),
(32, 15, 'Loss Prevention', 'Sensormatic empowers retailers to fight global shrink and retail crime with proven merchandise protection solutions'),
(33, 15, 'Traffic Insight', 'ShopperTrak Analytics delivers data that retailers can easily convert into meaningful insights and actionable outcomes, while shopper experiences with the retail landscape are evolving rapidly.'),
(34, 15, 'Analytics', 'Analytics Solutions is designed to provide insights from shopper traffic to inventory management that deliver positive retail outcomes and reshape retailers\' operations.'),
(35, 15, 'Inventory Intelligence', 'TrueVUE’s Inventory Intelligence harnesses the power of data and gives you a single view of item-level inventory across the enterprise to improve your sales.'),
(36, 16, 'Data Security Platform', 'Detects insider threats and cyberattacks by analyzing data, account activity, and user behavior; prevents and limits disaster by locking down sensitive and stale data; and efficiently sustains a secure state with automation.'),
(37, 16, 'DatAdvantage', 'DatAdvantage maps who can access data and who does access data – across file and email systems, shows where users have too much access, and then safely automates changes to access control lists and security groups.'),
(38, 16, 'Data Classification Engine', 'Varonis automatically scans and classifies sensitive, regulated information stored in file shares, NAS devices, SharePoint, and Office 365.'),
(39, 16, 'DatAlert', 'Detect unusual file and email activity across cloud and on-premises data stores, suspicious account and computer behavior in Active Directory, and other indicators of compromise to protect your data before it’s too late.');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_product`
--

CREATE TABLE `subscribe_product` (
  `id_subcribe_product` int(4) NOT NULL,
  `id_product` int(2) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_company` int(4) NOT NULL,
  `maintenance_ticket` int(2) DEFAULT NULL,
  `request_date` date NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status_code` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe_product`
--

INSERT INTO `subscribe_product` (`id_subcribe_product`, `id_product`, `id_user`, `id_company`, `maintenance_ticket`, `request_date`, `start_date`, `end_date`, `status_code`) VALUES
(13, 13, '1826457406', 1129, 10, '2021-07-01', '2021-07-14', '2021-07-31', 1),
(23, 2, '1826457406', 1111, NULL, '2021-07-20', NULL, NULL, 0),
(24, 3, '1826457406', 1111, NULL, '2021-07-20', NULL, NULL, 0),
(25, 12, '1826457406', 1111, NULL, '2021-07-20', NULL, NULL, 0),
(26, 30, '1826457406', 1111, NULL, '2021-07-20', NULL, NULL, 0),
(28, 4, '1826457406', 1111, NULL, '2021-07-20', NULL, NULL, 0),
(29, 5, '1826457406', 1111, NULL, '2021-07-20', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `name_user` varchar(30) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `password_user` varchar(16) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `address_user` varchar(50) NOT NULL,
  `id_company` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `email_user`, `password_user`, `phone_number`, `address_user`, `id_company`) VALUES
('1826457406', 'Rievaldy Abdurrahman Wahid', 'rievaldy3235@gmail.com', '', '082183218354', 'jl.H Jali RT 05/02', 1111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `chat_history`
--
ALTER TABLE `chat_history`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `intents`
--
ALTER TABLE `intents`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id_subcribe_product`,`request_date`);

--
-- Indexes for table `patterns`
--
ALTER TABLE `patterns`
  ADD PRIMARY KEY (`id_pattern`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `subscribe_product`
--
ALTER TABLE `subscribe_product`
  ADD PRIMARY KEY (`id_subcribe_product`),
  ADD UNIQUE KEY `id_product` (`id_product`,`id_company`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email_user`),
  ADD KEY `id_company` (`id_company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1133;

--
-- AUTO_INCREMENT for table `intents`
--
ALTER TABLE `intents`
  MODIFY `id_tag` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patterns`
--
ALTER TABLE `patterns`
  MODIFY `id_pattern` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2329;

--
-- AUTO_INCREMENT for table `subscribe_product`
--
ALTER TABLE `subscribe_product`
  MODIFY `id_subcribe_product` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_history`
--
ALTER TABLE `chat_history`
  ADD CONSTRAINT `chat_history_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_2` FOREIGN KEY (`id_subcribe_product`) REFERENCES `subscribe_product` (`id_subcribe_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maintenance_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patterns`
--
ALTER TABLE `patterns`
  ADD CONSTRAINT `patterns_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `intents` (`id_tag`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`);

--
-- Constraints for table `subscribe_product`
--
ALTER TABLE `subscribe_product`
  ADD CONSTRAINT `subscribe_product_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscribe_product_ibfk_4` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscribe_product_ibfk_5` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
