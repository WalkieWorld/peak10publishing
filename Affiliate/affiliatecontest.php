<?php

/**
 * Created by PhpStorm.
 * User: HZ
 * Date: 2/19/2015
 * Time: 2:57 PM
 */
/*include_once "server/DBConnector.php";*/
class Banners
{
    /**
     * Declare: Banner images' format must be like this: productName_widthxheight_number.jpg/png
    */
    public
        $salBanners = array(
        "solarAirLantern_300x250_01.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/solarairlantern/solarAirLantern_300x250_01.jpg' style='width: 300px; height: 250px;'&gt;",
        "solarAirLantern_300x250_02.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/solarairlantern/solarAirLantern_300x250_02.jpg, style=,width: 300px; height: 250px;,&gt;",
        "solarAirLantern_300x250_03.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/solarairlantern/solarAirLantern_300x250_03.jpg, style=,width: 300px; height: 250px;,&gt;",
        "solarAirLantern_300x250_04.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/solarairlantern/solarAirLantern_300x250_04.jpg, style=,width: 300px; height: 250px;,&gt;",
        "solarAirLantern_300x250_05.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/solarairlantern/solarAirLantern_300x250_05.jpg, style=,width: 300px; height: 250px;,&gt;"
    ),
        $grenadeBanners = array(
        "KS_19-09-2014_300-x-250.gif" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/KS_19-09-2014_300-x-250.gif' style='width: 300px; height: 250px;'&gt;",
        /*"paracord-Survival_300x250_01.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/paracord-Survival_300x250_01.jpg' style='width: 300px; height: 250px;'&gt;",
        "paracord-Survival_300x250_02.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/paracord-Survival_300x250_02.jpg' style='width: 300px; height: 250px;'&gt;",*/
        "paracord-Survival_300x250_03.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/paracord-Survival_300x250_03.jpg' style='width: 300px; height: 250px;'&gt;",
        "paracord-Survival_300x250_04.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/paracord-Survival_300x250_04.jpg' style='width: 300px; height: 250px;'&gt;",
        "paracord-Survival_300x250_05.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/paracord-Survival_300x250_015.jpg' style='width: 300px; height: 250px;'&gt;",
        "paracord-Grenade_300x250_07.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/paracord-Grenade_300x250_07.jpg' style='width: 300px; height: 250px;'&gt;",
        "paracord-Grenade_300x250_08.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/paracord-Grenade_300x250_08.jpg' style='width: 300px; height: 250px;'&gt;",
        "paracord-Grenade_300x250_09.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/grenade/paracord-Grenade_300x250_09.jpg' style='width: 300px; height: 250px;'&gt;",
    ),
        $patrioticParacordBanners = array(
        "Pat-Paracord_300x250_01.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/patrioticparacord/Pat-Paracord_300x250_01.jpg' style='width: 300px; height: 250px;'&gt;",
        "Pat-Paracord_300x250_02.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/patrioticparacord/Pat-Paracord_300x250_02.jpg' style='width: 300px; height: 250px;'&gt;",
        "Pat-Paracord_300x250_03.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/patrioticparacord/Pat-Paracord_300x250_03.jpg' style='width: 300px; height: 250px;'&gt;",
        "Pat-Paracord_300x250_04.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/patrioticparacord/Pat-Paracord_300x250_04.jpg' style='width: 300px; height: 250px;'&gt;",
        "Pat-Paracord_300x250_05.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/patrioticparacord/Pat-Paracord_300x250_05.jpg' style='width: 300px; height: 250px;'&gt;",
    ),
        $cobraBeltBanners = array(),
        $playingCardsBanners = array(),
        $emergencySurvivalBlanketBanners = array(
        "ESB_300x250_1.jpg" =>
        "&lt;img src='http://affiliate.survivalfrog.com/image/emergencysurvivalblanket/ESB_300x250_1.jpg' style='width: 300px; height: 250px;'&gt;",
        "ESB_300x250_2.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/emergencysurvivalblanket/ESB_300x250_2.jpg' style='width: 300px; height: 250px;'&gt;",
        "ESB_300x250_3.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/emergencysurvivalblanket/ESB_300x250_3.jpg' style='width: 300px; height: 250px;'&gt;",
        "ESB_600x500_1.jpg" =>
            "&lt;img src='http://affiliate.survivalfrog.com/image/emergencysurvivalblanket/ESB_600x500_1.jpg' style='width: 600px; height: 500px;'&gt;"
    ),
        $subTabs = array(
        "solarAirLanternTab" => array(
            "solarAirLanternDescription" => "Details",
            "solarAirLanternBanners" => "Banners",
            "solarAirLanternEmail" => "Email",
            "solarAirLanternGenerateLink" => "Generate Link"
        ),
        "grenadeTab" => array(
            "grenadeDescription" => "Details",
            "grenadeBanners" => "Banners",
            "grenadeEmail" => "Email",
            "grenadeGenerateLink" => "Generate Link"
        ),
        "patrioticParacordTab" => array(
            "patrioticParacordDescription" => "Details",
            "patrioticParacordBanners" => "Banners",
            "patrioticParacordEmail" => "Email",
            "patrioticParacordGenerateLink" => "Generate Link"
        ),
        "cobraBeltTab" => array(
            "cobraBeltDescription" => "Details",
//            "cobraBeltBanners" => "Banners",
            "cobraBeltEmail" => "Email",
            "cobraBeltGenerateLink" => "Generate Link"
        ),
        "lifestrawTab" => array(
            "lifestrawDescription" => "Details",
//            "lifestrawBanners" => "Banners",
            "lifestrawEmail" => "Email",
            "lifestrawGenerateLink" => "Generate Link"
        ),
        "playingCardsTab" => array(
            "playingCardsDescription" => "Details",
//            "playingCardsBanners" => "Banners",
            "playingCardsEmail" => "Email",
            "playingCardsGenerateLink" => "Generate Link"
        ),
        "emergencySurvivalBlanketTab" => array(
            "emergencySurvivalBlanketDescription" => "Details",
            "emergencySurvivalBlanketBanners" => "Banners",
            "emergencySurvivalBlanketEmail" => "Email",
            "emergencySurvivalBlanketGenerateLink" => "Generate Link"
        )
    ),
        $productAlbums = array(
        "solarAirLantern" => array(
            "SolarAirLantern.png",
            "SolarAirLanternUses.png"
        ),
        "grenade" => array(
            "ParacordGrenade.jpg",
            "paracord-kit-card-front-side.jpg",
            "SurvivalGrenadeContents.jpg"
        ),
        "patrioticParacord" => array(
            "PatrioticParacordBracelet.png"
        ),
        "cobraBelt" => array(
            "cobrabelt.png",
            "cobrabeltspecifics.jpg",
            "cobrabeltuses.jpg"
        ),
        "emergencySurvivalBlanket" => array(
            "blanket-folded-girl.jpg",
            "EmergencyBlanket.jpg",
            "HandHoldingBlanket2.jpg"
        ),
        "lifestraw" => array(
            "lifestraw-personal-water-filter.seal2.jpg",
            "mostmorethan1lifestraws.jpg"
        ),
        "playingCards" => array(
            "playingcards.jpg",
            "playingcards2.jpg"
        )
    ),
        $emailList = array(
        "solarAirLantern" => array(
            "https://www.dropbox.com/s/04m9gy0nopzi1lh/Email%201.html?dl=1" =>
            "<h4>SUBJECT: New Solar Air Lantern</h4>
            <p>I can't decide if this is crazy or genius.</p>
            <figure><img src='image/solarairlantern/solarAirLantern_email_1.jpg' alt='Solar Air Lantern Email 1'>
            <figcaption>(new) Solar Air Lantern</figcaption>
            </figure>
            <p>Check out this new survival gadget.</p>
            <p>It's easy to use. </p>
            <p>Just charge it in the sun. Inflate it. And light up a room. </p>
            <p>12 hours of backup light from a single charge!</p>
            <p>No batteries, no wires, no hassle.  And at only 1 inch tall when deflated, it stores easily in your car or go bag.  Plus, it's waterproof so you can use it in the rain, or while boating.</p>
            <a href='YOUR_LINK'>See 8 moreuses for the amazing Solar Air Lantern</a>
            <p>It may be the coolest camping gadget ever.</p>
            <p>Kids love the lanterns, and they end up learning about solar energy.</p>
            <p>The Solar Air Lantern is virtually indestructible and even floats, so you can re use your lantern for years to come.</p>
            <p>See the next page for a 2-minute video.</p>
            <section class='paragraph'>
            Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </section>
            <p>This is a must-have light source! Click the link below to see how it works.</p><p><a href='YOUR LINK' target='_blank'>FULL LINK</a></p>"
            ,
            "https://www.dropbox.com/s/cjfkt50fh338fbz/Email%202.html?dl=1" =>
            "
            <h4>SUBJECT: #1 Top Selling Survival Gadget of the year</h4>
            <p>Have you seen the <a href='YOUR_LINK'>\"Top Selling Survival Gadget\"</a> of the year yet?</p>
            <p>Here is a hint…</p>
            <p>It's only 4 ounces, has 2 handles and doesn't need batteries.</p>
            <p>Know what it is?</p>
            <p>Go here to see the <a href='YOUR_LINK'>Top Selling Survival product of the year.</a></p>
            <p>Everyone needs this in their go-bag and car.</p>
            <p>This is a must-have item for everyone in the family.</p>
             <section class='paragraph'>
            Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </section>
            ",
            "https://www.dropbox.com/s/nn5iverw5i7uabv/Email%203.html?dl=1" =>
            "
            <h4>SUBJECT: Coolest Survival Gadget</h4>
            <p>This is one of the coolest survival gadgets I've seen.</p>
            <p>Virtually indestructible.</p>
            <p>And it can light up a room for 8 hours.</p>
            <figure><img src='image/solarairlantern/solarAirLantern_email_1.jpg' alt='Solar Air Lantern Email 2'>
            <figcaption>Solar Air Lantern</figcaption>
            </figure>
            <p><a href='YOUR_LINK'>Solar Air Lantern</a></p>
            <ul>
                <li>
                    Inflatable
                </li>
                <li>
                    Rechargeable
                </li>
                <li>
                    Affordable
                </li>
                <li>
                    Waterproof
                </li>
                <li>
                    Shatterproof
                </li>
                <li>
                    Lightweight
                </li>
                <li>
                    Portable
                </li>
                <li>
                    Uses no wires or batteries
                </li>
            </ul>
            <p>
            See all the survival uses here:
            </p>
            <p><a href='YOUR_LINK'>Solar Air Lantern</a></p>
             <section class='paragraph'>
            Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </section>
            <p>
                PS: This lantern is only 1\" tall when deflated, so it's easy to store in your go-bag.
            </p>
            <a href='YOUR_LINK'>
            FULL LINK
            </a>
            "
        ),
        "grenade" => array(
            "https://www.dropbox.com/s/fgl7bqu2sgw6fvu/Email%201.html?dl=1" =>
            "
            <h4>SUBJECT: (new) Paracord \"Grenade\" tool</h4>
            <p>(new survival tool)</p>
            <p>Introducing the new <a href='YOUR_LINK'>\"Paracord Grenade\"</a> survival tool.</p>
            <figure>
                <img src='image/grenade/ParacordGrenade.jpg' alt='Grenade 10'>
            </figure>
            <p>10 different survival items are stuffed inside this thing. </p>
            <p>Go here to see <a href='YOUR_LINK'>what's inside the grenade.</a></p>
            <p>For the next few days, you can get a free sample. But only while supplies last.</p>
            <p>
            Prepare Now,
            <br>
            Survive Later!
            <br>
            ~Damian Campbell
            </p>
            ",
            "https://www.dropbox.com/s/jrceqoii2o443ji/Email%202.html?dl=1" =>
            "
            <h4>SUBJECT: What's inside this \"Grenade\"</h4>
            <p>Have you seen the Paracord \"Grenade\" survival tool yet?</p>
            <figure>
                <img src='image/grenade/SurvivalGrenadeContents.jpg' alt='Grenade 10'>
                <figcaption>Check out this <a href='YOUR_LINK'>amazing survival tool</a>.</figcaption>
            </figure>
            <p>The Grenade is packed full of survival gear that could save your life one day.</p>
            <p>It fits in the palm of your hand but contains several survival tools:</a></p>
            <ul>
                <li>Knife blade
                </li>
                <li>Fire starter
                </li>
                <li>Tin foil
                </li>
                <li>Fishing line
                </li>
                <li>Fishing hooks
                </li>
                <li>Fishing swivels
                </li>
                <li>Fishing floats (bobbers)
                </li>
                <li>Fishing weights
                </li>
            </ul>
            <p>PLUS
            <ul>
                <li>Over 9 feet of 550 Paracord
                </li>
                <li>Spring loaded carabiner
                </li>
            </ul>
            </p>
            <P>For the next few days, my friend Damian is giving the grenade away, just pick up the shipping.</P>
            <P>Every bug out bag needs one.</P>
            <p>
            Prepare Now,
            <br>
            Survive Later!
            <br>
            ~Damian Campbell
            </p>
            <p>
                PS: you can forward this email to a few friends, but don't over do it. When they are out of stock, they are gone.  Get yours today:
                <a href='YOUR_LINK'>LINK</a>
            </p>
            ",
            "https://www.dropbox.com/s/ihh8gypmyin0bir/Email%203.html?dl=1" =>
                "
            <h4>SUBJECT: 100% Legal Survival Grenade (Pic)</h4>
            <p>Check out this crazy survival tool.</p>
            <p>It’s a Paracord Grenade.</p>
            <p>Go here to see <a href='YOUR_LINK'>its advanced features</a>.</p>
            <figure>
                <img src='image/grenade/ParacordGrenade.jpg' alt='Grenade 15'>
            </figure>
            <p>Unlike a real grenade this grenade has survival tools packed inside.</p>
            <p>9 feet of Paracord are wrapped around essential gear.</p>
            <p>It could easily help save your life.</p>
            <p>What exactly is inside?</p>
            <p>Things like:
                <ul><li>Razor sharp knife blade</li>
                <li>Fire starter</li>
                <li>Tin foil</li>
                </ul>
            </p>
            <p>Plus 7 others.</p>
            <P>Best of all it doesn’t take up a lot of room. It’s small enough to fit in the palm of your hand.  You can take it anywhere.</P>
            <p>And the rest of tools stuffed inside are legit.</p>
            <p>So yes, the Paracord grenade is the real deal.</p>
            <p>With it you can:<ul><li>Take out a bad guy</li>
            <li>Sew up torn clothes</li>
            <li>Create a snare for dinner</li>
            <li>Catch fish</li>
            <li>Fix broken shoes</li>
            <li>Make a belt</li>
            <li>Build shelter</li>
            </ul>
            </p>
            <p>And more.</p>
            <p>Curious what else is inside? Go here now <a href='YOUR_LINK'>to see the other 7 tools.</a></p>
            <p>These are perfect for everyday carry and bug-out-bags.</p>
            <p><em>BONUS:</em> For the next few days, you can get a free sample.</p>
            <p>My friend Damian makes them and is giving them away to patriots.</p>
            <p>All you have to do is cover shipping.</p>
            <p>But you’ll want to act fast, quantity is limited.</p>
            <p>
            Prepare Now,
            <br>
            Survive Later!
            <br>
            ~Damian Campbell
            </p>
            <p>P.S. Damian said this deal is taking off. Don’t sleep on this. <a href='YOUR_LINK'>Here’s the link.</a></p>
            ",
            "https://www.dropbox.com/s/bohfwjbcg8wx7pi/Email%204.html?dl=1" =>
                "
            <h4>SUBJECT: New Survival Tool (50-state Legal)</h4>
            <p>Hey, check this out.</p>
            <p>This is a survival grenade you can legally carry in your pocket.</p>
            <p>Go here to see this <a href='YOUR_LINK'>amazing survival tool</a>.</p>
            <figure>
                <img src='image/grenade/ParacordGrenade.jpg' alt='Grenade 16'>
            </figure>
            <p>There are a lot of survival tools you can’t take into banks, government buildings and more.</p>
            <p>This isn’t one of those</p>
            <p>Once you see how many things you can do with it you’ll agree it’s a survival necessity.</p>
            <p>Check it out.  This tiny tool can help you: </p>
            <p>
                <ul><li>Catch dinner</li>
                <li>Make Dinner</li>
                <li>Create Shelter</li>
                <li>Signal distress</li>
                <li>Disable bad guys</li>
                <li>Tow a car</li>
                <li>Fix broken machine parts</li>
                <li>Make a weapon</li>
                </ul>
            </p>
            <p>And a whole lot more.</p>
            <p>In fact, there are over 100 listed survival uses for this tiny survival grenade. </p>
            <P>Pretty crazy huh?</P>
            <p>The best part about this tool is how compact it is.</p>
            <p>Clip the attached carabiner to your keys and you’ve always got a solid survival tool on hand.</p>
            <p>For a limited time you can get your grenade 100% Free.</p>
            <p>
            Be sure to go to the next page to learn about the other amazing tools concealed inside and how you can get yours for free.
            </p>
            <p>Hurry though, supplies are limited. <a href='YOUR_LINK'>Go here now.</a></p>
            <p>
            Prepare Now,
            <br>
            Survive Later!
            <br>
            ~Damian Campbell
            </p>
            <p>P.S. You’ll never believe what else is inside this grenade. You’ve got to see it to believe it.
            Go here to see what’s inside and get yours Free (while they still last) <a href='YOUR_LINK'>link.</a></p>
            "
        ),
        "patrioticParacord" => array(
            "https://www.dropbox.com/s/1crqw8df2eqsx8h/Email%201.html?dl=1" =>
            "
            <h4>SUBJECT: (new survival tool) Introducing the new 'Patriotic Paracord' survival tool</h4>
            <p>Dear Patriot,</p>
            <p>
                Do you have a '<a href='YOUR_LINK'>Patriotic Survival Bracelet</a>?'
            </p>
            <figure>
                <img src='image/patrioticparacord/patriotic_paracord_email.jpg' alt='patriotic paracord email picture'>
            </figure>
            <p>I'll send one today to try out. </p>
            <p>Just pay shipping.</p>
            <p>But hurry, once they are gone we'll start selling for full price.</p>
            <p>
                Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </p>
            <p>
                PS: You can share this email with your friends, just don't over do it. Once we're out of stock, the free offer is gone.
                <a href='YOUR_LINK'>YOUR LINK</a>
            </p>
            ",
            "https://www.dropbox.com/s/fsw61opunanz51h/Email%202.html?dl=1" =>
            "
            <h4>SUBJECT: (new survival tool) Introducing the new 'Patriotic Paracord' survival tool</h4>
            <p>Dear Patriot,</p>
            <p>
                Do you have a '<a href='YOUR_LINK'>Patriotic Survival Bracelet</a>?'
            </p>
            <p>This amazing bracelet is not only fashionable but needed to survive.</p>
            <p>Don't wait to <a href='YOUR_LINK'>get yours</a> for free.</p>
            <p>I'll send one today to try out.</p>
            <p>
                But hurry, once they are gone we'll start selling for full price.
            </p>
            <p>
                Just pay shipping.
            </p>
            <p>
                Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </p>
            <p>
                PS: You can share this email with your friends, just don't over do it. Once we're out of stock, the free offer is gone.
                <a href='YOUR_LINK'>YOUR LINK</a>
            </p>
            "
        ),
        "cobraBelt" => array(
            "https://www.dropbox.com/s/d0a8wd6o485n8pe/Email%201.html?dl=1" =>
                "
                <h4>SUBJECT: Our Newest Survival Tool Has Over 100 Uses</h4>
            <p>When it comes to survival tools, more is generally better.</p>
            <p>
                And our Paracord Cobra Survival Belt is one of the best tools around, because it offers more than most.
            </p>
            <p>Our introductory offer has it 65% OFF for limited time. <a href='YOUR_LINK'>Get it Now</a>.</p>
            <p>
                What makes it so unique?
            </p>
            <p>First it’s got over 100 feet of wearable 550 lb Paracord. Second is that you can use this stylish belt to save your life or the life others.
            </p>
            <p>Take a look at this belt.
            </p>
            <figure>
                <img src='image/cobrabelt/cobrabelt.png'>
            </figure>
            <p>Pretty cool I’m sure you’d agree.</p>
            <p>
                Check out what this belt can do for you.
            </p>
            <ul>
                <li>
                    Replaces shoelaces
                </li>
                <li>
                    Use as a snare
                </li>
                <li>
                    Create net to catch fish and game
                </li>
                <li>
                    Tie a knife to a stick for a spear
                </li>
                <li>
                    Can hang a hammock
                </li>
                <li>
                    Use as a trot line for fishing.
                </li>
            </ul>
            <p>
                That’s just a sampling, we’ve counted over 100 listed uses for this belt.
            </p>
            <p>
                Honestly this belt is so much more than something to keep your pants up.<br>
                That’s because when you wear this belt you’ll never be far from an insanely useful survival tool.
            </p>
            <p>
                And right now, you can get it now for a HUGE savings.
            </p>
            <p>
                But this won’t last long!
            </p>
            <p>
                Go here to get it for 65% off.
            </p>
            <p>
                Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </p>
            <p>
                <em>PS:</em>
                 I can’t promise you’ll see this offer again. Get it before its gone. Here’s your link:
                 <a href='YOUR_LINK'>YOUR LINK</a>
            </p>
            "
        ),
        "lifestraw" => array(
            "https://www.dropbox.com/s/2exvq9gxeflfs1i/Email%201.html?dl=1" =>
            "
            <h4>SUBJECT: #1 Pic:  No Other Water Filter Can Do This</h4>
            <p>There’s something different about our #1, top selling water filtration device.</p>
            <p>
                Called the Lifestraw, it won Time magazine’s  “Innovation of the Year” award.
            </p>
            <p>I think you’ll want it, check it out <a href='YOUR_LINK'>here</a>.</p>
            <figure>
                <img src='image/lifestraw/lifestraw_email_1.png'>
            </figure>
            <p>No other filter can say it’s won as many awards as the Lifestraw.</p>
            <p>
                All these publications (plus 7 more) said the Lifestraw is one of the best filters ever!
            </p>
            <ul>
                <li>
                    Popular Science
                </li>
                <li>
                    Forbes Magazine
                </li>
                <li>
                    The New York Times
                </li>
                <li>
                    Reader’s Digest
                </li>
                <li>
                    Fortune Magazine
                </li>
            </ul>
            <p>
                Surprisingly it’s really affordable (less than $20), and it’s super powerful.
            </p>
            <p>
                It gets rid of 99.9% of bacteria and parasites and can give you 1,000 liters of safe water. That makes it perfect for disaster survival. It’s lightweight and goes perfect in any sized bag.
            </p>
            <p>
                Right now I’m running a sweet deal for anyone who gets a Lifestraw from me.
            </p>
            <p>
                Buy more than 1 Lifestraw and get 1 FREE Paracord Grenade (normally $17.97).
            </p>
            <p>
                It’s a limited time deal. <a href='YOUR_LINK'>Go here to learn more about the Lifestraw and my special deal</a>.
            </p>
            <p>
                Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </p>
            <p>
                <em>PS:</em>
                 I can’t promise you’ll see this deal again. If you want to learn more about the Lifestraw and your FREE grenade just go right here.
            </p>
            ",
            "https://www.dropbox.com/s/2i0xkacqxh8x6w7/Email%202.html?dl=1" =>
            "
            <h4>SUBJECT: This Weird Filter Lets You Drink From a Toilet</h4>
            <p>Time Magazine was really impressed with this filter.</p>
            <p>
                I think you’ll want this, <a href='YOUR_LINK'>go here to learn more</a>
            </p>
            <p>I think you’ll want it, check it out <a href='YOUR_LINK'>here</a>.</p>
            <figure>
                <img src='image/lifestraw/lifestraw_email_2.png'>
            </figure>
            <p>It’s called the Lifestraw.  And it’s one of the most powerful, most affordable emergency filters around.</p>
            <p>
                Yes, it is our #1 top selling water filter.
            </p>
            <p>
                The Lifestraw is super lightweight and so powerful it’ll eliminate 99.9% of parasites and bacteria. That means you could drink toilet water if you had to.
            </p>
            <p>
                It can filter 1,000 liters of water making it perfect for a bug-out-bag or survival kit.
            </p>
            <p>
                <em>BONUS!</em>
            </p>
            <p>
                When you get more than 1 Lifestraw from me today, I’ll hook you up with my Paracord Grenade 100% FREE  (normally $17.97).
            </p>
            <p>
                It’s a special offer that won’t last long. <a href='YOUR_LINK'>Go here to learn more about the Lifestraw and my offer</a>.
            </p>
            <p>
                Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </p>
            <p>
                <em>PS:</em>
                 I can’t promise you’ll see this deal again. If you want to learn more about the Lifestraw and your FREE grenade just go right here.
            </p>
            ",
            "https://www.dropbox.com/s/2i0xkacqxh8x6w7/Email%202.html?dl=1" =>
                "
            <h4>SUBJECT: Personal Water Filter (LifeStraw)</h4>
            <p>Have you seen the LifeStraw yet? </p>
            <p>
                It's one of our top sellers right now.
            </p>
            <figure>
                <img src='image/lifestraw/lifestraw_email_3.jpg'>
            </figure>
            <p>I think you'll want to get your own <a href='YOUR_LINK'>Personal Water Filter</a>.</p>
            <p>
                We've taken this amazing survival tool and just made it better. When you get more than 1, we also include the popular Paracord Grenade for free.
            </p>
            <p>
                Incredibly, the LifeStraw filters 1,000 liters of water while removing 99.9% of bacteria and parasites. It can be reused and stores easily in backpacks or go bags.
            </p>
            <p>
                Be sure to see our \"4 Steps in using LifeStraw\" on the next page. This deal won't last long, so go check it out while we're still including the Paracord Grenade.
            </p>
            <p>
                Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </p>
            <p>
                <em>PS:</em>
                 TIME Magazine awarded this product it's \"Invention of the Year\" award. <a href='YOUR_LINK'>Go checkout the LifeStraw</a> to see what all the buzz is about.
            </p>
            ",
            "https://www.dropbox.com/s/lywk60plcrkke67/Email%204.html?dl=1"
            =>
            "<h4>SUBJECT: [20% Off Today] Top-Selling Water Filter of 2014</h4>
            <p>Hard to believe 2014 has been over… </p>
            <p>
                It's one of our top sellers right now.
            </p>
            <p>We want to thank you for your continued support of Survival Frog with a 20% discount on our top-selling water filter – the LifeStraw.</p>
            <figure>
                <img src='image/lifestraw/lifestraw_email_4.jpg'>
                <figcaption>20% Off LifeStraw</figcaption>
            </figure>
            <p>Incredibly, the LifeStraw filters 1,000 liters of water while removing 99.9% of bacteria and parasites.</p>
            <p>
                And you’ll never even notice you're carrying it – the LifeStraw weighs just 2 ounces!
            </p>
            <p>
                Use this link to get the special 20% Off Discount:<br>
                LifeStraw – 20% Off Special Discount
            </p>
            <p>
                Thanks again for your continued support of Survival Frog.
            </p>
            <section class='paragraph'>
            <p>Happy Holidays!</p>
            <p>~ The Survival Frog Team</p>
            <p>And Peak 10 Publishing (sister company)
            </p>
            </section>
            <p>
                Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </p>"
        ),
        "playingCards" => array(
            "https://www.dropbox.com/s/y3udh9rwwkwg8l7/Email%201.html?dl=1" => "
            <h4>SUBJECT: Survival \"Poker Cards\" gift idea</h4>
            <p>* New Product Alert *</p>
            <p>Our new Survival Playing Cards just arrived. The \"Would you survive if…\" playing cards are expected to sell out quickly.
            </p>
            <figure>
                <img src='image/playingcards/playingcards.jpg'>
            </figure>
            <p>Survival Playing Cards - 50% Off</p>
            <p>Great gift idea for
                <ul>
                    <li>
                        friends
                    </li>
                    <li>
                        the guys at the office
                    </li>
                    <li>
                        uncle Ted
                    </li>
                    <li>
                        college students
                    </li>
                    <li>
                        one of the (many) cousins you'll see this year
                    </li>
                </ul>
                … or even stocking stuffers!
            </p>
            <p>
                If you just want to get one deck of the Survival Playing Cards, then I'll send it to you for free. Just pick up the shipping.
            </p>
            <p>
                But if you want to get a few more for gifts, then I'll hook you up with a sweet discount.
            </p>
            <p>Check out the Survival Playing Cards - 50% Off</p>
            <p>Our Version 1 from last year sold out almost immediately. This year, we ordered more, but the Version 2 should sell out fast.</p>
            <p>Get yours today.</p>
            <p>
            Prepare Now,
            <br>
            Survive Later!
            <br>
            ~Damian Campbell
            </p>
            <p>
            <em>PS:</em> In one small pack, you'll have over 52 unique, creative and sometimes weird survival tips. They are really cool! Here's the link:
            <a href='YOUR_LINK'>YOUR LINK</a>
            </p>
            ",
            "https://www.dropbox.com/s/qoh32g9t2d4od49/Email%202.html?dl=1"
            =>
            "
            <h4>SUBJECT: Playing Card that can save your life</h4>
            <figure>
                <img src='image/playingcards/playingcards.jpg'>
            </figure>
            <p>Survival Playing Cards!</p>
            <ul>
                <li>
                    entertaining
                </li>
                <li>
                    educational
                </li>
                <li>
                    laughter with friends
                </li>
                <li>
                    durable, plastic coated cards (multiple uses)
                </li>
                <li>
                    compact, easy to carry
                </li>
            </ul>
            <p>
                You will pick up some great survival / prepping ideas along the way!
            </p>
            <p>
            Prepare Now,
            <br>
            Survive Later!
            <br>
            ~Damian Campbell
            </p>
            <p>
            <em>PS:</em>
            <a href='YOUR_LINK'>Here’s the link:</a>
            </p>
            ",
            "https://www.dropbox.com/s/0nnu9jp5jimdptf/Email%203.html?dl=1" =>
            "<h4>SUBJECT: Your go bag is missing this 1 thing</h4>
            <figure>
                <img src='image/playingcards/playingcards.jpg'>
            </figure>
            <p>What is the 1 thing you don't have in your go-bag?</p>
            <p>
            Hint:
            </p>
            <p>It's only 2.5 x 3.5 inches in size.</p>
            <p>
                This item provides entertainment when you need it the most.  And it's a lot of fun at parties as people love going through each one.
            </p>
            <p>What is it?  Survival Playing Cards
            </p>
            <p>The playing cards are a great conversation piece and should be in every car and go-bag.
            </p>
            <p>
            Prepare Now,
            <br>
            Survive Later!
            <br>
            ~Damian Campbell
            </p>
            <p>
            <em>PS:</em>
            <a href='YOUR_LINK'>Here’s the link:</a>
            </p>
            ",
            "https://www.dropbox.com/s/koi60h64zrkonyo/Email%204.html?dl=1" =>
            "
            <h4>SUBJECT: Survival Playing Cards?</h4>
            <p>They are back in stock. Finally.
            </p>
            <figure>
                <img src='image/playingcards/playingcards.jpg'>
            </figure>
            <p>After selling thousands of Survival Playing Cards over the holidays, we've gotten our feet back on the ground and can start shipping new orders now.</p>
            <p>
            The survival playing cards have been crazy popular.
            </p>
            <p>Use this link and there isn't any shipping charge:
            </p>
            <p>
                Survival Playing Cards
            </p>
            <p>The playing cards are a great conversation piece and should be in every car and go-bag.
            </p>
            <p>
            Prepare Now,
            <br>
            Survive Later!
            <br>
            ~Damian Campbell
            </p>
            <p>
            <em>PS:</em> The high demand means we will sell out soon. I'm not sure when the playing cards will be offered again, so get your pack today.
            <a href='YOUR_LINK'>Here’s the link:</a>
            </p>
            "
        ),
        "emergencySurvivalBlanket" => array(
            "https://www.dropbox.com/s/s1uhxmryl4rqa0q/Email%201.html?dl=1" => "
            <h4>SUBJECT: New Survival Blanket (samples)</h4>
            <p>This thing is crazy. </p>
            <p>
                It's one of our top sellers right now.
            </p>
            <figure>
                <img src='image/emergencysurvivalblanket/emergencySurvivalBlanket_email_1.jpg'>
                <figcaption>Emergency Survival Blanket</figcaption>
            </figure>
            <p><a href='YOUR_LINK'>Get Your Sample Today</a></p>
            <p>
                I have a few hundred of these emergency survival blankets that we're giving away for free. You just pick up the shipping.
            </p>
            <p>
                This blanket is amazing…
                <ul>
                    <li>
                        Helps retain 90% of body heat
                    </li>
                    <li>
                        Use to stay dry and protects from elements
                    </li>
                    <li>
                        Signal for help with the reflective material
                    </li>
                    <li>
                        And other <a href='YOUR_LINK'>cool survival blanket ideas</a>
                    </li>
                </ul>
            </p>
            <p>
                Great for in the car, while hiking, outdoor sporting events, vacations, etc.
            </p>
            <section class='paragraph'>
            <p>I have the feeling we will run out of stock quickly. So get your free sample today.
            </p>
            </section>
            <p>
                Prepare Now,
                <br>
                Survive Later!
                <br>
                ~Damian Campbell
            </p>
            <p>
            <em>PS:</em> I'd prefer if you didn't share this link with anyone. Once we're out of stock, the free offer is gone.  Here's the link again:
            <a href='YOUR_LINK'>YOUR LINK</a>
            </p>
            "
        )
    );

