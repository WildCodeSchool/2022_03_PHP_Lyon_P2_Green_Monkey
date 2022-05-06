<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    '' => ['HomeController', 'index',],
    'calculator' => ['QuestionController', 'index',],
    'results' => ['ResultController', 'index',],
    'admin' => ['AdminController', 'index'],
    'admin/answers' => ['AdminController', 'showAnswers'],
    'admin/edit' => ['AdminController', 'edit'],
    'admin/stats' => ['AdminController', 'stats'],
    'login' => ['UserController', 'login'],
    'logout' => ['UserController', 'logout']
];
