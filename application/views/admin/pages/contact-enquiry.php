 <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Contact Enquiry</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashbord');?>">Home</a></li>
                    <li class="breadcrumb-item active">Contact Enquiry</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Contact Enquiry Details</h3>
                            </div>
                            <div class="card-body">
                                 <?php if($msgSuccess = $this->session->flashdata('success')):?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $msgSuccess;?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif;?>
                        <?php if($msgError = $this->session->flashdata('error')):?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $msgError;?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif;?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped table-hover data_list">
                                            <thead>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Name</th>
                                                    <th>Contact Number</th>
                                                    <th>Email Id</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach ($contactEnquiry->result_array() as $contactEnquiry): ?>
                                                <tr>
                                                    <td><?php echo $i++;?></td>
                                                    <td><?php echo $contactEnquiry['name']?></td>
                                                    <td><?php echo $contactEnquiry['contact_number']?></td>
                                                    <td><?php echo $contactEnquiry['email']?></td>
                                                    <td><?php echo $contactEnquiry['message']?></td>
                                                     <td>
                                                      
                                                            <a href="<?php echo base_url('admin/deletecontactEnquiry/').$contactEnquiry['id'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                       
                                                    </td>
                                             

                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

