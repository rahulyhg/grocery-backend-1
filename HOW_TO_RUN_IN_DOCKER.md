docker build -f Dockerfile-dev -t apigility .
docker run -it -p "8080:80" -v $PWD:/var/www apigility

