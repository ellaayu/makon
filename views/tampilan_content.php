
 
 <div id="content">
    <div class="panel">
       
   </div> 


       
       
       
       
       
       
       
       <div id="container">
    <h1>Pengeluaran </h1>
 
    <div id="body">
        <div id="chart"></div>
    </div>
 

</div> 


              <h4>Report</h4>

                   
                   
       <div class="panel box-v3">
          <div class="panel-heading bg-white border-none">
           
              <h4>Piket</h4>                
                    
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
               
                        </tr>
                        
                        <tr>
                            
                           <td> 
                               <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                               <tr>
                                 <td>Nama</td>
                                <td>Tugas</td>
                               </tr>
                               <tr>                           
                                      <?php
                                        $no = 0;
                                        foreach ($list as $data_tugas){
                                        $no++; ?>

                                       <td><?php echo "$data_tugas->NAMA_LENGKAP_USER"; ?> </td>
                                        <td> <?php echo $data_tugas->TUGAS; ?> </td>
                                       </tr>
                                <?php } ?>
                               </table>
                          </td>
                            <td> 
                              <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                               <tr>
                                 <td>Nama</td>
                                <td>Tugas</td>
                               </tr>
                               <tr>      
                            <?php
                        $no = 0;
                        foreach ($listselasa as $data_tugas){
                            $no++; ?>
                            
                                 <td><?php echo "$data_tugas->NAMA_LENGKAP_USER"; ?> </td>
                                        <td> <?php echo $data_tugas->TUGAS; ?> </td>
                                       </tr>
                                <?php } ?>
                               </table>
                          </td>
                            <td> 
                              <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                               <tr>
                                 <td>Nama</td>
                                <td>Tugas</td>
                               </tr>
                               <tr>      
                            <?php
                        $no = 0;
                        foreach ($listrabu as $data_tugas){
                            $no++; ?>
                            
                               <td><?php echo "$data_tugas->NAMA_LENGKAP_USER"; ?> </td>
                                        <td> <?php echo $data_tugas->TUGAS; ?> </td>
                                       </tr>
                                <?php } ?>
                               </table>
                          </td>
                            <td> 
                              <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                               <tr>
                                 <td>Nama</td>
                                <td>Tugas</td>
                               </tr>
                               <tr>      
                            <?php
                        $no = 0;
                        foreach ($listkamis as $data_tugas){
                            $no++; ?>
                            
                                <td><?php echo "$data_tugas->NAMA_LENGKAP_USER"; ?> </td>
                                        <td> <?php echo $data_tugas->TUGAS; ?> </td>
                                       </tr>
                                <?php } ?>
                               </table>
                          </td>
                            
                           
                        </tr>
                        <tr>
                            <th>Jumat</th>
                            <th>Sabtu</th>
                            <th>Minggu</th>
                        </tr>
                        <tr>
                        <td> 
                               <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                               <tr>
                                 <td>Nama</td>
                                <td>Tugas</td>
                               </tr>
                               <tr>
                            <?php
                        $no = 0;
                        foreach ($listjumat as $data_tugas){
                            $no++; ?>
                            
                                <td><?php echo "$data_tugas->NAMA_LENGKAP_USER"; ?> </td>
                                        <td> <?php echo $data_tugas->TUGAS; ?> </td>
                                       </tr>
                                <?php } ?>
                               </table>
                          </td>
                            <td> 
                              <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                               <tr>
                                 <td>Nama</td>
                                <td>Tugas</td>
                               </tr>
                               <tr>
                            <?php
                        $no = 0;
                        foreach ($listsabtu as $data_tugas){
                            $no++; ?>
                                <td><?php echo "$data_tugas->NAMA_LENGKAP_USER"; ?> </td>
                                        <td> <?php echo $data_tugas->TUGAS; ?> </td>
                                       </tr>
                                <?php } ?>
                               </table>
                          </td>
                            <td> 
                              <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                               <tr>
                                 <td>Nama</td>
                                <td>Tugas</td>
                               </tr>
                               <tr>
                            <?php
                        $no = 0;
                        foreach ($listminggu as $data_tugas){
                            $no++; ?>
                            <td><?php echo "$data_tugas->NAMA_LENGKAP_USER"; ?> </td>
                                        <td> <?php echo $data_tugas->TUGAS; ?> </td>
                                       </tr>
                                <?php } ?>
                               </table>
                          </td>
                        </tr>
    
                    </table>
           </div>
     
                       <div class="panel box-v3">
          <div class="panel-heading bg-white border-none">
           
           </div>
      </div>
   </div>
</div>        
          

<!-- start: Javascript -->
    <script src="<? echo base_url(); ?>asset/js/jquery.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/jquery.ui.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/bootstrap.min.js"></script>
   


   
    
    <!-- plugins -->
    <script src="<? echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/plugins/morris.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/plugins/raphael.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/plugins/jquery.nicescroll.js"></script>


    <!-- custom -->
     <script src="<? echo base_url(); ?>asset/js/main.js"></script>
     <script type="text/javascript">
      (function(jQuery){
          Morris.Area({
            element: 'area-chart',
            data: [
               { y: '2006', a: 25, b: 20 },
               { y: '2007', a: 50,  b: 45 },
               { y: '2008', a: 75,  b: 70 },
               { y: '2009', a: 50,  b: 40 },
               { y: '2010', a: 75,  b: 70 },
               { y: '2011', a: 50,  b: 45 },
               { y: '2012', a: 25, b: 20 }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            lineColors: ['#444','#6C76FF']
          });

          Morris.Line({
              element: 'line-chart',
              data: [
                { y: '2006', a: 25, b: 20 },
                { y: '2007', a: 50,  b: 45 },
                { y: '2008', a: 75,  b: 70 },
                { y: '2009', a: 50,  b: 40 },
                { y: '2010', a: 75,  b: 70 },
                { y: '2011', a: 50,  b: 45 },
                { y: '2012', a: 25, b: 20 }
              ],
              xkey: 'y',
              ykeys: ['a', 'b'],
              labels: ['Series A', 'Series B'],
              lineColors: ['#6C76FF','#ddd']
            });
            
            Morris.Donut({
              element: 'doughnut-chart',
              data: [
                {value: 70, label: 'foo'},
                {value: 15, label: 'bar'},
                {value: 10, label: 'baz'},
                {value: 5, label: 'A really really long label'}
              ],
              colors:['#FF3835','#515151','#6C76FF','#ddd'],
              formatter: function (x) { return x + "%"}
            }).on('click', function(i, row){
              console.log(i, row);
            });

            Morris.Bar({
              element: 'bar-chart',
              data: [
                {x: '2011 Q1', y: 3, z: 2, a: 3},
                {x: '2011 Q2', y: 2, z: null, a: 1},
                {x: '2011 Q3', y: 0, z: 2, a: 4},
                {x: '2011 Q4', y: 2, z: 4, a: 3}
              ],
              xkey: 'x',
              ykeys: ['y', 'z', 'a'],
              labels: ['Buyer', 'Creditor', 'Investor'],
              barColors: ['#FF3835','#515151','#6C76FF']
            }).on('click', function(i, row){
              console.log(i, row);
            });

        })(jQuery);
     </script>
  <!-- end: Javascript -->
