function viewUser(esto){
    var id=esto.id;

    document.write("<form action='infoUser.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    
    document.forms['form'].submit();
}
