<!DOCTYPE html>
<html lang="EN">

<head>

  <?php include('../layouts/inc-meta.php'); ?>
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

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
            <li class="breadcrumb-item active" aria-current="page">แจ้งชำระเงินสำเร็จ</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="py-5">
      <div class="container bg-white">

        <div class="row d-flex align-items-end">
          <div class="col-12 p-4 mb-4">
            <div class="swal2-icon swal2-success swal2-icon-show">
              <div class="swal2-success-circular-line-left"></div>
              <span class="swal2-success-line-tip"></span>
              <span class="swal2-success-line-long"></span>
              <div class="swal2-success-ring"></div>
              <div class="swal2-success-fix"></div>
              <div class="swal2-success-circular-line-right"></div>
            </div>
            <h1 class="swal2-title">แจ้งชำระเงินสำเร็จ</h1>
            <div class="swal2-html-container">ระบบได้รับการแจ้งชำระเงินของคุณเรียบร้อยแล้ว<br>กรุณารอการตรวจสอบ เพื่อยืนยันการชำระเงินของคุณ</div>
            <div class="swal2-actions">
              <a class="btn btn-primary swal2-styled" href="../product/detail.php">กลับไปหน้าสินค้า</a>
              <a class="swal2-confirm swal2-styled" href="../profile/history.php">ดูประวัติคำสั่งซื้อ</a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- begin #footer -->
  <?php include('../layouts/inc-footer.php'); ?>
  <!-- end #footer -->

  <?php include('../layouts/inc-script.php'); ?>
  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>