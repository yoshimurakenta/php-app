<?php
require_once('connection.php');

function createData($post)
{
  createTodoData($post['content']);
}

function getTodoList()
{
    return getAllRecords();
}

function getSelectedTodo($id)
{
  return getTodoTextById($id);
}