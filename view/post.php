<?php 
$posts = [
    [ 
        'name' => 'Юлиан',
        'surname' => 'Ким',
        'ava' => 'img/imgava/ava1.png',
        'imgPost' => 'img/imgpost/img1.png',
        'imgLike' => 'img/heart.png',
        'img' => 'img/download.png',
       
    ],
    [ 
        'name' => 'Олег',
        'surname' => 'Прокопенко',
        'ava' => 'img/imgava/ava2.png',
        'imgPost' => 'img/imgpost/img2.png',
        'imgLike' => 'img/heart.png',
        'img' => 'img/download.png',
        
    ],
    [ 
        'name' => 'Дмитрий',
        'surname' => 'Шульберт',
        'ava' => 'img/imgava/ava3.png',
        'imgPost' => 'img/imgpost/img3.png',
        'imgLike' => 'img/heart.png',
        'img' => 'img/download.png',
     
    ],
    [ 
        'name' => 'Павел',
        'surname' => 'Кондратьев',
        'ava' => 'img/imgava/ava4.png',
        'imgPost' => 'img/imgpost/img4.png',
        'imgLike' => 'img/heart.png',
        'img' => 'img/download.png',
   
    ],
    [ 
        'name' => 'Элберт',
        'surname' => 'Хаббар',
        'ava' => 'img/imgava/ava5.png',
        'imgPost' => 'img/imgpost/img5.png',
        'imgLike' => 'img/heart.png',
        'img' => 'img/download.png',
      
    ],
    [ 
        'name' => 'Мария',
        'surname' => 'Шевченко',
        'ava' => 'imgava/ava6.png',
        'imgPost' => 'imgpost/img6.png',
        'imgLike' => 'img/heart.png',
        'img' => 'img/download.png',
        
    ],
    [ 
        'name' => 'Максим',
        'surname' => 'Петров',
        'ava' => 'img/imgava/ava7.png',
        'imgPost' => 'img/imgpost/img7.png',
        'imgLike' => 'img/heart.png',
        'img' => 'img/download.png',
       
    ],
    [ 
        'name' => 'Владимир',
        'surname' => 'Иванов',
        'ava' => 'img/imgava/ava8.png',
        'imgPost' => 'img/imgpost/img8.png',
        'imgLike' => 'img/heart.png',
        'img' => 'img/download.png',
        
    ],
];

$post = '';
foreach($posts as $post){
    echo  '<div class="main">'.
            '<div class="ava">'.
                '<image src="' . $post['ava'] . '" alt="avatar" class="ava"/>'.
              '</div>'. 
               '<div class="name">'. 
                     '<p>'. $post['name'] .' '. $post['surname'] . '</p>'.
                '<p class="tm">две минуты назад</p>'.
                '</div>'.
                '<div class="img">'.
                    '<image src="' . $post['imgPost'] . '"image"/>'.
                '</div>
            <div class="abc"> 
                <div class="like">
                    <image src="'. $post['imgLike'].'" alt="like" class="like"/>
                </div>
                <div class="amount"> 222</div>
                <div class="download">
                    <image src="'. $post['img'].'" alt="like" class="download"/>
                </div>
            </div>
            <div class="comments">
                <ul class="comments">
                    <li><a href="#">#Neon</a></li>
                    <li><a href="#">#Textures</a></li>
                    <li><a href="#">#Aeril</a></li>
                    <li><a href="#">#Objects</a></li>
                    <li><a href="#">#Grid</a></li>
                    <li><a href="#">#Urban</a></li>
                    <li><a href="#">#Typo</a></li>
                    <li><a href="#">#Music</a></li>
                    <li><a href="#">#Colors</a></li>
                </ul>
            </div>  
        </div>'; 
}


