

<?php
        // Establece la cabecera
        $page_title = "Registro de automovilistas";
        include_once "layout_header.php"; //header
?>
<!—Visualiza título de la página -->
<h1><?php echo $page_title ?></h1>
<!-- Aqui va el contenido -->

<!--<div class="right-button_margin ">
    <a href='../index.php' class='btn btn-default pull-right'>Consultar</a>
</div>-->

<?php
//Se incluyen las clases a usar
include_once '../configuracion/Database.php';
include_once '../model/Automovilista.php';
include_once '../model/Administrativo.php';
include_once '../model/MedioDeTransporte.php';
include_once '../model/Estudiante.php';


// Obtiene la conexión hacia la base de datos
$database = new Database();
$db = $database->getConexion();

//Se instancia las clases
$automovilista = new model\Automovilista($db);
$administrativo = new model\Administrativo($db);
$estudiante = new model\Estudiante($db);
$medioDeTransporte = new model\MedioDeTransporte($db);


// Establece el título de la página
$page_title = "Registro";
include_once "layout_header.php"; //header44

?>

<!-- Se crea el formulario para la recabarción de la informacion-->
<form action='' method='POST' >
            <table class='table table-hover'>
                <tr>
                    <td>Nombre</td>
                    <td><input type='text' name='nombre' id='nombre' class="form-control"></td>
                </tr>
                <tr>
                    <td>Apellido Paterno</td>
                    <td><input type='text' name='apellidop' id='apellidop' class="form-control"></td>
                </tr>
                <tr>
                    <td>Apellido Materno</td>
                    <td><input type='text' name='apellidom' id='apellidom' class="form-control"></td>
                </tr>
                
                 <tr>
                <td>Tipo De Automovilista</td>
                <td><select id="tipoA" name="tipoA" onchange="funcionA();" >
                  <option value="1">Estudiante</option>
                  <option value="2">Empleado</option></td></select>  
                </tr>
                
                 <script>
                
                <!-- Funcion para deshabilitar o activar el campo de numero empleado o numerod de control-->
                function funcionA(){
                    
                 if($("#tipoA").val()==="1"){
                 
                 $("#numE").prop('disabled', true);
                 $("#numC").prop('disabled', false);
               
       
                 }else if($("#tipoA").val()==="2"){
                 $("#numC").prop('disabled', true);
                 $("#numE").prop('disabled', false);
                 }
                 
                }

                </script>
                <tr>
                    <td>Numero Empleado</td>
                    <td><input type='number' name='numE' id='numE' class="form-control" ></td>
                </tr>
                <tr>
                    <td>Numero De Control</td>
                    <td><input type='number' name='numC' id='numC' class="form-control" ></td>
                </tr>
                <tr>
                    <td>Correo Electronico</td>
                    <td><input type='text' name='correo' id='correo' class="form-control"></td>
                </tr>
                <tr>
                    <td>Telefono Celular</td>
                    <td><input type='number' name='celular' id='celular' class="form-control"></td>
                </tr>
                 <tr>
                    <td>Telefono Departamento</td>
                    <td><input type='number' name='telefonoD' id='telefonoD' class="form-control"></td>
                </tr>

                <tr>
                <td>Tipo De Transporte</td>
                <td><select id="tipo" name="tipo" onchange="funcion();" >
                  <option value="1">Automovil</option>
                  <option value="2">Motocicleta</option>
                  <option value="3">Cuatrimoto</option>
                  <option value="4">Bicicleta</option>
                </td></select>  
                </tr>
                
                <script>
               
                 <!-- Funcion para deshabilitar o activar el campo de lecencia o tarjeta-->
                function funcion(){
                    
                 if($("#tipo").val()==="4"){
                 
                 $("#licencia").prop('disabled', true);
                 $("#tarjeta").prop('disabled', true);
                
       
                 }else {
                      $("#licencia").prop('disabled', false);
                      $("#tarjeta").prop('disabled', false);
                    }
                 
                 
                }

                </script>
                 <tr>
                    <td>Caracteristicas Especificas</td>
                    <td><input type='text' name='caracteristicas' id='caracteristicas' class="form-control" ></td>
                </tr>

                <tr>
                    <td>Placa</td>
                    <td><input type='text' name='placa' id='placa' class="form-control" ></td>
                </tr>
                <tr>
                    <td>Marca</td>
                    <td><input type='text' name='marca' id='marca' class="form-control"></td>
                </tr>
                 <tr>
                    <td>Modelo</td>
                    <td><input type='text' name='modelo' id='modelo' class="form-control"></td>
                </tr>
                <tr>
                    <td>Licencia</td>
                    <td><input type='text' name='licencia' id='licencia' class="form-control"></td>
                </tr>
                 <tr>
                    <td>Tarjeta de Circulacion</td>
                    <td><input type='text' name='tarjeta' id='tarjeta' class="form-control"></td>
                </tr>
                <tr>
                    <td>Tarjeta de Estacionamiento</td>
                    <td><input type='text' name='tarjetaE' id='tarjetaE' class="form-control"></td>
                </tr>
                 
                <tr>
                    <td>&nbsp;</td>
                    <td><button type='submit' name='enviar' id='enviar' class="btn btnprimary">Insertar</button></td>
                </tr>
            </table>
        </form>


