<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vinyle extends Model
{
    public static function getAllVinyles(){
        return [
            [
                'id' => 1,
                'title' => 'Thriller',
                'artist' => 'Michael Jackson',
                'year' => 1982,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/5/55/Michael_Jackson_-_Thriller.png',
                'description' => 'Thriller is the sixth studio album by American singer Michael Jackson, released on November 30, 1982 by Epic Records. Reunited with Off the Wall producer Quincy Jones, Jackson was inspired to create an album where "every song was a killer". With the ongoing backlash against disco, Jackson moved in a new musical direction, incorporating pop, post-disco, rock and funk. Thriller foreshadows the contradictory themes of Jackson\'s later works, exploring themes of heroism and horror, chaos and order. The album features a single guest appearance, with Paul McCartney becoming the first artist to be featured on Jackson\'s albums. Recording took place from April to November 1982 at Westlake Recording Studios in Los Angeles with a production budget of $750,000.',
                'label' => 'Epic Records'
            ],
            [
                'id' => 2,
                'title' => 'Back in Black',
                'artist' => 'AC/DC',
                'year' => 1980,
                'image' => 'https://www.levinyleclub.com/wp-content/uploads/2020/09/41kj36cVMFL.jpg',
                'description' => 'Back in Black is the seventh studio album by Australian rock band AC/DC. It was released on 25 July 1980 by Albert Productions and Atlantic Records. It is the band\'s first album to feature lead singer Brian Johnson, following the death of previous lead singer Bon Scott. After the commercial breakthrough of their 1979 album Highway to Hell, AC/DC was planning to record a follow-up, but in February 1980, Scott died from alcohol poisoning after a drinking binge. Instead of disbanding, they decided to continue on and recruited Johnson, who was previously vocalist for Geordie.',
                'label' => 'Atlantic Records'
            ],
            [
                'id' => 3,
                'title' => 'The Dark Side of the Moon',
                'artist' => 'Pink Floyd',
                'year' => 1973,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/3/3b/Dark_Side_of_the_Moon.png',
                'description' => 'The Dark Side of the Moon is the eighth studio album by the English rock band Pink Floyd, released on 1 March 1973 by Harvest Records. Primarily developed during live performances, the band premiered an early version of the record several months before recording began. New material was recorded in two sessions in 1972 and 1973 at Abbey Road Studios in London.',
                'label' => 'Harvest Records'
            ],
            [
                'id' => 4,
                'title' => 'The Bodyguard',
                'artist' => 'Whitney Houston',
                'year' => 1992,
                'image' => 'https://m.media-amazon.com/images/I/71s+c6-ne1L._UF1000,1000_QL80_.jpg',
                'description' => 'The Bodyguard: Original Soundtrack Album is a soundtrack album from the film of the same name, released on November 17, 1992, by Arista Records. The album\'s first side (in its original LP configuration) features songs by Whitney Houston, while side two features the work of numerous other artists. The album was co-executive produced by Whitney Houston and Clive Davis and has become one of the best-selling albums of all time. The soundtrack was the first album verified by the Nielsen SoundScan computerized sales monitoring system to have sold more than a million units within a one-week period.',
                'label' => 'Arista Records'
            ],
            [
                'id' => 5,
                'title' => 'Led Zeppelin IV',
                'artist' => 'Led Zeppelin',
                'year' => 1971,
                'image' => 'https://m.media-amazon.com/images/I/81x364UAGAL._UF1000,1000_QL80_.jpg',
                'description' => 'Led Zeppelin IV is the fourth studio album by the English rock band Led Zeppelin. It was released on 8 November 1971 by Atlantic Records. The album was produced by guitarist Jimmy Page and recorded between December 1970 and February 1971, largely in a remote house in Wales called Bron-Yr-Aur. It is the second Led Zeppelin album recorded at the location, the first being Led Zeppelin III. The album features many of the band\'s most famous songs, including "Black Dog", "Rock and Roll", "Misty Mountain Hop", "Going to California", and the band\'s signature song, "Stairway to Heaven".',
                'label' => 'Atlantic Records'
            ],
            [
                'id' => 6,
                'title' => 'Rumours',
                'artist' => 'Fleetwood Mac',
                'year' => 1977,
                'image' => 'https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/7/5/3/0093624979357/tsp20120921114951/Rumours.jpg',
                'description' => 'Rumours is the eleventh studio album by British-American rock band Fleetwood Mac, released on 4 February 1977 by Warner Bros. Records. Largely recorded in California in 1976, it was produced by the band with Ken Caillat and Richard Dashut. The band wanted to expand on the commercial success of their eponymous 1975 album, but struggled with relationship breakups before recording started. The Rumours studio sessions were marked by hedonism and strife among band members that shaped the album\'s lyrics.',
                'label' => 'Warner Bros. Records'
            ],
            [
                'id' => 7,
                'title' => 'Born to Die',
                'artist' => 'Lana Del Rey',
                'year' => 2012,
                'image' => 'https://m.media-amazon.com/images/I/71suvc+cBKL._UF1000,1000_QL80_.jpg',
                'description' => 'Born to Die is the second studio album and major label debut by American singer-songwriter Lana Del Rey. It was released on January 27, 2012 by Interscope Records and Polydor Records. Del Rey collaborated with producers including Patrik Berger, Jeff Bhasker, Chris Braide, Emile Haynie, Justin Parker, Rick Nowels, Robopop, and Al Shux to achieve her desired sound. Their efforts resulted in a primarily baroque pop record, which sees additional influences from alternative hip hop, indie pop and trip hop music.',
                'label' => 'Interscope Records'
            ],
            [
                'id' => 8,
                'title' => 'The Wall',
                'artist' => 'Pink Floyd',
                'year' => 1979,
                'image' => 'https://cdn.cultura.com/cdn-cgi/image/width=830/media/pim/TITELIVE/44_5099902988313.jpg',
                'description' => 'The Wall is the eleventh studio album by the English rock band Pink Floyd, released on 30 November 1979 by Harvest and Columbia Records. It is a rock opera that explores Pink, a jaded rockstar whose eventual self-imposed isolation from society forms a figurative wall. The album was a commercial success, topping the US charts for 15 weeks, and reaching number three in the UK. It initially received mixed reviews from critics, many of whom found it overblown and pretentious, but later received accolades as one of the greatest albums of all time.',
                'label' => 'Harvest Records'
            ],
            [
                'id' => 9,
                'title' => 'Hotel California',
                'artist' => 'Eagles',
                'year' => 1976,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/4/49/Hotelcalifornia.jpg',
                'description' => 'Hotel California is the fifth studio album by American rock band the Eagles. The album was recorded by Bill Szymczyk at the Criteria and Record Plant studios between March and October 1976, and then released on Asylum in December. It was their first album with guitarist Joe Walsh, who had replaced founding member Bernie Leadon, and is the last album to feature bassist Randy Meisner. The front cover is a photograph of the Beverly Hills Hotel by David Alexander.',
                'label' => 'Asylum Records'
            ],
            [
                'id' => 10,
                'title' => 'The Beatles',
                'artist' => 'The Beatles',
                'year' => 1968,
                'image' => 'https://static.fnac-static.com/multimedia/Images/FR/NR/08/58/5d/6117384/1507-1/tsp20140701110722/White-album-Edition-limitee-mono180g.jpg',
                'description' => 'The Beatles, also known as "The White Album", is the ninth studio album by the English rock band the Beatles, released on 22 November 1968. A double album, its plain white sleeve has no graphics or text other than the band\'s name embossed, which was intended as a direct contrast to the vivid cover artwork of the band\'s previous LP Sgt. Pepper\'s Lonely Hearts Club Band. Although no singles were issued from The Beatles in Britain and the United States, the songs "Hey Jude" and "Revolution" originated from the same recording sessions and were issued on a single in August 1968. The album\'s songs range in style from British blues and ska to tracks influenced by Chuck Berry and by Karlheinz Stockhausen.',
                'label' => 'Apple Records'
            ]
        ];
    }

    public static function find(int $id){
        return self::getAllVinyles()[$id - 1];
    }
}
