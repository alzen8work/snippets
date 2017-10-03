<a href="https://www.youtube.com/watch?v=ZH3V1kObpec&list=PLfdtiltiRHWEiSd2SG_6zV9pZ6VH3e2DJ&index=4" target="_blank">tuts</a>
<br>
<?php

$options = array('cost'=>12);

$stored_pass = md5('Admin123$');//'$2y$12$VRVY/RGuXFYCH91klYCnQ.RoybRwhRu0QZglPlZRjMO2dLhM99z12'; //password //echo md5('password');
$supplied_pass = 'Admin123$';

// echo  password_hash($supplied_pass,PASSWORD_BCRYPT,$options);
// echo  password_hash($supplied_pass,PASSWORD_BCRYPT,$options);

if(password_verify($supplied_pass,$stored_pass)){
    //sign user in
    echo 'your in!';
}else{

    // improve an existing user with new hash for old system;
    if(password_needs_rehash($stored_pass,PASSWORD_BCRYPT,$options) && md5($supplied_pass) === $stored_pass ){
        //store new password
        $stored_pass = password_hash($supplied_pass,PASSWORD_BCRYPT,$options);
        
        //update database with updated password hash;//
        
        
        
        //... then sign the user in
        echo 'You are in, with a changed password hash.';
    }else{
        echo 'Try again';
        
    }
    
}


echo '<br>'.$stored_pass;
exit;
?>
<img src="https://i.imgur.com/Lcx1ZkF.jpg" />
<br>
<a href="https://www.youtube.com/watch?v=ZHg-h7bZhbo&list=PLfdtiltiRHWFsPxAGO-SVPGhCbCwKWF_N&t=6" target="_blank">tuts</a>
<br>
<a href="https://www.youtube.com/watch?v=ay1kBltU6Ck&list=PLfdtiltiRHWEiSd2SG_6zV9pZ6VH3e2DJ" target="_blank">tuts2</a>
<br>
<?php

//===========================================================
//Wrong way to do so

// echo md5('ilovecats33');
// hack md5
//https://crackstation.net/

// echo md5('tabby12345');

// $stored_pass = '60b8cb24c1c2d76c3e46ada3c5cca47d';

// if(md5('tabby12345') === $stored_pass){
//     echo 'You are in!';
// }else{
//     echo 'sorry try again';
// }
// exit;

// hack md5
//https://crackstation.net/
//===========================================================

//Proper way to do so
// http://php.net/manual/en/function.password-hash.php

//PASSWORD_DEFAULT
//PASSWORD_BCRYPT
echo password_hash('ilovecats33', PASSWORD_BCRYPT, array(
    // 'salt'=>'',
    'cost'=> 10
)); 

echo '<br>';
echo $test   ='$2y$12$JDJMQ/smwKOQBWFs74du/e/cdfOvAtIJNUkvGRC3XRfgRq8ROqwuu';

echo '<br>';
echo $test2  ='$2y$12$b444zv2Nqdga1Hj7ztJqdutLsMWzNLuJ8TbgLYk1dHhzt8phNXtlm';

echo '<br>';
echo '<br>';
// $result = password_verify('ilovecats33',$test2);
// var_dump($result);
// $result;

$stored_pass = '$2y$12$b444zv2Nqdga1Hj7ztJqdutLsMWzNLuJ8TbgLYk1dHhzt8phNXtlm';
if(password_verify('ilovecats33',$stored_pass)){
    echo 'You are in!';
}else{
    echo 'Sorry try again';
}









?>