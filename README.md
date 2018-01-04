# ProjectPUBG
---------------------------------------------------------------------------------------------------------------------------
  Player Unknown Battleground is a survival game released 2017, and it was successful to bring a lot of users during early access season. Users in the game compete with others by farming items and surviving in the island. Due to the characteristics of the game, the game statistics like winning rate, killing rate is meaningful to the players; however, users can only check their statistics in game when they logged in to the game. This causes information accessibility problem due to the authentication. 
  Therefore, we are trying to extract the information from the game so that users can check their rate outside of the game using the website we created. Now, users will have the opportunity to check their status (or anyone else) online outside the game, which would be a lot more convenient than checking during the game, especically since you may not play one player ever again and wanted to check their status.   
--------------------------------------------------------------------------------------------------------------------------
requirement:
1. Node JS
2. redis server configuration
3. API-key (available in https://pubgtracker.com/site-api)
---------------------------------------------------------------------------------------------------------------------------
# User Manual

By using this application, the user can access statistics from PlayerUnknown's Battlegrounds without logging into the game.


Retrieving the Game Stats:

- Type a player name into the search box and click "search". This retrieves the data that matches the corresponding name in the database.

![Homepage](Homepage_Screenshot.png)

- The results are then displayed in a table and broken down into three columns for general gameplay information, wins, and kills.

![Results](Results_Screenshot.png)
----------------------------------------------------------------------------------------------------------------------------
# ProjectPUBG Developer Manual

<b>Open the index file using Chrome</b>

This document explains how to access to specific functions of the app, and modify for the need.

<b>Changing the background image</b>
•	projectPUBG/CSS/
this folder contains the default background image and can save other image files for the use.
•	projectPUBG/index.html
this file is the front view page where user sees when they open the app. Styling can be modified. Also sending username to select.php file using ajax call.

<b>Customize output result</b>
•	projectPUBG/Data/Config/config.php
this file contains database configuration, server name, username, password, database name.
•	projectPUBG/select.php
this file communicates with database server and retrieves data based on user input. Developer can customize output result for his taste.

<b>Visualization page</b>
Visualizing data runs via ajax call from index.html
•	projectPUBG/display.php
receives data from index.html using $_GET[‘value’]. It is available to modify values to display other values.

