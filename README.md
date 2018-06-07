# dgisolfi-site
a personal page that is hosted on a LAMP stack and provides a environment to host any future web apps

### Author

Daniel Gisolfi - All current work - dgisolfi

## Prerequisites

All requirements to run an instance of this project

- Bootstrap
- HTML 5
- Digital Ocean or an equivalent service
- mysql or a equivelant database
- Docker

## Deployment

Currently this site exists on a Digital Ocean droplet. The droplet is pointed at the domain name: [dgisolfi.xyz](http://www.dgisolfi.xyz/sites/dgisolfi.php)

## Docker Implementation

The sites are currently taking advanatge of docker containers, each site and  database in its own. To set this schema up I first built all docker images from there Dockerfiles:

```docke
docker build -t dgisolfi-site .
docker build -t bushmen-site .
docker build -t mysql-server .
```

Next I ran each individual contianer with their apppropriate volumes

```Docker
docker run -d  --name="dgisolfi-server" -p80:80 -v /Users/daniel/code-repos/dgisolfi-site/dgisolfi/src:/var/www/html/ dgisolfi-site

docker run -d  --name="bushmen-server" -p81:80 -v /Users/daniel/code-repos/dgisolfi-site/bushmen/src:/var/www/html/ bushmen-site
```



## Goals

The following are possible additions and goals I would like to meet with this project

- A basic understanding and further experience using ssh with a LAMP stack and Digitial Ocean 
- A basic understanding of creating and implementing a fully complete site
- A better understanding of Bootstrap and the possible advantages
- A testing ground for any future web apps 
