<form action = "http://localhost/MVC/getUpdateUser" method = "POST">
    <input type = "hidden" name = "id" value = "<?=$ROW[0]['id'];?>">
    <input type = "text" name = "name" value = "<?=$ROW[0]['name'];?>">
    <input type = "text" name = "family" value = "<?=$ROW[0]['family'];?>">
    <input type = "text" name = "phonNumber" value = "<?=$ROW[0]['phonNumber'];?>">
    <button>Update</button>
</form>