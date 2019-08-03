# Laravel + WebAssembly

[![License](https://img.shields.io/packagist/l/e2consult/larawasm.svg)](https://packagist.org/packages/e2consult/larawasm)
[![Total Downloads](https://img.shields.io/packagist/dt/e2consult/larawasm.svg)](https://packagist.org/packages/e2consult/larawasm)
[![StyleCI](https://styleci.io/repos/181854402/shield)](https://styleci.io/repos/181854402)

E2Consult is a webdevelopment team based in Oslo, Norway. You'll find more information about us [on our website](https://e2consult.no).

This package is made to demonstrate how to use WebAssembly with PHP and Laravel.

## Installation

First you need to install the standard Rust toolchain and wasm-pack, [follow the instructions here](https://rustwasm.github.io/book/game-of-life/setup.html).

Okey, now clone this repository and pull in Laravel's dependencies.

```bash
git clone https://github.com/e2-consult/larawasm.git
cd larawasm

cp .env.example .env
composer install
php artisan key:generate
```

Good, now we need to compile the Rust files to WebAssembly. You already have two projects located in the "wasm" folder in you root directory. Since Composer and Node has their own directories in the root folder, we should create one for WebAssembly as well, we have called it "wasm".

Go to each project in the wasm folder and run "wasm-pack build". This will create a new folder named "pkg" with the WebAssembly binary and JavaScript glue. Read more about it [in the Rust and WebAssembly book](https://rustwasm.github.io/book/game-of-life/hello-world.html). Both the WebAssembly projects in this repository are created from the book.

```bash
cd wasm/hello-world
wasm-pack build

cd ../game-of-life
wasm-pack build
```

Go back to the main directory and install all node_modules, then compile down the files. This also grabs the WebAssembly binaries, as they are included in the dependency list in the "package.json" file.

```json
    "dependencies": {
        "game-of-life": "file:wasm/game-of-life/pkg",
        "hello-world": "file:wasm/hello-world/pkg"
    }
```
Run
```bash
cd ../..
npm install
npm run dev
```

Go to your project in the browser and enjoy!

## Heads up!

Are you getting this error-message in your browsers console?

```
TypeError: Failed to execute 'compile' on 'WebAssembly': Incorrect response MIME type. Expected 'application/wasm'.
```

Then you need to add the mime type to Nginx (or the web server you use). Edit the file "mime.types". Try this location for Nginx on **MacOS**

```
/usr/local/etc/nginx/mime.types
```

or this location for Nginx on **Ubuntu**

```
/etc/nginx/mime.types
```

Add this line to the within "types"

```
application/wasm                   wasm;
```

## License

The MIT License (MIT).
