<div>
    <table class="table table-success table-striped">
       <thead> 
        <tr> 
            <th>Name</th>
            <th>Email </th>
            <th>Email verified Date</th>
            <th>Password</th>
        </tr>
    </thead>
       <tbody> 
        @foreach ($companies as $data_key => $item)
        @foreach($item as $key => $val )
        <tr> 
            <td>{{$val->name}}</td>
            <td>{{$val->email}} </td>
            <td>{{$val->email_verified_at}}</td>
            <td>{{$val->password}}</td>
        </tr>
        @endforeach
        @endforeach
       </tbody>
      </table>
</div>