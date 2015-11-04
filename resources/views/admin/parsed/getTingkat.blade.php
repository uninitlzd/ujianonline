@foreach($data as $d)
    <option value="{{$d->kelas}}" <?php if($kelasSiswa->kelas == $d->kelas) { echo "selected";} ?>>{{$d->kelas}}</option>
@endforeach
