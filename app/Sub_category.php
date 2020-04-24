<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
  protected $primaryKey = 'subcategory_id';

  /**
  * The database primary key value.
  *
  * @var string
  */
  protected $guarded = ['subcategory_id', '_token'];

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = [
      'subcatname', 'subcatdesc'
  ];

  /**
   * The roles that belong to the User.
   */

  

  public function category() 
  {
      return $this->belongsTo(Category::class,'category_id');
  }
}
