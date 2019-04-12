<?php

namespace WPKirk\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
      * The primary key for the model.
      *
      * @var string
      */
    protected $primaryKey = 'log_id';

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        global $wpdb;

        return $wpdb->prefix . parent::getTable();
    }
}
