#Setting Up WP Development environment
##Servers
For running wordpress an http server with php enabled and a MySQL server need to be run on the local system. For this tutorial will will be installing both via [XAMPP](https://www.apachefriends.org/index.html).

First you must download XAMPP. The link above will take you to the page where you pick the OS you are installing for. XAMPP is available for all 3 major OS's but the tutorial was written based off installation experiance obtained from Ubuntu. After the file has downloaded, run the executable. For linux the executable will first have to be given execute permissions (chmod +x filename) and then run as root (sudo ./filename). The installer will take you through the install steps, this tutorial will just give recommended settings. They can differ from this tutorial but do not change them unless you know what you are doing. For select components, the developer files should not need to be downloaded but this tutorial still does just in case. Uncheck the learn more about binami for XAMPP. Bitnami claims to help the installation process for wordpress, however the install for wordpress is not difficult and it avoids having to trust another installer. Wait for the installation to complete. After the install completes leave the open XAMPP checkbox checked and click finish.

##Configuration of servers
Now that the servers are install it is time for configuration. To set passwords and things first run "sudo /opt/lampp/xampp security". This tutorial recommends setting a password on all things provided. The passwords will not show up as anything but you are still typing. Make sure to lauch any services before trying to set a password. After setting the passwords, using either a file browser or text interface navigate to /opt/lampp/htdocs. There are some files in here but they can all be safely deleted.

A quick side note: XAMPP comes with phpMyAdmin which is an amazing graphical MySQL client that can be acessed via localhost/phpmyadmin. The actual location on disk is /opt/lampp/phpmyadmin and that should not be changed.

##Installation of wordpress
First, wordpress must be [downloaded](http://wordpress.org/latest.zip), and then the zip file extracted. After the zip file is extracted the contents need copied into the htdocs folder. Please note: the htdocs folder should not have a wordpress folder in in. The contents of the htdocs folder should be a bunch of php files with a few folders not just a single folder. If it happens to be a single folder the contents of that folder probably need to be moved up one level. Next navigate to localhost/phpmyadmin. The login credentials are root and whatever password you set erlier for the MySQL root password. The left pane contains a list of databases and at the top it says "New", click there. At the top where it has the field that says "Database Name" put wordpress and click Create. Next, Direct your browser to localhost and click let's go. Username should be changed to root and the password set at whatever you set the MySQL password to be. If XAMPP does not have write permission to the htdocs folder you will get an error saying that it cannot create the file and it will have to be manually created. Go to the htdocs folder and make a file called wp-config.php and put the contents of the text box in it. Once the file has been saved click run the install. The next page of information will probably get overridden when the database dump loads but for now they must be set.

##Loading the DB Dump
Download the dump.sql file from the github repository.  Next run mysql -u root -p < dump.sql. This should load a database that is testing ready.

The login information for the provided database dump: robodogs 435FRC

##Import the theme
First, fork the main repository into your personal account if that has not been done. Copy the clone URL of your private repository. In a text interface navigate to htdocs/wp-content/themes and run git clone (url). Next run mv (new dir name) RoboTheme and load up the working website.
