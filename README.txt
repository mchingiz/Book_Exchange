# Introduction
---------------------------------------------
Project Name: Book Exchange
Members: Chingiz Mammadli, Nigar Jafarova, Sanam Ganbarova, Ayaz Sadigli, Bahruz Aydinli





# Notes
---------------------------------------------
All the steps have been tested on a virtual machine running on Oracle VM Virtualbox(Windows 10, 4 GB Ram, 28 gb storage)




# Prerequisites
---------------------------------------------
1. Download and install latest chrome version from this link: https://www.google.com/chrome

2.1 Download XAMPP from this link: https://www.apachefriends.org/xampp-files/5.6.39/xampp-win32-5.6.39-0-VC11-installer.exe
2.2 Install XAMPP and choose C:/xampp as installation folder.
2.3 After installation, start 'Apache' and 'MySQL' modules by clicking 'start' button of each module

3. Download and install composer from this link: https://getcomposer.org/Composer-Setup.exe

4. Download and install Node.js from this link: https://nodejs.org/dist/latest-v6.x/node-v6.15.1-x86.msi

5. Copy project folder to C: disk. The path of the project folder should be 'C:/Book_Exchange'


After all above steps are completed, we can move on to run the application




# Configurations(once only)
---------------------------------------------
1.1 Navigate to C:/xampp folder, find 'xampp-control' and run that program.
1.2 Start 'Apache' and 'MySQL' services by clicking 'start' button in front of them.

2.1 Open chrome and navigate to 'localhost/phpmyadmin'
2.2 Click to 'new' button from the menu at the left
2.3 Write 'book_exchange' as database name and click to 'create' button

3. Click 'Windows' button and search for 'Command Prompt'
4. Open 'Command Prompt' and run below commands
	4.1 "cd C:/Book_Exchange"
	4.2 "composer install" (can take quite a while) (run once again if fails)
	4.3 "php artisan key:generate"
	4.4 "php artisan migrate"
	4.5 "php artisan db:seed"
	4.6 "php artisan dusk:update"
	4.7 "npm install"
	4.8 "npm i nodemon -g"




# Running the project
---------------------------------------------
1.1 Navigate to C:/xampp folder, find 'xampp-control' and run that program.
1.2 Start 'Apache' and 'MySQL' services by clicking 'start' button in front of them. Ignore this step if they already run.

2. Open 'Command Prompt' and run command 'cd C:/Book_Exchange'
3. Run the command "php artisan serve" and do not close this window or stop the execution
4. Open new 'Command Prompt' and run command 'cd C:/Book_Exchange'
5. Run the command "nodemon chat.js" and do not close this window or stop the execution

Now the project is accesible at 'localhost:8000' address