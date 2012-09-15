
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=365 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` VALUES(1, NULL, NULL, NULL, 'controllers', 1, 124);
INSERT INTO `acos` VALUES(286, 1, NULL, NULL, 'Pages', 16, 19);
INSERT INTO `acos` VALUES(351, 305, NULL, NULL, 'AmazonSesEmails', 55, 58);
INSERT INTO `acos` VALUES(352, NULL, NULL, NULL, 'index', 175, 176);
INSERT INTO `acos` VALUES(353, 311, NULL, NULL, 'index', 62, 63);
INSERT INTO `acos` VALUES(354, 311, NULL, NULL, 'loginAsUser', 64, 65);
INSERT INTO `acos` VALUES(355, 313, NULL, NULL, 'index', 76, 77);
INSERT INTO `acos` VALUES(356, 319, NULL, NULL, 'index', 92, 93);
INSERT INTO `acos` VALUES(357, 332, NULL, NULL, 'index', 104, 105);
INSERT INTO `acos` VALUES(358, 332, NULL, NULL, 'viewStackTrace', 106, 107);
INSERT INTO `acos` VALUES(359, 340, NULL, NULL, 'index', 118, 119);
INSERT INTO `acos` VALUES(360, 340, NULL, NULL, 'view', 120, 121);
INSERT INTO `acos` VALUES(361, 347, NULL, NULL, 'index', 50, 51);
INSERT INTO `acos` VALUES(362, 351, NULL, NULL, 'index', 56, 57);
INSERT INTO `acos` VALUES(363, 275, NULL, NULL, 'deleteAllAmazonSesEmails', 10, 11);
INSERT INTO `acos` VALUES(364, 275, NULL, NULL, 'deleteAllNovakSolutionsErrors', 12, 13);
INSERT INTO `acos` VALUES(291, NULL, NULL, NULL, 'Acls', 139, 140);
INSERT INTO `acos` VALUES(290, 1, NULL, NULL, 'Acls', 24, 53);
INSERT INTO `acos` VALUES(288, 1, NULL, NULL, 'CronJobs', 20, 23);
INSERT INTO `acos` VALUES(289, NULL, NULL, NULL, 'index', 137, 138);
INSERT INTO `acos` VALUES(287, NULL, NULL, NULL, 'display', 135, 136);
INSERT INTO `acos` VALUES(350, 300, NULL, NULL, 'index', 46, 47);
INSERT INTO `acos` VALUES(346, 288, NULL, NULL, 'index', 21, 22);
INSERT INTO `acos` VALUES(347, 290, NULL, NULL, 'Acls', 49, 52);
INSERT INTO `acos` VALUES(348, NULL, NULL, NULL, 'index', 173, 174);
INSERT INTO `acos` VALUES(349, 293, NULL, NULL, 'validateAco', 36, 37);
INSERT INTO `acos` VALUES(292, NULL, NULL, NULL, 'index', 141, 142);
INSERT INTO `acos` VALUES(293, 290, NULL, NULL, 'Acos', 25, 38);
INSERT INTO `acos` VALUES(294, NULL, NULL, NULL, 'validateAco', 143, 144);
INSERT INTO `acos` VALUES(295, 293, NULL, NULL, 'index', 26, 27);
INSERT INTO `acos` VALUES(296, 293, NULL, NULL, 'add', 28, 29);
INSERT INTO `acos` VALUES(297, 293, NULL, NULL, 'edit', 30, 31);
INSERT INTO `acos` VALUES(298, 293, NULL, NULL, 'delete', 32, 33);
INSERT INTO `acos` VALUES(299, 293, NULL, NULL, 'rebuild', 34, 35);
INSERT INTO `acos` VALUES(300, 290, NULL, NULL, 'Permissions', 39, 48);
INSERT INTO `acos` VALUES(256, NULL, NULL, NULL, 'index', 127, 128);
INSERT INTO `acos` VALUES(249, NULL, NULL, NULL, 'validateAco', 125, 126);
INSERT INTO `acos` VALUES(276, 275, '', NULL, 'createMissingAcos', 4, 5);
INSERT INTO `acos` VALUES(278, NULL, NULL, NULL, 'Gods', 129, 130);
INSERT INTO `acos` VALUES(279, NULL, NULL, NULL, 'index', 131, 132);
INSERT INTO `acos` VALUES(301, NULL, NULL, NULL, 'index', 145, 146);
INSERT INTO `acos` VALUES(302, 300, NULL, NULL, 'add', 40, 41);
INSERT INTO `acos` VALUES(303, 300, NULL, NULL, 'edit', 42, 43);
INSERT INTO `acos` VALUES(304, 300, NULL, NULL, 'delete', 44, 45);
INSERT INTO `acos` VALUES(305, 1, NULL, NULL, 'AmazonSes', 54, 59);
INSERT INTO `acos` VALUES(306, NULL, NULL, NULL, 'AmazonSesEmails', 147, 148);
INSERT INTO `acos` VALUES(307, NULL, NULL, NULL, 'index', 149, 150);
INSERT INTO `acos` VALUES(308, 1, NULL, NULL, 'Nova', 60, 95);
INSERT INTO `acos` VALUES(309, NULL, NULL, NULL, 'Gods', 151, 152);
INSERT INTO `acos` VALUES(310, NULL, NULL, NULL, 'index', 153, 154);
INSERT INTO `acos` VALUES(311, 308, NULL, NULL, 'Gods', 61, 66);
INSERT INTO `acos` VALUES(312, NULL, NULL, NULL, 'loginAsUser', 155, 156);
INSERT INTO `acos` VALUES(313, 308, NULL, NULL, 'Groups', 67, 78);
INSERT INTO `acos` VALUES(314, NULL, NULL, NULL, 'index', 157, 158);
INSERT INTO `acos` VALUES(315, 313, NULL, NULL, 'view', 68, 69);
INSERT INTO `acos` VALUES(316, 313, NULL, NULL, 'add', 70, 71);
INSERT INTO `acos` VALUES(317, 313, NULL, NULL, 'edit', 72, 73);
INSERT INTO `acos` VALUES(318, 313, NULL, NULL, 'delete', 74, 75);
INSERT INTO `acos` VALUES(319, 308, NULL, NULL, 'Users', 79, 94);
INSERT INTO `acos` VALUES(320, NULL, NULL, NULL, 'index', 159, 160);
INSERT INTO `acos` VALUES(321, 319, NULL, NULL, 'view', 80, 81);
INSERT INTO `acos` VALUES(322, 319, NULL, NULL, 'add', 82, 83);
INSERT INTO `acos` VALUES(323, 319, NULL, NULL, 'edit', 84, 85);
INSERT INTO `acos` VALUES(324, 319, NULL, NULL, 'delete', 86, 87);
INSERT INTO `acos` VALUES(325, 319, NULL, NULL, 'login', 88, 89);
INSERT INTO `acos` VALUES(326, 319, NULL, NULL, 'logout', 90, 91);
INSERT INTO `acos` VALUES(327, 275, NULL, NULL, 'removeExtraAroRecords', 6, 7);
INSERT INTO `acos` VALUES(328, 275, NULL, NULL, 'removeExtraContactRecords', 8, 9);
INSERT INTO `acos` VALUES(329, 1, NULL, NULL, 'NovakSolutionsErrorLogging', 96, 109);
INSERT INTO `acos` VALUES(330, NULL, NULL, NULL, 'NovakSolutionsErrors', 161, 162);
INSERT INTO `acos` VALUES(331, NULL, NULL, NULL, 'index', 163, 164);
INSERT INTO `acos` VALUES(332, 329, NULL, NULL, 'NovakSolutionsErrors', 97, 108);
INSERT INTO `acos` VALUES(333, NULL, NULL, NULL, 'viewStackTrace', 165, 166);
INSERT INTO `acos` VALUES(334, 332, NULL, NULL, 'test', 98, 99);
INSERT INTO `acos` VALUES(335, 332, NULL, NULL, 'hide', 100, 101);
INSERT INTO `acos` VALUES(336, 332, NULL, NULL, 'hideAll', 102, 103);
INSERT INTO `acos` VALUES(337, 1, NULL, NULL, 'Settings', 110, 123);
INSERT INTO `acos` VALUES(338, NULL, NULL, NULL, 'Settings', 167, 168);
INSERT INTO `acos` VALUES(339, NULL, NULL, NULL, 'index', 169, 170);
INSERT INTO `acos` VALUES(340, 337, NULL, NULL, 'Settings', 111, 122);
INSERT INTO `acos` VALUES(222, 1, '', NULL, 'nova', 2, 15);
INSERT INTO `acos` VALUES(341, NULL, NULL, NULL, 'view', 171, 172);
INSERT INTO `acos` VALUES(342, 340, NULL, NULL, 'add', 112, 113);
INSERT INTO `acos` VALUES(343, 340, NULL, NULL, 'edit', 114, 115);
INSERT INTO `acos` VALUES(344, 340, NULL, NULL, 'delete', 116, 117);
INSERT INTO `acos` VALUES(345, 286, NULL, NULL, 'display', 17, 18);
INSERT INTO `acos` VALUES(281, NULL, NULL, NULL, 'loginAsUser', 133, 134);
INSERT INTO `acos` VALUES(275, 222, '', NULL, 'Utilities', 3, 14);

-- --------------------------------------------------------

--  --
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` VALUES(1, NULL, 'Group', 1, 'Administrators', 8, 9);
INSERT INTO `aros` VALUES(2, NULL, 'Group', 1, 'Administrators', 1, 4);
INSERT INTO `aros` VALUES(10, NULL, 'Group', 2, 'users', 15, 16);
INSERT INTO `aros` VALUES(7, NULL, 'Group', 7, 'small gods', 11, 12);
INSERT INTO `aros` VALUES(9, NULL, 'Group', 5, 'gods', 7, 10);
INSERT INTO `aros` VALUES(128, 2, 'User', 123, 'admin@example.com', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` VALUES(1, 9, 1, '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES(46, 2, 286, '1', '1', '1', '1');