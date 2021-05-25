<?php
$success_flashData = $this->session->flashdata('success_flashData');
$error_flashData = $this->session->flashdata('error_flashData');
$warning_flashData = $this->session->flashdata('warning_flashData');

if ($success_flashData !== NULL) {
    echo "<div class='row d-flex'>
                <div class='col-12 col-md-6 col-lg-5 col-xl-4 d-flex fixed-bottom ml-auto'>
                    <div class='w-100 alert alert-success alert-dismissible fade show d-flex ml-auto mr-3 alert-timer' style='z-index: 999;'>
                        <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                        <span><strong>Success!</strong> $success_flashData</span>
                        </div>
                    </div>
                </div>";
}

if ($error_flashData !== NULL) {
    echo "<div class='row d-flex'>
                <div class='col-12 col-md-6 col-lg-5 col-xl-4 d-flex fixed-bottom ml-auto'>
                    <div class='w-100 alert alert-danger alert-dismissible fade show d-flex ml-auto mr-3 alert-timer' style='z-index: 999;'>
                        <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                        <span><strong>Error!</strong> $error_flashData</span>
                        </div>
                    </div>
                </div>";
}

if ($warning_flashData !== NULL) {
    echo "<div class='row d-flex'>
                <div class='col-12 col-md-6 col-lg-5 col-xl-4 d-flex fixed-bottom ml-auto'>
                    <div class='w-100 alert alert-warning alert-dismissible fade show d-flex ml-auto mr-3 alert-timer' style='z-index: 999;'>
                        <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                        <span><strong>Warning!</strong> $warning_flashData</span>
                        </div>
                    </div>
                </div>";
}
