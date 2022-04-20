# SDE-Project

**Team Members:**<br/>
Priyal Jain (M21CS013) <br/>
Shruti Sureshan (M21CS015)


### Steps:
1. Create the web application
2. Create the Dockerfile
   - Docker file is used to create the Docker image
   - Docker images is a set of instructions to build a Docker container. The base image should include the platform dependencies required by your application so that your application runs smoothly. So Docker images are built based on contents of Dockerfile. Here the base image is alpine version on nginx webserver.  A base image is an empty first layer which allows to build the Docker images from scratch
3. Build the Dockerfile
```
docker build -t webserver-image:v1 .
```
4. Run the Docker Container
```
docker run -d -p 80:80 webserver-image:v1
```
5. Run the application on browser and test the port
```
http://localhost:80
```
6. Push the Docker container image to Docker Hub
   - First create a repository  and then push the Docker container image using the following command-
```
docker tag webserver-image:v1 repository-name/webserver-image:v1
```

7. Pull the Docker image
   - To pull the Docker image run the following command-
```
docker pull repository-name/webserver-image:v1
```
