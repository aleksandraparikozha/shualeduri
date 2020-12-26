@extends('home')

    <table>
        <th>
            Name
        </th>
        <th>
            Surname
        </th>
        <th>
            Position
        </th>
        <th>
            Phone
        </th>
        <th>
            Status
        </th>
        @section('content')
        @foreach ($employees as $employee)
        <tr>
            <td>
                <{{$employee->name}}
            </td>
            <td>
                <{{$employee->surname}}
            </td>
            <td>
                <{{$employee->postion}}
            </td>
            <td>
                <{{$employee->phone}}
            </td>
            <td>
                <{{$employee->is_hired}}
            </td>

        </tr>
    @csrf

@endforeach</table>
@endsection
