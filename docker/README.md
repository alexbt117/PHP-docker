This is a dockerized application and requires having pre-installed docker engine and docker-compose orchestration tool. It is comprised of 3 separate containers. One for httpd, one for php and one for mysql.

Also ports 8080 and 3306 should be free to use on the host.
Firstly get the application from my github page and extract the .zip somewhere, otherwise if you git cloned it, cd into the docker directory. 
Inside the docker directory, where you will find the docker-compose.yml file, open a terminal and run the following command to build the containers for the first time and to start them.
docker-compose up
The containers should be up by this point and the app is accessible in the url: http://localhost:8080 

Alex Babounis-Tsatsos, MTE2118

