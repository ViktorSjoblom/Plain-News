[![StyleCI](https://github.styleci.io/repos/217001427/shield?branch=master)](https://github.styleci.io/repos/217001427)

# Plain News
<img src="https://media.giphy.com/media/QjrrSbYaqgi1q/giphy.gif" width="75%">


### Prerequisites

You need a server software, for example MAMP

### Installing

1. Clone the repository

```
$ git clone https://github.com/ViktorSjoblom/Plain-News
```

2. Navigate to the folder where you cloned the repository via the terminal

3. Start a local server 
```
php -S localhost:8888
```
4. Open up your favorite browser and enter localhost:8888/index.php in the url

5. Enjoy!


## Built With

* PHP
* HTML
* CSS

## Authors

* **Viktor Sjöblom**

## Testers

* Oskar Turesson
* Viktor Puke

## Code Review

Maja Alin

* Snyggt flöde! Hade kanske varit bra med lite större utrymme mellan artiklarna så att man ännu tydligare ser vart de börjar/slutar.
* Bra med loading=“lazy”!
* Kanske hade varit bra med en kommentar över <?php usort($articles, “sortArticle”); ?> i index.php så att man får en snabb förklaring på vad funktionen gör.
* Kul att du lagt in artiklarna och författarna på olika sidor! Snyggt att alla sidorna håller samma stil och design!
* Såg att du hade blandat lite mellan camelcase och kebab case när du namngivit class. T.ex. flex-header och navBarItem0. Hade varit ännu tydligare om det var konsekvent hela vägen igenom!

Superbra jobb! No errors och sidan är responsiv! :pray:

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details


YRGO 2019
