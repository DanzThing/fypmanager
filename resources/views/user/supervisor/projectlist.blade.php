<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.admin.admincss')
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('user.supervisor.svnav')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    @include('user.admin.admintop')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Project List</h1>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-body">
                                <h4 class="card-title">Latest Sales</h4>
                            </div> -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Title</th>
                                            
                                            <th class="border-top-0">Student</th>
                                            <th class="border-top-0">Supervisor</th>
                                            <th class="border-top-0">Examiner</th>
                                            <th class="border-top-0">Examiner</th>
                                            <th class="border-top-0">Start Date</th>
                                            <th class="border-top-0">End Date</th>
                                            <th class="border-top-0">Duration</th>
                                            <th class="border-top-0">Progress</th>
                                            <th class="border-top-0">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list as $x)
                                        <tr>
                                            <td class="txt-oflo"><a href={{"upd/".$x['id']}}>{{$x['title']}}</a></td>
                                            
                                            <td class="txt-oflo">{{$x['student']}}</td>
                                            <td class="txt-oflo">{{$x['supervisor']}}</td>
                                            <td class="txt-oflo">{{$x['examiner1']}}</td>
                                            <td class="txt-oflo">{{$x['examiner2']}}</td>
                                            <td class="txt-oflo">{{$x['startdate']}}</td>
                                            <td class="txt-oflo">{{$x['enddate']}}</td>
                                            <td class="txt-oflo">{{$x['duration']}} month</td>
                                            <td class="txt-oflo">{{$x['progress']}}</td>
                                            <td class="txt-oflo">{{$x['status']}}</td>
                                            <!-- <td><span class="label label-success label-rounded"></span></td> -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <span>{{$list->links()}}</span>
                                <style>
                                    .w-5{
                                        display: none
                                    }
                                </style>
                            </div>
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

    @include('user.userjs')

</body>
</html>