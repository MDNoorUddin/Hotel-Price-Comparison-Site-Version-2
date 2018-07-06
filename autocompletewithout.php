<?php
  include "var.php";
?>
<!DOCTYPE html>
<html  lang="en-US">
<head>
  <title>multiple ajax</title>

  <style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

 <style>

.kuakata{
   background-image: url("30425794_2069894203038849_2839343219517612945_o.jpg");
    width: 600px;height: 300px;
    background-size: 100% 100%;

}

.sylhet{

   background-image: url("32266798_2334071053480034_4129829256622505984_n.jpg");
    width: 600px;height: 300px;
    background-size: 100% 100%;

}

.bandarban{

   background-image: url("33896757_599920027034776_5643149936712220672_n.jpg");
    width: 380px;height: 300px;
    background-size: 100% 100%;

}

.dhaka{
   background-image: url("19702363_1974142382867445_3987967682401343751_n.jpg");
    width: 380px;height: 300px;
    background-size: 100% 100%;
}

.rangamati{
   background-image: url("30441829_610575185970010_6674871918107033600_n.jpg");
    width: 380px;height: 300px;
    background-size: 100% 100%;
}

.coxsbazar{
   background-image: url("20374767_10155583661055409_4676125490751623109_n.jpg");
    width: 450px;height: 300px;
    background-size: 100% 100%;
}

.saint{
   background-image: url("Saint_Martin's_Island.JPG");
    width: 750px;height: 300px;
    background-size: 100% 100%;
}

.paris{
   background-image: url("20170805_EUP001_0.jpg");
   width: 300px;height: 250px;
   background-size: 100% 100%;
}

.vegas{
  background-image: url("3924.jpg");
  width: 300px;height: 250px;
   background-size: 100% 100%;
}

.goa{
  background-image: url("goa.jpg");
  width: 300px;height: 250px;
   background-size: 100% 100%;
}
.darjeeling{
  background-image: url("Darjeeling-Himalaya-railway_1508183760t.jpg");
  width: 300px;height: 250px;
   background-size: 100% 100%;
}

.venice{
  background-image: url("2231903771_5f260e460a_o-56b7d8425f9b5829f83c5ec0.jpg");
  width: 300px;height: 250px;
   background-size: 100% 100%;
}
.dubai{
  background-image: url("Dubai_800_560_90_s_c1_c_c.jpg");
  width: 300px;height: 250px;
   background-size: 100% 100%;
}

.cairo{
  background-image: url("cairo.jpg");
  width: 300px;height: 250px;
  background-size: 100% 100%;
}

.london{
  background-image: url("london.jpg");
  width: 300px;height: 250px;
  background-size: 100% 100%;
}

.contact{
  
}
input[type=text], select {
    width: 20%;
    padding: 20px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: MintCream  ;
}
input[type=select], select {
    width: 20%;
    padding: 20px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: MintCream  ;
}

