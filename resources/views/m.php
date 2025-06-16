@foreach ($makanan as $item)
    <div>
        <h2>{{ $item->Nama_Makanan }}</h2>
        <p>{{ $item->Deskripsi }}</p>
    </div>
@endforeach
