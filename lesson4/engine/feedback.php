<?php
function getFeedback()
{
    return getAssocResult("SELECT * FROM `feedback` WHERE 1 ORDER BY `id`");
}

function addFeedback($itemId)
{
    $username = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['username'])));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['feedback'])));
    executeQuery("INSERT INTO `feedback`(`username`, `feedback`, `id_item`) VALUES ('{$username}','{$feedback}', '{$itemId}')");
}

function deleteFeedback($feedbackId)
{
    executeQuery("DELETE FROM `feedback` WHERE `id` = {$feedbackId}");
}

function editFeedback()
{
    $feedbackId = $_GET['feedbackId'];
    return getDataFromDb("SELECT * FROM `feedback` WHERE `id` = {$feedbackId}");
}

function saveFeedback($feedbackId)
{
    $username = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['username'])));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['feedback'])));
    executeQuery("UPDATE `feedback` SET `username`='{$username}',`feedback`='{$feedback}' WHERE `id` = '{$feedbackId}'");
}

function doFeedbackAction($action)
{
    if ($action == 'add') {
        addFeedback($_GET['id']);
        return 'added';
    }
    if ($action == 'delete') {
        deleteFeedback($_GET['feedbackId']);
        return 'deleted';
    }
    if ($action == 'save') {
        saveFeedback($_GET['feedbackId']);
        return 'edited';
    }
    return false;
}
