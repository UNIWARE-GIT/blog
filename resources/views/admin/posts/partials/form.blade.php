<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post...']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post...', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p><b>Etiquetas</b></p>
    @foreach ($tags as $tag)
        <label class="mx-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    <hr>
    @error('tags')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p><b>Estado:</b></p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>
    <hr>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="row mb-2">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" class="w-full h-72 object-cover object-center"
            src="{{Storage::url($post->image->url)}}" alt="" />
            @else
                <img id="picture" class="w-full h-72 object-cover object-center"
            src="https://crnnoticias.com/wp-content/uploads/2017/03/1-108.jpg" alt="" />
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-control">
            {!! Form::label('file', 'Eliga una imagen:') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam at esse nisi maiores cum sit
                impedit quam commodi inventore ab similique, vero blanditiis recusandae. Vitae dignissimos
                voluptas obcaecati, quam, sint iusto laborum provident, nisi quisquam inventore aut? Minima
                libero dolorum culpa, eius incidunt vitae. Hic pariatur fuga blanditiis repudiandae iure!</p>
        </div>
        @error('file')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
