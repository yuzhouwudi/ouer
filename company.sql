-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-04-22 12:01:55
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- 表的结构 `active`
--

CREATE TABLE IF NOT EXISTS `active` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img` varchar(2000) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(4000) NOT NULL,
  `time` date NOT NULL,
  `des` varchar(100) NOT NULL,
  `count` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `active`
--

INSERT INTO `active` (`id`, `img`, `title`, `content`, `time`, `des`, `count`) VALUES
(1, '/aa/company/assets/upload/2018-04-19/1524136347.0039aaaaaaa1.jpg', '2018厦门国际时装周', '在厦门市政府的大力支持下，由厦门国际时尚周组委会主办2017厦门国际时尚周，吸引了众多国内外优质时尚资源汇聚厦门', '2018-03-08', '结合中国民族文化特色，极具有东方色彩', '34'),
(2, '/aa/company/assets/upload/2018-04-19/1524134497.0316jiayi1.png', '中式嫁衣设计大赛', '本次中国民族服装设计大赛嫁衣总决赛金奖获得者13号选手获奖作品盛世红妆，符合本次大赛主题', '2018-04-12', '中国婚纱领军人物', '6'),
(3, '/aa/company/assets/upload/2018-04-19/1524134507.054a123.jpg', '2018国际婚纱设计大赛', '这场备受瞩目的婚纱盛宴还融合了闽绣精湛工艺，闽绣以其鲜艳的色彩，夸张的手法，烘托出婚纱礼服华美大气的视觉效果，为婚服更添喜庆吉', '2018-04-10', '获得吉尼斯世界纪录', '5'),
(4, '/aa/company/assets/upload/2018-04-19/1524136365.1465Cccc2.jpg', '蔡美月绽放纽约时装周', '这场备受瞩目的婚纱盛宴还融合了闽绣精湛工艺，闽绣以其鲜艳的色彩，夸张的手法，烘托出婚纱礼服华美大气的视觉效果，为婚服更添喜庆吉', '2018-03-23', '呈现精湛的千年闽秀工艺', '8'),
(5, '/aa/company/assets/upload/2018-04-19/1524100507.8992pic-list8.png', '蔡美月国际婚纱回顾', '这一中华民族寓意幸福和繁衍不息的理念，将母亲对孩子的美好祝福，吉祥美满的寓意用一件件匠心独运的嫁衣的形式呈现出来', '2018-03-18', '蔡美月为全天下女人做嫁衣  ', '5'),
(6, '/aa/company/assets/upload/2018-04-19/1524101013.3983hd111.jpg', '中国杰出女民营企业家', '独特的蔡氏镂空刺绣法荣获国家五项专利，在婚纱界乃至全世界都是别具一格的。蔡美月将东方传统文化结合闽秀千年传承技艺融入现代婚纱礼', '2018-02-14', '中国婚纱领军人物', '6'),
(7, '/aa/company/assets/upload/2018-04-19/1524101114.2147hd222_02.png', '蔡美月&车主名流', '这场备受瞩目的婚纱盛宴还融合了闽绣精湛工艺，闽绣以其鲜艳的色彩，夸张的手法，烘托出婚纱礼服华美大气的视觉效果', '2018-04-18', '定格一瞬，传承一生', '5'),
(8, '/aa/company/assets/upload/2018-04-19/1524104289.1713pic-list7.png', '一顾再顾 九九归一', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">九九归一”的吉祥数字“9”，演绎压轴款9层衣。在日本，传统白色婚礼服因为有12层被称为12单，因而9层衣被称为9单。与此同时，李夫人的画像则经由技艺卓绝的苏绣形式在裙摆上生动呈现，秋波流转，神采绰约，让人不禁一顾，再顾，吟唱出那曲《北方有佳人》！</span>', '2018-03-28', '以中国传统文化中代表着无限', '6');

-- --------------------------------------------------------

--
-- 表的结构 `activedeatil`
--

CREATE TABLE IF NOT EXISTS `activedeatil` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `etitle` varchar(1000) NOT NULL,
  `content` varchar(4000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `activedeatil`
--

INSERT INTO `activedeatil` (`id`, `pid`, `title`, `etitle`, `content`) VALUES
(1, 1, '中国原创设计师的创意力量  /', 'China''s creative power', '此次时装秀场地再次聚焦在纽约时装周主办方CFDA指定的著名四大主场之一的59号码头（Pier 59）。这场备受瞩目的婚纱盛宴还'),
(2, 1, '独特的设计手法  ', 'Unique design techniques', '其独特的蔡氏镂空刺绣法荣获国家五项专利，在婚纱界乃至全世界都是别具一格的。蔡美月将东方传统文化结合闽秀千年传承技艺融入现代婚纱精湛工艺，闽绣以其鲜艳的色彩，夸张的手法，烘托出婚纱礼服华美大气的视觉效果，为婚服更添喜庆吉祥的色彩。'),
(3, 1, '中国婚纱第一人  ', 'Chinese wedding first person', '被誉为“中国婚纱第一人”的中国著名设计师蔡美月曾连续三年获得中国十佳设计师称号，并多次获邀为博鳌论坛，多哈亚运会等各大盛事代表.中国婚纱文化展示“时尚秀”，2010年在北京钓鱼台国宾馆荣获“中国纺织服装行业十大风云人物”。'),
(4, 1, '不抄袭、不仿制的信念  ', 'Chinese wedding first person ', '二十年来，作为品牌创始人蔡美月坚持不抄袭不仿冒，始终致力于中国传统嫁衣文化的传承和推广，在精美的设计中融入传统民族元素，设计灵感引用“带代相传”——这一中华民族寓意幸福和繁衍不息的理念，将母亲对孩子的美好祝福，吉祥美满的寓意用一件件匠心独运的嫁衣的形式呈现出来。'),
(5, 1, '', '', 'Twenty years ago, as the founder of the brand, Cai Mei-yue insisted on not copying and not imitating. He always devoted himself to the inheritance and promotion of Chinese traditional wedding dress culture.&nbsp;<br />\r\n<div>\r\n	<br />\r\n</div>'),
(6, 1, '', '', 'In the beautiful design, he incorporated the traditional national elements. The inspiration of design was quoted from generation to generation.'),
(7, 2, '高级定制春夏', 'High custom in spring and summer', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">作为唯一进驻巴黎大皇宫的高定婚纱设计师，兰玉女士已经是第五次在巴黎向时尚界展示她的创作。本次作品的灵感源自20世纪早期和中期的西方复古风潮，完全女性化的廓形；</span>'),
(8, 2, '重现30年代复古沙龙', 'Reappearance of the 30s retro Salon', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">艺术展依然选择在巴黎大皇宫内进行，整个秀场被改造成30年代的复古沙龙，水晶灯的倒影折射到精美的珠绣礼服上，流光溢彩的复古摩登。一改往日恢弘的舞台设置，此次从古董吊灯、欧式古典沙发到供应茶点的宫廷式手推车，使人时刻感觉置身20世纪中期的华丽优雅。延续品牌一贯传播东方美学的初衷，每一款礼服的设计都融入古典东方元素。</span>'),
(9, 2, '高端工艺打造精致细节', 'High end craftsmanship', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">设计师兰玉成长自苏绣世家，对手工艺有着极高的要求。LANYU Haute Couture也秉承了注重手工艺的特点。此次除了家传的“兰氏绣坊”再一次大展技艺，绣娘们贡献了最美的手工点缀于礼服上。手工珠绣、蕾丝和流苏也被大量运用于领口，后背，腰间和袖口。胸前和裙摆的位置则使用网纱、珍珠、亮片和管状手工装饰予以点缀。</span>'),
(10, 2, '性感完美展现', ' 性感完美展现 Sexy and perfect display', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">新系列高定展示服装线条细长且狭窄，流线型的剪裁，达到贴身的惊艳效果。穿插使用在双肩及袖筒的透明薄纱令肌肤若隐若现，使层叠的服装仍旧能透露出东方美学的性感。</span>'),
(11, 2, '', '', 'The 1920 of the "golden age" is full of extravagant atmosphere, and Lan Yu redefines and presents the age of 100 years, with the blend of Oriental Aesthetics and Western classical profile, which brings us back to the "Jazz Age" of the wine.<br />\r\n&nbsp;&nbsp;<br />'),
(12, 2, '', '', 'In addition to the case of embroidery, flowers stereo decoration, has become part of the clothing display manual. On the material, the silk fabric of the metallic luster and the silk of the velvet texture are filled with the ancient two party and the quadrangle pattern, and the geometric device art is obviously visible.&nbsp;'),
(13, 3, '携不可方物之美', 'The beauty of carrying non parties', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">北方有佳人，绝世而独立。一顾倾人城，再顾倾人国。宁不知倾城与倾国？佳人难再得！”西汉人李延年的诗句悠远流传，设计师兰玉则被诗中李夫人绝色善舞的风姿深深震撼，以此为灵感，这位85后的年轻设计师将自己潜心设计、融入奢美苏绣和精湛手工的心血之作一一呈现，融入独特廓形和摩登设计，再现李夫人绝世独立之美，以倾国倾城、摄人心魄的中国女性魅力征服巴黎大皇宫。</span>'),
(14, 3, '绝世之美 倾国倾城', 'Peerless beauty beauty', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">北方有佳人，绝世而独立。一顾倾人城，再顾倾人国。宁不知倾城与倾国？佳人难再得！”西汉人李延年的诗句悠远流传，设计师兰玉则被诗中李夫人绝色善舞的风姿深深震撼，以此为灵感，这位85后的年轻设计师将自己潜心设计、融入奢美苏绣和精湛手工的心血之作一一呈现，融入独特廓形和摩登设计，再现李夫人绝世独立之美，以倾国倾城、摄人心魄的中国女性魅力征服巴黎大皇宫。</span>'),
(15, 3, '东方色彩 禅意化境', 'Oriental Zen sublimation', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">色板则更具东方禅意化境，与LANYU品牌十年回归初心的意念遥相呼应：竹青色、鸦青色、檀色、黛蓝色和胭脂色，而淡雅的灰色、白色则与赤色相衬。</span><span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">季最为鲜明的解构设计元素营造出前所未有的震撼效果：汉服中“交领右衽”、“系带隐扣” 的特点被突显和扩大，层层叠叠的“交领右衽”形成强烈的戏剧感。</span>'),
(16, 3, '东方色彩 禅意化境', 'Oriental Zen sublimation', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">色板则更具东方禅意化境，与LANYU品牌十年回归初心的意念遥相呼应：竹青色、鸦青色、檀色、黛蓝色和胭脂色，而淡雅的灰色、白色则与赤色相衬。</span><span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">季最为鲜明的解构设计元素营造出前所未有的震撼效果：汉服中“交领右衽”、“系带隐扣” 的特点被突显和扩大，层层叠叠的“交领右衽”形成强烈的戏剧感。</span>'),
(17, 3, '', '', 'The most striking deconstruction design elements of the season have created an unprecedented shock. The characteristics of the "cross - collar right" and "tied buckles" in the Han Dynasty are highlighted and expanded, and the overlapping "cross - collar right" forms a strong sense of drama'),
(18, 3, '', '', 'On the material, the silk fabric of the metallic luster and the silk of the velvet texture are filled with the ancient two party and the quadrangle pattern, and the geometric device art is obviously visible.&nbsp;'),
(19, 4, '不抄袭、不仿制的信念  ', 'Chinese wedding first person ', '二十年来，作为品牌创始人蔡美月坚持不抄袭不仿冒，始终致力于中国传统嫁衣文化的传承和推广，在精美的设计中融入传统民族元素，设计灵感引用“带代相传”——这一中华民族寓意幸福和繁衍不息的理念，将母亲对孩子的美好祝福，吉祥美满的寓意用一件件匠心独运的嫁衣的形式呈现出来。'),
(20, 4, '性感完美展现', ' 性感完美展现 Sexy and perfect display', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">新系列高定展示服装线条细长且狭窄，流线型的剪裁，达到贴身的惊艳效果。穿插使用在双肩及袖筒的透明薄纱令肌肤若隐若现，使层叠的服装仍旧能透露出东方美学的性感。</span>'),
(21, 4, '独特的设计手法  ', 'Unique design techniques', '其独特的蔡氏镂空刺绣法荣获国家五项专利，在婚纱界乃至全世界都是别具一格的。蔡美月将东方传统文化结合闽秀千年传承技艺融入现代婚纱精湛工艺，闽绣以其鲜艳的色彩，夸张的手法，烘托出婚纱礼服华美大气的视觉效果，为婚服更添喜庆吉祥的色彩。'),
(22, 4, '东方色彩 禅意化境', 'Oriental Zen sublimation', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">色板则更具东方禅意化境，与LANYU品牌十年回归初心的意念遥相呼应：竹青色、鸦青色、檀色、黛蓝色和胭脂色，而淡雅的灰色、白色则与赤色相衬。</span><span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">季最为鲜明的解构设计元素营造出前所未有的震撼效果：汉服中“交领右衽”、“系带隐扣” 的特点被突显和扩大，层层叠叠的“交领右衽”形成强烈的戏剧感。</span>'),
(23, 4, '', '', 'The 1920 of the "golden age" is full of extravagant atmosphere, and Lan Yu redefines and presents the age of 100 years, with the blend of Oriental Aesthetics and Western classical profile, which brings us back to the "Jazz Age" of the wine.<br />\r\n&nbsp;&nbsp;<br />'),
(24, 4, '', '', 'On the material, the silk fabric of the metallic luster and the silk of the velvet texture are filled with the ancient two party and the quadrangle pattern, and the geometric device art is obviously visible.&nbsp;'),
(25, 5, '绝世之美 倾国倾城', 'Peerless beauty beauty', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">北方有佳人，绝世而独立。一顾倾人城，再顾倾人国。宁不知倾城与倾国？佳人难再得！”西汉人李延年的诗句悠远流传，设计师兰玉则被诗中李夫人绝色善舞的风姿深深震撼，以此为灵感，这位85后的年轻设计师将自己潜心设计、融入奢美苏绣和精湛手工的心血之作一一呈现，融入独特廓形和摩登设计，再现李夫人绝世独立之美，以倾国倾城、摄人心魄的中国女性魅力征服巴黎大皇宫。</span>'),
(26, 5, '中国原创设计师的创意力量  /', 'China''s creative power', '此次时装秀场地再次聚焦在纽约时装周主办方CFDA指定的著名四大主场之一的59号码头（Pier 59）。这场备受瞩目的婚纱盛宴还'),
(27, 5, '中国婚纱第一人  ', 'Chinese wedding first person', '被誉为“中国婚纱第一人”的中国著名设计师蔡美月曾连续三年获得中国十佳设计师称号，并多次获邀为博鳌论坛，多哈亚运会等各大盛事代表.中国婚纱文化展示“时尚秀”，2010年在北京钓鱼台国宾馆荣获“中国纺织服装行业十大风云人物”。'),
(28, 5, '重现30年代复古沙龙', 'Reappearance of the 30s retro Salon', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">艺术展依然选择在巴黎大皇宫内进行，整个秀场被改造成30年代的复古沙龙，水晶灯的倒影折射到精美的珠绣礼服上，流光溢彩的复古摩登。一改往日恢弘的舞台设置，此次从古董吊灯、欧式古典沙发到供应茶点的宫廷式手推车，使人时刻感觉置身20世纪中期的华丽优雅。延续品牌一贯传播东方美学的初衷，每一款礼服的设计都融入古典东方元素。</span>'),
(29, 5, '', '', 'On the material, the silk fabric of the metallic luster and the silk of the velvet texture are filled with the ancient two party and the quadrangle pattern, and the geometric device art is obviously visible.&nbsp;'),
(30, 5, '', '', 'Twenty years ago, as the founder of the brand, Cai Mei-yue insisted on not copying and not imitating. He always devoted himself to the inheritance and promotion of Chinese traditional wedding dress culture.&nbsp;<br />\r\n<div>\r\n	<br />\r\n</div>'),
(31, 6, '绝世之美 倾国倾城', 'Peerless beauty beauty', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">北方有佳人，绝世而独立。一顾倾人城，再顾倾人国。宁不知倾城与倾国？佳人难再得！”西汉人李延年的诗句悠远流传，设计师兰玉则被诗中李夫人绝色善舞的风姿深深震撼，以此为灵感，这位85后的年轻设计师将自己潜心设计、融入奢美苏绣和精湛手工的心血之作一一呈现，融入独特廓形和摩登设计，再现李夫人绝世独立之美，以倾国倾城、摄人心魄的中国女性魅力征服巴黎大皇宫。</span>'),
(32, 6, '高级定制春夏', 'High custom in spring and summer', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">作为唯一进驻巴黎大皇宫的高定婚纱设计师，兰玉女士已经是第五次在巴黎向时尚界展示她的创作。本次作品的灵感源自20世纪早期和中期的西方复古风潮，完全女性化的廓形；</span>'),
(33, 6, '高端工艺打造精致细节', 'High end craftsmanship', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">设计师兰玉成长自苏绣世家，对手工艺有着极高的要求。LANYU Haute Couture也秉承了注重手工艺的特点。此次除了家传的“兰氏绣坊”再一次大展技艺，绣娘们贡献了最美的手工点缀于礼服上。手工珠绣、蕾丝和流苏也被大量运用于领口，后背，腰间和袖口。胸前和裙摆的位置则使用网纱、珍珠、亮片和管状手工装饰予以点缀。</span>'),
(34, 6, '性感完美展现', ' 性感完美展现 Sexy and perfect display', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">新系列高定展示服装线条细长且狭窄，流线型的剪裁，达到贴身的惊艳效果。穿插使用在双肩及袖筒的透明薄纱令肌肤若隐若现，使层叠的服装仍旧能透露出东方美学的性感。</span>'),
(35, 6, '', '', 'In the beautiful design, he incorporated the traditional national elements. The inspiration of design was quoted from generation to generation.'),
(36, 6, '', '', 'In addition to the case of embroidery, flowers stereo decoration, has become part of the clothing display manual. On the material, the silk fabric of the metallic luster and the silk of the velvet texture are filled with the ancient two party and the quadrangle pattern, and the geometric device art is obviously visible.&nbsp;'),
(37, 7, '东方色彩 禅意化境', 'Oriental Zen sublimation', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">色板则更具东方禅意化境，与LANYU品牌十年回归初心的意念遥相呼应：竹青色、鸦青色、檀色、黛蓝色和胭脂色，而淡雅的灰色、白色则与赤色相衬。</span><span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">季最为鲜明的解构设计元素营造出前所未有的震撼效果：汉服中“交领右衽”、“系带隐扣” 的特点被突显和扩大，层层叠叠的“交领右衽”形成强烈的戏剧感。</span>'),
(38, 7, '独特的设计手法  ', 'Unique design techniques', '其独特的蔡氏镂空刺绣法荣获国家五项专利，在婚纱界乃至全世界都是别具一格的。蔡美月将东方传统文化结合闽秀千年传承技艺融入现代婚纱精湛工艺，闽绣以其鲜艳的色彩，夸张的手法，烘托出婚纱礼服华美大气的视觉效果，为婚服更添喜庆吉祥的色彩。'),
(39, 7, '东方色彩 禅意化境', 'Oriental Zen sublimation', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">色板则更具东方禅意化境，与LANYU品牌十年回归初心的意念遥相呼应：竹青色、鸦青色、檀色、黛蓝色和胭脂色，而淡雅的灰色、白色则与赤色相衬。</span><span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">季最为鲜明的解构设计元素营造出前所未有的震撼效果：汉服中“交领右衽”、“系带隐扣” 的特点被突显和扩大，层层叠叠的“交领右衽”形成强烈的戏剧感。</span>'),
(40, 7, '重现30年代复古沙龙', 'Reappearance of the 30s retro Salon', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">艺术展依然选择在巴黎大皇宫内进行，整个秀场被改造成30年代的复古沙龙，水晶灯的倒影折射到精美的珠绣礼服上，流光溢彩的复古摩登。一改往日恢弘的舞台设置，此次从古董吊灯、欧式古典沙发到供应茶点的宫廷式手推车，使人时刻感觉置身20世纪中期的华丽优雅。延续品牌一贯传播东方美学的初衷，每一款礼服的设计都融入古典东方元素。</span>'),
(41, 7, '', '', 'On the material, the silk fabric of the metallic luster and the silk of the velvet texture are filled with the ancient two party and the quadrangle pattern, and the geometric device art is obviously visible.&nbsp;'),
(42, 7, '', '', 'In the beautiful design, he incorporated the traditional national elements. The inspiration of design was quoted from generation to generation.'),
(43, 8, '琴弦合奏 柔美空灵', 'The string ensemble is soft and beautiful', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">著名音乐人林海特别为LANYU 2015秋冬高定系列发布秀创作走秀音乐。作品融合了浓郁的中国与西方元素，音乐中水滴声贯穿全曲，融合着古琴柔美空灵的音色，一直到末段竹笛主旋律的出现，都在描绘李夫人的柔美之姿。而曲目中编钟的出现，展现皇家宫廷的庄严；中国民族打击乐的加入，更将全盛时期的汉朝繁荣展现的淋漓尽致。</span>'),
(44, 8, '致敬古典', 'Pay tribute to Classicism', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">模特们在视线虚幻的艺术装置间穿行，华丽的时装流转出东方的爱情悲歌：第一部分的主题是传承，将新颖的裙装廓型与苏绣图案相结合，表达懵懂的爱意，是女性对爱情最初的理解；第二部分裙装华丽闪耀，代表热恋时的美丽与夺目。高级蕾丝定制工坊的金属光泽感蕾丝与红色水晶，将美感推向极致；</span>'),
(45, 8, '致敬古典', 'Pay tribute to Classicism', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">模特们在视线虚幻的艺术装置间穿行，华丽的时装流转出东方的爱情悲歌：第一部分的主题是传承，将新颖的裙装廓型与苏绣图案相结合，表达懵懂的爱意，是女性对爱情最初的理解；第二部分裙装华丽闪耀，代表热恋时的美丽与夺目。高级蕾丝定制工坊的金属光泽感蕾丝与红色水晶，将美感推向极致；</span>'),
(46, 8, '高定闪耀', 'High blazed', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">当设计师兰玉看到宋徽宗以“瘦金体”挥就的四个字：“蝶舞迷香”时，立即联想到化蝶般的“爱到哀伤”，这反而是女人所向往的爱情。从初遇爱人、热恋、到离伤，不同时期的女性有着不同的感受。兰玉由此获得启发，幻化出这一季廓型的灵感。<span class="Apple-converted-space">&nbsp;</span></span>'),
(47, 8, '高定闪耀', 'High blazed', '<span style="color:#888888;font-family:&quot;font-size:14px;background-color:#FFFFFF;">当设计师兰玉看到宋徽宗以“瘦金体”挥就的四个字：“蝶舞迷香”时，立即联想到化蝶般的“爱到哀伤”，这反而是女人所向往的爱情。从初遇爱人、热恋、到离伤，不同时期的女性有着不同的感受。兰玉由此获得启发，幻化出这一季廓型的灵感。<span class="Apple-converted-space">&nbsp;</span></span>'),
(48, 8, '', '', 'When designer Lan Yu saw Song Huizong''s four words with "thin gold body": "butterfly dance fan Xiang", it immediately associates butterfly like "love to sadness", but it is the love that women yearn for. From the first lover, love, from the wound, in different periods have different feelings.'),
(49, 8, '', '', 'The whole series of Suzhou inspiration classical painting, with extreme beauty presented one by one. As time stagnates, the scenery of beautiful mountains and rivers, flowers and birds, bees and butterflies are reborn in the fingertips of the master of Suzhou&nbsp;');

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nub` varchar(100) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(4000) NOT NULL,
  `des` varchar(100) NOT NULL,
  `pid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`id`, `nub`, `img`, `title`, `content`, `des`, `pid`, `cid`) VALUES
(1, '', '/aa/company/assets/upload/2018-04-19/1524103575.5872com-3.png', '设计师解读', '<p>\n	看到这件嫁衣就会不由自主的想起7彩云南的故事。云南云南，彩云之南，意为“云岭之南”又称“滇”，是战国时期滇族部落的生息之地。这便是彩云之南的由来。\n</p>\n<p>\n	整件礼服设计以凤穿牡丹为原型，加入宝蓝、酱紫、杏橙、金黄、银白、朱红、雀紫7种颜色，将一件对襟和服完整的呈现给大家。\n</p>\n<p>\n	穿上这件礼服的新娘都有一颗少女的心，看见这件礼服的宾客都会顷刻喜悦\n</p>\n<p>\n	这对襟服适合身材比较苗条的姑娘，显得气质非凡，优雅得体。\n</p>', '', 1, 1),
(2, '', '/aa/company/assets/upload/2018-04-20/1524188064.2978pic-xiangqing7.png--/aa/company/assets/upload/2018-04-20/1524188064.3238pic-xiangqing8.png', 'PRODUCT', '品牌：蔡美月&nbsp; &nbsp; &nbsp;货号：S1151-6<br />\r\n颜色：红色&nbsp; &nbsp; &nbsp; &nbsp; 重量：1.56kg<br />\r\n尺码：XS/S/M/L/XL/XXL<br />\r\n款式：马来福秀禾服<br />\r\n面料：高级织锦缎、弹力印花布<br />\r\n版型：修身版型、A摆双飘片群<br />\r\n图案：凤穿牡丹、七彩祥云<br />\r\n厚薄指数：适中<br />\r\n弹力指数：微弹<br />\r\n软硬指数：微软<br />', '', 2, 1),
(3, 'one', '/aa/company/assets/upload/2018-04-20/1524185919.7301afh_02.png--/aa/company/assets/upload/2018-04-20/1524185919.8508adf_02.png', 'DESIGN', '&nbsp; &nbsp;一改传统秀禾服宽体直胳<br />\r\n的宽松体型<br />\r\n更加凸显江南女子的温婉气息<br />', '立体剪裁袖手显瘦版型', 3, 1),
(4, 'two', '/aa/company/assets/upload/2018-04-20/1524184573.8233pic-xiangqing12.png--/aa/company/assets/upload/2018-04-20/1524184574.2386pic-xiangqing14.png', '', '&nbsp; &nbsp;裙子采用弹力印花面料<br />\r\n更显立体感<br />\r\n面料成本是普通绸缎面料的5倍<br />', '独家印花百褶裙设计', 3, 1),
(6, 'three', '/aa/company/assets/upload/2018-04-20/1524185296.6816afh_02.png--/aa/company/assets/upload/2018-04-20/1524185296.7847adf_02.png', '', '内衬选用优质布料，<br />\r\n进行细腻柔和压边处理<br />\r\n是无可挑剔的闺中精品<br />', '细腻柔和内衬压边处理', 3, 1),
(7, '', '/aa/company/assets/upload/2018-04-19/1524105147.6111pic-xiangqing9.png', '01 传统古典盘扣立领', '古韵十足的传统立领设计复古金色盘扣<br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', 'TYPE', 4, 1),
(8, '', '/aa/company/assets/upload/2018-04-19/1524105195.7938pic-xiangqing10.png', '02对襟中式嫁衣', '古韵十足的传统立领设计复古金色盘扣<br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', '', 4, 1),
(9, '', '/aa/company/assets/upload/2018-04-19/1524105229.4487pic-xiangqing11.png', '03 中式印花双层水秀', '古韵十足的传统立领设计复古金色盘扣<br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;精细设计，精致大气<br />', '', 4, 1),
(10, '', '/aa/company/assets/upload/2018-04-19/1524105279.4416pic-xiangqing12.png', '04吉祥彩凤精致刺绣', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', '', 4, 1),
(11, '', '/aa/company/assets/upload/2018-04-19/1524105358.4841pic-xiangqing14.png--/aa/company/assets/upload/2018-04-19/1524105358.5721pic-xiangqing13.png', 'GOODS', '', '', 5, 1),
(12, '', '/aa/company/assets/upload/2018-04-19/1524106512.4611PRODUCT.jpg', '亚历山大·王', '看到这件嫁衣就会不由自主的想起7彩云南的故事。云南云南，彩云之南，意为“云岭之南”又称“滇”，是战国时期滇族部落的生息之地。这便是彩云之南的由来。<br />\r\n整件礼服设计以凤穿牡丹为原型，加入宝蓝、酱紫、杏橙、金黄、银白、朱红、雀紫7种颜色，将一件对襟和服完整的呈现给大家。<br />\r\n穿上这件礼服的新娘都有一颗少女的心，看见这件礼服的宾客都会顷刻喜悦<br />\r\n这对襟服适合身材比较苗条的姑娘，显得气质非凡，优雅得体。<br />\r\n<br />', '', 1, 2),
(13, 'one', '/aa/company/assets/upload/2018-04-20/1524185328.9509cc23.jpg--/aa/company/assets/upload/2018-04-20/1524185329.6892ee4.png', 'DESIGN', '&nbsp; &nbsp;一改传统秀禾服宽体直胳<br />\r\n的宽松体型<br />\r\n更加凸显江南女子的温婉气息<br />', '立体剪裁袖手显瘦版型', 3, 2),
(14, 'two', '/aa/company/assets/upload/2018-04-20/1524184675.6102pic-list8.png--/aa/company/assets/upload/2018-04-20/1524184675.7309nnn1.jpg', '', '&nbsp; &nbsp;裙子采用弹力印花面料<br />\r\n更显立体感<br />\r\n面料成本是普通绸缎面料的5倍<br />', '独家印花百褶裙设计', 3, 2),
(15, 'three', '/aa/company/assets/upload/2018-04-20/1524184704.0115TB2WlgAfNPI8KJjSspfXXcCFXXa_!!2232588585.jpg--/aa/company/assets/upload/2018-04-20/1524184704.1518TB2464mb8LN8KJjSZPhXXc.spXa_!!2232588585.jpg', '', '内衬选用优质布料，<br />\r\n进行细腻柔和压边处理<br />\r\n是无可挑剔的闺中精品<br />', '细腻柔和内衬压边处理', 3, 2),
(16, '', '/aa/company/assets/upload/2018-04-20/1524186070.8567huncha1.png--/aa/company/assets/upload/2018-04-20/1524186070.8806hunsha2.png', 'PRODUCT', '品牌：蔡美月&nbsp; &nbsp; &nbsp;货号：S1151-6<br />\r\n颜色：红色&nbsp; &nbsp; &nbsp; &nbsp; 重量：1.56kg<br />\r\n尺码：XS/S/M/L/XL/XXL<br />\r\n款式：马来福秀禾服<br />\r\n面料：高级织锦缎、弹力印花布<br />\r\n版型：修身版型、A摆双飘片群<br />\r\n图案：凤穿牡丹、七彩祥云<br />\r\n厚薄指数：适中<br />\r\n弹力指数：微弹<br />\r\n软硬指数：微软<br />', '', 2, 2),
(17, '', '/aa/company/assets/upload/2018-04-19/1524109747.15513.jpg', '01 传统古典盘扣立领', '古韵十足的传统立领设计复古金色盘扣<br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', 'TYPE', 4, 2),
(18, '', '/aa/company/assets/upload/2018-04-19/1524109757.89284.jpg', '02对襟中式嫁衣', '古韵十足的传统立领设计复古金色盘扣<br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', '', 4, 2),
(19, '', '/aa/company/assets/upload/2018-04-20/1524186400.1269aaaaaaa1.jpg', '03 中式印花双层水秀', '古韵十足的传统立领设计复古金色盘扣<br />\r\n精细设计，精致大气<br />', '', 4, 2),
(20, '', '/aa/company/assets/upload/2018-04-19/1524109788.73056.png', '04吉祥彩凤精致刺绣', '古韵十足的传统立领设计复古金色盘扣<br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;精细设计，精致大气<br />', '', 4, 2),
(21, '', '/aa/company/assets/upload/2018-04-20/1524186178.3269eeee2.jpg--/aa/company/assets/upload/2018-04-20/1524186178.3327Cccc2.jpg', '', '', '', 5, 2),
(22, '', '/aa/company/assets/upload/2018-04-19/1524103575.5872com-3.png', '设计师解读', '<p>\r\n	看到这件嫁衣就会不由自主的想起7彩云南的故事。云南云南，彩云之南，意为“云岭之南”又称“滇”，是战国时期滇族部落的生息之地。这便是彩云之南的由来。\r\n</p>\r\n<p>\r\n	整件礼服设计以凤穿牡丹为原型，加入宝蓝、酱紫、杏橙、金黄、银白、朱红、雀紫7种颜色，将一件对襟和服完整的呈现给大家。\r\n</p>\r\n<p>\r\n	穿上这件礼服的新娘都有一颗少女的心，看见这件礼服的宾客都会顷刻喜悦\r\n</p>\r\n<p>\r\n	这对襟服适合身材比较苗条的姑娘，显得气质非凡，优雅得体。\r\n</p>', '', 1, 3),
(23, '', '/aa/company/assets/upload/2018-04-20/1524188082.7354a123.jpg--/aa/company/assets/upload/2018-04-20/1524188082.7447aaaaa1.jpg', 'PRODUCT', '品牌：蔡美月&nbsp; &nbsp; &nbsp;货号：S1151-6<br />\r\n颜色：红色&nbsp; &nbsp; &nbsp; &nbsp; 重量：1.56kg<br />\r\n尺码：XS/S/M/L/XL/XXL<br />\r\n款式：马来福秀禾服<br />\r\n面料：高级织锦缎、弹力印花布<br />\r\n版型：修身版型、A摆双飘片群<br />\r\n图案：凤穿牡丹、七彩祥云<br />\r\n厚薄指数：适中<br />\r\n弹力指数：微弹<br />\r\n软硬指数：微软<br />', '', 2, 3),
(24, 'one', '/aa/company/assets/upload/2018-04-20/1524185355.0968axs_03.png--/aa/company/assets/upload/2018-04-20/1524185355.1399axs_05.png', 'DESIGN', '&nbsp; &nbsp;一改传统秀禾服宽体直胳<br />\r\n的宽松体型<br />\r\n更加凸显江南女子的温婉气息<br />', '立体剪裁袖手显瘦版型', 3, 3),
(25, 'two', '/aa/company/assets/upload/2018-04-20/1524185366.8171azq_04.png--/aa/company/assets/upload/2018-04-20/1524185366.9203azq_02.png', '', '&nbsp; &nbsp;裙子采用弹力印花面料<br />\r\n更显立体感<br />\r\n面料成本是普通绸缎面料的5倍<br />', '独家印花百褶裙设计', 3, 3),
(26, 'three', '/aa/company/assets/upload/2018-04-20/1524185408.0109asq_02.png--/aa/company/assets/upload/2018-04-20/1524185408.0501axs_05.png', '', '内衬选用优质布料，<br />\r\n进行细腻柔和压边处理<br />\r\n是无可挑剔的闺中精品<br />', '细腻柔和内衬压边处理', 3, 3),
(27, '', '/aa/company/assets/upload/2018-04-20/1524186427.4998TB1vWWMaHSYBuNjSspfYXIZCpXa_M2.jpg', '01 传统古典盘扣立领', '古韵十足的传统立领设计复古金色盘扣<br />\r\n精细设计，精致大气<br />', 'TYPE', 4, 3),
(28, '', '/aa/company/assets/upload/2018-04-19/1524105195.7938pic-xiangqing10.png', '02对襟中式嫁衣', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', '', 4, 3),
(29, '', '/aa/company/assets/upload/2018-04-19/1524105229.4487pic-xiangqing11.png', '03 中式印花双层水秀', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;精细设计，精致大气<br />', '', 4, 3),
(32, '', '/aa/company/assets/upload/2018-04-19/1524105279.4416pic-xiangqing12.png', '04吉祥彩凤精致刺绣', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', '', 4, 3),
(33, '', '/aa/company/assets/upload/2018-04-19/1524105358.4841pic-xiangqing14.png--/aa/company/assets/upload/2018-04-19/1524105358.5721pic-xiangqing13.png', 'GOODS', '', '', 5, 3),
(34, '', '/aa/company/assets/upload/2018-04-19/1524106512.4611PRODUCT.jpg', '亚历山大·王', '看到这件嫁衣就会不由自主的想起7彩云南的故事。云南云南，彩云之南，意为“云岭之南”又称“滇”，是战国时期滇族部落的生息之地。这便是彩云之南的由来。<br />\r\n整件礼服设计以凤穿牡丹为原型，加入宝蓝、酱紫、杏橙、金黄、银白、朱红、雀紫7种颜色，将一件对襟和服完整的呈现给大家。<br />\r\n穿上这件礼服的新娘都有一颗少女的心，看见这件礼服的宾客都会顷刻喜悦<br />\r\n这对襟服适合身材比较苗条的姑娘，显得气质非凡，优雅得体。<br />\r\n<br />', '', 1, 4),
(35, '', '/aa/company/assets/upload/2018-04-20/1524186223.8966TB1vyDtlmYH8KJjSspdXXcRgVXa_!!0-item_pic.jpg--/aa/company/assets/upload/2018-04-20/1524186223.9954TB1uvMnbf2H8KJjy1zkXXXr7pXa_!!0-item_pic.jpg', 'PRODUCT', '品牌：蔡美月&nbsp; &nbsp; &nbsp;货号：S1151-6<br />\r\n颜色：红色&nbsp; &nbsp; &nbsp; &nbsp; 重量：1.56kg<br />\r\n尺码：XS/S/M/L/XL/XXL<br />\r\n款式：马来福秀禾服<br />\r\n面料：高级织锦缎、弹力印花布<br />\r\n版型：修身版型、A摆双飘片群<br />\r\n图案：凤穿牡丹、七彩祥云<br />\r\n厚薄指数：适中<br />\r\n弹力指数：微弹<br />\r\n软硬指数：微软<br />', '', 2, 4),
(36, 'one', '/aa/company/assets/upload/2018-04-20/1524185430.9061ac_01.png--/aa/company/assets/upload/2018-04-20/1524185430.9362ac_04.png', 'DESIGN', '&nbsp; &nbsp;一改传统秀禾服宽体直胳<br />\r\n的宽松体型<br />\r\n更加凸显江南女子的温婉气息<br />', '立体剪裁袖手显瘦版型', 3, 4),
(37, 'two', '/aa/company/assets/upload/2018-04-20/1524185488.8838ac_01.png--/aa/company/assets/upload/2018-04-20/1524185489.4855ee4.png', '', '&nbsp; &nbsp;裙子采用弹力印花面料<br />\r\n更显立体感<br />\r\n面料成本是普通绸缎面料的5倍<br />', '独家印花百褶裙设计', 3, 4),
(38, 'three', '/aa/company/assets/upload/2018-04-20/1524185545.7932pic-list4.png--/aa/company/assets/upload/2018-04-20/1524185545.9338nnn1.jpg', '', '内衬选用优质布料，<br />\r\n进行细腻柔和压边处理<br />\r\n是无可挑剔的闺中精品<br />', '细腻柔和内衬压边处理', 3, 4),
(39, '', '/aa/company/assets/upload/2018-04-19/1524109747.15513.jpg', '01 传统古典盘扣立领', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', 'TYPE', 4, 4),
(40, '', '/aa/company/assets/upload/2018-04-19/1524109775.35485.png', '03 中式印花双层水秀', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;精细设计，精致大气<br />', '', 4, 4),
(41, '', '/aa/company/assets/upload/2018-04-20/1524186467.5579TB2T0JngwmTBuNjy1XbXXaMrVXa_!!3248878002-0-item_pic.jpg', '03 中式印花双层水秀', '古韵十足的传统立领设计复古金色盘扣<br />\r\n精细设计，精致大气<br />', '', 4, 4),
(42, '', '/aa/company/assets/upload/2018-04-19/1524109788.73056.png', '04吉祥彩凤精致刺绣', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;精细设计，精致大气<br />', '', 4, 4),
(43, '', '/aa/company/assets/upload/2018-04-20/1524186279.0004TB1STXSigfH8KJjy1zcXXcTzpXa_!!0-item_pic.jpg--/aa/company/assets/upload/2018-04-20/1524186279.0452TB1Noljlb_I8KJjy1XaXXbsxpXa_!!0-item_pic.jpg', '', '', '', 5, 4),
(44, '', '/aa/company/assets/upload/2018-04-19/1524103575.5872com-3.png', '设计师解读', '<p>\r\n	看到这件嫁衣就会不由自主的想起7彩云南的故事。云南云南，彩云之南，意为“云岭之南”又称“滇”，是战国时期滇族部落的生息之地。这便是彩云之南的由来。\r\n</p>\r\n<p>\r\n	整件礼服设计以凤穿牡丹为原型，加入宝蓝、酱紫、杏橙、金黄、银白、朱红、雀紫7种颜色，将一件对襟和服完整的呈现给大家。\r\n</p>\r\n<p>\r\n	穿上这件礼服的新娘都有一颗少女的心，看见这件礼服的宾客都会顷刻喜悦\r\n</p>\r\n<p>\r\n	这对襟服适合身材比较苗条的姑娘，显得气质非凡，优雅得体。\r\n</p>', '', 1, 5),
(45, '', '/aa/company/assets/upload/2018-04-20/1524188143.9239TB1STXSigfH8KJjy1zcXXcTzpXa_!!0-item_pic.jpg--/aa/company/assets/upload/2018-04-20/1524188144.0175TB2ASHYh26H8KJjSspmXXb2WXXa_!!2956660351.jpg', 'PRODUCT', '品牌：蔡美月&nbsp; &nbsp; &nbsp;货号：S1151-6<br />\r\n颜色：红色&nbsp; &nbsp; &nbsp; &nbsp; 重量：1.56kg<br />\r\n尺码：XS/S/M/L/XL/XXL<br />\r\n款式：马来福秀禾服<br />\r\n面料：高级织锦缎、弹力印花布<br />\r\n版型：修身版型、A摆双飘片群<br />\r\n图案：凤穿牡丹、七彩祥云<br />\r\n厚薄指数：适中<br />\r\n弹力指数：微弹<br />\r\n软硬指数：微软<br />', '', 2, 5),
(46, 'one', '/aa/company/assets/upload/2018-04-20/1524185560.8562ad_03.png--/aa/company/assets/upload/2018-04-20/1524185560.9512as_03.png', 'DESIGN', '&nbsp; &nbsp;一改传统秀禾服宽体直胳<br />\r\n的宽松体型<br />\r\n更加凸显江南女子的温婉气息<br />', '立体剪裁袖手显瘦版型', 3, 5),
(47, 'two', '/aa/company/assets/upload/2018-04-20/1524185574.2949acc_03.png--/aa/company/assets/upload/2018-04-20/1524185574.398as_03.png', '', '&nbsp; &nbsp;裙子采用弹力印花面料<br />\r\n更显立体感<br />\r\n面料成本是普通绸缎面料的5倍<br />', '独家印花百褶裙设计', 3, 5),
(48, 'three', '/aa/company/assets/upload/2018-04-20/1524185588.9076acc_03.png--/aa/company/assets/upload/2018-04-20/1524185588.9951ad_03.png', '', '内衬选用优质布料，<br />\r\n进行细腻柔和压边处理<br />\r\n是无可挑剔的闺中精品<br />', '细腻柔和内衬压边处理', 3, 5),
(49, '', '/aa/company/assets/upload/2018-04-19/1524105147.6111pic-xiangqing9.png', '01 传统古典盘扣立领', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', 'TYPE', 4, 5),
(50, '', '/aa/company/assets/upload/2018-04-19/1524105195.7938pic-xiangqing10.png', '02对襟中式嫁衣', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', '', 4, 5),
(51, '', '/aa/company/assets/upload/2018-04-19/1524105229.4487pic-xiangqing11.png', '03 中式印花双层水秀', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;精细设计，精致大气<br />', '', 4, 5),
(52, '', '/aa/company/assets/upload/2018-04-19/1524105279.4416pic-xiangqing12.png', '04吉祥彩凤精致刺绣', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', '', 4, 5),
(53, '', '/aa/company/assets/upload/2018-04-19/1524105358.4841pic-xiangqing14.png--/aa/company/assets/upload/2018-04-19/1524105358.5721pic-xiangqing13.png', 'GOODS', '', '', 5, 5),
(54, '', '/aa/company/assets/upload/2018-04-19/1524106512.4611PRODUCT.jpg', '亚历山大·王', '看到这件嫁衣就会不由自主的想起7彩云南的故事。云南云南，彩云之南，意为“云岭之南”又称“滇”，是战国时期滇族部落的生息之地。这便是彩云之南的由来。<br />\r\n整件礼服设计以凤穿牡丹为原型，加入宝蓝、酱紫、杏橙、金黄、银白、朱红、雀紫7种颜色，将一件对襟和服完整的呈现给大家。<br />\r\n穿上这件礼服的新娘都有一颗少女的心，看见这件礼服的宾客都会顷刻喜悦<br />\r\n这对襟服适合身材比较苗条的姑娘，显得气质非凡，优雅得体。<br />\r\n<br />', '', 1, 6),
(55, '', '/aa/company/assets/upload/2018-04-20/1524185830.9994pic-list5.png--/aa/company/assets/upload/2018-04-20/1524185831.2377nn2.jpg', 'PRODUCT', '品牌：蔡美月&nbsp; &nbsp; &nbsp;货号：S1151-6<br />\r\n颜色：红色&nbsp; &nbsp; &nbsp; &nbsp; 重量：1.56kg<br />\r\n尺码：XS/S/M/L/XL/XXL<br />\r\n款式：马来福秀禾服<br />\r\n面料：高级织锦缎、弹力印花布<br />\r\n版型：修身版型、A摆双飘片群<br />\r\n图案：凤穿牡丹、七彩祥云<br />\r\n厚薄指数：适中<br />\r\n弹力指数：微弹<br />\r\n软硬指数：微软<br />', '', 2, 6),
(56, 'one', '/aa/company/assets/upload/2018-04-20/1524185848.7733x_03.png--/aa/company/assets/upload/2018-04-20/1524185848.8898z_03.png', 'DESIGN', '&nbsp; &nbsp;一改传统秀禾服宽体直胳<br />\r\n的宽松体型<br />\r\n更加凸显江南女子的温婉气息<br />', '立体剪裁袖手显瘦版型', 3, 6),
(57, 'two', '/aa/company/assets/upload/2018-04-20/1524185866.6091z_03.png--/aa/company/assets/upload/2018-04-20/1524185866.6618z_06.png', '', '&nbsp; &nbsp;裙子采用弹力印花面料<br />\r\n更显立体感<br />\r\n面料成本是普通绸缎面料的5倍<br />', '独家印花百褶裙设计', 3, 6),
(58, 'three', '/aa/company/assets/upload/2018-04-20/1524185901.7388x_03.png--/aa/company/assets/upload/2018-04-20/1524185901.7567z_06.png', '', '内衬选用优质布料，<br />\r\n进行细腻柔和压边处理<br />\r\n是无可挑剔的闺中精品<br />', '细腻柔和内衬压边处理', 3, 6),
(59, '', '/aa/company/assets/upload/2018-04-19/1524109747.15513.jpg', '01 传统古典盘扣立领', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', 'TYPE', 4, 6),
(60, '', '/aa/company/assets/upload/2018-04-19/1524109757.89284.jpg', '02对襟中式嫁衣', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 精细设计，精致大气<br />', '', 4, 6),
(61, '', '/aa/company/assets/upload/2018-04-20/1524186497.5587TB1K43BaNrI8KJjy0FpXXb5hVXa_!!0-item_pic.jpg', '03 中式印花双层水秀', '古韵十足的传统立领设计复古金色盘扣<br />\r\n精细设计，精致大气<br />', '', 4, 6),
(62, '', '/aa/company/assets/upload/2018-04-19/1524109788.73056.png', '04吉祥彩凤精致刺绣', '古韵十足的传统立领设计复古金色盘扣<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;精细设计，精致大气<br />', '', 4, 6),
(63, '', '/aa/company/assets/upload/2018-04-20/1524186338.8888TB2qzdhbkfb_uJkSndVXXaBkpXa_!!2232588585.jpg_430x430q90.jpg--/aa/company/assets/upload/2018-04-20/1524186339.0079TB2sjm1XA2kJKJjSspcXXbS1pXa_!!1847498933.jpg', '', '', '', 5, 6);

-- --------------------------------------------------------

--
-- 表的结构 `lookpro`
--

CREATE TABLE IF NOT EXISTS `lookpro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `xilie` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `edes` varchar(50) NOT NULL,
  `img` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `lookpro`
