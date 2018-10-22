



document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
  this.classList.toggle( "active" );
});
/*+++++++++++++++++++ INICIO FUNCIONES DEL MENU LATERAL ++++++++++++++++*/

    $("#nav-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
		
    });

    $("#registroCaso").click(function(){
    $("#contenedorhd").load("reporteCaso/form.php");
    });

    $("#misRegistros").click(function(){
    $("#contenedorhd").load("misRegistros/tabla.php");
    });

    $("#herramientas").click(function(){
    $("#contenedorhd").load("herramientas/index.php");
    });

    $("#gestiones").click(function(){
    $("#contenedorhd").load("gestiones/index.php");
    //alert("click");
    });


    

/*++++++++++++++++ FIN FUNCIONES DEL MENU LATERAL++++++++++++++++*/

/*+++++++++++++++INICIO FUNCIONES DE HERRAMIENTAS +++++++++++++++*/



/*+++++++++++++++ FIN FUNCIONES DE HERRAMIENTAS +++++++++++++++*/