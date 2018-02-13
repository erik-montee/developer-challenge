<?php
 
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidatorServiceProvider extends ServiceProvider{

    public function boot()
    {
        Validator::extend('contains', function ($attribute, $value, $parameters, $validator) {
          foreach($parameters as $v) { 
              if(strpos($value, $v) !== false) {
                  return false;
              }
          }
        return true;  
        });

        Validator::extend('recurring', function ($attribute, $value, $parameters, $validator) {
          if ($value[0] === $value[1] && $value[1] === $value[2]){
              return false;
          } else {
              return true;
          }          
        });
    }

    public function register()
    {

    }
}

?>
