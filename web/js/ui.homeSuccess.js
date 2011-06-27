$().ready(function() {

  /** Crea la tabla ordenable que muestra los usuarios a editar.
   * para esto utiliza el pluggin <a href="http://tablesorter.com">tablesorter</a>
   * @function
   * @requires jquery.tablesorter.min.js
   */
  $("#tablesorter-listaEncuestados").tablesorter({
          // pass the headers argument and assing a object
          headers: {
              // assign the secound column (we start counting zero)
              5: { //DESACTIVADO ORDENADOR POR OPERACIONES
                  // disable it by setting the property sorter to false
                  sorter: false
              }
          }
  });
});