--

INSERT INTO `lookpro` (`id`, `name`, `ename`, `xilie`, `des`, `edes`, `img`) VALUES
(1, '', 'Show Wo', '秀禾系列', '一针一线   为你装饰', 'Stitch for you to decorate', '/aa/company/assets/upload/2018-04-19/1524130391.999mnb2.png'),
(2, '', 'Wedding dress', '婚纱系列', '匠心挚爱   定制美好', 'My heart beloved custom beautiful', '/aa/company/assets/upload/2018-04-19/1524101422.865pic-list1.png'),
(3, '', 'DRESS', '礼服系列', '做女神不做灰姑娘', 'Goddess do not do Cinderella', '/aa/company/assets/upload/2018-04-19/1524101598.048pic-list4.png'),
(4, '', 'Bridesmaid', '伴娘服系列', '且以深情共白头', 'And a total of affectionate Baishou', '/aa/company/assets/upload/2018-04-19/1524130052.8316mnb1.png');

-- --------------------------------------------------------

--
-- 表的结构 `messp`
--

CREATE TABLE IF NOT EXISTS `messp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `cid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- 转存表中的数据 `messp`
--

INSERT INTO `messp` (`id`, `pid`, `img`, `time`, `name`, `content`, `cid`) VALUES
(1, 0, '/aa/company/assets/upload/2018-04-20/1524216421.0623a123.jpg', '2018-04-20 09:27:01', '游客421', '凤兮凤兮归故乡，遨游四海求其凰。', 1),
(2, 0, '/aa/company/assets/upload/2018-04-20/1524216421.0623a123.jpg', '2018-04-20 09:27:36', '游客456', '时未遇兮无所将，何悟今兮升斯堂！', 1),
(3, 0, '/aa/company/assets/upload/2018-04-20/1524216512.2199aaaqq1_01.png', '2018-04-20 09:28:44', '游客524', '有艳淑女在闺房，室迩人遐毒我肠', 1),
(4, 0, '', '2018-04-20 09:29:25', '游客565', '而富有', 1),
(5, 0, '', '2018-04-20 09:29:52', '游客592', '撒旦', 1),
(6, 0, '/aa/company/assets/upload/2018-04-20/1524216606.4003a123.jpg', '2018-04-20 09:30:12', '游客612', '够', 1),
(7, 0, '/aa/company/assets/upload/2018-04-20/1524216606.4003a123.jpg', '2018-04-20 09:30:24', '游客624', '语句块i看过', 1),
(8, 0, '/aa/company/assets/upload/2018-04-20/1524216606.4003a123.jpg', '2018-04-20 09:30:30', '游客630', '过后就会看见', 1),
(9, 0, '/aa/company/assets/upload/2018-04-20/1524216650.2596aaaqq1_01.png', '2018-04-20 09:30:52', '游客652', '体育', 1),
(10, 0, '/aa/company/assets/upload/2018-04-20/1524216650.2596aaaqq1_01.png', '2018-04-20 09:31:00', '游客660', '太容易', 1),
(11, 0, '/aa/company/assets/upload/2018-04-20/1524216696.0076aaaaaaa1.jpg', '2018-04-20 09:31:36', '游客696', '反对共和', 2),
(12, 0, '/aa/company/assets/upload/2018-04-20/1524216700.7415ac_01.png', '2018-04-20 09:31:42', '游客702', '阿尔哈', 2),
(13, 0, '/aa/company/assets/upload/2018-04-20/1524216708.3305adf_02.png', '2018-04-20 09:31:49', '游客709', '二万人大会', 2),
(14, 0, '/aa/company/assets/upload/2018-04-20/1524216721.9278a123.jpg', '2018-04-20 09:32:02', '游客722', '扼杀人的天赋', 3),
(15, 0, '/aa/company/assets/upload/2018-04-20/1524216726.7652ac_04.png', '2018-04-20 09:32:08', '游客728', '3问儿童', 3),
(16, 0, '/aa/company/assets/upload/2018-04-20/1524216732.9873active.png', '2018-04-20 09:32:14', '游客734', '亲为人体', 3),
(17, 0, '/aa/company/assets/upload/2018-04-20/1524216754.4869a123.jpg', '2018-04-20 09:32:34', '游客754', '3二万人大会', 4),
(18, 0, '/aa/company/assets/upload/2018-04-20/1524216761.1178ac_04.png', '2018-04-20 09:32:41', '游客761', '嗯我让他', 4),
(19, 0, '/aa/company/assets/upload/2018-04-20/1524216765.6026acc_03.png', '2018-04-20 09:32:47', '游客767', '嗯我让他规划', 4),
(20, 0, '/aa/company/assets/upload/2018-04-20/1524216781.113a123.jpg', '2018-04-20 09:33:01', '游客781', '热体育', 5),
(21, 0, '/aa/company/assets/upload/2018-04-20/1524216785.467adf_02.png', '2018-04-20 09:33:06', '游客786', '而', 5),
(22, 0, '/aa/company/assets/upload/2018-04-20/1524216790.6436acc_03.png', '2018-04-20 09:33:13', '游客793', '45舍得放', 5),
(23, 0, '', '2018-04-20 09:33:22', '游客802', '二十多天发一个', 6),
(24, 0, '/aa/company/assets/upload/2018-04-20/1524216808.2003aaaaaaa1.jpg', '2018-04-20 09:33:30', '游客810', '4儿童与', 6),
(25, 0, '/aa/company/assets/upload/2018-04-20/1524216814.5808acc_03.png', '2018-04-20 09:33:36', '游客816', '4(⊙﹏⊙)投入了看', 6),
(26, 0, '/aa/company/assets/upload/2018-04-20/1524216820.5811adf_02.png', '2018-04-20 09:33:42', '游客822', '而突然看见', 6),
(27, 1, '/aa/company/assets/upload/2018-04-20/1524216849.4237aaaaaaa1.jpg', '2018-04-20 09:34:09', '游客849', '567ui哦try回家', 1),
(28, 1, '/aa/company/assets/upload/2018-04-20/1524216854.9446adf_02.png', '2018-04-20 09:34:16', '游客856', '热体育就', 1),
(29, 1, '/aa/company/assets/upload/2018-04-20/1524216860.2537adf_02.png', '2018-04-20 09:34:27', '游客867', '据国内和部分v的', 1),
(30, 1, '/aa/company/assets/upload/2018-04-20/1524216879.5686azq_04.png', '2018-04-20 09:34:40', '游客880', '如同一颗', 2),
(31, 1, '/aa/company/assets/upload/2018-04-20/1524216879.5686azq_04.png', '2018-04-20 09:34:41', '游客881', '', 2),
(32, 1, '/aa/company/assets/upload/2018-04-20/1524216885.9211aaaqq1_01.png', '2018-04-20 09:34:47', '游客887', '5恶uil', 2),
(33, 1, '/aa/company/assets/upload/2018-04-20/1524216891.8326adf_02.png', '2018-04-20 09:34:53', '游客893', '如同一颗', 2),
(34, 1, '/aa/company/assets/upload/2018-04-20/1524216902.1847ac_01.png', '2018-04-20 09:35:02', '游客902', '45投入于', 3),
(35, 1, '/aa/company/assets/upload/2018-04-20/1524216907.1006axs_05.png', '2018-04-20 09:35:08', '游客908', '嗯投入于', 3),
(36, 1, '/aa/company/assets/upload/2018-04-20/1524216914.0662azx34_03.png', '2018-04-20 09:35:15', '游客915', '而生日当天', 3),
(37, 1, '/aa/company/assets/upload/2018-04-20/1524216919.6592azq_02.png', '2018-04-20 09:35:20', '游客920', '热提供符合国家', 3),
(38, 1, '/aa/company/assets/upload/2018-04-20/1524216930.456bbb123.jpg', '2018-04-20 09:35:31', '游客931', '让对方同意更换', 4),
(39, 1, '/aa/company/assets/upload/2018-04-20/1524216936.3239baba2.jpg', '2018-04-20 09:35:38', '游客938', '天回访跟进', 4),
(40, 1, '/aa/company/assets/upload/2018-04-20/1524216945.0082az4_03.png', '2018-04-20 09:35:46', '游客946', '问热体育', 4),
(41, 1, '/aa/company/assets/upload/2018-04-20/1524216962.3569ac_04.png', '2018-04-20 09:36:02', '游客962', '一人一天估计很快就了', 5),
(42, 1, '/aa/company/assets/upload/2018-04-20/1524216967.6048aaaaaaa1.jpg', '2018-04-20 09:36:08', '游客968', '如果对方还能， ', 5),
(43, 1, '/aa/company/assets/upload/2018-04-20/1524216974.4115banner.png', '2018-04-20 09:36:15', '游客975', '让他继承与快乐', 5),
(44, 1, '/aa/company/assets/upload/2018-04-20/1524216988.0645a123.jpg', '2018-04-20 09:36:28', '游客988', '4饿荣誉i', 6),
(45, 1, '/aa/company/assets/upload/2018-04-20/1524216993.3042axs_05.png', '2018-04-20 09:36:34', '游客994', '体育', 6),
(46, 1, '/aa/company/assets/upload/2018-04-20/1524217011.661acc_03.png', '2018-04-20 09:36:53', '游客013', '规划你们', 6),
(47, 1, '/aa/company/assets/upload/2018-04-20/1524217018.3234azqsxw_02.png', '2018-04-20 09:37:00', '游客020', '她也会尽快', 6),
(48, 1, '/aa/company/assets/upload/2018-04-20/1524217031.0226ac_01.png', '2018-04-20 09:37:11', '游客031', '体育科技', 7),
(49, 1, '/aa/company/assets/upload/2018-04-20/1524217057.5141adf_02.png', '2018-04-20 09:37:39', '游客059', '瑞典国会', 7),
(50, 1, '/aa/company/assets/upload/2018-04-20/1524217063.9005asq_02.png', '2018-04-20 09:37:45', '游客065', '统一考虑', 7),
(51, 1, '/aa/company/assets/upload/2018-04-20/1524217074.5893ac_01.png', '2018-04-20 09:37:56', '游客076', '嗯投入于', 8),
(52, 1, '/aa/company/assets/upload/2018-04-20/1524217080.3266axs_03.png', '2018-04-20 09:38:01', '游客081', '认识的天赋很高', 8),
(53, 1, '/aa/company/assets/upload/2018-04-20/1524217085.7613adf_02.png', '2018-04-20 09:38:07', '游客087', '推翻一个', 8),
(54, 1, '/aa/company/assets/upload/2018-04-20/1524217356.7896a123.jpg', '2018-04-20 09:42:44', '游客364', '7ui', 8),
(55, 1, '/aa/company/assets/upload/2018-04-20/1524217732.4151aaaaaaa1.jpg', '2018-04-20 09:48:55', '游客735', '但如果', 2),
(56, 0, '/aa/company/assets/upload/2018-04-22/1524390581.6016baba1.jpg', '2018-04-22 09:53:14', '游客794', '我大概会告诉他突然又投入教育局', 1);

