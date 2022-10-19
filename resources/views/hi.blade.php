<h1>alhamdu lillah</h1>
@foreach ($data as $row)
    <div> id: {{ $row->id }}, nom: {{ $row->name }} </div>
@endforeach
