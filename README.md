Freelancer
============================

Generate PHP Application with single command and PDO wrapper

#### 1. Create project via composer :
```
composer create-project -s dev sintret/freelance your-directory
```

#### 2. Bootstraping :
in your page you must to include autoload
```
require(__DIR__ . '/autoload.php');
```

#### 3. Working with query pdo :
this is example to load model in folder models, you must to extends from sintret\pdo\Db
see autoload models in folder models
models/BaseModel
```
class BaseModel extends sintret\pdo\Db{
    public function __construct() {
        parent::__construct(HOST, DB_NAME, DB_USER, DB_PASS);
    }
    
} 
```
index.php
```
$db = new BaseModel;

$songs = $db->query("SELECT * FROM song");
echo "<pre>";print_r($songs);
```


