# aboutjn - **Portfolio & Blog**

[![Build Status](https://travis-ci.org/neetjn/aboutjn.svg?branch=master)](https://travis-ci.org/neetjn/aboutjn)

This web application was developed using Ember.js.

### Blog

This portfolio was designed to run both serverless, and wired up with [py-blog](https://github.com/neetjn/py-blog). At build time webpack will check for an environmental variable `BLOG_APIROOT_HREF`, if found webpack will template this variable into our bundle so the portfolio can fetch a service description.

For use with docker:

```bash
build . -t aboutjn:0.0.1
docker run aboutjn -e BLOG_APIROOT_HREF=http://blog.aboutjn.xyz/v1/
```

### Stack
* Ember.js
* Sass
* Spectre.css
* anime.js
* animate.css

---

Copyright (c) 2018 John Nolette Licensed under the MIT license.
