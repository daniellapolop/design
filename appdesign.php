<? php
$ connect = mysqli_connect ( " m001.civuexhbxgux.us-east-1.rds.amazonaws.com " , " Will " , " CB27d277 " , " M001" );
$ Fecha = $ _POST [ " Fecha " ];
$ Latitud = $ _POST [ " Latitud " ];
$ Longitud =  $ _POST [ " Longitud " ];
mysqli_query ( $ connect , " INSERT INTO datos (Latitud, Longitud, Fecha) VALORES ( ' $ Latitud ' , ' $ Longitud ' , ' $ Fecha ' ) " );
? >