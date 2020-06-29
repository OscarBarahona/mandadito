


<?php
    $models= Yii::app()->db->createCommand("SELECT b.idInterno, b.nombre, b.user, b.direccion, b.direccion, c.nombre tipo, 
            coalesce((select  a.numero from  Agenda.telfonoCliente a where a.clienteVisita = b.idInterno limit 1 ),0) telefono
            FROM Agenda.clienteVisita b, Agenda.tipoCliente c
            where  b.tipoCliente = c.idtipoCliente")->queryAll();
    $arregloColor = array('75e8cf', '75cde8', 'e875a5', '90e875','a175e8');
    $contadorColor = 0;
    foreach($models as $model2): 
      ?>
    <div class="panel panel-default" style="border-radius: 5px 5px 5px 5px; box-shadow: 0 0 6px 2px rgba(0, 0, 0, 0.1); ">
            <div class="panel-heading clearfix">
            <div style="float:left; margin-right: 20px;">
                <div class="circuloColor buscarInfo" rel="<?php echo $model2['idInterno']; ?>" style="background:#<?php echo $arregloColor[$contadorColor]; ?>;" ><?php echo substr( $model2['nombre'], 0,1); ?></div>
            </div>
            <div style="float:left; width:80%;">
                <div style="color:#4d4d4e; font-size: 16px;"><?php echo $model2['nombre']; ?></div>
                <div style ="font-size:14px; color:#999999;">
                    <div style="float:left; width:49%; font-size: 12px;">
                       Proxima cita
                    </div>
                    <div style="float:left; width:49%;font-size: 12px; text-align:right">
                       <?php echo $model2['telefono']; ?>  | <?php echo $model2['user']; ?>
                    </div>                    
                    <div style="clear:both;"></div>
                </div>
            </div>       
        </div>
       <div id="informacionAdicionaClient<?php echo $model2['idInterno']; ?>"  >
       </div>
    </div>
<?php 
    $contadorColor = $contadorColor +1;
    if($contadorColor > 4) $contadorColor = 0;
endforeach; ?>