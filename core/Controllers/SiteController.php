<?php

namespace WebLab\Controllers;

use WebLab\Models\User as User;
use WebLab\Components\Menu as Menu;

class SiteController extends \WebLab\Controller {

    public function doIndex() {
        $this->title = "Главная";

        echo "<div class = 'container'>";
        echo '<table class=" table">';
        echo '<caption>Таблица умножения</caption>';
   
          for ($i=1;$i<=9;$i++) {
          echo "<tr>";
              for ($z=1;$z<=9;$z++) {
               if($z == 1){
                echo  '<td class="firstCol">'.$i.'</td>'; 
               }
               if($z % 2 == 0){
             echo  '<td class="pair">'.$i.'*'.$z.'='.($i*$z).'</td>'; 
               }else{
                echo  '<td class="not_pair">'.$i.'*'.$z.'='.($i*$z).'</td>'; 
               }
               
           }
          echo "</tr>";
          }
    
        echo "</table>";
        echo "</div>";

        $this->render("site/lb2", ['content' => $this->app->getBaseUrl()]);
    }

    public function doAdmin() {
        echo $this->app->getSiteName() . "<br/>";
        echo "Hello admin!";
    }

    public function doUsers() {
        $users = User::all();
        $this->title = "Пользователи";
        $this->render("site/users", ["users" => $users]);
    }

}
