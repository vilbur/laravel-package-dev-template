# DevTemplate Package For Laravel Framework
Package dev-template.<br>
Ready for development and installation.

1. [Create folder for package.](#create-folder-for-package)<br>
2. [Checkout repository.](#checkout-repository)<br>
3. [Set path for development installation.](#set-path-for-development-installation)<br>
4. [Install package locally.](#install-package-locally)<br>


### Create folder for package
application\packages\\__vilbur\dev-template__


### Checkout repository
In folder application\packages\vilbur\dev-template run command below.
``` bash
git init &&git remote add origin https://github.com/vilbur/laravel-package-dev-template.git &&git pull origin master
```


### Set path for development installation
Add to __application\composer.json__.
``` json
"repositories": {
    "dev-template": {
        "type": "path",
        "url": "packages/vilbur/dev-template",
        "options": {
            "symlink": true
        }
    }
}
```

### Install package
``` bash
composer require vilbur/dev-template @dev
```

### Test in Laravel
``` html
http://your-domain/dev-template
```

### Search and replace in file contents, filenames and folders
Run __ContentAndPathReplacer.exe__ and replace "dev-template" with your package name


### Publish package
php artisan vendor:publish --provider="vilbur\dev-template\DevTemplateServiceProvider"
