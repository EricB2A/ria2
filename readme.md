# RIA2 - Datalab API
// What is this repo about  

## Prerequisites
* PHP (with PECL)

## Installation
Install MongoDB on Ubuntu 16.04:   
```bash
# Import the public key used by the package management system.  
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 2930ADAE8CAF5059EE73BB4B58712A2291FA4AD5  

# Create a list file for MongoDB.  
echo "deb [ arch=amd64,arm64 ] https://repo.mongodb.org/apt/ubuntu xenial/mongodb-org/3.6 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.6.list  

# Reload local package database.  
sudo apt-get update  

# Install the MongoDB packages.  
sudo apt-get install -y mongodb-org  

```  

Start MongoDB.  
```bash
sudo service mongod start  
```  
_source: https://docs.mongodb.com/manual/tutorial/install-mongodb-on-ubuntu/_  

By default, mongodb has no enabled access control, which means there's no default user or password.  
User creation: 
```bash
mongo --port 27017
```  
And create a admin user.  
```bash
use admin
db.createUser(
  {
    user: "laravel",
    pwd: "root",
    roles: [ { role: "userAdminAnyDatabase", db: "admin" } ]
  }
)
```  

`apt-get install libmongoc-1.0-0`  


install the php-mongodb driver :
```bash
sudo pecl install mongodb
```  
Add the following line to your `php.ini` file for **fpm** and **cli**.  
`extension=mongodb.so`  

_source: http://php.net/manual/en/mongodb.installation.pecl.php_  

Then run `composer install`  

Make a **.env** file, or copy the example.  
`cp .env.example .env`  
Generate the key.  
`php artisan key:generate`  
And you should be good to go.  

## Usage
// Todo

## License
This project is licensed under the MIT License - see the [license](license) for details.  