-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2017 at 01:50 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `booking_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `address`, `booking_time`) VALUES
(1, 'Nidheesh M.R', 'chowannur p.o,\r\nkunnamkullam.', '2017-05-18 12:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Hair', 'Hair.jpg'),
(2, 'Nails', 'nails.jpg'),
(3, 'Body', 'Body.jpg'),
(4, 'Facial', 'facial-spa.jpg'),
(5, 'Eyes', '60544d8f-971b-4f82-bbb7-ffe820a2a338.jpg'),
(6, 'Kids', 'kids-and-spa.jpeg'),
(11, 'Offers', 'c700x420.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_no`, `email`, `message`) VALUES
(1, 'Nidheesh M.R', '9246723156', 'nidheeshmr93@gmail.com', 'please, contact me...'),
(2, 'Rajesh K.A', '9452416627', 'rajeshka31@gmail.com', 'We will most definitely be coming back to this spot the next time we visit Sedona! We called beforehand and Thea was absolutely wonderful and patient and answering our questions. Our 90-minute massage treatments were definitely cater to our needs after our therapists interviewed us. Back home in Western New York, we each have LMT\'s that are absolute experts. In Sedona, we found the same level of expertise and care! We are so lucky and grateful to have found this place! Thank you to our amazing LMT\'s, Thea and Sue!   '),
(3, 'vishundev varma', '9782455472', 'vishnudev96@gmail.com', 'Wow, wow, wow. I had the best massage of my life at A Spa For You. We were in Sedona for our "baby moon" and I got a 90-minute prenatal massage. Thea was incredible. She spent a considerable amount of time with me prior to the massage explaining what she would do and why. She also gave me some other information to help improve my overall comfort and health during my pregnancy. The massage itself took me to a whole different world! She used warm stones (on my limbs only) and essential oils, which complemented her skillful touch. It is clear that Thea loves what she does and truly cares about her clients. She went above and beyond to provide me a phenomenal experience. If I lived in Sedona, I would go back regularly!!!'),
(4, 'ChrisWeaver', '425756684', 'chrisWeaver342@gmail.com', 'Thank you so much Thea and Jodie. The couples massage with aroma therapy for me and the Japanese facial for Amy were absolutely amazing. All tensions released and we still feel amazing days later. \r\n\r\nDo not hesitate to use this spa. You will get better one on one service than at the bigger spas. Thea and her staff are TOP notch!\r\n'),
(5, 'Nicole L', '451237945', 'nicolel75@gmail.com', 'Amazing mother and daughter 1hr treatment! The therapists were amazing. They sat us down before our appointment to go through what we wanted and needed as treatments. They explained everything. The mix of hot stone, sweedish and deep tissue massage was exactly what we needed and I got the extra Japanese Facial Massage. It was absolute bliss! Thank you so much for all the attention and care given! I would recomend this little treasure of a spa to anyone. It is simple, clean, uncomplicated yet just what you need if you want the most caring massage therapists and a good treatment after a day of hiking the beautiful Sedona mountains..'),
(6, 'jhopedavila', '402358712', 'jhopedavila31@gmail.com', 'My family and I recently visited this spa during our vacation. I was in my third trimester, my mother is in her 50\'s and my aunt is 70. We all got the "heart space special" and loved it. The staff made a point to address each of our individual needs and we all left feeling very well taken care of.\r\n'),
(7, 'Pat S', '437331526', 'patsparis522@gmail.com', 'If you want a standard, facial-massage-waxing-mani/pedi spa in the middle of Uptown Sedona, this is not it. If you want the best massage of your life, come here. My friend and I both had the Sedona Experience 60-min massage. My only regret is that I didn\'t have the 90 minute one! I\'ve had many massages in multiple states/countries, but I will rate this one the best ever. I actually fell asleep and I have never done that before! Kate, my massage therapist, sat me down before hand to make sure my needs and concerns were shared and she was communicative, but not too chatty, throughout. I personally think she should insure her hands. The massage was...that...good! My travel partner had the same opinion with a different massage therapist. The location is about ten minutes from Uptown Sedona on south SR 89A. It\'s near Fay Canyon, LuLu\'s chocolate, Chocolatree, and around the corner from Kachina House. All are worth a stop, too. I will return here next time I visit Sedona!'),
(13, 'raju', '9457133485', 'raju867@gmail.com', 'haiiii...'),
(14, 'jishnu', '98423672414', 'jishnu423@gmail.com', 'haiii spa....'),
(15, 'Raneesh M.R', '945617325', 'raneesh32@gmail.com', 'l like services....');

