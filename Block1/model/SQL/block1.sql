-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2021 at 07:24 AM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 5.4.16 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `block1`
--

-- --------------------------------------------------------

--
-- Table structure for table `avenger`
--

CREATE TABLE `avenger` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `avenger`
--

INSERT INTO `avenger` (`id`, `name`, `link`, `description`) VALUES
(1, 'Iron Man', 'https://www.marvel.com/characters/iron-man-tony-stark', 'Genius inventor Tony Stark continued his father Howard Starks weaponry business after his parents untimely deaths and flew it to even greater heights of innovation. While in Afghanistan to demonstrate a new missile for the U.S. military, Starks convoy came under fire by a terrorist group known as the Ten Rings and he was severely wounded. Taken prisoner by the group, Stark awoke in their headquarters to learn that shrapnel near his heart had nearly cost him his life, but swift action by scientist and fellow prisoner Ho Yinsen who had inserted a powerful electromagnet in Starks chest would prolong it temporarily.  Stalling his captors after they demanded he build them a new weapon, Stark replaced the magnet with the RT, a miniature version of a device originally designed by his father, the Arc Reactor. Furthermore, he and Yinsen created a crude suit of armor which could provide them the means with which to escape. The suit worked as planned, though Yinsen sacrificed himself in order to allow Tony enough time to power it up to fight their terrorist captors.'),
(2, 'Thor', 'https://www.marvel.com/characters/thor-thor-odinson', 'Born 1500 years ago to Odin and Frigga, the king and queen of fabled Asgard, Thor grew into a mighty warrior and protector of his home and people. Thought to be rash and even reckless by his father, Thor nevertheless looked forward to the day of his ascension to the throne. But, his adoptive brother Loki schemed in private to ensure that day never arrived. He manipulated Thor into attacking the Frost Giants, legendary adversaries of the Asgardians and Lokis people, and Odinhoping to teach his son humilitydivested Thor of his magic hammer Mjolnir and banished him to Midgard, the realm also known as Earth.  Alone and unable to return to Asgard, Thor met scientists Jane Foster and Erik Selvig in the midst of their investigation into strange activity near a small New Mexico town. While his brother struggled with the limitations of mortals on Earth, Loki worked to ensure his own seizure of the Asgardian throne and planned to allow the Frost Giant kinghis real fatherinto Asgard to slay Odin in his sleep. Back on Earth, Thor sacrificed himself to save the town from destruction and in doing so, impressed Odin enough to restore him to full Asgardian power.'),
(3, 'Spider-man', 'https://www.marvel.com/characters/spider-man-peter-parker', 'A bite from a spider somehow granted teenager Peter Parker its arachnid abilities and instead of using them for personal gain, he decided to help others with them. An orphan living with his aunt, May Parker, the boy chose to wear a mask while fighting crime so as not to burden her with his actions.  Calling himself SpiderMan and sporting a pair of webshooting devices hed constructed, Parker wound up in internet videos which attracted the attention of Tony Stark. The billionaire industrialist deduced SpiderMans secret identity and approached Parker at his and Mays home in Queens, New York with a request for aid from the hero in an upcoming confrontation with Captain America and a group of other rogue Avengers and associates. Parker was initially hesitant to even admit his secret career as SpiderMan, but the thrill of adventure and Starks talk of responsibility drew him in and he accepted the invitation, as well as a new, hightech costume and webshooters.'),
(4, 'Ant-Man', 'https://www.marvel.com/characters/ant-man-scott-lang', 'Desperate to provide for his family, but unable to make ends meet, electronics genius Scott Lang turned to burglary and inadvertently won himself a prison sentence. After being released early for good behavior, he knuckled down to raise his daughter Cassie, though soon discovered nothing had changed with his luck and fortunes. When Cassie fell ill from a devastating heart ailment and her surgeon was abducted by a mysterious wealthy man, Lang reluctantly returned to his life of crime in an effort to save his daughters life.  Assuming scientist Hank Pyms home might offer expensive equipment to pawn for cash, Lang broke in, but discovered something far more valuableunbeknownst to him, he was staring his future in the face. He left the home with Pyms old AntMan gear and uniform, left over from the scientists early days as a Super Hero with the Avengers, and set out to use it to rescue Cassies surgeon.'),
(5, 'Hulk', 'https://www.marvel.com/characters/hulk-bruce-banner', 'Bioscience genius Dr.Bruce Banner focused his major studies on the effects of gamma radiation on humans, working alongside Dr.Betty Ross at a Virginia University lab. Dr. Ross father, General Thunderbolt Ross of the U.S. Army, channeled Banners work into a program to develop weapons for the military, unbeknownst to both doctors. When Banner decided to test what he learned on himself, he triggered a fantastic transformation in himself that resulted in an immense, hulking figure fueled by his own rage.  Having destroyed his lab as the creature, and inadvertently harming Ross in the process, Banner slipped away to avoid capture and study by the Army and began a desperate quest for a cure to his bizarre affliction.  Nobody Stronger As intelligent and cerebral as Bruce Banner is, his alterego the Hulk is a completely physical phenomenon. The green behemoth possesses the greatest raw strength of any natural being on Earth, with an upper limit that has yet to be fully tested. His leg muscles allow him to leap great distances and land without harm, and his skin can resist damage from heavy weaponry, as well as the natural elements and even unnatural ones.  The Hulk has grown somewhat more intelligent over the years, beginning with the mind of nearly an infant and progressing to what might be described as the personality of a toddler. His speech has increased from growls and roars, to one or two words at a time, to full sentences, albeit broken and naive. Banner recognizes the Hulk as himself, but often refers to him as the other guy, while his alterego seems to have little love or respect for the mild scientist and may not even be cognizant that Banner is himself.'),
(6, 'Captain America', 'https://www.marvel.com/characters/captain-america-steve-rogers', 'Envious of his friend Bucky Barnes military enlistment, and undeterred by his own multiple rejections by the U.S. Army, physical weakling Steve Rogers made one more attempt to join the march of men to fight for their country in the dark days of World War II. Rogers valiant wish to fight bullies wherever they were grabbed the attention of scientist Dr. Abraham Erskine, and he handpicked the idealistic young man for the Armys SuperSoldier program under his supervision. Though Rogers learned of Erskines disastrous previous attempts to realize a supersoldier, Germanys socalled Red Skull, he braved the process and emerged from it a new man. With a powerful body and heightened speed and reflexes, Rogers faced his first challenge when forced to chase down Dr. Erskines assassin immediately following the experiment. In doing so, he also learned of the involvement of Hydra, the Nazi science division, in the doctors murder. The Army moved swiftly to create a colorful, starspangled persona for Steve Rogers they called Captain America, and put him on a tour to sell war bonds. Chafing at what he felt was inaction, Rogers jumped at the chance to join the real fighting when he received news of the capture of his friend Barnes army division and rushed to rescue the soldiers. Upon the successful completion of the unplanned missionand a brief meeting with the Red Skull himselfRogers determined his path as a oneman fighting force.'),
(7, 'Hawkeye', 'https://www.marvel.com/characters/hawkeye-clint-barton', 'Very little is known about the S.H.I.E.L.D. agent known as Hawkeye or his origins. An accomplished combatant and weapons master, he was present for Thors arrival on Earth, and was impressed with the God of Thunder. He was also instrumental in bringing over Natasha Romanoff, AKA Black Widow, to the side of S.H.I.E.L.D, sparing her life and offering her a path to redemption.  For his extraordinary abilities, he was recruited by Nick Fury to be part of the Avengers Initiative. Unfortunately, in his first mission with the Avengers, he initially worked against them, thanks his mind being controlled by Loki, the Asgardian God of Mischief. After being broken free, however, the horrified Clint did work alongside his fellow Super Heroes to bring down the trickster god.  Since then, he has managed to put his talents to good use against the Chitauri, Ultron, HYDRA, and even his fellow Avengers when it seemed necessary. As one of S.H.I.E.L.D.s best agents, the Worlds greatest marksman, and an Avenger, Hawkeye uses traditional weapons as well as hightech ones, with a strong affinity for his archery bows. Few humans on the planet compare to Clint Barton when it comes to his astonishing talents in precise marksmanship, fighting, flying, and tactical prowess.  An expert acrobat, militarytrained combatant, and master assassin, Barton can stand toetotoe with some of the best fighters around. He is also a master tactician and spythe Avengers face quite a bit of difficulty when Hawkeye works for Loki and turns his plans against them.  Hawkeyes specialized equipment include recurve bows, compound bows, a specialized arrow quiver, speed loader, Busse dagger, a S.H.I.E.L.D.issued handgun, and collapsible baton.'),
(8, 'Star-Lord', 'https://www.marvel.com/characters/star-lord-peter-quill', 'A cosmic Celestial known as Ego visited an untold number of planets to seed them as preparation for his Expansion, during which he would assimilate all life in the cosmos. As part of this process, he needed a second Celestial, which led him to woo and impregnate females on the planets he visited. He unexpectedly fell in love with one such woman, the Earthling Meredith Quill. Fearing she would distract him from his true mission, Ego caused her to develop a fatal brain tumor and then left her to raise the product of their relationship, their son Peter, by herself.  Peter lived with Meredith in Missouri until the night she passed away from the tumor. The eightyearold boy was subsequently abducted from Earth by aliens. Yondu Udonta, the leader of the Ravagers mercenary band that kidnapped the boy, had been paid by Ego to deliver Peter to him. Yondu reneged on the deal when he discovered the other children hed retrieved for Ego had been killed (after Ego discovered they were not in fact Celestials and could not help him) and raised Quill as a Ravager instead. After reaching adulthood, Quill struck out on his own with all the experience hed gained with the Ravagers, a spaceship of his own, and his mothers mixtape of Earth pop tunes to restyle himself as StarLord, the galaxys most notorious thief... a status completely in his own mind.'),
(9, 'Dr.Strange', 'https://www.marvel.com/characters/doctor-strange-stephen-strange', 'Vain, egotistic surgeon Stephen Strange lost the use of his hands in a horrific auto accident caused by his own recklessness. In turn, he lost his fortune through a series of costly, complicated and experimental surgeries and therapies in an attempt to save his livelihood. In the end, destitute and desperate, he sought a cure far off the beaten path of modern medicine.  In Nepal, after being saved from muggers by the powerful sorcerer Mordo, Strange met the person who had taught MordoEarths Sorcerer Supreme, the Ancient One, who held many mysteries of the Old World, including the potential to heal Stranges hands. The Ancient One refused to guide Strange through the process until he relinquished his selfishness and opened his mind to a higher truth. Having done so, the doctor began to learn of the Multiverse and the ancient science of magic, as well as forbidden knowledge the Ancient One was not inclined to share.  A Master of the Mystic Arts, Doctor Strange has phenomenally powerful magical abilities that enable him to skillfully conjure myriad spells. Strange has been able to use his spells to bind opponents and create complex shields and barriers, among many other uses for both defense and attack. Strange is also adept at astral projection, sending his astral self away from his body and allowing him to observe events without the knowledge of those present.  Strange discovers that certain artifacts can bolster magical spells and extend their benefits. At the New York Sanctum, he is adopted by the Cloak of Levitation, a seemingly sentient cape that not only protects him, but also fights for him. The doctor also makes use of Sling Rings to create portals to cross great distances and to enter other realms.  Arguably, the Eye of Agamotto provides the greatest source of power to Strange. In truth the Infinity Stone known as the Time Stone, the Eye possesses the incalculable ability to control time itself. With it, Strange can alter time around objects, locations or other beings, moving forward and backward through their existence. It can also be used to trap enemies in time loops, as well as giving Strange the ability to look forward into potential futures.'),
(10, 'Black Widow', 'https://www.marvel.com/characters/black-widow-natasha-romanoff', 'Natasha Romanoff was trained from a young age to cultivate a very specific set of skills in a Russian facility called the Red Room. There she honed the skills that would turn her into a human warrior who continues to stand shouldertoshoulder with super soldiers, Asgardians and people in armored suits. However, she eventually eschewed her KGB masters, switched allegiances and began working for the good guys. Exhibiting no super human abilities, the Black Widow boasts ultimate human levels of strength, agility, and stamina. She is extensively trained to near perfection in a variety of fighting styles, such as karate, judo, kung fu, and wrestling, and with all manner of weaponsboth traditional and hightechcombined with her background in gymnastics, acrobatics, and ballet to always accomplish her mission.  She can use a simple handgun just as well as a Chitauri battle staff or even Captain Americas shield. Her signature weapons include dual batons, a pair of Glock 26s and the Black Widows Bitebracelets that discharge electricity. Romanoff also displays great skill when it comes to hacking in computers and technological systems to dig for information or regaining control.  Many of the Black Widows enemies were assigned to her, first by the KGB and then by S.H.I.E.L.D.  In more recent years, though, she assists in taking down Ivan Vanko, Justin Hammer, the Chitauri, HYDRA, Baron Wolfgang von Strucker, and Helmut Zemo among others. And those are just the targets we know about.  Some notable foes include, the Asgardian god of mischief, Loki and Ultron. She proves a formidable opponent to Loki, who assumes that he is able to manipulate her when he recalls her past misdeeds. Instead, it is Natasha who gets the upper hand on him, determining that he plans to release the Hulk as part of his plan. When Ultron captures her, she still undermines him to give the Avengers her location, helping them in their plan to defeat him.  Following the events of the Sokovia Accords and Civil War, Romanoff is later forced to come out of hiding with Steve Rogers and Sam Wilson when Thanos and his followers come to Earth in a quest to gain all six Infinity Stones, which would could instantaneously eliminate half of all life in the Universe with a snap of a finger.'),
(11, 'Black Panther', 'https://www.marvel.com/characters/black-panther-t-challa', 'A native of the small, yet technologically advanced African nation of Wakanda, TChalla accepted the mantle of Black Panther, the legendary protector of the Wakandan people, from his father, King TChaka, who filled the role before him as his father before him and so on. TChaka relinquished the title as he grew older and delved further into politics. This was a subject TChalla looked upon with some dislike, although he acknowledged the increasing importance of it, even as Wakanda maintained an air of secrecy to hide its true nature and precious vibranium mines. Regardless of his feelings for Wakandas part on the world stage, TChalla accompanied TChaka to an international summit in Vienna, Austria to ratify the Sokovia Accords, which promised to regulate all enhanced persons. Sadly, TChaka lost his life when Sokovian radical Helmut Zemo detonated a bomb at the wellattended meeting of heads of state, framing Bucky Barnes, the Winter Soldier, in the process. At that moment, not only did the throne of Wakanda pass to TChalla, but also the full weight of the Black Panthers responsibilities, including the task of revenge for the death of the king.'),
(12, 'Vision', 'https://www.marvel.com/characters/vision', 'Ultron began creating the body that would become Vision for himself using Dr. Helen Chos regeneration Cradle, as well as stolen Vibranium and the gem from Lokis scepter  which was in fact the Infinity Stone known as the Mind Stone. When Tony Stark and Bruce Banner realized they could still use the unfinished form for good, they incorporated Tonys JARVIS operating system into the body. Thor added the final piece of the puzzle by bringing his mystic lightning down to finally bring the creation to life. Vision lived and he set about doing what he could to help the Avengers. Thanks to his artificial intelligence, Vibraniuminfused synthetic body and the Mind Stone implanted in his forehead, Vision boasts an incredible number of unique powers.  He can access and process huge amounts of data in very short periods of time, making him supremely intelligent. He is able to phase through solid matter with ease. The synthetic lifeform also possesses super human strength and the ability to fly. Vision can also use the Mind Stone itself to create highpowered energy beams. Visions desire to protect humanity from threats pits him against many foes, although some are particularly important to the Super Hero.  Visions very existence infuriates Ultron, who had originally developed the body Vision inhabits for himself. Though they only fight the one time, Vision proves more than a match for the mechanical monster, especially when backed by the Avengers.  Thanos hunt for the Infinity Stones sends him straight to Vision, who finds himself in conflict with not only the Titan himself, but his coldhearted followersincluding Proxima Midnight and Corvus Glaivewho seek the Mind Stone in Visions head.');

