-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 05:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_sbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `author` varchar(100) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `author`, `picture`, `created_at`) VALUES
(1, 'Mitapivat Superior to Placebo for Pyruvate Kinase Deficiency', 'The oral, first-in-class activator of erythrocyte pyruvate kinase, mitapivat, increases hemoglobin levels among patients with pyruvate kinase deficiency, according to a study published in the April 14 issue of the New England Journal of Medicine.', '', NULL, '2022-04-22'),
(2, 'AHA News: Confused About COVID-19 Boosters? Experts Answer 6 Common Questions', 'When the Food and Drug Administration recently authorized a second COVID-19 booster shot for some people, many of those eligible wondered whether to get one – and when, given that cases are once again rising in some parts of the country.', 'Michael Merschel', NULL, '2022-04-22'),
(3, 'AHA News: Air Pollution Exposure May Cause Heart Attack Within an Hour', 'Exposure to air pollutants – even at levels below World Health Organization air quality guidelines – may trigger a heart attack within the hour, according to a new study from China that found the risks were highest among older people and when the weather ', 'Laura Williamson', NULL, '2022-04-22'),
(4, 'FDA Warns Consumers Not to Purchase or Use Artri and Ortiga Products, Which May Contain Hidden Drug Ingredients', 'FDA is warning consumers not to purchase or use products marketed with variations of the names “Artri” or “Ortiga” due to potentially dangerous hidden active drug ingredients not listed on the product label. FDA urges consumers taking these products to im', '', NULL, '2022-04-20'),
(5, 'Heart Risk Factors Can Be Recipe for Dementia', 'The faster you pile up heart disease risk factors, the greater your odds of developing dementia, a new study suggests.', '', NULL, '2022-04-25'),
(6, 'Former College Football Players Suffer More Brain Disorders as They Age', 'College football players live longer than those who didn\'t play, but they suffer more brain-related issues as they age, a new study finds.', 'Steven Reinberg HealthDay Reporter', NULL, '2022-04-21'),
(7, 'How Does Exercise Guard Against Dementia? Study Reveals Clues', 'Exercise may help safeguard your brain as you age, and a new study suggests how this might happen.', '', NULL, '2022-04-20'),
(8, 'More DNA Errors Seen in Brain Cells of Alzheimer\'s Patients', 'Genetic mutations build up faster in the brain cells of Alzheimer\'s disease patients than in other people, new research reveals.', '', NULL, '2022-04-22'),
(9, 'Genetic Sign of Aging Linked to Risk of Fatal COVID', 'It\'s known that certain chronic health conditions up the odds of death from COVID-19. Now, new research identifies another risk factor.', '', NULL, '2022-04-25'),
(10, 'Only 1 in 4 Long COVID Sufferers Fully Recovered One Year Later', 'A year after being hospitalized with COVID-19, only about 25% of people felt fully recovered, a new study shows, and the risk of long COVID was highest among women, obese people and those who were on a ventilator.', '', NULL, '2022-04-25'),
(11, 'As Pandemic Continues, Advice for Parents on How to Manage Anxiety in Kids', 'Anxiety over the COVID-19 pandemic is common among young children, and parents may wonder how to quell those concerns.', '', NULL, '2022-04-24'),
(12, 'Fewer Adults With ADHD Have \'Excellent\' Mental Health', 'Two in five adults with attention-deficit/hyperactivity disorder say their mental health is excellent, which is significantly lower than people without the disorder, but still an encouraging finding, according to the authors of a new study.', '', NULL, '2022-04-25'),
(13, 'Virtual, Hybrid Format Feasible for Cardiac Rehabilitation', 'Hybrid and virtual cardiac rehabilitation are associated with similar improvements in functional capacity as in-person cardiac rehabilitation, according to a study published online April 13 in the Journal of Cardiopulmonary Rehabilitation and Prevention.', '', NULL, '2022-04-25'),
(14, 'White Women Tend to Get Better Pain Management After Childbirth', 'After childbirth, some women who received an epidural for pain will develop a debilitating headache. But minority women are less likely than white moms to receive the treatment that can provide relief, according to a new study.\r\n\r\n', 'Cara Murez HealthDay Reporter', NULL, '2022-04-25'),
(15, 'Mediterranean Diet May Cut Preeclampsia Risk During Pregnancy', 'A Mediterranean-style diet is known to help protect the heart, and now new research suggests it can also lower an expectant mother\'s risk for life-threatening preeclampsia.', 'Denise Mann HealthDay Reporter', NULL, '2022-04-20'),
(16, 'Virtual Learning Didn\'t Slow Preschoolers\' Reading Skills', 'Preschoolers can learn reading skills in a virtual classroom, University of Washington researchers say.', '', NULL, '2022-04-19'),
(17, 'Living Guideline Updated for Drug Treatment of COVID-19', 'In the living guideline developed by the World Health Organization and published in The BMJ, recommendations on drug options for the treatment of COVID-19 have been updated.', '', NULL, '2022-04-25'),
(18, 'Short-Term Exposure to Air Pollution Tied to SARS-CoV-2 Infection', 'Short-term exposure to particulate matter (PM) and black carbon is associated with an increased risk for positive results on severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) polymerase chain reaction (PCR) testing, according to a study published online April 20 in JAMA Network Open.', '', NULL, '2022-04-25'),
(19, 'U.S. Extends COVID-19 Vaccination Rule for International Travelers at Land Borders', ' International travelers who arrive in the United States through land ports or ferry terminals will still need to show they have been fully vaccinated against COVID-19, U.S. officials said Thursday.', '', NULL, '2022-04-22'),
(20, 'Vaccination Coverage in Kindergarteners Dropped in 2020 to 2021', 'Compared with the 2019 to 2020 school year, vaccination coverage among children in kindergarten decreased by about 1 percent for all vaccines in the 2020 to 2021 school year, according to research published in the April 22 issue of the U.S. Centers for Disease Control and Prevention Morbidity and Mortality Weekly Report.', '', NULL, '2022-04-25'),
(21, 'AACR: Novel COVID-19 Vaccine Aimed at Immunocompromised Patients', 'Interim results of early research show that a new vaccine against severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2), CoVac-1, induces T-cell immune responses in 93 percent of patients with B-cell deficiencies, according to a study presented at the annual meeting of the American Association for Cancer Research, held from April 8 to 13 in New Orleans.', '', NULL, '2022-04-21'),
(22, 'AHA News: COVID-19 Led to Heart Problem That Put Teen in a Wheelchair For 3 Months', 'Olivia Lopez came home from school one day, walked into her mom\'s office and announced: \"I can\'t smell.\"', 'Stefani Kopenec', NULL, '2022-04-26'),
(23, 'Taken Prior to Sex, New Combo Pill May Prevent Pregnancy for Days', 'Imagine a birth control pill a woman can take before having sex that prevents pregnancy for the next three to five days.', 'Denise Mann HealthDay Reporter', NULL, '2022-04-26'),
(24, 'WHO Says Acute Hepatitis Cases in Children Now Reported in 11 Countries', 'The World Health Organization said it is investigating an outbreak of acute hepatitis among children that now involves 11 countries, including the United States.', '', NULL, '2022-04-25'),
(25, 'Asthma, Atopy Risks Up in Offspring Born Via Infertility Treatment', 'Children conceived with infertility treatment have an elevated risk for asthma and atopic conditions in early and middle childhood, according to a study published online April 21 in Human Reproduction.', '', NULL, '2022-04-26'),
(26, 'U.S. Task Force Rejects Daily Aspirin for Heart Health in People Over 60\r\n', 'It seemed a simple prospect — take a low-dose baby aspirin tablet once a day and reduce your risk of ever suffering a heart attack or stroke.', 'Dennis Thompson HealthDay Reporter', NULL, '2022-04-26'),
(27, 'Isofol announces start of study data analysis of phase III AGENT study in advanced metastatic colorectal cancer', 'GOTHENBURG, Sweden, April 22, 2022 . Isofol Medical AB, today announced the start of data analysis of the multi-center, global Phase III AGENT Study investigating arfolitixorin in combination with 5-FU, oxaliplatin and bevacizumab in advanced, metastatic colorectal cancer (mCRC). The kick-off of the read-out process follows discussions with the U.S. Food and Drug Administration (FDA) on the censoring rules and the number of PFS events required to start the data gathering and analysis. Isofol will determine the number of PFS events for cut-off, which will then be considered by the FDA during the NDA review.', '', NULL, '2022-04-22'),
(28, 'Canadian Syncope Risk Score Validated Internationally', 'The Canadian Syncope Risk Score (CSRS) has good performance for identifying patients with syncope at low risk for serious outcomes, according to a study published online April 26 in the Annals of Internal Medicine.', '', NULL, '2022-04-26'),
(29, 'Amputation Risk Up for Black, Rural Residents With Diabetic Foot Ulcers', 'Rural patients identifying as Black have more than a 10 percent absolute increased risk for major leg amputation or death compared with the overall cohort of adult Medicare patients hospitalized with a diabetic foot ulcer, according to a study published online April 21 in JAMA Network Open.', '', NULL, '2022-04-26'),
(30, 'PTSD Often Haunts Family Members of Hospitalized COVID Patients', 'It remains one of the most painful images of the pandemic: Families who were not allowed to be by their loved ones\' bedside as they waged a lonely battle against COVID in a hospital ICU, with some forced to say goodbye via a smartphone or tablet held by a compassionate nurse who didn\'t want a patient to die alone.', 'Alan Mozes HealthDay Reporter', NULL, '2022-04-26'),
(31, 'Poor Sleep Linked to More Mood Disorders During Pandemic', 'Having trouble getting your shut-eye during the COVID-19 pandemic?', '', NULL, '2022-04-26'),
(32, 'Far More American Teens Carrying Guns These Days, Study Finds', 'If you think teen gun violence is not a pressing issue, a new study suggests otherwise.', 'Amy Norton HealthDay Reporter', NULL, '2022-04-26'),
(33, 'Pfizer Voluntary Nationwide Recall of Lots of Accupril (Quinapril HCl) Due to N-Nitroso-Quinapril Content', 'Pfizer is voluntarily recalling five (5) lots of Accupril (Quinapril HCl) tablets distributed by Pfizer to the patient (consumer/user) level due to the presence of a nitrosamine, Nnitroso-quinapril, observed in recent testing above the Acceptable Daily Intake (ADI) level.', '', NULL, '2022-04-22'),
(34, 'FDA Warns Patients and Health Care Professionals Not to Use Sterile Products from North American Custom Laboratories LLC, dba FarmaKeio Superior Custom Compounding', 'FDA is warning patients and health care professionals not to use products intended to be sterile produced by North American Custom Laboratories LLC, FarmaKeio Superior Custom Compounding, Richardson, TX, due to a lack of sterility assurance. Administration of a non-sterile drug intended to be sterile may result in serious and potentially life-threatening adverse health consequences including infections and sepsis.', '', NULL, '2022-03-30'),
(36, 'It\'s \'Kids to Parks Day\': Get Out, Get Active', 'It\'s a good idea to get children outside every day, but especially on Kids to Parks Day, a national day of outdoor play on May 21.\r\n\"Even as the COVID-19 pandemic continues, outdoor time and nature exploration are safe for most kids,\" pediatrician Dr. Danette Glassy said in an American Academy of Pediatrics (AAP) news release.', 'American Academy of Pediatrics', 'https://www.drugs.com/images/hdi/hd105538.jpg', '2022-05-11'),
(37, 'How Long Do Teeth Survive After Root Canal?', 'If you\'ve had a root canal, you can expect your tooth to survive for about 11 years, researchers say.\r\nFor a time, root canals can maintain teeth affected by cavities or other problems, but the tooth eventually becomes brittle and dies. To learn more about just how long that process might take, researchers analyzed data on more than 46,000 patients who had root canals at 99 community dental practices across the United States.', 'Regenstrief Institute', 'https://www.drugs.com/images/hdi/hd105514.jpg', '2022-05-20'),
(38, 'Risk Factors for Dementia May Change With Age', 'Dementia risk factors appear to shift with age, and experts say knowing that could help people make lifestyle changes to reduce their chances of developing the disease.\r\n\"Dementia is a complicated disease and risk prediction scores need to be tailored to the individual,\" said Emer McGrath of the National University of Ireland Galway, lead author of a new study. \"Our findings support the use of age-specific risk prediction scores for dementia instead of a one-size-fits-all approach.\"', '', 'https://www.drugs.com/images/hdi/hd105517.jpg', '2022-05-20'),
(41, 'Frail, But Living at Home: Program Helps Elderly Stay Strong', 'It’s never too late to start exercising and the right activities might help you stay independent in your home.\r\nWhile building healthy habits at an earlier age can have some long-term benefits, adding physical activity can help at all ages, new research suggests.', 'Cara Murez HealthDay Reporter', 'https://www.drugs.com/images/hdi/hd105487.jpg', '2022-05-19'),
(42, 'AHA News: She Was a Prime Candidate for a Heart Attack, If Only She\'d Realized It', 'Just a few days after Dottie Lewis and her husband, Wayne, returned from vacation to their home in Plymouth, Massachusetts, she started feeling poorly.\r\nThis was 2019, a year before COVID-19 shut down travel and before face masks on planes. Dottie often caught a bug while flying. She figured it had happened again.', 'Diane Daniel, American Heart Association News', 'https://www.drugs.com/images/hdi/hd105528.jpg', '2022-05-20'),
(43, 'Restful Night\'s Sleep More Likely for Men Than Women', 'For many women, having it all may mean forgoing a decent night\'s sleep.\r\nWomen in the United States are less likely to get a good night\'s sleep and more likely to report daytime sleepiness than men, a new survey shows.\r\nThe online poll of more than 2,000 U.S. adults found that women are 1.5 times more likely than men to rarely or never wake up feeling well-rested — 32% versus 21%. Also, sleepiness affects the daily activities of 81% of women, compared with 74% of men.', 'American Academy of Sleep Medicine', 'https://www.drugs.com/images/hdi/hd105513.jpg', '2022-05-20'),
(44, 'Could Eye Trouble Bring Lower Scores on Seniors\' Thinking Tests?', 'Poor eyesight makes it harder to read and easier to trip. But it can also lead to a misdiagnosis of mild mental decline in older people, according to a new, small study.\r\nThat can happen if someone\'s thinking abilities are assessed using vision-dependent tests, researchers explained.\r\nThey noted that as many as 1 in 4 people older than 50 have undiagnosed vision problems such as cataracts or age-related macular degeneration (AMD), which could skew visual assessments of their mental sharpness.', 'University of South Australia', 'https://www.drugs.com/images/hdi/hd105516.jpg', '2022-05-20'),
(45, 'Mystery of Hepatitis Cases in Kids Deepens as CDC Probe Continues', 'Evidence continues to mount that a specific strain of adenovirus could be implicated in a wave of American children who\'ve developed acute hepatitis of unknown origin, U.S. Centers for Disease Control and Prevention officials said Friday.\r\n\"The evidence is accumulating that there\'s a role for adenovirus, particularly adenovirus 41,\" Dr. Jay Butler, the CDC\'s deputy director for infectious diseases, said in a Friday media briefing. \"The exact role that it plays, I think, is where we\'re really wanting to focus the investigation.\" Adenoviruses are a common form of virus that can cause everything from colds to bronchitis to pinkeye, according to the CDC.', 'Dennis Thompson HealthDay Reporter', 'https://www.drugs.com/images/hdi/hd105532.jpg', '2022-05-20'),
(46, 'Global Warming Could Mean Less Sleep for Billions', 'Anyone who\'s tried to sleep on a hot summer night knows how hard it is to nod off when the mercury is rising.\r\nSo it\'s no surprise that global warming is likely to cost people more and more shut-eye as temperatures around the world rise.\r\nBy the end of this century, individuals could be subjected to at least two weeks of short sleep each year due to high temperatures driven by global warming, a new study projects. The findings were published May 20 in the journal One Earth.', 'Dennis Thompson HealthDay Reporter', 'https://www.drugs.com/images/hdi/hd105519.jpg', '2022-05-20'),
(47, 'Massachusetts Man Has Monkeypox, Following Clusters in Europe', 'The first U.S. case this year of a rare and potentially fatal virus known as monkeypox has been diagnosed in a man in Massachusetts who recently traveled to Canada, the U.S. Centers for Disease Control and Prevention announced Wednesday.\r\nThe illness does occasionally arise in the United States, but the Massachusetts case comes on the heels of unusual outbreaks over the past few weeks of monkeypox in Britain, Canada, Portugal and Spain — countries that typically don\'t see such cases because monkeypox is largely endemic to Africa.', 'Ernie Mundell HealthDay Reporter', 'https://www.drugs.com/images/hdi/hd105489.jpg', '2022-05-19'),
(48, 'Two-Drug Inhaler Could Reduce Asthma Attacks', 'Two drugs are better than one when it comes to stopping asthma attacks in progress, a new clinical trial has found.\r\nThe study, of more than 3,100 asthma patients, found that a two-drug \"rescue\" inhaler worked better than a standard inhaler in thwarting severe asthma exacerbations -- helping some patients avoid trips to the hospital.\r\nThe inhaler, which is not yet approved, contains two long-used asthma medications: albuterol and budesonide.', 'Amy Norton HealthDay Reporter', 'https://www.drugs.com/images/hdi/hd105505.jpg', '2022-05-19'),
(49, 'Study in Rats Offers Hope for New Parkinson\'s Therapy', 'Experimental stem cell replacement therapy for Parkinson\'s disease shows promise in rats and will soon be tested in a human clinical trial, researchers say.\r\n\"We cannot be more excited by the opportunity to help individuals who suffer from [a] genetic form of Parkinson\'s disease, but the lessons learned from this trial will also directly impact patients who suffer from sporadic, or non-genetic forms of this disease,\" said study co-author Jeffrey Kordower. He is director of the ASU-Banner Neurodegenerative Disease Research Center at Arizona State University, in Tempe.', 'Arizona State University', 'https://www.drugs.com/images/hdi/hd105484.jpg', '2022-05-19'),
(50, 'U.S. Pedestrians Dying at Highest Rate in 40 Years', 'U.S. pedestrian deaths in 2021 were the highest in four decades, with an average of 20 deaths every day, according to the Governors Highway Safety Association.\r\nAn estimated 7,485 pedestrians were killed in 2021, which was 12% more than in 2020, preliminary data show.\r\nThe findings are \"heartbreaking and unacceptable,\" said Jonathan Adkins, executive director of the highway safety association.', 'Governors Highway Safety Association', 'https://www.drugs.com/images/hdi/hd105482.jpg', '2022-05-19'),
(51, 'Getting Vaccine After Infection Might Curb Long COVID', 'Getting a COVID-19 shot after you\'ve been infected could reduce your risk of developing prolonged COVID symptoms, or so-called long COVID, according to a new study.\r\n\"Our results suggest that vaccination of people previously infected may be associated with a reduction in the burden of long COVID on population health, at least in the first few months after vaccination,\" co-author Daniel Ayoubkhani, of the U.K. Office for National Statistics, and colleagues wrote.', 'BMJ', 'https://www.drugs.com/images/hdi/hd105481.jpg', '2022-05-19'),
(52, '1 in 3 Americans Now Live in Areas Where Indoor Masks Advised, CDC Says', 'Masks may not be required, but Americans should consider wearing one anyway if they live in an area where COVID-19 case numbers are high, federal health officials said Wednesday.\r\nThat advice currently applies to about one-third of Americans, all of whom now live in areas with high levels of community transmission, according to the U.S. Centers for Disease Control and Prevention. Most of those areas are in the Northeast.', 'The New York Times', 'https://www.drugs.com/images/hdi/hd105490.jpg', '2022-05-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
