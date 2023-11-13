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
            
            @foreach($modules as $module)
            <tr>
                <td class ><a  >{{$module->Id}}</a></td> 
                <td>{{$module->programe}}</td>
                <td>{{$module->moduleName}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>
