-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2015 at 10:55 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` int(111) NOT NULL,
  `created_at` int(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'MD.imrul kais', 'md.imrulcse@gmail.com', '$2y$10$YqSzq.ii7vA5vAzuCeRDSO4jpjJ3r.dlH6R/IV6OpI1JPBT5Wx5qi', 2015, 2015),
(2, '', '', '$2y$10$.dbiLDq6vd93L8iOweQByun8X1UjqtwSO56MxFrOFmtq9MsWa7xHG', 2015, 2015),
(3, 'MD.imrul kais', 'iktokey@gmail.com', '$2y$10$4xqBotZ7AHicreUeZuQEkur5aYr/tF3qZQ2M3PqGHBiyPVbi47/au', 2015, 2015),
(4, 'sdfg', 'df@gmail.com', '$2y$10$RjxbDCoS5cbEwkWRKDYsJ.K5Uz0WAF85DORDgq5hpU3aWa6WF/X1.', 2015, 2015),
(5, 'md.imrulcse@gmail.com', 'md.imrulcse@gmail.com', '$2y$10$Yk/P3WMeDuw8eQq2sMFOGuIaSdfQ08Fa2xDmhS6cfFrxwbUcWh7T6', 2015, 2015),
(6, 'MD.imrul kais', 'iktokey@gmail.com', '$2y$10$.CkdPf2.cGM0GeFpUyM0ROtcq0zRCOA2YtZldR4RlIbmUTyceGP2q', 2015, 2015),
(7, 'sdfg', 'sdjkf@gmail.com', '$2y$10$NoT.TNGKT/Y7cCG8hpLbU.OcTRdd7Yxxvowb1ojnJNa6fsL5kk04O', 2015, 2015),
(8, 'MD.imrul kais', 'iktokey@gmail.com', '$2y$10$Agjbf6qOdTzLRRI8mTsvd.Nnj3xrpDImyVZnkFgXmwcQN4EAw/mtq', 2015, 2015),
(9, 'MD.imrul kais', 'md.imrulcse@gmail.com', '$2y$10$CoIYzRXzk8Mif1nfZOppuOSBEObx0.VFoL4fBP.ZTSwg2BzyZ9yA.', 2015, 2015),
(10, 'sdfg', 'iktokey@gmail.com', '$2y$10$CqTvQg5rnbS.4Zfb/KN.NuHUO0xsja/ZN3C/NSsVUDF6lC2F0Hx8C', 2015, 2015),
(11, 'MD.imrul kais', 'iktokey@gmail.com', '$2y$10$98NK1AsHbHsp8vQngGwPquRgbaAlkf8zCx/rzdoroYzHheb4DsTwa', 2015, 2015),
(12, 'sdfg', 'iktokey@gmail.com', '$2y$10$GkIiEBrGZFK9XzX1zqLIde0oEJqobNfMzM3WB.lJ2aKj1fncQFTX2', 2015, 2015),
(13, 'MD.imrul kais', 'sadf@g.com', '$2y$10$nABT1Uh/J91CVpR.jRmF6Okbk7KzU71RE3RDqLeT6bAuE0MnYqtyO', 2015, 2015);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
