<!DOCTYPE html>
<html lang="EN">

<head>

  <?php include('../layouts/inc-meta.php'); ?>

</head>

<body>

  <!-- begin #header -->
  <?php include('../layouts/inc-header.php'); ?>
  <!-- end #header -->

  <!-- begin #content -->
  <div id="content" class="content">

    <section class="bg-white">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-white px-0 m-0">
            <li class="breadcrumb-item"><a href="../home">หน้าแรก</a></li>
            <li class="breadcrumb-item active" aria-current="page">แจ้งชำระเงิน</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <form action="../cart/succeed.php" method="post" accept-charset="utf-8">
          <div class="card">
            <div class="card-header">
              <h5 class="h6 mb-0">แจ้งชำระเงิน</h5>
            </div>
            <div class="card-body">
              <h5 class="h6 mb-0">รายละเอียดบัญชีธนาคาร</h5>
              <div class="row my-4">
                <div class="col-xl-8 col-lg-7 col-md-7 row mx-0 d-flex align-content-center flex-wrap">
                  <div class="col-xl-6 text-center mb-3">
                    <img src="https://placehold.co/260x105" alt="" class="mx-auto mb-3 h-60px">
                    <p class="m-0">เลขที่บัญชี<br>ธนาคาร : กสิกรไทย<br>203-0214-0125</p>
                  </div>
                  <div class="col-xl-6 text-center mb-3">
                    <img src="https://placehold.co/260x105" alt="" class="mx-auto mb-3 h-60px">
                    <p class="m-0">เลขที่บัญชี<br>ธนาคาร : ไทยพาณิชย์<br>203-0214-0126</p>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 mx-auto d-flex justify-content-center flex-wrap">
                  <a href="../../public/images/qr.jpg" download>
                    <img src="../../public/images/qr.jpg" alt="" class="mw-100 w-300px">
                  </a>
                  <div class="btn btn-primary mt-3" style="border-radius: 45px;">แสกน QR Code เพื่อชำระเงิน</div>
                </div>
              </div>
              <hr class="my-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group row">
                    <label class="col-md-3 col-lg-4 col-form-label">หมายเลขที่คำสั่งซื้อ</label>
                    <div class="col-md-9 col-lg-8">
                      <input type="text" class="form-control" name="" required="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group row">
                    <label class="col-md-3 col-lg-4 col-form-label">ชื่อ-นามสกุล</label>
                    <div class="col-md-9 col-lg-8">
                      <input type="text" class="form-control" name="" required="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group row">
                    <label class="col-md-3 col-lg-4 col-form-label">เบอร์โทรศัพท์</label>
                    <div class="col-md-9 col-lg-8">
                      <input type="tel" class="form-control" name="" placeholder="หมายเลขโทรศัพท์" required="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group row">
                    <label class="col-md-3 col-lg-4 col-form-label">หลักฐานการโอน</label>
                    <div class="col-md-9 col-lg-8">
                      <div class="input-group" data-toggle="aizuploader" data-type="image">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                        </div>
                        <div class="form-control bg-light file-amount">1 File selected</div>
                        <input type="hidden" name="photo" class="selected-files">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row px-2">
            <div class="col-xl-2 col-md-2 col-6 my-1 px-2 mr-auto">
              <button type="button" class="btn btn-dark btn-sm w-100" onclick="window.history.back()">ย้อนกลับ</button>
            </div>
            <div class="col-xl-2 col-md-3 col-6 my-1 px-2">
              <button type="submit" class="btn btn-primary btn-sm w-100">แจ้งชำระเงิน</button>
            </div>
          </div>
        </form>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- begin #footer -->
  <?php include('../layouts/inc-footer.php'); ?>
  <!-- end #footer -->

  <?php include('../layouts/inc-script.php'); ?>
</body>

</html>