    public function renderBanners($productName, $bannerImageArray, $imagePath, $imageCssName)
    {
        $i = 0;
        foreach ($bannerImageArray as $key => $value) {
            foreach(explode('_', $key) as $e){
                if(strpos($e, 'x') !== false){
                    $bannerImgSize = explode('x', $e);
                }
            }
            echo "<section class='banner-info'>";
            echo "<aside class='pic-des'> $bannerImgSize[0] * $bannerImgSize[1]</aside>";
            $plainValue = htmlspecialchars_decode($value);
            $i += 1;
            echo <<<END
                                        <figure class="$imageCssName">
                                            <img src="$imagePath/$key"
                                                 alt="$productName $i">
                                        </figure>
                                        <pre><aside class="template">$value</aside></pre>
                                        <button class="copy btn btn-default" data-clipboard-text="$plainValue">Copy</button>
END;
            echo "</section>";
        }
    }

    public function renderSubNavTabs($sTabs, $tabId)
    {
        $cnt = 0;
        $isActiveClass = "class='active'";
        echo "<ul class='nav nav-tabs' role='tablist' id='" . $tabId . "'>";
        foreach($sTabs as $key => $value)
        {
            $cnt++;
            if($cnt > 1){
                $isActiveClass = "";
            }
            echo "<li role='presentation' $isActiveClass><a href='#$key' aria-controls='$key' role='tab' data-toggle='tab'>$value</a></li>";
        }
        echo "</ul>";
    }

