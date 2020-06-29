 <div class="chat-sidebar border-right bg-white" style="float: right">
					<div class="border-bottom padding-sm" style="height: 38px; position: fixed;
                                             
                                             margin-bottom:40px; clear:both; width:233px;background-color:#f9f9f9;z-index:100; text-align:center; border-left: 1px solid #eee;">
						Alertas
					</div>
                         <div style="margin-top:38px;">
                             <ul id="listaAlertas" class="friend-list">	
                       <?php 
                        
                            $queryx=new Querys();
                            $alertasX = $queryx->timeLineUser("T", date("Y-m-d"), "V");
                            $classA="bounceInDown";
                            $classB="active";
                            $numero =0;
                            foreach($alertasX as $ale): 
                                if($numero%2==0){
                                     $classB="active";
                                }else{ $classB="";} $numero++;
                                ?>
                                
                      
					   
                                        
                                 <li id="item<?=$ale["id"]?>" class="<?=$classB." ".$classA ?>" onclick="alerta(<?= $ale["class"] ?>,<?= $ale["id"] ?>)" style="cursor: pointer;" >
							<a class="clearfix">
								
								<div class="friend-name">	
									<strong><?=$ale["idusuario"] ?></strong>
								</div>
								<div class="last-message text-muted"><?=$ale["nombre"] ?></div>								                                                           
                                                             <small class="time text-muted"><?=$ale["tiempo"] ?></small>
								<small class="chat-alert text-muted"><?=$ale["fecha"] ?></small>
                                                                  <div><?=$ale["descripcion"] ?></div>
                                                                
							</a>
						</li>
					 
                        <?php $classA="";   endforeach; 
                       ?>
                                        					
						<li>
							<a class="clearfix">								
								<div class="friend-name">	
									<strong> </strong>
								</div>
								<div class="last-message text-muted"> </div>
								<small class="time text-muted"> </small>
								<small class="chat-alert text-muted"></small>
							</a>
						</li>
					</ul>
                         </div>
				</div>