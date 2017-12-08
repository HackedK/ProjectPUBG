<?php

require "config.php";

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);

// read json contents
$file = "output.json";
$json = file_get_contents($file);

//convert json to php array
$data = json_decode($json, true);

//            name: data.playerName,
//            region: data.region,
//            season: data.season,
//            match: data.match,
//            update: data.lastUpdated,
//            rate: data.skillRating.rating,
//            rounds: data.performance.roundsPlayed,
//            win: data.performance.wins,
//            top10: data.performance.top10s,
//            kill: data.combat.kills,
//            suidice: data.combat.suicides,
//            teamkill: data.combat.teamKills,
//            headshot: data.combat.headshotKills,
//            roadkill: data.combat.roadKills,
//            assist: data.combat.assists

$name = $data['playerName'];
$region = $data['region'];
$season = $data['season'];
$match = $data['match'];
$update = $data['lastUpdated'];
$rate = $data['skillRating']['rating'];
$rounds = $data['performance']['roundsPlayed'];
$wins = $data['performance']['wins'];
$top10 = $data['performance']['top10s'];
$kills = $data['combat']['kills'];
$suidices = $data['combat']['suicides'];
$teamkills = $data['combat']['teamKills'];
$headshots = $data['combat']['headshotsKills'];
$roadkills = $data['combat']['roadKills'];
$assists = $data['combat']['assists'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// A function for general queries.
function query_to_db($conn, $sql){
    $result = mysqli_query($conn, $sql);

    if ($result) {   
        echo "Your query was successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$sql = "INSERT INTO pubg (name, region, season, match, update, rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists) VALUES ($name, $region, $season, $match, $update, $rate, $rounds, $wins, $top10, $kills, $suicides, $teamkills, $headshots, $roadkills, $assists)";

query_to_db($conn, $sql);

mysqli_close($conn);
?>