-- --------------------------------------------------------

--
-- 表的结构 `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `module`
--

INSERT INTO `module` (`id`, `name`) VALUES
(1, '设计师说'),
(2, '产品信息'),
(3, '设计亮点'),
(4, '版型工艺'),
(5, '物品实拍');

-- --------------------------------------------------------

--
-- 表的结构 `oppr`
--

CREATE TABLE IF NOT EXISTS `oppr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `img` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `oppr`
--

INSERT INTO `oppr` (`id`, `name`, `ename`, `content`, `img`) VALUES
(1, '嫁衣', 'WEDDING DRESS', '秀禾服的"褂"是指上身的对襟衣<br />\r\n而"裙"则是下身长裙<br />\r\n裙褂上的图案以龙凤为主，以"福"字、"喜"字<br />\r\n牡丹花、鸳鸯、蝠鼠、石榴等<br />\r\n寓意吉祥、百年好合的图案点缀。<br />', '/aa/company/assets/upload/2018-04-20/1524190921.1417azxc21_02.png--/aa/company/assets/upload/2018-04-20/1524190921.2295sddf2_02.png--/aa/company/assets/upload/2018-04-20/1524190921.2514asdsfdf2_02.png'),
(2, '婚纱', 'WEDDING DRESS', '婚纱是结婚仪式及婚宴时新娘穿着的西式服饰<br />\r\n婚纱分类的根据通过女性人体曲线<br />\r\n薄、透、露、柔美、流畅、轻盈<br />\r\n端庄、含蓄、朦胧等特点尽显人体美<br />', '/aa/company/assets/upload/2018-04-19/1524099442.5414hunsha2.png--/aa/company/assets/upload/2018-04-19/1524099442.5766huncha1.png--/aa/company/assets/upload/2018-04-19/1524099442.5999hunsha3.png'),
(3, '礼服', 'DRESS', '立领设计配上镶钻立体贴花<br />\r\n使得礼服立体感十足，蕾丝打底，性感妩媚<br />\r\n舒适的面料垂顺其地，更显高贵优雅<br />\r\n细肩带加上抹胸的款式，分外性感<br />\r\n裙摆是拖尾的款式，梦幻薄纱叠加<br />', '/aa/company/assets/upload/2018-04-20/1524191434.8587azqsxw_02.png--/aa/company/assets/upload/2018-04-20/1524191434.9355azxcde1_02.png--/aa/company/assets/upload/2018-04-20/1524191434.9635azxsw1_02.png'),
(4, '伴娘服', 'MOM SERVICE', '伴娘即为陪伴新娘完成婚礼的女孩<br />\r\n一般由与新娘关系亲密的未婚女性担当<br />\r\n其衣服搭配应与新娘服饰相得益彰<br />\r\n通常伴娘服以优雅得体、简约自然大方为主<br />\r\n不能太艳，以素雅为宜<br />', '/aa/company/assets/upload/2018-04-20/1524189801.7053TB2_PrtbdzJ8KJjSspkXXbF7VXa_!!3033413032.jpg--/aa/company/assets/upload/2018-04-20/1524189801.7315TB2nojCbf2H8KJjy0FcXXaDlFXa_!!3033413032.jpg--/aa/company/assets/upload/2018-04-20/1524189801.8333TB1uvMnbf2H8KJjy1zkXXXr7pXa_!!0-item_pic.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `des` varchar(100) NOT NULL,
  `cont` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `ename`, `img`, `des`, `cont`) VALUES