    public function renderProductAlbums($productName, $productAlbum, $imagePath){
        $i = 0;
        foreach($productAlbum as $p){
            $i++;
            echo <<<END
            <figure>
                <img src="$imagePath/$p" alt="$productName $i">
            </figure>
END;
        }
    }

    public function renderEmail($emailContentList, $id){
        $index = 0;
        $in = "in";
        $isExpanded = "true";
        $headingId = $id . "Heading";
        $collapseId = $id . "Collapse";
        $parentId = $id . "EmailOne";
        foreach($emailContentList as $k => $e){
            $index++;
            if($index > 1){
                $in = "";
                $isExpanded = "false";
            }
            $headingId .= $index;
            $collapseId .= $index;
            echo <<<END
            <section class="panel panel-default">
                <section class="panel-heading" role="tab" id="$headingId">
                    <h4>
                        <a data-toggle="collapse" data-parent="#$parentId"
                           href="#$collapseId" aria-expanded="$isExpanded"
                           aria-controls="collapse$index">Email $index <span class="fa fa-angle-double-down"></span></a>
                        <a href="$k" class="fa fa-download"> Download HTML</a>
                    </h4>
                </section>
                <section id="$collapseId" class="panel-collapse collapse $in"
                         role="tabpanel" aria-labelledby="$headingId">
                    <article class="panel-body">
                        $e
                    </article>
                </section>
            </section>
END;
        }
    }
}

