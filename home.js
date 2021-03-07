
// düz üçgen 
    var i,j,k; 

    for(i = 1; i <= 10; i++) {

        for(k = 1; k <=(10-i); k++ ) {
            document.write("&nbsp")
        }

        for (j = 1; j <= i; j++) {
                document.write(' '+i+' ');

        }

        document.write('<br />');
    }