(1, '蓬蓬公主裙小礼服', 'the princess dress', '/aa/company/assets/upload/2018-04-19/1524108144.7878pic-list10.png--/aa/company/assets/upload/2018-04-19/1524108155.3531pic-list10.png--/aa/company/assets/upload/2018-04-19/1524108155.5223pic-xiangqing5.png', '公主裙小礼服，好看显年轻', '嫩嫩的水彩蓝，从珍珠、花朵、蕾丝、的细节着手，主打手工的细节...'),
(2, '宫廷一字肩奢华性感欧美拖尾', 'imperial court', '/aa/company/assets/upload/2018-04-19/1524108168.2293hunsha2.png--/aa/company/assets/upload/2018-04-19/1524108168.2586huncha1.png', '宫廷一字肩，奢华又性感', '立体的首要设计，呈现出新娘曼妙的腰部曲线，使身材更有线条感，紧紧抓住众人的目光。'),
(3, '修身蕾丝性感宫廷长拖尾', 'cultivate one', '/aa/company/assets/upload/2018-04-19/1524108199.7804pic-list6.png--/aa/company/assets/upload/2018-04-19/1524108199.8486pic-list8.png', '两侧朦胧网纱加贴花，气质爆棚，下端隐形拉链方便穿脱。', '10层面料，两侧朦胧网纱加贴花，气质爆棚，下端隐形拉链方便穿脱。'),
(4, '蓬蓬公主裙小礼服', 'the princess dress', '/aa/company/assets/upload/2018-04-19/1524108223.3835lifu2.png--/aa/company/assets/upload/2018-04-19/1524108223.429lifu3.png', '公主裙小礼服', '嫩嫩的水彩蓝，从珍珠、花朵、蕾丝、的细节着手，主打手工的细节...'),
(5, '宫廷一字肩奢华性感欧美', 'cultivate  one', '/aa/company/assets/upload/2018-04-19/1524108256.8329pic-list8.png--/aa/company/assets/upload/2018-04-19/1524108257.0873hd111.jpg--/aa/company/assets/upload/2018-04-19/1524108269.2907hd111.jpg--/aa/company/assets/upload/2018-04-19/1524108269.3815pic-list5.png', '呈现出新娘曼妙的腰部曲线，使身材更有线条感，紧紧抓住众人的目光。', '立体的首要设计，呈现出新娘曼妙的腰部曲线，使身材更有线条感，紧紧抓住众人的目光。'),
(6, '修身蕾丝性感宫廷长拖尾', 'morality', '/aa/company/assets/upload/2018-04-19/1524108291.7965jiayi.png--/aa/company/assets/upload/2018-04-19/1524108291.8165jiayi1.png', '立体的首要设计，呈现出新娘曼妙的腰部曲线，使身材更有线条感，紧紧抓住众人的目光。', '立体的首要设计，呈现出新娘曼妙的腰部曲线，使身材更有线条感，紧紧抓住众人的目光。');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `zhanghao`, `pass`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `zhuyeimg`
--

CREATE TABLE IF NOT EXISTS `zhuyeimg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img` varchar(5000) NOT NULL,
  `pid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zhuyeimg`
--

INSERT INTO `zhuyeimg` (`id`, `img`, `pid`) VALUES
(1, '/aa/company/assets/upload/2018-04-19/1524106246.8974pingbai3.png--/aa/company/assets/upload/2018-04-19/1524106246.9468pingbai4.png--/aa/company/assets/upload/2018-04-19/1524106246.9553pingpai6.png--/aa/company/assets/upload/2018-04-19/1524106247.2399pingpai5.png--/aa/company/assets/upload/2018-04-19/1524106247.3076pic-xiangqing7.png', 0),
(2, '/aa/company/assets/upload/2018-04-19/1524115467.0072timg (1).jpg--/aa/company/assets/upload/2018-04-19/1524115467.0298timg (2).jpg--/aa/company/assets/upload/2018-04-19/1524115467.0355timg (3).jpg--/aa/company/assets/upload/2018-04-19/1524115467.1618pic-xiangqing4.png', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
