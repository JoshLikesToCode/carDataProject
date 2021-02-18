
What I did for this project was create an app that will collect information from our DataScript.sh, feed this information into various data tables (one for sessions and another for actual hard data) , display these data tables on a simple to use GUI (the website), and add filters so the data can be easily browsed through. 

In this write up, I’m including the Setup directions and at the very end of the write up, I will include the necessary screen shots with brief descriptions on them.

Setup:
For the setup please launch the data files in the VM box running on 960x500 resolution. The add-ons I used for this project include:
Node, Express, Express-sessions, MySQL, phpMyAdmin (with strict mode disabled, which I will explain how to achieve below), and Moment.

To install node use the following command:
Sudo npm install node

To Install express use the following command:
Sudo npm install express

To Install express-sessions:
Sudo npm install express-session

To Install MySQL:
Sudo apt install mysql-server
To Install phpMyAdmin:
Sudo apt-get install phpMyAdmin

Note on how to set up database, tables, and turn off strict mode in phpmyadmin:
Go to phpMyAdmin homepage by typing in the firefox url “localhost/phpmyadmin” on the VM and once logged in (username “root”, password “root” for this project) click the More tab on the far right and browse down to Variables (screen shot included below)

After we get to the variable screen, search for sql mode in the search bar and then click on Edit and edit the Session value / Global Value so that it says NO_AUTO_CREATE_USER, NO_ENGINE_SUBSTITUTION. Screen shot below gives a better idea on how to navigate this part.
 

Your database should now have strict mode off, note that you have to make this edit to phpMyAdmin once every 24hours or so. For further information on strict mode and phpmyadmin please check out this stackoverflow link: 
https://stackoverflow.com/questions/37964325/how-to-find-and-disable-mysql-strict-mode

Now, let’s set up our database. My database is cars and my two data tables are sessions and cars. I will include screen shots of these data tables below so that you may easily recreate them.

