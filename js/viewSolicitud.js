function viewSolicitud(esto){
    var id=esto.id;

    document.write("<form action='infoSolicitud.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    
    document.forms['form'].submit();
}
function viewSolicitudAdmin(esto){
    var id=esto.id;

    document.write("<form action='infoSolicitudAdmin.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    
    document.forms['form'].submit();
}