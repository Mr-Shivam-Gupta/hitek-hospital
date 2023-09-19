<!-- <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Job Application</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashbord');?>">Home</a></li>
                    <li class="breadcrumb-item active">Job Application</li>
                </ol>
            </div>
        </div>
    </div>
</section> -->
<section class="content pt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Job Application</h3>
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
                                                    <th>Email</th>
                                                    <th>Number</th>
                                                    <th>Message</th>
                                                    <th>Resume</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach ($application->result_array() as $application): ?>
                                                    <td><?php echo $i++;?></td>
                                                    <td><?php echo ucwords($application['candidate_name']);?></td>
                                                    <td><?php echo $application['candidate_email']?></td>
                                                    <td><?php echo $application['candidate_number']?></td>
                                                    <td><?php echo $application['candidate_message']?></td>
                                                    <td><a class="btn btn-info" target="_blank" href="<?php echo base_url('').'uploads/resume/'.$application['candidate_resume']?>">View</a></td>
                                                     <td>
                                                      
                                                            <a href="<?php echo base_url('admin/deleteapplication/').$application['id'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                       
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

