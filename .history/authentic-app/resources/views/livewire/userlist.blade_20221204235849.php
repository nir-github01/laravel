<div>
<table>
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>EMAIL VERIFIED</th>
</tr>
</thead>

<tbody>
@foreach($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>{{$user->email_verified_at}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
