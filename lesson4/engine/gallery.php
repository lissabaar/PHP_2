<?php
function getGallery()
{
    return getAssocResult("SELECT * FROM `gallery` ORDER BY `views` DESC");
}