-- --------------------------------------------------------

--
-- Table structure for table `giftvouchers`
--

CREATE TABLE `giftvouchers` (
  `gift_id` int(11) NOT NULL,
  `gift_name` varchar(50) NOT NULL,
  `gift_description` text NOT NULL,
  `gift_price` varchar(50) NOT NULL,
  `gift_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giftvouchers`
--

INSERT INTO `giftvouchers` (`gift_id`, `gift_name`, `gift_description`, `gift_price`, `gift_image`) VALUES
(1, 'VLCC Diamond Facial Kit gift voucher', 'VLCC Diamond Facial Kit is a potent and effective way to look beautiful and keep your skin in the best condition. Indulge in a rich spa treatment every time you do a facial at home with this VLCC Diamond Facial Kit which is brought to you by purplle.com, one of India’s leading beauty destinations. This facial kit for skin polishing and purification comes with a diamond scrub, a diamond detox lotion, a diamond massage gel and a diamond wash-off mask. The natural ingredients in the composition help to provide you with an instant glow. The diamond scrub acts as an exfoliator which removes dead cells and also removes blackheads and whiteheads. The diamond detox lotion refreshes and regenerates skin tissue while cooling it down. The diamond massage gel helps combat fine lines and wrinkles, thereby reversing skin ageing. The diamond wash-off mask helps nourish and moisturise the skin to leave it soft and glowing. Formulated using rich ingredients, this facial kit will help in perfectly purifying, brightening and polishing the skin. So get that absolutely gorgeous looking skin by bringing home this VLCC Diamond Facial Kit.                                                            ', '300', 'VLCC-diamond-facial-kit-702x331.jpg\r\n\r\n\r\n\r\n'),
(4, 'Keshohills ultra herbal hair care gift voucher', 'Herbal Hair packs are a paste of powdered herbs that nourish, hydrate the hair and promote its growth. This recipe uses a balanced combination of ayurvedic herbs known to benefit and strengthen the hair. With regular use (once a week or every two weeks) your hair will grow longer, thicker and will become stronger. Be warned that this pack can darken your hair so it might not be appropriate for lighter hair.                                                       ', '600', 'keshohills-ultra-kit-250x250.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gift_order`
--

CREATE TABLE `gift_order` (
  `order_id` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `voucher_price` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_mobile` varchar(20) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_email` varchar(50) NOT NULL,
  `receiver_address` text NOT NULL,
  `receiver_mobile` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift_order`
--

INSERT INTO `gift_order` (`order_id`, `voucher_id`, `voucher_price`, `sender_name`, `sender_email`, `sender_mobile`, `receiver_name`, `receiver_email`, `receiver_address`, `receiver_mobile`, `message`, `date`, `time`, `order_time`) VALUES
(6, 4, '600', 'Nidheesh M.R', 'nidheeshmr84@gmail.com', '9456871233', 'Vishnu P.V', 'vishnupv23@gmail.com', 'payyappatt house, palazhi p.o, manaloor,thrissur-680617,kerala', '8475912456', 'This is gift for You , My Friend....', '2017-05-25', 'between 10am and 4pm', '2017-05-19 06:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`image_id`, `image_name`) VALUES
(3, '3-ladies-chatting-in-wicker-pods-(side-view)-for-web_002.jpg'),
(5, 'Body1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `service_description` text NOT NULL,
  `service_image` varchar(500) NOT NULL,
  `service_price` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_description`, `service_image`, `service_price`, `category_id`, `type`) VALUES
(1, 'BRIDAL TRIAL HAIR ', 'It wedding special hair style for bridal.\nwe have lots of experience in this sytle.. ', 'wedding-hair-trial-1.jpg', '5000', 1, 'both'),
(2, 'AROMATHERAPY FACIAL', 'A customized facial designed using select essential oils to promote stress-relieving properties, induce relaxation, and address all skin types. This is also good for sensitive skin or skin prone to rashes, eczema, or acne.                                                             ', 'Aromatherapy.jpg', '250', 4, 'shop'),
(3, 'GEL POLISH MANICURE', 'Get the upper hand with our chip-resistant, mirror-finish gel polish that requires no drying time and can last up to two weeks.  Nails and cuticles are detailed and hands and arms will be treated to a warm cream massage. To maintain your perfect 10, a maintenance visit every two weeks is recommended: includes a complimentary soak-off.\r\n                                                                                ', 'Gel Manicure.jpg', '150', 2, 'both'),
(4, 'COLLAGEN EYE', 'Fine lines are plumped, skin is tightened, elasticity is improved and moisture is restored with a pure collagen mask.                                                                \r\n                                                            ', 'collagen gold eye mask model.jpg', '300', 5, 'home'),
(5, 'SEASONAL BODY TREATMENT', 'Exfoliate and condition your skin with our seasonal scrub. Made with sugar, salt crystals, shea butter, and our 72 trace mineral complex, it provides a full body detox. Finish with a restorative body massage, featuring our hydrating mineral cream.\r\n                                                                                                    ', 'mud-treatment-image_1_orig.png', '5000', 3, 'shop'),
(9, ' Kids Facial', 'An excellent way to kick start good skin care habits.                                                                                                                                                                                                             ', 'kids-and-spa2.jpeg', '250', 6, 'home'),
(10, ' REPECHAGE 4 LAYER FACIAL', 'Our premier facial treatment. Experience layer upon layer of pure, fresh European seaweed to help rejuvenate, tone and firm the appearance of the skin dramatically. Enjoy a cool seaweed mask, followed by a mineral-rich thermal mask that allows for total relaxation and wow results. Skin is cleaner and younger looking. See the difference. Every step of the facial is a uni-dose preparation only opened and used at the time of the application.                                                                       ', 'facials1.jpg', '5000', 4, 'shop');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `user_type`, `password`, `image`, `register_time`) VALUES
(3, 'Raneesh M.R', 'raneesh123@gmail.com', '3', 'hai123', '', '2017-04-26 12:37:35'),
(4, 'Nidheesh M.R', 'nidheeshmr93@gmail.com', '1', 'hai123', 'Nidheesh.jpg', '2017-05-10 11:15:10'),
(5, 'Vishnu p.v', 'vishnupayyappatt01@gmail.com', '2', 'hai123', 'user8-128x1281.jpg', '2017-05-22 11:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`user_type_id`, `user_type_name`) VALUES
(1, 'Super Admin'),
(2, 'Developer'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `video_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`video_id`, `video_name`, `video_address`) VALUES
(1, 'EM Luxury Spa Video', 'https://www.youtube.com/embed/QC9oLBCVTQg'),
(2, 'How to use Loreal hair spa', 'https://www.youtube.com/embed/rp9BRziqnDg'),
(3, 'Spa Facial Treatment for Women', 'https://www.youtube.com/embed/3vBmsIDAcng '),
(4, 'South Indian Bridal Hairstyles', 'https://www.youtube.com/embed/5EJX1-pNOMo?ecver=2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `giftvouchers`
--
ALTER TABLE `giftvouchers`
  ADD PRIMARY KEY (`gift_id`);

--
-- Indexes for table `gift_order`
--
ALTER TABLE `gift_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `voucher_id` (`voucher_id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_type_id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `giftvouchers`
--
ALTER TABLE `giftvouchers`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gift_order`
--
ALTER TABLE `gift_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gift_order`
--
ALTER TABLE `gift_order`
  ADD CONSTRAINT `gift_order_ibfk_1` FOREIGN KEY (`voucher_id`) REFERENCES `giftvouchers` (`gift_id`) ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
