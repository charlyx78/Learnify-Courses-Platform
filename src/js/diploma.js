$('#printDiploma').click(function PrintElem(elem) 
{
    var mywindow = window.open('', 'PRINT', 'height=1280,width=720');

    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
    mywindow.document.write(document.getElementById("contenidoDiploma").innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    setTimeout(function(){mywindow.print();},1000);
    mywindow.close();

    return true;
})