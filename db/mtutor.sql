-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 09:18 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `activ_log`
--

DROP TABLE IF EXISTS `activ_log`;
CREATE TABLE IF NOT EXISTS `activ_log` (
  `user_type` varchar(10) NOT NULL,
  `u_id` varchar(7) NOT NULL,
  `old_status` varchar(5) DEFAULT NULL,
  `new_status` varchar(5) NOT NULL,
  `action_taken_by` varchar(7) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bu_master`
--

DROP TABLE IF EXISTS `bu_master`;
CREATE TABLE IF NOT EXISTS `bu_master` (
  `address` varchar(100) DEFAULT NULL,
  `bu_name` varchar(100) NOT NULL,
  `bu_id` varchar(5) NOT NULL,
  `bulogo_path` varchar(250) DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `bu_url` varchar(255) NOT NULL,
  PRIMARY KEY (`bu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bu_master`
--

INSERT INTO `bu_master` (`address`, `bu_name`, `bu_id`, `bulogo_path`, `pincode`, `bu_url`) VALUES
('Bhuban Bhuyan Path, Anuradha, Bamunimaidam, Guwahati, Assam', 'Assam Higher Secondary Education Council', 'bu051', '..mtutorlogosimg051.jpg', '781021', 'www.ahsec.nic.in/'),
('Chapel Rd, Nampally, Hyderabad, Telangana', 'Andhra Pradesh Board of Secondary Education', 'bu050', '..mtutorlogosimg050.jpg', '500001', 'www.bseap.org.in/'),
('Pratapgunj, Vadodara, Gujarat', 'Maharaja Sayajirao University of Baroda', 'bu049', '..mtutorlogosimg049.jpg', '390020', 'www.msubaroda.ac.in/'),
('Bhadson Road, Patiala, Punjab', 'Thapar University', 'bu047', '..mtutorlogosimg047.jpg', '147004', 'www.thapar.edu/'),
(NULL, 'Indian Institutes of Technology', 'bu048', NULL, NULL, 'www.iitd.ac.in/'),
('JSS Medical Institutions Campus, Sri Shivarathreeshwara Nagara, Mysore, Karnataka', 'Jagadguru Sri Shivarathreeswara University', 'bu046', '..mtutorlogosimg046.jpg', '570015', 'www.jssuni.edu.in/'),
('Kurukshetra, Harayana', 'Kurukshetra University', 'bu045', '..mtutorlogosimg045.jpg', '136119', 'www.kuk.ac.in/'),
('University Campus, Jaisingpura, Aurangabad, Maharashtra', 'Dr. Babasaheb Ambedkar Marathwada University', 'bu044', '..mtutorlogosimg044.jpg', '431004', 'www.bamu.ac.in/'),
('Near Katpadi Road, Vellore, Tamil Nadu', 'VIT University', 'bu043', '..mtutorlogosimg043.jpg', '632014', 'www.vit.ac.in/'),
('LBS Road, 13 Sadashiv Peth, Pune, Maharashtra', 'Bharati Vidyapeeth University', 'bu042', '..mtutorlogosimg042.jpg', '411030', 'www.bharatividyapeeth.edu/'),
('Plot No. 10, Institutional Area, Vasant Kunj, New Delhi, Delhi ', 'TERI University', 'bu041', '..mtutorlogosimg041.jpg', '110070', 'www.teriuniversity.ac.in/'),
('No 577, Anna Salai, Saidapet, Chennai, Tamil Nadu', 'Tamil Nadu Open University', 'bu040', '..mtutorlogosimg040.jpg', '600015', 'www.tnou.ac.in/'),
('Vidya Nagar, Kolhapur, Maharashtra', 'Shivaji University', 'bu039', '..mtutorlogosimg039.jpg', '416004', 'www.unishivaji.ac.in/'),
('5th Mile, NH 31A, Tadong, Gangtok, Sikkim', 'Sikkim Manipal University', 'bu038', '..mtutorlogosimg038.jpg', '737102', 'smu.edu.in/'),
('Gangtok, Sikkim', 'Sikkim University', 'bu037', '..mtutorlogosimg037.jpg', '737102', 'www.cus.ac.in/'),
('Delhi Road, University Secretariat, Rohtak, Haryana', 'Maharshi Dayanand University', 'bu036', '..mtutorlogosimg036.jpg', '124001', 'www.mdurohtak.ac.in/'),
('University Road, Sagar, Madhya Pradesh', 'Dr. Hari Singh Gour University', 'bu035', '..mtutorlogosimg035.jpg', '470003', 'www.dhsgsu.ac.in/'),
('Guindy, Chennai,Tamil Nadu, India', 'Anna University', 'bu034', '..mtutorlogosimg034.jpg', '600025', 'https://www.annauniv.edu/'),
('Hyderabad, Telangana', 'Osmania University', 'bu033', '..mtutorlogosimg033.jpg', '500007', 'www.osmania.ac.in/'),
('Chepauk, Chennai, Tamil Nadu', 'University of Madras', 'bu032', '..mtutorlogosimg032.jpg', '600005', 'www.unom.ac.in/'),
('Annamalai Nagar, Chidambaram, Tamil Nadu', 'Annamalai University', 'bu031', '..mtutorlogosimg031.jpg', '608002', 'https://www.annamalaiuniversity.ac.in/'),
('Maulana Mohammad Ali Jauhar Marg, Jamia Nagar, New Delhi, Delhi', 'Jamia Millia Islamia', 'bu030', '..mtutorlogosimg030.jpg', '110025', 'jmi.ac.in/'),
('Sector 125, Noida, Uttar Pradesh', 'Amity University', 'bu029', '..mtutorlogosimg029.jpg', '201313', 'www.amity.edu/'),
('SRM Nagar, Potheri, Kattankulathur, Kancheepuram District, Chennai, Tamil Nadu', 'SRM University', 'bu028', '..mtutorlogosimg028.jpg', '603203', 'www.srmuniv.ac.in/'),
('Senate House, 87/1, College Street, Kolkata, West Bengal ', 'University of Calcutta', 'bu027', '..mtutorlogosimg027.jpg', '700073', 'www.caluniv.ac.in/'),
('India', 'Indira Gandhi National Open University', 'bu026', '..mtutorlogosimg026.jpg', NULL, 'www.ignou.ac.in/'),
('Grand Trunk Rd, Off NH 1, Amritsar, Punjab', 'Guru Nanak Dev University', 'bu025', '..mtutorlogosimg025.jpg', '143005', 'www.gndu.ac.in/'),
(' NH-10, Rohtak Hissar Sirsa Road, Hisar, Haryana', ' Guru Jambeshwar University of Science & Technology', 'bu024', '..mtutorlogosimg024.jpg', '125001', 'www.gjust.ac.in/'),
(NULL, 'International Institute of Information Technology', 'bu023', NULL, NULL, 'https://www.iiit.ac.in/'),
('Gopinath Bordoloi Nagar, Jalukbari, Guwahati, Assam', 'Gauhati University', 'bu022', '..mtutorlogosimg022.jpg', '781014', 'www.gauhati.ac.in/'),
('Sector 16C, Dwarka, New Delhi, Delhi', 'Guru Gobind Singh Indraprastha University', 'bu021', '..mtutorlogosimg021.jpg', '110078', 'www.ipu.ac.in/'),
('Taleigao Plateau, Goa', 'Goa University', 'bu020', '..mtutorlogosimg020.jpg', '403206', 'https://www.unigoa.ac.in/'),
('Amritanagar, Ettimadai, Coimbatore, Tamil Nadu', 'Amrita Vishwa Vidyapeetham', 'bu019', '..mtutorlogosimg0119.jpg', '641112', 'https://www.amrita.edu/'),
('Hamdard Nagar, tughlakabad instituional area, New Delhi, Delhi', 'Jamia Hamdard', 'bu018', '..mtutorlogosimg018.jpg', '110062', 'jamiahamdard.edu/'),
('BARC Training School Complex, Anushaktinagar, Mumbai, Maharashtra', 'Homi Bhabha National Institute', 'bu017', '..mtutorlogosimg017.jpg', '400094', 'www.hbni.ac.in/'),
('Shah Mina Road, Chowk, Lucknow, Uttar Pradesh', 'King Georges Medical University', 'bu016', '..mtutorlogosimg016.jpg', '226003', 'www.kgmu.org/'),
('Umshing Mawkynroh, Shillong, Meghalaya', 'North Eastern Hill University', 'bu015', '..mtutorlogosimg015.jpg', '793022', 'www.nehu.ac.in/'),
('Marudhamalai Rd, Coimbatore, Tamil Nadu', 'Bharathiar University', 'bu014', '..mtutorlogosimg014.jpg', '641046', 'www.b-u.ac.in/'),
('Kalapet, Puducherry', 'Pondicherry University', 'bu013', '..mtutorlogosimg013.jpg', '605014', 'www.pondiuni.edu.in/'),
('Sector 14, Chandigarh', 'Panjab University', 'bu012', '..mtutorlogosimg012.jpg', '160014', 'puchd.ac.in/'),
('Bolpur, West Bengal', 'Visva Bharati', 'bu011', '..mtutorlogosimg011.jpg', '731235', 'www.visvabharati.ac.in/'),
('Aligarh, Uttar Pradesh', 'Aligarh Muslim University', 'bu010', '..mtutorlogosimg010.jpg', '202002', 'www.amu.ac.in/'),
('Pilani Campus, Vidya Vihar, Pilani, Rajasthan', 'Birla Institute of Technology & Science', 'bu009', '..mtutorlogosimg009.jpg', '333031', 'www.bits-pilani.ac.in/'),
('Valiamala Road, Valiamala, Thiruvananthapuram, Kerala ', 'Indian Institute of Space Science and Technology', 'bu008', '..mtutorlogosimg008.jpg', '695547', 'https://www.iist.ac.in/'),
('Varanasi, Uttar Pradesh', 'Banaras Hindu University', 'bu007', '..mtutorlogosimg007.jpg', '221005', 'www.bhu.ac.in/'),
('New Delhi, Delhi', 'University of Delhi', 'bu006', '..mtutorlogosimg006.jpg', '110021', 'du.ac.in/du/'),
(' Napaam, Tezpur, Sonitpur, Assam ', 'Tezpur University', 'bu005', '..mtutorlogosimg005.jpg', '784028', 'www.tezu.ernet.in/'),
('C. R., Prof CR Rao Rd, CUC, Gachibowli, Hyderabad, Telangana', 'University of Hyderabad', 'bu004', '..mtutorlogosimg004.jpg', '500046', 'http://www.uohyd.ac.in/'),
('New Mehrauli Road, Near Munirka, New Delhi, Delhi', 'Jawaharlal Nehru University', 'bu003', '..mtutorlogosimg003.jpg', '110067', 'http://www.jnu.ac.in/'),
('C V Raman Ave, Bengaluru, Karnataka', 'Indian Institute of Science', 'bu001', '..mtutorlogosimg001.jpg', '560012', 'http://www.iisc.ernet.in/'),
(' Nathalal Parekh Marg, Brahmanwada, Grant Road, Mumbai, Maharashtra', 'Institute of Chemical Technology', 'bu002', '..mtutorlogosimg002.jpg', '400019', 'http://www.ictmumbai.edu.in/'),
('Buddha Marg, Patna, Bihar', 'Bihar School Examination Board', 'bu052', '..mtutorlogosimg052.jpg', '800001', 'www.biharboard.ac.in/'),
('Chhattisgarh, India', 'Chhatisgarh Board of Secondary Education', 'bu053', '..mtutorlogosimg053.jpg', '492001', 'cgbse.nic.in/'),
('Bardez Dist., Alto Betim, Goa', 'Goa Board of Secondary & Higher Secondary Education', 'bu054', '..mtutorlogosimg054.jpg', '403521', 'www.gbshse.gov.in/'),
('Sector 10B, Near Old Sachivalaya, Gandhinagar, Gujarat ', 'Gujarat Secondary & Higher Secondary Education Board', 'bu055', '..mtutorlogosimg055.jpg', '382043', 'www.gseb.org/'),
('Bhiwani-Hansi Rd, Bhiwani, Haryana', 'Haryana Board of Education', 'bu056', '..mtutorlogosimg056.jpg', '127021', 'www.bseh.org.in/home/'),
('Dharamshala, Himachal Pradesh', 'Himachal Pradesh Board of School Education', 'bu057', '..mtutorlogosimg057.jpg', '176700', 'hpbose.org/'),
('Rehari Colony Jammu', 'J&K State Board of School Education', 'bu058', '..mtutorlogosimg058.jpg', '180005', 'www.jkbose.co.in/'),
('Bargawan, Namkum, Ranchi, Jharkhand', 'Jharkhand Academic Council', 'bu059', '..mtutorlogosimg059.jpg', '834010', 'jac.nic.in/'),
('Malleshwaram, Bengaluru', 'Karnataka Secondary Education Examination Board', 'bu060', '..mtutorlogosimg060.jpg', '560003', 'kseeb.kar.nic.in/'),
('Shanti Nagar, Chenkalchoola Colony, Thampanoor, Thiruvananthapuram, Kerala ', 'Kerala Board of Higher Secondary Education', 'bu061', '..mtutorlogosimg061.jpg', '695001', 'www.education.kerala.gov.in/'),
(NULL, 'Maharashtra State Board of Secondary and Higher Secondary Education', 'bu062', NULL, NULL, 'https://mahahsscboard.maharashtra.gov.in/'),
('Shivaji Nagar, Bhopal, Madhya Pradesh', 'Madhya Pradesh Board of Secondary Education', 'bu063', '..mtutorlogosimg063.jpg', '462016', 'mpbse.nic.in/'),
('Indo Myanmar Road, NH-39, Sanakhwa Yaima Kollup, Imphal, Manipur', 'Manipur Board of Secondary Education', 'bu064', '..mtutorlogosimg064.jpg', '795001', 'bsem.nic.in/'),
('Hopkinson Rd, Lachumiere, Shillong, Meghalaya', 'Meghalaya Board of School Education', 'bu065', '..mtutorlogosimg065.jpg', '793001', 'www.mbose.in/'),
('Chaltlang, Aizawl, Mizoram', 'Mizoram Board of School Education Chaltlan', 'bu066', '..mtutorlogosimg066.jpg', '796012', 'mbse.edu.in/'),
('Bayavü Hill Kohima, Nagaland', 'Nagaland Board of School Education', 'bu067', '..mtutorlogosimg067.jpg', '797001', 'www.nbsenagaland.com/'),
('Bajrakabati Road, Cuttack Orissa, Odisha', 'Orissa Board of Secondary Education', 'bu068', '..mtutorlogosimg068.jpg', '753001', 'bseodisha.nic.in/'),
('Vidya Bhawan, Phase-8, Mohali, Punjab', 'Punjab School Education Board', 'bu069', '..mtutorlogosimg069.jpg', '160062', 'www.pseb.ac.in/'),
('Ajmer, Rajasthan', 'Rajasthan Board of Secondary Education', 'bu070', '..mtutorlogosimg070.jpg', '305001', 'rajeduboard.nic.in/'),
('Chennai, Tamil Nadu', 'Tamil Nadu Board of Secondary and Higher Secondary Education', 'bu071', '..mtutorlogosimg071.jpg', '600006', 'www.tn.gov.in/schooleducation/'),
('Agartala, Tripura', 'Tripura Board of Secondary Education', 'bu072', '..mtutorlogosimg072.jpg', '799006', 'www.tbse.in/'),
('Allahabad, Uttar Pradesh ', 'UP Board of High School & Intermediate Education', 'bu073', '..mtutorlogosimg073.jpg', '211001', 'upmsp.nic.in/'),
('Ram Nagar, Nainital, Uttaranchal', 'Uttaranchal Shiksha Evm Pariksha Parishad', 'bu074', '..mtutorlogosimg074.jpg', '244715', 'http://www.schooleducation.uk.gov.in/'),
('Allahabad, Uttar Pradesh', 'UP Board of High School & Intermediate Education', 'bu075', '..mtutorlogosimg075.jpg', '211001', 'upmsp.nic.in/'),
('Park Street, Kolkata, West Bengal', 'West Bengal Board of Secondary Education', 'bu076', '..mtutorlogosimg076.jpg', '700016', 'wbbse.org/'),
('Preet Vihar, New Delhi, Delhi', 'Central Board of Secondary Education', 'bu077', '..mtutorlogosimg077.jpg', '110301', 'cbse.nic.in/'),
('Central Warehousing Corporation, Rana Pratap Bagh, New Delhi, Delhi', 'National Institute of Open Schooling', 'bu078', '..mtutorlogosimg078.jpg', '110033', 'www.nios.ac.in/');

-- --------------------------------------------------------

--
-- Table structure for table `class_master`
--

DROP TABLE IF EXISTS `class_master`;
CREATE TABLE IF NOT EXISTS `class_master` (
  `class_name` varchar(20) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_master`
--

INSERT INTO `class_master` (`class_name`, `cl_id`) VALUES
('BE', 'c017'),
('BARCH', 'c016'),
('BTECH', 'c015'),
('BCA', 'c014'),
('BBA', 'c013'),
('Class 12', 'c012'),
('Class 11', 'c011'),
('Class 10', 'c010'),
('Class 9', 'c009'),
('Class 8', 'c008'),
('Class 7', 'c007'),
(' Class 6', 'c006'),
(' Class 5', 'c005'),
('Class 4', 'c004'),
('Class 3', 'c003'),
('Class 2', 'c002'),
('Class 1', 'c001'),
('BCOM', 'c018'),
('LLB', 'c019'),
('BSTAT', 'c020'),
('BA', 'c021'),
('BJMC', 'c022'),
('BMS', 'c023'),
('BEd', 'c024'),
('BS', 'c025'),
('BEC', 'c026'),
('BBC', 'c027'),
('BHM', 'c028'),
('BStat', 'c029'),
('MCOM', 'c030'),
('MBA', 'c031'),
('MCA', 'c032'),
('MTECH', 'c033'),
('MA', 'c034'),
('MARCH', 'c035'),
('MBBS', 'c036');

-- --------------------------------------------------------

--
-- Table structure for table `class_sub_detail`
--

DROP TABLE IF EXISTS `class_sub_detail`;
CREATE TABLE IF NOT EXISTS `class_sub_detail` (
  `cl_id` varchar(4) NOT NULL,
  `sub_id_list` varchar(200) NOT NULL,
  `xmlfilepath` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cl_id`,`sub_id_list`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

DROP TABLE IF EXISTS `connection`;
CREATE TABLE IF NOT EXISTS `connection` (
  `qr_id` varchar(7) NOT NULL,
  `sid` varchar(5) NOT NULL,
  `tid` varchar(7) NOT NULL,
  `status` varchar(3) NOT NULL,
  `msg_filepath` varchar(255) NOT NULL,
  `mod_reqd` tinyint(1) NOT NULL,
  PRIMARY KEY (`qr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lang_master`
--

DROP TABLE IF EXISTS `lang_master`;
CREATE TABLE IF NOT EXISTS `lang_master` (
  `l_id` varchar(5) NOT NULL,
  `lang_name` varchar(10) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lang_master`
--

INSERT INTO `lang_master` (`l_id`, `lang_name`) VALUES
('l001', 'hindi'),
('l002', 'english'),
('l003', 'french'),
('l004', 'german'),
('l005', 'spanish'),
('l006', 'mandarin'),
('l007', 'japanese'),
('l008', 'korean'),
('l009', 'italian'),
('l010', 'arabic'),
('l011', 'marathi'),
('l012', 'bengali'),
('l013', 'punjabi'),
('l014', 'gujrati'),
('l015', 'tamil'),
('l016', 'telgu'),
('l017', 'kannada'),
('l018', 'malyalam'),
('l019', 'urdu'),
('l020', 'odia');

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

DROP TABLE IF EXISTS `limits`;
CREATE TABLE IF NOT EXISTS `limits` (
  `stud_req_limit` int(11) NOT NULL,
  `tutor_req_limit` int(11) NOT NULL,
  `activ_expire_url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `date` date NOT NULL,
  `event` varchar(10) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `m_id` varchar(3) NOT NULL,
  `u_id` varchar(7) NOT NULL,
  `user_type` char(1) NOT NULL,
  `msg_seen` tinyint(1) NOT NULL,
  `msg_type` varchar(2) NOT NULL,
  `sent_date` date NOT NULL,
  `msg_content` varchar(160) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

DROP TABLE IF EXISTS `moderator`;
CREATE TABLE IF NOT EXISTS `moderator` (
  `m_id` varchar(3) NOT NULL,
  `name` varchar(24) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msg_templates`
--

DROP TABLE IF EXISTS `msg_templates`;
CREATE TABLE IF NOT EXISTS `msg_templates` (
  `msg_id` varchar(5) NOT NULL,
  `tid` varchar(7) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  `msg_template` varchar(200) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

DROP TABLE IF EXISTS `pincode`;
CREATE TABLE IF NOT EXISTS `pincode` (
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `area` varchar(20) NOT NULL,
  `area_no` varchar(10) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  PRIMARY KEY (`pincode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qual_master`
--

DROP TABLE IF EXISTS `qual_master`;
CREATE TABLE IF NOT EXISTS `qual_master` (
  `qid` varchar(4) NOT NULL,
  `degree_name` varchar(20) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query_table`
--

DROP TABLE IF EXISTS `query_table`;
CREATE TABLE IF NOT EXISTS `query_table` (
  `qr_id` varchar(7) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  `s_id` varchar(5) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  `lang_id` varchar(5) NOT NULL,
  `tuition_type` varchar(1) NOT NULL,
  `location_pref` varchar(20) DEFAULT NULL,
  `timeslot_code` varchar(32) NOT NULL,
  `bu_id` varchar(5) NOT NULL,
  `query_start_date` date NOT NULL,
  `query_expire_date` date NOT NULL,
  `status` varchar(3) NOT NULL,
  `limits` int(11) NOT NULL,
  PRIMARY KEY (`qr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query_word_master`
--

DROP TABLE IF EXISTS `query_word_master`;
CREATE TABLE IF NOT EXISTS `query_word_master` (
  `qw_id` varchar(4) NOT NULL,
  `display_word` varchar(10) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  PRIMARY KEY (`qw_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` varchar(7) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` char(1) NOT NULL,
  `mob_number` varchar(13) NOT NULL,
  `ac_creation_date` date NOT NULL,
  `activation_url` varchar(100) NOT NULL,
  `active_expiry_date` date NOT NULL,
  `active_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`email`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `tid` varchar(7) NOT NULL,
  `sid` varchar(5) NOT NULL,
  `rating` int(1) NOT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `mod_approved` tinyint(1) NOT NULL,
  `mod_update_date` date NOT NULL,
  PRIMARY KEY (`tid`,`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` varchar(5) NOT NULL,
  `name` varchar(24) NOT NULL,
  `address` varchar(60) NOT NULL,
  `gender` char(1) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `mob_number` varchar(13) NOT NULL,
  `landline_number` varchar(11) DEFAULT NULL,
  `mod_reqd` tinyint(1) NOT NULL,
  `last_updated` date NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_qual_detail`
--

DROP TABLE IF EXISTS `stud_qual_detail`;
CREATE TABLE IF NOT EXISTS `stud_qual_detail` (
  `sid` varchar(5) NOT NULL,
  `qid` varchar(4) NOT NULL,
  `xml_filepath` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`,`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_master`
--

DROP TABLE IF EXISTS `sub_master`;
CREATE TABLE IF NOT EXISTS `sub_master` (
  `sub_id` varchar(6) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_master`
--

INSERT INTO `sub_master` (`sub_id`, `sub_name`) VALUES
('sub001', 'Hindi'),
('sub002', 'English'),
('sub003', 'Mathematics'),
('sub004', 'Environmental Studies'),
('sub005', 'Science'),
('sub006', 'Social Studies'),
('sub007', 'History'),
('sub008', 'Political Science'),
('sub009', 'Geography'),
('sub010', 'Economics'),
('sub011', 'Accounts'),
('sub012', 'Disaster Management'),
('sub013', 'Business Studies'),
('sub014', 'Physics'),
('sub015', 'Biology'),
('sub016', 'Chemistry'),
('sub017', 'GK'),
('sub018', 'Moral Science'),
('sub019', 'Computer'),
('sub020', 'Physical Education'),
('sub021', 'Singing'),
('sub022', 'Instrumentation'),
('sub023', 'Dance'),
('sub024', 'Archery'),
('sub025', 'Drama'),
('sub026', 'Art'),
('sub027', 'Drawing'),
('sub028', 'Painting'),
('sub029', 'Theater Arts'),
('sub030', 'Photography'),
('sub031', 'Videography'),
('sub032', 'Zoology'),
('sub033', 'Botany'),
('sub034', 'Spanish'),
('sub035', 'German'),
('sub036', 'French'),
('sub037', 'Portugese'),
('sub038', 'Latin'),
('sub039', 'Greek'),
('sub040', 'Hebrew'),
('sub041', 'Chinese'),
('sub042', 'Italian'),
('sub043', 'Russian'),
('sub044', 'Sanskrit'),
('sub045', 'Yoga'),
('sub046', 'Martial Arts'),
('sub047', 'Programming'),
('sub048', 'Web Design'),
('sub049', 'Psychology'),
('sub050', 'Fencing'),
('sub051', 'Golf'),
('sub052', 'Punjabi'),
('sub053', 'Urdu'),
('sub054', 'Advanced Calculus'),
('sub055', 'Advanced Physics'),
('sub056', 'Advanced Mechanics'),
('sub057', 'Analytical Biochemistry'),
('sub058', 'Biotechnology'),
('sub059', 'Bionanotechnology'),
('sub060', 'Bioinformatics'),
('sub061', 'Biodiversity Conservation'),
('sub062', 'Biochemistry'),
('sub063', 'Biophysics'),
('sub064', 'Cell Biology and Genetics'),
('sub065', 'Pharmacology of Recreational Drugs'),
('sub066', 'Acupuncture Microsystems'),
('sub067', 'Clinical Bacteriology'),
('sub068', 'Computational Physics'),
('sub069', 'Crime Scene Investigation'),
('sub070', 'Differential Equations'),
('sub071', 'DNA Profiling'),
('sub072', 'Drug Discovery'),
('sub073', 'Ecology'),
('sub074', 'Energy Science and Technology'),
('sub075', 'Environmental Biotechnology'),
('sub076', 'Epidemiology and Public Health Microbiology'),
('sub077', 'Essentials of Pathophysiology'),
('sub078', 'Evaluation of Contaminant Effects'),
('sub079', 'Fire and Explosion Investigation'),
('sub080', 'Fisheries Resources'),
('sub081', 'Forensic Toxicology'),
('sub082', 'Forensic Science'),
('sub083', 'Forensic Statistics'),
('sub084', 'Forensic Biology'),
('sub085', 'Forest and Mountain Ecology'),
('sub086', 'Data Mining and Visualisation'),
('sub087', 'General Microbiology'),
('sub088', 'Geological Processes'),
('sub089', 'GIS and Remote Sensing'),
('sub090', 'Haematology'),
('sub091', 'Health and Homeostasis'),
('sub092', 'Histology'),
('sub093', 'Imaging Science'),
('sub094', 'Immunology'),
('sub095', 'Forensic Taphonomy'),
('sub096', 'Linear Dynamical Systems'),
('sub097', 'Mathematical Analysis and Modelling'),
('sub098', 'Quantitative Management'),
('sub099', 'Pharmacology'),
('sub100', 'Marine Geosciences'),
('sub101', 'Medicinal Chemistry'),
('sub102', 'Microbial Ecology'),
('sub103', 'Microscopy and Cytometry'),
('sub104', 'Molecular Biology'),
('sub105', 'Nanomaterials'),
('sub106', 'Nanophotonics'),
('sub107', 'Nanotechnology Honours'),
('sub108', 'Numerical Methods of Finance'),
('sub109', 'Optics'),
('sub110', 'Parasitology'),
('sub111', 'Polymer Science'),
('sub112', 'Programming for Data Analysis'),
('sub113', 'Data Hiding'),
('sub114', 'Data Security'),
('sub115', 'Database Management'),
('sub116', 'Proteomics'),
('sub117', 'Quantum Physics'),
('sub118', 'Scanning Probe and Electron Microscopy'),
('sub119', 'Spectroscopy and Structure'),
('sub120', 'Transfusion Science'),
('sub121', 'Wildlife Ecology'),
('sub122', 'Virology'),
('sub123', 'Anthropology'),
('sub124', 'Food Technology'),
('sub125', 'Psychology'),
('sub126', 'Electronics'),
('sub127', 'Arabic'),
('sub128', 'Bengali'),
('sub129', 'Persian'),
('sub130', 'Commerce'),
('sub131', 'Philosophy'),
('sub132', 'Home Science'),
('sub133', 'Language Literature and Culture'),
('sub134', 'Politics and Society'),
('sub135', 'Human Rights'),
('sub136', 'Social Enquiry'),
('sub137', 'Gender and Environment'),
('sub138', 'Macroeconomics'),
('sub139', 'Microeconomics'),
('sub140', 'Fundamentals of Information Technology'),
('sub141', 'Technical Communication'),
('sub142', 'Data Structure'),
('sub143', 'Computer Networks'),
('sub144', 'C Language'),
('sub145', 'C++'),
('sub146', 'Java'),
('sub147', 'Python'),
('sub148', 'MATLAB'),
('sub149', 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `sub_preference`
--

DROP TABLE IF EXISTS `sub_preference`;
CREATE TABLE IF NOT EXISTS `sub_preference` (
  `tid` varchar(7) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  `sub_id` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tid` varchar(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `about` varchar(160) DEFAULT NULL,
  `own_vehicle` tinyint(1) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `qid` varchar(5) NOT NULL,
  `mob_number` varchar(13) NOT NULL,
  `land_number` varchar(11) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tut_qual_detail`
--

DROP TABLE IF EXISTS `tut_qual_detail`;
CREATE TABLE IF NOT EXISTS `tut_qual_detail` (
  `tid` varchar(7) NOT NULL,
  `qid` varchar(3) NOT NULL,
  `xml_filepath` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `qid` (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` char(1) NOT NULL,
  `mob_number` varchar(13) NOT NULL,
  `status` int(11) NOT NULL,
  `ac_creation_date` date NOT NULL,
  `last_logindate` date NOT NULL,
  `u_id` varchar(7) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
