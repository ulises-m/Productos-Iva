<html>
     <head>
         <title>Practica#3</title>
     </head>
 <body>
  <?php  define("IVA", 0.16)?>

     <b>Practica#3</b>
     <br>
     <b>Productos con IVA</b>
     </br>

      <table border="1">

      <tr>
       
        <td><strong>Total</strong></td>
        <td><strong>Producto</strong></td>
        <td><strong>Precio</strong></td>
      </tr>
       
      <tr>
       
        <td> <?php $cantidad1= $_POST["cantidad1"];
             echo $cantidad1;?> </td>
        <td> <?php $producto1= $_POST["producto1"];
             echo $producto1;?> </td>
        <td><?php $precio1=30; $_POST["precio1"];
             echo $precio1;?> </td>
      </tr>
       
        
      <tr>
        
        <td> <?php $cantidad2= $_POST["cantidad2"];
             echo $cantidad2;?> </td>
        <td> <?php $producto2= $_POST["producto2"];
             echo $producto2;?> </td>
        <td><?php $precio2=8.50; $_POST["precio2"];
             echo $precio2;?> </td>
      </tr>

        
      <tr>
        
        <td> <?php $cantidad3= $_POST["cantidad3"];
             echo $cantidad3;?> </td>
        <td> <?php $producto3= $_POST["producto3"];
             echo $producto3;?> </td>
        <td><?php $precio3=8; $_POST["precio3"];
             echo $precio3;?> </td>
      </tr>


      <tr>
        <td></td>
        <td><strong>Subtotal</strong></td>
       
        <td><?php $Subtotal = $precio1+$precio2+$precio3;
             echo $Subtotal; ?></td>
      </tr>


      <tr>
        <td></td>
        <td><strong>IVA</strong></td>
        <td><?php $iva=$Subtotal*IVA;
              echo $iva; ?> </td>
      </tr>

      <tr>
        <td></td>
        <td><strong>Total</strong></td>
        <td><?php $Total= $Subtotal+$iva;
              echo $Total; ?> </td>
      </tr>

      </table>

  </form>
 </body>
</html>