$myBanners = new Banners();

/*$myDBConnector = new \server\DBConnector();

echo $myDBConnector->get_db_server();*/

?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = "Survival Frog Affiliate: Affiliate Contest";
include_once("includes/head.php");
?>
<body>
<?php
include_once("includes/header.php");
?>
<section class="container body">
    <!--<section class="page-header">
        <h3>CLICKBANK</h3>
    </section>-->
    <section class="left-tabpanel" role="tabpanel" id="left-tabpanel">
        <!-- Nav tabs -->
        <?php
        include_once("includes/left_sub_nav.php");
        $subNavHelper->renderNavTabs($subNavHelper->navTabs);
        ?>
        <!-- Tab panels -->
        <section class="tab-content right-tab-content" id="clickBankTabContent">
            <!-- Description of Affiliate Contest -->
            <article role="tabpanel" class="tab-pane fade in active" id="cbAbout">
                <dl class="description">
                    <h1 class="center">
                        Affiliate Contest March 1 - 22nd, 2015
                    </h1>
                    <dd>
                        You have 7 different survival offers to choose from - all of which are physical survival gear. Your buyers
                        will love the low cost survival gear we have, or you can send to our
                        e-commerce store and have 100's of survival gear options. Each buyer counts towards
                        the contest prizes.
                    </dd>
                    <dd>
                        This isn't the same old "info product" pitches - people really enjoy seeing survival gear
                        and it adds value to your list.
                    </dd>
                    <dd>
                        The commission structure for each product is explained in the product area. And while you won't see $5 EPC on
                        our physical offers, you will see a lot of clicks and for most lists $1 EPC.

                    </dd>
                    <dd>
                        <strong>
                            COMMISSIONS:
                        </strong>
                    </dd>
                    <dd>Most offers are paid on CPA (Cost per aquisition) basis, and we have raised the CPA from $6 to $7 on the free+ship offers, but only during the contest period.
                        Commissions vary per product, see product areas for specific commission details.
                    </dd>
                    <dd>
                        Plus:<br>
                        We will have random drawings twice per week. For each customer that buys, you will be entered once.  So if you have 50 sales for that week, your name will be in the drawing "hat" 50 times.  We are giving away some really cool survival gear to the winners, watch the emails to see what was awarded and if you won.
                    </dd>
                    <dd>
                        Plus:<br>
                        Grab some quick cash by ranking in the top 3 spots.  Based on the total amount of buyers during the March 1 - 22nd time period.  Top dog gets $2,500 (as long as there are over 150 buyers). No minimums for the 2nd prize at $1,000 or 3rd at $500.
                    </dd>
                    <dd>
                        <strong>
                            WHEN YOU GET PAID:
                        </strong>
                    </dd>
                    <dd>
                        We are paying immediately after the contest, then again in 2 weeks for any residual sales. ** You must have a
                        <a href="https://peak10.fogbugz.com/default.asp?ixAttachment=30726&pg=pgDownload&pgType=pgFile&sFilename=W9_Form_Blank.pdf">W9</a> form
                        on file with us to get paid.  Download it here, fill it out and email it to
                        <a href="mailto:accounting@peak10publishing.com">
                            accounting@peak10publishing.com
                        </a> **
                    </dd>
                    <dd>
                        <strong>
                            CONTACT:
                        </strong>
                    </dd>
                    <dd>
                        If you need any assistance, contact Lyle at <a href="mailto:Affiliate@SurvivalFrog.com">Affiliate@SurvivalFrog.com</a>
                    </dd>
                </dl>
            </article>
            <!-- Solar Air Lantern panel -->
            <article role="tabpanel" class="tab-pane fade" id="solarAirLantern">
                <dl class="description">
                    <dt>New Solar Air Lantern</dt>
                </dl>
                <section role="tabpanel">
                    <!-- tabs inside panel of Solar Air Lantern -->
                    <?php
                    $myBanners->renderSubNavTabs($myBanners->subTabs["solarAirLanternTab"], "solarAirLanternTab");
                    ?>
                    <section class="tab-content">
                        <!-- Details -->
                        <article role="tabpanel" class="tab-pane fade in active" id="solarAirLanternDescription">
                            <dl class="description">
                                <aside class="product-albums">
                                    <?php
                                    $myBanners->renderProductAlbums("Solar Air Lantern", $myBanners->productAlbums["solarAirLantern"], "image/solarairlantern");
                                    ?>
                                </aside>
                                <dd>
                                    Survival Frog’s top selling product of 2014, Solar Air Lantern. Offered with multi-quantity and the Paracord Grenade as a bonus to purchasing multi-quantity.
                                </dd>
                                <dd><em>Offer: </em>
                                    $19.97 for 1 Solar Air Lantern, or $29.97 for 2 lanterns plus a free Paracord Grenade. Plus 1-click upsell funnel. Exit pops available.
                                </dd>
                                <dd>
                                    <em>Commissions: </em>
                                    Cost Per Action (CPA) $18 net on the entire sales funnel, including trial offers. No rebills.
                                </dd>
                                <dd>
                                    <em>
                                        Sales Page:
                                    </em>
                                    <a href="http://secure.peak10publishing.com/emergency-survival-lantern-2s.php" target="_blank">http://secure.peak10publishing.com/emergency-survival-lantern-2s.php</a>
                                </dd>
                            </dl>
                        </article>
                        <!-- Banners -->
                        <article role="tabpanel" class="tab-pane fade" id="solarAirLanternBanners">
                            <?php
                            $myBanners->renderBanners("Solar Air Lantern", $myBanners->salBanners, "image/solarairlantern", "sal-img-size-300-250");
                            ?>
                        </article>
                        <!-- Email -->
                        <article role="tabpanel" class="tab-pane fade" id="solarAirLanternEmail">
                            <section class="panel-group" id="solarAirLanternEmailOne" role="tablist"
                                     aria-multiselectable="true">
                                <?php
                                $myBanners->renderEmail($myBanners->emailList["solarAirLantern"],"solarAirLantern");
                                ?>
                            </section>
                        </article>
                        <!-- Generate Link -->
                        <article role="tabpanel" class="tab-pane fade in" id="solarAirLanternGenerateLink">
                        </article>
                    </section>
                </section>
            </article>
            <!-- Grenade panel -->
            <article role="tabpanel" class="tab-pane fade" id="grenade">
                <dl class="description">
                    <dt>Ultimate Paracord Survival Kit -- <em class="red">Paracord Grenade </em></dt>
                </dl>
                <section role="tabpanel">
                    <?php
                    $myBanners->renderSubNavTabs($myBanners->subTabs["grenadeTab"], "grenadeTab");
                    ?>
                    <section class="tab-content">
                        <!-- Details -->
                        <article role="tabpanel" class="tab-pane fade in active" id="grenadeDescription">
                            <dl class="description">
                                <aside class="product-albums">
                                    <?php
                                    $myBanners->renderProductAlbums("Paracord Grenade", $myBanners->productAlbums["grenade"], "image/grenade");
                                    ?>
                                </aside>
                                <dd>
                                    Free plus ship offer, the Paracord Grenade is one of our top selling products. An exclusive product only offered from Survival Frog, the grenade has 10 survival items wrapped up in 9 feet of 550 pound paracord and includes a card explaining the contents.
                                </dd>
                                <dd>
                                    <em>Offer: </em>Free plus shipping on the first grenade, plus multiple quantity purchases. Plus 1-click upsell funnel. Exit pops available.
                                </dd>
                                <dd>
                                    <em>Commissions: </em>Cost Per Action (CPA) $6 net on the entire sales funnel, including trial offers. No rebills.
                                </dd>
                                <dd>
                                    <em>
                                        Sales Page:
                                    </em>
                                    <a href="https://secure.peak10publishing.com/free-paracord-grenade.php" target="_blank">https://secure.peak10publishing.com/free-paracord-grenade.php</a>
                                </dd>
                            </dl>
                        </article>
                        <!-- Banners-->
                        <article role="tabpanel" class="tab-pane fade" id="grenadeBanners">
                            <?php
                            $myBanners->renderBanners("Grenade", $myBanners->grenadeBanners, "image/grenade", "sal-img-size-300-250");
                            ?>
                        </article>
                        <!-- Email -->
                        <article role="tabpanel" class="tab-pane fade" id="grenadeEmail">
                            <section class="panel-group" id="grenadeEmailOne" role="tablist"
                                     aria-multiselectable="true">
                                <?php
                                $myBanners->renderEmail($myBanners->emailList["grenade"],"grenade");
                                ?>
                            </section>
                        </article>
                        <!-- Generate Link-->
                        <article role="tabpanel" class="tab-pane fade in" id="grenadeGenerateLink">
                        </article>
                    </section>
                </section>
            </article>
            <!-- Patriotic Paracord-->
            <article role="tabpanel" class="tab-pane fade" id="patrioticParacord">
                <dl class="description">
                    <dt>Patriotic Paracord</dt>
                </dl>
                <section role="tabpanel">
                    <?php
                    $myBanners->renderSubNavTabs($myBanners->subTabs["patrioticParacordTab"], "patrioticParacordTab");
                    ?>
                    <section class="tab-content">
                        <!-- Details -->
                        <article role="tabpanel" class="tab-pane fade in active" id="patrioticParacordDescription">
                            <dl class="description">
                                <aside class="product-albums">
                                    <?php
                                    $myBanners->renderProductAlbums("Patriotic Paracord", $myBanners->productAlbums["patrioticParacord"], "image/patrioticparacord")
                                    ?>
                                </aside>
                                <dd>
                                    Free plus ship offer, the Patriotic Paracord is one of our top selling products. An exclusive product only offered from Survival Frog, the Patriotic Paracord bracelet has over 10 feet of 550 pound paracord and emergency whistle.
                                </dd>
                                <dd>
                                    <em>Offer: </em>Free plus shipping on the first Patriotic Paracord, plus multiple quantity purchases. Plus 1-click upsell funnel. Exit pops available.
                                </dd>
                                <dd>
                                    <em>Commissions: </em>Cost Per Action (CPA) $6 net on the entire sales funnel, including trial offers. No rebills.
                                </dd>
                                <dd>
                                    <em>
                                        Sales Page:
                                    </em>
                                    <a href="https://secure.peak10publishing.com/free-patriot-paracord.php" target="_blank">https://secure.peak10publishing.com/free-patriot-paracord.php</a>
                                </dd>
                            </dl>
                        </article>
                        <!-- Banners-->
                        <article role="tabpanel" class="tab-pane fade" id="patrioticParacordBanners">
                            <?php
                            $myBanners->renderBanners("Patriotic Paracord", $myBanners->patrioticParacordBanners, "image/patrioticparacord", "sal-img-size-300-250");
                            ?>
                        </article>
                        <!-- Email -->
                        <article role="tabpanel" class="tab-pane fade" id="patrioticParacordEmail">
                            <section class="panel-group" id="patrioticParacordEmailOne" role="tablist"
                                     aria-multiselectable="true">
                                <?php
                                $myBanners->renderEmail($myBanners->emailList["patrioticParacord"],"patrioticParacord");
                                ?>
                            </section>
                        </article>
                        <!-- Generate Link-->
                        <article role="tabpanel" class="tab-pane fade in" id="patrioticParacordGenerateLink">
                        </article>
                    </section>
                </section>
            </article>
            <!-- Cobra Belt -->
            <article role="tabpanel" class="tab-pane fade" id="cobraBelt">
                <dl class="description">
                    <dt>Cobra Belt</dt>
                </dl>
                <section role="tabpanel">
                    <?php
                    $myBanners->renderSubNavTabs($myBanners->subTabs["cobraBeltTab"], "cobraBeltTab");
                    ?>
                    <section class="tab-content">
                        <!-- Details -->
                        <article role="tabpanel" class="tab-pane fade in active" id="cobraBeltDescription">
                            <dl class="description">
                                <aside class="product-albums">
                                    <?php
                                    $myBanners->renderProductAlbums("Cobra Belt", $myBanners->productAlbums["cobraBelt"], "image/cobrabelt");
                                    ?>
                                </aside>
                                <dd>
                                    The Cobra Belt has over 128 feet of 550 pound paracord and has hundreds of survival uses.  When someone buys multiple belts, they receive a Survival Survival Card set as a bonus.
                                </dd>
                                <dd>
                                    <em>Offer: </em>$19.97 for 1 Cobra Belt, or $29.97 for 2 belts plus a free Survival Playing Cards. Plus 1-click upsell funnel. Exit pops available.
                                </dd>
                                <dd>
                                    <em>Commissions: </em>Cost Per Action (CPA) $6 net on the entire sales funnel, including trial offers. No rebills.
                                </dd>
                                <dd>
                                    <em>
                                        Sales Page:
                                    </em>
                                    <a href="https://secure.peak10publishing.com/cobra-paracord-belt.php" target="_blank">https://secure.peak10publishing.com/cobra-paracord-belt.php</a>
                                </dd>
                            </dl>
                        </article>
                        <!-- Banners-->
                        <article role="tabpanel" class="tab-pane fade" id="cobraBeltBanners">
                            <?php
