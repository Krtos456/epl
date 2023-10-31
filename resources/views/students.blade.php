@include('navigation')
<div>
    <div class="body">
        <table>
            <tr>
                <td>
                    id
                </td>
                <td>FirstName</td>
                <td>LastName</td>
            </tr>
            
            @foreach($students as $student)
            <tr>
                <td class >{{$student->idstudents}}</td> 
                <td>{{$student->FirstName}}</td>
                <td>{{$student->LastName}}</td>
            </tr>
            @endforeach
           
        </table>
    </div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>
