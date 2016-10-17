  //<script type="text/javascript">
        var misDatos = angular.module('datosApp',[]);

        misDatos.controller('controladorDatos',  function($scope,$http){
            $scope.importar = function(){
                $http.get('php/datos_pagina.php').success(function(datos){
                    $scope.equipo = datos;
                });
            }  
            
            $scope.mostrarProductos = function(id, nombre){
                  $scope.id_seleccionado = id;   
                  $scope.cat_seleccionada = nombre;
            }
            
       /*     $scope.mostrarProductos(id){
                  $scope.id_seleccionado = id;              
            }*/
            $scope.id_seleccionado = 0;
            $scope.importar();
        });
        
  /*      misDatos.controller('controladorProductos',  function($scope){
            $scope.mostrarProductos = function(id){
                  $scope.id_seleccionado = id;              
            }
            
        });*/

    //</script>
