<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">blog</h4>



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

                        <h4 class="card-title">Add blog</h4>

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">

                                    <form method="post" action="<?php echo base_url();?>adminblog/add"
                                        enctype="multipart/form-data">


                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Name
                                                    </label>

                                                    <input type="text" name="b_name" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>



                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Blog Category</label>

                                                    <input type="text" name="b_title" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Blog Heading </label>


                                                    <textarea type="text" name="b_heading" class="form-control"
                                                        id="formrow-email-input" rows="1"> </textarea>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Blog Description </label>


                                                    <textarea type="text" name="b_description" class="form-control"
                                                        id="formrow-email-input" rows="1"> </textarea>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Image</label>

                                                    <input type="file" name="b_img" class="form-control"
                                                        id="formrow-email-input">
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
                                                    <tr id="addRow">
                                                        <td class="col-xs-5">
                                                            <textarea class="form-control addPrefer" type="text"
                                                                placeholder="Enter Blog Ques...." name="b_ques1[]"
                                                                rows="1"></textarea>
                                                        </td>
                                                        <td class="col-xs-5">
                                                            <textarea class="form-control addCommon" type="text"
                                                                placeholder="Enter Blog desc...." name="b_desc1[]"
                                                                rows="1"></textarea>
                                                        </td>
                                                        <td class="col-xs-2 text-center">
                                                            <span class="addBtn">
                                                                <i class="btn btn-primary">ADD</i>
                                                            </span>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <div class="col-md-12">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-password-input">Status</label>

                                                    <select class="form-select" name="status">

                                                        <option value="1">Enable</option>

                                                        <option value="0">Disable</option>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="mt-4">

                                                <button type="submit" class="btn btn-primary w-md">Submit</button>

                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Form Layout -->


        <!-- ckeditor -->

        <script src="<?php echo base_url();?>admin_assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js">
        </script>



        <!--tinymce js-->

        <script src="<?php echo base_url();?>admin_assets/libs/tinymce/tinymce.min.js"></script>



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

        <script src="<?php echo base_url();?>admin_assets/js/pages/form-editor.init.js"></script>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
         



        <script>
        function formatRows(main, prefer, common) {
            return '<tr><td class="col-xs-5"><textarea type="text"  placeholder="Enter Name" class="form-control editable" name="b_ques1[]" rows="1" placeholder="Enter Blog Ques...." /></textarea></td>' +
                '<td class="col-xs-5"><textarea type="text"   class="form-control editable" name="b_desc1[]" rows="1" placeholder="Enter Blog desc...."/></textarea></td>' +
                '<td class="col-xs-2 text-center"><button  class="btn btn-danger" onClick="deleteRow(this)">' +
                'Delete</button></td></tr>';
        };
        

        function deleteRow(trash) {
            $(trash).closest('tr').remove();
        };

        function addRow() {
            var main = $('.addMain').val();
            var preferred = $('.addPrefer').val();
            var common = $('.addCommon').val();
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