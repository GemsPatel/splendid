<table>
    <thead>
        <tr>
            <th> File Name </th>
            <th> Serial Number </th>
            <th> Folder Structure </th>
            <th> File Path </th>
        </tr>
    </thead>
    <tbody>
        @if(count($data) > 0)
            @foreach ($data as $k=>$ar)
            <tr>
                <td> {{$ar['file_name']}} </td>
                <td> {{$ar['serial_number']}} </td>
                <td> {{$ar['folder_path']}} </td>
                <td> {{$ar['file_path']}} </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>