<?php

//Vía método POST
if ($_POST) {
    
  
    //Llenado de cada uno de los objetos por medio del POST
    $automovilista->nombre = $_POST['nombre'];
    $automovilista->apellidoP = $_POST['apellidop'];
    $automovilista->apellidoM = $_POST['apellidom'];
    $automovilista->correoElectronico = $_POST['correo'];
    $automovilista->telefonoCelular = $_POST['celular'];
    $automovilista->telefonoDepartamento = $_POST['telefonoD'];
    $automovilista->numeroTarjetaEstacionamiento = $_POST['tarjetaE'];
    
    $medioDeTransporte->placa = $_POST['placa'];
    $medioDeTransporte->marca = $_POST['marca'];
   // $medioDeTransporte->color = $_POST['color'];
    $medioDeTransporte->modelo = $_POST['modelo'];
    $medioDeTransporte->tipoTransporte = $_POST['tipo'];
    
    
    if($medioDeTransporte->tipoTransporte === '4'){
        echo $_POST['tipo'] ;
        

    }else{
    $automovilista->licencia = $_POST['licencia'];
    $automovilista->tarjetaCirculacion = $_POST['tarjeta']; 
    } 
  
    $medioDeTransporte->caracateristicas = $_POST['caracteristicas'];
    $administrativo->tipoA =$_POST['caracteristicas'];
    
        
//    Codigo para la consulta del ultimo id, correspondiente al automovilista 
         $insertId = 'SELECT `idAutomovilista` FROM `automovilista` order BY idAutomovilista desc limit 1 ';
         $stmt = $automovilista->con->prepare($insertId);
         
         $stmt->execute();
         //Para almacenar los datos en una variable
        $arrDatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //Leer variable con los datos
            foreach ($arrDatos as $value) {
               echo $var1= $value['idAutomovilista'];
            }
    
    
    
    if($administrativo->tipoA === '1'){
      $administrativo->numeroEmpleado = $_POST['numE'];  
      
       
    if($administrativo->insertAdministrativo( $administrativo->numeroEmpleado, $var1)){
        echo "<div class='alert alert-success'></div>";
    }else{
        echo "<div class='alert alert-danger'></div>";
    }
    
    }else{
      $estudiante->numeroControl = $_POST['numC'];  
       
    if($estudiante->insertEstudiante( $estudiante->numeroControl, $var1)){
        echo "<div class='alert alert-success'></div>";
    }else{
        echo "<div class='alert alert-danger'></div>";
    }
    }
    
    
   if ($automovilista->insert($medioDeTransporte->placa )) {
        echo "<div class='alert alert-success'></div>";
    } else {
        echo "<div class='alert alert-danger'></div>";
    }  
    
}

?>





