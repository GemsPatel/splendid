@include('admin.elements.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                              <h1>Blog Listing</h1>
                        </div>
                        <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active">Blog</li>
                              </ol>
                        </div>
                  </div>
            </div><!-- /.container-fluid -->
      </section>

      <section class="content-header">
            <div class="container-fluid">
                  <div class="row">
                        <div class="col-sm-12">
                              @if(Session::has('message'))
                                    <p class="alert alert-info mb-0">{{ Session::get('message') }}</p>
                              @endif
                        </div>
                  </div>
            </div>
      </section>

      <!-- Main content -->
      <section class="content">
            <div class="container-fluid">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="card">
                                    <div class="card-header text-right">
                                          <a href="{{route('admin.blogs.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Blog</a>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive">
                                          <table id="blogs" class="table table-bordered table-striped">
                                                <thead>
                                                      <tr>
                                                        <th>#</th>
                                                        <th>Blog</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      @forelse ($dataArr as $ar)
                                                            <tr id="row_{{$ar->id}}" class="role_row">
                                                                <td>{{ $ar->id }}</td>
                                                                <td>{{ $ar->title }}</td>
                                                                <td>{{ $ar->category->title }}</td>
                                                                <td>
                                                                    @if( $ar->status == 0 )
                                                                            <span class="badge badge-pill badge-warning"> Disabled </span>
                                                                    @else
                                                                            <span class="badge badge-pill badge-success"> Enabled </span>
                                                                    @endif
                                                                </td>
                                                                <td class="d-flex">
                                                                    <div class="pr-2">
                                                                        <a href="{{ route('admin.blogs.edit', [$ar->id]) }}" class="btn btn-primary btn-size p-0 d-flex align-items-center justify-content-center"><i class="fas fa-pencil-alt fa-sm" aria-hidden="true"></i></a>
                                                                    </div>
                                                                    <div class="pr-2 d-none">
                                                                        {{-- <a href="{{ route('admin.blogs.view', [$ar->id]) }}" class="btn btn-primary btn-size p-0 d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;"><i class="fas fa-eye fa-sm" aria-hidden="true"></i></a> --}}
                                                                    </div>
                                                                    <div class="pr-2">
                                                                        {{-- <form action="{{ route('admin.blogs.delete', [$ar->id] ) }}" method="POST">
                                                                            @method('DELETE')
                                                                            @csrf --}}
                                                                            <button class="btn btn-danger btn-size p-0 d-flex align-items-center justify-content-center delete-record" data-id="{{$ar->id}}" data-title="{{ $ar->title }}" data-segment="blogs"><i class="fa fa-trash fa-sm" aria-hidden="true"></i></button>
                                                                        {{-- </form> --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                      @empty
                                                            <tr class="text-center">
                                                                  <td colspan="6">There is no role available.</td>
                                                            </tr>
                                                      @endforelse
                                                </tbody>
                                                <tfoot class="d-none">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Blog</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                          </table>
                                    </div>
                                    <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                        </div>
                        <!-- /.col -->
                  </div>
                  <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Page specific script -->
<script>
      $(function () {
            $("#blogs").DataTable({
                  "responsive": true, "lengthChange": false, "autoWidth": true,
                  // "buttons": ["csv", "excel", "pdf"]
                  //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#blogs_wrapper .col-md-6:eq(0)');
            setSearchPaginationPlace( "#blogs_wrapper" );
      });
</script>
@include('admin.elements.footer')
