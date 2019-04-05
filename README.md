z# Template for development of Laravel package  
Ready for development and installation.  

1. [Create directory for package.](#create-directory-for-package)<br>  
1. [Checkout repository.](#checkout-repository)<br>  
1. [Rename package](#rename-package)<br>  
1. [Set path for development installation.](#set-path-for-development-installation)<br>  
1. [Install package locally.](#install-package-locally)<br>  


### Create directory for package  
App\packages\\__dev-template__  

__NOTES:__  
• *Change directory name "dev-template" to your package name.*  
• *Path to directory must match value of key 'url' of package in [composer.json](#set-path-for-development-installation)*  

### Checkout repository  
Browse to created directory and run command bellow  
``` bash  
git init &&git remote add origin https://github.com/vilbur/laravel-package-dev-template.git &&git pull origin master  
```  

### Rename package  
Search and replace in file contents, filenames and folders  
Run __ContentAndPathReplacer.exe__ and replace "dev-template" with your package name  


### Set path for development installation  

__A)__ Run command bellow in __Bash__ *(cmd.exe doesn't work)*.  

	composer config repositories.{package-name} '{"type":"path","url":"packages/{package-name}"' --file composer.json  


__B)__ Or add mannualy to __application\composer.json__.  
``` json  
"repositories": {  
    "{package-name}": {  
        "type": "path",  
        "url": "packages/{package-name}"  
    }  
}  
```  

### Install package  
``` bash  
composer require {username}/{package-name} @dev  
```  

### Test in Laravel  
``` html  
http://your-domain/{package-name}  
```  

### Publish package  
php artisan vendor:publish --provider="{username}\\{package-name}\{PackageName}ServiceProvider"  

  