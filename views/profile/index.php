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
            <li class="breadcrumb-item active" aria-current="page">จัดการข้อมูลส่วนตัว</li>
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

            <!-- Basic Info-->
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0 h6">Basic Info</h5>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Your Name</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control bg-light" placeholder="Your Name" name="name" value="เจนนี่ เจนนิภา">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Your Phone</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control bg-light" placeholder="Your Phone" name="phone" value="086 456 7895">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Your Sex</label>
                    <div class="col-md-9 d-flex">
                      <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="male" checked>
                        <label class="form-check-label ml-1" for="exampleRadios1">male</label>
                      </div>
                      <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="female">
                        <label class="form-check-label ml-1" for="exampleRadios2">female</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Your Birthday</label>
                    <div class="col-md-9">
                      <input type="date" class="form-control bg-light" placeholder="Your Phone" name="birthday" value="1990-01-31">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Photo</label>
                    <div class="col-md-9">
                      <div class="input-group" data-toggle="aizuploader" data-type="image">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                        </div>
                        <div class="form-control bg-light file-amount">1 File selected</div>
                        <input type="hidden" name="photo" value="988" class="selected-files">
                      </div>
                      <div class="file-preview box sm">
                        <div class="d-flex justify-content-between align-items-center mt-2 file-preview-item" data-id="988" title="2.jpg">
                          <div class="align-items-center align-self-stretch d-flex justify-content-center thumb"><img src="https://placehold.co/200" class="img-fit"></div>
                          <div class="col body">
                            <h6 class="d-flex"><span class="text-truncate title">2</span><span class="ext flex-shrink-0">.jpg</span></h6>
                            <p>74 KB</p>
                          </div>
                          <div class="remove" onclick="$('.file-preview-item[data-id=988]').remove();"><button class="btn btn-sm btn-link remove-attachment" type="button"><i class="la la-close"></i></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Your Password</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control bg-light" placeholder="New Password" name="new_password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Confirm Password</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control bg-light" placeholder="Confirm Password" name="confirm_password">
                    </div>
                  </div>
                  <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-primary btn-sm">อัพเดตข้อมูลโปรไฟล์</button>
                  </div>
                </div>
              </div>

            </form>

            <!-- Address -->
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Address</h5>
              </div>
              <div class="card-body">
                <div class="row gutters-10">

                  <div class="col-lg-6">
                    <div class="border p-3 pr-5 rounded mb-3 position-relative">
                      <div>
                        <span class="w-50 fw-600">Address:</span>
                        <span class="ml-2">In nulla officia tot</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Postal Code:</span>
                        <span class="ml-2">Ut aut vel ut maiore</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">City:</span>
                        <span class="ml-2">Sed numquam dolores</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Country:</span>
                        <span class="ml-2">Niger</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Phone:</span>
                        <span class="ml-2">088 8888888</span>
                      </div>
                      <div class="dropdown position-absolute right-0 top-0">
                        <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                          <i class="la la-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" data-toggle="modal" data-target="#edit-address-modal">Edit</a>
                          <a class="dropdown-item" href="#">Make This Default</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="border p-3 pr-5 rounded mb-3 position-relative">
                      <div>
                        <span class="w-50 fw-600">Address:</span>
                        <span class="ml-2">In nulla officia tot</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Postal Code:</span>
                        <span class="ml-2">Ut aut vel ut maiore</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">City:</span>
                        <span class="ml-2">Sed numquam dolores</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Country:</span>
                        <span class="ml-2">Niger</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Phone:</span>
                        <span class="ml-2">+1 (376) 885-8047</span>
                      </div>
                      <div class="position-absolute right-0 bottom-0 pr-2 pb-3">
                        <span class="badge badge-inline badge-primary">Default</span>
                      </div>
                      <div class="dropdown position-absolute right-0 top-0">
                        <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                          <i class="la la-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" data-toggle="modal" data-target="#edit-address-modal">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="border p-3 pr-5 rounded mb-3 position-relative">
                      <div>
                        <span class="w-50 fw-600">Address:</span>
                        <span class="ml-2">In nulla officia tot</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Postal Code:</span>
                        <span class="ml-2">Ut aut vel ut maiore</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">City:</span>
                        <span class="ml-2">Sed numquam dolores</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Country:</span>
                        <span class="ml-2">Niger</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Phone:</span>
                        <span class="ml-2">088 8888888</span>
                      </div>
                      <div class="dropdown position-absolute right-0 top-0">
                        <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                          <i class="la la-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" data-toggle="modal" data-target="#edit-address-modal">Edit</a>
                          <a class="dropdown-item" href="#">Make This Default</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="border p-3 pr-5 rounded mb-3 position-relative">
                      <div>
                        <span class="w-50 fw-600">Address:</span>
                        <span class="ml-2">In nulla officia tot</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Postal Code:</span>
                        <span class="ml-2">Ut aut vel ut maiore</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">City:</span>
                        <span class="ml-2">Sed numquam dolores</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Country:</span>
                        <span class="ml-2">Niger</span>
                      </div>
                      <div>
                        <span class="w-50 fw-600">Phone:</span>
                        <span class="ml-2">088 8888888</span>
                      </div>
                      <div class="dropdown position-absolute right-0 top-0">
                        <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                          <i class="la la-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" data-toggle="modal" data-target="#edit-address-modal">Edit</a>
                          <a class="dropdown-item" href="#">Make This Default</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mx-auto mb-3">
                    <div class="border p-3 rounded mb-3 c-pointer text-center bg-light h-100 d-flex flex-column justify-content-center" data-toggle="modal" data-target="#new-address-modal">
                      <i class="las la-plus la-2x mb-3 text-primary"></i>
                      <div class="alpha-7">Add New Address</div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- tax invoice -->
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0 h6">tax invoice</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-md-4">
                      <div class="form-group">
                        <input type="radio" name="taxType" id="radioTypePerson" value="person" checked>
                        <label for="radioTypePerson" class="col-form-label">บุคคลธรรมดา</label>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                      <div class="form-group">
                        <input type="radio" name="taxType" id="radioTypeCorporate" value="corporate">
                        <label for="radioTypeCorporate" class="col-form-label">นิติบุคคล</label>
                      </div>
                    </div>
                  </div>
                  <div class="divPerson">
                    <div class="form-group row">
                      <label for="personName" class="col-md-3 col-form-label">ชื่อ-นามสกุล</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control bg-light" id="personName" name="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="IDCard" class="col-md-3 col-form-label">เลขที่บัตรประชาชน</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control bg-light" id="IDCard" placeholder="เลขที่บัตรประชาชน 13 หลัก" name="">
                      </div>
                    </div>
                  </div>
                  <div class="divCorporate" style="display: none;">
                    <div class="form-group row">
                      <label for="corporateName" class="col-md-3 col-form-label">ชื่อองค์กร/บริษัท</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control bg-light" id="corporateName" name="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="taxID" class="col-md-3 col-form-label">หมายเลขผู้เสียภาษี</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control bg-light" id="taxID" placeholder="หมายเลขผู้เสียภาษี 13 หลัก" name="">
                      </div>
                    </div>
                  </div>
                  <div class="divCorporate row" style="display: none;">
                    <div class="col-lg-6 col-md-4">
                      <div class="form-group">
                        <input type="radio" name="branchType" value="headoffice" id="branchTypeHead" onclick="checkBranch(this.value);" checked>
                        <label for="branchTypeHead">สำนักงานใหญ่</label>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                      <div class="form-group row">
                        <div class="col-md-4">
                          <input type="radio" name="branchType" id="branchTypeSub" value="subBranch" onclick="checkBranch(this.value);">
                          <label for="branchTypeSub">รหัสสาขา</label>
                        </div>
                        <div class="col-md-8 divBranch" style="display: none;">
                          <input type="text" class="form-control bg-light" id="branch" placeholder="ตัวเลขรหัสสาขา 5 หลัก" name="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="taxMobile">หมายเลขโทรศัพท์</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control bg-light" id="taxMobile" name="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="taxAddress">ที่อยู่</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control bg-light" id="taxAddress" name="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group row">
                        <label class="col-lg-4 col-md-3 col-form-label" for="taxTownID">แขวง/ตำบล</label>
                        <div class="col-lg-8 col-md-9">
                          <input type="text" class="form-control bg-light" id="taxTownID" name="">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group row">
                        <label class="col-lg-4 col-md-3 col-form-label" for="taxDistrictID">เขต/อำเภอ</label>
                        <div class="col-lg-8 col-md-9">
                          <input type="text" class="form-control bg-light" id="taxDistrictID" name="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group row">
                        <label class="col-lg-4 col-md-3 col-form-label" for="taxRegionsID">จังหวัด</label>
                        <div class="col-lg-8 col-md-9">
                          <input type="text" class="form-control bg-light" id="taxRegionsID" name="">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group row">
                        <label class="col-lg-4 col-md-3 col-form-label" for="taxPostal">รหัสไปรษณีย์</label>
                        <div class="col-lg-8 col-md-9">
                          <input type="text" class="form-control bg-light" id="taxPostal" name="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-primary btn-sm">อัพเดตข้อมูลใบกำกับภาษี</button>
                  </div>
                </div>
              </div>

            </form>

            <!-- Change Email -->
            <form action="#" method="POST">
              <div class="card mb-0">
                <div class="card-header">
                  <h5 class="mb-0 h6">Change your email</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <label>Your Email</label>
                    </div>
                    <div class="col-md-9">
                      <div class="input-group mb-3">
                        <input type="email" class="form-control bg-light" placeholder="Your Email" name="email" value="seller@example.com">
                        <div class="input-group-append">
                          <button type="button" class="btn btn-outline-secondary new-email-verification btn-sm">
                            <span class="d-none loading">
                              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Sending Email...
                            </span>
                            <span class="default">Verify</span>
                          </button>
                        </div>
                      </div>
                      <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary btn-sm">อัพเดต Email</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- begin modal -->
  <div class="modal fade" id="new-address-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel">New Address</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body" id="edit_modal_body">
          <form class="form-default" role="form" action="#" method="POST">
            <div class="p-3">
              <div class="row">
                <div class="col-md-3">
                  <label>Address</label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control bg-light mb-3" placeholder="Your Address" rows="2" name="address" required=""></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Country</label>
                </div>
                <div class="col-md-9">
                  <div class="mb-3">
                    <select class="custom-select w-100 bg-light" name="">
                      <option value="">เลือกพื้นที่</option>
                      <option value="อุดมสุข, อ่อนนุช">อุดมสุข, อ่อนนุช</option>
                      <option value="รามคําแหง">รามคําแหง</option>
                      <option value="มีนบุรี">มีนบุรี</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label>City</label>
                </div>
                <div class="col-md-9">
                  <div class="mb-3">
                    <select class="custom-select w-100 bg-light" name="">
                      <option value="">เลือกพื้นที่</option>
                      <option value="อุดมสุข, อ่อนนุช">อุดมสุข, อ่อนนุช</option>
                      <option value="รามคําแหง">รามคําแหง</option>
                      <option value="มีนบุรี">มีนบุรี</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label>Postal code</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control bg-light mb-3" placeholder="Your Postal Code" name="postal_code" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Phone</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control bg-light mb-3" name="phone" required="">
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="btn btn-sm btn-primary text-dark">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

  <!-- begin modal -->
  <div class="modal fade" id="edit-address-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Address Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body" id="edit_modal_body">
          <form class="form-default" role="form" action="#" method="POST">
            <div class="p-3">
              <div class="row">
                <div class="col-md-3">
                  <label>Address</label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control bg-light mb-3" placeholder="Your Address" rows="2" name="address" required="">In nulla officia tot</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Country</label>
                </div>
                <div class="col-md-9">
                  <div class="mb-3">
                    <select class="custom-select w-100 bg-light" name="">
                      <option value="">เลือกพื้นที่</option>
                      <option value="อุดมสุข, อ่อนนุช" selected>อุดมสุข, อ่อนนุช</option>
                      <option value="รามคําแหง">รามคําแหง</option>
                      <option value="มีนบุรี">มีนบุรี</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label>City</label>
                </div>
                <div class="col-md-9">
                  <div class="mb-3">
                    <select class="custom-select w-100 bg-light" name="">
                      <option value="">เลือกพื้นที่</option>
                      <option value="อุดมสุข, อ่อนนุช" selected>อุดมสุข, อ่อนนุช</option>
                      <option value="รามคําแหง">รามคําแหง</option>
                      <option value="มีนบุรี">มีนบุรี</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label>Postal code</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control bg-light mb-3" placeholder="Your Postal Code" value="10310" name="postal_code" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Phone</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control bg-light mb-3" value="0888888888" name="phone" required="">
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="btn btn-sm btn-primary text-dark">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- begin modal -->

  <!-- begin #footer -->
  <?php include('../layouts/inc-footer.php'); ?>
  <!-- end #footer -->

  <?php include('../layouts/inc-script.php'); ?>
  <script>
    $(document).ready(function() {
      $('input:radio[name=taxType]').click(function() {
        checkTaxType();
      });
    });

    function checkBranch(branch) {
      if (branch === "headoffice") {
        $('#branch').val('00000');
        $('.divBranch').hide();
      } else {
        if ($('#branch').val() === '00000') {
          $('#branch').val('');
        }
        $('.divBranch').show();
      }
    }

    function checkTaxType() {
      var isTaxType = $("input[name=taxType]:checked").val();
      if (isTaxType === 'person') {
        $(".divPerson").show();
        $(".divCorporate").hide();
      } else if (isTaxType === 'corporate') {
        $(".divCorporate").show();
        $(".divPerson").hide();
      } else {
        $(".divPerson").hide();
        $(".divCorporate").hide();
      }
    }
  </script>
</body>

</html>