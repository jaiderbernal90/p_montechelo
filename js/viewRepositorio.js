function viewRepositorio(esto){
    var id=esto.id;

    document.write("<form action='moreRepositorio.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    
    document.forms['form'].submit();
}
