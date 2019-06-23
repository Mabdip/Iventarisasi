<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Input Barang</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <label> Input Barang</label>
                                    </div>
                              
                                </div>
                            <form class="form-horizontal" action="<?php echo site_url('admin/add_barang'); ?>" method="post"> 
                            <div class="form-group">
                                <label class="control-label col-sm-2">Jenis Barang</label>
                                <div class="col-sm-6">
                                  <select name="jenis_barang">
                                    <option value="">---------------------------------------</option>
                                    <option value="ATK">Alat Tulis Kantor</option>
                                    <option value="Alat dan Bahan Kebersihan">Alat dan Bahan Kebersihan</option>
                                    <option value="Barang Cetakan">Barang Cetakan</option>
                                    <option value="Komponen Listrik">Komponen Listrik</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2">Nama Barang</label>
                                <div class="col-sm-6">
                                  <input type="text" name="nama_barang" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2">Satuan</label>
                                <div class="col-sm-6">
                                  <input type="text" name="satuan" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2">Harga Satuan</label>
                                <div class="col-sm-6">
                                  <input type="text" name="harga" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                  <button class="btn btn-theme" type="submit" >Submit</button>
                                </div>
                              </div>
                            </form>
                          
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