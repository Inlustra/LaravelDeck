# Laravel Deck

A simple example of using Laravel and AngularJS together to create a deck shuffling api.

### Launching:
Ensure you have NodeJS and NPM installed.
Create a .env file at the root of the application.
Run the following commands:
```sh
$ npm install
$ bower install
```

#### For the lazy:
The file [LaravelDeck.zip](https://github.com/Inlustra/LaravelDeck/blob/master/LaravelDeck.zip?raw=true "LaravelDeck.zip") can be downloaded and extracted (npm and Bower components are installed).

Create an apache root in the /public folder and you're ready to go!
### Notes:
* This was an exercise over 2 and a half hours, due to the time constraints (returned home around 8.30pm), it is important to note the lack of proper documentation. 
* The use of Angular ui-router was mainly to showcase the application structure in a working environment.
* All views are pulled in as Blade Templates
* Given more time: 
  * A directive would have been created in place of the index classes.
  * A real error-handling implementation could have been put in place.

