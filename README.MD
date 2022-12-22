# Docker For PHP Development (Nginx, PHP8, MariaDB, Xdebug)

## Let's start

Create project directory and clone repository:
```
mkdir <project directory>
cd <project directory>
git clone git@github.com:web-ruslan/docker-php-development-container.git .
```
get your IP
```
hostname -I | cut -d' ' -f1
```
Write your IP in `PHP.Dockerfile` (line 28)
```
    && echo "xdebug.client_host=<your IP>" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
```
Write in `/etc/hosts`

```
sudo nano /etc/hosts
```
to the end of file this line:
```
127.0.0.1       docker.test
```
build images:
```
docker compose build --no-cache
```
run containers:
```
docker compose up -d
```
In browser go to `http://docker.test/`

You can add project files to `<project directory>/app/`

`<project directory>/app/public/` - this folder is root folder on `http://docker.test/`

## Short docker cheat list

list running containers:

`docker container ls`

ssh connect to container

`docker container exec -it <container_hash> /bin/bash`

or

`docker container exec -i <container_hash> /bin/sh`

stop running containers:

`docker compose down`

list all docker images:

`docker images -a`

remove all docker images:

`docker rmi $(docker images -a -q)`

remove any docker resources (images, containers, volumes, and networks) not tagged or associated with a container

`docker system prune`

## Useful additional info

[available timezones](https://manpages.ubuntu.com/manpages/xenial/man3/DateTime::TimeZone::Catalog.3pm.html)
