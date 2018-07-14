<section class="content">
  <div class="row">     
    <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#op1" data-toggle="tab">Consumo en el ultimo mes</a></li>
              <li><a href="#op2" data-toggle="tab">Demo</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="op1">

                <div class="box-header with-border">
                    <h3 class="box-title">Consumo en el ultimo mes</h3>
                </div>
                <div class="box-body chart">
                    <canvas id="lineChart" style="height: 247px; width: 504px;" width="1008" height="494"></canvas>
                </div>

              </div>

              <div class="tab-pane" id="op2">

                  <div class="box-header with-border">
                      <h3 class="box-title">Area Chart</h3>
                  </div>

                  <div class="box-body chart">     
                     <canvas id="areaChart" style="height:250px"></canvas>    
                  </div>

              </div>
            </div>
         </div>
    </div>
  </div>
</section>
