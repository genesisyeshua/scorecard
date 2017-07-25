# scorecard
service availability portal beta
1. Setup XAMPP in localhost: 

https://www.apachefriends.org/download.html

2. Start Apache, Mysql

3. Extract the scorecard folder in: 
C:\xampp\htdocs\

4. It should look like: C:\xampp\htdocs\scorecard\pages

5. Go to http://localhost/phpmyadmin/
Click New: 
to create a new database, name it as: sla
Inside 'sla', Go to Import tab
And import the sla.sql file from the scorecard folder

6. Access in the browser: 
******************************************************
http://localhost/scorecard/pages/main.php
Shows the input form
******************************************************
http://localhost/scorecard/pages/all_entries.php
Shows all the entries, what the database have
******************************************************

7. Main.php variables:
service_name
ticket
downtime
date

8. Mostly, the changed files were in the:
- main.php
- all_entries.php
- update.php
