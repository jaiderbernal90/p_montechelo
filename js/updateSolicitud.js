function reponseSolicitud(esto){
    var id=esto.id;

    document.write("<form action='responseSolicitud.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    
    document.forms['form'].submit();
}

function updateSolicitud(esto){
    var id=esto.id;

    document.write("<form action='updateSolicitud.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    
    document.forms['form'].submit();
}