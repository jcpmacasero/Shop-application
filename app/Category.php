<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  protected $primaryKey = 'category_id';

  /**
  * The database primary key value.
  *
  * @var string
  */
  protected $guarded = ['category_id', '_token'];

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = [
      'catname', 'catdesc'
  ];

  /**
   * The roles that belong to the User.
   */

  

  public function subcategory() 
  {
      return $this->hasMany(Subcategory::class,'category_id');
  }
}
