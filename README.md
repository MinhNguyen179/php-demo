# Todo List Project (PHP) #

Zend Engine v4.2.8, Copyright (c) Zend Technologies
with Zend OPcache v8.2.8, Copyright (c), by Zend Technologies

## Start a project:
- First, run command: ```php -S [YOUR_PORT]``` to run the server (for MacOS user),
or install ```XAMPP```.
  - For example: ```php -S 127.0.0.1:8000```.
- Set up your database connect in file [dbconn.php](dbconn.php). 
  - ```$user_name = "YOUR_USER_NAME";```
  - ```$password = "YOUR_PASSWORD";```
  - ```$database = "YOUR_DATABASE_NAME";```
  - ```$host_name = "YOUR_HOST_NAME";```
- Dump the database in folder [database](database/dump_db.sql) if you want to test with multiple tasks.
- Start enjoy your app!
## Further improvement:
- Since the scale of this project is quite small so my **repository structure** still have rooms for
improvement in the future.
- - Improve the **API performance** (working on Redis, Paging, etc.) and **Database performance** (Indexing method, Optimize query, etc.).
- Finish designing pages with navigation bar and footer.