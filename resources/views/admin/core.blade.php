<!DOCTYPE html>
<html lang="en">
	@include('fragments/admin/head')
	<body>
<!-- header -->
@include('fragments/admin/navigation')
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        @include('fragments/admin/sidebar')
        <div class="col-sm-9">
            @yield('main')
        </div>
    </div>
</div>

<!-- /Main -->
@include('fragments/admin/footer')


<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
	<!-- script references -->

	</body>


</html>
