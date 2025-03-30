
.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t ohce .

build-container:
	docker run -dt --name ohce -v .:/540/Ohce ohce
	docker exec ohce composer update

start:
	docker start ohce

test: start
	docker exec ohce ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it ohce /bin/bash

stop:
	docker stop ohce

clean: stop
	docker rm ohce
	rm -rf vendor
