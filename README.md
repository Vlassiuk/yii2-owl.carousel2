OwlCarousel2 Yii2
=================
OwlCarousel2 extension - wrapper for yii2

See [OwlCarousel2](http://owlcarousel2.github.io/OwlCarousel2/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist vlassiuk/yii2-owl.carousel2 "dev-master"
```

or add

```
"vlassiuk/yii2-owl.carousel2": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \vlassiuk\owlcarousel2\Owlcarousel2::widget([...]); ?>
```
```html
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
```
```php
<?= \vlassiuk\owlcarousel2\Owlcarousel2::end(); ?>
```