-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 07:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itse412`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(250) NOT NULL,
  `model` int(4) NOT NULL,
  `color` varchar(50) NOT NULL,
  `milage` int(11) NOT NULL,
  `engine` int(2) NOT NULL,
  `doors` int(1) NOT NULL,
  `category_id` int(11) NOT NULL,
  `condition` varchar(20) NOT NULL,
  `passengers` int(50) NOT NULL,
  `price` int(11) NOT NULL,
  `transmission` varchar(250) NOT NULL,
  `overview` text NOT NULL,
  `options` text NOT NULL,
  `is_visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_name`, `model`, `color`, `milage`, `engine`, `doors`, `category_id`, `condition`, `passengers`, `price`, `transmission`, `overview`, `options`, `is_visible`) VALUES
(1, 'culpa', 2000, 'Yallow', 26790, 41, 2, 95, 'Used', 4, 15980, 'Automatic', 'Rabbit\'s voice; and Alice was very like having a game of croquet she was now about two feet high, and she swam lazily about in the sea!\' cried the Mock Turtle. \'Seals, turtles, salmon, and so on.\'.', 'If she should push the matter worse. You MUST have meant some mischief, or else you\'d have signed your name like an honest man.\' There was no one listening, this time, sat down and saying \"Come up.', 0),
(2, 'quas', 1992, 'Green', 47177, 30, 2, 60, 'Used', 2, 25976, 'Automatic', 'Alice said with a teacup in one hand and a fan! Quick, now!\' And Alice was just beginning to grow up any more HERE.\' \'But then,\' thought Alice, and tried to speak, and no room at all a proper way of.', 'Cheshire Cat: now I shall have to beat them off, and Alice was very likely it can talk: at any rate: go and get in at once.\' And in she went. Once more she found a little door was shut again, and.', 1),
(3, 'sunt', 1981, 'Blue', 28220, 48, 4, 21, 'Used', 6, 63496, 'Automatic', 'I can do without lobsters, you know. Which shall sing?\' \'Oh, YOU sing,\' said the Caterpillar. This was quite out of its mouth, and addressed her in the common way. So she stood still where she was,.', 'Seaography: then Drawling--the Drawling-master was an uncomfortably sharp chin. However, she did it at last, more calmly, though still sobbing a little pattering of feet in a deep voice, \'are done.', 0),
(4, 'optio', 1993, 'Red', 84795, 17, 4, 64, 'New', 6, 9881, 'Manual', 'Alice, and her eyes immediately met those of a sea of green leaves that had fallen into it: there were no arches left, and all the same, the next moment a shower of saucepans, plates, and dishes..', 'Alice, who felt very lonely and low-spirited. In a minute or two she walked off, leaving Alice alone with the Dormouse. \'Don\'t talk nonsense,\' said Alice to herself, as she remembered the number of.', 0),
(5, 'nostrum', 1993, 'Red', 62665, 22, 4, 31, 'Used', 5, 52874, 'Automatic', 'Gryphon: and it said in a few yards off. The Cat only grinned a little timidly, \'why you are painting those roses?\' Five and Seven said nothing, but looked at Alice. \'It must have prizes.\' \'But who.', 'Caterpillar angrily, rearing itself upright as it can\'t possibly make me grow large again, for this curious child was very deep, or she fell very slowly, for she had been broken to pieces. \'Please,.', 0),
(6, 'est', 2001, 'Yallow', 24524, 19, 2, 6, 'Used', 4, 63335, 'Manual', 'Duchess, as she passed; it was good manners for her neck kept getting entangled among the distant green leaves. As there seemed to Alice to herself, in a sorrowful tone, \'I\'m afraid I don\'t like.', 'Alice. \'I wonder what CAN have happened to you? Tell us all about it!\' and he went on eagerly: \'There is such a tiny little thing!\' said the Mock Turtle, and said \'No, never\') \'--so you can find.', 1),
(7, 'blanditiis', 2010, 'Black', 92473, 28, 2, 48, 'Used', 4, 95996, 'Automatic', 'Alice, \'I\'ve often seen a cat without a grin,\' thought Alice; \'I daresay it\'s a French mouse, come over with William the Conqueror.\' (For, with all their simple sorrows, and find a number of.', 'Lory, as soon as it lasted.) \'Then the Dormouse went on, \'that they\'d let Dinah stop in the wood, \'is to grow larger again, and went to school every day--\' \'I\'VE been to her, still it had entirely.', 1),
(8, 'ducimus', 1980, 'Red', 36703, 29, 2, 96, 'Used', 3, 34482, 'Manual', 'Alice heard it muttering to itself \'The Duchess! The Duchess! Oh my fur and whiskers! She\'ll get me executed, as sure as ferrets are ferrets! Where CAN I have to turn into a butterfly, I should.', 'Some of the room again, no wonder she felt sure she would manage it. \'They were obliged to write with one eye; but to her great delight it fitted! Alice opened the door that led into the teapot. \'At.', 0),
(9, 'perferendis', 1991, 'Green', 96769, 21, 2, 91, 'Used', 5, 7725, 'Automatic', 'Mock Turtle sighed deeply, and began, in a thick wood. \'The first thing she heard something like this:-- \'Fury said to herself, and fanned herself with one finger pressed upon its forehead (the.', 'HERE.\' \'But then,\' thought she, \'if people had all to lie down on the floor, and a great deal too far off to other parts of the sort. Next came the guests, mostly Kings and Queens, and among them.', 1),
(10, 'cupiditate', 2007, 'Black', 85414, 25, 2, 85, 'New', 3, 11209, 'Automatic', 'Alice. \'Reeling and Writhing, of course, I meant,\' the King said to the cur, \"Such a trial, dear Sir, With no jury or judge, would be worth the trouble of getting her hands up to them she heard.', 'Alice did not like to be executed for having cheated herself in a tone of great dismay, and began to cry again. \'You ought to have wondered at this, but at the top of her little sister\'s dream. The.', 0),
(11, 'suscipit', 2005, 'Black', 77369, 46, 2, 33, 'Used', 3, 36931, 'Automatic', 'No, no! You\'re a serpent; and there\'s no use denying it. I suppose it doesn\'t matter which way I ought to be said. At last the Mock Turtle sighed deeply, and drew the back of one flapper across his.', 'Alice had got so much about a foot high: then she heard one of them with one finger for the pool as it spoke (it was exactly the right height to rest herself, and shouted out, \'You\'d better not.', 1),
(12, 'quas', 2006, 'Blue', 37577, 49, 2, 35, 'New', 5, 15172, 'Manual', 'They all made a rush at the sides of it; and the Hatter with a smile. There was nothing on it but tea. \'I don\'t know of any good reason, and as the large birds complained that they could not join.', 'No room!\' they cried out when they passed too close, and waving their forepaws to mark the time, while the rest of the words have got into it), and sometimes shorter, until she had peeped into the.', 1),
(13, 'veritatis', 1986, 'Black', 51103, 13, 4, 86, 'Used', 5, 30664, 'Manual', 'I could not stand, and she looked down into a pig, and she ran off at once, with a little feeble, squeaking voice, (\'That\'s Bill,\' thought Alice,) \'Well, I never was so much into the air off all its.', 'Alice said nothing: she had not as yet had any dispute with the dream of Wonderland of long ago: and how she would manage it. \'They must go back and see that she remained the same thing,\' said the.', 1),
(14, 'blanditiis', 1993, 'Red', 20125, 29, 2, 26, 'New', 4, 11042, 'Manual', 'Queen shouted at the White Rabbit: it was good manners for her to speak again. The rabbit-hole went straight on like a steam-engine when she had brought herself down to look about her repeating \'YOU.', 'Who for such a noise inside, no one listening, this time, as it could go, and making quite a conversation of it altogether; but after a few minutes that she could see it trot away quietly into the.', 0),
(15, 'in', 2011, 'Red', 43151, 29, 4, 92, 'New', 4, 2418, 'Automatic', 'I don\'t believe it,\' said Alice desperately: \'he\'s perfectly idiotic!\' And she tried the little door: but, alas! the little golden key, and when she was about a whiting to a mouse, That he met in.', 'There was a bright brass plate with the words all coming different, and then said, \'It WAS a narrow escape!\' said Alice, a good way off, and found quite a commotion in the direction in which you.', 0),
(16, 'accusantium', 2013, 'Yallow', 71905, 44, 4, 41, 'New', 6, 12990, 'Automatic', 'After a time there were a Duck and a large mushroom growing near her, about the right distance--but then I wonder if I was, I shouldn\'t want YOURS: I don\'t want to go on. \'And so these three weeks!\'.', 'As she said to Alice, and looking at the Mouse\'s tail; \'but why do you know what to beautify is, I can\'t put it in less than no time to be Number One,\' said Alice. \'Of course not,\' said Alice.', 0),
(17, 'voluptatem', 1980, 'Red', 75922, 20, 2, 8, 'New', 6, 9079, 'Manual', 'Alice remarked. \'Oh, you foolish Alice!\' she answered herself. \'How can you learn lessons in here? Why, there\'s hardly enough of me left to make out that one of the reeds--the rattling teacups would.', 'Hatter. \'Nor I,\' said the Mock Turtle. \'Seals, turtles, salmon, and so on; then, when you\'ve cleared all the while, till at last in the grass, merely remarking that a red-hot poker will burn you if.', 0),
(18, 'officiis', 1996, 'Green', 45158, 12, 2, 65, 'New', 2, 38498, 'Automatic', 'Lizard, Bill, was in managing her flamingo: she succeeded in bringing herself down to nine inches high. CHAPTER VI. Pig and Pepper For a minute or two, which gave the Pigeon in a great deal to come.', 'As they walked off together, Alice heard it before,\' said Alice,) and round Alice, every now and then said \'The fourth.\' \'Two days wrong!\' sighed the Hatter. \'You might just as well. The twelve.', 1),
(19, 'fuga', 2015, 'Black', 16498, 14, 4, 31, 'Used', 4, 41111, 'Automatic', 'Alice\'s first thought was that she ran across the garden, and I shall have to whisper a hint to Time, and round goes the clock in a great hurry; \'this paper has just been reading about; and when.', 'Alice coming. \'There\'s PLENTY of room!\' said Alice in a sort of thing that would happen: \'\"Miss Alice! Come here directly, and get ready for your walk!\" \"Coming in a day or two: wouldn\'t it be.', 0),
(20, 'rerum', 2019, 'Yallow', 82820, 34, 4, 65, 'Used', 3, 9306, 'Automatic', 'ME, and told me you had been to the Dormouse, not choosing to notice this last remark. \'Of course not,\' said the Cat, \'or you wouldn\'t squeeze so.\' said the Cat, \'if you don\'t explain it as she did.', 'Duck: \'it\'s generally a ridge or furrow in the act of crawling away: besides all this, there was hardly room to open them again, and went on in the distance, and she felt that it signifies much,\'.', 1),
(21, 'voluptatum', 1994, 'Black', 89194, 22, 4, 32, 'New', 6, 24539, 'Automatic', 'King said, turning to the voice of the court. (As that is rather a handsome pig, I think.\' And she began again. \'I should have liked teaching it tricks very much, if--if I\'d only been the right.', 'Mock Turtle in the air. Even the Duchess to play croquet.\' The Frog-Footman repeated, in the same thing as \"I eat what I should be free of them bowed low. \'Would you tell me,\' said Alice, a good.', 1),
(22, 'atque', 1987, 'Blue', 77691, 41, 4, 51, 'Used', 3, 21178, 'Manual', 'Gryphon. \'They can\'t have anything to put his mouth close to her, one on each side to guard him; and near the King and Queen of Hearts, who only bowed and smiled in reply. \'Idiot!\' said the Gryphon,.', 'Alice!\' she answered herself. \'How can you learn lessons in the distance, sitting sad and lonely on a bough of a feather flock together.\"\' \'Only mustard isn\'t a bird,\' Alice remarked. \'Right, as.', 0),
(23, 'ut', 1994, 'Blue', 75021, 32, 4, 89, 'New', 3, 25308, 'Automatic', 'She felt very curious to see the Hatter said, tossing his head mournfully. \'Not I!\' he replied. \'We quarrelled last March--just before HE went mad, you know--\' \'But, it goes on \"THEY ALL RETURNED.', 'I only wish people knew that: then they wouldn\'t be so easily offended, you know!\' The Mouse did not get hold of anything, but she could not remember the simple rules their friends had taught them:.', 1),
(24, 'odit', 2007, 'Yallow', 23875, 16, 4, 34, 'Used', 3, 78218, 'Manual', 'And mentioned me to him: She gave me a good opportunity for making her escape; so she went on saying to her feet, they seemed to be patted on the ground as she could, for the garden!\' and she went.', 'Why, I haven\'t had a wink of sleep these three weeks!\' \'I\'m very sorry you\'ve been annoyed,\' said Alice, \'and why it is you hate--C and D,\' she added aloud. \'Do you know why it\'s called a whiting?\'.', 1),
(25, 'libero', 1997, 'Green', 80007, 23, 4, 33, 'New', 6, 12225, 'Automatic', 'She went on just as she could remember them, all these strange Adventures of hers would, in the other. In the very tones of the trees behind him. \'--or next day, maybe,\' the Footman remarked, \'till.', 'I am in the sea. But they HAVE their tails fast in their proper places--ALL,\' he repeated with great emphasis, looking hard at Alice the moment she felt very glad to find that she ought to be afraid.', 0),
(26, 'consectetur', 1993, 'Yallow', 81309, 39, 4, 89, 'New', 3, 43404, 'Manual', 'The players all played at once crowded round her at the bottom of a well?\' The Dormouse again took a great many teeth, so she went on, turning to Alice: he had taken advantage of the evening,.', 'First, because I\'m on the trumpet, and called out \'The race is over!\' and they walked off together. Alice laughed so much already, that it was addressed to the conclusion that it made no mark; but.', 0),
(27, 'qui', 1987, 'Black', 82558, 41, 4, 43, 'New', 4, 91658, 'Automatic', 'I gave her one, they gave him two, You gave us three or more; They all returned from him to be managed? I suppose it were white, but there was nothing on it except a tiny little thing!\' It did so.', 'I don\'t care which happens!\' She ate a little irritated at the other, looking uneasily at the proposal. \'Then the Dormouse indignantly. However, he consented to go through next walking about at the.', 1),
(28, 'voluptatem', 1999, 'Green', 90393, 25, 4, 16, 'New', 6, 27414, 'Manual', 'Gryphon. \'They can\'t have anything to put it in the distance, and she tried her best to climb up one of them can explain it,\' said Five, \'and I\'ll tell him--it was for bringing the cook took the.', 'Alice was very like a writing-desk?\' \'Come, we shall get on better.\' \'I\'d rather not,\' the Cat went on, \'What\'s your name, child?\' \'My name is Alice, so please your Majesty,\' said Two, in a VERY.', 0),
(29, 'consectetur', 1988, 'Yallow', 90961, 13, 2, 100, 'New', 3, 87996, 'Automatic', 'Gryphon as if nothing had happened. \'How am I then? Tell me that first, and then, and holding it to make herself useful, and looking anxiously about her. \'Oh, do let me hear the words:-- \'I speak.', 'I am so VERY tired of being such a puzzled expression that she let the jury--\' \'If any one left alive!\' She was moving them about as it was as long as it left no mark on the floor, and a piece of it.', 1),
(30, 'ullam', 1988, 'Black', 64418, 24, 4, 26, 'New', 2, 38215, 'Automatic', 'First, she tried to say it out again, so violently, that she had a door leading right into a pig, my dear,\' said Alice, feeling very curious to know what \"it\" means well enough, when I learn music.\'.', 'YOU?\' Which brought them back again to the Gryphon. \'How the creatures wouldn\'t be in Bill\'s place for a few minutes she heard something splashing about in the grass, merely remarking as it went,.', 0),
(31, 'architecto', 2018, 'Green', 79644, 14, 4, 28, 'New', 5, 52727, 'Manual', 'No room!\' they cried out when they met in the house, quite forgetting her promise. \'Treacle,\' said the Cat, as soon as there was generally a ridge or furrow in the sea, \'and in that case I can go.', 'Soup,\" will you, won\'t you, will you, won\'t you join the dance? Will you, won\'t you, will you, won\'t you, won\'t you, will you, won\'t you, will you join the dance? Will you, won\'t you join the dance..', 0),
(32, 'illo', 1988, 'Red', 20537, 13, 2, 68, 'Used', 6, 48134, 'Automatic', 'VERY short remarks, and she crossed her hands on her spectacles, and began picking them up again with a table set out under a tree in the middle, being held up by two guinea-pigs, who were giving it.', 'HATED cats: nasty, low, vulgar things! Don\'t let him know she liked them best, For this must ever be A secret, kept from all the other side of the court was in the sea!\' cried the Mock Turtle a.', 1),
(33, 'blanditiis', 1980, 'Black', 72029, 15, 4, 69, 'New', 2, 11422, 'Automatic', 'Alice, \'it\'s very easy to know your history, she do.\' \'I\'ll tell it her,\' said the Knave, \'I didn\'t know how to get an opportunity of saying to her ear, and whispered \'She\'s under sentence of.', 'Lory hastily. \'I don\'t know where Dinn may be,\' said the Cat. \'I\'d nearly forgotten that I\'ve got to?\' (Alice had been jumping about like that!\' But she waited patiently. \'Once,\' said the King.', 1),
(34, 'rerum', 1993, 'Blue', 63234, 17, 4, 59, 'Used', 3, 68315, 'Manual', 'Let me see--how IS it to annoy, Because he knows it teases.\' CHORUS. (In which the words a little, \'From the Queen. First came ten soldiers carrying clubs; these were all locked; and when she had.', 'King in a low, weak voice. \'Now, I give it up,\' Alice replied: \'what\'s the answer?\' \'I haven\'t the least notice of them bowed low. \'Would you tell me, please, which way she put it. She felt very.', 0),
(35, 'vero', 1984, 'Blue', 27148, 49, 4, 78, 'Used', 5, 42924, 'Automatic', 'I got up in spite of all her coaxing. Hardly knowing what she did, she picked her way out. \'I shall do nothing of the jury eagerly wrote down on one side, to look through into the garden, called out.', 'How queer everything is queer to-day.\' Just then she looked at the window.\' \'THAT you won\'t\' thought Alice, \'they\'re sure to do with this creature when I breathe\"!\' \'It IS a Caucus-race?\' said.', 1),
(36, 'vel', 1986, 'Black', 59313, 36, 4, 36, 'New', 2, 14054, 'Automatic', 'Queen never left off quarrelling with the Queen,\' and she felt unhappy. \'It was a real nose; also its eyes by this time, sat down at them, and considered a little animal (she couldn\'t guess of what.', 'Dormouse. \'Fourteenth of March, I think you\'d take a fancy to herself what such an extraordinary ways of living would be QUITE as much right,\' said the youth, \'one would hardly suppose That your eye.', 0),
(37, 'sint', 1986, 'Red', 43566, 34, 4, 95, 'New', 3, 83463, 'Manual', 'Alice whispered to the Queen. \'I haven\'t the slightest idea,\' said the Dormouse. \'Don\'t talk nonsense,\' said Alice desperately: \'he\'s perfectly idiotic!\' And she squeezed herself up and repeat \"\'TIS.', 'Alice, who felt very curious to see if he had taken his watch out of sight: then it chuckled. \'What fun!\' said the Dodo said, \'EVERYBODY has won, and all must have been changed for any.', 0),
(38, 'sed', 1984, 'Green', 71932, 43, 4, 4, 'New', 3, 63945, 'Automatic', 'Poor Alice! It was so full of tears, but said nothing. \'This here young lady,\' said the White Rabbit: it was not even room for this, and she told her sister, who was passing at the March Hare said.', 'As there seemed to think that will be the best way to explain the paper. \'If there\'s no room to open it; but, as the White Rabbit read out, at the Caterpillar\'s making such a puzzled expression that.', 1),
(39, 'et', 1989, 'Black', 94182, 12, 4, 32, 'Used', 6, 1141, 'Manual', 'And yet I don\'t understand. Where did they draw the treacle from?\' \'You can draw water out of the doors of the trees had a vague sort of knot, and then I\'ll tell him--it was for bringing the cook.', 'Let me think: was I the same as the March Hare said--\' \'I didn\'t!\' the March Hare. \'It was the first figure,\' said the Gryphon, half to Alice. \'Nothing,\' said Alice. \'Come, let\'s try the effect: the.', 0),
(40, 'eaque', 1985, 'Green', 82810, 31, 4, 51, 'Used', 4, 23331, 'Manual', 'THAT direction,\' waving the other was sitting on a crimson velvet cushion; and, last of all her riper years, the simple and loving heart of her childhood: and how she would catch a bad cold if she.', 'At last the Mock Turtle. \'Hold your tongue, Ma!\' said the Duchess, the Duchess! Oh! won\'t she be savage if I\'ve kept her eyes filled with tears again as she could, for the garden!\' and she went on,.', 0),
(41, 'animi', 2010, 'Black', 20793, 16, 4, 78, 'Used', 4, 85407, 'Manual', 'Gryphon, and the three were all turning into little cakes as they came nearer, Alice could hardly hear the very tones of the garden: the roses growing on it were nine o\'clock in the sun. (IF you.', 'The twelve jurors were writing down \'stupid things!\' on their slates, when the Rabbit just under the window, and on both sides at once. The Dormouse had closed its eyes by this time?\' she said to.', 0),
(42, 'ut', 2001, 'Green', 51586, 38, 2, 42, 'Used', 6, 63674, 'Automatic', 'King replied. Here the Dormouse denied nothing, being fast asleep. \'After that,\' continued the King. \'I can\'t explain it,\' said Alice, a good deal on where you want to go down the little dears came.', 'I know?\' said Alice, (she had grown in the chimney as she stood watching them, and he checked himself suddenly: the others looked round also, and all that,\' he said in a low, trembling voice..', 0),
(43, 'non', 1984, 'Blue', 36444, 32, 2, 39, 'Used', 6, 36167, 'Automatic', 'I will just explain to you never to lose YOUR temper!\' \'Hold your tongue!\' added the Gryphon; and then turned to the door, and the party sat silent for a little nervous about it just now.\' \'It\'s the.', 'I beg your pardon!\' cried Alice (she was so full of soup. \'There\'s certainly too much of a well--\' \'What did they live at the number of executions the Queen left off, quite out of sight before the.', 0),
(44, 'voluptatum', 1982, 'Black', 5345, 50, 2, 63, 'New', 3, 52433, 'Automatic', 'You see the Hatter asked triumphantly. Alice did not appear, and after a few minutes, and she said to a snail. \"There\'s a porpoise close behind us, and he\'s treading on my tail. See how eagerly the.', 'Do you think, at your age, it is all the while, and fighting for the garden!\' and she crossed her hands up to the other players, and shouting \'Off with her head!\' about once in a wondering tone..', 0),
(45, 'exercitationem', 1997, 'Blue', 77777, 28, 2, 91, 'Used', 2, 95192, 'Manual', 'Dinah, and saying to herself \'Suppose it should be raving mad after all! I almost wish I\'d gone to see what I eat\" is the capital of Rome, and Rome--no, THAT\'S all wrong, I\'m certain! I must be the.', 'Let me see: I\'ll give them a new kind of authority over Alice. \'Stand up and throw us, with the other: he came trotting along in a hot tureen! Who for such a thing. After a minute or two, she made.', 1),
(46, 'et', 2001, 'Black', 47260, 22, 4, 1, 'Used', 2, 86986, 'Automatic', 'Mock Turtle said: \'no wise fish would go round a deal too flustered to tell me who YOU are, first.\' \'Why?\' said the Cat. \'I\'d nearly forgotten to ask.\' \'It turned into a line along the passage into.', 'Alice. \'And ever since that,\' the Hatter said, tossing his head mournfully. \'Not I!\' he replied. \'We quarrelled last March--just before HE went mad, you know--\' \'But, it goes on \"THEY ALL RETURNED.', 0),
(47, 'qui', 2012, 'Black', 53915, 18, 2, 75, 'Used', 6, 6385, 'Manual', 'Gryphon: \'I went to him,\' the Mock Turtle yet?\' \'No,\' said Alice. \'And where HAVE my shoulders got to? And oh, my poor hands, how is it I can\'t see you?\' She was close behind it was sneezing and.', 'As soon as she ran. \'How surprised he\'ll be when he sneezes; For he can EVEN finish, if he had come to an end! \'I wonder what you\'re talking about,\' said Alice. \'What sort of lullaby to it in the.', 0),
(48, 'et', 2005, 'Red', 79535, 29, 4, 72, 'New', 4, 21084, 'Manual', 'Cheshire Cat: now I shall have to whisper a hint to Time, and round the table, but it had been. But her sister kissed her, and the happy summer days. THE.', 'Dormouse denied nothing, being fast asleep. \'After that,\' continued the Gryphon. \'We can do no more, whatever happens. What WILL become of me? They\'re dreadfully fond of beheading people here; the.', 1),
(49, 'rerum', 1984, 'Yallow', 88170, 24, 2, 46, 'Used', 2, 37403, 'Manual', 'And she began thinking over all she could remember them, all these changes are! I\'m never sure what I\'m going to be, from one minute to another! However, I\'ve got to come before that!\' \'Call the.', 'The question is, what?\' The great question certainly was, what? Alice looked all round the table, but there was no \'One, two, three, and away,\' but they began running about in the middle of her.', 0),
(50, 'aut', 1984, 'Green', 84346, 32, 4, 9, 'New', 6, 66328, 'Manual', 'Dormouse go on in the last word two or three times over to herself, as usual. \'Come, there\'s no meaning in it, \'and what is the driest thing I ever heard!\' \'Yes, I think I could, if I know is, it.', 'Now I growl when I\'m angry. Therefore I\'m mad.\' \'I call it sad?\' And she kept on good terms with him, he\'d do almost anything you liked with the other: the only difficulty was, that if you like!\'.', 0),
(51, 'perspiciatis', 1989, 'Black', 7493, 31, 4, 15, 'Used', 5, 51480, 'Automatic', 'Mock Turtle went on growing, and, as the game was in confusion, getting the Dormouse followed him: the March Hare and his buttons, and turns out his toes.\' [later editions continued as follows When.', 'Tortoise because he taught us,\' said the Mock Turtle persisted. \'How COULD he turn them out of the well, and noticed that one of the thing Mock Turtle said with a shiver. \'I beg your pardon!\' cried.', 0),
(52, 'veniam', 2013, 'Green', 85118, 41, 4, 39, 'New', 4, 22100, 'Automatic', 'She pitied him deeply. \'What is it?\' \'Why,\' said the Hatter. \'You MUST remember,\' remarked the King, the Queen, in a solemn tone, only changing the order of the ground, Alice soon began talking.', 'King. \'Nearly two miles high,\' added the Hatter, who turned pale and fidgeted. \'Give your evidence,\' said the Gryphon, and the pool rippling to the Mock Turtle. \'Hold your tongue, Ma!\' said the Mock.', 1),
(53, 'ut', 1990, 'Black', 97605, 22, 2, 54, 'Used', 6, 75041, 'Automatic', 'Dodo could not remember ever having seen in her life before, and behind them a railway station.) However, she did not venture to go after that savage Queen: so she set to work very diligently to.', 'Alice, \'but I must be off, and she looked up, and there she saw maps and pictures hung upon pegs. She took down a large kitchen, which was the fan and gloves. \'How queer it seems,\' Alice said to.', 1),
(54, 'est', 2016, 'Red', 48895, 49, 4, 41, 'New', 3, 20139, 'Automatic', 'Alice, \'I\'ve often seen them so often, you know.\' He was looking at the thought that she knew that were of the bottle was a little more conversation with her head!\' the Queen said to the other queer.', 'Alice, \'as all the while, till at last came a rumbling of little birds and animals that had made out what it might be hungry, in which case it would all come wrong, and she felt certain it must be.', 1),
(55, 'beatae', 2001, 'Green', 20773, 17, 2, 88, 'New', 5, 18123, 'Automatic', 'Alice. \'I mean what I used to it in a piteous tone. And the executioner ran wildly up and down in an angry tone, \'Why, Mary Ann, what ARE you talking to?\' said one of them say, \'Look out now, Five!.', 'Alice. \'Why, SHE,\' said the Dormouse; \'--well in.\' This answer so confused poor Alice, and looking anxiously about as she picked her way out. \'I shall sit here,\' the Footman went on in a hoarse.', 0),
(56, 'nihil', 1993, 'Green', 94886, 46, 4, 41, 'Used', 2, 75825, 'Automatic', 'I ever saw one that size? Why, it fills the whole party look so grave and anxious.) Alice could see it quite plainly through the glass, and she had made her feel very sleepy and stupid), whether the.', 'Suppress him! Pinch him! Off with his knuckles. It was so much at this, but at any rate a book written about me, that there was nothing on it in large letters. It was the White Rabbit, who said in.', 1),
(57, 'quisquam', 1990, 'Green', 81004, 41, 4, 90, 'New', 3, 96940, 'Manual', 'March Hare took the opportunity of saying to herself \'It\'s the Cheshire Cat, she was a real nose; also its eyes were looking up into the book her sister sat still and said to the other was sitting.', 'SOMEBODY ought to go near the King said to herself, \'to be going messages for a great hurry; \'this paper has just been picked up.\' \'What\'s in it?\' said the Queen had only one who had been for some.', 1),
(58, 'quo', 1990, 'Green', 65463, 32, 4, 77, 'New', 2, 14938, 'Manual', 'She had just begun to think that very few little girls in my kitchen AT ALL. Soup does very well without--Maybe it\'s always pepper that had slipped in like herself. \'Would it be murder to leave off.', 'While she was small enough to get through was more than nine feet high, and was a good many little girls in my life!\' Just as she leant against a buttercup to rest herself, and nibbled a little hot.', 0),
(59, 'pariatur', 1989, 'Yallow', 24217, 13, 4, 41, 'Used', 3, 77570, 'Automatic', 'Alice noticed, had powdered hair that WOULD always get into the Dormouse\'s place, and Alice looked at the White Rabbit, \'but it doesn\'t matter a bit,\' she thought it must make me smaller, I.', 'I see\"!\' \'You might just as if it makes rather a hard word, I will just explain to you never to lose YOUR temper!\' \'Hold your tongue!\' said the cook. \'Treacle,\' said a sleepy voice behind her..', 1),
(60, 'corrupti', 1986, 'Green', 83138, 28, 2, 42, 'Used', 4, 63886, 'Manual', 'Hatter. \'It isn\'t a bird,\' Alice remarked. \'Oh, you foolish Alice!\' she answered herself. \'How can you learn lessons in here? Why, there\'s hardly enough of it altogether; but after a fashion, and.', 'Hatter. \'It isn\'t mine,\' said the White Rabbit with pink eyes ran close by it, and behind it when she had not a moment like a wild beast, screamed \'Off with his nose Trims his belt and his buttons,.', 1),
(61, 'quibusdam', 2011, 'Red', 27436, 22, 2, 62, 'New', 6, 77563, 'Automatic', 'I am very tired of being such a dear little puppy it was!\' said Alice, who felt very curious thing, and longed to get an opportunity of adding, \'You\'re looking for the immediate adoption of more.', 'Cat again, sitting on the spot.\' This did not get dry again: they had settled down again into its nest. Alice crouched down among the bright flower-beds and the three gardeners who were lying round.', 0),
(62, 'odio', 2009, 'Black', 26418, 47, 2, 27, 'Used', 2, 23714, 'Manual', 'March Hare. \'Exactly so,\' said Alice. \'Nothing WHATEVER?\' persisted the King. \'Nearly two miles high,\' added the Dormouse. \'Fourteenth of March, I think I can say.\' This was such a wretched height.', 'And I declare it\'s too bad, that it led into the sea, though you mayn\'t believe it--\' \'I never went to him,\' said Alice very meekly: \'I\'m growing.\' \'You\'ve no right to grow larger again, and put it.', 0),
(63, 'aut', 2016, 'Green', 51787, 50, 4, 28, 'Used', 6, 7863, 'Automatic', 'I to do this, so she tried hard to whistle to it; but she knew that it seemed quite natural); but when the Rabbit began. Alice thought this must ever be A secret, kept from all the right size to do.', 'Duchess: \'what a clear way you go,\' said the Pigeon in a hoarse, feeble voice: \'I heard every word you fellows were saying.\' \'Tell us a story!\' said the voice. \'Fetch me my gloves this moment!\' Then.', 1),
(64, 'pariatur', 1998, 'Red', 89617, 24, 2, 70, 'Used', 5, 20639, 'Manual', 'The Queen had only one who had been to her, And mentioned me to introduce some other subject of conversation. While she was as much right,\' said the Eaglet. \'I don\'t quite understand you,\' she said,.', 'White Rabbit, trotting slowly back again, and made believe to worry it; then Alice, thinking it was out of the Mock Turtle. \'She can\'t explain MYSELF, I\'m afraid, but you might catch a bad cold if.', 0),
(65, 'iusto', 1984, 'Red', 68869, 38, 2, 28, 'New', 2, 38596, 'Automatic', 'This seemed to be seen--everything seemed to be Involved in this way! Stop this moment, I tell you!\' But she waited for a few minutes she heard a little way off, panting, with its legs hanging down,.', 'Alice and all sorts of things, and she, oh! she knows such a curious dream, dear, certainly: but now run in to your tea; it\'s getting late.\' So Alice got up this morning, but I think I may as well.', 0),
(66, 'culpa', 2016, 'Red', 81903, 21, 4, 10, 'New', 5, 8309, 'Automatic', 'What happened to me! When I used to it!\' pleaded poor Alice. \'But you\'re so easily offended!\' \'You\'ll get used up.\' \'But what am I to get rather sleepy, and went to school in the sea. The master was.', 'Alice was very like having a game of croquet she was exactly one a-piece all round. \'But she must have imitated somebody else\'s hand,\' said the Caterpillar. Alice said very politely, \'for I can\'t.', 1),
(67, 'excepturi', 2005, 'Yallow', 68735, 33, 4, 4, 'New', 4, 94654, 'Automatic', 'Alice knew it was quite surprised to find that she had to run back into the sky all the things I used to do:-- \'How doth the little door, so she helped herself to about two feet high: even then she.', 'Mouse with an M?\' said Alice. \'Who\'s making personal remarks now?\' the Hatter went on, \'you see, a dog growls when it\'s angry, and wags its tail when it\'s angry, and wags its tail about in the sand.', 1),
(68, 'ipsa', 1984, 'Green', 24516, 23, 2, 98, 'New', 6, 65737, 'Manual', 'This time there could be NO mistake about it: it was only a mouse that had a VERY unpleasant state of mind, she turned to the door, staring stupidly up into the wood to listen. The Fish-Footman.', 'I\'ve nothing to do.\" Said the mouse to the Duchess: \'flamingoes and mustard both bite. And the Gryphon went on talking: \'Dear, dear! How queer everything is queer to-day.\' Just then she remembered.', 1),
(69, 'rem', 1987, 'Yallow', 82569, 32, 4, 31, 'New', 6, 47117, 'Manual', 'And mentioned me to sell you a couple?\' \'You are old,\' said the King. \'It began with the other: he came trotting along in a natural way again. \'I should like to be a LITTLE larger, sir, if you could.', 'I say--that\'s the same thing a Lobster Quadrille is!\' \'No, indeed,\' said Alice. \'I wonder what Latitude was, or Longitude I\'ve got to?\' (Alice had been running half an hour or so, and giving it a.', 1),
(70, 'sed', 1999, 'Green', 95874, 17, 2, 80, 'New', 6, 6270, 'Automatic', 'AT ALL. Soup does very well without--Maybe it\'s always pepper that had a pencil that squeaked. This of course, Alice could not answer without a cat! It\'s the most confusing thing I ever saw in.', 'Bill! I wouldn\'t say anything about it, you know--\' \'What did they live at the frontispiece if you don\'t even know what you were never even introduced to a shriek, \'and just as I\'d taken the highest.', 0),
(71, 'dicta', 2008, 'Red', 65303, 21, 4, 94, 'Used', 4, 95249, 'Automatic', 'Tale They were just beginning to end,\' said the Caterpillar. \'Well, perhaps not,\' said the Cat. \'--so long as you can--\' \'Swim after them!\' screamed the Gryphon. \'The reason is,\' said the Duchess,.', 'As for pulling me out of sight before the trial\'s over!\' thought Alice. \'I\'m a--I\'m a--\' \'Well! WHAT are you?\' And then a great hurry. \'You did!\' said the Mock Turtle with a kind of authority among.', 0),
(72, 'commodi', 2015, 'Red', 35889, 15, 2, 15, 'Used', 2, 80425, 'Automatic', 'Two. Two began in a sulky tone; \'Seven jogged my elbow.\' On which Seven looked up and say \"How doth the little creature down, and felt quite relieved to see how he did it,) he did with the other.', 'I BEG your pardon!\' cried Alice hastily, afraid that she was playing against herself, for she had somehow fallen into it: there was a good deal frightened at the Mouse\'s tail; \'but why do you like.', 1),
(73, 'dignissimos', 1994, 'Red', 39431, 47, 4, 9, 'Used', 2, 94764, 'Automatic', 'Nile On every golden scale! \'How cheerfully he seems to suit them!\' \'I haven\'t the least idea what a dear quiet thing,\' Alice went on saying to herself \'Suppose it should be like then?\' And she.', 'King, \'or I\'ll have you got in your pocket?\' he went on, \'you throw the--\' \'The lobsters!\' shouted the Queen, \'Really, my dear, I think?\' he said in a sort of chance of this, so she helped herself.', 1),
(74, 'velit', 2016, 'Yallow', 15570, 44, 2, 53, 'New', 3, 46516, 'Automatic', 'This time there were three gardeners at it, busily painting them red. Alice thought decidedly uncivil. \'But perhaps he can\'t help that,\' said the White Rabbit, jumping up and down in an undertone to.', 'Alice called out to sea. So they got settled down again, the Dodo suddenly called out \'The race is over!\' and they can\'t prove I did: there\'s no use in the middle, being held up by wild beasts and.', 0),
(75, 'facere', 2010, 'Black', 93695, 35, 2, 47, 'Used', 4, 97890, 'Manual', 'Pigeon. \'I can see you\'re trying to invent something!\' \'I--I\'m a little shaking among the bright flower-beds and the Hatter was out of the Queen\'s shrill cries to the Gryphon. \'How the creatures.', 'Mouse, frowning, but very glad to find that she ought to be a book of rules for shutting people up like a snout than a real Turtle.\' These words were followed by a row of lamps hanging from the sky!.', 1),
(76, 'vitae', 2006, 'Blue', 59963, 47, 4, 34, 'New', 5, 57228, 'Automatic', 'I was sent for.\' \'You ought to have finished,\' said the Hatter, it woke up again as she spoke. (The unfortunate little Bill had left off sneezing by this time?\' she said to herself, \'if one only.', 'Alice thought to herself, \'I wish I hadn\'t quite finished my tea when I was sent for.\' \'You ought to be Number One,\' said Alice. \'Nothing WHATEVER?\' persisted the King. \'Shan\'t,\' said the.', 0),
(77, 'eum', 1984, 'Red', 42276, 13, 2, 52, 'New', 4, 51727, 'Automatic', 'There was nothing on it except a tiny little thing!\' said the March Hare. The Hatter opened his eyes. He looked anxiously round, to make ONE respectable person!\' Soon her eye fell on a little.', 'Alice in a tone of delight, which changed into alarm in another moment, splash! she was about a foot high: then she walked sadly down the chimney close above her: then, saying to herself in the air..', 1),
(78, 'modi', 2005, 'Black', 77281, 22, 4, 63, 'Used', 2, 42948, 'Manual', 'While the Duchess asked, with another dig of her favourite word \'moral,\' and the pair of white kid gloves and a crash of broken glass, from which she had put on his spectacles and looked at the.', 'I suppose you\'ll be asleep again before it\'s done.\' \'Once upon a low voice, \'Your Majesty must cross-examine THIS witness.\' \'Well, if I was, I shouldn\'t want YOURS: I don\'t want to be?\' it asked..', 0),
(79, 'itaque', 1986, 'Black', 50820, 37, 2, 53, 'Used', 4, 25981, 'Manual', 'Alice. \'I wonder what Latitude was, or Longitude I\'ve got to grow up any more HERE.\' \'But then,\' thought Alice, \'and those twelve creatures,\' (she was so much frightened that she wasn\'t a really.', 'I could not think of anything to say, she simply bowed, and took the cauldron of soup off the top of her ever getting out of breath, and said anxiously to herself, and nibbled a little snappishly..', 1),
(80, 'velit', 1982, 'Red', 88618, 35, 4, 88, 'Used', 3, 57600, 'Automatic', 'White Rabbit. She was moving them about as much as she spoke; \'either you or your head must be a comfort, one way--never to be told so. \'It\'s really dreadful,\' she muttered to herself, as well as.', 'Caterpillar, and the Queen\'s voice in the middle. Alice kept her waiting!\' Alice felt that there was a little wider. \'Come, it\'s pleased so far,\' said the Gryphon. \'I\'ve forgotten the Duchess.', 1),
(81, 'est', 1995, 'Yallow', 14445, 41, 2, 13, 'New', 3, 91926, 'Manual', 'Soup? Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the Lizard\'s slate-pencil, and the White Rabbit, jumping up in a minute or two,.', 'Alice soon came to ME, and told me he was obliged to say whether the blows hurt it or not. \'Oh, PLEASE mind what you\'re at!\" You know the song, perhaps?\' \'I\'ve heard something splashing about in the.', 1),
(82, 'adipisci', 1994, 'Blue', 68999, 23, 4, 42, 'New', 2, 48780, 'Automatic', 'Was kindly permitted to pocket the spoon: While the Owl and the Panther were sharing a pie--\' [later editions continued as follows When the procession came opposite to Alice, they all moved off, and.', 'Gryphon: and it sat for a baby: altogether Alice did not like the Mock Turtle recovered his voice, and, with tears again as quickly as she could remember about ravens and writing-desks, which wasn\'t.', 1),
(83, 'a', 2003, 'Green', 75154, 23, 2, 28, 'New', 4, 40305, 'Manual', 'The door led right into a pig, my dear,\' said Alice, timidly; \'some of the e--e--evening, Beautiful, beautiful Soup!\' CHAPTER XI. Who Stole the Tarts? The King turned pale, and shut his eyes.--\'Tell.', 'At last the Dodo replied very politely, \'for I can\'t get out at all a pity. I said \"What for?\"\' \'She boxed the Queen\'s hedgehog just now, only it ran away when it saw mine coming!\' \'How do you know.', 1),
(84, 'eveniet', 1995, 'Green', 72591, 36, 4, 77, 'Used', 2, 77555, 'Manual', 'Mock Turtle went on, \'if you don\'t explain it as she spoke--fancy CURTSEYING as you\'re falling through the wood. \'It\'s the Cheshire Cat: now I shall fall right THROUGH the earth! How funny it\'ll.', 'Alice called out as loud as she remembered trying to find herself still in sight, and no room to grow up any more HERE.\' \'But then,\' thought Alice, as she was a treacle-well.\' \'There\'s no such.', 1),
(85, 'nam', 1981, 'Blue', 54219, 33, 2, 49, 'Used', 2, 51167, 'Automatic', 'Off with his head!\"\' \'How dreadfully savage!\' exclaimed Alice. \'And ever since that,\' the Hatter was the Cat said, waving its tail when it\'s pleased. Now I growl when I\'m angry. Therefore I\'m mad.\'.', 'The jury all looked so good, that it is!\' As she said this, she was getting quite crowded with the strange creatures of her childhood: and how she would keep, through all her life. Indeed, she had.', 1),
(86, 'tenetur', 2013, 'Black', 61280, 12, 2, 63, 'Used', 6, 60508, 'Automatic', 'Arithmetic--Ambition, Distraction, Uglification, and Derision.\' \'I never heard of such a fall as this, I shall be a walrus or hippopotamus, but then she had plenty of time as she could, \'If you knew.', 'Hatter: \'it\'s very interesting. I never heard it say to this: so she bore it as you go on? It\'s by far the most important piece of bread-and-butter in the last word with such sudden violence that.', 1),
(87, 'ex', 1989, 'Black', 22558, 47, 2, 28, 'New', 6, 45762, 'Manual', 'Mouse, in a long, low hall, which was a large cauldron which seemed to think that proved it at all; and I\'m I, and--oh dear, how puzzling it all came different!\' Alice replied eagerly, for she was.', 'King. The next thing was snorting like a snout than a pig, my dear,\' said Alice, in a court of justice before, but she felt a very decided tone: \'tell her something about the temper of your nose--.', 0),
(88, 'doloribus', 1999, 'Yallow', 79556, 22, 4, 39, 'Used', 6, 37119, 'Manual', 'So she stood looking at the sudden change, but very politely: \'Did you speak?\' \'Not I!\' he replied. \'We quarrelled last March--just before HE went mad, you know--\' She had already heard her voice.', 'Dodo, pointing to Alice a good thing!\' she said to herself \'Suppose it should be like then?\' And she opened it, and kept doubling itself up and went on: \'--that begins with an important air, \'are.', 1),
(89, 'reiciendis', 1981, 'Black', 36831, 42, 4, 73, 'Used', 6, 6939, 'Manual', 'It\'s high time to hear his history. I must go back and see after some executions I have none, Why, I wouldn\'t say anything about it, you may stand down,\' continued the Gryphon. \'Turn a somersault in.', 'Gryphon is, look at it!\' This speech caused a remarkable sensation among the trees, a little three-legged table, all made a dreadfully ugly child: but it all is! I\'ll try if I must, I must,\' the.', 1),
(90, 'corporis', 2018, 'Black', 77022, 46, 4, 87, 'Used', 4, 75774, 'Manual', 'TRUE--\" that\'s the jury-box,\' thought Alice, \'shall I NEVER get any older than I am so VERY nearly at the sides of it; so, after hunting all about for some minutes. Alice thought she had asked it.', 'This did not like to have got in as well,\' the Hatter said, turning to Alice, they all crowded round it, panting, and asking, \'But who has won?\' This question the Dodo had paused as if his heart.', 1),
(91, 'quibusdam', 1982, 'Yallow', 91820, 48, 4, 49, 'Used', 2, 83904, 'Automatic', 'Alice, (she had kept a piece of evidence we\'ve heard yet,\' said the Dodo solemnly, rising to its children, \'Come away, my dears! It\'s high time you were INSIDE, you might like to try the thing Mock.', 'I do so like that curious song about the reason so many out-of-the-way things to happen, that it felt quite relieved to see it again, but it had grown so large a house, that she wasn\'t a bit afraid.', 1),
(92, 'dolorem', 2004, 'Blue', 38287, 14, 2, 94, 'New', 6, 28606, 'Automatic', 'Mock Turtle. \'And how did you begin?\' The Hatter was the matter on, What would become of you? I gave her one, they gave him two, You gave us three or more; They all made a memorandum of the trees.', 'Dinn may be,\' said the Hatter: \'it\'s very easy to take out of the edge of the court. (As that is enough,\' Said his father; \'don\'t give yourself airs! Do you think, at your age, it is you hate--C and.', 1),
(93, 'adipisci', 2004, 'Blue', 97643, 24, 4, 59, 'New', 3, 1502, 'Automatic', 'So Alice got up very carefully, with one elbow against the door, and the Queen shrieked out. \'Behead that Dormouse! Turn that Dormouse out of the way down one side and up I goes like a thunderstorm..', 'Seaography: then Drawling--the Drawling-master was an uncomfortably sharp chin. However, she got used to say.\' \'So he did, so he with his head!\' she said, \'than waste it in with the clock. For.', 0),
(94, 'consequatur', 1993, 'Blue', 69410, 33, 2, 35, 'New', 2, 77831, 'Automatic', 'I\'m sure I have to fly; and the poor little thing grunted in reply (it had left off staring at the Queen, turning purple. \'I won\'t!\' said Alice. \'What IS a Caucus-race?\' said Alice; not that she.', 'I believe.\' \'Boots and shoes under the sea--\' (\'I haven\'t,\' said Alice)--\'and perhaps you haven\'t found it advisable--\"\' \'Found WHAT?\' said the Footman. \'That\'s the reason of that?\' \'In my youth,\'.', 1),
(95, 'sunt', 1992, 'Red', 79442, 44, 2, 3, 'New', 6, 90542, 'Automatic', 'They had a consultation about this, and Alice guessed in a soothing tone: \'don\'t be angry about it. And yet you incessantly stand on their slates, \'SHE doesn\'t believe there\'s an atom of meaning in.', 'Fainting in Coils.\' \'What was THAT like?\' said Alice. \'You must be,\' said the King: \'however, it may kiss my hand if it makes rather a hard word, I will tell you just now what the moral of that.', 0),
(96, 'occaecati', 2009, 'Yallow', 61822, 42, 2, 87, 'Used', 6, 62342, 'Manual', 'King, \'unless it was very like having a game of play with a whiting. Now you know.\' \'Not at first, perhaps,\' said the youth, \'one would hardly suppose That your eye was as steady as ever; Yet you.', 'White Rabbit read out, at the door--I do wish they COULD! I\'m sure she\'s the best of educations--in fact, we went to the seaside once in her face, and was delighted to find herself still in.', 1),
(97, 'eaque', 2011, 'Blue', 6422, 29, 2, 90, 'Used', 6, 81063, 'Manual', 'Pray, what is the reason and all the first witness,\' said the youth, \'and your jaws are too weak For anything tougher than suet; Yet you finished the first figure,\' said the Duchess. \'I make you.', 'Five, who had not as yet had any sense, they\'d take the place where it had a VERY turn-up nose, much more like a mouse, you know. Please, Ma\'am, is this New Zealand or Australia?\' (and she tried.', 1),
(98, 'qui', 2004, 'Green', 17025, 41, 4, 35, 'Used', 2, 10306, 'Automatic', 'Alice! Come here directly, and get ready for your interesting story,\' but she thought of herself, \'I don\'t much care where--\' said Alice. \'I don\'t know of any one; so, when the Rabbit was still in.', 'Five! Don\'t go splashing paint over me like a telescope.\' And so it was talking in his sleep, \'that \"I breathe when I breathe\"!\' \'It IS the fun?\' said Alice. \'I mean what I get\" is the same size: to.', 1),
(99, 'sunt', 1985, 'Yallow', 39728, 29, 2, 100, 'New', 4, 35125, 'Automatic', 'So Bill\'s got the other--Bill! fetch it back!\' \'And who are THESE?\' said the Hatter. This piece of it at last, they must be removed,\' said the last time she found that it signifies much,\' she said.', 'The Duchess took no notice of her head through the door, and tried to curtsey as she was terribly frightened all the jelly-fish out of the Mock Turtle sang this, very slowly and sadly:-- \'\"Will you.', 0),
(100, 'aut', 1991, 'Blue', 11971, 24, 2, 8, 'Used', 5, 87768, 'Automatic', 'Alice asked. The Hatter opened his eyes were nearly out of this sort of way to change them--\' when she had never heard of uglifying!\' it exclaimed. \'You know what to beautify is, I suppose?\' said.', 'This seemed to be a grin, and she heard was a little nervous about it in with the words a little, and then they both sat silent for a minute or two to think that there ought! And when I learn.', 0),
(101, 'Sonata', 2007, 'Black', 88000, 20, 4, 1, 'Used', 5, 8000, 'Automatic', 'asdasdasd', '<ul><li>asdasdsad&nbsp;&nbsp;</li><li>asdasdasdasdasd</li><li>asdasdsdaifjsd&nbsp;</li><li>fdslajgareig</li><li>dslkagjr d</li><li>adsflkasjd fa</li></ul>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cars_image`
--

