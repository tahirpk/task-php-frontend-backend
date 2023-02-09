@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                   All Applications List:
                   <input id="myInput" type="text" placeholder="Search..">
                </div>

            <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="myTable">
                      @foreach($results as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->first_name }}</td>
                        <td>{{ $data->last_name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->dob }}</td>
                        <td>
                               <a href="{{ url('backend/edit/'.$data->id) }}" class="ml-4  text-sm btn btn-success">Edit</a>
                                |
                              <form method="POST" action="{{ route('destroy',$data->id) }}">
                                        @csrf
                                        <input name="id" type="hidden" value="{{$data->id}}">
                                        <button type="submit" class="btn btn-danger deleted" title='Delete'>Delete</button>
                                    </form> |

                                    <form method="POST" action="{{ route('approval',$data->id) }}">
                                        @csrf
                                        <input name="id" type="hidden" value="{{$data->id}}">
                                        <button type="submit" class="btn btn-warning approved" title='approval'>
                                             {{  $data->is_approved ? "Approved": "Not Approved" }}
                                        </button>
                                    </form>



                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
                  {!! $results->links() !!}
        </div>


          </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });
        $('.deleted').click(function(e) {
            if(!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });

         $('.approved').click(function(e) {
            if(!confirm('Are you sure you want to approved this?')) {
                e.preventDefault();
            }
        });
    });
</script>
@endsection
