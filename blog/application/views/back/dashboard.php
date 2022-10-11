<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->


        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Gwella </a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Transaction</h4>
                        <div class="table-responsive">


                            <table id="datatable-buttons" class="table table-centered table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>S N.</th>
                                        <th>Name</th>
                                        <th>species</th>
                                        <th>potency</th>
                                        <th>cost</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $i=1;
											foreach($show as $record) {  ?>
                                    <tr><?php echo isset($m_title)?$m_title:'';?>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $record->title;?></td>
                                        <td><?php echo $record->species;?></td>
                                        <td><?php echo $record->potency;?></td>
                                        <td><?php echo $record->cost;?></td>

                                        <td><img src="<?php echo base_url(); ?>upload_images/<?php echo $record->thumb_image;?>"
                                                alt="" class="rounded  img-fluid" width="60"></td>
                                        <td><?php echo ($record->status=='1')? 'Enable':'Disabled';?></td>
                                        <td>

                                            <div class="button-items">
                                                <a title="view detail"
                                                    href="<?php echo base_url()?>adminproduct/view/<?php echo $record->id ?>"
                                                    class="btn btn-success btn-rounded waves-effect waves-light"><i
                                                        class="fas fa-eye"></i></a>

                                                <a href="<?php echo base_url()?>adminproduct/edit/<?php echo $record->id ?>"
                                                    class="btn btn-primary btn-rounded waves-effect waves-light"><i
                                                        class="fas fa-edit"></i></a>


                                                <button onclick="myFunction(<?php echo $record->id ?>)"
                                                    id="<?php echo $record->id ?>" type="button"
                                                    class="btn btn-danger btn-rounded waves-effect waves-light"><i
                                                        class="fas fa-trash"></i></button>


                                            </div>

                                        </td>


                                    </tr>
                                    <?php  $i++; 
											} ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->