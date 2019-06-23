<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Daftar Barang</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <label> Daftar Barang</label>
                                    </div>
                              
                                </div>
                                <table class="table table-bordered" style="background-color: white;">
                                    <thead>
                                        <tr>
                                            <td> ID </td>
                                            <td> Nama Barang </td>
                                            <td> Satuan </td>
                                            <td> Harga </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($data->result() as $row) :?>
                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td><?php echo $row->nama_barang; ?></td>
                                            <td><?php echo $row->satuan;?></td>
                                            <td><?php echo $row->harga_satuan;?></td>
                                        </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                              </table>
                              <div class="row">
                                  <div class="col">
                                      <!--Tampilkan pagination-->
                                      <?php echo $pagination; ?>
                                  </div>
                              </div>
                            </div>
                        </div>
                        
                    </div>
                                        <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
        </div>
        <!-- END CONTAINER -->