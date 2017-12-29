# aboutjn - **Portfolio & Blog**

[![Build Status](https://travis-ci.org/neetjn/aboutjn.svg?branch=master)](https://travis-ci.org/neetjn/aboutjn)

This web application was developed using the amazing Vue.js.
Rather than using the `vue-cli`, this was built from scratch using experimental design practices. It was originally developed using php5 and laravel, but it was later moved to node.js using webpack for more flexibility and better dependency management.

### Blog

This portfolio was designed to run both serverless, and wired up with [py-blog](https://github.com/neetjn/py-blog). At build time webpack will check for an environmental variable `BLOG_APIROOT_HREF`, if found webpack will template this variable into our bundle so the portfolio can fetch a service description.

For use with docker:

```bash
build . -t aboutjn:0.0.1
docker run aboutjn -e BLOG_APIROOT_HREF=http://blog.aboutjn.xyz/v1/
```

### Technologies
* Vue.js 2
* Sass
* SkeletonCSS
* animate.css
* Fontawesome
* Firebase

---

Copyright (c) 2017 John Nolette Licensed under the MIT license.