input[type=submit] {

    width: 10%;
    background-color: Turquoise;
    padding: 20px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


input[type=date], select {
    width: 20%;
    padding: 20px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;background-color: MintCream  ;
}
        .sidenav {
    width: 300px;
    height: 400px;
    position: fixed;
    z-index: 1;
    top: 100px;
    left: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;

}
media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.name
{
    background-color: #4CAF50;
}
h1{
    font-style: italic;
    font-size: 40px;
}
h1{
    font-style: italic;
    font-size: 40px;
}
body{

    background-size: 100%;
  }
  div.t
  {
    top: 580px;
    background: #eee;
    border: 3px black;
    position: absolute;
    left: 450px ;
    width: 500px;
    height: 200px;
  }
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}
img:hover {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}
</style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4iMDm18mP_Z_OTBulWRea1cowAN1-u2U&callback=myMap"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<script type="text/javascript">


  /*****************************************************************************************/

                                  //checking if session exist or not


           var priceLimit = 30000;

           var about = {"Sylhet":"Sylhet (Bengali: সিলেট, Sylheti: ꠍꠤꠟꠐ), also known as Jalalabad, the spiritual capital; is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal. It has a subtropical climate and lush highland terrain. The city has a population of more than half a million.[1] Sylhet is one of Bangladesh's most important spiritual and cultural centres. It is one of the most important cities of Bangladesh, after Dhaka and Chittagong due to its importance to the country's economy. The city's dargahs, or burial sites of Muslim saints, attract several thousand devotees each year.The name of Sylhet is the anglicized form of the ancient Indo-Aryan term Srihatta.[4] In 1303, the Sufi Muslim leader Shah Jalal conquered Sylhet by defeating the local Hindu Raja.[5] Ibn Battuta visited Sylhet in the 14th century and saw Bengali Muslims transforming the region into an agricultural basket.[6] Sylhet was a mint town of the Bengal Sultanate. In the 16th-century, Sylhet was controlled by the Baro-Bhuyan zamindars and became a district of the Mughal Empire.[7] British rule began in the 18th century under the administration of the East India Company.","Bandarban":"Bandarban (Bengali: বান্দরবান) is a district in South-Eastern Bangladesh, and a part of the Chittagong Division.[1] It is one of the three hill districts of Bangladesh and a part of the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District. Bandarban (4,479 km²) is not only the most remote district of the country, but also is the least populated (population 292,900) one.[2] Bandarban (meaning the dam of monkeys), or in Marma or Arakanese language as 'Rwa-daw Mro' is also known as Arvumi or the Bohmong Circle. Bandarban town is the home town of the Bohmong Chief (currently King, or Raja, U Cho Prue Marma) who is the head of the Marma population. Of the other hill districts, Rangamati is the Chakma Circle, headed by Raja Devasish Roy and Khagrachari is the Mong Circle, headed by Raja Sachingprue Marma. Bandarban is regarded as one of the most attractive travel destinations in Bangladesh. It also is the administrative headquarters of Bandarban district, which has turned into one of the most exotic tourist attractions in Bangladesh.","Cox's Bazar":"Cox's Bazar (Bengali: কক্সবাজার, pronounced [kɔksbadʒaɾ]) is a city, fishing port, tourism centre and district headquarters in Bangladesh. The beach in Cox's Bazar is sandy and has a gentle slope; with an unbroken length of 120 km (75 mi), it is the longest natural sea beach in the world.[2][3][4] It is located 150 km (93 mi) south of the industrial port of Chittagong. Cox's Bazar is also known by the name Panowa, which translates literally as 'yellow flower'. Another old name was 'Palongkee'.The modern Cox's Bazar derives its name from Captain Hiram Cox, an officer of the British East India Company. Cox was appointed Superintendent of Palongkee outpost after Warren Hastings became Governor of Bengal. He embarked upon the task of rehabilitation and settlement of the Arakanese refugees in the area.[5] Captain Cox died in 1799 before he could finish his work. To commemorate his role in rehabilitation work, a market was established and named Cox's Bazar after him. Unlike many locations in the Indian Subcontinent where place names dating from the colonial period have been changed, Cox's name is still retained in the city he founded.Today, Cox's Bazar is one of the most visited tourist destinations in Bangladesh, although not a major international tourist destination. In 2013, the Bangladesh Government formed the Tourist Police unit to protect local and foreign tourists better, as well as to look after the nature and wildlife in the tourist spots of Cox's Bazar.[6]","Rangamati":"Rangamati was a contesting ground for the kings of Tripura and Arakan. This region came under the Mughal Empire after the Muslim invasion in 1566.[3] In 1737 Sher Mosta Khan, a tribal leader, took refuge with the Mughals. After this the Chakma settlement began along with various other settlements of varying ethnicity.[3] From 1760 to 1761, this land was leased to the East India Company.[3].Rangamati is located in the Chittagong Division. It is bordered by the Tripura state of India to the north, Bandarban District to the south, Mizoram State of India and Chin State of Myanmar to the east, and Khagrachari and Chittagong Districts to the west. Rangamati is the only district in Bangladesh with international borders with two countries: India and Myanmar.The area of the district is 6116 km2 of which 1292 km2 is riverine and 4825 km2 is under forest vegetation.There are 291 government primary schools, 120 non-government primary schools, 22 junior schools, 6 government high schools, 45 non-government high schools, 2 government colleges, 13 non-government colleges, 61 madrasa, 7 technical schools, Rangamati Medical College and Rangamati Science and Technology University located throughout the district.","Kuakata":"Kuakata (Bengali: কুয়াকাটা) is a town known for its panoramic sea beach.[1][2] It is in southeastern Bangladesh and is the number two tourist destination in the country. Kuakata beach is a sandy expanse 18 kilometres (11 mi) long and 3 kilometres (1.9 mi) wide.[3] From the beach one can have an unobstructed view of both sunrise and sunset over the Bay of Bengal.[1]The name Kuakata originated from the word 'kua' — the Bengali word for 'well' which was dug on the seashore by the early Rakhine settlers in quest of collecting drinking water.[4] They landed on the Kuakata coast in the 18th century after being expelled from Arakan (Myanmar) by the Mughals.[5] Afterwards, it has become a tradition of digging wells in the neighbourhoods of Rakhaine tribes for water.Kuakata offers a full view of the sunrise and sunset from the same white sandy beach in the water of the Bay of Bengal. Locally known as Shagor Kannya (Daughter of Ocean), the long strip of dark, marbled sand stretches for about 18 kilometres (11 mi). The long, wide beach at Kuakata has a typical natural setting. This sandy beach has gentle slopes into the Bay of Bengal. Kuakata is also a sanctuary for migratory winter birds.","Dhaka":"Dhaka (/ˈdɑːkə/ DAH-kə or /ˈdækə/ DAK-ə; Bengali: ঢাকা, pronounced [ɖʱaka]); formerly known as Dacca[12] is the capital and largest city of Bangladesh. It is one of the world's largest cities, with a population of 18.89 million people in the Greater Dhaka Area.[13][6][14] It is also the 4th most densely populated city in the world. Dhaka is the chief economic, political and cultural center of Bangladesh. It is one of the major cities of South Asia, the largest city in Eastern South Asia and among the Bay of Bengal countries; and one of the largest cities among OIC countries. As part of the Bengal plain, the city is bounded by the Buriganga River, Turag River, Dhaleshwari River and Shitalakshya River. The city is located in an eponymous district and division.The area of Dhaka has been inhabited since the first millennium. The city rose to prominence in the 17th century as a provincial capital and commercial center of the Mughal Empire in South Asia. Dhaka was the capital of Mughal Bengal for 75 years. As the center of the muslin trade in Bengal, it was one of the most prosperous cities in the Indian subcontinent. The medieval city was named in honor of the Mughal emperor Jahangir and hosted the seat of the Mughal Subahdar (governor), Naib Nazims and Dewans (prime ministers).","Paris":"Paris (French pronunciation: ​[paʁi] (About this sound listen)) is the capital and most populous city of France, with an area of 105 square kilometres (41 square miles) and a population of 2,206,488.[5][6] Since the 17th century, Paris has been one of Europe's major centres of finance, commerce, fashion, science, music and painting. The Paris Region had a GDP of €681 billion (US$850 billion) in 2016, accounting for 31 per cent of the GDP of France.[7] In 2013–2014, the Paris Region had the third-highest GDP in the world and the largest regional GDP in the EU.The City of Paris's administrative limits form an East-West oval centred on the island at its historical heart, the Île de la Cité; this island is near the top of an arc of the river Seine that divides the city into southern Rive Gauche (Left Bank) and northern Rive Droite regions. Paris is the core of a built-up area that extends well beyond its limits: commonly referred to as the agglomération Parisienne, and statistically as a unité urbaine (a measure of urban area), the Paris agglomeration's 2013 population of 10,601,122 made it the largest urban area in the European Union.[3][not in citation given] City-influenced commuter activity reaches well beyond even this in a statistical aire urbaine de Paris (a measure of metropolitan area), that had a 2013 population of 12,405,426,[8] a number one-fifth the population of France,[9] the largest metropolitan area in the Eurozone","Vegas":"Las Vegas (/lɑːs ˈveɪɡəs/,[6] Spanish for The Meadows Spanish: [laz ˈβeɣas]), officially the City of Las Vegas and often known simply as Vegas, is the 28th-most populated city in the United States, the most populated city in the state of Nevada, and the county seat of Clark County. The city anchors the Las Vegas Valley metropolitan area and is the largest city within the greater Mojave Desert.[7] Las Vegas is an internationally renowned major resort city, known primarily for its gambling, shopping, fine dining, entertainment, and nightlife. The Las Vegas Valley as a whole serves as the leading financial, commercial, and cultural center for Nevada.The city bills itself as The Entertainment Capital of the World, and is famous for its mega casino–hotels and associated activities. It is a top three destination in the United States for business conventions and a global leader in the hospitality industry, claiming more AAA Five Diamond hotels than any other city in the world.[8][9][10] Today, Las Vegas annually ranks as one of the world's most visited tourist destinations.[11][12] The city's tolerance for numerous forms of adult entertainment earned it the title of Sin City, and has made Las Vegas a popular setting for literature, films, television programs, and music videos.","London":"London (/ˈlʌndən/ (About this sound listen) LUN-dən) is the capital and most populous city of England and the United Kingdom.[8][9] Standing on the River Thames in the south east of the island of Great Britain, London has been a major settlement for two millennia. It was founded by the Romans, who named it Londinium.[10] London's ancient core, the City of London, largely retains its 1.12-square-mile (2.9 km2) medieval boundaries. Since at least the 19th century,London has also referred to the metropolis around this core, historically split between Middlesex, Essex, Surrey, Kent and Hertfordshire,[11][12][13] which today largely makes up Greater London,[14][15][note 1] a region governed by the Mayor of London and the London Assembly.[16][note 2][17]London is a leading global city[18][19] in the arts, commerce, education, entertainment, fashion, finance, healthcare, media, professional services, research and development, tourism and transportation.[20][21][22] It is the world's largest financial centre[23][24][25][26] and has the fifth or sixth largest metropolitan area GDP in the world.[note 3][27][28] London is often regarded as a world cultural capital.","Goa":"Goa /ˈɡoʊ.ə/ (About this sound listen) is a state in India within the coastal region known as the Konkan, in Western India. It is bounded by Maharashtra to the north and Karnataka to the east and south, with the Arabian Sea forming its Western coast. It is India's smallest state by area and the fourth smallest by population. Goa has the highest GDP per capita among all Indian states,[3] that is two and a half times that of the country.[4] It was ranked the 'best placed State' by theEleventh Finance Commission for its infrastructure and ranked on top for the 'best quality of life' in India by the National Commission on Population based on the 12 Indicators.[4]Panaji is the state's capital, while Vasco da Gama is its largest city. The historic city of Margao still exhibits the cultural influence of the Portuguese, who first landed in the early 16th century as merchants and conquered it soon thereafter. Goa is a former Portuguese province; the Portuguese overseas territory of Portuguese India existed for about 450 years until it was annexed by India in 1961.[5][6]","Dubai":"Dubai (/duːˈbaɪ/ doo-BY; Arabic: دبي‎ Dubay, Gulf Arabic: [dʊˈbɑj]) is the largest and most populous city in the United Arab Emirates (UAE).[5] On the southeast coast of the Persian Gulf, it is the capital of the Emirate of Dubai, one of the seven emirates that make up the country.[6][7][8]Dubai is a global city and business hub of the Middle East.[9] It is also a major transport hub for passengers and cargo.[10] Oil revenue helped accelerate the early development of the city, but its reserves are limited and production levels are low: today, less than 5% of the emirate's revenue comes from oil.[11] Dubai's economy now relies on revenues from tourism, aviation, real estate, and financial services.[12][13][14][15]Dubai has attracted world attention through large construction projects and sports events, in particular the world's tallest building, the Burj Khalifa. Dubai has been criticised for human rights violations against the city's largely South Asian and Filipino workforce.[16][17][18]As of 2012, Dubai was the most expensive city in the Middle East.[19][20] In 2014, Dubai's hotel rooms were rated as the second most expensive in the world.[21][22]","Cairo":"Cairo (/ˈkaɪroʊ/ KY-roh; Arabic: القاهرة‎ Al-Qāhirah, About this sound pronunciation (help·info)) is the capital of Egypt. The city's metropolitan area is one of the largest in Africa, the largest in the Middle East and the Arab world, and the 15th-largest in the world, and is associated with ancient Egypt, as the famous Giza pyramid complex and the ancient city of Memphis are located in its geographical area. Located near the Nile Delta,[3][4] modern Cairo was founded in 969 CE by the Fatimid dynasty, but the land composing the present-day city was the site of ancient national capitals whose remnants remain visible in parts of Old Cairo. Cairo has long been a center of the region's political and cultural life, and is titled the city of a thousand minarets for its preponderance of Islamic architecture. Cairo is considered a World City with a Beta  classification according to GaWC.[5]Cairo has the oldest and largest film and music industries in the Arab world, as well as the world's second-oldest institution of higher learning, Al-Azhar University. Many international media, businesses, and organizations have regional headquarters in the city; the Arab League has had its headquarters in Cairo for most of its existence.","Darjeeling":"Darjeeling is a town and a municipality in the Indian state of West Bengal. It is located in the Lesser Himalayas at an elevation of 6,700 ft (2,042.2 m). It is noted for its tea industry, its views of the Kangchenjunga, the world's third-highest mountain, and the Darjeeling Himalayan Railway, a UNESCO World Heritage Site. Darjeeling is the headquarters of the Darjeeling District which has a partially autonomous status within the state of West Bengal. It is also a popular tourist destination in India.","Venice":"The romantic city of Venice is located in the Veneto region of Italy — one of the northernmost states. This ancient and historically important city was originally built on 100 small islands in the Adriatic Sea. Instead or roads, Venice relies on a series of waterways and canals.","Chittagong":"Chittagong officially known as Chattogram,[4] is a major coastal city and financial centre in southeastern Bangladesh. The city has a population of more than 2.5 million[1] while the metropolitan area has a population of 4,009,423 at the 2011 Census,[1] making it the second largest city in the country. It is the capital of an eponymous district and division. The city is located on the banks of the Karnaphuli River between the Chittagong Hill Tracts and the Bay of Bengal. Much of Chittagong Division is located within the ecological Indo-Burma zone on the boundary of the India Plate and Burma Plate. This makes Chittagong the crossroads of the Indian subcontinent and Southeast Asia. The port city has been known by various names in history, including Chatigaon, Chatigam, Chattagrama, Islamabad, Chattala, Chaityabhumi and Porto Grande De Bengala.The natural harbour of Chittagong is an ancient gateway to the region of Bengal. It was noted as one of the largest Eastern ports by the Roman geographer Ptolemy in the 1st century. As part of the rich seafaring tradition of the Bengali people, coastal Chittagong was settled and ruled by different regional kingdoms. Arab traders saw well-developed currency, banking and shipping in Chittagong during the 9th century.","Saint Martin's":"St. Martin's Island (Bengali: সেন্ট মার্টিন্স দ্বীপ) is a small island (area only 8 km2) in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox's Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called Chera Dwip. It is about 8 kilometres (5 miles) west of the northwest coast of Myanmar, at the mouth of the Naf River.The first settlement started 250 years ago by Arabian sailors who named the island Jazeera. During British occupation the island was named St. Martin Island. During the First Anglo-Burmese War between the British and Burmese empires in 1824–1826, rival claims to the island were a major factor. The local names of the island are Narikel jinjir which means Coconut Island in Bengali, and Daruchini Dwip which means Cinnamon island in Bengali. It is the only coral island in Bangladesh.It is also the southernmost part among Extreme Points of Bangladesh","sylhet":"Sylhet (Bengali: সিলেট, Sylheti: ꠍꠤꠟꠐ), also known as Jalalabad, the spiritual capital; is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal. It has a subtropical climate and lush highland terrain. The city has a population of more than half a million.[1] Sylhet is one of Bangladesh's most important spiritual and cultural centres. It is one of the most important cities of Bangladesh, after Dhaka and Chittagong due to its importance to the country's economy. The city's dargahs, or burial sites of Muslim saints, attract several thousand devotees each year.The name of Sylhet is the anglicized form of the ancient Indo-Aryan term Srihatta.[4] In 1303, the Sufi Muslim leader Shah Jalal conquered Sylhet by defeating the local Hindu Raja.[5] Ibn Battuta visited Sylhet in the 14th century and saw Bengali Muslims transforming the region into an agricultural basket.[6] Sylhet was a mint town of the Bengal Sultanate. In the 16th-century, Sylhet was controlled by the Baro-Bhuyan zamindars and became a district of the Mughal Empire.[7] British rule began in the 18th century under the administration of the East India Company.","bandarban":"Bandarban (Bengali: বান্দরবান) is a district in South-Eastern Bangladesh, and a part of the Chittagong Division.[1] It is one of the three hill districts of Bangladesh and a part of the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District. Bandarban (4,479 km²) is not only the most remote district of the country, but also is the least populated (population 292,900) one.[2] Bandarban (meaning the dam of monkeys), or in Marma or Arakanese language as 'Rwa-daw Mro' is also known as Arvumi or the Bohmong Circle. Bandarban town is the home town of the Bohmong Chief (currently King, or Raja, U Cho Prue Marma) who is the head of the Marma population. Of the other hill districts, Rangamati is the Chakma Circle, headed by Raja Devasish Roy and Khagrachari is the Mong Circle, headed by Raja Sachingprue Marma. Bandarban is regarded as one of the most attractive travel destinations in Bangladesh. It also is the administrative headquarters of Bandarban district, which has turned into one of the most exotic tourist attractions in Bangladesh.","Cox's Bazar":"Cox's Bazar (Bengali: কক্সবাজার, pronounced [kɔksbadʒaɾ]) is a city, fishing port, tourism centre and district headquarters in Bangladesh. The beach in Cox's Bazar is sandy and has a gentle slope; with an unbroken length of 120 km (75 mi), it is the longest natural sea beach in the world.[2][3][4] It is located 150 km (93 mi) south of the industrial port of Chittagong. Cox's Bazar is also known by the name Panowa, which translates literally as 'yellow flower'. Another old name was 'Palongkee'.The modern Cox's Bazar derives its name from Captain Hiram Cox, an officer of the British East India Company. Cox was appointed Superintendent of Palongkee outpost after Warren Hastings became Governor of Bengal. He embarked upon the task of rehabilitation and settlement of the Arakanese refugees in the area.[5] Captain Cox died in 1799 before he could finish his work. To commemorate his role in rehabilitation work, a market was established and named Cox's Bazar after him. Unlike many locations in the Indian Subcontinent where place names dating from the colonial period have been changed, Cox's name is still retained in the city he founded.Today, Cox's Bazar is one of the most visited tourist destinations in Bangladesh, although not a major international tourist destination. In 2013, the Bangladesh Government formed the Tourist Police unit to protect local and foreign tourists better, as well as to look after the nature and wildlife in the tourist spots of Cox's Bazar.[6]","rangamati":"Rangamati was a contesting ground for the kings of Tripura and Arakan. This region came under the Mughal Empire after the Muslim invasion in 1566.[3] In 1737 Sher Mosta Khan, a tribal leader, took refuge with the Mughals. After this the Chakma settlement began along with various other settlements of varying ethnicity.[3] From 1760 to 1761, this land was leased to the East India Company.[3].Rangamati is located in the Chittagong Division. It is bordered by the Tripura state of India to the north, Bandarban District to the south, Mizoram State of India and Chin State of Myanmar to the east, and Khagrachari and Chittagong Districts to the west. Rangamati is the only district in Bangladesh with international borders with two countries: India and Myanmar.The area of the district is 6116 km2 of which 1292 km2 is riverine and 4825 km2 is under forest vegetation.There are 291 government primary schools, 120 non-government primary schools, 22 junior schools, 6 government high schools, 45 non-government high schools, 2 government colleges, 13 non-government colleges, 61 madrasa, 7 technical schools, Rangamati Medical College and Rangamati Science and Technology University located throughout the district.","Kuakata":"Kuakata (Bengali: কুয়াকাটা) is a town known for its panoramic sea beach.[1][2] It is in southeastern Bangladesh and is the number two tourist destination in the country. Kuakata beach is a sandy expanse 18 kilometres (11 mi) long and 3 kilometres (1.9 mi) wide.[3] From the beach one can have an unobstructed view of both sunrise and sunset over the Bay of Bengal.[1]The name Kuakata originated from the word 'kua' — the Bengali word for 'well' which was dug on the seashore by the early Rakhine settlers in quest of collecting drinking water.[4] They landed on the Kuakata coast in the 18th century after being expelled from Arakan (Myanmar) by the Mughals.[5] Afterwards, it has become a tradition of digging wells in the neighbourhoods of Rakhaine tribes for water.Kuakata offers a full view of the sunrise and sunset from the same white sandy beach in the water of the Bay of Bengal. Locally known as Shagor Kannya (Daughter of Ocean), the long strip of dark, marbled sand stretches for about 18 kilometres (11 mi). The long, wide beach at Kuakata has a typical natural setting. This sandy beach has gentle slopes into the Bay of Bengal. Kuakata is also a sanctuary for migratory winter birds.","dhaka":"Dhaka (/ˈdɑːkə/ DAH-kə or /ˈdækə/ DAK-ə; Bengali: ঢাকা, pronounced [ɖʱaka]); formerly known as Dacca[12] is the capital and largest city of Bangladesh. It is one of the world's largest cities, with a population of 18.89 million people in the Greater Dhaka Area.[13][6][14] It is also the 4th most densely populated city in the world. Dhaka is the chief economic, political and cultural center of Bangladesh. It is one of the major cities of South Asia, the largest city in Eastern South Asia and among the Bay of Bengal countries; and one of the largest cities among OIC countries. As part of the Bengal plain, the city is bounded by the Buriganga River, Turag River, Dhaleshwari River and Shitalakshya River. The city is located in an eponymous district and division.The area of Dhaka has been inhabited since the first millennium. The city rose to prominence in the 17th century as a provincial capital and commercial center of the Mughal Empire in South Asia. Dhaka was the capital of Mughal Bengal for 75 years. As the center of the muslin trade in Bengal, it was one of the most prosperous cities in the Indian subcontinent. The medieval city was named in honor of the Mughal emperor Jahangir and hosted the seat of the Mughal Subahdar (governor), Naib Nazims and Dewans (prime ministers).","paris":"Paris (French pronunciation: ​[paʁi] (About this sound listen)) is the capital and most populous city of France, with an area of 105 square kilometres (41 square miles) and a population of 2,206,488.[5][6] Since the 17th century, Paris has been one of Europe's major centres of finance, commerce, fashion, science, music and painting. The Paris Region had a GDP of €681 billion (US$850 billion) in 2016, accounting for 31 per cent of the GDP of France.[7] In 2013–2014, the Paris Region had the third-highest GDP in the world and the largest regional GDP in the EU.The City of Paris's administrative limits form an East-West oval centred on the island at its historical heart, the Île de la Cité; this island is near the top of an arc of the river Seine that divides the city into southern Rive Gauche (Left Bank) and northern Rive Droite regions. Paris is the core of a built-up area that extends well beyond its limits: commonly referred to as the agglomération Parisienne, and statistically as a unité urbaine (a measure of urban area), the Paris agglomeration's 2013 population of 10,601,122 made it the largest urban area in the European Union.[3][not in citation given] City-influenced commuter activity reaches well beyond even this in a statistical aire urbaine de Paris (a measure of metropolitan area), that had a 2013 population of 12,405,426,[8] a number one-fifth the population of France,[9] the largest metropolitan area in the Eurozone","vegas":"Las Vegas (/lɑːs ˈveɪɡəs/,[6] Spanish for The Meadows Spanish: [laz ˈβeɣas]), officially the City of Las Vegas and often known simply as Vegas, is the 28th-most populated city in the United States, the most populated city in the state of Nevada, and the county seat of Clark County. The city anchors the Las Vegas Valley metropolitan area and is the largest city within the greater Mojave Desert.[7] Las Vegas is an internationally renowned major resort city, known primarily for its gambling, shopping, fine dining, entertainment, and nightlife. The Las Vegas Valley as a whole serves as the leading financial, commercial, and cultural center for Nevada.The city bills itself as The Entertainment Capital of the World, and is famous for its mega casino–hotels and associated activities. It is a top three destination in the United States for business conventions and a global leader in the hospitality industry, claiming more AAA Five Diamond hotels than any other city in the world.[8][9][10] Today, Las Vegas annually ranks as one of the world's most visited tourist destinations.[11][12] The city's tolerance for numerous forms of adult entertainment earned it the title of Sin City, and has made Las Vegas a popular setting for literature, films, television programs, and music videos.","london":"London (/ˈlʌndən/ (About this sound listen) LUN-dən) is the capital and most populous city of England and the United Kingdom.[8][9] Standing on the River Thames in the south east of the island of Great Britain, London has been a major settlement for two millennia. It was founded by the Romans, who named it Londinium.[10] London's ancient core, the City of London, largely retains its 1.12-square-mile (2.9 km2) medieval boundaries. Since at least the 19th century,London has also referred to the metropolis around this core, historically split between Middlesex, Essex, Surrey, Kent and Hertfordshire,[11][12][13] which today largely makes up Greater London,[14][15][note 1] a region governed by the Mayor of London and the London Assembly.[16][note 2][17]London is a leading global city[18][19] in the arts, commerce, education, entertainment, fashion, finance, healthcare, media, professional services, research and development, tourism and transportation.[20][21][22] It is the world's largest financial centre[23][24][25][26] and has the fifth or sixth largest metropolitan area GDP in the world.[note 3][27][28] London is often regarded as a world cultural capital.","Goa":"Goa /ˈɡoʊ.ə/ (About this sound listen) is a state in India within the coastal region known as the Konkan, in Western India. It is bounded by Maharashtra to the north and Karnataka to the east and south, with the Arabian Sea forming its Western coast. It is India's smallest state by area and the fourth smallest by population. Goa has the highest GDP per capita among all Indian states,[3] that is two and a half times that of the country.[4] It was ranked the 'best placed State' by theEleventh Finance Commission for its infrastructure and ranked on top for the 'best quality of life' in India by the National Commission on Population based on the 12 Indicators.[4]Panaji is the state's capital, while Vasco da Gama is its largest city. The historic city of Margao still exhibits the cultural influence of the Portuguese, who first landed in the early 16th century as merchants and conquered it soon thereafter. Goa is a former Portuguese province; the Portuguese overseas territory of Portuguese India existed for about 450 years until it was annexed by India in 1961.[5][6]","dubai":"Dubai (/duːˈbaɪ/ doo-BY; Arabic: دبي‎ Dubay, Gulf Arabic: [dʊˈbɑj]) is the largest and most populous city in the United Arab Emirates (UAE).[5] On the southeast coast of the Persian Gulf, it is the capital of the Emirate of Dubai, one of the seven emirates that make up the country.[6][7][8]Dubai is a global city and business hub of the Middle East.[9] It is also a major transport hub for passengers and cargo.[10] Oil revenue helped accelerate the early development of the city, but its reserves are limited and production levels are low: today, less than 5% of the emirate's revenue comes from oil.[11] Dubai's economy now relies on revenues from tourism, aviation, real estate, and financial services.[12][13][14][15]Dubai has attracted world attention through large construction projects and sports events, in particular the world's tallest building, the Burj Khalifa. Dubai has been criticised for human rights violations against the city's largely South Asian and Filipino workforce.[16][17][18]As of 2012, Dubai was the most expensive city in the Middle East.[19][20] In 2014, Dubai's hotel rooms were rated as the second most expensive in the world.[21][22]","cairo":"Cairo (/ˈkaɪroʊ/ KY-roh; Arabic: القاهرة‎ Al-Qāhirah, About this sound pronunciation (help·info)) is the capital of Egypt. The city's metropolitan area is one of the largest in Africa, the largest in the Middle East and the Arab world, and the 15th-largest in the world, and is associated with ancient Egypt, as the famous Giza pyramid complex and the ancient city of Memphis are located in its geographical area. Located near the Nile Delta,[3][4] modern Cairo was founded in 969 CE by the Fatimid dynasty, but the land composing the present-day city was the site of ancient national capitals whose remnants remain visible in parts of Old Cairo. Cairo has long been a center of the region's political and cultural life, and is titled the city of a thousand minarets for its preponderance of Islamic architecture. Cairo is considered a World City with a Beta  classification according to GaWC.[5]Cairo has the oldest and largest film and music industries in the Arab world, as well as the world's second-oldest institution of higher learning, Al-Azhar University. Many international media, businesses, and organizations have regional headquarters in the city; the Arab League has had its headquarters in Cairo for most of its existence.","darjeeling":"Darjeeling is a town and a municipality in the Indian state of West Bengal. It is located in the Lesser Himalayas at an elevation of 6,700 ft (2,042.2 m). It is noted for its tea industry, its views of the Kangchenjunga, the world's third-highest mountain, and the Darjeeling Himalayan Railway, a UNESCO World Heritage Site. Darjeeling is the headquarters of the Darjeeling District which has a partially autonomous status within the state of West Bengal. It is also a popular tourist destination in India.","Venice":"The romantic city of Venice is located in the Veneto region of Italy — one of the northernmost states. This ancient and historically important city was originally built on 100 small islands in the Adriatic Sea. Instead or roads, Venice relies on a series of waterways and canals.","chittagong":"Chittagong officially known as Chattogram,[4] is a major coastal city and financial centre in southeastern Bangladesh. The city has a population of more than 2.5 million[1] while the metropolitan area has a population of 4,009,423 at the 2011 Census,[1] making it the second largest city in the country. It is the capital of an eponymous district and division. The city is located on the banks of the Karnaphuli River between the Chittagong Hill Tracts and the Bay of Bengal. Much of Chittagong Division is located within the ecological Indo-Burma zone on the boundary of the India Plate and Burma Plate. This makes Chittagong the crossroads of the Indian subcontinent and Southeast Asia. The port city has been known by various names in history, including Chatigaon, Chatigam, Chattagrama, Islamabad, Chattala, Chaityabhumi and Porto Grande De Bengala.The natural harbour of Chittagong is an ancient gateway to the region of Bengal. It was noted as one of the largest Eastern ports by the Roman geographer Ptolemy in the 1st century. As part of the rich seafaring tradition of the Bengali people, coastal Chittagong was settled and ruled by different regional kingdoms. Arab traders saw well-developed currency, banking and shipping in Chittagong during the 9th century.","saint martin's":"St. Martin's Island (Bengali: সেন্ট মার্টিন্স দ্বীপ) is a small island (area only 8 km2) in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox's Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called Chera Dwip. It is about 8 kilometres (5 miles) west of the northwest coast of Myanmar, at the mouth of the Naf River.The first settlement started 250 years ago by Arabian sailors who named the island Jazeera. During British occupation the island was named St. Martin Island. During the First Anglo-Burmese War between the British and Burmese empires in 1824–1826, rival claims to the island were a major factor. The local names of the island are Narikel jinjir which means Coconut Island in Bengali, and Daruchini Dwip which means Cinnamon island in Bengali. It is the only coral island in Bangladesh.It is also the southernmost part among Extreme Points of Bangladesh","saint martin":"St. Martin's Island (Bengali: সেন্ট মার্টিন্স দ্বীপ) is a small island (area only 8 km2) in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox's Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called Chera Dwip. It is about 8 kilometres (5 miles) west of the northwest coast of Myanmar, at the mouth of the Naf River.The first settlement started 250 years ago by Arabian sailors who named the island Jazeera. During British occupation the island was named St. Martin Island. During the First Anglo-Burmese War between the British and Burmese empires in 1824–1826, rival claims to the island were a major factor. The local names of the island are Narikel jinjir which means Coconut Island in Bengali, and Daruchini Dwip which means Cinnamon island in Bengali. It is the only coral island in Bangladesh.It is also the southernmost part among Extreme Points of Bangladesh"};



            var city="",check_in_date="",check_out_date="";

            var hotelNames = new Set();

            var hotel_dot_com_bd_URL="";var tour_com_bd_URL="";var touriffy_com_URL="";

            var amarroom_dot_com_URL="";var booking_dot_com_URL="";var hotels_com_URL="";

            var tripadvisor_com_URL="";




            var hotelDotComBdPrice = new Map();var hotelDotComBdLink = new Map();var TourDotComBdPrice = new Map();

            var TourDotComBdLink = new Map();var touriffyDotComPrice = new Map();var touriffyDotComLink = new Map();

            var amarroomDotComPrice = new Map();var amarroomDotComLink = new Map();var hotelsDotComPrice = new Map();

            var hotelsDotComLink = new Map();var tripadvisorDotComPrice = new Map();var tripadvisorDotComLink = new Map();

            var bookingDotComPrice = new Map();var bookingDotComLink = new Map();




            var AllHotelNameSet = new Set();




            var imageMap = new Map();




            function pickCityAndDate()
            {
                city = document.getElementById("myInput").value;
                check_in_date = document.getElementById("check-in").value;
                check_out_date = document.getElementById("check-out").value;
                console.log(city);
                console.log(check_in_date);
                console.log(check_out_date);
            }

            function removingSession()
            {
                sessionStorage.clear();
                window.location.href="http://localhost/webScrapping/Search.php";
            }

            function sessionCheck(){
                if(sessionStorage.length==0)
                {
                  document.getElementById("home").style.display="block";
                  return;
                }
                else
                {
                 document.getElementById("home").style.display="none";
                 city = sessionStorage.getItem("city");
                 check_in_date = sessionStorage.getItem('in-date');
                 check_out_date = sessionStorage.getItem('out-date');
                 console.log(sessionStorage);
                 console.log(city);
                 console.log(check_in_date);
                 console.log(check_out_date);
                 search();
               }
      }



  /*****************************************************************************************/
 
 /**********************************************************************************************/                           //Setting Static destination names for validatig form
          var validation = new Set();
          validation.add("Paris");
          validation.add("paris");
          validation.add("Dhaka");
          validation.add("dhaka");
          validation.add("Sylhet");
          validation.add("sylhet");
          validation.add("kuakata");
          validation.add("Kuakata");
          validation.add("Chittagong");
          validation.add("chittagong");
          validation.add("bandarban");
          validation.add("Bandarban");
          validation.add("Rangamati");
          validation.add("rangamati");
          validation.add("Cox's Bazar");
          validation.add("cox's bazar");
          validation.add("Goa");
          validation.add("goa");
          validation.add("Saint Martin's");
          validation.add("Saint Martin");
          validation.add("saint martin");
          validation.add("London");
          validation.add("london");
          validation.add("Cairo");
          validation.add("cairo");
          validation.add("Vegas");
          validation.add("vegas");
          validation.add("Darjeeling");
          validation.add("darjeeling");

          function destinationValidation()
          {
              pickCityAndDate();
              city = city.toLowerCase();
              if(validation.has(city))
              {
                search();

              }
              else
              {
                alert("Please chose correct destination");
                return;
              }
          }

