# 345ISH


# Setting up XAMPP Server

What is XAMPP: compilation of free software that includes the web server Apache, the relational database management system MySQL and the scripting language PHP

Apache: open source web server 
MySQL: relational database management system that can be used in combination with Apache and the scripting language PHP
PHP: server-side programming language that allows users to create dynamic websites and applications

Installing XAMPP

1. Install XAMPP from https://www.apachefriends.org/de/download.html
2. Run the .exe file for download 
3. Start the setup wizard 
4. Choose the software you want to install (I did them all)
5. Keep the installation directory at C:\xampp
6. Start the installation process
7. Enable communication between Apache server and PRIVATE network
8. Done!

Testing your Server
1. Click start on Apache and MySQL in XAMPP Control Panel
2. Navigate to C:xampp/htdocs
3. Create a folder named test 
4. Create a file named test.php
5. Include this test code:
 ```
 <html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
  <?php echo '<p>Hello World</p>'; ?>
 </body>
</html>
```

6. Check to see if your PHP page is loading by going to localhost/test/test.php in your browser
7. Hello World should appear if everything is working!

Resources followed: https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/

# Creating a mySQL Database with phpmyAdmin

Once you have successfully downloaded XAAMP and tested your test.php file, you are ready to check out our web form!
In order to access our web form, you must locally create a database of users to be able to login to our website

1. Navigate to XAMPP and start the Apache and MySQL modules
2. Navigate to http://localhost/phpmyadmin
3. You will see a number of tabs such as Database, SQL, User Accounts etc. - you will be able to create a      database scheme here!
4. Click on the 'database' tab and click the create database button 
5. This is very important- name your database schema users_ish 
6. After your database is succesfully created, you have to create tables to store information
7. In the created database (users_ish), click on the 'structure' tab and click 'create table'
8. This is very important - name your table 'users' with 2 columns
9. Name your columns 'username' and 'password' - both will be of type varchar(100) and username can be a      primary key
10. You can create as many rows as you wish and can have any username and passwords you would like
11. These are the usernames and passwords that will allow you to use the login form provided
