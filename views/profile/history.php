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
            <li class="breadcrumb-item"><a href="../profile">บัณชีของฉัน</a></li>
            <li class="breadcrumb-item active" aria-current="page">ประวัติการสั่งซื้อ</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 d-none d-xl-block">
            <div class="b-sticky">
              <!-- begin menu-profile -->
              <?php include('../layouts/inc-menu-profile.php'); ?>
              <!-- end menu-profile -->
            </div>
          </div>
          <div class="col-xl-9">
            <div class="card mb-0">
              <div class="card-header">
                <h5 class="mb-0">ประวัติการสั่งซื้อ</h5>
                <form action="#" method="GET" class="d-flex align-items-center">
                  <div class="input-group bg-light rounded-right">
                    <input type="text" class="border-0 bg-light form-control pr-0" name="keyword" placeholder="ค้นหาคำสั่งซื้อ" autocomplete="off">
                    <div class="input-group-append d-none d-lg-block">
                      <button class="btn px-3" type="submit">
                        <i class="la la-search la-flip-horizontal fs-20"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-body" style="border-radius: 15px;">
                <div class="table-responsive">
                  <table class="table aiz-table mb-0 footable footable-1 breakpoint-xl table-responsive-md" style="min-width: 700px;">
                    <thead>
                      <tr class="footable-header">
                        <th class="footable-first-visible" style="display: table-cell;">หมายเลยคำสั่งซื้อ</th>
                        <th data-breakpoints="md" style="display: table-cell;">Date</th>
                        <th data-breakpoints="md" style="display: table-cell;">Payment Status</th>
                        <th class="text-right footable-last-visible" style="display: table-cell;">Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-primary">Unpaid</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="creditCard"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-primary">Unpaid</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="bankTransfer"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-danger">Canceled</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm disabled" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="bankTransfer"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-primary">Unpaid</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="creditCard"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-success">completed</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm disabled" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="bankTransfer"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm disabled" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-success">completed</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm disabled" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="bankTransfer"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm disabled" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-success">completed</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm disabled" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="bankTransfer"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm disabled" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-success">completed</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm disabled" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="bankTransfer"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm disabled" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-success">completed</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm disabled" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="bankTransfer"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm disabled" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible" style="display: table-cell;">
                          <a href="#20210308-12462162" data-toggle="modal" data-target="#order_details">20210308-12462162</a>
                        </td>
                        <td style="display: table-cell;">10-06-2022 17:20 PM</td>
                        <td style="display: table-cell;">
                          <span class="badge badge-inline badge-soft-success">completed</span>
                        </td>
                        <td class="text-right footable-last-visible" style="display: table-cell;">
                          <a href="../profile/detail.php" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Order Details">
                            <i class="las la-file-alt"></i>
                          </a>
                          <button type="button" class="btn btn-soft-info btn-icon btn-circle btn-sm disabled" data-toggle="popover" data-placement="bottom" data-toggle="popover" data-active="bankTransfer"><!-- บัตรเครดิต=>creditCard โอนผ่านธนาคาร=>bankTransfer -->
                            <i class="las la-money-bill"></i>
                          </button>
                          <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm disabled" title="trash">
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>

                      <tr class="footable-empty">
                        <td colspan="8">ไม่พบอะไร</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <ul class="pagination d-flex justify-content-end px-4">
                <li class="page-item">
                  <a class="page-link" href="#" rel="prev" aria-label="« Previous">‹</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- popover content -->
  <div id="popover-content" style="display: none">
    <div class="box-popover">
      <a href="../profile/payment.php?pay=creditCard" class="text-dark" id="creditCard">บัตรเครดิต</a>
      <a href="../profile/payment.php?pay=bankTransfer" class="text-dark" id="bankTransfer">โอนผ่านธนาคาร</a>
    </div>
  </div>

  <!-- begin modal -->
  <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div id="order-details-modal-body">
          <div class="modal-header">
            <a href="../home">
              <img src="../../public/images/logo.png" alt="Active eCommerce CMS" class="mw-100 h-30px" height="30">
            </a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body gry-bg pt-3">
            <b class="fs-18">Order id: 20210308-12462162</b>
            <div class="row">

              <div class="col-lg-6">
                <table class="table-borderless table">
                  <tr>
                    <td class="w-50 fw-500 text-primary">รหัสการสั่งซื้อ :</td>
                    <td>20220726-08040637</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">ชื่อ :</td>
                    <td>Paul K. Jensen</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">อีเมล :</td>
                    <td>customer@example.com</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">ที่อยู่จัดส่ง :</td>
                    <td>
                      123/456 Lorem ipsum dolor sit amet, Lorem 10223<br>
                      Tel. 09736485XX
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-lg-6">
                <table class="table-borderless table">
                  <tr>
                    <td class="w-50 fw-500 text-primary">วันสั่ง :</td>
                    <td>26-07-2022 08:04 AM</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">สถานะการสั่งซื้อ :</td>
                    <td>รอชำระเงิน</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">ยอดสั่งซื้อทั้งหมด :</td>
                    <td>฿ 83,459.01</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">การส่งสินค้า :</td>
                    <td><img src="../../public/images/icon-flash.jpg" class="mr-3 h-20px h-sm-30px">Flash Express</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">วิธีการชำระเงิน :</td>
                    <td>โอนผ่านธนสคาร</td>
                  </tr>
                </table>
              </div>
            </div>

            <table class="aiz-table table footable footable-1 breakpoint-xl border-bottom">
              <thead>
                <tr class="footable-header bg-light">
                  <th class="w-50" style="display: table-cell;">รายละเอียด</th>
                  <th data-breakpoints="md" style="display: table-cell;">ราคาต่อหน่วย</th>
                  <th style="display: table-cell;">จำนวน</th>
                  <th style="display: table-cell;">ราคารวม</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="display: table-cell;">
                    <img src="../../public/images/demo-img1.jpg" class="img-fit mr-2 float-left" style="width: 70px;">
                    <a href="#" target="_blank" class="text-dark">Lorem ipsum dolor sit amet, consecttuer</a>
                  </td>
                  <td style="display: table-cell;">฿ 25,981.00</td>
                  <td style="display: table-cell;">1</td>
                  <td style="display: table-cell;">฿ 25,981.00</td>
                </tr>
                <tr>
                  <td style="display: table-cell;">
                    <img src="../../public/images/demo-img1.jpg" class="img-fit mr-2 float-left" style="width: 70px;">
                    <a href="#" target="_blank" class="text-dark">Lorem ipsum dolor sit amet, consecttuer</a>
                  </td>
                  <td style="display: table-cell;">฿ 25,981.00</td>
                  <td style="display: table-cell;">1</td>
                  <td style="display: table-cell;">฿ 25,981.00</td>
                </tr>
              </tbody>
            </table>

            <div class="row">
              <div class="col-md-7 pr-md-4">
                <div class="row">
                  <div class="col-lg-12 col-md-12 pt-3">
                    <div class="d-flex justify-content-between">
                      <h5 class="h6 mb-0 text-primary">ข้อมูลการจัดส่ง</h5>
                    </div>
                    <table class="table-borderless table">
                      <tr>
                        <td class="fw-500" style="width: 100px;">ชื่อ :</td>
                        <td>Paul K. Jensen</td>
                      </tr>
                      <tr>
                        <td class="fw-500">ที่อยู่จัดส่ง :</td>
                        <td>
                          123/456 Lorem ipsum dolor sit amet, Lorem 10223
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-500">เบอร์โทร :</td>
                        <td>09736485XX</td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-12">
                    <span class="h6 text-primary">คูปองส่วนลด</span>
                    -
                  </div>
                </div>
              </div>
              <div class="col-md-5 border-lg-left">
                <table class="table-borderless table ml-auto">
                  <tbody>
                    <tr>
                      <td class="w-50 fw-500">ยอดรรวมสินค้า :</td>
                      <td class="text-right">
                        <span class="strong-600">77,943.00</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-50 fw-500">ค่าจัดส่ง :</td>
                      <td class="text-right">
                        <span class="text-italic">60.00</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-50 fw-500">VAT 7% :</td>
                      <td class="text-right">
                        <span class="text-italic">5,456.01</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-50 fw-500">ส่วนลด :</td>
                      <td class="text-right">
                        <span class="text-italic">0.00</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-50 fw-500 text-primary">
                        <h5>ยอดรวมทั้งสิ้น :</h5>
                      </td>
                      <td class="text-right text-primary">
                        <strong><span>฿ 83,459.01</span></strong>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <a href="#" class="btn btn-primary d-table mx-auto mt-3 px-5" download>ดาว์นโหลดใบเสร็จ</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

  <!-- begin #footer -->
  <?php include('../layouts/inc-footer.php'); ?>
  <!-- end #footer -->

  <?php include('../layouts/inc-script.php'); ?>
  <script>
    $(function() {
      $('[data-toggle="popover"]:not(.disabled)').popover({
        trigger: 'focus',
        html: true,
        content: function() {
          $('#' + $(this).data('active')).siblings().removeClass('active');
          $('#' + $(this).data('active')).addClass('active');
          return $('#popover-content').html();
        }
      });
    });
  </script>
</body>

</html>