/**********************************************************************************************/


/***********************************************************************************************/
                //making links from the popular destinations

    function kuakata()
    {
        city = "Kuakata";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function sylhet()
    {
        city = "Sylhet";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function dhaka()
    {
        city = "Dhaka";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function bandarban()
    {
        city = "Bandarban";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function saint()
    {
        city = "Saint Matrin's";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function rangamati()
    {
        city = "Rangamati";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function cox()
    {
        city = "Cox's Bazar";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function saint()
    {
        city = "Saint Martin's";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function london()
    {
        city = "London";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function cairo()
    {
        city = "Cairo";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function goa()
    {
        city = "Goa";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function darjeeling()
    {
        city = "Darjeeling";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function paris()
    {
        city = "Paris";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function venice()
    {
        city = "Venice";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function dubai()
    {
        city = "Dubai";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }

    function vegas()
    {
        city = "Vegas";
        
        check_in_date = "<?php echo date('Y-m-d'); ?>";
        
        check_out_date = "<?php echo date('Y-m-d', strtotime(' +1 day')); ?>";
        search();
    }





/***********************************************************************************************/

            function box1()
            {
               priceLimit = 1000;search()

            }

            function box2()
            {
               priceLimit = 2500;search()
            }

            function box3()
            {
               priceLimit = 5000;search()
            }

            function box4()
            {
               priceLimit = 30000;search()
            }

/******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************* This is the main searching function**********************************************************************/            

            function search(){
              // setting session storge//


               
               sessionStorage.clear();
               sessionStorage.setItem('city',city);
               sessionStorage.setItem('in_date','2018-06-23');
               sessionStorage.setItem('out_date','2018-06-25');

              //////////////////////////
              document.body.innerHTML = '';

              document.write('searching........');
              var X = new XMLHttpRequest;
              X.open("GET","Javascript/loaderTest.html",true);
              X.send();
              X.onload = function()
              {
                 document.write(X.responseText);
               }
              

              AllHotelNameSet.clear();

              hotelDotComBdPrice.clear();hotelDotComBdLink.clear();TourDotComBdPrice.clear();

              TourDotComBdLink.clear();touriffyDotComPrice.clear();touriffyDotComLink.clear();

              amarroomDotComPrice.clear();amarroomDotComLink.clear();hotelsDotComPrice.clear();

              hotelsDotComLink.clear();tripadvisorDotComPrice.clear();tripadvisorDotComLink.clear();

              bookingDotComPrice.clear();bookingDotComLink.clear();

             try{
                  check_in_date=sessionStorage.getItem('in_date');
                  check_out_date = sessionStorage.getItem('out_date');
              var y1="",m1="",d1="",y2="",m2="",d2="";

              y1 = check_in_date[0]+check_in_date[1]+check_in_date[2]+check_in_date[3];

              m1 = check_in_date[5]+check_in_date[6];

              m2 = check_out_date[5]+check_out_date[6];

              d1 = check_in_date[8]+check_in_date[9];

              d2 = check_out_date[8]+check_out_date[9];
            }
            catch(e)
            {
              console.log(e);
            }


              if(city=="Dhaka"||city=="dhaka")
              {

                  hotels_com_URL  = "https://www.hotels.com/search.do?resolved-location=CITY%3A84064%3AUNKNOWN%3AUNKNOWN&destination-id=84064&q-destination=Dhaka,%20Bangladesh&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m1+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";
                  hotel_dot_com_bd_URL  ="http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=6077&location_name=Dhaka";

                  amarroom_dot_com_URL = "https://amarroom.com/hotels-in-dhaka-bangladesh-1/?&checkin="+ d1 +  "-" + m1 + "-" + y1 + "&checkout=" + d2 + "-" + m1 +"-" + 2018;

                  tour_com_bd_URL = "https://tour.com.bd/hotels/search/bangladesh/dhaka/67?txtSearch=Dhaka&checkin=" + d1 +"%2F" +m1+"%2F"+ y1 +"&checkout=" + d2 +"%2F"+m1+"%2F"+y1+"&adults=2&child=0&searching=67&modType=location";

                  touriffy_com_URL = "http://touriffy.com/index.php/hotel/hotelsearch/Dhaka/all/"+y1+"-"+m1+"-" +d1+"/"+y1+"-"+m1+"-"+d2+"/score_desc/USD/pricepernight-/stars-/facility-/10";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g293936-Dhaka_City_Dhaka_Division-Hotels.html";

                  booking_dot_com_URL = "https://www.booking.com/searchresults.html?label=gen173nr-1FCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AEB6AEB-AECkgIBeagCAw;sid=54f466bc4e866eb205c3de3a544a8018;checkin_month="+ m1 + "&checkin_monthday=" + d1 + "&checkin_year=" + y1 +"&checkout_month=" + m1 + "&checkout_monthday=" + d2 + "&checkout_year=" + y1 + "&class_interval=1&dest_id=-2737683&dest_type=city&dtdisc=0&from_sf=1&group_adults=2&group_children=0&inac=0&index_postcard=0&label_click=undef&no_rooms=1&offset=0&postcard=0&room1=A%2CA&sb_price_type=total&search_pageview_id=3a963f57a0f4059c&src=index&src_elem=sb&ss=Dhaka&ss_all=0&ssb=empty&sshis=0&";
              }

              else if(city=="Sylhet"||city=="sylhet")
              {

                  hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A94607%3AUNKNOWN%3AUNKNOWN&destination-id=94607&q-destination=Sylhet,%20Bangladesh&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m1+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";


                  hotel_dot_com_bd_URL = "http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=6438&location_name=Sylhet";


                  amarroom_dot_com_URL = "https://amarroom.com//hotels-in-sylhet-bangladesh-3/?&checkin="+ d1 +  "-" + m1 + "-" + y1 + "&checkout=" + d2 + "-" + m1 +"-" + 2018;

                  tour_com_bd_URL = "https://tour.com.bd/hotels/search/bangladesh/sylhet/80?txtSearch=Sylhet&checkin=" + d1 +"%2F" +m1+"%2F"+ y1 +"&checkout=" + d2 +"%2F"+m1+"%2F"+y1+"&adults=2&child=0&searching=67&modType=location";

                  touriffy_com_URL = "http://touriffy.com/index.php/hotel/hotelsearch/Sylhet/all/"+y1+"-"+m1+"-" +d1+"/"+y1+"-"+m1+"-"+d2+"/score_desc/USD/pricepernight-/stars-/facility-/10"

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g667997-Sylhet_City_Sylhet_Division-Hotels.html";

                  booking_dot_com_URL = "https://www.booking.com/searchresults.html?label=gen173nr-1FCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AEB6AEB-AECkgIBeagCAw;sid=54f466bc4e866eb205c3de3a544a8018;checkin_month=" + m1+ "&checkin_monthday="+d1+"&checkin_year="+y1+"&checkout_month="+m1+"&checkout_monthday="+d2+"&checkout_year="+y1+"&class_interval=1&dest_id=900052126&dest_type=city&dtdisc=0&from_sf=1&group_adults=2&group_children=0&inac=0&index_postcard=0&label_click=undef&no_rooms=1&offset=0&postcard=0&room1=A%2CA&sb_price_type=total&src=index&src_elem=sb&ss=Sylhet&ss_all=0&ssb=empty&sshis=0&";

              }

              else if(city=="Chittagong"||city=="chittagong")
              {

                  hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A83382%3AUNKNOWN%3AUNKNOWN&destination-id=83382&q-destination=Chittagong,%20Bangladesh&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m1+"-"+d2+"+&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";

                  hotel_dot_com_bd_URL = "http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=6020&location_name=Chittagong";


                  amarroom_dot_com_URL = "https://amarroom.com/hotels-in-chittagong-12/?&checkin="+ d1 +  "-" + m1 + "-" + y1 + "&checkout=" + d2 + "-" + m1 +"-" + 2018;

                  tour_com_bd_URL = "https://tour.com.bd/hotels/search/bangladesh/chittagong/106?txtSearch=Chittagong&checkin=" + d1 +"%2F" +m1+"%2F"+ y1 +"&checkout=" + d2 +"%2F"+m1+"%2F"+y1+"&adults=2&child=0&searching=67&modType=location";

                  touriffy_com_URL = "http://touriffy.com/index.php/hotel/hotelsearch/Chittagong/all/"+y1+"-"+m1+"-" +d1+"/"+y1+"-"+m1+"-"+d2+"/score_desc/USD/pricepernight-/stars-/facility-/10";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g319837-Chittagong_City_Chittagong_Division-Hotels.html";

                  booking_dot_com_URL = "https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AED6AEB-AECkgIBeagCAw;sid=54f466bc4e866eb205c3de3a544a8018;checkin_month="+m1+"&checkin_monthday="+d1+"&checkin_year="+y1+"&checkout_month="+m1+"&checkout_monthday="+d2+"&checkout_year="+y1+"&class_interval=1&dtdisc=0&from_sf=1&group_adults=2&group_children=0&inac=0&index_postcard=0&label_click=undef&no_rooms=1&offset=0&place_id=ChIJ09-VQKbYrDAR2QVpy1vMFVA&place_id_lat=22.356851&place_id_lon=91.78318190000005&postcard=0&raw_dest_type=city&room1=A%2CA&sb_price_type=total&search_selected=1&src=index&src_elem=sb&ss=Chittagong%2C%20Bangladesh&ss_all=0&ss_raw=Chittagong&ssb=empty&sshis=0&ssne=Cox%27s%20Bazar&ssne_untouched=Cox%27s%20Bazar&";
              }

              else if(city=="Kuakata"||city=="kuakata")
              {

                 hotels_com_URL = "x.com";

                  hotel_dot_com_bd_URL = "http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=6468&location_name=Kuakata";


                  amarroom_dot_com_URL = "https://amarroom.com/hotels-in-kuakata-30/?&checkin="+ d1 +  "-" + m1 + "-" + y1 + "&checkout=" + d2 + "-" + m1 +"-" + 2018;

                  tour_com_bd_URL = "https://tour.com.bd/hotels/search/bangladesh/kuakata/92?txtSearch=Kuakata&checkin=" + d1 +"%2F" +m1+"%2F"+ y1 +"&checkout=" + d2 +"%2F"+m1+"%2F"+y1+"&adults=2&child=0&searching=67&modType=location";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g11801518-Kuakata_Barisal_Division-Hotels.html";

                  booking_dot_com_URL = "https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AED6AEB-AECkgIBeagCAw;sid=54f466bc4e866eb205c3de3a544a8018;checkin_month="+m1+"&checkin_monthday="+d1+"&checkin_year="+y1+"&checkout_month="+m1+"&checkout_monthday="+d2+"&checkout_year="+y1+"&class_interval=1&dtdisc=0&from_sf=1&group_adults=2&group_children=0&inac=0&index_postcard=0&label_click=undef&no_rooms=1&offset=0&place_id=ChIJvYKgOBt9qjARFvgWJJsgM84&place_id_lat=21.8210422&place_id_lon=90.12142349999999&postcard=0&raw_dest_type=city&room1=A%2CA&sb_price_type=total&search_selected=1&src=index&src_elem=sb&ss=Kuakata%2C%20Bangladesh&ss_all=0&ss_raw=Kuakata&ssb=empty&sshis=0&ssne=Cox%27s%20Bazar&ssne_untouched=Cox%27s%20Bazar&";


              }

              else if(city=="Rangamati"||city=="rangamati")
              {

                 hotels_com_URL = "x.com";

                  hotel_dot_com_bd_URL = "http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=6465&location_name=Rangamati";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "http://touriffy.com/index.php/hotel/hotelsearch/Rangamati/all/"+y1+"-"+m1+"-" +d1+"/"+y1+"-"+m1+"-"+d2+"/score_desc/USD/pricepernight-/stars-/facility-/10";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g2398418-Rangamati_Chittagong_Division-Hotels.html";

                  booking_dot_com_URL = "https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AED6AEB-AECkgIBeagCAw;sid=54f466bc4e866eb205c3de3a544a8018;checkin_month="+m1+"&checkin_monthday="+d1+"&checkin_year="+y1+"&checkout_month="+m1+"&checkout_monthday="+d2+"&checkout_year="+y1+"&class_interval=1&dtdisc=0&from_sf=1&group_adults=2&group_children=0&inac=0&index_postcard=0&label_click=undef&map=1&no_rooms=1&offset=0&place_id=ChIJNfkiW4K6UjcR1VlYJUBEaRY&place_id_lat=22.7324173&place_id_lon=92.29851340000005&postcard=0&raw_dest_type=region&room1=A%2CA&sb_price_type=total&search_selected=1&src=index&src_elem=sb&ss=Rangamati%2C%20Bangladesh&ss_all=0&ss_raw=ranga&ssb=empty&sshis=0&ssne=Cox%27s%20Bazar&ssne_untouched=Cox%27s%20Bazar&#map_closed";
              }

              else if(city=="Bandarban"||city=="bandarban")
              {


                  hotels_com_URL ="https://www.hotels.com/search.do?resolved-location=CITY%3A10409250%3AUNKNOWN%3AUNKNOWN&destination-id=10409250&q-destination=Bandarban,%20Bangladesh&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m1+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";

                  hotel_dot_com_bd_URL = "http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=6447&location_name=Bandarban";


                  amarroom_dot_com_URL = "https://amarroom.com/hotels-in-bandarban-bangladesh-15/?&checkin="+ d1 +  "-" + m1 + "-" + y1 + "&checkout=" + d2 + "-" + m1 +"-" + 2018;

                  tour_com_bd_URL = "https://tour.com.bd/hotels/search/bangladesh/bandarbanr/88?txtSearch=Bandarban&checkin=" + d1 +"%2F" +m1+"%2F"+ y1 +"&checkout=" + d2 +"%2F"+m1+"%2F"+y1+"&adults=2&child=0&searching=67&modType=location";

                  touriffy_com_URL = "http://touriffy.com/index.php/hotel/hotelsearch/Bandarban/all/"+y1+"-"+m1+"-" +d1+"/"+y1+"-"+m1+"-"+d2+"/score_desc/USD/pricepernight-/stars-/facility-/10";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g2368232-Bandarban_Chittagong_Division-Hotels.html";

                  booking_dot_com_URL = "https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AED6AEB-AECkgIBeagCAw;sid=54f466bc4e866eb205c3de3a544a8018;checkin_month="+m1+"&checkin_monthday="+d1+"&checkin_year="+y1+"&checkout_month="+m1+"&checkout_monthday="+d2+"&checkout_year="+y1+"&class_interval=1&dtdisc=0&from_sf=1&group_adults=2&group_children=0&inac=0&index_postcard=0&label_click=undef&no_rooms=1&offset=0&place_id=ChIJK-YUhBhqrTAR0JC6gY8Zw6Q&place_id_lat=22.1935628&place_id_lon=92.21874760000003&postcard=0&raw_dest_type=city&room1=A%2CA&sb_price_type=total&search_selected=1&src=index&src_elem=sb&ss=Bandarban%2C%20Bangladesh&ss_all=0&ss_raw=bandarbn&ssb=empty&sshis=0&ssne=Cox%27s%20Bazar&ssne_untouched=Cox%27s%20Bazar&";
              }



              else if(city=="Cox's Bazar"||city=="cox's bazar")
              {

                  hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A91932%3AUNKNOWN%3AUNKNOWN&destination-id=91932&q-destination=Cox%27s%20Bazar,%20Bangladesh&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m1+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";

                  hotel_dot_com_bd_URL = "http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=5999&location_name=Cox%E2%80%99s%20Bazar";


                  amarroom_dot_com_URL = "https://amarroom.com/hotels-in-coxs-bazar-bangladesh-2/?&checkin="+ d1 +  "-" + m1 + "-" + y1 + "&checkout=" + d2 + "-" + m1 +"-" + 2018;

                  tour_com_bd_URL = "https://tour.com.bd/hotels/search/bangladesh/coxs-bazar/83?txtSearch=Cox%27s+Bazar&checkin=" + d1 +"%2F" +m1+"%2F"+ y1 +"&checkout=" + d2 +"%2F"+m1+"%2F"+y1+"&adults=2&child=0&searching=67&modType=location";

                  touriffy_com_URL = "http://touriffy.com/index.php/hotel/hotelsearch/Coxs-Bazar/all/"+y1+"-"+m1+"-" +d1+"/"+y1+"-"+m1+"-"+d2+"/score_desc/USD/pricepernight-/stars-/facility-/10";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g667467-Cox_s_Bazar_Chittagong_Division-Hotels.html";

                  booking_dot_com_URL = "https://www.booking.com/searchresults.html?label=gen173nr-1FCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AEB6AEB-AECkgIBeagCAw;sid=54f466bc4e866eb205c3de3a544a8018;checkin_month="+m1+"&checkin_monthday="+d1+"&checkin_year="+y1+"&checkout_month="+m1+"&checkout_monthday="+d2+"&checkout_year="+y1+"&class_interval=1&dest_id=211349&dest_type=city&dtdisc=0&from_sf=1&group_adults=2&group_children=0&inac=0&index_postcard=0&label_click=undef&no_rooms=1&offset=0&postcard=0&room1=A%2CA&sb_price_type=total&src=index&src_elem=sb&ss=cox%27s%20bazar&ss_all=0&ssb=empty&sshis=0&";
              }


              else if(city=="Paris"||city=="paris")
              {

                  hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A504261%3AUNKNOWN%3AUNKNOWN&destination-id=504261&q-destination=Paris,%20France&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m1+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";
                  hotel_dot_com_bd_URL = "x.com";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g187147-Paris_Ile_de_France-Hotels.html";

                  booking_dot_com_URL = "https://www.booking.com/searchresults.html?label=gen173nr-1FCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AEB6AEB-AECkgIBeagCAw&sid=c1feec64859a43c0d02485a2cb11f4d1&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1FCAEoggJCAlhYSDNYBGgUiAEBmAExuAEGyAEM2AEB6AEB-AECkgIBeagCAw%3Bsid%3Dc1feec64859a43c0d02485a2cb11f4d1%3Bclass_interval%3D1%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bplace_id%3DChIJD7fiBh9u5kcRYJSMaMOCCwQ%3Bplace_id_lat%3D48.856614%3Bplace_id_lon%3D2.3522219000000177%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bsrc%3Dindex%3Bsrc_elem%3Dsb%3Bss%3DParis%252C%2520France%3Bss_raw%3Dparis%3Bssb%3Dempty%26%3B&ss=Paris%2C+France&ssne=Paris%2C+France&ssne_untouched=Paris%2C+France&place_id=ChIJD7fiBh9u5kcRYJSMaMOCCwQ&place_id_lat=48.856614&place_id_lon=2.3522219000000177&checkin_month="+m1+"&checkin_monthday="+d1+"&checkin_year="+y1+"&checkout_month="+m1+"&checkout_monthday="+d2+"&checkout_year="+y1+"&group_adults=2&group_children=0&no_rooms=1&from_sf=1";
              }
              else if(city=="Vegas"||city=="vegas")
              {

                 hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A1504033%3AUNKNOWN%3AUNKNOWN&destination-id=1504033&q-destination=Las%20Vegas,%20Nevada,%20United%20States%20of%20America&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m2+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";

                  hotel_dot_com_bd_URL = "x.com";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g45963-Las_Vegas_Nevada-Hotels.html";

                  booking_dot_com_URL = "x.com";
              }

              else if(city=="London"||city=="london")
              {

                  hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A549499%3AUNKNOWN%3AUNKNOWN&destination-id=549499&q-destination=London,%20England,%20United%20Kingdom&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m2+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";

                  hotel_dot_com_bd_URL = "x.com";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g186338-London_England-Hotels.html";

                  booking_dot_com_URL = "x.com";
              }

              else if(city=="Dubai"||city=="dubai")
              {

                 hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A11594%3AUNKNOWN%3AUNKNOWN&destination-id=11594&q-destination=Dubai,%20United%20Arab%20Emirates&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m2+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";

                  hotel_dot_com_bd_URL = "x.com";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g295424-Dubai_Emirate_of_Dubai-Hotels.html";

                  booking_dot_com_URL = "x.com";
              }

               else if(city=="Cairo"||city=="cairo")
              {

                  hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A1634358%3AUNKNOWN%3AUNKNOWN&destination-id=1634358&q-destination=Cairo,%20Egypt&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m2+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";
                  hotel_dot_com_bd_URL = "x.com";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g294201-Cairo_Cairo_Governorate-Hotels.html";

                  booking_dot_com_URL = "x.com";
              }

              else if(city=="Venice"||city=="venice")
              {
 
                 hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A710846%3AUNKNOWN%3AUNKNOWN&destination-id=710846&q-destination=Venice,%20Italy&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m2+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";
                  hotel_dot_com_bd_URL = "x.com";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g187870-Venice_Veneto-Hotels.html";

                  booking_dot_com_URL = "x.com";
              }

              else if(city=="Goa"||city=="goa")
              {
                  hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A679086%3AUNKNOWN%3AUNKNOWN&destination-id=679086&q-destination=Goa,%20India&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m2+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";

                  hotel_dot_com_bd_URL = "x.com";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g297604-Goa-Hotels.html";

                  booking_dot_com_URL = "x.com";
              }

              else if(city=="Darjeeling"||city=="darjeeling")
              {

                  hotels_com_URL = "https://www.hotels.com/search.do?resolved-location=CITY%3A1640682%3AUNKNOWN%3AUNKNOWN&destination-id=1640682&q-destination=Darjeeling,%20India&q-check-in="+y1+"-"+m1+"-"+d1+"&q-check-out="+y1+"-"+m2+"-"+d2+"&q-rooms=1&q-room-0-adults=2&q-room-0-children=0";

                  hotel_dot_com_bd_URL = "x.com";


                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "https://www.tripadvisor.com/Hotels-g304557-Darjeeling_Darjeeling_District_West_Bengal-Hotels.html";

                  booking_dot_com_URL = "x.com";
              }

              else if(city=="Saint Martin's"||city=="saint martin"||city=="Saint Martin")
              {

                 hotels_com_URL = "http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=6024&location_name=St.%20Martin%E2%80%99s%20Island";

                  hotel_dot_com_bd_URL = "http://hotel.com.bd/index.php/search-result-hotel-2/?location_id=6468&location_name=Kuakata";


                  amarroom_dot_com_URL = "https://amarroom.com/hotels-in-saint-martin-48/?&checkin="+ d1 +  "-" + m1 + "-" + y1 + "&checkout=" + d2 + "-" + m1 +"-" + 2018;

                  tour_com_bd_URL = "https://tour.com.bd/hotels/search/bangladesh/saint%20martin/94?txtSearch=saint%20martin&" + d1 +"%2F" +m1+"%2F"+ y1 +"&checkout=" + d2 +"%2F"+m1+"%2F"+y1+"&adults=2&child=0&searching=67&modType=location";

                  touriffy_com_URL = "http://touriffy.com/index.php/hotel/hotelsearch/Saint-Martin/all/"+y1+"-"+m1+"-"+d1+"/"+y1+"-"+m2+"-"+d2+"/score_desc/USD/pricepernight-/stars-/facility-/10";

                  tripadvisor_com_URL = "x.com";

                  booking_dot_com_URL = "x.com";


              }

              else
              {
                  hotel_dot_com_bd_URL = "x.com";

                  amarroom_dot_com_URL = "x.com";

                  tour_com_bd_URL = "x.com";

                  touriffy_com_URL = "x.com";

                  tripadvisor_com_URL = "x.com";
              }





            try{



             /**************************************************************
             /                                                              /
             /                       hotel.com.bd                           /
             /                                                              /
             /                        request                               /
             /**************************************************************/
             var hotel_com_bd = new XMLHttpRequest;   /*****************************
                                                              request 1
                                                      ******************************/

             hotel_com_bd.open("GET",hotel_dot_com_bd_URL,true);



             hotel_com_bd.onload = function()
             {

                var url = hotel_com_bd.responseText;

                 var item=url.split('<div class="thumb">',10);

                 for(var i=1;i<item.length;i++)
                 {

                  try{

                     var hotel2 = item[i].split('<h5 class="thumb-title"><a class="text-darken"', 10);

                   var link = hotel2[1].split('href="',10);

                   var Link =  link[1].split('</a></h5>',10);

                   var onlineLink = Link[0].split('">',3);

                   //console.log(onlineLink);

                  //// document.write(onlineLink[1]);  /****   name  **/

                   ////document.write(" "+onlineLink[0]); /****   link  **/

                   //console.log(onlineLink[1].length);

                    hotelNames.add(onlineLink[1]);

                     var price2 = item[i].split('<span class="text-lg lh1em">',20);

                    var  price = price2[1].split('</span>',20);

                     //document.writeln(price[0]);

                     var P="";

                     for(var j=0;j<price[0].length;j++)
                     {
                      if(price[0][j]!=',') {P = P+price[0][j];}
                     }

                     ////document.writeln(P+"<br>");

                     AllHotelNameSet.add(onlineLink[1]);

                     hotelDotComBdLink.set(onlineLink[1],onlineLink[0]);
                     hotelDotComBdPrice.set(onlineLink[1],parseInt(P));


                    /*************************************************************

                              picking image

                    **************************************************************/

                      var image = item[i].split('img width="360" height="270" src="',10);

                      var IMG = image[1].split('" class="',10);

                      console.log(IMG[0]);

                      if(imageMap.has(onlineLink[1]))
                      {

                      }
                      else
                      {
                          imageMap.set(onlineLink[1],IMG[0]);
                      }


                     }

                     catch(e)
                     {
                        document.write("server error hotel.com.bd");
                     }
                 }
                hotelDotComBdPrice = new Map([...hotelDotComBdPrice.entries()].sort((a, b) => a[1] - b[1]));
                 //console.log(mapSort2)

                 console.log(  hotelDotComBdPrice);
                //// console.log(hotelDotComBdLink);


              /**************************************************************
             /                                                              /
             /                       hotel.com.bd                           /
             /                          end                                 /
             /                                                              /
             /**************************************************************/




            /**************************************************************
             /                                                              /
             /                       tour.com.bd                            /
             /                                                              /
             /                       start                                  /
             /**************************************************************/

                var tour_com_bd = new XMLHttpRequest;
                                                    /*****************************
                                                              request 2
                                                      ******************************/


                tour_com_bd.open("GET",tour_com_bd_URL,true);



                tour_com_bd.onload = function()
                {

                     var  url = tour_com_bd.responseText;



                      var name = url.split('<h4 class="mtb0 RTL go-text-right">',10);

                      var localName = [59]; /*********** for storing hotel names using for inserting map ******/

                      var counter=0;

                      for( var i=1; i< name.length; i++ )

                      {


                          try{
                            var t = name[i].split('<a href="', 10);


                             var Text = t[1].split('"><b>',10);

                             // Text[0] is Link

                            //console.log(Text[0]);

                           ////document.write(Text[0]);

                             /** now picking name*/

                             var jS = name[i].split('<b>',10);

                             var jQ = jS[1].split('</b>',2);

                           ////  document.write("<br>"+jQ[0]+" <br>");

                             //echo $jQuery[0]."<br>";

                              AllHotelNameSet.add(jQ[0]);

                              TourDotComBdLink.set(jQ[0],Text[0]);

                              localName[counter++]=jQ[0];
                      }

                      catch(e){

                      }

                      }
                      var d = url.split('<div class="text-success fs18 text-center">',10);
                      var inner = 0;
                      for ( var ii=1; ii<d.length; ii++,inner++)
                      {



                            try{

                            var r = d[ii].split('<small>BDT</small> ৳',10);
                            //document.write(r[0]);

                            var taka = r[1].split('              </b>',10 );

                            //echo $taka[0]."<br>";

                            var money="";

                            for(var j=0;j<taka[0].length;j++)
                            {
                              if(taka[0][j]>='0' && taka[0][j]<='9')money = money + taka[0][j];
                            }

                           //document.write(money+"<br>");

                           console.log(money);

                            TourDotComBdPrice.set(localName[inner],parseInt(money));

                          }



                        catch(e)
                        {

                        }
                      }

                      /*************************************************************

                              picking image

                    **************************************************************/


                      var tourImg =url.split('<div class="img_list">',20);
                      counter=0;

                      for(var ii=1;ii<tourImg.length;ii++){

                              var tour_img = tourImg[ii].split('data-lazy="',20);

                              var tourRealimg = tour_img[1].split('"',20);

                              console.log(tourRealimg[0]);

                              if(imageMap.has(jQ[0])){

                              }
                              else{

                              imageMap.set(localName[counter],tourRealimg[0]);

                              }
                              counter++;
                    }

                      console.log(TourDotComBdPrice);
                   ////   console.log(TourDotComBdLink);


                            /**************************************************************
                            /                                                              /
                            /                       tour.com.bd                            /
                            /                                                              /
                            /                          end                                  /
                            /**************************************************************/




            /****************************************************************
             /                                                              /
             /                       touriffy.com                           /
             /                                                              /
             /                          Request                             /
             /**************************************************************/


/***************************************************************************************************
/                                                                                                   /
/                                              touriffy.com                                         /
/                                                                                                   /
/                                                 start                                             /
****************************************************************************************************/






/**********************************************************************************************
/                                                                                              /                                                                                                /
/                                                                                              /touriffy.com                                         /
/                                                                                                   /
/                                                 end                                               /
****************************************************************************************************/


                var amarroom = new XMLHttpRequest;/*****************************
                                                              request 4
                                                      ******************************/

                amarroom.open("GET",amarroom_dot_com_URL,true);



                amarroom.onload = function()
                {

                      var Url = amarroom.responseText;

                          var onlyHotel = Url.split( '<div class="column col-4 col-sm-12 col-md-6">', 10);

                          for( var i = 1; i < onlyHotel.length; i++)

                             {


                               try{

                                       // now picking the hotel name

                                 var div = onlyHotel[i].split('<span class="title">', 20);



                                 var name1 = div[1].split('</span>', 10);

                                //// document.write(name1[0]+"       ");



                                 //now picking price

                                var pDiv = onlyHotel[i].split( "<span>",10);

                                var price1 = pDiv[1].split("<", 10);

                               var without_BDT = price1[0].split("BDT", 10);

                               var money="";

                               for(var I=0;I<without_BDT[1].length;I++)
                               {
                                   if(without_BDT[1][I]>='0'&&without_BDT[1][I]<='9')money+=without_BDT[1][I];
                               }

                              //// document.write(without_BDT[1]+"<br>");

                               //now picking the link

                               var l = onlyHotel[i].split('<a class="dated-url" href="',10);

                               var Link = l[1].split('"></a>',10);

                               Link[0] = "https://amarroom.com/" + Link[0];

                              var year1="",month1="",date1="",year2="",month2="",date2="";

                              year1 = check_in_date[0]+check_in_date[1]+check_in_date[2]+check_in_date[3];

                              month1 = check_in_date[5]+check_in_date[6];

                              day1 = check_in_date[8]+check_in_date[9];

                              day2 = check_out_date[8]+check_out_date[9];


                               Link[0] = Link[0] + "/?&checkin=" + day1 + "-" + month1 + "-" + year1 + "&checkout=" + day2 + "-" + month1 + "-" + year1;
                               ////document.write(Link[0]+ "<br>");

                               AllHotelNameSet.add(name1[0]);

                               amarroomDotComPrice.set(name1[0],parseInt(money));

                               amarroomDotComLink.set(name1[0],Link[0]);


                               /********************************************
                                           picking image
                               *********************************************/

                               var amarImg = onlyHotel[i].split('<img src="',10);

                               var amarIMG = amarImg[1].split('"/>',20);

                               console.log(amarIMG[0]);

                               if(imageMap.has(name1[0]))
                               {

                               }
                               else{

                                imageMap.set(name1[0],amarIMG[0]);
                                }
                             }

                             catch(e)
                             {

                             }

                            }


                            ////console.log(amarroomDotComLink);
                            console.log(amarroomDotComPrice);



                            var booking = new XMLHttpRequest;/*****************************
                                                              request 5
                                                      ******************************/

           booking.open("GET",booking_dot_com_URL,true);



           booking.onload = function()
           {
               console.log("booking.com---------------");
                var Url = booking.responseText;

                var block = Url.split('<div class="sr_item_content sr_item_content_slider_wrapper "',20);

               // document.write(block.length);
               var count=1;

                for( var i=1; i < block.length; i++ )
                {

                    /********************************

                                name

                     *******************************/

                     try{

                    var nameAndLink = block[i].split('<h3 class="sr-hotel__title',32);

                    var nl = nameAndLink[1].split('<span class="sr-hotel__name',20);

                    var next = nl[1].split('</span>',30);

                    var  name = next[0].split('>',10);

                    ////document.write(count+" "+name[1]+"<br>");count++;;
                                                        /***********************
                                                        booking.com = name = name[1]
                                                      ***********************/

                   //var y = name[1].split("↵",10);
                   //name[1] = y[1];

                    /********************************

                                link

                   *******************************/

                   var ll = nameAndLink[1].split('href="',25);

                   var link = ll[2].split('"_blank"',25);

                   var onLink = link[0].split('"',25);

                   //console.log(ll);



                   onLink[0] = "http://www.booking.com" + onLink[0];

                   var y="";
                for(var j=1;j<name[1].length-1;j++)
                {
                  y = y + name[1][j];
                }
                var price = block[i].split('scarcity_color',20);


                  if(price.length==1)
                  {
                      price = block[i].split('availprice no_rack_rate',20);
                  }

                   var strong = price[1].split('<b class="',20);

                   ////console.log(price[1].length);

                   var money = strong[1].split('>',25);

                  //// document.write(money[1] +" <br>");


                   var MONEY="";

                   for(var I=0;I<money[1].length;I++)
                   {
                      if(money[1][I]>='0'&&money[1][I]<='9')MONEY+=money[1][I];

                   }

                   MONEY = parseInt(MONEY);

                   if(money[1][1]!='B')MONEY*=99;
                   bookingDotComLink.set(y,onLink[0]);
                   bookingDotComPrice.set(y,MONEY);

                   ////document.write(onLink[0]+"<br>");
                                                       /***********************
                                                        booking.com = link = onlink[0]
                                                      ***********************/


                    /********************************

                               price

                   *******************************/



                      /*****************************

                   console.log("helolo");                  booking.com = price
                                                        ******************************/



                AllHotelNameSet.add(y);



                }
                catch(e)
                {
                     console.log(e);
                }


              }

              console.log(bookingDotComPrice);
             //// console.log(bookingDotComLink);

             console.log(tripadvisor_com_URL);

                 var tripadvisor = new XMLHttpRequest;/*****************************
                                                              request 6
                                                      ******************************/

            tripadvisor.open("GET",tripadvisor_com_URL,true);






            tripadvisor.onload = function()
            {
                //document.write(tripadvisor.responseText);

                var mn = tripadvisor.responseText.split('<div class="ui_column is-8 main_col allowEllipsis">',50);

                //document.write(mn.length);

                var tripIMg =tripadvisor.responseText.split('<div class="photo-wrapper">',100);

                var names = [100];

                var counter = 0;

                for(var i=1;i<mn.length;i++){
                  console.log("h");


                    //document.write(main[i]);

                    /******************************
                           price
                    ******************************/

                   try{
                    var n = mn[i].split('<div class="listing_title"><a target="_blank" href="',20);
                     var Name="";
                     var Link="";
                    if(n.length==1)
                    {
                        Sponsored = true;

                        copy = mn[i].split('<div class="ui_column is-narrow',20); /*******************************

                        document.write("insie" + "<br>");                                sponsored error
                                                                                  ******************************/
                        //console.log(copy);
                    }

                    else
                    {
                         var N = n[1].split('class="property_title prominent" data-clicksource="HotelName" onclick="return false;" dir="ltr">',10);
                        if(N.length==1)
                        {
                            N = n[1].split('class="property_title prominent" data-clickSource="HotelName"onclick="return false;" dir=ltr>',10);

                            //document.write(N.length);
                        }
                        //else{
                         var NN = N[1].split('</a></div> ',20);

                         Name = NN[0];



                         var L = n[1].split('" id="',20);

                         Link = L[0];

                         Link = "https://www.tripadvisor.com" + Link;

                   //  }

                    }

                    var price = mn[i].split('<div class="price-wrap ">',40);
                    //problem aca///////////////////////////////////////

                    //console.log(price.length);

                    if(price.length==1)
                    {

                       //// document.write("not available" + "<br>")
                    }
                     else
                    {


                          var BDT = price[1].split('data-sizegroup="mini-meta-price"',5);
                           var taka = BDT[1].split('BDT',10);

                           var money = taka[1].split('</div></div>',5);
                           console.log("tripadvisor");
                           console.log(NN[0]+"<br>");

                           ////document.write(i +" " + Link+"<br>");

                           console.log(money[0] + "<br>");

                           var MONEY="";

                           for(var I=0;I<money[0].length;I++)
                           {
                              if(money[0][I]>='0'&&money[0][I]<='9')MONEY+=money[0][I];
                           }
                           MONEY = parseInt(MONEY);
                          tripadvisorDotComPrice.set(NN[0],MONEY);

                          tripadvisorDotComLink.set(NN[0],Link);


                           AllHotelNameSet.add(NN[0]);

                           names[counter] = NN[0];

                           counter++;

                   }



                 }

                      catch(e)
                      {
                          ////document.write("server error tripadvisor" + "<br>");
                          ////document.write(e);
                      }

                  }

                  ////////////////////////image

                  console.log(tripIMg.length);

                  counter = 0;

                  for(var iii =1;iii<tripIMg.length;iii++)
                  {
                      try{
                    var E = tripIMg[iii].split('<div class="inner"  style="background-image:url(',20);

                    if(E.length==1)
                    {
                        E = tripIMg[iii].split('<div class="inner" data-lazyurl="',20);

                        var tripimage  = E[1].split('" >',40);

                        if(imageMap.has(names[counter]))
                        {

                        }
                        else{

                        imageMap.set(names[counter],tripimage[0]);
                      }

                        console.log(tripimage[0]);
                    }
                    else
                    {

                        var tripimage = E[1].split(');"></div>',40);

                        if(imageMap.has(names[counter]))
                        {

                        }
                        else{

                        imageMap.set(names[counter],tripimage[0]);
                      }

                        console.log(tripimage[0]);
                    }
                     counter++;

                    }
                    catch(e)
                    {
                      console.log(e);
                    }
                  }

                  console.log(tripadvisorDotComPrice);
                  ////console.log(tripadvisorDotComLink);



                 var hotels_dot_com_Request = new XMLHttpRequest;

              hotels_dot_com_Request.open("GET",hotels_com_URL,true);/*****************************
                                                              request 7
                                        ******************************/



              hotels_dot_com_Request.onload = function()
              {
                ////console.log("asynchronise");
                   //document.write(hotels_dot_com_Request.responseText);



                  var allInformation = hotels_dot_com_Request.responseText.split('<h3 class="p-name"><a href="',20);

                  var allInFormation = hotels_dot_com_Request.responseText.split('<div class="price">',20);

               ////console.log(allInFormation.length);

              //// console.log(allInformation.length);
               for( var i = 1; i < allInformation.length-1; i++ )

               {
                var TEMP="",TEMP2="";

                       try{

                         var namePick = allInformation[i].split( '</h3><div class="contact">', 20);


                         if(namePick[0] == allInformation[i]){

                          var tr = allInformation[i].split('</a></h3><span class="hotel-badge"', 20);


                          var nm = tr[0].split('" target="_blank">',5);

                         //// document.write( nm[1]+'<br>');
                                                      /***********************
                                                        hotels.com = name = nm[1]
                                                      ***********************/

                          //echo $nm[0].'<br>';//link

                         //// document.write(nm[0]+'<br>');


                          TEMP2= nm[0];
                          ////TEMP=nm[1];
                          for(var j=0;j<nm[1].length;j++)
                         {
                             if(name[1][j]=='<')break;
                             TEMP = TEMP + nm[1][j];
                         }

                          TEMP2 = "https://sg.hotels.com/" + TEMP2;
                          AllHotelNameSet.add(TEMP);

                         }
                         else{
                         var name = namePick[0].split('" target="_blank">', 20);

                         ////document.write(name[1]+'<br/>'); // This is the name

                         //echo $name[0].'<br/>'; //This is the link

                        //// document.write(name[0]+'<br>');


                         ///TEMP = name[1];
                         TEMP2= name[0];

                         for(var j=0;j<name[1].length;j++)
                         {
                             if(name[1][j]=='<')break;
                             TEMP = TEMP + name[1][j];
                         }
                         AllHotelNameSet.add(TEMP);

                         TEMP2 = "https://sg.hotels.com/" + TEMP2;
                     }
                     if(i<allInFormation.length){
                     var money="";
                     var pricePick = allInFormation[i].split('<ins class="special-deal-animation">', 5 );

                     if(pricePick.length==1)
                     {
                         var pricePick2 = allInFormation[i].split('<ins >', 20);

                         if(pricePick2.length==1)
                         {

                              var pricePick3 = allInFormation[i].split('<b >', 20);
                              if(pricePick3.length==1)
                              {
                                ////document.write( "all room booked<br>");
                              }
                              else{
                              var price2 = pricePick3[1].split('</b>', 5);

                              ////document.write( price2[0]+"<br>");

                              hotelsDotComLink.set(TEMP,TEMP2);

                              var M="";
                              for(var I=0;I<price2[0].length;I++){

                                 if(price2[0][I]>='0'&&price2[0][I]<='9')M+=price2[0][I];
                              }

                              var m = parseInt(M)*97;

                              hotelsDotComPrice.set(TEMP,m);


                         }
                         }
                         else
                         {
                              var price1 = pricePick2[1].split('</ins>', 20);

                              ////document.write(price1[0]+"<br>");

                              hotelsDotComLink.set(TEMP,TEMP2);


                              var M="";
                              for(var I=0;I<price1[0].length;I++){

                                 if(price1[0][I]>='0'&&price1[0][I]<='9')M+=price1[0][I];
                              }

                              var m = parseInt(M)*97;

                              hotelsDotComPrice.set(TEMP,m);


                         }
                     }
                     else
                     {
                         var price =  pricePick[1].split('</ins>',20);
                         if(price[0]=="Special Deal")
                              {
                                 ////document.write("0000<br>");

                              }
                         ////document.write( price[0]+"<br>");

                         hotelsDotComLink.set(TEMP,TEMP2);
                         var M="";
                          for(var I=0;I<price[0].length;I++){

                                if(price[0][I]>='0'&&price[0][I]<='9')M+=price[0][I];
                          }

                              var m = parseInt(M)*97;

                        hotelsDotComPrice.set(TEMP,m);

                     }
                   }


                   }

                  catch(e)
                  {
                    ////console.log("server error hotels.com");

                    ////console.log(e);
                  }

                 }


                 console.log(hotelsDotComPrice);
                //// console.log(hotelsDotComLink);






                var tuoriffy_com = new XMLHttpRequest;/*****************************
                                                              request 3
                                                      ******************************/

                    try{

                     tuoriffy_com.open("GET",touriffy_com_URL,true);




                    tuoriffy_com.onload =function()
                    {
/***************************************************************************************************
/                                                                                                   /
/                                              touriffy.com                                         /
/                                                                                                   /
/                                                 start                                             /
****************************************************************************************************/

                   var URL = tuoriffy_com.responseText;

                   var first_partition = URL.split('<div class="wide_gray_box">', 20);


                    for( var i = 1;  i < first_partition.length ;i++)

                     {

                      try{

                    // at first pick hotel name and booking room

                   var  div = first_partition[i].split('<div class="wide_gray_box_mid_left">', 20);

                     // picking up link and name



                  var link1=div[1].split('<a href="', 10);

                  var link=link1[1].split('"', 10);

                  ////document.write(link[0]+"   ");

                 //echo $link[0]; // this is the booking link

                 //now the hotel name


                 var hotel_name1 = div[1].split('title="',10);


                 var hotel_name = hotel_name1[1].split('"', 10);

                 ////document.write(hotel_name[0]+"   ");

                 touriffyDotComLink.set(hotel_name[0],link[0]);

               //now the last work to picking up the price

               var price2=first_partition[i].split('<div class="wide_gray_box_mid_right_right">', 10);

               var price1=price2[1].split('<p class="pay_per_night">', 10);

               var price=price1[1].split('<', 10);

               var without_usd_price = price[0].split('USD ', 10);

               var without_usd_price1 = without_usd_price[1].split(' with', 10);

               without_usd_price1[0] = without_usd_price1[0]*84;

               ////document.write(without_usd_price1[0]+"<br>");

               touriffyDotComPrice.set(hotel_name[0],without_usd_price1[0]);

                AllHotelNameSet.add(hotel_name[0]);



                var touriffyImage = first_partition[i].split('<img width="128px" height="96px" src="',20);

                console.log(touriffyImage.length);

                if(touriffyImage.length==1)
                   {

                   }

                else
                   {

                         var TouriffyImage = touriffyImage[1].split('" alt="',20);

                         console.log(TouriffyImage[0]);

                         if(imageMap.has(hotel_name[0]))
                         {

                         }

                         else
                         {
                              imageMap.set(hotel_name[0],TouriffyImage[0]);
                         }

                   }

                } //try

                catch(e)
                {

                  console.log("errrrrrrrrrror");
                }




              }
            ////  console.log(touriffyDotComLink);
            console.log("done");
              console.log(touriffyDotComPrice);







                 console.log(AllHotelNameSet);

                 console.log(imageMap);

                 console.log("hello world");


                 /**************************************************************************




                                    data processing phase


                  ************************************************************************************/



                      document.body.innerHTML = '';



                      document.write('<div class="header" style="background-color: Navy ; width: 100%; height: 100px">');
                      document.write('<p onclick="removingSession()" style="color: white;font-size: 27px; position:absolute; left: 100px;top: 15px;cursor: pointer;">cheapestDeal.com</p>');

                      document.write('</div>');

                      document.write('<div  style="width: 300px; height: 500px; background-color: Gold ; position:absolute; top: 180px; left:20px; ">');
                      document.write('<h3>  Find best hotel deals in Bangladesh</h3>');
                       document.write('<form>');
                      document.write('<select id="myInput" name="city" style="position:absolute;left:10px;top:100px; width: 280px;padding: 20px 20px; margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;background-color: MintCream  ;">');
                        
                        document.write('<option value="none">Where are you going?</option><option value="sylhet">Sylhet</option><option value="dhaka">Dhaka</option><option value="bandarban">Bandarban</option><option value="kuakata">Kuakata</option><option value="Coxs Bazar">Coxs Bazar</option><option value="Chittagong">Chittagong</option><option value="Rangamati">Rangamati</option><option value="Saint Martin">Saint Martin</option><option value="Barishal">Barishal</option><option value="Pabna">Pabna</option><option value="Khulna">Khulna</option><option value="Rangpur">Rangpur</option><option value="Comilla">Comilla</option><option value="Paris">Paris</option><option value="Las Vegas">Las Vegas</option><option value="Dubai">Dubai</option><option value="Goa">Goa</option><option value="Darjeeling">Darjeeling</option><option value="Cairo">Cairo</option></option></select>');

                        document.write('<input type="date" style="position:absolute;left:10px;top:200px; width: 280;padding: 20px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;background-color: MintCream  ;" id="check-in" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"></input> <br> <input type="date" style="position:absolute;left:10px;top:300px; width: 280;padding: 20px 20px; margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;background-color: MintCream  ;" id="check-out" value="<?php echo date('Y-m-d', strtotime(' +1 day')); ?>" min="<?php echo date('Y-m-d'); ?>"></input> <br> <input type="submit" onclick="destinationValidation()" style="position:absolute;left:10px; top:400px;width: 280px;background-color: Turquoise;padding: 20px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;"></button></form></div>');
                        
                        document.writeln('<div style="position:absolute; width:300px; height: 600px;left:20px;top:800px;background-color:Gold;">');
                        document.write('<h1>About '+city+'<br></h1>');
                        var ct;
                        if(city=="dhaka")ct="Dhaka";if(city=="sylhet")ct="Sylhet";
                        if(city=="bandarban")ct="Bandarban";if(city=="rangamati")ct="Rangamati";
                        if(city=="cox's bazar")ct="Cox's Bazar";if(city=="kuakata")ct="Kuakata";
                        if(city=="paris")ct="Paris";if(city=="dhaka")ct="Dhaka";

                        if(city=="darjeeling")ct="Darjeeling";if(city=="cairo")ct="Cairo";
                        if(city=="london")ct="London";if(city=="goa")ct="Goa";
                        if(city=="dubai")ct="Dubai";if(city=="vegas")ct="Vegas";
                        if(city=="paris")ct="Paris";if(city=="venice")ct="Venice";
                        if (typeof about[ct] === "undefined")
                        {
                           document.write("<h1>not available</h1>");
                        } 
                        else
                        document.write(about[ct]);
                        document.write("</div>");
                        


                       /******************************************

                          map

                      ***********************************************/

                      document.writeln('<div style="position:absolute; width:300px; height: 500px;top:1500px;background-color:Gold;left:20px;">');
                      document.write('<h1 style="position:absolute;left:30px; ">view map</h1>');

                      document.write('<div id="map" align ="center" style="position:absolute;width:300px;height:400px;top:80px; "></div>');

                      function myMap() {
                        
                         var geocoder =  new google.maps.Geocoder();
                        
                         geocoder.geocode( { 'address': ''+city+', bangladesh'}, function(results, status) {
                        
                        if (status == google.maps.GeocoderStatus.OK) {
            //alert("location : " + results[0].geometry.location.lat() + " " +results[0].geometry.location.lng()); 

                        var mapOptions = {
               
                        center: new google.maps.LatLng(results[0].geometry.location.lat() , results[0].geometry.location.lng()),
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.HYBRID
                        }
                        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                        } else {
                        alert("Something got wrong " + status);
                   }
              });

         }

                      myMap();

                       document.writeln("</div>");

                       document.writeln('<div style="position:absolute; width:300px; height: 200px;top:2200px;background-color:Gold;left:20px;">');

                       document.write("<h2 align='center'> filter Based on Price</h2>")

                       document.write('<input type="checkbox" id="1" value="999" onclick="box1()">0 - 1000 BDT<br><input type="checkbox" id="2" value="2499"  onclick="box2()">0 - 2500 BDT <br><input type="checkbox" id="3" value="10000" onclick="box3()">0 - 10000 BDT<br><input type="checkbox" id="4" value="30000" onclick="box4()">0 - 30000 BDT <br><br>');
                       if(priceLimit>5000)
                       {
                          document.getElementById('4').checked = true;
                          document.getElementById('3').checked = false;
                          document.getElementById('2').checked = false;
                          document.getElementById('1').checked = false;
                       }

                      else if(priceLimit>2500)
                       {
                          document.getElementById('4').checked = false;
                          document.getElementById('3').checked = true;
                          document.getElementById('2').checked = false;
                          document.getElementById('1').checked = false;
                       }

                       else if(priceLimit>1000)
                       {
                          document.getElementById('4').checked = false;
                          document.getElementById('3').checked = false;
                          document.getElementById('2').checked = true;
                          document.getElementById('1').checked = false;
                       }

                       else
                       {
                          document.getElementById('4').checked = false;
                          document.getElementById('3').checked = false;
                          document.getElementById('2').checked = false;
                          document.getElementById('1').checked = true;
                       }

                       document.writeln("</div>");

        /****************************************************************
            map 

        *****************************************************************/

                      
///////***********************************************************************************//
              var priceWiseSorting = new Map();

                 for(let item of AllHotelNameSet)
                        {

                            var hotelSortPrice = new Map();

                            var hotelSortPriceWithLink = new Map();

                            if(hotelDotComBdPrice.has(item))
                            {
                              
                              if(hotelDotComBdPrice.get(item) <= priceLimit){

                              hotelSortPrice.set("hotel.com.bd",hotelDotComBdPrice.get(item));
                              hotelSortPriceWithLink.set("hotel.com.bd",hotelDotComBdLink.get(item));
                            }

                            }
                            if(TourDotComBdPrice.has(item))
                            {


                              if(TourDotComBdPrice.get(item) <= priceLimit){
                              hotelSortPrice.set("tour.com.bd",TourDotComBdPrice.get(item));
                              hotelSortPriceWithLink.set("tour.com.bd",TourDotComBdLink.get(item));
                            }

                            }

                             if(amarroomDotComPrice.has(item))
                            {


                              if(amarroomDotComPrice.get(item) <= priceLimit){
                              hotelSortPrice.set("amarroom.com",amarroomDotComPrice.get(item));
                              hotelSortPriceWithLink.set("amarroom.com",amarroomDotComLink.get(item));
                              }

                            }
                            if(hotelsDotComPrice.has(item))
                            {

                              if(hotelsDotComPrice.get(item)<=priceLimit){
                              hotelSortPrice.set("hotels.com",hotelsDotComPrice.get(item));
                              hotelSortPriceWithLink.set("hotels.com",hotelsDotComLink.get(item));
                            }

                            }
                            if(tripadvisorDotComPrice.has(item))
                            {
                              if(tripadvisorDotComPrice.get(item)<=priceLimit){

                              hotelSortPrice.set("tripadvisor.com ",tripadvisorDotComPrice.get(item));
                              hotelSortPriceWithLink.set("tripadvisor.com ",tripadvisorDotComLink.get(item));
                              }

                            }
                            if(bookingDotComPrice.has(item))
                            {

                              if(bookingDotComPrice.get(item)<=priceLimit){

                              hotelSortPrice.set("booking.com",bookingDotComPrice.get(item));
                              hotelSortPriceWithLink.set("booking.com",bookingDotComLink.get(item));
                            }

                            }

                            if(touriffyDotComPrice.has(item))
                            {
                              if(touriffyDotComPrice.get(item)<=priceLimit){

                              hotelSortPrice.set("touriffy.com",touriffyDotComPrice.get(item));
                              hotelSortPriceWithLink.set("touriffy.com",touriffyDotComLink.get(item));
                            }

                            }


                            hotelSortPrice = new Map([...hotelSortPrice.entries()].sort((a, b) => a[1] - b[1]));
                                  var best_deal_site;
                                  var best_deal_price;
                                  var best_deal_link;

                           var counter=0;
                           function logMapElements(value, key, map) {



                              if(counter==0)
                              {
                                  best_deal_site=key;
                                  best_deal_price=value;
                                  best_deal_link=hotelSortPriceWithLink.get(key);
                              }
                            
                              counter++;
                              }
                              hotelSortPrice.forEach(logMapElements);


                              priceWiseSorting.set(item,best_deal_price);

                        }


                         priceWiseSorting = new Map([...priceWiseSorting.entries()].sort((a, b) => a[1] - b[1]));




/////***********************  price wise sorting ***************************************////











                        document.write("<h1 align='center'>" + AllHotelNameSet.size +" properties for " + city + "</h1>");


                        var tp=250;
                        var left=400;

                        function logMaElements(value, key, map) {

                             var item = key;

                             var hotelSortPrice = new Map();

                            var hotelSortPriceWithLink = new Map();


                            document.write("<div style=' position : absolute; border-style: outset; border-color: SlateBlue; border-radius: 15px;width : 900px; height : 300px; top : " +tp + "px; left: " + left + "px;background-color:GhostWhite ;'>");

                            tp+=500;
                            document.writeln("<h1 style='position:absolute;left:420px;color:Teal;'>" + item + "</h1>");

                            if(imageMap.has(item))
                            {
                                document.write('<img src="' + imageMap.get(item) +'" alt="Image A" height="300" width="400" />');
                            }

                            else
                            {
                                document.write('<img src="https://static.tacdn.com/img2/icons/64/no_thumb_styleguide_icon.gif" alt="Image A" height="300" width="400" />');
                            }

                            document.write("<br>");
                            if(hotelDotComBdPrice.has(item))
                            {
                              
                              if(hotelDotComBdPrice.get(item) <= priceLimit){

                              hotelSortPrice.set("hotel.com.bd",hotelDotComBdPrice.get(item));
                              hotelSortPriceWithLink.set("hotel.com.bd",hotelDotComBdLink.get(item));
                            }

                            }
                            if(TourDotComBdPrice.has(item))
                            {


                              if(TourDotComBdPrice.get(item) <= priceLimit){
                              hotelSortPrice.set("tour.com.bd",TourDotComBdPrice.get(item));
                              hotelSortPriceWithLink.set("tour.com.bd",TourDotComBdLink.get(item));
                            }

                            }

                             if(amarroomDotComPrice.has(item))
                            {


                              if(amarroomDotComPrice.get(item) <= priceLimit){
                              hotelSortPrice.set("amarroom.com",amarroomDotComPrice.get(item));
                              hotelSortPriceWithLink.set("amarroom.com",amarroomDotComLink.get(item));
                              }

                            }
                            if(hotelsDotComPrice.has(item))
                            {

                              if(hotelsDotComPrice.get(item)<=priceLimit){
                              hotelSortPrice.set("hotels.com",hotelsDotComPrice.get(item));
                              hotelSortPriceWithLink.set("hotels.com",hotelsDotComLink.get(item));
                            }

                            }
                            if(tripadvisorDotComPrice.has(item))
                            {
                              if(tripadvisorDotComPrice.get(item)<=priceLimit){

                              hotelSortPrice.set("tripadvisor.com ",tripadvisorDotComPrice.get(item));
                              hotelSortPriceWithLink.set("tripadvisor.com ",tripadvisorDotComLink.get(item));
                              }

                            }
                            if(bookingDotComPrice.has(item))
                            {

                              if(bookingDotComPrice.get(item)<=priceLimit){

                              hotelSortPrice.set("booking.com",bookingDotComPrice.get(item));
                              hotelSortPriceWithLink.set("booking.com",bookingDotComLink.get(item));
                            }

                            }

                            if(touriffyDotComPrice.has(item))
                            {
                              if(touriffyDotComPrice.get(item)<=priceLimit){

                              hotelSortPrice.set("touriffy.com",touriffyDotComPrice.get(item));
                              hotelSortPriceWithLink.set("touriffy.com",touriffyDotComLink.get(item));
                            }

                            }

                           //////////////// console.log(hotelSortPrice);

                           if(hotelSortPrice.size==0)
                           {
                              document.write('<h2 style="font-size:25px;position:absolute;color:LightCoral  ; left:450px;top:80px;"> not available</h2></div>');
                           }

                           else{

                            hotelSortPrice = new Map([...hotelSortPrice.entries()].sort((a, b) => a[1] - b[1]));

                           //////////////// console.log(hotelSortPrice);

                           var TP = 150;
                           document.write('<p style="font-size:25px;position:absolute;color:LightCoral  ; left:450px;top:80px;">Deals</p>');

                           var counter=0;
                           function logMapElements(value, key, map) {

                              //console.log(x);
                              //document.write(key + "="  + value +  hotelSortPriceWithLink.get(key) +"<br>");


                              if(counter==0)
                              {
                                  best_deal_site=key;
                                  best_deal_price=value;
                                  best_deal_link=hotelSortPriceWithLink.get(key);
                              }
                              document.write("<p style='color:LightSlateGray ;font-size:20px;'><a href=' " + hotelSortPriceWithLink.get(key) + "' style='position:absolute;left:450px;top:"+TP+"px;'> "+key+ "-"+value+"/-</a></p>");
                              //document.write(value + "<br>");

                              TP+=30;
                              counter++;
                              }
                              hotelSortPrice.forEach(logMapElements);

                              document.write('<p style="font-size:25px;position:absolute;color:ForestGreen  ; left:700px;top:80px;">Best Deal</p>');

                              document.write("<p style='color:LightSlateGray ;font-size:20px;'><a href=' " + best_deal_link + "' style='position:absolute;left:700px;top:150px;'> "+best_deal_site+ "-"+best_deal_price+"/-</a></p>");

                              document.write('<p style="position:absolute;left:700px;top:550px;" align="right"><a href="'+ best_deal_link +'"><button type="button" class="btn btn-warning">View Deal</button></a></p>');
                              document.write("</div>");

                              
                              }
                      


                              }
                              priceWiseSorting.forEach(logMaElements);

                          document.write('<div class="contct" style="background-color: Teal  ; width: 100%; height: 200px;position: absolute;top: '+tp+'px;"><h2 align="center" style="color:white;"> Find your best deals in seconds <br> </h2><h2 align="center" style="color:white;">save time and money both <br> </h2><br><br><p align="center">Privacy Terms & Conditions ©2018 cheapestDeal.com</p></div>');


                  var eee =  new XMLHttpRequest;
                  eee.open("GET","var.php?q="+city,true);
                  eee.onload=function()
                  {
                    console.log("---------------------------------------------");
                    document.write("<div>"+eee.responseText+"</div>");
                    console.log(eee.responseText);
                  }
                  eee.send();

                        

                /**************************************************************************




                                    data processing end


                ************************************************************************************/
                

                  }
                }
                catch(e)
                {
                  console.log("touriffy");
                }

                   tuoriffy_com.send();

              }

                 hotels_dot_com_Request.send();

             }


                   tripadvisor.send();
                }

                   booking.send();

                }


                amarroom.send();

                }



            /****************************************************************
             /                                                              /
             /                       touriffy.com                           /
             /                                                              /
             /                          Request done                        /
             /**************************************************************/

                 tour_com_bd.send();

                /*******************************************

                       end of first xmlHttpRequest viz. hotel.com.bd

                 *********************************************/

             };
             hotel_com_bd.send();

             /*******************************************

                       end of click function

             *********************************************/
         }

         catch(e)
         {
            console.log(e);
         }

     }



        </script>
        

    <style>

    </style>

    <style>
* {
  box-sizing: border-box;
}
body {
  font: 16px Arial;  
}
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
</head>

<body onload="sessionCheck()">



   
   <div id="home" style="display:none;">

    <div class="header" style="background-color: Navy ; width: 100%; height: 100px">

    <p onclick="removingSession()" style="color: white;font-size: 27px; position:absolute; left: 100px;top: 15px;cursor: pointer;">cheapestDeal.com</p>    

    </div>



  <div  style="width: 100%; position:absolute; top: 180px; left:200px; ">

        <h3>
            Find best hotel deals in Bangladesh
        </h3>
        <form  method="post" action="Search.php" id="F">

           
           <select id="myInput" name="city">
            <option value="none">Where are you going?</option>
             <option value="sylhet">Sylhet</option>
             <option value="dhaka">Dhaka</option>
              <option value="bandarban">Bandarban</option>
             <option value="kuakata">Kuakata</option>
              <option value="Cox's Bazar">Cox's Bazar</option>
             <option value="Chittagong">Chittagong</option>
              <option value="Rangamati">Rangamati</option>
             <option value="Saint Martin's">Saint Martin's</option>
              <option value="Barishal">Barishal</option>
             <option value="Pabna">Pabna</option>
              <option value="Khulna">Khulna</option>
             <option value="Rangpur">Rangpur</option>
              <option value="Comilla">Comilla</option>
              <option value="Paris">Paris</option>
              <option value="Las Vegas">Las Vegas</option>
             <option value="Dubai">Dubai</option>
              <option value="Goa">Goa</option>
             <option value="Darjeeling">Darjeeling</option>
              <option value="Cairo">Cairo</option>
              </option>
            </select>

           <input type="date" id="check-in" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"></input>

           <input type="date" id="check-out" value="<?php echo date('Y-m-d', strtotime(' +1 day')); ?>" min="<?php echo date('Y-m-d'); ?>"></input>

           <input type="submit" name="submit" onclick="destinationValidation()"></input>
       </form>


    </div>


    <div class="kuakata" id="kuakata" onclick="kuakata()" style="position:absolute;top:450px;left:30px;cursor: pointer;">

        <h3 style="posotion:absolute;left:100px;color:Snow;">KUAKATA</h3>

    </div>


    <div class="sylhet" id="sylhet" onclick="sylhet()" style="position:absolute;top:450px;left:700px;cursor: pointer;">

        <h3 style="posotion:absolute;left:100px;color:Snow;">SYLHET</h3>

    </div>

     <div class="dhaka" id="dhaka" onclick="dhaka()"  style="position:absolute;top:800px;left:30px;cursor: pointer;">

        <h3 style="posotion:absolute;left:100px;color:Snow;">DHAKA</h3>

    </div>


    <div class="bandarban" id="bandarban" onclick="bandarban()"  style="position:absolute;top:800px;left:470px;cursor: pointer;">

        <h3 style="posotion:absolute;left:100px;color:Snow;">BANDARBAN</h3>

    </div>

    <div class="rangamati" id="rangamati" onclick="rangamati()"  style="position:absolute;top:800px;left:930px;cursor: pointer;">

        <h3 style="posotion:absolute;left:100px;color:Snow;">RANGAMATI</h3>

    </div>

    <div class="coxsbazar" id="coxsbazar" onclick="cox()"  style="position:absolute;top:1150px;left:30px;cursor: pointer;">

        <h3 style="posotion:absolute;left:100px;color:Snow;">COX'S BAZAR'</h3>

    </div>

    <div class="saint" id="saint" onclick="saint()"  style="position:absolute;top:1150px;left:550px;cursor: pointer;">

        <h3 style="posotion:absolute;left:100px;color:Snow;">SAINT MARTIN'S'</h3>

    </div>


     <h2 style="color:Silver;position:absolute;top:1500px;left:30px;cursor: pointer;">

                 around the globe
      </h2>

      <div class="paris" id="paris" onclick="paris()"  style="position:absolute;top:1600px;left:30px;cursor: pointer;">

          <h3 style="posotion:absolute;left:100px;color:Snow;">PARIS</h3>

      </div>

      <div class="vegas" id="vegas" onclick="vegas()"  style="position:absolute;top:1600px;left:350px;cursor: pointer;">

          <h3 style="posotion:absolute;left:100px;color:Snow;">LAS VEGAS</h3>

      </div>


      <div class="goa" id="goa" onclick="goa()"  style="position:absolute;top:1600px;left:670px;cursor: pointer;">

          <h3 style="posotion:absolute;left:100px;color:Snow;">GOA</h3>

      </div>

      <div class="darjeeling" id="darjeeling" onclick="darjeeling()"  style="position:absolute;top:1600px;left:1000px;cursor: pointer;">

          <h3 style="posotion:absolute;left:100px;color:Snow;">DARJEELING</h3>

      </div>

      <div class="venice" id="venice" onclick="venice()"  style="position:absolute;top:1930px;left:30px;cursor: pointer;">

          <h3 style="posotion:absolute;left:100px;color:Snow;">VENICE</h3>

      </div>

      </div>

      <div class="dubai" id="dubai" onclick="dubai()"  style="position:absolute;top:1930px;left:350px;cursor: pointer;">

          <h3 style="posotion:absolute;left:100px;color:Snow;">DUBAI</h3>

      </div>

      <div class="cairo" id="cairo" onclick="cairo()"  style="position:absolute;top:1930px;left:670px;cursor: pointer;">

          <h3 style="posotion:absolute;left:100px;color:Snow;">CAIRO</h3>

      </div>

      <div class="london" id="london"  onclick="london()"  style="position:absolute;top:1930px;left:1000px;cursor: pointer;">

          <h3 style="posotion:absolute;left:100px;color:Snow;">london</h3>

      </div>

      <div class="contct" style="background-color: Teal  ; width: 100%; height: 200px;position: absolute;top: 2400px;">


       <h3 align="center" style="color:white;"> FInd your best deals in seconds <br> </h3>
       <h3 align="center" style="color:white;">save time and money both <br> </h3>
       <br><br><br>

       <p align="center">Privacy Terms & Conditions ©2018 cheapestDeal.com</p>



    </div>
   </div>

 </body>  

</html>
