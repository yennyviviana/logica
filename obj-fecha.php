<?php

//Crear un objeto DateTime con la fecha y hora actual:
      $fecha_actual = new DateTime();
      //Crear un objeto DateTime con una fecha y hora específica:
      
      $fecha = new DateTime('2022-03-15 14:30:00');
      //Obtener la fecha y hora actual formateada:
      
      $fecha_actual = new DateTime();
      echo $fecha_actual->format('Y-m-d H:i:s');
      ///Obtener la fecha y hora en un formato específico:
      $fecha = new DateTime('2022-03-15 14:30:00');
      echo $fecha->format('d/m/Y H:i:s');
      $fecha = new DateTime('2022-03-15 14:30:00');
      $fecha->modify('+1 day'); // Añadir un día
      $fecha->modify('-1 month'); // Restar un mes
      $fecha->modify('+2 years'); // Añadir dos años
      E






?>