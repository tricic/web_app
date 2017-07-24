-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2017 at 11:35 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1467064_web_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `img_url` varchar(2083) NOT NULL DEFAULT 'http://placehold.it/500x300?text=article',
  `article_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `user_id`, `category_id`, `title`, `content`, `img_url`, `article_date`) VALUES
(1, 3, 1, 'This is a test title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas luctus nec sem a pharetra. Nam nec finibus orci, quis tempus eros. Maecenas consectetur erat enim, a pulvinar risus lobortis in. Duis non venenatis odio. Pellentesque porttitor, elit tempus tempor ornare, eros turpis commodo quam, nec finibus augue tellus ac mi. Nam eu enim tempus, vulputate lectus vitae, hendrerit metus. Ut finibus, urna quis ornare vestibulum, nulla magna ullamcorper ex, ac lobortis libero metus id nisl. Proin vestibulum eros a felis elementum interdum. Quisque ullamcorper ac ipsum eu tempus. Duis sodales ornare magna ac dictum. Etiam varius mi in tristique volutpat. Sed vulputate enim quis eros gravida condimentum. Mauris ac venenatis odio. Curabitur sit amet blandit nunc.\r\n\r\nVivamus ut ornare ex, et aliquam dui. In eleifend facilisis efficitur. Fusce sit amet nibh sed felis dapibus lacinia. Donec imperdiet purus neque. Ut efficitur, arcu vel eleifend pellentesque, lorem elit pharetra purus, sed auctor ipsum nunc eget erat. Sed mattis lacus sed mauris vestibulum vulputate. Ut aliquam lectus sit amet turpis sodales, nec hendrerit arcu cursus. In ut neque risus. Donec lacus nisl, pretium vitae finibus a, auctor nec quam. Maecenas tempus fermentum justo eu sollicitudin. Sed eu justo pretium, pharetra sapien vitae, finibus velit. Phasellus cursus mi nulla, quis mollis turpis tincidunt eget. Quisque vitae accumsan arcu. Cras porttitor sem eget urna lacinia fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur ullamcorper mi ante, vehicula aliquet mi faucibus id.\r\n\r\nVivamus scelerisque magna odio, non tempor mauris pharetra nec. Phasellus mattis interdum vulputate. Vestibulum viverra nulla quis orci pellentesque, et scelerisque eros tempor. Pellentesque at justo sed nunc posuere pretium quis id augue. Suspendisse metus massa, convallis ac quam a, lobortis posuere nisl. Morbi placerat elit id nisl sodales, non sagittis est dignissim. Praesent eget hendrerit felis. Morbi quis nisi nec augue pulvinar ullamcorper at a felis. Suspendisse vitae condimentum lacus. Proin mollis enim a iaculis congue. Suspendisse vel massa dictum, elementum urna ut, vestibulum libero.\r\n\r\nMauris luctus mauris diam, nec bibendum leo dapibus a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras nec nunc eu lectus iaculis efficitur vitae non ex. Nullam sed porttitor mauris. Nulla facilisi. Sed sed tellus convallis, posuere eros et, consequat augue. Morbi semper eu risus nec rhoncus. Nulla tristique tellus eu dignissim facilisis. Sed lacinia, sapien vitae rhoncus dapibus, ligula ante consectetur quam, sit amet varius sem ante id libero. Quisque vel faucibus ex. Vestibulum et massa aliquet, imperdiet sem et, dapibus leo. Donec sit amet lectus elementum, vulputate mauris in, pellentesque ligula.\r\n\r\nNunc aliquam id lacus non varius. Proin at metus vitae risus placerat pellentesque vitae vitae massa. Maecenas vel vehicula turpis, sed mollis neque. Curabitur euismod justo mauris, sed consectetur nisl faucibus sed. Sed in pellentesque tellus. Cras lacus mi, sodales id dictum eu, fringilla ac arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce a nisi volutpat, euismod lacus a, congue risus.', 'http://placehold.it/500x300?text=article', '2017-04-10 19:08:35'),
(3, 3, 1, 'Tension as German right-wingers meet', '<p>Thousands of police officers have been deployed in Cologne, Germany, as thousands of left-wing protesters gather to demonstrate against an Alternative fuer Deutschland (AfD) party conference.</p>\n<p>The AfD, a populist right-wing and anti-Islam party, will seek to choose a new co-leader to take it up to a general election later this year.</p>\n<p>Clashes have broken out and one officer was injured in the face while escorting party members.\nPolice have deployed 4,000 officers.</p>\n<p>They have described the mood as tense and there are several reports of arrests. One man was detained after the police officer was hurt.</p>\n<p>Some 10,000 protesters are there already, the German tabloid Bild reports (in German). Many shops are closed for the day, people in Cologne have tweeted, and police helicopters are overhead.</p>\n\n<h4>Bicycle blockade</h4>\n<p>Thousands of armed police officers are holding protesters back from the entrance to the hotel where the conference is taking place.</p>\n<p>About 100 people tried to break through a police line on the opposite side of the Rhine river from the conference venue, Die Welt newspaper reports (in German). Outside the hotel, 50-60 people blocked access using a chain of bicycles. Police broke this up, leading to skirmishes with protesters.</p>\n<p>It is not the first time an AfD conference has attracted demonstrations. When the party met last year in Stuttgart, hundreds of protesters were detained.</p>\n<p>Police escorted 13 couples through nearby streets to their wedding ceremonies in the city hall, local news site RP Online reports. One told the site (in German): \"We\'re getting straight out and celebrating in Bochum [another city in the region].\"</p>\n<p>AfD co-leader Frauke Petry announced earlier this week that she would not lead the party into the September general election.</p>\n<p>On Saturday she told the conference: \"Let us show that ... we are here in this political Germany to stay and will lead this country and Europe towards a new blossoming of democracy.\"\nThe party pushed Angela Merkel\'s governing conservatives into third place in a regional election last year and hopes to build on its success by getting its first seats in the federal parliament.</p>\nIt rose on a wave of opposition to Chancellor Angela Merkel\'s 2015 open-door policy to refugees.\nHowever, all the mainstream parties have said they will refuse to form a coalition with the AfD.\nOpinion polls suggest a sharp recent drop in the party\'s popularity - from 15% late last year to between 7% and 11% now.\nIt is beset by infighting and its reputation has been dented by a local leader\'s comments in January that the Holocaust memorial in Berlin was a \"memorial of defeat\". The party has voted to expel him and he will not be allowed to attend the conference.\nHowever, some delegates say they will put forward a motion aimed at keeping him in the party.\nWhile this weekend is officially a party conference, in truth it will be a weekend of crisis talks for the AfD, the BBC\'s Jenny Hill reports.\n', 'https://ichef.bbci.co.uk/news/660/cpsprodpb/7D36/production/_95745023_delegateescorted.jpg', '2017-04-22 13:34:20'),
(4, 3, 2, 'O\'Sullivan cruises past Murphy to reach last eight', 'Five-time champion Ronnie O\'Sullivan eased past Shaun Murphy 13-7 to reach the World Championship quarter-finals.\r\n\r\nO\'Sullivan led 10-6 overnight and breaks of 111, 67 and 55 on Saturday put him through to the last eight at the Crucible for the 18th time.\r\n\r\nA century and three 70-plus breaks in Friday\'s opening session had put him 6-2 up - a lead he did not relinquish.\r\n\r\nDefending champion Mark Selby begins his last-16 tie against China\'s Xiao Guodong at 19:00 BST.\r\n\r\nIn-form O\'Sullivan\r\n\r\nIn an extraordinary news conference following his first-round win over Gary Wilson, O\'Sullivan had accused snooker authorities of \"bullying and intimidation\".\r\n\r\nAn already tasty encounter had further intrigue added to it by fellow Englishman and world number five Murphy, who dismissed his opponent\'s claims.\r\n\r\nIt seemed to fire O\'Sullivan up, looking focused and determined by producing a delightful performance in the first session from which the 2005 champion Murphy was unable to recover.\r\n\r\n\"I have practised for this tournament, given it six to seven weeks, but it does not necessarily mean you are going to play well. I have put my work in and hope to get stronger each match,\" said O\'Sullivan.\r\n\r\n\"I don\'t pay attention to what anybody says. I come here, get into my own cocoon, and do what you have to do. It is a long slog, hard mentally especially for me, but you just have to try your best.\"\r\n\r\nAfter defeat on Saturday, 2005 champion Murphy said: \"Any match against Ronnie is a test of your skills and you have to play at your absolute best to win. I did not.\r\n\r\n\"Ronnie played really, really well in the whole match and if he plays with that level of focus he will go on to win the title.\r\n\r\n\"I don\'t subscribe to the \'not being bothered\' stuff. He certainly looks like he is trying.\"\r\n\r\nIn the next round, world number 12 O\'Sullivan will face a Chinese opponent in either Ding Junhui or Liang Wenbo, with last year\'s runner-up Ding 9-7 ahead in that contest.', 'http://ichef.bbci.co.uk/images/ic/976xn/p050mlfj.jpg', '2017-04-22 13:37:45'),
(5, 3, 3, 'Trump makes a French election prediction', 'On Friday morning Donald Trump dipped his presidential toe into French electoral politics, tweeting about the possible impact of the Paris shooting on Thursday that resulted in one police officer dead and two seriously wounded.\r\n\"Another terrorist attack in Paris,\" Mr Trump wrote. \"The people of France will not take much more of this. Will have a big effect on presidential election!\"\r\nThe previous day, during a joint press conference with Italian Prime Minister Paolo Gentiloni, Mr Trump had quickly labelled the incident a \"terrorist attack\" - before even French authorities had done so.\r\n\"It\'s a very, very terrible thing that is going on in the world today,\" Mr Trump said. \"And what can you say? It just never ends. We have to be strong and we have to be vigilant, and I\'ve been saying it for a long time.\"\r\nThat last line is certainly true.\r\n\r\nWhile the dynamics of French politics are decidedly different from those in the US, Mr Trump may recall that another incident in Paris - the November 2015 mass shooting at the Bataclan theatre - helped solidify his lead in the polls leading into the Republican presidential primaries.\r\n\"Everyone is now saying how right I was with illegal immigration and the wall,\" he tweeted several days after the attack two years ago. \"After Paris, they\'re all on the bandwagon.\"\r\nMr Trump did not mention her by name, but the president seems to be predicting the Champs-Elysees shooting will be a boost for French nationalist candidate Marine Le Pen, who has campaigned on deporting suspected Islamic militants and a French withdrawal from the European Union.\r\n\r\nAlthough Mr Trump has not formally met the French presidential candidate, she is close to some of the same advisers who helped craft the president\'s populist message during his campaign last year and was spotted in Trump Tower during the presidential transition in January.\r\nBreitbart News, which was an early supporter of Mr Trump\'s improbable presidential bid, has also warmly covered Ms Le Pen\'s efforts.\r\n\"A new world is emerging, global equilibriums are being redefined by the fact of Trump\'s election,\" Ms Le Pen said the day after Mr Trump\'s presidential victory. \"Their world is crumbling; ours is being built.\"\r\nWhile critics may view Mr Trump\'s Friday morning tweet as an unwelcome effort to influence the politics of another nation, the reality is slightly more complicated than that. Earlier on Thursday former President Barack Obama spoke with another leading French candidate, Emmanuel Macron, who has campaigned in favour of a strong European Union and open borders.\r\n\r\n\"The main message I have is to wish you all the best in the coming days.\" Mr Obama said in an edited video of the call that Mr Macron posted on Twitter. \"And make sure, as you said, that you work very hard all the way through because you never know, it might be that last day of campaigning that makes all the difference.\"\r\n\"Let\'s keep defending our progressive values,\" Mr Macron wrote. \"Thank you for this discussion @BarackObama\".\r\nIn other words, the French election - from an American perspective, at least - could be setting up a proxy battle between the current and former president and their competing views of economic nationalism versus liberal globalism.\r\nA similar dynamic played out during last June\'s Brexit referendum in the UK, when Mr Obama tacitly endorsed the Remain camp, while Mr Trump heralded the Leave victory as evidence that his nationalist politics were gathering strength.\r\nNow, after two notable defeats for the existing international establishment - in Brexit and Mr Trump\'s November election - Mr Obama may view Mr Macron as a last, best hope to stem a rising populist tide in the West. Although European Union supporters were heartened by the results in the recent Dutch elections, where nationalist candidate Geert Wilders was defeated, the French vote is a much more significant matter.\r\nMr Trump and his advisers may view Ms Le Pen as the hand that will deliver a death blow to the European Union and cement his own election as more than a quirk of American politics and, instead, as the harbinger of a new global order.\r\nYou can follow the first round of the French election on the BBC News website. Click here for all our latest coverage. On the day of the election, we will be running a live page bringing together the latest news, video and analysis.\r\nOn TV, you can watch a BBC World News Election Special, from 18:30 BST (17:30 GMT / 19:30 local time in France) on Sunday, which will be broadcast on BBC News in the UK and on BBC World News internationally, with Christian Fraser presenting from Paris.\r\nFor radio, BBC World Service will broadcast a special extended edition of Newshour from Paris at 18:00 GMT on Sunday.', 'https://ichef-1.bbci.co.uk/news/320/cpsprodpb/9397/production/_95738773_gettyimages-670831910.jpg', '2017-04-22 13:39:02'),
(6, 3, 4, 'Tesla recalls 53,000 cars over brake issue', 'Tesla has issued a voluntary global recall for some of its Model S and Model X cars to fix a problem with the parking brake.\r\nThe electric car maker said about 2% of the 53,000 vehicles built from February to October 2016 were affected, but all of those cars are being recalled.\r\nThe company added it had no reports of accidents or injuries relating to the brake issue.\r\nIn US trading, Tesla shares closed down 1% at $302.51.\r\nIn a statement the firm said the electric parking brakes installed on Model S and Model X \"may contain a small gear that could have been manufactured improperly by our third-party supplier\".\r\nIf the gear were to break, the parking brake would continue to keep the car from moving, but the parking brake would be stuck in place, it added.\r\nTesla said there had been no reports of parking brake failure, and said it was \"safe to continue regular use of your vehicle.\"\r\nThe company will be sending an official recall notice to customers, with information on how the parking brakes could be replaced.\r\nIn 2013, the National Highway Traffic Safety Administration, a US federal government agency, awarded the Tesla Model S a 5-star safety rating, and said the vehicle \"set a new record for the lowest likelihood of injury to occupants\".\r\nThe company issued a voluntary recall for 3,000 of its Model S cars in November 2015, due to seatbelt connectivity problems.\r\nFuture goals\r\nTesla produced a total of 83,922 vehicles in 2016, including the Model S and Model X.\r\nEarlier this week chief executive Elon Musk said Tesla would unveil an electric articulated lorry in September. Additionally, he said an electric pick-up truck would be shown off in the next two years.\r\nLast year Mr Musk expressed the firm\'s desire to branch out beyond cars, but analysts are concerned the company will not meet demand for its current projects.\r\nThe Model 3, a more mid-market car compared with Tesla\'s current offerings, has 400,000 pre-orders which is vastly more than the company can manufacture in a year. It is due to go into production later this year.\r\nThe basic model will start at $35,000 (£28,500) and have a range of at least 215 miles (346km) per charge.\r\nTesla faces competition from other similarly priced electric cars that will become available first, including General Motors\' Chevy Bolt and BYD\'s Qin EV300.', 'https://ichef-1.bbci.co.uk/news/320/cpsprodpb/16E4C/production/_95727739_teslamodelsgettyimages.jpg', '2017-04-22 14:02:07'),
(8, 1, 2, 'Dejan Lovren: Liverpool centre-back signs new deal until 2021', 'Liverpool centre-back Dejan Lovren has signed a new long-term contract at the club until 2021.\r\n\r\nThe 27-year-old moved to Anfield from Southampton in a deal worth £20m in 2014 and his current contract was due to expire next year.\r\n\r\nCroatia defender Lovren struggled for form in his first season but has made 105 appearances in total for Liverpool, scoring four goals.\r\n\r\n\"I think I am the happiest guy [in the world] today,\" he said.\r\n\r\n\"It was always my dream to stay as long as possible at one club that I love - and that is Liverpool,\" he added.\r\n\r\nLovren has played 28 games this season, scoring twice. He struggled to reproduce the form he showed for Southampton following his move and faced criticism in his first term at Anfield.\r\n\r\nBut he has now established himself under manager Jurgen Klopp and formed part of Liverpool\'s first-choice centre-back pairing alongside Joel Matip this season.\r\n\r\nSpeaking to Liverpoolfc.com, he added: \"After all that happened in the beginning, in the past two seasons, I think I\'ve done better than in the first season. The club have rewarded me, they believed in me and also the fans.\"', 'http://ichef.bbci.co.uk/onesport/cps/800/cpsprodpb/11A3C/production/_95825227_lovren1.jpg', '2017-04-28 15:14:42'),
(9, 1, 2, 'Real Madrid & Wales striker Gareth Bale sidelined by calf injury', 'Real Madrid forward Gareth Bale could miss crucial games in the end-of-season run-in after suffering a calf injury.\r\n\r\nThe club have described the problem as a \"grade two\" injury, but have not given a time frame for his absence.\r\n\r\nSpanish newspaper AS has reported the Wales forward, 27, will be out for three to four weeks.\r\n\r\nReal face Atletico Madrid in the first leg of their Champions League semi-final next Tuesday, with the final in Cardiff on 3 June.\r\n\r\nBale, 27, came off after 39 minutes in Sunday\'s El Clasico defeat by Barcelona.\r\n\r\nReal, level on points with La Liga leaders Barca and with a game in hand, have important league games this week, facing Deportivo on Wednesday and Valencia on Saturday.\r\n\r\nWales play a World Cup qualifier in Serbia on 11 June, eight days after the Champions League final.\r\n\r\nHowever, Bale is suspended for the match in Belgrade.', 'http://ichef.bbci.co.uk/onesport/cps/800/cpsprodpb/7920/production/_95780013_bale_reuters_2.jpg', '2017-04-28 15:18:55'),
(10, 1, 2, 'Roma keep up pressure on Juve with win at Pescara', 'Roma thrashed bottom side Pescara 4-1 to move back to within eight points Serie A leaders Juventus.\r\n\r\nThree goals in five minutes either side of half-time ensured the points went back to Rome.\r\n\r\nThe win keeps Roma\'s slim hopes of denying Juve a sixth straight Serie A title alive.\r\n\r\nThere are five games left in the Italian league season, with Roma - who still have to play Lazio and AC Milan - hosting their Turin rivals on May 14.\r\n\r\nKevin Strootman broke the deadlock in the 44th minute as he fired home from a central position and before Pescara could gather themselves, Radja Nainggolan doubled the lead on the stroke of half-time.\r\n\r\nThree minutes into the second half, Mohamed Salah\'s shot from outside the area found the bottom left corner of Vincenzo Fiorillo\'s net and it was the Egyptian again to score Roma\'s fourth on the hour mark.\r\n\r\nRoma passed up a series of chances to add to their lead and instead it was Pescara who had the final word, with Ahmad Benali turning in Ledian Memushaj\'s cross with seven minutes left.\r\n\r\nThe result means Pescara are relegated to Serie B.', 'http://ichef.bbci.co.uk/onesport/cps/800/cpsprodpb/131F7/production/_95772387_roma1_getty.jpg', '2017-04-28 15:20:58'),
(11, 1, 1, 'US economy slows sharply in the first quarter', 'The US economy slowed dramatically in the first three months of the year, according to official data.\r\nGDP expanded at an annual rate of 0.7% in the first quarter, which was a sharp slowdown from the 2.1% growth rate in the final three months of 2016.\r\nIt was also the lowest rate of growth since the first quarter of 2014, when the economy contracted by 1.2%.\r\nThe Bureau of Economic Analysis blamed lower levels of government spending and private investment.\r\nIn recent years GDP growth has often been sluggish in the first quarter, but has picked up later in the year.\r\nMany economists blame that trend on the way the data is collected.\r\n\"US GDP figures are typically weaker in the first quarter, so this reading is in line with the seasonal trend,\" said Nancy Curtin, chief investment officer at Close Brothers Asset Management.\r\n\"We haven\'t yet had the expected fiscal stimulus from Trump, the effects of which may not be seen until the end of this year or the start of 2018.\"\r\nShe also pointed out that other data suggested strength in the US economy .\r\n\"While investors might be disappointed with the reading, it has been a steady start to the year with inflation looking benign, a resilient jobs market and positive PMI [purchasing managers\'] data.\"', 'https://ichef.bbci.co.uk/news/660/cpsprodpb/41F2/production/_95828861_tesla.factory.r.jpg', '2017-04-28 15:23:36'),
(12, 1, 1, 'UK police foil \'active terror plot\'', 'Police say they have foiled an active terror plot after a woman was shot during a raid on a house in Willesden, north-west London.\r\nThe 21-year-old woman was one of the subjects of the investigation and is in a serious but stable condition.\r\nA raid also took place in Kent, with six people arrested in total.\r\nOfficers say the operation was not connected to an arrest near Parliament on Thursday, when a man was detained on suspicion of terror offences.\r\nPolice said the house in Harlesden Road, Willesden, which was raided on Thursday evening, had been under observation.\r\n\'Threats contained\'\r\nAt about 19:00 BST, firearms officers entered the property. CS gas was sprayed and a woman was shot.\r\nA 16-year-old boy, and a man and woman, both aged 20, were arrested. A 43-year-old woman was arrested in Kent.\r\nTwo further arrests were made in Willesden after a man and woman, both aged 28, returned to the raided property.\r\nThe police said the suspects had been arrested on suspicion of the commission, preparation and instigation of terrorist acts.\r\nThey are in custody at a south London police station.\r\nNeil Basu, deputy assistant commissioner of the Metropolitan Police, said: \"Due to these arrests that have been made yesterday, in both cases I believe that we have contained the threats that they pose.\"\r\nWhen asked by reporters whether police had foiled an active terror plot, Mr Basu replied: \"Yes.\"\r\nHe added: \"There are constant acts of immense bravery by officers, armed and unarmed - those that the public see, where our officers run towards danger just as you saw yesterday, but a huge amount of unseen work that the public will never see behind the scenes.\"\r\nAlex Paton, 50, who lives in Harlesden Road, said he saw a woman \"getting all cuffed up and put in a white suit\".\r\nHe described seeing \"coppers and masked men with guns\".\r\nAnother resident of the area said she had heard the \"bang, bang, bang\" of shots.\r\nA neighbour of the raided property suggested the shot woman had suffered injuries to her left arm and stomach.\r\nHe said the family who lived there were from Somalia.', 'https://ichef.bbci.co.uk/news/624/cpsprodpb/D05E/production/_95824335_hi039209391.jpg', '2017-04-28 15:25:55'),
(13, 1, 3, 'How EU is expanding scope of Britain\'s Brexit bill to include refugees in Turkey', 'Europe is expanding yet further its demands for Britain’s Brexit financial settlement to include “political” commitments, such as the UK’s share of a £2.5bn fund to help refugees in Turkey, The Telegraph can disclose.\r\n\r\nThe growing demands, which have been backed by the powerful voice of Germany, reflect Europe’s determination not to be left out of pocket by Britain’s withdrawal from the EU.\r\n\r\nEuropean leaders will meet in Brussels on Saturday to finalise the European Council’s negotiating guidelines which have been notably strengthened since they were first issued by Donald Tusk, the European Council president, on March 31.\r\n\r\nThe section covering Britain’s financial settlement has been expanded to include broad references to “issues resulting from” the EU’s 7-year multi-annual budget framework (MFF) as well as those related to the European Investment Bank (EIB) and European Development Fund (EDF)....', 'http://www.telegraph.co.uk/content/dam/news/2017/04/28/TELEMMGLPICT000127032687-large_trans_NvBQzQNjv4BqkzRVrpaG8pgYx8zuruU0oLxVMM-N2Dh3uu4C0ivbnMw.jpeg', '2017-04-28 15:29:31'),
(14, 1, 3, 'EU will allow Northern Ireland back in if Britain breaks up after Brexit', 'EU President Donald Tusk has said Britain must settle the key issue over the future of Ireland before a post-Brexit trade deal can take place.\r\n\r\nAhead of a key meeting on Saturday Mr Tusk said that \"before discussing our future, we must first sort out our past\", as it emerged Northern Ireland could be given the chance to rejoin the union if it voted for reunification.\r\n\r\nThe EU \"will not discuss our future relations\" with the UK until \"sufficient progress\" has been made on key issues like the Irish question, Mr Tusk said in a letter to the 27 other leaders.\r\n\r\nAs well as outstanding financial obligations, a deal on the rights of EU citizens living in the UK and Britons living in the rest of the bloc must be reached he added.\r\n\r\nMr Tusk also called for action to avoid a hard border between Northern Ireland and the Republic.\r\n\r\nIt came as it emerged that European leaders could take steps towards allowing Northern Ireland to rejoin the EU after Brexit if its citizens voted for reunification of the country. \r\n\r\nA clause could be inserted into the text of the EU\'s formal negotiating position when leaders meet today which would allow Northern Ireland to automatically join the union again in a similar manner to East Germany when Germany reunified. \r\n\r\nIt reflects the 1998 Good Friday Agreement, which Theresa May has vowed to uphold and protect, which allows a referendum on reuniting Ireland if it is thought a majority would be in favour. \r\n\r\nHowever a recent poll found that 62 per cent would vote for Northern Ireland to remain in the UK while 22 per cent backed reunification. Voters in the Republic of Ireland are also said to be sceptical. \r\n\r\nThe move will create uncertainty about the future of the UK and is likely to prompt further questions about Scotland after Nicola Sturgeon vowed to push for automatic membership of the EU if the nation voted in favour after Brexit. \r\n\r\nBut it will also come as a coup for outgoing Taoiseach Enda Kenny, who has been pushing for the \"united Ireland\" clause to be included as part of Brexit talks.', 'http://www.telegraph.co.uk/content/dam/news/2017/04/20/TELEMMGLPICT000124354251-large_trans_NvBQzQNjv4BqpVlberWd9EgFPZtcLiMQfyf2A9a6I9YchsjMeADBa08.jpeg', '2017-04-28 15:41:45'),
(15, 1, 3, 'UK election parties and candidates: Who is standing in 2017?', 'There are a number of well-known politicians stepping down in this election - including former Chancellor and then-favourite to become the next Prime Minister, George Osborne.\r\n\r\nAfter Theresa May sacked him as chancellor, he became the editor of the London Evening Standard newspaper as well as a number of other jobs - including for the fund manager BlackRock. He then announced he was stepping down \"for now\".\r\n\r\nOther Tory big-hitters to be leaving are former Conservative Party chairman Sir Eric Pickles, long-standing chairman of the Treasury Select Committee Andrew Tyrie and Tory-turned-UKIP-turned-independent MP Douglas Carswell.\r\n\r\nLabour\'s Parliamentary group will lose former home secretary Alan Johnson, leading Leave campaigner Gisela Stuart and former health secretary Andy Burnham, who is tipped to become Mayor of Greater Manchester in May\'s local elections. says he will not stand again in June.\r\n\r\nThere are at least 17 other MPs known not to be standing:\r\n\r\nTom Blenkinsop - Labour (Middlesbrough South and East Cleveland)\r\nGraham Allen - Labour (Nottingham North)\r\nIain Wright - Labour (Hartlepool)\r\nPat Glass - Labour (North West Durham)\r\nSimon Burns - Conservative (Chelmsford)\r\nJohn Pugh - Lib Dem (Southport)\r\nAndrew Smith - Labour (Oxford East)\r\nAngela Watkinson - Conservative (Hornchurch and Upminster)\r\nJim Dowd - Labour (Lewisham West and Penge)\r\nFiona Mactaggart - Labour (Slough)\r\nRob Marris - Labour (Wolverhampton South West)\r\nSir Gerald Howarth - Conservative (Aldershot)\r\nDave Anderson - Labour (Blaydon)\r\nMichael Dugher - Labour (Barnsley East)\r\nMichelle Thomson - Independent (Edinburgh West)\r\nSir Alan Haselhurst - Conservative (Saffron Walden)\r\nDavid Mackintosh - Conservative (Northampton South)', 'http://www.telegraph.co.uk/content/dam/news/2017/04/28/who-is-my-candidate-large_trans_NvBQzQNjv4BqqVzuuqpFlyLIwiB6NTmJwfSVWeZ_vEN7c6bHu2jJnT8.png', '2017-04-28 15:44:38'),
(16, 1, 4, 'Samsung Galaxy S8 and S8+: UK price, release date and pre-order information', 'Samsung\'s Galaxy S8 and S8+, its two latest high-end smartphones, go on sale today.\r\n\r\nThe devices, which were unveiled on Wednesday March 29, are set to be released in April, although those who pre-order it will receive one early.\r\n\r\nWhen is it released?\r\n\r\nThe Samsung Galaxy S8 is set to go on general sale on Friday, April 28.\r\n\r\nHowever, the first pre-ordered phones will be sent out as early as Thursday April 20, a week beforehand.\r\n\r\nHow do I pre-order one?\r\n\r\nUK pre-orders open from March 29 and are open until April 19, although they will be made available on a first come, first serve basis.\r\n\r\nSamsung itself is taking pre-orders, as are various retailers and mobile networks. All the major British operators are likely to be taking pre-orders.\r\n\r\nHow much will it cost?\r\n\r\nWithout a contract, the S8 costs £689 and the S8+ retails for £779.\r\n\r\nHowever, mobile networks are offering their own deals which, as usual, let you pay off the phone over a year or two.\r\n\r\nWhere can I get one?\r\n\r\nSamsung is selling the phones directly if you want to buy them up front. The company\'s pre-order page is here.\r\n\r\nMobile networks and retailers also have their own deals. EE is offering the S8 for £55.99 a month and the S8+ for £60.99 a month, both with a £29.99 up front cost on two-year deals.\r\n\r\nVodafone has the S8 at £47 a month with a £30 up front cost and the S8+ at £52 a month and £50 up front.\r\n\r\nSky Mobile is offering the S8 for £36 a month and the S8+ for £40 a month without an upfront cost. Under its Swap plan, you upgrade after two years (or one year on a different plan): if you don\'t you continue paying for six more months.\r\n\r\nCarphone Warehouse has its own deals on the phone. It says it is offering up to £170 trade-in value for old Galaxy phone as well as a Samsung wireless speaker worth £99.99 with each order.\r\n\r\nWhat is it like?\r\n\r\nThe S8 and S8+ feature edge-to-edge displays, so almost all of the front of the device is taken up by the screen. The S8 has a 5.8-inch display while the S8+ boasts 6.2 inches.\r\n\r\nBoth have a 12MP main and 8MP front camera, a fingerprint sensor on the back, and run Android 7.0.', 'http://www.telegraph.co.uk/content/dam/technology/2017/03/29/TELEMMGLPICT000124606188-large_trans_NvBQzQNjv4BqwD2sfO9joeQ6RY-qlTATNOlL2XEdRtZATQesx6PGlBw.jpeg', '2017-04-28 15:47:06'),
(17, 1, 4, 'Google launches in Cuba as first foreign internet company', 'Google has become the first foreign internet company to launch a service in Cuba, raising hopes of reform in one of the world\'s most cut-off countries. \r\n\r\nThe internet giant opened a new data centre in Cuba yesterday where it will store information such as popular YouTube videos.\r\n\r\nIn a move that indicates Cuba is opening its doors to modernisation and greater access to information, the on-island servers will make it easier for Cuban people to access Google\'s services. \r\n\r\nUntil now information from across the internet had to travel to the island through a submarine cable from Venezuela, making the connection very slow. But now the Google servers will be able to store content such as videos that are traffic-intensive in order to make it easier for inhabitants to view it. \r\n\r\nWhen Google announced the plan at the end of last year, it said Cuban people \"can expect to see an improvement in terms of quality of service and reduced for cached latency\". \r\n\r\nIt has been hailed as a step forward for Cuba, which has severely restricted internet access that is controlled by the state. \r\n\r\n\"It is a milestone as this is the first time an outside internet company has hosted anything in Cuba,\" said Doug Madory, director of Dyn Research, which broke the news that the servers had been turned on. \"I think this will be very noticeable for Cubans.\"\r\n\r\nHowever, the benefits will only reach Cubans who already have access to the internet.\r\n\r\nIt remains difficult for the average Cuban to connect to the internet, because of poor infrastructure and controlling laws. Most Cuban people are not granted permission to have internet in their homes, and can only access it at some places of work, education facilities and at one of 240 public Wi-Fi spots. \r\n\r\nThe public hotspots cost $1.50 per hour of usage, while internet cafes charge around $4.50, which is prohibitively expensive for many Cubans given the average monthly wage is around $25. \r\n\r\nFreedom House, which researchers political freedom and human rights, estimates 5 per cent of Cubans have access to the internet. \r\n\r\nExperts have warned that it is likely to be a while before the country has widespread, open access to the internet. \r\n\r\n\"The internet in Cuba will still be a painfully slow process,\" said Madory. \"This is just another somewhat rare step forward.\" \r\n\r\nGoogle has been working with Cuba since 2014, when Barack Obama and Raul Castro announced the re-opening of relations and the US relaxed its trade embargo against the communist country. \r\n\r\nThe company said its work with Cuba reflects its goals of making information accessible across the world by removing barriers such as cost, connectivity and language. ', 'http://www.telegraph.co.uk/content/dam/technology/2017/04/27/TELEMMGLPICT000125606335-large_trans_NvBQzQNjv4BqqVzuuqpFlyLIwiB6NTmJwSoek75Ey9NHvsgOL1KbcMI.jpeg', '2017-04-28 15:48:54'),
(18, 1, 4, 'Twitter\'s revenue declines for first time', 'Twitter has reported the first revenue decline in its history as a public company, but shares soared on Wednesday as improved user growth suggested the social network\'s long and painful turnaround is bearing fruit.\r\n\r\nThe company said monthly users - a key statistic for social media companies - grew by 6pc in the first quarter of the year, the fastest for two years. The number of daily users, meanwhile, grew by 14pc, showing that Twitter\'s existing users are logging in more often.\r\n\r\nTwitter\'s shares rose by 10pc in early trading despite sales falling by 8pc to $548m (£427m), the first time it has registered a decline since going public in 2013. The fall was not as severe as analysts had expected, however. Losses decreased from $79.7m to $61.6m.\r\n\r\nDespite celebrities and public figures including Donald Trump being hooked on Twitter, the microblogging service has struggled to mimic the growth of other social media companies such as Facebook.\r\n\r\nUser numbers have stalled in the last two years, with critics saying new users find the service baffling and condemning it for failing to crack down on harassment.\r\n\r\nTwitter has 328m monthly users, compared to almost 2bn for Facebook. Instagram, the photo sharing app that Twitter once tried to buy before Facebook paid $1bn for it five years ago, announced on Wednesday that it is now more than twice the size of Twitter with more than 700m users.\r\n\r\nNonetheless, the boost to growth is a potential turning point for Twitter. It credited recent changes to its app with the increase, rather than any extra attention it has received due to Mr Trump\'s frequent use of the service.\r\n\r\nThe company said revenue fell due to it overhauling its advertising business in recent months, and said increased use of Twitter will filter through to its financials over time.\r\n\r\n\"While we continue to face revenue headwinds, we believe that executing on our plan and growing our audience should result in positive revenue growth over the long term,\" its chief executive Jack Dorsey said.', 'http://www.telegraph.co.uk/content/dam/technology/2017/04/26/TELEMMGLPICT000126950939-large_trans_NvBQzQNjv4BqS8LvVGaCov9_zEWH2d7j7f7uG-EXu1vQjA186ek-eCk.jpeg', '2017-04-28 15:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'News'),
(2, 'Sport'),
(3, 'Politics'),
(4, 'IT & Technology'),
(5, 'Magazine'),
(6, 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(500) NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `article_id`, `content`, `comment_date`) VALUES
(1, 3, 1, 'This is a test comment!', '2017-04-11 18:08:30'),
(2, 40, 1, 'Wow! This article is awesome!', '2017-04-11 20:15:01'),
(8, 46, 1, 'Okay, i\'ve added a htmlspecialchars function to the comment input, lets see if i can &lt;strong&gt;bold this now?&lt;/strong&gt;', '2017-04-11 22:36:09'),
(9, 46, 1, '123', '2017-04-12 22:07:46'),
(10, 50, 1, 'Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly 500 characters. Testing a comment with exactly', '2017-04-13 19:38:19'),
(15, 1, 3, '123', '2017-04-25 12:31:55'),
(17, 1, 3, '12313414', '2017-04-25 13:30:19'),
(21, 1, 3, '&lt;div&gt;Test&lt;/div&gt;', '2017-04-25 14:20:10'),
(25, 1, 3, '&quot;sup&quot;', '2017-04-28 15:09:04'),
(26, 1, 12, 'cao cao zdrao', '2017-04-28 15:58:55'),
(37, 51, 12, '-- suh dude', '2017-04-28 16:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `rank_id` tinyint(1) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`rank_id`, `name`) VALUES
(1, 'Administrator'),
(2, 'Moderator'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT 'male',
  `rank_id` tinyint(1) UNSIGNED NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `gender`, `rank_id`, `reg_date`) VALUES
(1, 'admin', '25e4ee4e9229397b6b17776bfceaf8e7', 'ismar@mail.com', 'male', 1, '2017-04-11 01:56:50'),
(3, 'username', '5f4dcc3b5aa765d61d8327deb882cf99', 'user@mail.com', 'male', 3, '2017-04-09 00:00:00'),
(40, 'patrick', '5f4dcc3b5aa765d61d8327deb882cf99', 'patrick@gmail.com', 'male', 3, '2017-04-10 00:00:00'),
(46, 'ismar', '5f4dcc3b5aa765d61d8327deb882cf99', 'ismar@mail.com', 'male', 3, '2017-04-11 01:52:11'),
(49, 'jessica90', '5f4dcc3b5aa765d61d8327deb882cf99', 'jess@mail.com', 'female', 3, '2017-04-22 16:01:44'),
(50, 'test', '5f4dcc3b5aa765d61d8327deb882cf99', 'test@mail.com', 'male', 3, '2017-04-22 16:02:21'),
(51, 'jully', '5f4dcc3b5aa765d61d8327deb882cf99', 'jully@mail.com', 'female', 3, '2017-04-22 16:21:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `idx_title` (`title`),
  ADD KEY `fk_user_id_idx` (`user_id`),
  ADD KEY `fk_category_id_idx` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_user_id_idx` (`user_id`),
  ADD KEY `fk_comment_article_id_idx` (`article_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `fk_user_rank_id_idx` (`rank_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `rank_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_rank_id` FOREIGN KEY (`rank_id`) REFERENCES `rank` (`rank_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