-- --------------------------------------------------------

--
-- Table structure for table `avenger_article`
--

CREATE TABLE `avenger_article` (
  `AID` int(11) NOT NULL,
  `article` longtext DEFAULT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `IID` int(11) DEFAULT NULL,
  `RID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `avenger_article`
--

INSERT INTO `avenger_article` (`AID`, `article`, `heading`, `IID`, `RID`) VALUES
(1, 'Comic books are said to exist in a perpetual second act. Beginnings and endings are myths. the now is all that matters. Its a great way to tell stories in 4 pamphlets sold once a month, but a lousy way to tell them in movies or so we thought.\n\nEleven years later, the origin of the Marvel Cinematic Universe is now a myth of its own kind, an act of corporate derring do that has become the benchmark against which all blockbuster cinema is measured. True to the comics its films are based on, it has confounded with its stubborn (and occasionally inconsistent) continuity. it has sometimes felt like treading water. and it has, until recently, been reluctant to venture out beyond a generic house style that largely eschewed color. But it s still here, because it has done the impossible, and now with Avengers: Endgame, it must do it once more by attempting to bring its 11 year story to a satisfying end.\n\nAvengers: Endgame succeeds because it has an actual heart, something beyond spectacle that it sets out to do which is tell a story about moving on from failure, looking your friends in the eye when you ve let them down and there s little you can do to make up for it. For all of its CGI clashing and punchy quipping, the grand arc of these movies has been friendship, and how it is strained and tested when your insecurities and complexes take the form of armor that can level an army, or hammers that beat lightning down from the sky.\n\nIt s simple, but that simplicity is why these movies have worked. They drape themselves in the trappings of other genres and gesture at themes exploring the surveillance state and the military industrial complex, but like the comics they take inspiration from, they re really just soap operas. Steve and Tony and Thor are going through stuff. Will they still be friends when we finally come to an end? Will they make it up to each other before the time comes to part ways? Avengers: Endgame is both a farewell and a celebration of 11 years of the audacious and wildly successful Marvel Studios experiment. Its very good at both of those things, giving its many characters their due, and giving fans plenty of moments to cheer over, and a solid half dozen that will make them lose their damn minds.\n\nIm glad for it. The Marvel Cinematic Universe has been a presence for the entirety of my career as a writer, and as a kid who grew up on comics who could not even fathom what real life Marvel superheroes would look like outside of some truly terrible 70s TV shows, its felt like a miracle to be able to watch and think and write about them.\n\nIm also wary of it. The MCUs ludicrous success has completely ruined Hollywoods perception of the kind of profit margins that can be counted as successful, and redefined what tentpole cinema even looks like. The last five years have filled a small graveyard of failed cinematic universes that have tried to do what Marvel Studios did, and seen the tentpole model invert itself big, successful blockbusters no longer subsidize smaller movies the way they used to; they just pave the way for the next big blockbuster, which will hopefully be...bigger. Billion dollar grosses aren t a monumental achievement; now we jockey to see what movie will be the fastest to make a billion dollars. Maybe it ll be Endgame. They\'re saying it might do it in a week. But on a more base level, its ironically made it harder to talk about movies with anyone. For all the wonderful, fun stuff the MCU has brought in from comics, its also imported some of the worst aspects of the culture reactionary fans who cry foul over perceived pandering to women and minorities, gatekeeping bros who bristle at anyone who doesnt measure up to their idea of True Fandom, and a pervasive spoilerphobia that makes saying anything of substance next to impossible until some arbitrary amount of time passes and only a few people will yell at you for saying what happens at the end of, say, Infinity War, as opposed to many people.\n\nIn some ways, weve pushed against this. Theres an urgency to the celebration of smaller movies that feels like a direct reaction to the allencompassing sprawl of Marvel, which is just another wing of the even larger sprawl of Disney which also has Star Wars and Pixar, and now Fox. We are more vigilant toward matters of diversity, as the sheer scale of the Avengers Universe quickly began to demonstrate its failings failings that Endgame tries to address in gestures that seem to promise a more diverse future, even as it spends most of its runtime lavishly honoring the white guys this movie empire was built around.\n\nWeve done jack about spoiler culture, though, which is why I cant tell you about my favorite part of the film not the big fanboy moneyshots that made me want to cheer in the last hour, but a quieter part that takes two of Endgames characters to an unexpected place and reminds you of the very real, very human hearts beating behind two franchise figureheads. Its the sort of sequence that underlines the idea that, while superheroes are here to save the world, theyve got to save themselves first.\n\nEleven years ago, I watched a movie about a rich jackass who was forced to confront the human cost of his wealth, and chose to make it right, to call himself Iron Man. It was a movie made by people with nothing to lose but designs on gaining everything designs that brought them here, to their endgame. That success has been a joy, a oneofakind experience that, even if it continues in some form, isnt likely to reach these kinds of dizzying heights ever again. But its also come at a cost, and I wonder if the people in the business of bringing superheroes to life plan on doing anything about it.\n\nJoshua Rivera is a staff writer for Kotaku, where he writes about video games which are kind of like movies, but you use your hands a lot more.\n', 'Avengers: Endgame: The Spoiler-Free Review', 13, 1),
(2, 'This piece contains major, unequivocal spoilers for Avengers: Endgame. Captain America Dies Chris Evanss Captain America is, chronologically, the first Avenger, and arguably the beating heart of the core team. It seemed only right he be give a heros farewell and, much like skinny Steve Rogers did all the way back in the 1940s, jump on the grenade for the greater good. Except, SWERVE! Rogers handily survives the final battle (wielding Mjolnir along the way in one of the films top 100 best moments of fan service) and absolutely rocking Thanoss shit with some lightning bolts.  Steve Rogers does get a permanent goodbye, though. Tasked with returning the infinity stones to their rightful places in history at the end of the film, Cap zaps himself to the past, hammer in tow, and... doesnt come back. Did he get conked on the head by Red Skull the moment he stepped out of the time portal? Nah, instead, once his job was done, he decided to meet Peggy back when he originally got frozen, to get his dance with her, after all. Shortly after Steve disappears in front of Bruce, Bucky, and Sam, a silhouette appears on a nearby bench with a familiar circular tool by his side. Sam approaches to find a much older Rogers, having lived now to a ripe old age, sporting a wedding band and a new shield, which he gives to the nowformer Falcon.  Thats not to say its all happy endings. Natasha/Black Widow sacrifices herself in front of her closest friend, Clint, in order for him to retrieve the soul stone. More crushingly, Tony Stark makes the ultimate sacrifice, using the stones one final time to wipe out Thanos and his army, the energy emitted from the stones killing him, widowing Pepper, and orphaning his five yearold daughter. Damn.  Thanos Is Killed This was almost a nobrainer, but Endgame still subverts our expectations here by killing the big purple baddie not once but twice. In one of the films major early surprises, Thanos is decapitated handily by Thor within the first ten minutes of the movie, after telling the Avengers (now with Captain Marvel) he destroyed the stones after the snap in order to avoid temptation.\n\nRight about now, people all over the world are starting to file out of, and process, the threeplushour spectacle that is Avengers: Endgame, Marvel Studioss 22nd film, and the culmination of a broader story that began with 2008s Iron Man. The MCU will go on, but Endgame is an end. Shrunk down, its the season finale to a 22episode anthology series about people (and aliens and monsters and... TBD) who are part of a world much larger than they realize. They probably realize now, though.\n\nEver since Thanos snapped half the universe out of existence, creating several pretty good memes in the process so that it wasnt a total loss, very little had been revealed from Marvel about the story of Endgame. Hell, we didnt even know the title until December. If you withstood every leak, every rumor, every theory, then good for you; this movie will cheer you up. If you read a blog now and again, you might have surmised that time travel was very likely somehow involved, and that MCU mainstays like Robert Downey Jr. and Chris Evans might be on their way out. MCU fans are dedicated and creative (sometimes to a fault) so lets look at the five biggest theories surrounding Endgame, and whether or not those came to fruition. However, when Nebula travels back to 2014 to get the power stone, she gets her networks crossed with her past self, and accidentally transmits Thanoss success and fate to his 2014 self. Realizing he succeeds after all, he launches a fullon assault at the Avengers, bringing the full force of his army to earth once again. He loses this time, though, and turns to ash without a quip, without the last word. He knows hes done.  The Avengers Travel Back in Time to the Battle of New York Yep! This was theorized for a long time. It only makes sense that this 3hour victory lap of a movie would revisit its 2012 2hour victory lap of a movie. After deciding to pull off a \"time heist,\" the Avengers realize that three infinity stones are in the same place, at the same time, during the Battle of New York: The Mind Stone within Lokis scepter, the Space Stone within the Tesseract, and the Time Stone hidden away at the Sanctum Sanctorum on Bleecker Street, guarded by The Ancient One (Tilda Swinton).  Some cool moments here: We get to see Captain America fighting his future self, confusing him for a disguised Loki. We also a recreation of the classic elevator scene from Winter Soldier, only with a very cool twist.  The Original Avengers Disband Somewhat. Tony, Steve, and Natasha are out of the game, one way or another; Clint is back with his unsnapped family and doesnt look like hes going to be risking his life again any time soon; Thor and Hulks stories are left more openended. Hulk, now having found a middle ground with Banner and spending his days happily as a softspoken scientist who is also big and green, just might want to have a couple more quantum adventure here or there. The biggest signal we get to the future of the MCU is that is Thor officially joining the Guardians of the Galaxy and immediately sparring with Peter over who the leader of the group is. Finally, were going to get that \"Best Chris\" debate played out in an actual film.  The Timeline Resets Completely With all six Infinity Stones at your disposal, you can do just about anything, which is why it made sense to a lot of people that the \"unsnappening\" would involve just... undoing all of Thanoss actions and bringing everyone back to life. But, as the film takes pains to tell us, this isnt time travel as we know it from other movies: when you travel to the past, your past becomes your future, thus, killing a baby Thanos, for example, would have done nothing for the team in this reality. What happened always happened, is what Im saying, and when the MCU moves forward, it will be with a universe rebuilding itself after 50% of all life disappeared for five years and showed up again suddenly having not aged a day. Thats going to be fun to watch.\n', 'Avengers: Endgame: How Correct Were the Internet\'s Predictions?', 14, 2),
(3, 'The first installment of Disney+s long and expansive slate of Marvel shows arrives today in the form of WandaVision, which stars Elizabeth Olsen as Wanda Maximoff, a superhuman with telekinesis, telepathy, and realitybending powers, and Vision (Paul Bettany), Tony Starks trusted A.I. sidekick turned sentient android. In the films, the two exAvengers fell in love; the new series finds them living happily ever after in a postEndgame world. Or so it seems.\n\nOn the surface, WandaVision is both a homage to and parody of traditional, Golden Age era sitcoms: The first two episodes are in blackandwhite; one plot is built around a classic case of miscommunication that leaves the two scrambling to impress Visions boss with a dinner party involving an impromptu dinner. But of course, this isnt just going to be an I Love Lucy riff. Theres something mysterious, maybe even nefarious afoot.\n\nAs a refresher: in the film timeline, we last saw Wanda mourning Visions death by Thanos hand. The two episodes that dropped today (there will be seven more weekly installments), are mostly concerned with wacky marital hijinks and concealing the duos powers from the townspeople, but the final moments of each episode are permeated by a lingering, weirdness that hints at whats to come: We see a person watching Wanda and Vision on television and an ominous man in a beekeeper suit climbing out of a sewer, whose presence terrifies Wanda. Both of these people wear clothes emblazoned with sword iconography. That might not mean a lot to most viewers, but for fans of Marvel Comics, its a signifier of a new player in the Marvel Cinematic Universe: Ladies and gentlemen, meet S.W.O.R.D.\n\nObscure by even comic book standards, S.W.O.R.D. is a secret government organization that guards planet Earth. Not only do the references to it seemingly tease the future of WandaVision, they also provide some context for the end credits tag of SpiderMan: Far From Home. Lets take a deep dive into WandaVisions first big easter egg: the emergence of S.W.O.R.D. and the ramifications it could have for the future of the MCU.\n', 'How WandaVision Connects Back to Spider-Man: Far From Home', 16, 3),
(4, 'So, is Infinity War good?\nScott Meslow, GQ culture critic: I think so! As I wrote already, its roughly as good as the original Avengers movie, which is one of my top five Marvel Cinematic Universe movies. Back then, it seemed like a feat to bring Iron Man, Thor, Captain America, and the Hulk together after their standalone movies. Infinity War does the same thing with a superhero roster that has grown much, much larger in the intervening years, with similarly impressive results. And while it zips along at a surprisingly breezy pace, the sheer bleakness of that ending is a bold and impressive gutpunch for a big old popcorn movie to deliver. Id be bummed for anyone who had it spoiled in advance.\nKevin Nguyen, GQ senior editor: I agreeInfinity War works as a movie and as a balancing act. (Though Id argue that the best Avengers movie isnt an Avengers movie, but Captain America: Civil War.) I never thought Id say this about a Marvel movie, but I admired its restraint. In a lot of ways, it feels less like a Marvel movie and more like a long episode of Game of Thrones where shit actually happens.\nWhat works?\nScott: Its funny when it needs to be, and tragic when it needs to be. And it somehow manages to juggle this massive cast of characters, using almost everybody to maximum effect. Somehow, in just one and a half movies, Thor went from being my least favorite Avenger to my most favorite Avenger.\nKevin: Chris Hemsworth has always been the best casting decision in the Avengers, just stuck in mediocre movies until Ragnarok.\n', 'Avengers: Infinity War: The Review Full of Spoilers', 14, 1),
(5, 'Were only two episodes into Marvels The Falcon and the Winter Soldierthe next Marvel Cinematic Universe/Disney+ series after *WandaVisionand its already focused on big ideas. Essentially, showrunner Malcolm Spellman (Empire) is exploring what the Cap mantle means for the identity of a handful of MCU men, both new and old.\nFor Sam Wilson, aka the Falcon (Anthony Mackie), who decided to reject Steve Rogers parting wish for him to become the next Captain America, its about what it means for a Black man to potentially become a symbol of America. For Bucky Barnes (Sebastian Stan), whos working through the trauma of becoming a mindcontrolled assassin in the form of the Winter Soldier, its about trying to find his true self. For John Walker (Wyatt Russell) , who the government installs as the new Captain America, its about trying to do right with a role forced upon him. And the most recent episode also introduces us to Isaiah Bradley (Carl Lumbly), whose tragic backstory represents a grim, racially charged take on the Captain America ethos.\nIn other words, The Falcon and the Winter Soldier might as well be called Captains America instead. Lets unpack the comic book origins of each of the Captains and examine how the show interacts with the storied history of those characters.\n', 'The Falcon and the Winter Soldier Is the Story of Five Captain Americas', 18, 3),
(6, 'Its been just a few short months since \"The Snap\" laid waste to half the Marvel universe, taking the lives ofspoiler alert herethe likes of Doctor Strange, SpiderMan, Black Panther, and pretty much the whole damn lot of the Guardians of the Galaxy. Marvel has played its cards close since then with regard to the 2019 followup, which was filmed at the same time as Infinity War and will essentially bring this era of the Marvel Cinematic Universe to a close. Hell, Marvel was even being secretive about the title, which was not revealed to the public until this morning, more than four years since Infinity Wars title was revealed. Come 2019, get ready for Avengers: Endgame.', 'The Avengers 4 Trailer Is Everything and More', 14, 2),
(7, 'Michael Waldron is about to have one hell of a year. The Atlanta writer got his start on Rick and Morty as an assistant before eventually scripting a loose adaptation of Hemingways The Old Man and the Sea into one of the animated shows best fourth season episodes. Now, hes moved on to even bolder territory: The Marvel Cinematic Universe, as the head writer of the new Loki Disney+ series.\n\nLoki picks up a thread audiences saw in Avengers: Endgame, as Tom Hiddlestons God of Mischief absconds with the Tesseract, only to immediately wind up a prisoner of the Time Variance Authority (TVA). By existing outside of the natural timeline, Loki threatens to disrupt the flow of time unless the TVA erases him from existence. But while captive, Loki meets TVA Agent Mobius M. Mobius (Owen Wilson) who quickly makes him an offer he cant refuse. Even in its premiere episode, the series is fully embracing the weirdness of Marvel Comics and Waldron is responsible for that.\n\nLoki isnt the only thing Waldron has on his platehe wrote the script for one of the more hotly anticipated upcoming MCU films, the Sam Raimidirected Doctor Strange in the Multiverse of Madness, and is also working with Marvel Studios head Kevin Feige on a project set in the Star Wars galaxy. GQ caught up with Waldron to talk about how Lokis desire for control makes him like Steve Jobs, creating the rules for time travel, collaborating with Raimi, and why family matters in Star Wars stories. Oh, and heads up, spoiler warning for the Loki premiere.\nWhat was it about Loki as a character that attracted you?\n\nHes just fun, for one. He has a very playful sense of humor about him. I like how he never quite lets you know what hes thinking. Beyond that, what I connect to about him is the same thing the legions of fans do, which is his humanity and his vulnerability. This is a guy whoyes, on the one hand, he was the prince of Asgard, seems like a nice lifebut his father, in fact, killed his actual birth father, adopted him, lied to him about his heritage and parentage his entire life, he was forced to live in the shadow of his oafish older brother who was born to be king. Hes experienced a lot of trauma, and I think that what hes looking for is just a little bit of control over his life. Which he feels like maybe hes never quite had. Thats something I think we can all relate with.\n', 'From Loki to Doctor Strange and Star Wars, Michael Waldron Is the New Franchise Whisperer', 14, 3),
(8, 'When the revolution swept Paris in May, 1968, Jany Temime tore away from her studies at Paris Nanterre University. I was on the barricades, I was throwing stones, and I had so much fun, she says. We wanted to fight against the bourgeoisie, we wanted to change the world. After police beat protesting crowds, students dug cobblestones up from the sandy sidewalks and began pelting the cops. In solidarity with the students, more than 10 million workers walked out on the largest general strike France has ever seen. President Charles De Gaulle left the country, before returning to dissolve the National Assembly and call for new elections. For many of the students, life would never be the same. If not for 1968, I would have become a teacher of Latin, Temime says. My studies were sort of aborted after being so bad on the barricades against the French government. So I had to change. I became somebody else. She went to work for French Elle, then took up costume designing. 53 years after her revolution, Temime has created costumes for the Harry Potter series, the James Bond films, and, now, Black Widow. Im still a leftist person, of course, she says, but I will not throw stones anymore. I work for Marvel.\nAs much as Black Widow provides the superhero backstory for Scarlett Johanssons Natasha Romanoff, the Black Widow, its also a film about a group of former Soviet people, the spy family that Romanoff grew up with, trying to understand, and pummel their way through, the complex legacies of their vanished homeland. Temime is part of the first wave of Western costume designers really trying to understand the unique dreams and styles of postSoviet people. Her efforts are in the more fantastical context of a superhero movie than, say, Suzie Harmans work on Death of Stalin, or Odile DicksMireauxs on Chernobyl, but shes just as thoughtful. Previous generations have imagined the Soviet world as a gray, lifeless place. Doctor Zhivago shows an opulent prerevolutionary Imperial Russia where the walls of every apartment look like theyre borrowed from a Romanov palace. Then the Revolution happens and somehow all the intricately designed walls are immediately dilapidated. Suddenly the whole screen is gray.\n', 'Beneath the Spy Costumes, Black Widow Tries to Nail Post-Soviet Style', 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `avenger_image`
--

CREATE TABLE `avenger_image` (
  `IID` int(11) NOT NULL,
  `image` varchar(40) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `avenger_image`
--

INSERT INTO `avenger_image` (`IID`, `image`, `id`) VALUES
(1, 'iron_man.jpg', 1),
(2, 'thor.jpg', 2),
(3, 'spider_man.jpg', 3),
(4, 'ant_man.jpg', 4),
(5, 'hulk.jpg', 5),
(6, 'captain_america.jpg', 6),
(7, 'hawkeye.jpg', 7),
(8, 'star_lord.jpg', 8),
(9, 'dr_strange.jpg', 9),
(10, 'black_widow.jpg', 10),
(11, 'black_panther.jpg', 11),
(12, 'vision.jpg', 12),
(13, 'iron_man2.jpg', 1),
(14, 'End_Game.jpg', 1),
(15, 'spider_man2.png', 3),
(16, 'spider_man3.png', 3),
(17, 'hulk2.jpg', 5),
(18, 'captain_america2.jpg', 6),
(19, 'black_widow2.jpg', 10),
(20, 'thor2.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `avenger_publication`
--

CREATE TABLE `avenger_publication` (
  `PID` int(11) NOT NULL,
  `AID` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `avenger_publication`
--

INSERT INTO `avenger_publication` (`PID`, `AID`, `id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 3, 3),
(5, 4, 5),
(6, 5, 6),
(7, 6, 7),
(8, 7, 9),
(9, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `avenger_reporter`
--

CREATE TABLE `avenger_reporter` (
  `RID` int(11) NOT NULL,
  `reporter_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `avenger_reporter`
--

INSERT INTO `avenger_reporter` (`RID`, `reporter_name`) VALUES
(1, 'JOSHUA RIVERA'),
(2, 'TOM PHILIP'),
(3, 'WILLIAM GOODMAN'),
(4, 'ANDREW FEDOROV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avenger`
--
ALTER TABLE `avenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avenger_article`
--
ALTER TABLE `avenger_article`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `fk_article_image` (`IID`),
  ADD KEY `fk_article_reporter` (`RID`);

--
-- Indexes for table `avenger_image`
--
ALTER TABLE `avenger_image`
  ADD PRIMARY KEY (`IID`),
  ADD KEY `fk_image_avenger` (`id`);

--
-- Indexes for table `avenger_publication`
--
ALTER TABLE `avenger_publication`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `fk_pub_article` (`AID`),
  ADD KEY `fk_pub_avenger` (`id`);

--
-- Indexes for table `avenger_reporter`
--
ALTER TABLE `avenger_reporter`
  ADD PRIMARY KEY (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avenger`
--
ALTER TABLE `avenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `avenger_article`
--
ALTER TABLE `avenger_article`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `avenger_image`
--
ALTER TABLE `avenger_image`
  MODIFY `IID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `avenger_publication`
--
ALTER TABLE `avenger_publication`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `avenger_reporter`
--
ALTER TABLE `avenger_reporter`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avenger_article`
--
ALTER TABLE `avenger_article`
  ADD CONSTRAINT `avenger_article_ibfk_1` FOREIGN KEY (`IID`) REFERENCES `avenger_image` (`IID`) ON DELETE SET NULL,
  ADD CONSTRAINT `avenger_article_ibfk_2` FOREIGN KEY (`RID`) REFERENCES `avenger_reporter` (`RID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_article_image` FOREIGN KEY (`IID`) REFERENCES `avenger_image` (`IID`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_article_reporter` FOREIGN KEY (`RID`) REFERENCES `avenger_reporter` (`RID`) ON DELETE CASCADE;

--
-- Constraints for table `avenger_image`
--
ALTER TABLE `avenger_image`
  ADD CONSTRAINT `avenger_image_ibfk_1` FOREIGN KEY (`id`) REFERENCES `avenger` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_image_avenger` FOREIGN KEY (`id`) REFERENCES `avenger` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `avenger_publication`
--
ALTER TABLE `avenger_publication`
  ADD CONSTRAINT `avenger_publication_ibfk_1` FOREIGN KEY (`AID`) REFERENCES `avenger_article` (`AID`) ON DELETE CASCADE,
  ADD CONSTRAINT `avenger_publication_ibfk_2` FOREIGN KEY (`id`) REFERENCES `avenger` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pub_article` FOREIGN KEY (`AID`) REFERENCES `avenger_article` (`AID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pub_avenger` FOREIGN KEY (`id`) REFERENCES `avenger` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
