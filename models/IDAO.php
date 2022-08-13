<?php
  interface IDAO {
    function insert($model);
    function delete($id);
    function getById($id);
    function fetchAll();
    function update($id, $model);
  }
?>