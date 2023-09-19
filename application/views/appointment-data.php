<?php include 'common/header.php';?>
<?php if($this->session->flashdata('success') != ""){  ?>
<div class="alert alert-success text-center"> <?php echo $this->session->flashdata('success');?></div>
<?php   }if($this->session->flashdata('danger') != "") { ?>
<div class="alert alert-danger text-center"> <?php echo $this->session->flashdata('danger');?></div>
<?php }?>

<?php include 'common/footer.php';?>