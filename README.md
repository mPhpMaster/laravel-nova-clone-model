# **Clone Model - A Laravel Nova Package for clone a model Data.**

# Install Clone Model package to your nova project

```shell
composer require mphpmaster/laravel-nova-clone-model
```

## Usage
```injectablephp
use MPhpMaster\LaravelNovaCloneModel\CloneModel;

CloneModel::make()
    ->withMeta([
        'resource' => 'posts', // resource uriKey
        'model' => 'App\Models\Post', // model namespace
        'id' => $this->id, // id of record
        'relations' => ['tags', 'comments'], // an array of any relations to load (nullable).
        'except' => ['status'], // an array of fields to not replicate (nullable).
        'override' => ['status' => 'published'] // an array of fields and values which will be set on the modal after Cloning(nullable).
    ]),
```

**You can either place it on the bottom right or top right corner.**

**For the bottom right corner , place the code bellow all of your nova feild.**

![Demo Image1.1](https://live.staticflickr.com/65535/49716165116_6b114252ab_k.jpg)

**For the top right corner , place the code on the top of all of yournova feild.**

![Demo Image1.2](https://live.staticflickr.com/65535/49716480142_078255a179_k.jpg)

**You can customize the Clone model button text? **

```injectablephp
CloneModel::make()
    ->withMeta([
        .... include other metas .... ,
        
        'button_text' => 'Custom Clone Button', // By default its clone  icon.
    ]),
```

![Demo image1.3](https://live.staticflickr.com/65535/49716481277_77624978f8_k.jpg)

# You can customize your own dialogue box. By Default ? 

## Customization of confirm dialogue box.

***? Use title, body, confirm_button_text and cancel_button_text metafor customization***

![Demo image2](https://live.staticflickr.com/65535/49711939342_756c8d63ac_k.jpg)
```injectablephp
CloneModel::make()
    ->withMeta([
        .... include other metas .... ,

       'title' => 'Custom Title',  // by default 'title' => 'Confirmation'
       'body' => 'Custom Body',   // by default 'body' => 'Are you sure ?'
       'confirm_button_text' => 'Custom Confirm Button' ,   // by default 'confirm_button_text' => 'Clone'
       'cancel_button_text' => 'Custom Cancel Button'   // by default 'cancel_button_text'  => 'Cancel'
    ]),
```

![Demo image3](https://live.staticflickr.com/65535/49711922942_0d73f97285_k.jpg)

***? This package only available in Resource Detail page.***
