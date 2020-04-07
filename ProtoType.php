<?php 
    $movies_arr = array("Full Metal Jacket (1987)", "Hacksaw ridge (2016)", "Valkyrie (2008)", "War Horse (2011)", "Enemy at the Gates (2001)", "The Thin Red Line (1998)", "The English Patient (1996)", "Downfall (2004)", "The Good the Bad and the Ugly (1966)", "Once upon a time in the West (1968)", "The Ballad of Buster Scruggs (2018)", "Dances with Wolves (1990)", "Butch Cassidy and the Sundance Kid (1969)", "The Searchers (1956)", "The Man Who Shot Liberty Valance (1962)", "The Assassination of Jesse James by the cowered Robert Ford (2007)", "The Wild Punch (1969)", "Ned Kelly (2003)", "Django unchained (2012)", "The Matrix 1&2&3 (2003-2005)", "Annihilation (2018)", "Interstellar (2014)", "Arrival (2016)", "The Martian (2015)", "Bicentennial Man (1999)", "Contact (1997)", "A Clockwork Orange (1971)", "Passengers (2016)", "Lucy (2014)", "The Final Cut (2004)", "Back to the future 1&2&3 (1985-1989)", "12 Monkeys (1995)", "Looper (2012)", "Predisposition (2014)", "About Time (2013)", "The Lake House (2006)", "The Jacket(2005)", "The Godfather (1&2&3)", "Once Upon a Time in America (1984)", "Scarface (1983)", "Donnie Brasco (1997)", "Casino (1995)", "Miller’s Crossing (1990)", "A Bronx Tale (1993)", "American Gangster (2007)", "Mean Streets (1973)", "Carlito’s Way (1993)", "The Departed (2006)", "Pulp Fiction (1994)", "Her (2013)", "Lost in Translation (2003)", "Good Will Hunting (1997)", "Forrest gump (1994)", "Cast Away (2000)", "Green Mile (1999)", "Eternal Sunshine of Spotless Mind (2004)", "The curios case of Benjamin button (2008)", "The Shawshank redemption (1994)", "Pride and Predjudice (2005)", "One Flew Over the Cuckoo’s Nest (1975)");
        $animated_arr = array("A Silent Voice (2016)", "5 Centimeters Per Second (2007)", "Children Who Chase Lost Voices (2011)", "The Anthem of the Heart (2015)", "I Want to Eat Your Pancreas (2018)", "A Letter to Momo (2011)", "Wall.E (2008)", "Toy story (1&2&3&4)");
        $series_arr = array("Vikings", "The Crown", "Better Call Saul", "Russian Doll", "Peaky Blinder", "The Witcher", "Stanger things", "Ozark", "Game of Thrones", "Hannibal", "Breaking Bad");
        $games_array = array("Skyrim", "Pokemon Series", "Battle Chasers:Night War", "Evoland 1&2", "Death Road to Canada", "Star Wars: Knights of the Old Republic", "Call of Duty Mobile", "JYDGE", "PUBG Mobile", "Tesla vs Lovecraft", "Chameleon Run", "Holedown", "Monument Valley 1 & 2", "The Room: Old Sins", "Vectronom", "Castlevania: Symphony of the Night", "Dandara", "Grimvalor", "Oddmar", "Suzy Cube", "Majesty", "Mindustry", "Mini Metro", "Reigns: Her Majesty", "XCOM: Enemy Within", "SIMS", "Asphalt 9:Legends", "GRID Autosport", "Mario Kart Tour", "Riptide Gp:Renegade", "Grand Theft Auto:San Andreas", "Graveyard Keeper", "Stardew Valley", "Godus", "Australian Open Game", "eFootball Pes 2020", "Madden NFL Mobile Football", "MLB Nine Innings 2020", "NBA 2K20", "Harry Potter:Wizards Unite", "Pokemon GO", "Retro Highways", "Undead Horde", "Fortnite", "P.3", "Stardew Valley", "Gods of Boom");
        $book_reading_sites_arr = array("Bookish", "Google Books", "Internet Archive", "Open Library", "Project Gutenberg", "Scribd", "Smashwords", "Wattpad");
        $book_reading_sites_url = array("https://bookish.netgalley.com/", "https://books.google.com/", "https://archive.org/", "https://openlibrary.org/", "https://www.gutenberg.org/", "https://www.scribd.com/?lohp=2", "https://www.smashwords.com/", "https://www.wattpad.com/" );
        $audiobooks_array = array("Librivox", "Lit2Go", "Loyal Books", "Mind Webs", "Open Culture", "Open drive", "Podiobooks");
        $audiobooks_url_array = array("https://librivox.org/", "https://etc.usf.edu/lit2go/", "http://www.loyalbooks.com/", "https://archive.org/details/Mindwebs_230", "http://www.openculture.com/", "https://www.overdrive.com/", "https://scribl.com/info/podiobooks-now-scribl");
$movie_review_sites = array("Rotten Tomatoes", "IMDb", "Metacritic", "Movie Review Query Engine", "FilmCrave", "Filmsite", "PopMatters", "Mubi", "Bloody Disgusting");
        $movie_review_sites_url = array("https://www.rottentomatoes.com/", "https://www.imdb.com/", "https://www.metacritic.com/", "https://www.mrqe.com/", "https://www.filmcrave.com/", "https://www.filmsite.org/", "https://www.popmatters.com/", "https://mubi.com/", "https://bloody-disgusting.com/");
        
        $C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("ERROR");
       // echo "Length: ".sizeof($book_reading_sites_arr);
        $sql = "SELECT * FROM life_in_lockdown_data";
        $R = mysqli_query($C, $sql);
        while($res = mysqli_fetch_array($R)){
            if($res['life_in_lockdown_data_link']!='')
                echo $res['life_in_lockdown_data_category']."<br>";
        }
        
        
        

?>
<br>

        <h2>Learn to code</h2>
        <!-- <img src="code.jpg" height=50% width=80% ><br> -->
        <p>In an increasingly digital age, the ability to code can put you at a major advantage. Ditch those technophobic tendencies and teach yourself how to master this highly sought after skill. </p>
<br>
        <h2>Start a blog</h2>
        <!-- <img src="blog.jpg" height=50% width=80%><br> -->

        <p>You can never go wrong with writing a blog. Whether you're using it as an online writing portfolio, a space to share your passions or as an opportunity to try something new, it's time to get those creative juices flowing.</p>
        <br>
   
        <h2>Organise your wardrobe</h2>
        <!-- <img src="wardrobe.jpg" height=50% width=80%> -->
        <p>Most of us have at least one dress that we know we'll never wear again or a pair of jeans that just don't fit the way they used to. It's time to declutter your wardrobe and get rid of those sad pieces that no longer see the light of day. Either pass them onto friends and family, donate them to charity or at the very least, find your nearest clothing bank and recycle.</p>


    
        











        

        </div>

      </div>
    </section>
