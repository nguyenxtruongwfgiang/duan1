<div class="page-container">
    <!-- start sidebar menu -->
    <?php include('navbar.php'); ?>
    <!-- end sidebar menu -->
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Students List</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Students List</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <ul class="nav customtab nav-tabs" role="tablist">
                            <li class="nav-item"><a href="#tab1" class="nav-link active" data-bs-toggle="tab">List
                                    View</a></li>
                            <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
                                    View</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-box">
                                            <div class="card-head">
                                                <header>All Students List</header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="add_professor.html" id="addRow" class="btn btn-primary">
                                                                Add New <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Roll No </th>
                                                            <th> Name </th>
                                                            <th> Department </th>
                                                            <th> Mobile </th>
                                                            <th> Email </th>
                                                            <th>Admission Date</th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user1.jpg" alt="">
                                                            </td>
                                                            <td class="left">18</td>
                                                            <td>Rajesh Bhatt</td>
                                                            <td class="left">Mechanical</td>
                                                            <td><a href="tel:4444565756">
                                                                    4444565756 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    rajesh@gmail.com </a></td>
                                                            <td class="left">22 Feb 2010</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user10.jpg" alt="">
                                                            </td>
                                                            <td class="left">5</td>
                                                            <td>Pooja Patel</td>
                                                            <td class="left">Science</td>
                                                            <td><a href="tel:444786876">
                                                                    444786876 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    pooja@gmail.com </a></td>
                                                            <td class="left">27 Aug 2005</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user2.jpg" alt="">
                                                            </td>
                                                            <td class="left">15</td>
                                                            <td>Sarah Smith</td>
                                                            <td class="left">M.C.A.</td>
                                                            <td><a href="tel:44455546456">
                                                                    44455546456 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    sarah@gmail.com </a></td>
                                                            <td class="left">05 Jun 2011</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user3.jpg" alt="">
                                                            </td>
                                                            <td class="left">23</td>
                                                            <td>John Deo</td>
                                                            <td class="left">M.B.B.S.</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    john@gmail.com </a></td>
                                                            <td class="left">15 Feb 2012</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user4.jpg" alt="">
                                                            </td>
                                                            <td class="left">10</td>
                                                            <td>Jay Soni</td>
                                                            <td class="left">Arts</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    kenh@gmail.com </a></td>
                                                            <td class="left">12 Nov 2012</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user5.jpg" alt="">
                                                            </td>
                                                            <td class="left">14</td>
                                                            <td>Jacob Ryan</td>
                                                            <td class="left">Music</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    johnson@gmail.com </a></td>
                                                            <td class="left">03 Dec 2001</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user6.jpg" alt="">
                                                            </td>
                                                            <td class="left">7</td>
                                                            <td>Megha Trivedi</td>
                                                            <td class="left">Commerce</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    megha@gmail.com </a></td>
                                                            <td class="left">17 Mar 2013</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user3.jpg" alt="">
                                                            </td>
                                                            <td class="left">18</td>
                                                            <td>Rajesh</td>
                                                            <td class="left">Civil</td>
                                                            <td><a href="tel:4444565756">
                                                                    4444565756 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    rajesh@gmail.com </a></td>
                                                            <td class="left">22 Feb 2000</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user10.jpg" alt="">
                                                            </td>
                                                            <td class="left">5</td>
                                                            <td>Pooja Patel</td>
                                                            <td class="left">Computer</td>
                                                            <td><a href="tel:444786876">
                                                                    444786876 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    pooja@gmail.com </a></td>
                                                            <td class="left">27 Aug 2005</td>
                                                            <td>
                                                                <a href="edit_student.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user1.jpg" alt="">
                                                            </td>
                                                            <td class="left">18</td>
                                                            <td>Rajesh Bhatt</td>
                                                            <td class="left">Mechanical</td>
                                                            <td><a href="tel:4444565756">
                                                                    4444565756 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    rajesh@gmail.com </a></td>
                                                            <td class="left">22 Feb 2010</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user10.jpg" alt="">
                                                            </td>
                                                            <td class="left">5</td>
                                                            <td>Pooja Patel</td>
                                                            <td class="left">Science</td>
                                                            <td><a href="tel:444786876">
                                                                    444786876 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    pooja@gmail.com </a></td>
                                                            <td class="left">27 Aug 2005</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user2.jpg" alt="">
                                                            </td>
                                                            <td class="left">15</td>
                                                            <td>Sarah Smith</td>
                                                            <td class="left">M.C.A.</td>
                                                            <td><a href="tel:44455546456">
                                                                    44455546456 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    sarah@gmail.com </a></td>
                                                            <td class="left">05 Jun 2011</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user3.jpg" alt="">
                                                            </td>
                                                            <td class="left">23</td>
                                                            <td>John Deo</td>
                                                            <td class="left">M.B.B.S.</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    john@gmail.com </a></td>
                                                            <td class="left">15 Feb 2012</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user4.jpg" alt="">
                                                            </td>
                                                            <td class="left">10</td>
                                                            <td>Jay Soni</td>
                                                            <td class="left">Arts</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    kenh@gmail.com </a></td>
                                                            <td class="left">12 Nov 2012</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user5.jpg" alt="">
                                                            </td>
                                                            <td class="left">14</td>
                                                            <td>Jacob Ryan</td>
                                                            <td class="left">Music</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    johnson@gmail.com </a></td>
                                                            <td class="left">03 Dec 2001</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user6.jpg" alt="">
                                                            </td>
                                                            <td class="left">7</td>
                                                            <td>Megha Trivedi</td>
                                                            <td class="left">Commerce</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    megha@gmail.com </a></td>
                                                            <td class="left">17 Mar 2013</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user1.jpg" alt="">
                                                            </td>
                                                            <td class="left">18</td>
                                                            <td>Rajesh</td>
                                                            <td class="left">Civil</td>
                                                            <td><a href="tel:4444565756">
                                                                    4444565756 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    rajesh@gmail.com </a></td>
                                                            <td class="left">22 Feb 2000</td>
                                                            <td>
                                                                <a href="edit_professor.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="view/admin/assets/img/user/user10.jpg" alt="">
                                                            </td>
                                                            <td class="left">5</td>
                                                            <td>Pooja Patel</td>
                                                            <td class="left">Computer</td>
                                                            <td><a href="tel:444786876">
                                                                    444786876 </a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    pooja@gmail.com </a></td>
                                                            <td class="left">27 Aug 2005</td>
                                                            <td>
                                                                <a href="edit_student.html" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user10.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Pooja Patel </div>
                                                        <div class="name-center"> Science </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user1.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Rajesh </div>
                                                        <div class="name-center"> Mathematics </div>
                                                    </div>
                                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
                                                    </p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user2.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Sarah Smith </div>
                                                        <div class="name-center"> Commerce </div>
                                                    </div>
                                                    <p>456, Estern evenue, Courtage area, <br />New York</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user3.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">John Deo </div>
                                                        <div class="name-center"> Arts </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user4.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Jay Soni </div>
                                                        <div class="name-center"> M.B.A. </div>
                                                    </div>
                                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
                                                    </p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user5.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Jacob Ryan </div>
                                                        <div class="name-center"> Urology </div>
                                                    </div>
                                                    <p>456, Estern evenue, Courtage area, <br />New York</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user6.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Megha Trivedi </div>
                                                        <div class="name-center"> Electrical </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user1.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Rajesh </div>
                                                        <div class="name-center"> Mathematics </div>
                                                    </div>
                                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
                                                    </p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user2.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Sarah Smith </div>
                                                        <div class="name-center"> Commerce </div>
                                                    </div>
                                                    <p>456, Estern evenue, Courtage area, <br />New York</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user10.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Pooja Patel </div>
                                                        <div class="name-center"> Science </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user1.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Rajesh </div>
                                                        <div class="name-center"> Mathematics </div>
                                                    </div>
                                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
                                                    </p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="view/admin/assets/img/user/user3.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">John Deo </div>
                                                        <div class="name-center"> Arts </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
    <!-- start chat sidebar -->
    <div class="chat-sidebar-container" data-close-on-body-click="false">
        <div class="chat-sidebar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i class="material-icons">chat</i>Chat
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i class="material-icons">settings</i>
                        Settings
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Start User Chat -->
                <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                    <div class="chat-sidebar-list">
                        <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
                            <div class="chat-header">
                                <h5 class="list-heading">Online</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media"><img class="media-object" src="view/admin/assets/img/user/user3.jpg" width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">John Deo</h5>
                                        <div class="media-heading-sub">Spine Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">5</span>
                                    </div> <img class="media-object" src="view/admin/assets/img/user/user1.jpg" width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Rajesh</h5>
                                        <div class="media-heading-sub">Director</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="view/admin/assets/img/user/user5.jpg" width="35" height="35" alt="...">
                                    <i class="away dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jacob Ryan</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">8</span>
                                    </div> <img class="media-object" src="view/admin/assets/img/user/user4.jpg" width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Kehn Anderson</h5>
                                        <div class="media-heading-sub">CEO</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="view/admin/assets/img/user/user2.jpg" width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Sarah Smith</h5>
                                        <div class="media-heading-sub">Commerce</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="view/admin/assets/img/user/user7.jpg" width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Vlad Cardella</h5>
                                        <div class="media-heading-sub">Civil</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-header">
                                <h5 class="list-heading">Offline</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">4</span>
                                    </div> <img class="media-object" src="view/admin/assets/img/user/user6.jpg" width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jennifer Maklen</h5>
                                        <div class="media-heading-sub">Engineering</div>
                                        <div class="media-heading-small">Last seen 01:20 AM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="view/admin/assets/img/user/user8.jpg" width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lina Smith</h5>
                                        <div class="media-heading-sub">Science</div>
                                        <div class="media-heading-small">Last seen 11:14 PM</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">9</span>
                                    </div> <img class="media-object" src="view/admin/assets/img/user/user9.jpg" width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jeff Adam</h5>
                                        <div class="media-heading-sub">Music</div>
                                        <div class="media-heading-small">Last seen 3:31 PM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="view/admin/assets/img/user/user10.jpg" width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Anjelina Cardella</h5>
                                        <div class="media-heading-sub">Physiotherapist</div>
                                        <div class="media-heading-small">Last seen 7:45 PM</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End User Chat -->
                <!-- Start Setting Panel -->
                <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                    <div class="chat-sidebar-settings-list slimscroll-style">
                        <div class="chat-header">
                            <h5 class="list-heading">Layout Settings</h5>
                        </div>
                        <div class="chatpane inner-content ">
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Sidebar Position</div>
                                    <div class="setting-set">
                                        <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Header</div>
                                    <div class="setting-set">
                                        <select class="page-header-option form-control input-inline input-sm input-small ">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Footer</div>
                                    <div class="setting-set">
                                        <select class="page-footer-option form-control input-inline input-sm input-small ">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">Account Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Notifications</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
                                                <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Show Online</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
                                                <input type="checkbox" id="switch-7" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Status</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
                                                <input type="checkbox" id="switch-2" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">2 Steps Verification</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                                                <input type="checkbox" id="switch-3" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">General Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Location</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
                                                <input type="checkbox" id="switch-4" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Save Histry</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
                                                <input type="checkbox" id="switch-5" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Auto Updates</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
                                                <input type="checkbox" id="switch-6" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end chat sidebar -->
</div>