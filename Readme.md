Tutorial on PHP


Commands
``php -h`` - Brings up all the commands you have available

Runs index.php
``php -S localhost:8888`` - -S Runs with build in webserver

Lambda Functions

Super Global
_SERVER


In order to connect to mySql need to create a new instance of the PDO class (PHP DATA OBECJTS)
`new PDO(dsn)`
dsn = data source name - connection string that delcares your connections to the data base port, host

Interesting PHP helpers
`PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC`

`http_build_query` - concats the object keys into string, used to form a dsn
