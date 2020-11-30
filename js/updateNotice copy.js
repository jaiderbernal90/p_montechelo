function updateNotice(esto){
    var id=esto.id;

    document.write("<form action='updateNotice.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    
    document.forms['form'].submit();
}
function updateAnuncio(esto){
    var id=esto.id;

    document.write("<form action='updateAnuncio.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    
    document.forms['form'].submit();
}
