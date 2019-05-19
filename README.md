# good karma effect
docker compose to help RHoKstars working with good karma effect develop the site locally before pushing to production. **please note that this image is not intended for production, if you are deploying a production website then please fix this up yourself or create your own stack. this is purely for educational purposes only**

## services
- elgg
- mariadb

## usage

### general
there are three scripts: `run.sh`, `stop.sh`, and `access.sh`. it's pretty self explanatory, just make sure you install `docker` and `docker-compose` before using them otherwise it won't work.

to install docker and docker compose on a debian based system (debian, ubuntu, linux mint, etc) then you can just run `sudo apt update && sudo apt install docker docker-compose`. then run `sudo systemctl enable --now docker` to begin the docker daemon. all that is left is to now add your user to the `docker` group by running the command `sudo usermod -aG docker $USER` and then re-logging into your user account. in theory this should all also work just fine on windows and macos, however i was only able to test and build with linux in mind, testing on both debian and arch based distros.

you shouldn't need to access a shell within these containers usually, but if you do then simply run `docker exec -it [service name] bash`, replacing `[service name]` with the service that you wish to access.

### mariadb
hop into the mariadb container with `access.sh` and use the password `rootpassword`. if you wish to change this then look in the `docker-compose.yml` file, it should be self explanatory where to change the password.

### website
all website files are stored in `html`, drop your files in there if you wish to serve them.

within the website if you wish to access the db, use the location `mariadb` in place of where you might normally use `localhost` which will give you access to mariadb container's database. for example:

```php
<?php
    $server = "mariadb";
    $user = "root";
    $password = "rootpassword";
    $db = "your_db_here";

    $conn = new mysqli($server, $root, $password, $db);
    $query = "SELECT * FROM table";
    $result = $conn->query($query);
    
    echo $result->num_rows;
?>
```
