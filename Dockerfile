FROM node:8.11.1-alpine
MAINTAINER john@neetgroup.net

# Create app directory
RUN mkdir -p usr/src/app
WORKDIR /usr/src/app

# Install app dependencies
COPY package.json /usr/src/app/
RUN npm install -g ember
RUN npm install

# Bundle app source
COPY . /usr/src/app

EXPOSE 3000
CMD [ "npm", "start" ]
