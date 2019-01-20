@extends('layout.layout')



@section('body')

    <div>
        <h4>List of Contacts</h4>
    </div>
    <table id="myTable" class="table hover" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>birth date</th>
            <th>name</th>
            <th>city</th>
            <th>email</th>
            <th>phone number</th>
            <th>company</th>
            <th>action</th>
        </tr>
        </thead>

    </table>

@endsection



@section('script')

    <script>

        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/contactsList') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'birth_date', name: 'birth_date' },
                { data: 'first_name', name: 'first_name' },
                { data: 'city', name: 'city' },
                { data: 'email', name: 'email' },
                { data: 'phone_number', name: 'phone_number' },
                { data: 'company_name', name: 'company_name' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });



    </script>

@endsection