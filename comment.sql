-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: essavilly.cousin.sql.free.fr
-- Généré le : Dim 17 Avril 2016 à 16:18
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `essavilly_cousin`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL auto_increment,
  `video` varchar(255) collate latin1_general_ci NOT NULL,
  `nom` varchar(255) collate latin1_general_ci NOT NULL,
  `datee` date NOT NULL,
  `commentaire` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=53 ;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `video`, `nom`, `datee`, `commentaire`) VALUES
(1, 'fondue', 'jules', '2016-02-27', 'et un commentaire!'),
(2, 'fondue', 'Vladimir', '2016-02-27', 'Wesh alors c''est top cool '),
(3, 'kenji', 'EleuthÃ¨re', '2016-02-27', 'Formidable et gÃ©nial. Sobrement vÃ´tre.'),
(4, 'kenji', 'Jean Besson', '2016-02-27', 'J''aime beaucoup ce que vous faites. Jean B. :)'),
(5, 'kenji', 'Pompidou', '2016-02-27', 'Tro cool wesh j''ador #bigfan. VotÃ© poure moa!'),
(6, 'pooh', 'EleuthÃ¨re', '2016-02-27', 'Mazette. Fortement chic. Le scÃ©nario nous propose un complexe oedipien, dotÃ© d''un dilemne cornÃ©lien. \r\n			On se rapproche d''une idÃ©alisation digne d''une filmographie nÃ©o-funky-nationaliso-jediaienne. TrÃ¨s fin.'),
(7, 'pooh', 'Gollum', '2016-02-27', 'la crotte m''est prÃ©cieuse...'),
(8, 'sarah', ' EleuthÃ¨re', '2016-02-27', 'La question nÃ©o-shakespearienne (mais au fait, qui est Speare ?) posÃ©e explicitement \r\n			dans ce formidable ouvrage de vulgarisation culturalo-scientifique nous amÃ¨ne Ã  penser Ã  une dÃ©nonciation bolchÃ©viquo-maoÃ¯ste de la problÃ©matique\r\n			darwiniste concernant la rÃ©ponse de la vie. Quarante-deuxiÃ¨mement vÃ´tre.'),
(9, 'sarah', 'Jeanne', '2016-02-27', 'j''aime bien l''idÃ©e des questions qui se posent par raport Ã  un  corps innocent qu''on va entterer dans une cave\r\n			. C''est trÃ¨s chic.'),
(10, 'nuit', 'EleuthÃ¨re', '2016-02-27', 'Cette courte "vidÃ©ographie" nous pose avant tout un problÃ¨me scientifico-problÃ©matique qui nous emmÃ¨ne dans les nÃ©buleuses\r\n			nÃ©bulositÃ©s et les profonds trÃ©fonds de l''inter-temporalitÃ©. En effet ce paysage original et commun, doux et rugueux, clair et obscur\r\n			, nous amÃ¨ne Ã  rÃ©flexionnater sur la crÃ©ation de vortexs temporels, mais holographiques et cartÃ©siens (en effet, "Alea jacta est")\r\n			. La formation Lamartino-Richelienne explique en effet sur ce point sombre et lumineux Ã  la fois que "Tous les hommes ont naturellement \r\n			au coeur l''amour de la libertÃ© et la haine de la servitude. ". C''est pourquoi je vous confÃ¨re mes aimables et froides, respectueuses et charitables\r\n			salutations distinguÃ©es mais chaleureuses. En ma qualitÃ© de grand philosophe einsteino-diderotien, je vous dÃ©clare : relativement vÃ´tre. EleuthÃ¨re Lamare,\r\n			auto-proclamÃ© roi du monde et de Kepler-45-B. Yo.'),
(11, 'kenji', 'BRUNE', '2016-02-28', 'C''est trop bien bravo !!!'),
(12, 'kenji', 'Vladimir', '2016-02-28', 'Wesh alors c''est top cool '),
(13, 'euh', 'Poustifes', '2016-02-28', 'un Ã©ternuement magnifique et bien placÃ©.'),
(14, 'extra', 'Jules', '2016-02-28', 'J''aime bien le concept. Le jeu d''acteur est fantasmagorique'),
(15, 'extra', 'Jeanne', '2016-02-28', 'Salut Ã  tous! J adore le film et j espÃ¨re que vous en ferez d autres! Bis!'),
(16, 'extra', 'Brune ', '2016-02-28', 'Merci pour les commentaires,moi j''ai bien aimÃ© faire le film et je suis contente que vous le trouviez bien et je pense qu''on en fera d''autres! '),
(17, 'coup', 'Brune', '2016-02-28', 'C''est super, on s''y croirait !!!\r\nEt vive Louise et Jean-Pierre !!!'),
(18, 'extra', 'rosa', '2016-02-28', 'Super ðŸ˜ŠðŸ˜ŠðŸ˜Š'),
(19, 'coup', 'Jeanne', '2016-02-28', 'Pour une fois les mÃ©chants sont gentils. \r\n'),
(20, 'sarah', 'kev adams', '2016-02-28', 'trop xD lol sa balance, j''ai hatte de tournÃ© dan votre prochin film lol'),
(21, 'extra', 'Mollusque ', '2016-02-28', 'ultime!!!!!!!!!!!!!!!!!!!!!!!!! ðŸ‘ðŸ‘ðŸ˜'),
(22, 'kenji', 'rosa', '2016-02-28', 'le tube mega tendance de l''annÃ©e .. aux grammy awards de longcochon en 2017 !!'),
(23, 'pooh', 'rosa', '2016-02-28', 'Wes Craven a trouvÃ© la relÃ¨ve !'),
(24, 'fondue', 'ROSA', '2016-02-28', 'miam'),
(25, 'kenji', 'Mangeur de Morteaux', '2016-02-28', 'un son absolument inoubliable! Une chanteuse incroyable!  Dans un dÃ©cors de neige qui Ã  fait rÃ©vÃ© plus d''une personne, des paroles dignes des plus grands poÃ¨tes! Un grand bravo Ã  tout ces artistes merveilleux. Je ne me lasse pas d''Ã©couter cette Å“uvre! Et n''oublions pas de fÃ©liciter tout les danseurs( professionnels ) qui me redonnent la joie de vivre dÃ¨s que je les vois!'),
(26, 'nuit', 'Bob', '2016-02-28', 'J''allais dire comme EleuthÃ¨re! Bref.... Mouvez vos body dans la night !'),
(27, 'fondue', 'Patachoo', '2016-02-28', 'Le plus dur, c''est d''Ãªtre bien placÃ©'),
(28, 'pooh', 'Anne O''Nimous', '2016-02-28', 'Mais qui est cette diva? Sa voix m''Ã©meut!!! C''est un chef d''Å“uvre ! Beatiful!'),
(29, 'sarah', 'Tuluc Tuluc', '2016-02-28', 'Hum dadada!  Une fin dans l''honneur et sur le trÃ´ne.'),
(30, 'coup', 'Pied droit', '2016-02-28', 'Beaucoup de violence! ðŸ”ªðŸ”«â˜ ðŸ—¡âš”'),
(31, 'extra', 'Starmaguedon, prince noir des etoiles', '2016-02-28', 'Ce film d''action au gout de science fiction post apocalyptique plonge le spectateur dans l''enfer de la lutte des derniers humains pour leur survie. Le choix subtil du rÃ©alisateur de ne choisir que trÃ¨s peu d''acteurs renforce l''attachement du spectateurs envers les personnages. La comparaison faite entre l''extraterrestre et la machine ultime Ã  tuer qu''est terminator reflÃ¨te une peur ancestrale de l''homme: Ãªtre anÃ©anti par une entitÃ© venue du nÃ©ant dans le simple but de dÃ©truire. \r\nLa production du film est trÃ¨s soignÃ©e, le jeu d''acteur pertinent bien qu''encore hÃ©sitant, et le suspens est au rendez vous! Seul bÃ©mol notable: l''utilisation d''une camÃ©ra portative qui rend parfois l''image floue.\r\nCe film s''inscrit donc dans la glorieuse lignÃ©e des kubrick, Lucas et ridley scott; sous influence certaine de K.dick.\r\nLa scÃ¨ne finale nous apporte une derniÃ¨re rÃ©flexion sur la place que l''Homme occupe dans l''univers: ne sommes nous pas que des Ãªtres Ã©phÃ©mÃ¨res destinÃ©s Ã  Ãªtre renvoyÃ©s Ã  lâ€™Ã©tat de poussiÃ¨re d''Ã©toile? Une potentielle suite Ã  ce film pourrait nous apporter bien des rÃ©ponses...\r\n'),
(32, 'coup', 'Bob', '2016-02-28', 'Le coup dâ€™Ã‰tat...notion qui a marquÃ© les esprits des citoyens de la super marmotte rÃ©publique. Rappelons nous que le rÃ©alisateur de ce film fut le premier prÃ©sident Ã©lu, et qu''il fut dÃ©mis de ses fonctions par un coup dâ€™Ã‰tat militaire! Il n''est donc pas surprenant qu''EleuthÃ¨re Lamare ait abordÃ© ce sujet dans son film.\r\n"Coup dâ€™Ã‰tat dans le jura" est un film qui aborde la violence bien rÃ©elle des relations politiques en la concrÃ©tisant au travers de ce bain de sang permanent et surrÃ©aliste auquel on peut assister tout au long du film. On sent bien Ã©videment l''influence du grand Tarantino dans l''humour qui ressort de ces scÃ¨nes pourtant trÃ¨s violentes, mais aussi une touche trÃ¨s cinÃ©ma d''Essavilly dans la faÃ§on trÃ¨s brut de filmer. Les acteurs sont nombreux et jouent parfois plusieurs rÃ´les, ce qui a pour but de rajouter Ã  l''aspect comique de la rÃ©alisation. Pourtant, ce film en apparence trÃ¨s drÃ´le rÃ©vÃ¨le le terrible problÃ¨me de l''instabilitÃ© politique dans la super marmotte rÃ©publique. Un film poignant donc, irrÃ©sistiblement drÃ´le et accusateur; je dis bravo! '),
(33, 'coup', 'quentin Tarantino', '2016-02-28', 'I love it! fantastic! My next film will take place in the Jura, it will be called "jean besson unchained" and I want you all to have a huge role in this movie!\r\ncontact me at:\r\nTarantinoblood@kill.US'),
(34, 'pooh', 'X ( un Cousin EngagÃ©)', '2016-02-28', 'une belle remise en question de la sociÃ©tÃ© Ã  travers une truffe en chocolat: mangeons-nous de la crotte? D''oÃ¹ la comparaison rabbit Â´ pooh/truffe en chocolat. Ainsi qu''une dÃ©nonciation de notre futur probable, il faut se battre pour vivre, pour manger.  Une retranscription de la folie d''un homme affamÃ© contraint de manger des excrÃ©ments de lapin pour subsister. Ces artistes novateurs et dÃ©nonciatieurs de notre sociÃ©tÃ© (de conssomation, et tout cours) n''on pas finis de remettre en question notre mode de vie, en effet, en complÃ©ment des paroles trÃ¨s explicites, la musique est elle-mÃªme une ode Ã  l''extermination de la junk-food. Tout est rÃ©vÃ©lateur de notre problÃ¨me, la voix, les paroles et bien sÃ»r le choix des instrument et de la mÃ©lodie. Une chanson au final trÃ¨s engagÃ©e et trÃ¨s rÃ©flÃ©chie.'),
(35, 'extra', 'Brune (crÃ©atrisse du film)', '2016-02-28', 'Pardon mais qui est Mollusque? '),
(36, 'nuit', 'Patate dans la raclette', '2016-02-28', 'Wesh alors c''est top cool '),
(37, 'fondue', 'Patate dans la raclette', '2016-02-28', 'Ã‡a donne surtout faim!\r\n  '),
(38, 'extra', 'Mollusque', '2016-02-28', 'Patachoo'),
(39, 'euh', 'Patate dans la raclette', '2016-02-28', 'Je savais pas que les morts Ã©ternuaient... '),
(40, 'sarah', 'Patate dans la raclette', '2016-02-28', 'C''est super mais j''aimerais savoir qui sont tout ces gens (pas dans le film mais les surnoms)\r\n'),
(41, 'extra', 'Patate dans la raclette', '2016-02-28', 'A d''acord merci.'),
(42, 'extra', 'Mollusque', '2016-02-28', 'Mais de rien chÃ¨re cousine'),
(43, 'coup', 'Pice hend lauve du 50', '2016-02-28', 'La violence, la violence, TOUJOURS la violence! Quand sortira le premier film sans violence? Un film oÃ¹ le seul acte que l''on pourrais qualifier de violent est lorsque M.Dupond n''aura rendu sa monnaie Ã  Madame Michu alors qu''elle allait acheter du pain! Bien que j''ai beaucoup apprÃ©ciÃ© ce film, la paix, l''amour, l''entraide, lâ€™amitiÃ© et autres choses merveilleuses sont quasi inexistantes!'),
(44, 'coup', 'bob', '2016-02-29', 'qui donc est l''auteur de ce commentaire hippie et niaiseux? \r\nL''utilisation de la violence tarantinienne dans ces films est un moyen de la dÃ©noncer! le spectateur est purgÃ© de la violence qu''il a en lui aprÃ¨s ce film, c''est la catharsis!\r\n#culture  #bon film  #chui trop fort'),
(45, 'coup', 'fourtitou ze universe', '2016-02-29', 'Je suis en parfait accord avec tout les commentaires rÃ©camment postÃ©s. La violence tue la violence. D''autre part, j''aprÃ©cie particuliÃ¨rement les effets spÃ©ciaux crÃ©Ã©s par une personne que j''aime beuacoup, c''est Ã  dire moi-mÃªme'),
(46, 'pooh', 'music mag', '2016-03-01', 'Un morceau aux accents encore trÃ¨s "garage" pourra t''on dire, en effet, ne disposant pas de moyens trÃ¨s important, les artistes ont su ici rÃ©aliser une grande Å“uvre, aussi bien sur le plan musical que sur la mise en scÃ¨ne de ce clip, Ã  partir de presque rien! L''hÃ©ritage new-wave est notable, bien qu''on sente une influence Ã©lectro-funky voir house, reflÃ©tant une nostalgie des annÃ©es 90. Un morceau aux influences variÃ©es, plein de subtilitÃ© et dont toute la profondeur et la visÃ©e engagÃ©e Ã  dÃ©jÃ  Ã©tÃ© dÃ©cortiquÃ©e de bout en bout par X, ce cher cousin! (Qui est tu X?)'),
(47, 'extra', 'Patate dans la raclette', '2016-03-01', 'Malheur!On m''a dÃ©couvert! '),
(48, 'pooh', 'X (un Cousin EngagÃ©)', '2016-03-02', 'TrÃ¨s cher auteur de music mag ,je suis un(e) Cousin(e) EngagÃ©(e)'),
(49, 'coup', 'Pice hend lauve du 50', '2016-03-02', 'Cher Oscar (car je suis Ã  peut prÃ¨s sÃ»r(e) que c''est vous qui vous cachez derriÃ¨re le pseudonyme de BOB), je suis d''accord qu''il faut dÃ©noncer la violence, mais pas Ã  travers la violence elle-mÃªme! Un public trop jeune ne comprendrais pas de quoi il retourne. De plus, il est tout a fait possible de dÃ©noncer la violence sans la faire apparaitre! Juste dire "la violence c''est mal" (avec des arguments plus pertinents je vous l''accorde). DÃ©noncer la violence par la violence c''est comme manger du chocolat et dire qu''il ne faut pas en manger en mÃªme temps, cela n''a aucun sens..\r\nBien Ã  vous, le hippie cachÃ© au fond de chacun d''entre vous.'),
(50, 'extra', 'Mollusque', '2016-03-02', 'Diantre..'),
(51, 'extra', 'Patate dans la raclette', '2016-03-02', 'Comme tu dis... '),
(52, 'extra', 'Vladimir', '2016-03-02', 'Wesh alors c''est top cool ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
