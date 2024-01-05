<?php


function testing(){
    return "helper working";
}

function getTaglines(){
    return DB::table('taglines')->where(['status'=>1, 'deleted'=>0])->orderBy('sort','ASC')->get();
        
}