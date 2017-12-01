Symfony React
============

A simple boilerplate to start a symfony + react js project, with server side rendering of the react widgets.
No routing or navigation is made in react, think of it as a simple way to create an advanced widget.


## Install

```bash
composer install
npm install
bin/console server:start
# go to http://localhost:8000 !
```

## Structure
The react project is in the `client/` directory.
There is an `entry.js` used to bundle up the javascript project.

The same entry is used for server-side rendering so that eases the adoption.

## Develop
```bash
# start development server
./node_modules/.bin/encore dev --watch

# bundle up for production
./node_modules/.bin/encore production
```

