# dgisolfi website
# Author:  Daniel Nicolas Gisolfi

DEV_HOME=./src
DOCKER_IMAGE=dgisolfi/dgisolfi-site
APPNAME=dgisolfi-site

#####################
# Common Commands
#####################

intro:
	@echo "\n					DGISOLFI - PERSONAL SITE"

clean:
	@echo "Deleteting Old Files"

clean_images:
	@#clean images TODO: These commands need Makefile compatibility
	@docker rmi $(docker images | awk '{print $1}')
	@docker images

clean_containers:
	@#clean Containers TODO: These commands need Makefile compatibility
	@docker kill $(docker ps -a | awk '{print $1}')
	@docker rm $(docker ps -a | awk '{print $1}')
	@docker ps -a


#####################
# Docker Commands
#####################


docker_image:
	@# Initial commands used priming devops environment
	@# Note: If docker account "dan36911" is not used; This command required
	@echo "\n				Creating dgisolfi-site docker image"
	@# @ln -s /Users/daniel/code-repos/Blockchain/lib /Users/daniel/code-repos/Blockchain/src
	@docker build -t dgisolfi-site .

dev_container:
	@# This command should be run from the local computer
	@echo "\n Creating Docker container"
	@#docker pull ${DOCKER_IMAGE}
	@docker run --rm -p 80:80 -v /Users/daniel/git/DgisolfiSite/src:/var/www/html/ dgisolfi-site
publish_image: docker_image
	@echo "\n				Create dgisolfi-site docker image..."
	@docker login
	@docker tag dgisolfi-site ${DOCKER_IMAGE}:latest
	@docker push ${DOCKER_IMAGE}
