<?php

     $tp=mysqli_query($con,"SELECT count(*) as tp FROM entregables where codigo_proyecto= $id_p");
      $rwp=mysqli_fetch_array($tp);
      $tps=$rwp["tp"];
      $porcentaje=100/$tps;
      $tp2=mysqli_query($con,"SELECT COUNT(DISTINCT id_seg) as tp2 FROM archivos where codigo_proyecto= $id_p");
      $rwp2=mysqli_fetch_array($tp2);
      $tps2=$rwp2["tp2"];
      $cod1=$_GET["id_p"];
      $tp3=mysqli_query($con,"SELECT COUNT(DISTINCT usuario) as tp3 FROM archivos where codigo_proyecto= $id_p");
      $rwp3=mysqli_fetch_array($tp3);
      $tps3=$rwp3["tp3"];

      $te=mysqli_query($con,"SELECT count(*) te FROM miembros where rol='estudiante'");
      $rwe=mysqli_fetch_array($te);
      $tes=$rwe["te"];

      $ti=mysqli_query($con,"SELECT count(*) ti FROM miembros where rol='investigador'");
      $rwi=mysqli_fetch_array($ti);
      $tin=$rwi["ti"];

		$sql="SELECT * FROM  proyecto order by id desc";
		$query = mysqli_query($con, $sql);       
      
			?>
      
 
<div class="container">
<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de entregables</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tps ;?></div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-dollar-sign  fa-2x text-gray-300"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Entregables usadas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tps2;?></div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Entregables no utilizadas</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $tps-$tps2;?></div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Usarios activos en este proyecto</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tps3;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <br>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje;?>%;" aria-valuenow="<?php echo $porcentaje;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $porcentaje;?>%</div>
          </div>
          <input type="text" value="<?php echo $cod1; ?>">
          <br>
</div>
