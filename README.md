# aboutjn - **Portfolio & Blog**

[![Build Status](https://ci.aboutjn.xyz/job/neetVeritas/job/aboutjn/job/master/badge/icon)](https://ci.aboutjn.xyz/job/neetVeritas/job/aboutjn/job/master/)

This web application was developed using the amazing VueJS.
Rather than using the `vue-cli`, this was built from "scratch" using experimental design practices. It was originally developed using php5 and laravel, but it was later moved to nodejs using webpack for more flexibility.

### About
This portfolio has a relatively simple build process. Because this application does not expose an api, it is technically "server-less". The internal blog is operated using firebase, making it easily deployable and flexible.

### Setting Up
To build this application the following requirements must be met,
1. Node 6.x
2. NPM >=3
3. Docker (optional)

You may then either run the application locally like so,
```sh
npm install # install dependencies
npm run dev  # run application with hot module reload
```
or build a new docker image and run your application inside a container,
```sh
docker build . -t aboutjn  # build docker image, install app dependencies
docker run -d -p 3000:3000 --name portfolio aboutjn  # run docker image bind app to port 3000 on host
```
optionally you may also build your application using
```sh
npm run build # build your application using webpack
```

### Technologies
* Babel (ES6)
* Vuejs 2
* SASS
* Webpack
* Firebase
* SkeletonCSS
* Fontawesome

---

Copyright (c) 2017 John Nolette Licensed under the MIT license.
