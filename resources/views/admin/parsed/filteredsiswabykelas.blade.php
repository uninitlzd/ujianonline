@foreach($data as $d)
<tr>
    <td>{{$d->NISN}}</td>
    <td>{{$d->noInduk}}</td>
    <td>{{$d->nama}}</td>
    <td class="text-center">
        <div class="btn-group" role="group" aria-label="...">
            <a href="{{route('getProfileSiswa', array('nisn' => $d->NISN))}}" class="btn btn-xs btn-default">
                <span class="glyphicon glyphicon-zoom-in"></span>
            </a>
            <a href="{{route('editDaftarSiswa', array('nisn' => $d->NISN))}}" class="btn btn-xs btn-default">
                <span class="glyphicon glyphicon-edit"></span>
            </a>
        </div>
    </td>
    <td>
        <form action="daftarsiswa/delete/{{$d->NISN}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            {{csrf_field()}}
            <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
        </form>
    </td>
</tr>
@endforeach
