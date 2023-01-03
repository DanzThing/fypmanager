<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../../admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('user.admin.adminnav')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Update Project</h1>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <form action="/edita" method="post" class="form-horizontal mt-4">
                                @csrf

                                <input type="hidden" name="id" value="{{$disp['id']}}">

                                <div class="form-group" style="display:none">
                                    <label>Project Type</label>
                                <div class="form-check">
                                    <input type="hidden" name="projecttype" class="form-check-input" value="{{$disp['projecttype']}}">
                                    <label class="form-check-label mb-0">Development Project</label>
                                        </div>
                                <div class="form-check">
                                    <input type="hidden" name="projecttype" class="form-check-input" value="{{$disp['projecttype']}}">
                                    <label class="form-check-label mb-0">Research Project</label>
                                        </div>
                                </div>

                            <div class="form-group col-7">
                                    <label>Project Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$disp['title']}}" required>
                                </div>
                                <div class="form-group col-5">
                                    <label>Student Name</label>
                                    <input type="text" name="student" class="form-control" value="{{$disp['student']}}" required>
                                </div>
                                <div class="form-group col-5">
                                    <label>Supervisor Name</label>
                                    <input type="text" name="supervisor" class="form-control" value="{{$disp['supervisor']}}" required>
                                </div>
                                <div class="form-group col-5">
                                    <label>Examiner 1 Name</label>
                                    <input type="text" name="examiner1" class="form-control" value="{{$disp['examiner1']}}">
                                </div>

                                <div class="form-group col-5">
                                    <label>Examiner 2 Name</label>
                                    <input type="text" name="examiner2" class="form-control" value="{{$disp['examiner2']}}">
                                </div>

                                <div class="col-5 form-group">
                                    <label>Start Date</label>
                                    <input type="date" name="startdate" class="form-control" value="{{$disp['startdate']}}" required>
                                </div>

                                <div class="col-5 form-group">
                                    <label>End Date</label>
                                    <input type="date" name="enddate" class="form-control" value="{{$disp['enddate']}}" required>
                                </div>
                                <div class="form-group col-5">
                                    <label>Duration(Month)</label>
                                    <input type="int" name="duration" class="form-control" value="{{$disp['duration']}}" required>
                                </div>
                               
                            
                                <div class="form-group">
                                    <label>Progress</label>
                                    <select name="progress" class="form-control col-5" value="{{$disp['progress']}}" required>
                                        <option value="">Choose...</option>
                                        <option value="Milestone 1">Milestone 1</option>
                                        <option value="Milestone 2">Milestone 2</option>
                                        <option value="Final Report">Final Report</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control col-5" value="{{$disp['progress']}}" required>
                                        <option value="">Choose...</option>
                                        <option value="On Track">On track</option>
                                        <option value="Delayed">Delayed</option>
                                        <option value="Extended">Extended</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Update Project</button>
                                        </div>
                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('user.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

        <!-- Bootstrap core JavaScript-->
        <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/chart-area-demo.js"></script>
    <script src="admin/js/demo/chart-pie-demo.js"></script>

</body>
</html>