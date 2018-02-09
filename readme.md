# RIA2 - Datalab API
// What is this repo about  
## Built with  
## Prerequisites
* PHP (with PECL)

## Installation
Install MongoDB   
```bash
# Download the binary files for the desired release of MongoDB. 
curl -O https://fastdl.mongodb.org/linux/mongodb-linux-x86_64-3.6.2.tgz  

# Extract the files form the downloaded archive.  
tar -zxvf mongodb-linux-x86_64-3.6.2.tgz  

# Copy the extracted archive to the target directory.  
mkdir -p mongodb  
cp -R -n mongodb-linux-x86_64-3.6.2/ mongodb  

# Ensure the location of the binaries is in the PATH variable.  
export PATH=<mongodb-install-directory>/bin:$PATH
```
_source: https://docs.mongodb.com/manual/tutorial/install-mongodb-on-linux/_  

install php-mongodb driver :
http://php.net/manual/en/mongodb.installation.pecl.php  

Then run `composer install`  

Make a **.env** file, or copy the example.  
`cp .env.example .env`  
Generate the key.  
`php artisan key:generate`  
And you should be good to go.  

## License
This project is licensed under the MIT License - see the [license](license) for details.  