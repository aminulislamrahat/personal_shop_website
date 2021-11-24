-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 08:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goldenrice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `avatar` varchar(500) NOT NULL DEFAULT 'propic.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phn_num`, `password`, `auth`, `join_date`, `avatar`) VALUES
(10, 'aminul', 'aminul@gmail.com', '01232-123321', 'c72f5359811af711f29b1fac7150042f', '3489170c33237f239ebb33bf24894160', '2020-05-15 23:54:06', 'propic.png'),
(11, 'admin', 'admin@gmail.com', '01456-789987', '6116afedcb0bc31083935c1c262ff4c9', '31876afbfa351da82ade46d18e3e58af', '2020-05-16 00:00:42', '5ebfc4ab1dae7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `oder_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_price` double NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `shipment_cost` double NOT NULL,
  `total_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `platinum_user`
--

CREATE TABLE `platinum_user` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pphn_num` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `ppassword` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `pjoin_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ptotal_order` int(11) NOT NULL DEFAULT 0,
  `ppoint` int(11) NOT NULL DEFAULT 0,
  `avatar` varchar(500) NOT NULL DEFAULT 'propic.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `platinum_user`
--

INSERT INTO `platinum_user` (`pid`, `pname`, `pemail`, `pphn_num`, `paddress`, `ppassword`, `auth`, `pjoin_date`, `ptotal_order`, `ppoint`, `avatar`) VALUES
(19, 'riyad', 'riyad@gmail.com', '01706-302930', 'dhaka', '6116afedcb0bc31083935c1c262ff4c9', '2da1b2c9f732322fa1e372ab533f69fb', '2020-05-16 00:03:03', 0, 0, 'propic.png'),
(20, 'Amena', 'amena@gmail.com', '01245-545454', 'dhaka', '6116afedcb0bc31083935c1c262ff4c9', 'f7fa0062a126e94abafd188636208069', '2020-05-16 00:03:49', 0, 0, 'propic.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img`, `product_info`) VALUES
(1, 'Atash', 42, 'atash.jpg', 'Atash rice is naturally thin and tasty to eat. Stays long after cooking, does not spoil. This variety of rice is produced in almost all the districts of Bangladesh.'),
(2, 'Atop', 45, 'atop.jpg', 'Atop rice cooked very fast than another rice and it is blended well. It is cultivated in Bangladesh in the traditional way. No machine is used to cultivate this rice. Atop rice is cultivated in sandy and loamy soil which makes the rice fresh.'),
(3, 'Bangla Basmati', 58, 'basmati-rice.jpg', 'Bangla Basmati Rice. The long slender-grained aromatic Bangla Basmati rice is grown in abundance in our country. It is very much popular for its distinctive fragrance and flavour.'),
(4, 'Chinigura', 95, 'chinigura.jpg', 'Chinigura Rice is a famous type of rice which is cultivated in Dinajpur Bangladesh. It gives you the pure and fresh texture of rice which is amazing to eat. This rice was produced before the region of Aryan in Dinajpur. The size of the rice is very small and a bit curvy in shape.'),
(5, 'Guti-Shorna', 32, 'swarna-raw.jpg', 'Guti shorna is a Bangladeshi invented rice. This rice is short and oval. Dinajpur is the biggest supplier of this rice'),
(6, 'Kalijira', 100, 'kalijira.jpg', 'Kalijira rice is very special premium long-grain white rice on a miniature scale, like a baby basmati.It can be cooked by boil it in water for an exceptional rice dish or just add ghee to the water to improve its nutty fragrance and double your rice dinning practice.'),
(7, 'Minicate', 52, 'minicate.jpg', 'Miniket, a popular brand name of a kind of slender and glossy husked rice is available everywhere in Bangladesh. Miniket is the corrupt expression of the word minikit, a synthesised dialect from the words mini (small) and kit (a set of supplies for a specific purpose). The origin of the word is India, most probably West Bengal. It is really amazing that the word minikit and popular rice is a synonym to each other nowadays.'),
(8, 'Najirshail', 60, 'Najirshail-Rice-Premium.jpg', 'It is aromatic, thin and long that gives your mouth a great taste. Both the edges of najirshail rice are pointy and oval shaped. Najirshail rice is cultivated naturally which is chemical and poison free. This rice is carefully sundried before packaging so that the seeds do not break.'),
(9, 'Paijam', 35, 'paijam.jpg', 'Paijam rice is best known for its aroma and size. It is called dawat special rice. The aroma and size is that good that you the rice taste awesome when you eat yourself or serve it to your guests. This rice is not artificially grown but it applies the most traditional way of fertilizing the rice. No additional perfume is being added to the rice to create an aroma. You will get the natural aroma from this rice. Steamed rice, Pulao, Biryani, Khichdi, Payesh, etc. tastes amazing when you use this rice to cook. Paijam rice ensures you a freshness of the rice.');

-- --------------------------------------------------------

--
-- Table structure for table `regular_user`
--

CREATE TABLE `regular_user` (
  `rid` int(11) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `rphn_num` varchar(255) NOT NULL,
  `raddress` varchar(255) NOT NULL,
  `rpassword` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `rjoin_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rtotal_order` int(11) NOT NULL DEFAULT 0,
  `rpoint` int(11) NOT NULL DEFAULT 0,
  `avatar` varchar(500) NOT NULL DEFAULT 'propic.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_user`
--

INSERT INTO `regular_user` (`rid`, `rname`, `remail`, `rphn_num`, `raddress`, `rpassword`, `auth`, `rjoin_date`, `rtotal_order`, `rpoint`, `avatar`) VALUES
(5, 'zunaid', 'zunaid@gmail.com', '01768-808153', 'b.baria', '6116afedcb0bc31083935c1c262ff4c9', '1d5be827fddb5052b0fa790424fd37f0', '2020-05-16 00:04:27', 0, 0, 'propic.png'),
(6, 'jannat', 'jannat@gmail.com', '01521-334698', 'dutch bangla bank atm booth', '6116afedcb0bc31083935c1c262ff4c9', '346d8f5ceaa4cac3d53c3818e27ef30b', '2020-05-16 00:05:03', 0, 0, 'propic.png');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `shipment_cost` double NOT NULL DEFAULT 60
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`) USING BTREE;

--
-- Indexes for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD PRIMARY KEY (`oder_id`);

--
-- Indexes for table `platinum_user`
--
ALTER TABLE `platinum_user`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `punique_email` (`pemail`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `regular_user`
--
ALTER TABLE `regular_user`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `runique_email` (`remail`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_tb`
--
ALTER TABLE `order_tb`
  MODIFY `oder_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platinum_user`
--
ALTER TABLE `platinum_user`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regular_user`
--
ALTER TABLE `regular_user`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `shipment_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
