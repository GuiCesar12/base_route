<?php

use app\controllers\RamalController;

return [
    ["GET",'/',[RamalController::class,'index']],
    ["GET",'/ramal',[RamalController::class,'select']],

];