//                            $myBanners->renderBanners("Grenade", $myBanners->grenadeBanners, "image/grenade", "sal-img-size-300-250");
                            ?>
                        </article>
                        <!-- Email -->
                        <article role="tabpanel" class="tab-pane fade" id="cobraBeltEmail">
                            <section class="panel-group" id="cobraBeltEmailOne" role="tablist"
                                     aria-multiselectable="true">
                                <?php
                                $myBanners->renderEmail($myBanners->emailList["cobraBelt"],"cobraBelt");
                                ?>
                            </section>
                        </article>
                        <!-- Generate Link-->
                        <article role="tabpanel" class="tab-pane fade in" id="cobraBeltGenerateLink">
                        </article>
                    </section>
                </section>
            </article>
            <!-- Lifestraw -->
            <article role="tabpanel" class="tab-pane fade" id="lifestraw">
                <dl class="description">
                    <dt>Lifestraw</dt>
                </dl>
                <section role="tabpanel">
                    <?php
                    $myBanners->renderSubNavTabs($myBanners->subTabs["lifestrawTab"], "lifestrawTab");
                    ?>
                    <section class="tab-content">
                        <!-- Details -->
                        <article role="tabpanel" class="tab-pane fade in active" id="lifestrawDescription">
                            <dl class="description">
                                <aside class="product-albums">
                                    <?php
                                    $myBanners->renderProductAlbums("Lifestraw", $myBanners->productAlbums["lifestraw"], "image/lifestraw")
                                    ?>
                                </aside>
                                <dd>
                                    The LifeStraw is one of the best selling survival products of all time.  Combined with a free Paracord Grenade from Survival Frog ($17 value), this offer is hard to resist for the survivalist.
                                </dd>
                                <dd>
                                    <em>Offer: </em>$19.97 for 1 LifeStraw, or $39.97 for 2 LifeStraws plus a free Paracord Grenade. Plus 1-click upsell funnel. Exit pops available.
                                </dd>
                                <dd>
                                    <em>Commissions: </em>Cost Per Action (CPA) $18 net on the entire sales funnel, including trial offers. No rebills.
                                </dd>
                                <dd>
                                    <em>
                                        Sales Page:
                                    </em>
                                    <a href="https://ts970.infusionsoft.com/go/lswf/aaffiliateID/TID" target="_blank">https://ts970.infusionsoft.com/go/lswf/aaffiliateID/TID</a>
                                </dd>
                            </dl>
                        </article>
                        <!-- Banners-->
                        <article role="tabpanel" class="tab-pane fade" id="lifestrawBanners">
                            <?php
                            //$myBanners->renderBanners("Grenade", $myBanners->grenadeBanners, "image/grenade", "sal-img-size-300-250");
                            ?>
                        </article>
                        <!-- Email -->
                        <article role="tabpanel" class="tab-pane fade" id="lifestrawEmail">
                            <section class="panel-group" id="lifestrawEmailOne" role="tablist"
                                     aria-multiselectable="true">
                                <?php
                                $myBanners->renderEmail($myBanners->emailList["lifestraw"],"lifestraw");
                                ?>
                            </section>
                        </article>
                        <!-- Generate Link-->
                        <article role="tabpanel" class="tab-pane fade in" id="lifestrawGenerateLink">
                        </article>
                    </section>
                </section>
            </article>
            <!-- Playing Cards -->
            <article role="tabpanel" class="tab-pane fade" id="playingCards">
                <dl class="description">
                    <dt>Playing Cards</dt>
                </dl>
                <section role="tabpanel">
                    <?php
                    $myBanners->renderSubNavTabs($myBanners->subTabs["playingCardsTab"], "playingCardsTab");
                    ?>
                    <section class="tab-content">
                        <!-- Details -->
                        <article role="tabpanel" class="tab-pane fade in active" id="playingCardsDescription">
                            <dl class="description">
                                <aside class="product-albums">
                                    <?php
                                    $myBanners->renderProductAlbums("Playing Cards", $myBanners->productAlbums["playingCards"], "image/playingcards")
                                    ?>
                                </aside>
                                <dd>
                                    Free plus ship offer, the Survival Playing Cards make for a great gift. An exclusive product only offered from Survival Frog, the Survival Playing Cards offer 52 disaster scenarios and survival tips.
                                </dd>
                                <dd>
                                    <em>Offer: </em>Free plus shipping on the first set of playing cards, plus multiple quantity purchases. Plus 1-click upsell funnel. Exit pops available.
                                </dd>
                                <dd>
                                    <em>Commissions: </em>Cost Per Action (CPA) $6 net on the entire sales funnel, including trial offers. No rebills.
                                </dd>
                                <dd>
                                    <em>
                                        Sales Page:
                                    </em>
                                    <a href="http://freesurvivalplayingcards.com/" target="_blank">http://freesurvivalplayingcards.com/</a>
                                </dd>
                            </dl>
                        </article>
                        <!-- Banners-->
                        <article role="tabpanel" class="tab-pane fade" id="playingCardsBanners">
                            <?php
                            //$myBanners->renderBanners("Grenade", $myBanners->grenadeBanners, "image/grenade", "sal-img-size-300-250");
                            ?>
                        </article>
                        <!-- Email -->
                        <article role="tabpanel" class="tab-pane fade" id="playingCardsEmail">
                            <section class="panel-group" id="playingCardsEmailOne" role="tablist"
                                     aria-multiselectable="true">
                                <?php
                                $myBanners->renderEmail($myBanners->emailList["playingCards"],"playingCards");
                                ?>
                            </section>
                        </article>
                        <!-- Generate Link-->
                        <article role="tabpanel" class="tab-pane fade in" id="playingCardsGenerateLink">
                        </article>
                    </section>
                </section>
            </article>
            <!-- Emergency Survival Blanket -->
            <article role="tabpanel" class="tab-pane fade" id="emergencySurvivalBlanket">
                <dl class="description">
                    <dt>Emergency Survival Blanket</dt>
                </dl>
                <section role="tabpanel">
                    <?php
                    $myBanners->renderSubNavTabs($myBanners->subTabs["emergencySurvivalBlanketTab"], "emergencySurvivalBlanketTab");
                    ?>
                    <section class="tab-content">
                        <!-- Details -->
                        <article role="tabpanel" class="tab-pane fade in active" id="emergencySurvivalBlanketDescription">
                            <dl class="description">
                                <aside class="product-albums">
                                    <?php
                                    $myBanners->renderProductAlbums("Emergency Survival Blanket", $myBanners->productAlbums["emergencySurvivalBlanket"], "image/emergencysurvivalblanket")
                                    ?>
                                </aside>
                                <dd>
                                    Free plus ship offer, the Emergency Survival Blanket is something every survivalist needs in their go bag.
                                </dd>
                                <dd>
                                    <em>Offer: </em>Free plus shipping on the first blanket, plus multiple quantity purchases. Plus 1-click upsell funnel. Exit pops available.
                                </dd>
                                <dd>
                                    <em>Commissions: </em>Cost Per Action (CPA) $6 net on the entire sales funnel, including trial offers. No rebills.
                                </dd>
                                <dd>
                                    <em>
                                        Sales Page:
                                    </em>
                                    <a href="https://secure.peak10publishing.com/emergency-suvival-blanket-free-v2.php" target="_blank">https://secure.peak10publishing.com/emergency-suvival-blanket-free-v2.php</a>
                                </dd>
                            </dl>
                        </article>
                        <!-- Banners-->
                        <article role="tabpanel" class="tab-pane fade" id="emergencySurvivalBlanketBanners">
                            <?php
                            $myBanners->renderBanners("Grenade", $myBanners->emergencySurvivalBlanketBanners, "image/emergencysurvivalblanket", "sal-img-size-300-250");
                            ?>
                        </article>
                        <!-- Email -->
                        <article role="tabpanel" class="tab-pane fade" id="emergencySurvivalBlanketEmail">
                            <section class="panel-group" id="emergencySurvivalBlanketEmailOne" role="tablist"
                                     aria-multiselectable="true">
                                <?php
                                $myBanners->renderEmail($myBanners->emailList["emergencySurvivalBlanket"],"emergencySurvivalBlanket");
                                ?>
                            </section>
                        </article>
                        <!-- Generate Link-->
                        <article role="tabpanel" class="tab-pane fade in" id="emergencySurvivalBlanketGenerateLink">
                        </article>
                    </section>
                </section>
            </article>
        </section>
    </section>

</section>
<?php
// add custom script. Just add the relative path of the script.
$customScript = array(
    "js/ZeroClipboard.js",
    "scripts/my.js"
);
include_once("includes/footer.php");
?>
</body>
</html>