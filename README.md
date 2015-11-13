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

models/BaseModel.php
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


#### 4. Working with model :
This example  create simple class Song look like this following
```
class Song extends sintret\pdo\Crud {

    protected $table = 'song';

    # Primary Key of the table
    protected $pk = 'id';
    // ling to class db connection here 
    public $className = 'BaseModel';
}
```

#### 5. Create / Save with model
Example for create new Song code will create new record song like these following code:
```
$model = new Song();
$model->title = 'Disaat Aku Tersakiti';
$model->artist = 'Dadali';
$model->album = ' Disaat Aku Tersakiti';
$model->createDate = date("Y-m-d H:i:s");
$model->status = 1;
$model->create();
```

#### 6. Find with model
Example for find  Song code will create new record song like these following code:
```
$model = new Song();
$model->find(1);

echo $model->title;
echo $model->artist;
```
or with multiple 
```
$model = new Song();
$model->find(['artist '=>'Dadali','status'=>1]);

echo $model->title;
echo $model->artist;
```

#### 7. Update where with model
Example for find  Song code will create new record song like these following code:
```
$model = new Song();
$model->status = 2;
$model->rate = 66;
$model->save(3);
```

#### 8. Delete with model
Example for delete  Song code will create new record song like these following code:
```
$model = new Song();
$model->delete(1);
```

#### 9. Find All with model
Example for delete  Song code will create new record song like these following code:
```
$model = new Song();
$model->all();
echo "<pre>"; print_r($model);
```
#### 10. Saving with array models
Example for save with array  Song code will create new record song like these following code:
```
$model = new Song(['title' => 'I can teach you', 'artist' => 'bon jovi','status'=>1]);
$model->create();
echo "<pre>"; print_r($model);
```
