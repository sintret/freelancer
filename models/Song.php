<?php


/**
 * This is the model class for table "song".
 *
 * @property integer $id
 * @property string $artist
 * @property string $title
 * @property string $album
 * @property string $description
 * @property string $release
 * @property double $rate
 * @property integer $status
 * @property integer $userCreate
 * @property integer $userUpdate
 * @property string $updateDate
 * @property string $createDate

 */

class Song extends sintret\pdo\Crud {

    protected $table = 'song';

    # Primary Key of the table
    protected $pk = 'id';
    // ling to class db connection here 
    public $className = 'BaseModel';

}
