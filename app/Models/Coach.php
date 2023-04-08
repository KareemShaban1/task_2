<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'coach_id',
        'coach_url',
        'short_name',
        'long_name',
        'dob',
        'natonality_id',
        'nationality_name',
        'face_url',
        'sex',
        // other columns
    ];

      // function to import coach
      public static function importCoaches($filename, $sex)
      {
          $file = fopen($filename, 'r');
          $header = fgetcsv($file);
  
          while ($row = fgetcsv($file)) {
              $data = array_combine($header, $row);
              $data['sex'] = $sex;
              Coach::create($data);
          }
  
          fclose($file);
      }
      
    protected $primaryKay ='team_id';
    public $incrementing = false;
}