CREATE TABLE `cars_image` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars_image`
--

INSERT INTO `cars_image` (`id`, `car_id`, `img`) VALUES
(86, 101, '6794_101.png'),
(87, 101, '31757_101.png'),
(88, 101, '48420_101.png'),
(89, 101, '25456_101.png'),
(90, 101, '38197_101.png'),
(91, 101, '40564_101.png'),
(92, 101, '39010_101.png'),
(93, 101, '13568_101.png'),
(94, 101, '81546_101.png'),
(95, 101, '66166_101.png'),
(96, 101, '37057_101.png'),
(97, 101, '94781_101.png'),
(98, 101, '1084_101.png'),
(99, 101, '25399_101.png'),
(102, 83, '49949_83.png'),
(103, 83, '9356_83.png'),
(104, 100, '33435_100.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`, `description`) VALUES
(1, 'distinctio', '', 'Occaecati officiis inventore pariatur qui accusantium. Mollitia consequuntur qui et repellat praesentium veniam laborum aut. Et totam tempore sapiente occaecati voluptatibus aut.'),
(2, 'laborum', '', 'Recusandae qui hic et modi. Explicabo doloribus exercitationem praesentium tempora et eaque. Molestiae commodi aperiam in eum inventore dolorem.'),
(3, 'sit', '', 'Harum quis sed perspiciatis incidunt aut adipisci voluptates. Ipsam voluptates dignissimos ut cum rerum exercitationem. Consequatur hic numquam aliquam adipisci consequuntur voluptatem enim et.'),
(4, 'nobis', '', 'Ratione unde iure laborum excepturi repellendus dolores distinctio ut. Earum est ipsum voluptas consequatur omnis.'),
(5, 'mollitia', '', 'Minus corporis excepturi nihil molestias sed quidem impedit. Dolores minus mollitia rem cum dignissimos earum. Eum quas voluptas aperiam beatae ab.'),
(6, 'nobis', '', 'Vitae et architecto et ut voluptatem in iste rerum. Ut nam voluptate sint voluptatibus facere autem. Qui et sequi illum neque sed officiis repellendus unde. Sed praesentium ea amet et consequatur a sed est. Et consequatur accusantium alias.'),
(7, 'corrupti', '', 'Velit doloribus laborum sit esse ullam dolor voluptatum. Saepe suscipit quae explicabo molestiae. Quibusdam autem cum ad sunt qui. Facilis quia eum est quis.'),
(8, 'voluptatem', '', 'Alias aut expedita officiis et iste. Et nulla rerum dolorem ut aperiam consequuntur nobis. Est et quae qui eligendi nihil ipsum quam.'),
(9, 'sint', '', 'Non maiores repellat quia aut ipsum. Consequatur qui ad qui possimus sunt omnis doloribus. Vel reiciendis modi est nostrum magnam mollitia ex. Incidunt itaque officia deleniti beatae qui voluptas.'),
(10, 'sit', '', 'Exercitationem corrupti eaque facilis voluptate. Maiores nobis dolores voluptatem aliquam quia et. Quas sint est architecto velit.'),
(11, 'qui', '', 'Quasi tempora et enim ut veritatis in maxime placeat. Aspernatur in officia voluptas sit sint velit. Odit ut non ipsum officiis illo. Earum et quo expedita fugit.'),
(12, 'et', '', 'Adipisci ullam enim nihil deserunt at officiis autem. Voluptatem mollitia voluptates dolor et debitis non unde animi. Qui necessitatibus tempora dolorem vel quis sed. Optio sint voluptatem mollitia ea.'),
(13, 'ut', '', 'Maxime dolor odio aspernatur consectetur. Sed molestiae earum et illo inventore non cumque. Id dolor sed dolorem dolorem.'),
(14, 'sequi', '', 'Magnam et nulla occaecati vel numquam omnis ut quod. Sapiente molestiae mollitia est voluptas quisquam aspernatur. Placeat esse possimus iste beatae.'),
(15, 'aliquam', '', 'Et aut cumque quos placeat libero cumque ratione. Labore alias aut perspiciatis dolorem. Sint asperiores quia possimus vel qui qui. Minima voluptates ea quisquam vel.'),
(16, 'sed', '', 'Ea est vel recusandae quod sunt ad. Voluptatem magnam consequatur repudiandae fuga voluptatem rerum. Nihil reiciendis aut aut sint omnis ut et rerum. Nisi consequuntur ab minus repellendus incidunt molestiae.'),
(17, 'eum', '', 'Consequuntur et velit voluptatibus voluptatem natus voluptatem. Praesentium a totam qui delectus accusamus quia. Eos voluptatem consequatur dolores maxime et.'),
(18, 'tempore', '', 'Modi dolorem nihil quos facere sed reiciendis eum. Sed tempore omnis nostrum porro iste inventore dolor. Aut voluptatem porro quaerat beatae non. Maiores quae enim et.'),
(19, 'quia', '', 'Molestiae omnis fuga necessitatibus quia tempora. Blanditiis minima eaque sunt quia iste. Alias sapiente quia nobis doloribus voluptatum illum.'),
(20, 'et', '', 'Eos ut dolores autem quis animi nobis ipsam. Necessitatibus ab dolorem sit dolorem enim ipsa sunt aut. Rerum maxime est commodi recusandae asperiores quis nam.'),
(21, 'sed', '', 'Natus voluptatibus dolores eligendi voluptatum incidunt dolorem nisi. Non corrupti id est id enim ut tempore alias. Hic consequuntur doloremque et aspernatur nobis quo qui non. At sunt amet sed.'),
(22, 'non', '', 'Perferendis suscipit natus sint voluptatem. Sint pariatur id modi ea mollitia. Veniam nesciunt et ut nam. Fuga ut minus vero.'),
(23, 'delectus', '', 'Laboriosam hic veritatis animi rem aut aliquam. Eligendi culpa et alias ut. Assumenda sit doloremque consequatur consequatur sint enim saepe eum. Neque illo provident in blanditiis id odio dolorum ut.'),
(24, 'iste', '', 'Quo sit repudiandae est nostrum vitae. Voluptas sit dolorum earum autem. Excepturi ipsa natus ex rerum ab quia. Voluptas ducimus tempora minima maiores soluta dolores.'),
(25, 'illo', '', 'Nemo fugiat cupiditate amet. Reiciendis vitae aut unde et. Aut dolores consequatur quo nam aut velit est.'),
(26, 'vero', '', 'Ut quidem velit in veritatis reprehenderit molestias non nam. Culpa rerum laudantium voluptatem aperiam adipisci cupiditate error. Fugiat animi placeat repudiandae. Nulla consequuntur eos sint sed omnis autem.'),
(27, 'aut', '', 'Numquam ipsam quis est maiores perspiciatis rem perferendis. Consequuntur odit ratione qui et consectetur. Et ut accusamus voluptatem rerum nesciunt voluptatem quis. Corrupti incidunt minima cupiditate ut libero est.'),
(28, 'ut', '', 'Enim saepe odio enim dicta. Provident veniam qui cupiditate minima ullam iste quas. Voluptates iusto consequatur fugit voluptas cumque et tenetur.'),
(29, 'perspiciatis', '', 'Est voluptates quia expedita qui minima aut mollitia maiores. Exercitationem debitis quisquam laboriosam velit soluta minima. Qui quos eum explicabo molestias. Sit officia dolorem cupiditate ex architecto. Molestias mollitia in qui.'),
(30, 'repudiandae', '', 'Quasi accusamus quae dicta provident sit et quasi. Aut rerum dolor ea unde accusantium pariatur quam recusandae. Voluptates sed accusantium ipsam ipsum. Reiciendis dolores est dolores fugit voluptas.'),
(31, 'voluptatem', '', 'Ad eum libero veniam atque. Eligendi voluptas nobis tenetur omnis.'),
(32, 'assumenda', '', 'Iste illo iusto velit nobis omnis illum voluptate. Deleniti laborum molestiae tenetur. Cumque non eum eum fuga sit. Eligendi in natus molestiae perferendis enim voluptatum qui.'),
(33, 'sunt', '', 'Non amet in quaerat et. Voluptatum illum sit quia nihil quisquam sed consequuntur. Quis quis voluptatem fugiat autem vel beatae. Ut unde dignissimos fugiat sit necessitatibus. Ab libero quia quia doloremque excepturi quae.'),
(34, 'voluptatem', '', 'Quasi occaecati consequatur aliquam voluptatum ut qui. Ratione ut harum magni. Et et qui ullam sint expedita rerum.'),
(35, 'dolorum', '', 'In fuga repellat numquam adipisci nesciunt est est. Consequatur nihil veniam iusto necessitatibus. Ad veniam qui praesentium ut vel.'),
(36, 'corrupti', '', 'Nemo autem maxime rem non quidem ut pariatur. Voluptas qui placeat provident. Accusantium qui ut consectetur repellat recusandae et porro. Ut quasi assumenda et dolor consequatur.'),
(37, 'qui', '', 'Maxime quia aut quibusdam voluptates sint voluptates officiis. Dolorem repellat aut dolores ipsa quia. Nostrum modi blanditiis in quaerat reiciendis.'),
(38, 'repellendus', '', 'Sit vel exercitationem dolores. Deleniti fuga omnis et incidunt. Ipsum molestiae officia dolor impedit et sed repellendus.'),
(39, 'alias', '', 'Id sed incidunt perferendis voluptatibus repellendus. Quasi consequatur ea quasi architecto dolorem. Asperiores ratione quia quo.'),
(40, 'veniam', '', 'Sed maiores quia id in magnam voluptas. Cumque consequatur tempore nihil et ipsa odit tempore et. Dignissimos laborum laudantium consequuntur odio. Et iusto consequatur eum expedita sit quo. Et sunt ut asperiores assumenda officia.'),
(41, 'nihil', '', 'Debitis tempore vitae distinctio. Totam facilis nam totam molestiae atque at dolorem. Veritatis deleniti aut aut sit.'),
(42, 'vitae', '', 'Expedita iure eos laboriosam omnis nesciunt. Voluptatem dolor illum in id incidunt dignissimos dolore. Aperiam inventore maiores numquam distinctio ipsum.'),
(43, 'sed', '', 'Ea sed voluptate consequatur aut nihil. Eos architecto alias aut qui delectus beatae. Quis ut maxime eos.'),
(44, 'consequatur', '', 'Aut consequuntur cum cupiditate provident. Nihil ipsa et tempora deserunt voluptas ut suscipit. Ipsam eos corrupti ipsum commodi. Cumque esse a omnis voluptatum tempore labore minima.'),
(45, 'officia', '', 'Illo dolorem numquam sit. Dolorem nihil illum nemo at vitae aut. Molestiae sit repellendus vero magni. Nesciunt impedit quia qui consequatur ab eveniet tempora.'),
(46, 'fuga', '', 'Distinctio ut magnam reprehenderit voluptas. Enim dolorem voluptas enim aspernatur sed praesentium. Doloribus sint molestiae sed dolores doloremque debitis ut. Doloremque asperiores quia ducimus id.'),
(47, 'neque', '', 'Magnam odio cupiditate ipsa rerum ut aut voluptatem. Repellendus minus molestias quos id. Saepe consectetur vel aliquam quod.'),
(48, 'sed', '', 'Magnam facilis similique velit magni eveniet. Cupiditate adipisci ut animi et. Ea omnis dolorem consequatur sint consequatur similique rerum.'),
(49, 'sapiente', '', 'Sapiente corrupti iusto maxime sit. Et earum aperiam voluptates perferendis quia eos quidem et. Et deleniti repellat nostrum voluptate totam excepturi. Ea veritatis eaque est nihil vitae neque debitis veniam.'),
(50, 'et', '', 'Veritatis quod eius laboriosam et. Soluta occaecati ea fugiat. Facere modi dolor earum quod. Tempora ea velit eum consequatur dolorem qui dolorem.'),
(51, 'qui', '', 'Nesciunt fugit voluptas illum dolore reiciendis voluptas voluptas. Magnam ea porro alias. Reiciendis odio cumque tempora maiores qui alias deleniti ut. In quisquam sunt et cum quas pariatur omnis.'),
(52, 'non', '', 'Officiis sint accusamus consequatur numquam sunt nostrum error. Deleniti praesentium molestias nobis distinctio deleniti consequatur. Exercitationem veritatis rem aut nulla. Iusto aut qui non consequatur.'),
(53, 'unde', '', 'Quibusdam nesciunt et ab quos. Dignissimos vel accusantium ut quasi. Magnam qui dicta alias quidem. Est rerum ut consequuntur consectetur. Cum voluptate eligendi sed.'),
(54, 'a', '', 'Cumque accusantium eum exercitationem quos quibusdam nam sit consectetur. Distinctio quis repudiandae ullam voluptatibus mollitia eligendi. Enim in aut eligendi est. Quaerat incidunt accusantium dolores assumenda possimus ratione dolorem tempore.'),
(55, 'incidunt', '', 'Ut est qui voluptatibus necessitatibus voluptas voluptates. Asperiores qui vero placeat corporis assumenda mollitia est reiciendis. Doloribus voluptas ut doloribus magni voluptas quis. Ab eligendi molestiae ad autem.'),
(56, 'facilis', '', 'Voluptas amet dolorem et esse commodi sapiente. Tempore non accusamus est iste cumque.'),
(57, 'sit', '', 'Sit est harum est aut. Maiores rerum temporibus ab optio. Id sint doloribus earum.'),
(58, 'voluptas', '', 'Exercitationem dolor laborum debitis nobis rerum. Fuga asperiores repudiandae ipsa amet odio quia. Dolores earum architecto molestiae modi et.'),
(59, 'id', '', 'Corrupti fugiat dolor perferendis omnis. Harum consequatur et ex adipisci. Velit aut officiis adipisci necessitatibus incidunt placeat et. Explicabo totam aut incidunt laboriosam nisi.'),
(60, 'voluptatem', '', 'Et repellendus porro corporis voluptas. Omnis magnam adipisci architecto rerum laboriosam aut commodi. Nostrum ab quod vel qui suscipit. Quia saepe qui reprehenderit culpa quasi nulla consequuntur.'),
(61, 'est', '', 'Culpa eaque ex veniam voluptatem cupiditate non. Ea temporibus quos at veniam nostrum. Eveniet ex quod rerum aperiam soluta delectus est praesentium. Cumque eius ratione occaecati tempore aut. Unde ex velit accusamus eius.'),
(62, 'adipisci', '', 'Explicabo aut sint at sequi asperiores harum. Consequatur illum omnis sit ratione. Recusandae ut esse quis quibusdam.'),
(63, 'natus', '', 'Natus aut molestiae quos sit natus nobis. Maxime provident iste dolorem voluptatum. Dicta eos consectetur doloremque qui voluptas. Temporibus iste autem ut qui.'),
(64, 'officia', '', 'Autem sapiente alias natus ipsam possimus. Sapiente aut voluptas blanditiis minus sequi molestias.'),
(65, 'architecto', '', 'Molestias consequatur ea dolore rem corporis et quos. Sapiente a natus repellendus occaecati totam ut voluptates. Enim aliquam facere quia sit non illum. Iste natus odit fugiat exercitationem.'),
(66, 'qui', '', 'Est voluptatem dolorem rem sed ipsa ut. Officiis voluptatem consequatur qui quaerat rerum distinctio totam. Autem rem veniam illo fuga inventore consequuntur laborum.'),
(67, 'repellendus', '', 'Nihil dolor aut ex ducimus ut adipisci. Consequatur nobis sequi similique error voluptatum. Ut adipisci voluptatem recusandae et.'),
(68, 'fuga', '', 'Qui aut ut aliquid tenetur id. Debitis et praesentium omnis. Eum sunt quidem est repellendus. Qui dolor aliquam vitae itaque rerum iusto et.'),
(69, 'iusto', '', 'Laboriosam asperiores occaecati dolor cum natus. Accusantium voluptas neque assumenda quia non molestiae. Nobis suscipit a quia corporis qui eaque ex.'),
(70, 'qui', '', 'Adipisci suscipit aperiam nihil cupiditate magni. Laudantium vitae sunt rerum cupiditate. Voluptas saepe consequatur sit quam doloribus quod qui. Voluptas consequatur tempora nihil.'),
(71, 'rerum', '', 'Similique optio deleniti ipsum. Qui itaque voluptatibus molestiae consequatur autem iusto. Eaque et placeat laborum aliquid minima ut. Amet asperiores nihil commodi voluptatum non neque temporibus. Quibusdam maiores et sed autem.'),
(72, 'modi', '', 'Tenetur consequatur ut et deserunt ipsa non voluptate. Est nihil voluptate delectus sit blanditiis aut autem. Repellendus quos illo qui sint earum cum nostrum.'),
(73, 'inventore', '', 'Minus et tempora sapiente ut. Qui laudantium ut voluptatem. Non sint dolor possimus et totam sed aliquam.'),
(74, 'eaque', '', 'Modi ea cumque laborum quia quaerat assumenda quo. Ad facilis dolorem rerum beatae natus. Et exercitationem iusto reprehenderit asperiores. Blanditiis ut eos sunt consequuntur vel repellendus.'),
(75, 'ducimus', '', 'Velit illo corporis est et dolor. Commodi fugiat harum voluptatem quia iure dolor. Aut quia quidem hic eum. Delectus laudantium ut soluta voluptatem consectetur.'),
(76, 'in', '', 'Nisi eum sed deleniti repellat ut corrupti. Atque nihil aut et et. Qui sed dolorem adipisci natus. Aspernatur velit distinctio et ut facere. Accusamus dolores ipsa ut facilis.'),
(77, 'sed', '', 'Reiciendis impedit voluptatem commodi repudiandae. Magnam optio commodi ut aut delectus. Iste culpa illum rerum. Quaerat nihil voluptas minus qui est omnis omnis.'),
(78, 'aliquam', '', 'Fugit alias aut praesentium ut praesentium. Nihil esse debitis numquam amet iure. Sequi enim sit aut ducimus.'),
(79, 'et', '', 'Aut nulla ut ut. Quo vel qui aliquam sequi in. Aliquid omnis sint eveniet commodi autem natus.'),
(80, 'ea', '', 'Recusandae optio ut laborum vel alias exercitationem qui. Ut et voluptatem reprehenderit magnam distinctio alias. Natus reprehenderit quia similique sapiente rem ratione. Et consequatur at rerum dolorum quasi iste.'),
(81, 'nemo', '', 'Commodi voluptatem sapiente sit qui. Nihil saepe dolorem aperiam amet molestias nihil. Voluptas ipsam sed et cum soluta non cumque omnis. Ex atque sunt possimus et est pariatur repudiandae nulla.'),
(82, 'facere', '', 'Et blanditiis eos culpa totam in. Autem sed repellendus et incidunt. Deserunt at quam est quia est. Corporis impedit iusto est sint et perspiciatis molestiae modi.'),
(83, 'sed', '', 'Veritatis ab a expedita laboriosam. Sint quae nihil ipsam exercitationem. Molestias quo omnis quia et ex quaerat magni doloribus. Alias perspiciatis esse et quae neque quo.'),
(84, 'tempora', '', 'Explicabo exercitationem delectus quos soluta. Ab accusantium sint autem harum enim dolore perferendis. Est eveniet sit quae quis. Officia ex est in ullam.'),
(85, 'ipsum', '', 'Veniam pariatur sint et quia. Modi et molestiae veritatis ut porro necessitatibus at. Vel ut dolorem possimus cupiditate necessitatibus et est. Veniam incidunt iusto reprehenderit ipsum laboriosam nesciunt reiciendis.'),
(86, 'expedita', '', 'Aspernatur aut rerum debitis incidunt rerum possimus similique. Delectus similique nam libero debitis dolor. Alias illo aut at similique quibusdam qui.'),
(87, 'quae', '', 'Ut dolorum dolores ea velit voluptate doloribus minima. Ut perferendis omnis enim cum eligendi enim. Deserunt non inventore accusamus placeat illum voluptas. Et et optio repellendus commodi exercitationem.'),
(88, 'soluta', '', 'Blanditiis officiis et et natus velit ab enim. Eaque qui delectus consequatur perferendis.'),
(89, 'omnis', '', 'Aut eius ullam nihil quo error inventore eaque. Eveniet facere ut aut sequi. Harum impedit ratione facere sed ipsum ab quia provident. Cupiditate quia qui assumenda. Officiis est et officia velit.'),
(90, 'id', '', 'Consequatur incidunt a nulla dolor dolores. Odio et expedita est nam sit dolorum deserunt autem. Hic optio recusandae ea voluptas rerum facilis sint. Et aliquid temporibus ut voluptas quibusdam.'),
(91, 'et', '', 'Quia sit nemo commodi sit error placeat corrupti. Quibusdam quo iure et nihil veniam recusandae ducimus iste. Non asperiores autem a enim nostrum quas omnis sint.'),
(92, 'voluptates', '', 'Et enim libero et et. Et veniam voluptatem sed similique ea commodi praesentium. Est minus eius perferendis fugiat. Quibusdam aliquam optio perferendis veniam.'),
(93, 'rerum', '', 'Error et cupiditate molestias. Repellat rerum reprehenderit molestiae voluptatem suscipit. Ea dolorem sit assumenda dolores et dolor aut. Adipisci sit id voluptatem non nihil.'),
(94, 'aut', '', 'Non animi illum earum sunt rerum id accusantium. Incidunt et enim ipsum tempore sunt ipsum. Omnis est ipsum sint dolorem dignissimos et. Odio laboriosam dolore tempora.'),
(95, 'quis', '', 'Qui voluptatem doloribus repellendus magni quo. Similique voluptates aliquid ducimus in asperiores. Tempora accusamus molestiae aliquam qui veritatis. Pariatur animi neque cumque dolorem quia.'),
(96, 'aut', '', 'Voluptas reprehenderit nihil unde exercitationem ratione quis ipsa. Rerum amet ut odio ullam recusandae incidunt aut dignissimos. Accusamus voluptatibus voluptatem dolore voluptas.'),
(97, 'eveniet', '', 'Ea non numquam et ducimus consequatur repudiandae aliquam. Quibusdam sint aliquid et incidunt dolor esse sint. Sint enim tempore eum sed assumenda dolor doloribus ipsam. Ut ad ex velit esse perferendis.'),
(98, 'qui', '', 'Cum dolore dolorem voluptatibus velit consequatur aut. Ut blanditiis eveniet in earum delectus ex.'),
(99, 'doloremque', '', 'Odit temporibus aliquam vel exercitationem iure. Maiores tempora doloribus neque voluptatum. Labore dicta quidem est voluptatem corrupti aut.'),
(100, 'voluptatem', '', 'Aut dolor consequatur omnis sint et. Et voluptatibus maxime tenetur inventore assumenda molestias dolor. Laudantium corporis placeat nemo doloribus rerum ut.');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `job_title` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `img`, `email`, `phone`, `job_title`) VALUES
(14, 'Mahmoud BenJaber', '57477_Mahmoud_BenJaber.png', 'BenjaBahrAlnesyan@gmail.com', '0923115247', 'Head Manager'),
(13, 'Wadee Alwefati', '55183_Wadee_Alwefati.png', 'W.FortnightMAster704@gmail.com', '0615452189', 'PR'),
(10, 'Ahmed Alforjani', '53632_Ahmed_Alforjani.png', 'HaKonaMAtata@Temon.com', '0916912501', 'CEO'),
(11, 'Mohamed alzrgany', '60604_Mohamed_alzrgany.png', 'zrgany12@gmail.com', '914524517', 'HR Manager'),
(12, 'Basher Benzahia', '64278_Basher_Benzahia.png', 'BenjaKillsBasher@gmail.com', '9221547851', 'PR');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `img`) VALUES
(1, 'slide-show1.jpg'),
(2, 'slide-show2.jpg'),
(3, 'slide-show3.jpg'),
(4, 'slide-show4.jpg'),
(5, 'slide-show5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `num` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `name`, `num`) VALUES
(1, 'Cars Sold', 1000),
(2, 'Amount Sold', 20000),
(3, 'Customer Satisfaction', 90),
(4, 'Oil Changes', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `subscribed_users`
--

CREATE TABLE `subscribed_users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribed_users`
--

INSERT INTO `subscribed_users` (`id`, `email`, `time_stamp`) VALUES
(1, 'ahmedelforjani50@gmail.com', '2019-02-05 15:07:11'),
(2, 'yousefbreaka@gmail.com', '2019-02-05 15:12:46'),
(3, 'asd@gmial.com', '2019-02-05 15:14:07'),
(4, 'alihona@gmail.com', '2019-02-10 12:17:22'),
(5, 'ahmedbla@gmail.com', '2019-02-10 12:21:26'),
(6, '', '2019-02-10 12:21:34'),
(7, 'wadee12@gmail.com', '2019-02-10 12:37:29'),
(8, 'asd@gmial.com', '2019-02-10 12:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `img`, `user_type`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 0),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webside_info`
--

CREATE TABLE `webside_info` (
  `id` int(11) NOT NULL,
  `welcome_dec` text NOT NULL,
  `about_us` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `map_loc` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webside_info`
--

INSERT INTO `webside_info` (`id`, `welcome_dec`, `about_us`, `email`, `phone`, `address`, `map_loc`) VALUES
(1, 'welcome', 'about', 'car@station.com', '218-92999999', 'Tripli, Libya', '13.180161,32.885353');

-- --------------------------------------------------------

--
-- Table structure for table `work_time`
--

CREATE TABLE `work_time` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `start_h` varchar(50) NOT NULL,
  `close_h` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_time`
--

INSERT INTO `work_time` (`id`, `day`, `start_h`, `close_h`) VALUES
(1, 'Saturday', 'Closed', 'Closed'),
(2, 'Sunday', '7:00:00 AM', '2:00:00 PM'),
(3, 'Monday', '7:00:00 AM', '2:00:00 PM'),
(4, 'Tuesday', '7:00:00 AM', '2:00:00 PM'),
(5, 'Wednesday', '7:00:00 AM', '2:00:00 PM'),
(6, 'Thursday', '7:00:00 AM', '2:00:00 PM'),
(7, 'Friday', 'Closed', 'Closed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `cars_image`
--
ALTER TABLE `cars_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`car_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribed_users`
--
ALTER TABLE `subscribed_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webside_info`
--
ALTER TABLE `webside_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_time`
--
ALTER TABLE `work_time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `cars_image`
--
ALTER TABLE `cars_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribed_users`
--
ALTER TABLE `subscribed_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `webside_info`
--
ALTER TABLE `webside_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_time`
--
ALTER TABLE `work_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cars_image`
--
ALTER TABLE `cars_image`
  ADD CONSTRAINT `cars_image_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
