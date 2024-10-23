# Antiage

> A site that specializes in creating automatic epigenetical medical reports that can be shared with their patients, other doctors and clinical facilities.

Docker - latest: [<img src="https://static-00.iconduck.com/assets.00/docker-icon-512x512-5xz0on7a.png" alt="Docker Logo" width="30">][docker-url] 

PHP - 8.3.12: [<img src="https://www.php.net/images/logos/php-logo-white.svg" alt="PHP Logo" width="40">][php-url] 

Nginx -latest: [<img src="https://nginx.org/img/nginx_logo_dark.png" alt="Nginx Logo" width="40">][nginx-url] 

MySQL -latest [<img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="MySQL Logo" width="40">][mysql-url] 

phpMyAdmin -latest [<img src="https://www.softaculous.com/images//ampps/appimages/phpmyadmin.png" alt="MyPHP Logo" width="40">][myphpadmin-url]


## Installation

### Supported Operating Systems

- macOS
- Linux
- Windows

### Steps

1. **Install Docker Daemon**

   Download and install Docker from its [official site][docker-url].

2. **Clone the Repository**

   ```bash
   git clone [repository-url] && cd [project-directory]

3. **Start the service**
   ```bash
   docker compose up --build

4. **Start the service**

    Ensure the following files and directories are present for the site to function correctly:

    - root/uploads/ - Add all pdf files read in the medical report.

    - root/secrets/app_user_password.txt - App user password for MySQL

    - root/secrets/root_password.txt - Root password for MySQL

    - root/.env - Environment variable requires the following values: 
        * MYSQL_DATABASE
        * MYSQL_USER
        * BASE_URL
        * PMA_HOST 
    
    - Add all images required by the project to the root dir (for now). 

    **Note:** Contact your administrator to obtain access to the assets and uploads.

# Successful installation
Check that the build is succesffull, open the following urls in your preferred navigator:
1. http://localhost:9000 - url of site
2. http://localhost:8080 - url of myphp

**Note:** To be able to login to the url, you must create a user and using myphp add the user to allowed users.

## Release history

* 1.0.0
    * Add technologies
    * Add installation instructions

## Meta
Youtomorrow employees. 

## Contributing 

Only allowed Youtomorrow employees may fork and contribute/
<!-- Urls  -->
[docker-url]: https://www.docker.com/
[php-url]: https://www.php.net/
[nginx-url]: https://nginx.org/en/
[mysql-url]: https://www.mysql.com/
[myphpadmin-url]: https://www.phpmyadmin.net/

## &copy; Copyrights
***Antiage, Youtomorrow: including any images, symbols, icons and logos, is copyrighted.***