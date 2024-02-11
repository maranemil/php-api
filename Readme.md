

Start container

~~~shell
/usr/bin/docker-compose -f docker-compose.yml -p php-api up -d
~~~

Stop container

~~~shell
/usr/bin/docker-compose -f docker-compose.yml -p php-api stop php-api
~~~

Hello API

~~~shell
xdg-open  http://localhost:8082/index.php
~~~

heartbeat

~~~shell
xdg-open  http://localhost:8082/index.php/api/heartbeat
~~~
