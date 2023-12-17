@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                {{-- <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Content List</h4>
                    <a href="{{route('admin.content.create')}}" class="btn btn-primary ms-auto">Add New Content</a>
                    
                </div><!-- end card header --> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    
                                    <th scope="col">User Name</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Tramsaction ID</th>
                                    <th scope="col">Status</th> 
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $list)
                                    <input type="hidden" id="record_id_{{ $list->id }}" name="record_id" value="{{ $list->id }}">
                                    <tr>
                                        <td><a href="#" class="fw-semibold">{{$list->user_name}}</a></td>
                                        <td>{{$list->user_id}}</td>
                                        <td>{{$list->txn_id}}</td>
                                        <td> 
                                            <i id="StatusShow_{{ $list->id }}" class="@php if($list->status==1){echo 'ri-checkbox-circle-line align-middle text-success';}else{ echo 'ri-close-circle-line align-middle text-danger';} @endphp"></i>@php if($list->status==1){ echo "Approved";}else{ echo "Pending";} @endphp
                                        </td>

                                        <td> 
                                            <div class="form-check form-switch">
                                                
                                                <input class="form-check-input" type="checkbox" role="switch" @php if($list->status==1){echo 'checked';}else{ echo '';} @endphp onclick="SwitchStatus({{ $list->id }})">
                                                <label class="form-check-label" for="SwitchCheck2"></label>
                                            </div>
                                        </td>

                                    </tr>
                                    
                                @endforeach
                               
                               
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                   
                                </tr>
                            </tfoot>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
                <!-- end table responsive -->
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="jquery-3.7.1.min.js"></script>
<script>
    // CKEDITOR.replace('description');
    CKEDITOR.replace('meta_description');

</script>

<script>

    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif


    @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
    @endif


    @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
    @endif


    @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
    @endif


</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
{{-- <script>
    $(document).ready(function(){
        
        $('#SwitchStatus_{{ $list->id }}').on('input', function() {   
            const SwitchStatus = $(this).val();
            let id = $('#record_id').val();
            SwitchStatusAction(SwitchStatus,id)
       });
                function SwitchStatusAction(SwitchStatus,id)
            {
               
                $.ajax({
                    type: "POST",
                    url: '{{ route('admin.update.status') }}',
                    data: 
                    {SwitchStatus:SwitchStatus,
                        id:id
                        , _token: '{{ csrf_token() }}'},
                    success: function(data) {
                        console.log(data);
                        
                        
                            if (data.code == 200) {
                                $('#StatusShow_{{ $list->id }}').removeClass('ri-close-circle-line align-middle text-danger').addClass('ri-checkbox-circle-line align-middle text-success');
                                                
                            }
                        
                        
                    }
                    
                });
            
            }

        });

</script> --}}
{{-- <script>
    $(document).ready(function(){
    $('[id^=SwitchStatus_]').on('input', function() {   
        const SwitchStatus = $(this).prop('checked');
        let id = $(this).closest('tr').find('[id^=record_id]').val();
        SwitchStatusAction(SwitchStatus, id);
    });

    function SwitchStatusAction(SwitchStatus, id) {
        $.ajax({
            type: "POST",
            url: '{{ route('admin.update.status') }}',
            data: {
                SwitchStatus: SwitchStatus,
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                console.log(data);
                if (data.code == 200) {
                    $('#StatusShow_' + id).removeClass('ri-close-circle-line align-middle text-danger').addClass('ri-checkbox-circle-line align-middle text-success');
                }
            },
            error: function(error) {
                console.error('Error updating status: ', error);
            }
        });
    }
    });

</script> --}}
<script>
    function SwitchStatus(id) {
        
        var id=id
        $.ajax({
                    type: "POST",
                    url: '{{ route('admin.update.status') }}',
                    data: 
                    {
                        id:id, 
                        _token: '{{ csrf_token() }}'},
                        success: function(data) {
                        // console.log(data);
                        if (data.code == 200) {
                            $('#StatusShow_' + id).removeClass('ri-close-circle-line align-middle text-danger').addClass('ri-checkbox-circle-line align-middle text-success');
                                            
                        }if (data.code == 404){
                            
                            $('#StatusShow_' + id).removeClass('ri-checkbox-circle-line align-middle text-success').addClass('ri-close-circle-line align-middle text-danger');

                        }
                        location.reload();
                        
                        
                    }
                    
                });
    }

</script>

@endsection