<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">Advocate</h4>



                    <div class="page-title-right">

                        <ol class="breadcrumb m-0">

                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

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

                        <h4 class="card-title">Edit advocate</h4>


                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">


                                    <form method="post"
                                        action="<?php echo base_url();?>adminblog/edit/<?php echo $update[0]->id?>"
                                        enctype="multipart/form-data">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Name
                                                    </label>

                                                    <input type="text" name="b_name" class="form-control"
                                                        value="<?php echo $update[0]->b_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>


                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Image
                                                    </label>

                                                    <input type="file" name="b_img" class="form-control"
                                                        id="formrow-email-input">
                                                    <img src="<?php echo base_url();?>upload_images/<?php echo  $update[0]->b_img;?>"
                                                        width="50">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Blog Category
                                                    </label>

                                                    <input type="text" name="b_title" class="form-control"
                                                        value="<?php echo $update[0]->b_title?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input"> Blog heading
                                                    </label>

                                                    <textarea type="text" name="b_heading" class="form-control"
                                                        id="formrow-email-input"
                                                        rows="1"><?php echo $update[0]->b_heading?></textarea>
                                                 </div>
                                             </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input"> Blog Description
                                                    </label>

                                                    <textarea type="text" name="b_description" class="form-control"
                                                        id="formrow-email-input"
                                                        rows="1"><?php echo $update[0]->b_description?></textarea>
                                                 </div>
                                             </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> Blog Question </th>

                                                        <th> Blog Description</th>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                     <?php $question = json_decode($update[0]->b_ques1);
                                                 $answer = json_decode($update[0]->b_desc1);
                                                $i= 0;
                                                $qescount =    count($question);
                                                foreach($question as $key=>$view) { 
                                                //  echo $key;
                                                ?>
                                                  <tr class="sumit"  id="<?php echo ($key == 0) ? 'addRow' : ' ';?>">
                                                          <td class="col-xs-12">
                                                            <textarea class="form-control addPrefer text-justify"
                                                                type="text" name="b_ques1[]"
                                                                rows="1"><?php echo $question[$i];?> </textarea>
                                                        </td>
                                                        <td class="col-xs-12">
                                                                        <textarea class="form-control addCommon" type="text"name="b_desc1[]" rows="1"><?php echo $answer[$i]?></textarea>
                                                        </td>
                                                        <td class="col-xs-2 text-center">
                                                        <?php if ($key == 0) { ?>

                                                            <span class="addBtn">
                                                                <i class="btn btn-primary">ADD</i>
                                                            </span>
                                                          
                                                                <?php } ?>
                                                                <button class="btn btn-danger"
                                                                onClick="deleteRow(this)">
                                                                Delete</button>
                                                        </td>
                                                    </tr>
                                                    </tr>
                                                    <?php  $i++;
                                            } ?>                                       
                                            </tbody>
                                            </table>

                                            <div class="col-md-12">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-password-input">Status</label>

                                                    <select class="form-select" name="status">
                                                        <option value="<?php echo $update[0]->status?>">
                                                            <?php echo ($update[0]->status == 1) ? "Active" : "In-Active";?>
                                                        </option>
                                                        <option value="1">Enable</option>

                                                        <option value="0">Disable</option>

                                                    </select>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="mt-4">

                                            <button type="submit" class="btn btn-primary w-md">Submit</button>

                                        </div>



                                    </form>
                                </div>



                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>

    <!-- End Form Layout -->





    <!-- ckeditor -->

    <script src="<?php echo base_url();?>admin_assets//libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js">
    </script>



    <!--tinymce js-->

    <script src="<?php echo base_url();?>admin_assets//libs/tinymce/tinymce.min.js"></script>



    <script>
    ClassicEditor

        .create(document.querySelector('.classic-editor'))

        .catch(error => {

            console.error(error);

        });
    </script>



    <script>
    ClassicEditor

        .create(document.querySelector('.classic-editor2'))

        .catch(error => {

            console.error(error);

        });
    </script>

    <!-- init js -->

    <script src="<?php echo base_url();?>admin_assets//js/pages/form-editor.init.js"></script>



    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- <div class="col-md-12">

        <div class="col-md-1 pull-right">
            <button class="btn btn-primary pull-right">Save</button>
        </div>
    </div> -->



    <script>
    function formatRows(main, prefer, common) {
        return '<tr><td class="col-xs-5"><textarea type="text"  placeholder="Enter Name" class="form-control editable" name="b_ques1[]" rows="1" placeholder="Enter Blog Ques...." />  </textarea></td>' +
            '<td class="col-xs-5"><textarea type="text"   class="form-control editable" name="b_desc1[]" rows="1" placeholder="Enter Blog desc...."/> </textarea></td>' +
            '<td class="col-xs-2 text-center"><span class="addBtn"><i class="btn btn-primary" onClick="addRow(this)">ADD</i> </span> <button  class="btn btn-danger" onClick="deleteRow(this)">' +
            'Delete</button></td></tr>';
    };      

    function deleteRow(trash) {
        $(trash).closest('tr').remove();
    };

    function addRow() {
        var main = $('.addMain').val();
        var preferred = $('.addPrefer').val();
        var common = $('.addCommon').val();
       // alert(e)
        $(formatRows(main, preferred, common)).insertAfter('#addRow');
        $(input).val('');
    }

    $('.addBtn').click(function() {
        addRow();
    });
    </script>
    <style>
    .remove {
        background: #f1f1f1;

        td {
            font-style: italic;
        }
    }

    .table>tbody>tr>td {
        vertical-align: middle;
    }

    .input-group {
        width: 100%;
    }


    .addBtn {
        cursor: pointer;
    }
    </style>