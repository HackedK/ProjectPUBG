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
